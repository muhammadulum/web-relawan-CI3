<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relawan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Relawan_model");
        $this->load->library('form_validation');
    }

	public function index()
	{

       $id_admin=$this->session->userdata('id_admin');
        if ($id_admin) {
        
        $data["relawan"] = $this->Relawan_model->getAll();
        $this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
        $this->load->view('admin/relawan',$data);
        $this->load->view('tampilanadmin/footer');
        }else {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                 Maaf Silahkan Login Dulu!</div>');
            redirect("auth/login");
        }
        
        
       

		
	}

	public function tambahrelawan()
	{
		$this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
		$this->load->view('admin/tambahrelawan');
		$this->load->view('tampilanadmin/footer');
	}

    public function cetakrelawan(){
        $data["relawan"] = $this->Relawan_model->getAll();
        $data['total']=$this->Relawan_model->get()->num_rows();
        $this->load->view('admin/cetakrelawan',$data);
    }

	public function fungsitambah()
    {
        $product = $this->Relawan_model;       
            $product->save();
            if($this->db->affected_rows()>0)
        {
            echo "<script>alert('data berhasil tambah');</script>";
        }
        echo "<script>window.location='".site_url('admin/relawan')."';</script>";
			//redirect(site_url('admin/relawan'));
            //$this->session->set_flashdata('success', 'Berhasil disimpan');

        // $this->load->view("admin/product/new_form");
    }

    public function fungsiedit()
    {
        $relawan = $this->Relawan_model;       
            $relawan->update();
            if($this->db->affected_rows()>0)
        {
            echo "<script>alert('data berhasil di update');</script>";
        }
        echo "<script>window.location='".site_url('admin/relawan')."';</script>";
			//redirect(site_url('admin/relawan'));
            //$this->session->set_flashdata('success', 'Berhasil disimpan');

        // $this->load->view("admin/product/new_form");
    }

    public function editrelawan($id_relawan = null)
    {
        if (!isset($id_relawan)) redirect('admin/relawan');
       
        $relawan = $this->Relawan_model;
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());

        // if ($validation->run()) {
        //     $product->update();
        //     $this->session->set_flashdata('success', 'Berhasil disimpan');
        // }

        $data["relawan"] = $relawan->getById($id_relawan);
        if (!$data["relawan"]) show_404();
        $this->load->view('tampilanadmin/header');
        $this->load->view('tampilanadmin/navbar');
		$this->load->view('admin/edit_relawan',$data);
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


	public function deleterelawan($id)
    {
        // if (!isset($id)) show_404();
        
        // if ($this->Relawan_model->delete($id)) {
        //     redirect(site_url('admin/relawan'));
        // }
        $this->Relawan_model->delete($id);
        if($this->db->affected_rows()>0)
        {
            echo "<script>alert('data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('admin/relawan')."';</script>";
    }
    
}
