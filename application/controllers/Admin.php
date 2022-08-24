<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
      parent::__construct();
      $this->load->model('ModelUser');
      $this->load->model('ModelKegiatan');
      $this->load->library('form_validation');

    }

    public function index() {

        $data['judul'] = 'Dasboard';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->cekData(['role_id' => 3])->num_rows();
        $data['user1'] = $this->ModelUser->cekData(['role_id' => 1])->num_rows();
        $data['kegiatan'] = $this->ModelKegiatan->count()->num_rows();
        $data['materi'] = $this->ModelUser->count()->num_rows();
        $data['daftar_anggota'] = $this->ModelUser->cekData(['role_id' => 3])->result_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function detail($id) {

      $data['judul'] = 'Detail';
      $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $data['anggota'] = $this->ModelUser->cekDaftar(['id_user' => $id])->row_array();


      $this->load->view('templates/admin_header', $data);
      $this->load->view('templates/admin_sidebar', $data);
      $this->load->view('templates/admin_topbar', $data);
      $this->load->view('admin/detail', $data);
      $this->load->view('templates/admin_footer');
  }

    public function pendaftaran() {

      $data['judul'] = 'Pendaftaran';
      $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $data['daftar_daftar'] = $this->ModelUser->cekDaftar(['jabatan' => 'calon anggota'])->result_array();



      $this->load->view('templates/admin_header', $data);
      $this->load->view('templates/admin_sidebar', $data);
      $this->load->view('templates/admin_topbar', $data);
      $this->load->view('admin/pendaftaran', $data);
      $this->load->view('templates/admin_footer');
    }

    public function lolos($id) {

      $data = [
        "jabatan" => 'anggota muda'
      ];
      $data1 = [
        "role_id" => 3
      ];

      $this->ModelUser->update1($id,$data1);
      $this->ModelUser->update2($id,$data);

      redirect('admin/pendaftaran');

    }


    public function anggota() {

      $data['judul'] = 'Anggota';
      $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $data['daftar_anggota'] = $this->ModelUser->cekData(['role_id' => 3])->result_array();


      $this->load->view('templates/admin_header', $data);
      $this->load->view('templates/admin_sidebar', $data);
      $this->load->view('templates/admin_topbar', $data);
      $this->load->view('admin/anggota', $data);
      $this->load->view('templates/admin_footer');
  }

  public function jabatan_anggota($id) {

    $data['judul'] = 'Jabatan';
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['daftar_anggota'] = $this->ModelUser->cekData(['role_id' => 3])->result_array();
    $data['id'] = $id;


    $this->load->view('templates/admin_header', $data);
    $this->load->view('templates/admin_sidebar', $data);
    $this->load->view('templates/admin_topbar', $data);
    $this->load->view('admin/jabatan_anggota', $data);
    $this->load->view('templates/admin_footer');
}

  public function jabatan() {
    
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['daftar_anggota'] = $this->ModelUser->cekData(['role_id' => 3])->result_array();

  
    $this->form_validation->set_rules('jabatan', 'jabatan', 'trim');

    if ( $this->form_validation->run()  == false){
      $this->load->view('templates/admin_header', $data);
      $this->load->view('templates/admin_sidebar', $data);
      $this->load->view('templates/admin_topbar', $data);
      $this->load->view('admin/anggota', $data);
      $this->load->view('templates/admin_footer');
    } else {

        $this->ModelUser->anggotaUpdate();
        redirect('admin/anggota');
        
    }
    
  }

}
