<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hhbk extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Hhbk_model");
        $this->load->library('form_validation');
    }

	public function index()
	{


        $id_admin=$this->session->userdata('id_admin');
        if ($id_admin) {
        
        $data["hhbk"] = $this->Hhbk_model->getAll();
        $this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
        $this->load->view('admin/hhbk',$data);
        $this->load->view('tampilanadmin/footer');
        }else {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                 Maaf Silahkan Login Dulu!</div>');
            redirect("auth/login");
        }

		
	}

	public function tambahhhbk()
	{
		$this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
		$this->load->view('admin/tambahhhbk');
		$this->load->view('tampilanadmin/footer');
	}

	public function fungsitambah()
    {
        $product = $this->Hhbk_model;       
            $product->save();
			//redirect(site_url('admin/hhbk'));
			if($this->db->affected_rows()>0)
        {
            echo "<script>alert('data berhasil tambahkan');</script>";
        }
        echo "<script>window.location='".site_url('admin/hhbk')."';</script>";
            //$this->session->set_flashdata('success', 'Berhasil disimpan');

        // $this->load->view("admin/product/new_form");
    }

    public function fungsiedit()
    {
        $relawan = $this->Hhbk_model;       
            $relawan->update();
			if($this->db->affected_rows()>0)
        {
            echo "<script>alert('data berhasil diedit');</script>";
        }
        echo "<script>window.location='".site_url('admin/hhbk')."';</script>";
			//redirect(site_url('admin/aksikegiatan'));
            //$this->session->set_flashdata('success', 'Berhasil disimpan');

        // $this->load->view("admin/product/new_form");
    }

    public function edithhbk($id = null)
    {
        if (!isset($id)) redirect('admin/hhbk');
       
        $relawan = $this->Hhbk_model;
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());

        // if ($validation->run()) {
        //     $product->update();
        //     $this->session->set_flashdata('success', 'Berhasil disimpan');
        // }

        $data["hhbk"] = $relawan->getById($id);
        if (!$data["hhbk"]) show_404();
        $this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
		$this->load->view('admin/edit_hhbk',$data);
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


	public function deletehhbk($id=null)
    {
        if (!isset($id)) show_404();
        
        // if ($this->Hhbk_model->delete($id)) {
        //     redirect(site_url('admin/hhbk'));
        // }

		$this->Hhbk_model->delete($id);
        if($this->db->affected_rows()>0)
        {
            echo "<script>alert('data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('admin/hhbk')."';</script>";
    }
    
}
