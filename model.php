<?php 
 
class model extends CI_Model{
	function tampil_data(){
		return $this->db->get('menumakanan');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}