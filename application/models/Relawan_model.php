<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Relawan_model extends CI_Model
{
    private $_table = "tabel_pendaftaran_relawan";

    // public $id_relawan;
    // public $name;
    // public $price;
    //public $image = "default.jpg";
    // public $description;

    // public function rules()
    // {
    //     return [
    //         ['field' => 'name',
    //         'label' => 'Name',
    //         'rules' => 'required'],

    //         ['field' => 'price',
    //         'label' => 'Price',
    //         'rules' => 'numeric'],
            
    //         ['field' => 'description',
    //         'label' => 'Description',
    //         'rules' => 'required']
    //     ];
    // }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function get()
    {
        return $this->db->get($this->_table);
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_relawan" => $id])->row();
    }

    private function _uploadfoto()
    {
        $config['upload_path']='./upload/foto/';
        $config['allowed_types']='gif|jpg|png';
        $config['file_name']='photo-'.date('ymd').'-'.substr(md5(rand()),0,10);
        $config['overwrite']=true;
        $config['max_size']=204800;

        $this->load->library('upload',$config);

        if ($this->upload->do_upload('foto')) {
            # code...
            return $this->upload->data("file_name");
        }
        // return  "gagal";
        // exit;
        //return $this->upload->data("file_name");
        print_r($this->upload->display_errors());
        //return "default.jpg";
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_orang = $post['nama'];
        $this->alamat = $post['alamat'];
        $this->tanggal_lahir = $post['tanggal_lahir'];
        $this->jenis_kelamin = $post['jenis_kelamin'];
        $this->tanggal_masuk = $post['tanggal_masuk'];
        $this->no_hp = $post['no_hp'];
        $this->email = $post['email'];
        $this->motivasi = $post['motivasi'];
        $this->asal_sekolah = $post['asal_sekolah'];
        $this->angkatan = $post['angkatan'];
        $this->foto = $this->_uploadfoto();
        $this->status = $post['status'];
        return $this->db->insert($this->_table, $this);
    }

    public function saveuser()
    {
        $post = $this->input->post();
        $this->nama_orang = $post['nama'];
        $this->alamat = $post['alamat'];
        $this->tanggal_lahir = $post['tanggal_lahir'];
        $this->jenis_kelamin = $post['jenis_kelamin'];
        $this->no_hp = $post['no_hp'];
        $this->email = $post['email'];
        $this->motivasi = $post['motivasi'];
        $this->asal_sekolah = $post['asal_sekolah'];
        $this->foto = $this->_uploadfoto();
        $this->angkatan = null;
        $this->tanggal_masuk = null;
        $this->status = null;
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_relawan = $post["id_relawan"];
        $this->nama_orang = $post['nama_orang'];
        $this->alamat = $post['alamat'];
        $this->tanggal_lahir = $post['tanggal_lahir'];
        // $this->jenis_kelamin = $post['jenis_kelamin'];
        if($post['jenis_kelamin']==null){
            $this->jenis_kelamin=$post['jenis_kelaminlama'];
        }else{
            $this->jenis_kelamin = $post['jenis_kelamin'];
        }
        $this->tanggal_masuk = $post['tanggal_masuk'];
        $this->no_hp = $post['no_hp'];
        $this->email = $post['email'];
        $this->motivasi = $post['motivasi'];
        $this->asal_sekolah = $post['asal_sekolah'];
        $this->angkatan = $post['angkatan'];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadfoto();
        } else {
            $this->foto = $post["old_image"];
        }
        
        $this->status = $post['status'];
        return $this->db->update($this->_table, $this, array('id_relawan' => $post['id_relawan']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_relawan" => $id));
    }
}