<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Admin_model class.
 * 
 * @extends CI_Model
 */
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

	public function add($table, $data) 
	{
		if ($this->db->insert($table, $data)) 
		{
			return TRUE;
		}
		
		return FALSE;
	}

	public function get($table) 
	{
		$this->db->from($table);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function get_goods($id = '') 
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

	public function delete_data($id, $table)
	{
		//delete data
		$this->db->from($table);
		$this->db->where('id', $id);
		$query = $this->db->delete();
		
		return TRUE;
	}
}