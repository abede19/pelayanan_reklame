<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_panduan extends CI_Controller{
    

   	public function index()
	{
		$data = array(
			'active_panduan' => 'active');
		$this->load->view('template/head');
		$this->load->view('template/sidebar',$data);
		$this->load->view('v_panduan');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}

   
}
?>