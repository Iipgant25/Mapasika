<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('ModelUser');
        $this->load->library('form_validation');
    
      }
  
    public function index() {

        $data['judul'] = 'Beranda';
        $data['link'] = 'style.css';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function materi() {

        $config['base_url'] = 'http://localhost/mapasika/user/materi';
        $config['total_rows'] = $this->ModelUser->count()->num_rows();
        $config['per_page'] = 6;

        //style
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);

        $data['judul'] = 'Materi';
        $data['link'] = 'materi.css';
        $data['start'] = $this->uri->segment(3);
        $data['materi'] = $this->ModelUser->getMateriLimit($config['per_page'], $data['start'])->result_array();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/materi', $data);
        $this->load->view('templates/footer_user');

        
        
    }

    public function detail($id) {

        $data['judul'] = 'Detail Materi';
        $data['link'] = 'detail.css';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->ModelUser->materiWhere(['id_materi' => $id])->row_array();

        if ($data['user']['role_id'] == 1) {
            $this->load->view('user/blank2');
        }elseif ($data['user']['role_id'] == 3) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('user/detail', $data);
            $this->load->view('templates/footer_user');

        }
        
    }

    public function daftar() {

        $jml = $this->ModelUser->cekDaftar(['id_user' => $this->session->userdata('id_user')])->num_rows();
        if ($jml == 1) {
            $this->load->view('user/blank');
        }elseif ($jml == 0) {
            $data['judul'] = 'Pendaftaran Anggota';
            $data['link'] = 'daftar.css';
            $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('templates/header_user', $data);
            $this->load->view('user/daftar', $data);
            $this->load->view('templates/footer_user');

        }
        
        
    }

    public function daftar_anggota() {


        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('nim', 'nim', 'trim|required');
        $this->form_validation->set_rules('tempat', 'tempat lahir', 'trim|required');
        $this->form_validation->set_rules('tgl', 'tanggal lahir', 'trim|required');
        $this->form_validation->set_rules('kampus', 'kampus', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('no', 'no hp', 'trim|required');
        $this->form_validation->set_rules('bb', 'berat badan', 'trim|required');
        $this->form_validation->set_rules('tb', 'tinggi badan', 'trim|required');
        $this->form_validation->set_rules('jeniskel', 'jenis kelamin', 'trim|required');

        if ( $this->form_validation->run()  == false){
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('user/daftar', $data);
            $this->load->view('templates/footer_user',);
        } else {

            $this->ModelUser->simpanDaftar();
            redirect('user');
            
        }
        
    }


}
