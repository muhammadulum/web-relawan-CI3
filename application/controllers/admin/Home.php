<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");

class Home extends CI_Controller {

	
	public function index()
	{

		$id_admin=$this->session->userdata('id_admin');
		if ($id_admin) {
		
		$this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
        $this->load->view('admin/home');
        $this->load->view('tampilanadmin/footer');
		}else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                 Maaf Silahkan Login Dulu!</div>');
			redirect("auth/login");
		}

	}
    
}
