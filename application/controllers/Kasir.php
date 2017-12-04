<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller
{   
    public function index(){

        $this->load->view('include/header');
        $this->load->view('pdata');
        $this->load->view('bayar');
        $this->load->view('tbtransaksi');

       
    }

    public function add_data(){
        $this->load->view('form_add');
    }

    public function insert(){
        $this->load->model('mymodel');
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat')
             );
        $data = $this->mymodel->Insert('mahasiswa', $data);
        redirect(base_url(),'refresh');
    }
    
}
?>