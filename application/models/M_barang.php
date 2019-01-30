<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model
{
	
	public function tampil_dt()
	{
		return $this->db->get('barang')->result();
	}
	public function tampil_detail($id='')
	{
		return $this->db->where('id_barang',$id)->get('barang')->row();
	}

	public function tambah_user()
	{
	$data=array(
		'nama_user'=>$this->input->post('nama'),
		'alamat'=>$this->input->post('alamat'),
		'username'=>$this->input->post('nama_user'),
		'password'=>$this->input->post('pass'),
		'gender'=>$this->input->post('gender'),
		'telp'=>$this->input->post('telp')
	);
	$this->db->insert('pengguna', $data);
	if($this->db->affected_rows()>0){
		return true;
	}
	else{
		return false;
	}
	}

	public function cek_user()
	{
		return $this->db->where('username',$this->input->post('username'))
						->where('password',md5($this->input->post('password')))
						->get('pengguna');
	}

	public function get_login()
		{
			return $this->db
					->where('username',$this->input->post('username'))
					->where('password',$this->input->post('password'))
					->get('pengguna');
		}

}
?>