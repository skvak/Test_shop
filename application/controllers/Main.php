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

    public function index($data = '') //Главная страница
    {
        $data['title'] = 'Ларёк - микромагазин для больших покупок';
        $data['current_url'] = current_url();
        $data['categories'] = $this->admin_model->get('categories');
        $data['specials'] = $this->main_model->get_goods_main('spec', '1', 'RANDOM'); 
        $data['top'] = $this->main_model->get_goods_main('sold >', '0', 'DESC');

        $cart = $this->cart->contents();
        $data['cart_summary'] = $this->_cart_summary($cart);

        echo $this->twig->render('main', $data);
    }

    public function category($id) //просмотр страницы категорий
    {
        $data['title'] = 'Ларёк - ';
        $data['current_url'] = current_url();
        $data['categories'] = $this->admin_model->get('categories');
        $data['goods'] = $this->main_model->get_goods_by_category($id);

        $cart = $this->cart->contents();
        $data['cart_summary'] = $this->_cart_summary($cart);

        echo $this->twig->render('main', $data);
    }

    public function product($id) //просмотр страницы Товара
    {
        $data['title'] = 'Ларёк - Товар';
        $data['current_url'] = current_url();
        $data['categories'] = $this->admin_model->get('categories');
        $data['product'] = $this->admin_model->get_goods($id);

        $cart = $this->cart->contents();
        $data['cart_summary'] = $this->_cart_summary($cart);

        echo $this->twig->render('product', $data);
    }

    public function cart() //просмотр корзины
    {
        $data['title'] = 'Ларёк - Корзина';
        $data['categories'] = $this->admin_model->get('categories');

        $cart = $this->cart->contents();
        $data['cart'] = $this->cart->contents();
        $data['cart_summary'] = $this->_cart_summary($cart);

        echo $this->twig->render('shop_cart', $data);
    }

    public function add_to_cart() //добавление товара в корзину
    {
        $data['title'] = 'Ларёк - Корзина';
        $data['categories'] = $this->admin_model->get('categories');
        $id = $this->input->post('id');

        $insert_data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'qty' => $this->input->post('qty'),);
        
        $this->cart->insert($insert_data);

        $this->product($id);
    }

    public function remove_from_cart($rowid) //удаление товара из корзины
    {
        if ($rowid==="all")
        {
            $this->cart->destroy();
        }
        else
        {
            $data = array(
                'rowid'   => $rowid,
                'qty'     => 0
            );

            $this->cart->update($data);
        }
        
        $this->cart();
    }

    private function _cart_summary($cart) //подсчет количества товаров и суммы для отображения состояния корзины
    {
        $amt = 0;
        $sum = 0;

        foreach ($cart as $value) 
        {
            $sum = $sum + $value['subtotal'];
            $amt = $amt + $value['qty'];
        }

        $data = array(
                'amt' => $amt,
                'sum' => $sum,
            );

        return $data;
    }

    public function create_order() //создание заказа
    {
        $data['title'] = 'Ларёк - Оформление заказа';
        $data['categories'] = $this->admin_model->get('categories');

        $cart = $this->cart->contents();
        $data['cart_summary'] = $this->_cart_summary($cart);

        echo $this->twig->render('create_order', $data);
    }

    public function save_order() //запись заказа в БД
    {
        $cart = $this->cart->contents();
        $data['cart_summary'] = $this->_cart_summary($cart);

        $customer = array(
            'name' => $this->input->post('name'),
            'surname' => $this->input->post('surname'),
            'email' => $this->input->post('email'),
            'tel' => $this->input->post('tel'),
            'address' => $this->input->post('address'),
            'pay_meth' => $this->input->post('pay_meth'),
            'additional' => $this->input->post('additional'),
        );

        $customer_id = $this->main_model->insert_customer($customer);

        $order = array(
            'sum' => $data['cart_summary']['sum'],
            'customer_id' => $customer_id,
            'status' => '0',
        );      

        $order_id = $this->main_model->insert_order($order);
        
        if ($cart):
            foreach ($cart as $item):
                $order_info = array(
                    'order_id' => $order_id,
                    'product_id' => $item['id'],
                    'qty' => $item['qty'],
                    'price' => $item['price']
                );      
                
                $this->main_model->insert_order_info($order_info);
            endforeach;
        endif;
        
        $data['info'] = 'Заказ успешно оформлен';

        $this->cart->destroy();

        $this->index($data);
    }
}