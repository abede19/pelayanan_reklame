<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pendaftaran extends CI_Controller {

	
	public function index()
	{
		$data = array(
			'pendaftaran' => 'active');
		$this->load->view('template/head');
		$this->load->view('user/header',$data);
		$this->load->view('v_pendaftaran');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	
}
