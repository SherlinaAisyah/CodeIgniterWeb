<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_promo extends CI_Model
{
	
	public function tampil_dt()
	{
		return $this->db->get('promo')->result();
	}
	public function tampil_detail($id='')
	{
		return $this->db->where('nmr_barang',$id)->get('promo')->row();
	}
}
?>