<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tentang_kami extends CI_Controller {

	
	public function index()
	{
		$data = array(
			'active_tentang_kami' => 'active');
		$this->load->view('template/head');
		$this->load->view('template/sidebar',$data);
		$this->load->view('v_tentang_kami');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	
	
}
