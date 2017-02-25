<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_daftar_pengajuan extends CI_Controller{
    

    public function diterima()
    {
        $this->load->view('template2/head');
        $this->load->view('template2/topbar');
        $this->load->view('template2/sidebar');
        $this->load->view('v_daftar_disetujui');
        $this->load->view('template2/js');
        $this->load->view('template2/foot');
    }
     public function ditolak()
    {
        $this->load->view('template2/head');
        $this->load->view('template2/topbar');
        $this->load->view('template2/sidebar');
        $this->load->view('v_daftar_ditolak');
        $this->load->view('template2/js');
        $this->load->view('template2/foot');
    }
   
}
?>