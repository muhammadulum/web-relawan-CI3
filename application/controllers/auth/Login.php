<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");

class Login extends CI_Controller {



public function __construct()
    {

        parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('auth_model');
    }
	
	public function index()
	{
		$this->load->view('halamanauth/login');
        
	}



	// public function proses_login(){
 //        $nama = $this->input->post('nama_admin');
 //        $password = $this->input->post('password');

 //        $user = $this->db->get_where('tabel_login_admin',['nama_admin'=>$nama])->row_array();
 //         //jika ada user
 //        if ($user) {
 //            //jika user aktif

            
 //                //cek passowrd

 //                if (md5($password,$user['password'])) {
 //                    $data =[
						
	// 					'id_admin'=>$user['id_admin'],
	// 					'password'=>$user['password'],
	// 					'nama_admin'=>$user[''],
	// 					'tempat_lahir'=>$user['tempat_lahir'],
	// 					'tgl_lahir'=>$user['tgl_lahir'],
	// 					'jenis_kelamin'=>$user['jenis_kelamin'],
	// 					'no_hp'=>$user['no_hp'],
	// 					'alamat'=>$user['alamat'],
	// 					'email'=>$user['email'],
                       

 //                    ];
 //                    $this->session->set_userdata($data);
 //                        redirect('siswa');

 //            }else {
 //                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
 //                  Maaf Passoword Salah!</div>');
 //                redirect('welcome');
 //            }
          
 //        }else {
 //            //jika tidak ada
 //            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
 //            Maaf Email tidak terdaftar di sistem!</div>');
 //            redirect('welcome');

 //        }

 //    }


    function aksi_login(){
	$nama_admin = $this->input->post('nama_admin');
	$password = $this->input->post('password');
	$where = [
		'nama_admin' => $nama_admin,
		'password' => md5($password)
		];
	$cek = $this->auth_model->cek_login($where)->num_rows();
	$hasil=$this->db->query("select * from tabel_login_admin where nama_admin='$nama_admin'")->row();
	if($cek > 0){
 
		$data =[
			'id_admin' => $hasil->id_admin,
			'nama_admin' => $hasil->nama_admin,
			'password' => $hasil->password,
			'jabatan' => $hasil->jabatan
			];
 
		$this->session->set_userdata($data);
		// print(json_encode($data));
		// die;
 
		redirect(base_url("admin/home"));
	}else{
		$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                   Maaf Passoword Salah!</div>');
                 redirect('auth/login');
	}
}


	public function logout(){
		$this->session->sess_destroy();
		redirect('auth/login');
	}

	public function regist(){

		$this->load->view('halamanauth/regist');
	}


    public function proses_regist()

    {
       
            

      
            $data = [
            	'password' => md5($this->input->post('password')),
                'nama_admin' => $this->input->post('nama_admin'),
                'jabatan' => $this->input->post('jabatan')
            ];


            $cek=$this->auth_model->regist($data);
            if ($cek) {
            	// code...
            	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Akun berhasil di buat, Silahkan Login!
          </div>');
            redirect('auth/login');
            }
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Akun Gagal di buat, Silahkan Daftar Ulang!
          </div>');
            redirect('auth/login/regist');


        
        

    }
    
}
