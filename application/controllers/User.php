<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('pendaftaran');
	}

public function daftar()
	{
		$this->form_validation->set_rules('nama_user','Username', 'trim|required');
		$this->form_validation->set_rules('pass','Password', 'trim|required');
		$this->form_validation->set_rules('nama','Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('alamat','Alamat', 'trim|required');
		$this->form_validation->set_rules('telp','Telepon', 'trim|required');
		$this->form_validation->set_rules('gender','Gender', 'trim|required');
		if($this->form_validation->run() == TRUE )
	{
		if($this->input->post('daftar'))
		{	
			$this->load->model('M_barang');
			$proses=$this->M_barang->tambah_user();
		if($proses){
			$this->session->set_flashdata('pesan','Sukses menyimpan');
			redirect('User/login','refresh');
		} else{
			$this->session->set_flashdata('pesan','Gagal Mendaftar');
			redirect('User/index','refresh');
			}
		}
		} else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('User','refresh');
		
		}
	}
	public function login()
	{
		$this->load->view('login');
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username','Usename', 'trim|required');
		$this->form_validation->set_rules('password','Password', 'trim|required');
		$this->form_validation->set_rules('remember','Cheklist Remember Me', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
				$this->load->model('m_barang');
				if($this->m_barang->get_login()->num_rows()>0){
					$data=$this->m_barang->get_login()->row();
					$array = array(
						'login' => TRUE,
						'nama'=>$data->nama_user,
						'username'=>$data->username,
						'password'=>$data->password,
					);
					
					$this->session->set_userdata( $array );
					redirect('Admin','refresh');
				} else {
					$this->session->set_flashdata('pesan', 'salah username dan password');
					redirect('User/login','refresh');
				}
			} else {
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('User/login','refresh');
			}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('User/login','refresh');
	}

	}
?>