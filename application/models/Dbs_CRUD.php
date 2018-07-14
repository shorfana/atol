<?php 
/**
 * 
 */
class Dbs_CRUD extends CI_Model
{
	function insert($data,$table){
		$this->db->insert($table,$data);
		if ($this->db->affected_rows()>0) {
			return true;
		}else{
			return false;
		}
	}

	function update($data,$table,$where,$value){
		$this->db->where($where,$value);
		$this->db->update($table,$data);
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	function delete($where,$value,$table){
		$this->db->where($where,$value);
		$this->db->delete($table);
	}
}
 ?>