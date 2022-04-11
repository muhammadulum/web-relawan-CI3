<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");

class Profile_admin extends CI_Controller {


public function __construct()
    {

        parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('auth_model');
    }
	
	public function index()
	{

		$id_admin=$this->session->userdata('id_admin');
		if ($id_admin) {
	
		$data['hasil']=$this->auth_model->get_profile();
		$this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
        $this->load->view('halamanauth/profile',$data);
        $this->load->view('tampilanadmin/footer');
		}else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                 Maaf Silahkan Login Dulu!</div>');
			redirect("auth/login");
		}


	}


	public function update_admin(){

		$password_baru=$this->input->post('password_baru');
		$password_lama=$this->input->post('password_lama');
		$id_admin=$this->input->post('id_admin');
		$nama_admin=$this->input->post('nama_admin');
		$jabatan=$this->input->post('jabatan');

		if ($password_baru!=null) {
			// code...
			$data_baru=[
				'password'=>md5($password_baru),
				'nama_admin'=>$nama_admin,
				'jabatan'=>$jabatan
			];
		
			$this->db->where('id_admin', $id_admin);
			$this->db->update('tabel_login_admin', $data_baru);

			redirect("admin/profile_admin");


			
		}else{
			$data_lama=[
				'password'=>$password_lama,
				'nama_admin'=>$nama_admin,
				'jabatan'=>$jabatan
			];

			$this->db->where('id_admin', $id_admin);
			$this->db->update('tabel_login_admin', $data_lama);

				redirect("admin/profile_admin");


			}
		
	}
    
}
