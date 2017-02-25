<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	
	public function index()
	{
		$data = array(
			'active_sign_in' => 'active');
		$this->load->view('template/head');
		$this->load->view('template/sidebar',$data);
		$this->load->view('v_login');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	
	
}
