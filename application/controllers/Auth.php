<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('ModelUser');

    }



    public function index(){

      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ( $this->form_validation->run()  == false){
        $data ['judul'] = 'login';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
      } else {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user',  ['email' => $email]) -> row_array();


        if ($user) {
          if ($user['is_active'] == 1) {
            if (password_verify($password, $user['password'])) {
              $data = [
                'email' => $user['email'],
                'role_id' => $user['role_id'],
                'id_user' => $user['id_user'],
              ];
              $this->session->set_userdata($data);
              if ($user['role_id'] == 2) {
                redirect('admin');
              }else {
                redirect('user');
              }

            }else {
              $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">password salah!!!</div>');
              redirect('auth');
            }
          }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">email belum di aktifkan</div>');
            redirect('auth');
          }
        }else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">email belum terdaftar</div>');
          redirect('auth');
        }
      }



    }

    public function register(){


      $this->form_validation->set_rules('name', 'Name', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',[
                                        'is_unique' => 'email sudah terdaftar'
                                        ]);
      $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',
                                        ['matches' => 'password dont macth!',
                                        'min_length' => 'Password to short!']);
      $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password2]');



      if ( $this->form_validation->run()  == false) {
          $data ['judul'] = 'Registrasi';
          $this->load->view('templates/auth_header', $data);
          $this->load->view('auth/register');
          $this->load->view('templates/auth_footer');
      } else {
        $data = [
          'nama' => htmlspecialchars($this->input->post('name',true)),
          'email' => htmlspecialchars($this->input->post('email',true)),
          'password' => password_hash( $this->input->post('password1'), PASSWORD_DEFAULT),
          'role_id' => 1,
          'is_active' => 1,
          'date_create' => time()
        ];

        $this->db->insert('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">selamat!!!</div>');
        redirect('auth');
      }

    }

    public function logout(){
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('role_id');
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">berhasil logout</div>');
      redirect('Welcome');
    }


}
