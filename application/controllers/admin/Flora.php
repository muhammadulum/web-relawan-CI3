<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flora extends CI_Controller {

	
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Flora_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$id_admin=$this->session->userdata('id_admin');
		if ($id_admin) {
		
			$data["floradanfauna"] = $this->Flora_model->getAll();
		$this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
        $this->load->view('admin/floradanfauna',$data);
        $this->load->view('tampilanadmin/footer');
		}else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                 Maaf Silahkan Login Dulu!</div>');
			redirect("auth/login");
		}
		
	}

	public function tambahfloradanfauna()
	{
		$this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
		$this->load->view('admin/tambahfloradanfauna');
		$this->load->view('tampilanadmin/footer');
	}

	public function fungsitambah()
    {
        $product = $this->Flora_model;       
            $product->save();
			if($this->db->affected_rows()>0)
			{
				echo "<script>alert('data berhasil tambahkan');</script>";
			}
			echo "<script>window.location='".site_url('admin/flora')."';</script>";
			//redirect(site_url('admin/floradanfauna'));
            //$this->session->set_flashdata('success', 'Berhasil disimpan');

        // $this->load->view("admin/product/new_form");
    }

    public function fungsiedit()
    {
        $relawan = $this->Flora_model;       
            $relawan->update();
			if($this->db->affected_rows()>0)
			{
				echo "<script>alert('data berhasil edit');</script>";
			}
			echo "<script>window.location='".site_url('admin/flora')."';</script>";
			//redirect(site_url('admin/floradanfauna'));
            //$this->session->set_flashdata('success', 'Berhasil disimpan');

        // $this->load->view("admin/product/new_form");
    }

    public function editfloradanfauna($id = null)
    {
        if (!isset($id)) redirect('admin/flora');
       
        $relawan = $this->Flora_model;
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());

        // if ($validation->run()) {
        //     $product->update();
        //     $this->session->set_flashdata('success', 'Berhasil disimpan');
        // }

        $data["floradanfauna"] = $relawan->getById($id);
        if (!$data["floradanfauna"]) show_404();
        $this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
		$this->load->view('admin/edit_floradanfauna',$data);
		$this->load->view('tampilanadmin/footer');
        //$this->load->view("admin/product/edit_form", $data);
    }

	// public function editrelawan()
	// {

	// 	$this->load->view('tampilanadmin/header');
    //     $this->load->view('tampilanadmin/navbar');
	// 	$this->load->view('admin/edit_relawan');
	// 	$this->load->view('tampilanadmin/footer');

	// }


	public function deletefloradanfauna($id=null)
    {
        if (!isset($id)) show_404();
        
        // if ($this->Floradanfauna_model->delete($id)) {
        //     redirect(site_url('admin/floradanfauna'));
        // }
		$this->Flora_model->delete($id);
		if($this->db->affected_rows()>0)
        {
            echo "<script>alert('data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('admin/flora')."';</script>";
    }
    
}
