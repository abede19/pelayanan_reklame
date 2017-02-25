<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller{
    

    public function index()
    {

        $this->load->view('template2/head');
        $this->load->view('template2/topbar');
        $this->load->view('template2/sidebar');
        $this->load->view('v_dashboard');
        $this->load->view('template2/foot');
        $this->load->view('template2/js');
    }
     public function proses_berkas(){
        $this->load->view('template2/head');
        $this->load->view('template2/topbar');
        $this->load->view('template2/sidebar');
        $this->load->view('v_proses_berkas');
        $this->load->view('template2/js');
        $this->load->view('template2/foot');
    }
     public function detail_proses_berkas(){
        $this->load->view('template2/head');
        $this->load->view('template2/topbar');
        $this->load->view('template2/sidebar');
        $this->load->view('v_detail_proses_berkas');
        $this->load->view('template2/js');
        $this->load->view('template2/foot');
    }
     public function perizinan(){
        $this->load->view('template2/head');
        $this->load->view('template2/topbar');
        $this->load->view('template2/sidebar');
        $this->load->view('v_tabel_perizinan');
        $this->load->view('template2/js');
        $this->load->view('template2/foot');
    }
     public function maps(){
        $this->load->view('template2/head');
        $this->load->view('template2/topbar');
        $this->load->view('template2/sidebar');
        $this->load->view('v_lokasi');
        $this->load->view('template2/js');
        $this->load->view('template2/foot');
    }
   
     public function gallery(){
        $this->load->view('template2/head');
        $this->load->view('template2/topbar');
        $this->load->view('template2/sidebar');
        $this->load->view('v_gallery');
        $this->load->view('template2/js');
        $this->load->view('template2/foot');
    }
     public function tambah_gallery(){
        $this->load->view('template2/head');
        $this->load->view('template2/topbar');
        $this->load->view('template2/sidebar');
        $this->load->view('v_tambah_gallery');
        $this->load->view('template2/js');
        $this->load->view('template2/foot');
    }
    public function user(){
        $this->load->view('template2/head');
        $this->load->view('template2/topbar');
        $this->load->view('template2/sidebar');
        $this->load->view('v_user');
        $this->load->view('template2/js');
        $this->load->view('template2/foot');
    }
     public function detail_user(){
        $this->load->view('template2/head');
        $this->load->view('template2/topbar');
        $this->load->view('template2/sidebar');
        $this->load->view('v_detail_user');
        $this->load->view('template2/js');
        $this->load->view('template2/foot');
    }
    public function admin(){
        $this->load->view('template2/head');
        $this->load->view('template2/topbar');
        $this->load->view('template2/sidebar');
        $this->load->view('v_admin');
        $this->load->view('template2/js');
        $this->load->view('template2/foot');
    }
   
}