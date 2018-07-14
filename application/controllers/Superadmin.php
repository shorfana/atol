<?php 
/**
 * 
 */
class Superadmin extends CI_Controller
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

    function index(){
        $this->load->view('superadmin/header');
    	$this->load->view('superadmin/home');
        $this->load->view('superadmin/footer');
    }

    function pengelolaan_data_wilayah(){
        
    }

    function pengelolaan_data_admin_dinas(){
        $this->load->view('superadmin/header');
        $this->load->view('superadmin/registerAdmindinas');
        $this->load->view('superadmin/footer');
    }   

    function tambahKabupaten(){
        $kode_kabupaten=$_POST['kode_kabupaten'];
        $nama_kabupaten=$_POST['nama_kabupaten'];
        $data=array(
            'kode_kabupaten' => $kode_kabupaten,
            'nama_kabupaten' => $nama_kabupaten
        );
        $sql=$this->Dbs_CRUD->insert($data,'kabupaten');
        if ($sql) {
            redirect(base_url()."Superadmin");
        }else{
            echo "gagal insert data";
        }
    } 

    function tambahAdmindinas(){
        $NIP=$_POST['NIP'];
        $nama=$_POST['nama'];
        $password=$_POST['password'];
        $username_sadmin=$_POST['username_sadmin'];
        
    }

}

 ?>