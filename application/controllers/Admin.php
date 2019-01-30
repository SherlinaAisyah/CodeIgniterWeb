<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	
	public function index()
	{
		$this->load->model('m_barang');
		$this->load->model('m_promo');
		$data['sepatu']=$this->m_promo->tampil_dt();
		$data['tampil']=$this->m_barang->tampil_dt();
		$data['judul']="Homepage";
		$data['konten']="home";
		$this->load->view('template',$data);

	}

	public function detail($id='')
	{
		
		$this->load->model('m_barang');
		$data['detail_brg']=$this->m_barang->tampil_detail($id);
		$data['judul']="Detail Barang";
		$data['konten']="detail_barang";
     	$this->load->view('template',$data);
	}

	public function profil()
	{
		$this->load->model('m_promo');
		$data['sepatu']=$this->m_promo->tampil_dt();
		$data['judul']="My Profil";
		$data['konten']="profil";
     	$this->load->view('template',$data);
	}

		public function saran()
	{
		$this->load->model('m_promo');
		$data['sepatu']=$this->m_promo->tampil_dt();
		$data['judul']="Saran";
		$data['konten']="saran";
     	$this->load->view('template',$data);
	}

	public function detil($id='')
	{
		$this->load->model('m_promo');
		$data['sepatu']=$this->m_promo->tampil_dt();
		$this->load->model('m_promo');
		$data['detail_promo']=$this->m_promo->tampil_detail($id);
		$data['judul']="Detail Promo";
		$data['konten']="detail_promo";
     	$this->load->view('template',$data);
	}

	}

?>
