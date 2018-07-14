<?php 
/**
 * 
 */
class Login extends CI_Controller
{
	public function __construct(){
    	parent::__construct();

    	//Codeigniter : Write Less Do More
    	$this->load->model('Dbs_login');
    	$this->load->helper('url');
   
    }

    function index(){

    }	

    function login_super_admin(){
    	$this->load->view('superadmin/login_sadmin');
    }

    //fungsi untuk proses login super admin
    function log_superadmin(){
    	$username_sadmin=$this->input->post('username_sadmin');
    	$password=$this->input->post('password');
    	$where=array(
    		'username_sadmin' => $username_sadmin,
    		'password' => md5($password)
    	);
    	$cek = $this->Dbs_login->cek_login("super_admin",$where);
    	if($cek>0){
    		$data_session = array(
    			'username_sadmin' => $username_sadmin,
    			'status' => "login",
    		);
    		$this->session->set_userdata($data_session);
    		redirect(base_url()."Superadmin");
    	}else{
    		redirect(base_url()."Login/login_super_admin");
    	}
    }

    function logout(){
    	$this->session->sess_destroy();
    	redirect(base_url());
    }
}
 ?>