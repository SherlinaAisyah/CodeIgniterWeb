<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
	{
		$this->load->view('template');
	}

}

/* End of file Hello.php */
/* Location: ./application/controllers/Hello.php */