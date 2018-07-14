<?php 
/**
 * 
 */
class Admin_Dinas extends CI_Controller
{
	public function __construct(){
    	parent::__construct();
    	//Codeigniter : Write Less Do More
    	// $this->load->model('Dbslogin');
    	// $this->load->helper('url');
        if ($this->session->userdata('status')!='login') {
            redirect(base_url()."Login");
        }
    }	
}
 ?>