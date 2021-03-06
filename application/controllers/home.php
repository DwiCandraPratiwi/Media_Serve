<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
        public function index()
        {
                $data['sering'] = $this->Sering_model->tampil_data()->result();
                $this->load->view('templates/header');
                $this->load->view('beranda/home', $data);
                $this->load->view('templates/footer');
        }

        public function detail($id)
        {
                $this->load->model('Sering_model');
                $detail = $this->Sering_model->detail_srg('id');
                $data['detail'] = $detail;
                $this->load->view('templates/header');
                $this->load->view('beranda/detail', $data);
                $this->load->view('templates/footer');
        }

        public function login()
        {
                $data['sering'] = $this->Sering_model->tampil_data()->result();
                $this->load->view('templates/header');
                $this->load->view('auth/login', $data);
                $this->load->view('templates/footer');
        }
}
