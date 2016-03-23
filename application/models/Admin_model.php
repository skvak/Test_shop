<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_orders() //получаем данные заказа из трех таблиц, и объединяем поле товаров в строку
	{
		$this->db->select('o.id, o.order_create, GROUP_CONCAT(g.name) AS prod, o.sum, c.name, c.surname, c.tel, c.email, c.address, c.additional, c.pay_meth, o.status');
		$this->db->from('order as o');
		$this->db->join('order_info as oi', 'o.id = oi.order_id');
		$this->db->join('customers as c', 'c.id = o.customer_id');
		$this->db->join('goods as g', 'g.id = oi.product_id');
		$this->db->group_by('o.id');
		$query = $this->db->get();

		return $query->result_array();
	} 

	public function add($table, $data) //добавляем данные в таблицу
	{
		if ($this->db->insert($table, $data)) 
		{
			return TRUE;
		}
		
		return FALSE;
	}

	public function get($table) //получаем все данные из таблицы
	{
		$this->db->from($table);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function get_goods($id = '') //получаем данные о товаре с определенным id
	{
		$this->db->select('g.id, c.cat_name, g.name, g.description, g.price, g.qty, g.additional, g.photo, g.spec, g.sold');
		$this->db->from('goods as g');
		$this->db->join('categories as c', 'g.cat_id = c.id');
		if ($id != null) {
			$this->db->where('g.id', $id);
		}
		$query = $this->db->get();

		return $query->result_array();
	}

	public function delete_data($id, $table) //удаляем данные из таблицы
	{
		$this->db->from($table);
		$this->db->where('id', $id);
		$query = $this->db->delete();
		
		return TRUE;
	}

	public function change_status($id, $table) //меняем статус заказа
	{
		$data = array('status' => '1',);
		$this->db->where('id', $id);
		$this->db->update($table, $data);

		return TRUE;
	}
}