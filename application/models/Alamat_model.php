<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Alamat_model extends CI_Model
{
    private $_table = "tabel_data_alamat";


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getByiduser()
    {
        return $this->db->get_where($this->_table, ["id_alamat" => 1])->row();
        
        

    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_alamat" => $id])->row();
    }

    

    public function save()
    {
        $post = $this->input->post();
        $this->nama_alamat = $post['nama_alamat'];
        $this->no_wa = $post['no_wa'];
        $this->email = $post['email'];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_alamat = $post["id_alamat"];
        $this->nama_alamat = $post['nama_alamat'];
        $this->no_wa = $post['no_wa'];
        $this->email = $post['email'];
        
        return $this->db->update($this->_table, $this, array('id_alamat' => $post['id_alamat']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_alamat" => $id));
    }
}