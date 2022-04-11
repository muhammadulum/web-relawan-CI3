<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fauna_model extends CI_Model
{
    private $_table = "tabel_data_fauna";


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_fauna" => $id])->row();
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
        $this->nama = $post['nama'];
        $this->nama_latin = $post['nama_latin'];
        $this->foto = $this->_uploadfoto();
        $this->deskripsi = $post['deskripsi'];
        $this->status = $post['status'];
        $this->jenis = $post['jenis'];
        $this->ancaman = $post['ancaman'];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_fauna = $post["id_fauna"];
        $this->nama = $post['nama'];
        $this->nama_latin = $post['nama_latin'];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadfoto();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->deskripsi = $post['deskripsi'];
        $this->status = $post['status'];
        $this->jenis = $post['jenis'];
        $this->ancaman = $post['ancaman'];
        
        return $this->db->update($this->_table, $this, array('id_fauna' => $post['id_fauna']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_fauna" => $id));
    }
}