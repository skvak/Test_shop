<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        $this->load->model('admin_model');
        $this->load->library('cart');
        $this->load->library('twig');
    }

    //Start page
    public function index()
    {
        $data['title'] = 'Ларёк - микромагазин для больших покупок';
        $data['categories'] = $this->admin_model->get('categories');
        $data['specials'] = $this->main_model->get_goods_main('spec', '1', 'RANDOM'); 
        $data['top'] = $this->main_model->get_goods_main('sold >', '0', 'DESC');
        echo $this->twig->render('main', $data);
    }

    public function category($id)
    {
        $data['categories'] = $this->admin_model->get('categories');
        $data['goods'] = $this->main_model->get_goods_by_category($id);
        $data['title'] = 'Ларёк - ';

        echo $this->twig->render('main', $data);
    }

    public function product($id)
    {
        $data['title'] = 'Ларёк - Товар';
        $data['categories'] = $this->admin_model->get('categories');
        $data['product'] = $this->admin_model->get_goods($id);

        echo $this->twig->render('product', $data);
    }

    public function cart()
    {
        $data['title'] = 'Ларёк - Корзина';
        $data['categories'] = $this->admin_model->get('categories');

        echo $this->twig->render('shop_cart', $data);
    }

    public function create_order()
    {
        $data['title'] = 'Ларёк - Оформление заказа';
        $data['categories'] = $this->admin_model->get('categories');

        echo $this->twig->render('create_order', $data);
    }
}