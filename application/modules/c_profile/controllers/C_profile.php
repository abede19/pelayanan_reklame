<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profile extends CI_Controller {

	
	public function index()
	{
		$data = array(
			'profile' => 'active');
		$this->load->view('template/head');
		$this->load->view('user/header',$data);
		$this->load->view('v_profile');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	
}
