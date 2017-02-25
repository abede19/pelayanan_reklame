<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_perizinan extends CI_Controller {

	
	public function index()
	{
		$data = array(
			'perizinan' => 'active');
		$this->load->view('template/head');
		$this->load->view('user/header',$data);
		$this->load->view('v_perizinan');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	
	public function ubah_data()
	{
		$this->load->view('template/head');
		$this->load->view('user/header');
		$this->load->view('v_ubah_data');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}	
}
