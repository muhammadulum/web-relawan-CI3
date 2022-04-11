<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hhbk_model extends CI_Model
{
    private $_table = "tabel_data_produk_hasil_hutan_bukan_kayu";


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_produk" => $id])->row();
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
        $this->foto = $this->_uploadfoto();
        $this->harga = $post['harga'];
        $this->keterangan = $post['keterangan'];
        $this->no_wa=$post['no_wa'];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_produk = $post["id_produk"];
        $this->nama = $post['nama'];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadfoto();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->harga = $post['harga'];
        $this->keterangan = $post['keterangan'];
        $this->no_wa = $post['no_wa'];
        
        return $this->db->update($this->_table, $this, array('id_produk' => $post['id_produk']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_produk" => $id));
    }
}