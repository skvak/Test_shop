<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->library('twig');
    }

    public function index($data = '') //Главная страница админ панели - информация о заказах
    {
        $data['title'] = 'Админ панель - Главная - Заказы';
        $data['orders'] = $this->admin_model->get_orders();

        echo $this->twig->render('admin_main', $data);
    }

    public function categories($data = '') //просмотр и управление категориями товаров
    {
        $data['title'] = 'Админ панель - Категории';
        $data['table'] = 'categories';

        $data['categories'] = $this->admin_model->get($data['table']);

        echo $this->twig->render('admin_categories', $data);
    }

    public function add_category() //добавление категории
    {
        $data['cat_name'] = $this->input->post('cat');
        $data['cat_desc'] = $this->input->post('description');
        $table = 'categories';

        if ($this->admin_model->add($table, $data) === false) 
        {
            $data['info'] = 'Ошибка записи в БД';
            $this->categories($data);
        }
        $data['info'] = 'Категория успешно добавлена в БД';
        $this->categories($data);
    }

    public function goods($data = '') //просмотр и управление товарами
    {
        $data['title'] = 'Админ панель - Товары';
        $data['categories'] = $this->admin_model->get('categories');
        $data['goods'] = $this->admin_model->get_goods();
        $data['table'] = 'goods';

        echo $this->twig->render('admin_goods', $data);
    }

    public function add_product() //добавление товара
    {
        $data['cat_id'] = $this->input->post('cat_id');
        $data['name'] = $this->input->post('name');
        $data['description'] = $this->input->post('description');
        $data['price'] = $this->input->post('price');
        $data['qty'] = $this->input->post('qty');
        $data['additional'] = $this->input->post('additional');
        $data['photo'] = $this->input->post('photo');
        $data['spec'] = $this->input->post('spec');

        $table = 'goods';

        if ($this->admin_model->add($table, $data) === false) 
        {
            $data['info'] = 'Ошибка записи в БД';
            $this->goods($data);
        }
        $data['info'] = 'Товар успешно добавлен в БД';
        $this->goods($data);   
    }

    public function delete($table, $id) //удаление товара, категории, заказа
    {
        if ($this->admin_model->delete_data($id, $table)) 
        {
            // item delete ok
            $data['info'] = 'Запись успешно удалена';
            $this->{$table}($data);    
        } 
        
        else 
        {
            // item delete failed, this should never happen
            $data['info'] = 'Что-то пошло не так';
            $this->{$table}($data); 
        }
    }

    public function order($data = '') //просмотр заказов - переходит на Главную
    {
        $this->index($data);
    }

    public function change_status($table, $id) //изменение статуса заказа
    {
        if ($this->admin_model->change_status($id, $table)) 
        {
            $data['info'] = 'Статус заказа успешно изменен';
            $this->{$table}($data);    
        } 
        
        else 
        {
            $data['info'] = 'Что-то пошло не так';
            $this->{$table}($data); 
        }
    }
}