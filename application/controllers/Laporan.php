<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('ModelUser');
        $this->load->model('ModelKegiatan');
        $this->load->library('form_validation');
    
      }
    
    public function index() {
        $data['judul'] = 'Laporan Data Anggota';
        $role = 3;
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['daftar_anggota'] = $this->ModelUser->joinAnggota($role)->result_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/laporan_anggota', $data);
        $this->load->view('templates/admin_footer');
    }

    public function print() {

        $role = 3;

        $data['daftar_anggota'] = $this->ModelUser->joinAnggota($role)->result_array();
        $this->load->view('laporan/print', $data);
        
    }

    public function excel() {

        $role = 3;
        $data['daftar_anggota'] = $this->ModelUser->joinAnggota($role)->result_array();
        $this->load->view('laporan/excel', $data);
    }

    public function data_PK() {

        $data['judul'] = 'Laporan Data Kegiatan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->ModelKegiatan->kegiatan()->result_array();
        $data['keg'] = $this->ModelKegiatan->KegiatanWhere(['status' => 'buka'])->result_array();



        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/laporan_kegiatan', $data);
        $this->load->view('templates/admin_footer');
    }

    public function print_k($id) {

        $data['kegiatan'] = $this->ModelKegiatan->join2($id)->result_array();
        $data['nama_k'] = $this->ModelKegiatan->KegiatanWhere(['id_kegiatan' => $id])->row_array();
        
        $this->load->view('laporan/print_k', $data);
        
    }

    public function export() {

        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->ModelKegiatan->kegiatan()->result_array();
        $data['keg'] = $this->ModelKegiatan->KegiatanWhere(['status' => 'buka'])->result_array();

        $ex = $this->input->post('export', true);
        $id = $this->input->post('kegiatan', true);
        $pembayaran = $this->input->post('pembayaran', true);

        if ($ex == 'print') {

            $data['kegiatan'] = $this->ModelKegiatan->join3($id,$pembayaran)->result_array();
            $data['nama_k'] = $this->ModelKegiatan->KegiatanWhere(['id_kegiatan' => $id])->row_array();
            
            $this->load->view('laporan/print_k', $data);

        }else {

            $data['kegiatan'] = $this->ModelKegiatan->join3($id,$pembayaran)->result_array();
            $data['nama_k'] = $this->ModelKegiatan->KegiatanWhere(['id_kegiatan' => $id])->row_array();

            $this->load->view('laporan/excel_k', $data);

        }
    }
}
