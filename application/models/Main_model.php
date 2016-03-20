<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get_goods_main($item, $where, $order) 
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

	public function get_goods_by_category($id) 
	{
		$this->db->select('g.id, c.cat_name, g.name, g.description, g.price, g.qty, g.additional, g.photo, g.spec, g.sold');
		$this->db->from('goods as g');
		$this->db->join('categories as c', 'g.cat_id = c.id');
		$this->db->where('cat_id', $id);
		$query = $this->db->get();

		return $query->result_array();
	}
}
