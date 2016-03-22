<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get_goods_main($item, $where, $order) //получаем данные о товарах для Главной страницы
	{	
		$this->db->select('g.id, c.cat_name, g.name, g.description, g.price, g.qty, g.additional, g.photo, g.spec, g.sold');
		$this->db->from('goods as g');
		$this->db->join('categories as c', 'g.cat_id = c.id');
		$this->db->where($item, $where);
		$this->db->limit(4);
		$this->db->order_by('g.sold', $order);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function get_goods_by_category($id) //получаем данные о товарах из определенной категории
	{
		$this->db->select('g.id, c.cat_name, g.name, g.description, g.price, g.qty, g.additional, g.photo, g.spec, g.sold');
		$this->db->from('goods as g');
		$this->db->join('categories as c', 'g.cat_id = c.id');
		$this->db->where('cat_id', $id);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function insert_customer($data) //добавляем данные о покупателе
	{
		$this->db->insert('customers', $data);
		$id = $this->db->insert_id();

		return (isset($id)) ? $id : FALSE;		
	}

	public function insert_order($data) //добавляем заказ
	{
		$this->db->insert('order', $data);
		$id = $this->db->insert_id();

		return (isset($id)) ? $id : FALSE;
	}

	public function insert_order_info($data) //добавляем информацию о заказе
	{
		$this->db->insert('order_info', $data);
	}
}
