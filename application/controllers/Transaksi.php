<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('ModelUser');
        $this->load->model('ModelKegiatan');
        $this->load->library('form_validation');
    
      }
    
    public function index() {

        $data['judul'] = 'Metode Pembayaran';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['tran'] = $this->ModelKegiatan->transaksi()->result_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('templates/admin_footer');

    }

    public function hapus($id){
        $this->ModelKegiatan->hapusTransaksi($id);
        redirect('transaksi');
    }

    public function edit($id) {

        $data['judul'] = 'Edit Transaksi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['tran'] = $this->ModelKegiatan->KegiatanNo(['id_transaksi' => $id])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('transaksi/edit', $data);
        $this->load->view('templates/admin_footer');

        
    }

    public function update_transaksi() {

        $data['judul'] = 'Edit Materi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('metode', 'metode', 'trim|required');
        $this->form_validation->set_rules('norek', 'norek', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ( $this->form_validation->run()  == false){
            redirect('transaksi/edit');
        } else {

            $this->ModelKegiatan->updateTransaksi();
            redirect('transaksi');
            
        }

        
    }

    public function tambah() {

        $data['judul'] = 'Edit Materi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('metode', 'metode', 'trim|required');
        $this->form_validation->set_rules('norek', 'norek', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ( $this->form_validation->run()  == false){
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('transaksi/tambah', $data);
            $this->load->view('templates/admin_footer');
        } else {

            $this->ModelKegiatan->tambahTransaksi();
            redirect('transaksi');
            
        }
        
        
    }

    public function bukti($id) {

        $data['judul'] = 'Upload Bukti Pembayaran';
        $data['link'] = 'profil.css';
        $data['id'] = $id;
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->ModelKegiatan->KegiatanRiwayat(['id_user' => $this->session->userdata('id_user')])->result_array();
        $data['profil'] = $this->ModelUser->cekDaftar(['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('profil/bukti', $data);
        $this->load->view('templates/footer_user',);

    }

    public function upload_bukti() {

        $this->ModelKegiatan->bukti();
        redirect('kegiatan/kegiatan_anggota');

    }
}