<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {

      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Login';
            $this->load->view('templates_auth/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates_auth/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login(){
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $user = $this->db->get_where('user', ['email' => $email])->row_array();

      if ($user) {
        //jika ada user
        if ($user['is_active'] == 1) {
          //cek password
          if (password_verify($password, $user['password'])) {
            $data = [
              'email' => $user['email'],
              'role_id' => $user['role_id']
            ];
            $this->session->set_userdata($data);
            if ($user['role_id'] == 1) {
              redirect('admin');
            } else {
              redirect('home');
            }
          } else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
            redirect('auth');
          }
        } else{
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum aktif</div>');
          redirect('auth');
        }
      } else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar</div>');
        redirect('auth');
      }
    }

    public function registration()
    {

        $this->form_validation->set_rules('name', 'Nama', 'required|trim',[
          'required' => 'Nama Lengkap harus diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email',[
          'required' => 'email harus diisi!',
          'valid_email' => 'email tidak valid!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]',[
          'required' => 'password harus diisi!',
          'min_length' => 'password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Registrasi';
            $this->load->view('templates_auth/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates_auth/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email')),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()

            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success Registration, Please Login!', '</div>');
            redirect('auth');
        }

    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');


        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</dibv>');
        redirect('auth');

    }
}
