<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['title'] = 'Dashboard';
    $this->load->view('templates/header', $data);
    $this->load->view('beranda/home', $data);
    $this->load->view('templates/footer', $data);
  }
}
