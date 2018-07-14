<?php 
/**
 * 
 */
class Dbs_login extends CI_Model
{
	//fungsi untuk mengecek apakah didalam tabel ada data atau tidak
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
}
 ?>