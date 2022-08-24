<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

  public function __construct(){
      parent::__construct();
      $this->load->model('ModelUser');
      $this->load->model('ModelKegiatan');
      $this->load->model('ModelMateri');
      $this->load->library('form_validation');

    }

    public function index() {

        $data['judul'] = 'Materi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->ModelMateri->getMateri()->result_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('materi/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function detail($id) {

        $data['judul'] = 'Detail Materi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->ModelMateri->materiWhere(['id_materi' => $id])->row_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('materi/detail', $data);
        $this->load->view('templates/admin_footer');
    }

    public function edit($id) {

        $data['judul'] = 'Edit Materi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->ModelMateri->materiWhere(['id_materi' => $id])->row_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('materi/edit', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update_materi() {

        $data['judul'] = 'Edit Materi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('penulis', 'penulis', 'trim|required');
        $this->form_validation->set_rules('materi', 'materi', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');

        if ( $this->form_validation->run()  == false){
            redirect('materi/edit');
        } else {

            $this->ModelMateri->updateMateri();
            redirect('materi');
            
        }

        
    }

    public function hapus($id){
        $this->ModelMateri->hapusMateri($id);
        redirect('materi');
      }

    public function tambah() {

        $data['judul'] = 'Edit Materi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('penulis', 'penulis', 'trim|required');
        $this->form_validation->set_rules('materi', 'materi', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');

        if ( $this->form_validation->run()  == false){
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('materi/tambah', $data);
            $this->load->view('templates/admin_footer');
        } else {

            $this->ModelMateri->simpanMateri();
            redirect('materi');
            
        }

        
    }
}