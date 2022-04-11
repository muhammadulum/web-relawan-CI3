<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aksikegiatan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Aksikegiatan_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$id_admin=$this->session->userdata('id_admin');
		if ($id_admin) {
		
			$data["aksi"] = $this->Aksikegiatan_model->getAll();
		$this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
        $this->load->view('admin/aksikegiatan',$data);
        $this->load->view('tampilanadmin/footer');
		}else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                 Maaf Silahkan Login Dulu!</div>');
			redirect("auth/login");
		}
		
	}

	public function tambahkegiatan()
	{
		$this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
		$this->load->view('admin/tambahaksikegiatan');
		$this->load->view('tampilanadmin/footer');
	}

	public function fungsitambah()
    {
        $product = $this->Aksikegiatan_model;       
            $product->save();
			if($this->db->affected_rows()>0)
			{
				echo "<script>alert('data berhasil ditambahkan');</script>";
			}
			echo "<script>window.location='".site_url('admin/aksikegiatan')."';</script>";
			//redirect(site_url('admin/aksikegiatan'));
            //$this->session->set_flashdata('success', 'Berhasil disimpan');

        // $this->load->view("admin/product/new_form");
    }

    public function fungsiedit()
    {
        $relawan = $this->Aksikegiatan_model;       
            $relawan->update();
			if($this->db->affected_rows()>0)
			{
				echo "<script>alert('data berhasil edit');</script>";
			}
			echo "<script>window.location='".site_url('admin/aksikegiatan')."';</script>";
			//redirect(site_url('admin/aksikegiatan'));
            //$this->session->set_flashdata('success', 'Berhasil disimpan');

        // $this->load->view("admin/product/new_form");
    }

    public function editkegiatan($id = null)
    {
        if (!isset($id)) redirect('admin/aksikegiatan');
       
        $relawan = $this->Aksikegiatan_model;
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());

        // if ($validation->run()) {
        //     $product->update();
        //     $this->session->set_flashdata('success', 'Berhasil disimpan');
        // }

        $data["aksi"] = $relawan->getById($id);
        if (!$data["aksi"]) show_404();
        $this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
		$this->load->view('admin/edit_aksikegiatan',$data);
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


	public function deletekegiatan($id=null)
    {
        if (!isset($id)) show_404();
        
        // if ($this->Aksikegiatan_model->delete($id)) {
        //     redirect(site_url('admin/aksikegiatan'));
        // }
		$this->Aksikegiatan_model->delete($id);
		if($this->db->affected_rows()>0)
			{
				echo "<script>alert('data berhasil hapus');</script>";
			}
			echo "<script>window.location='".site_url('admin/aksikegiatan')."';</script>";
    }
    
}
