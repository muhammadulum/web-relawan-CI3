<?php 
 
class Auth_model extends CI_Model{	
	

	function cek_login($where){		
		return $this->db->get_where('tabel_login_admin',$where);
	}	


	public function get_profile(){

			$id_admin=$this->session->userdata('id_admin');
			return $this->db->query("select * from tabel_login_admin where id_admin='$id_admin'")->row();
		}

	public function regist($data){

		return $this->db->insert('tabel_login_admin',$data);
	}

	
}