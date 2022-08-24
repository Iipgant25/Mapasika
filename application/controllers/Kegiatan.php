<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('ModelUser');
        $this->load->model('ModelKegiatan');
        $this->load->library('form_validation');
    
      }
    
    public function index() {

        $config['base_url'] = 'http://localhost/mapasika/kegiatan/index';
        $config['total_rows'] = $this->ModelKegiatan->count()->num_rows();
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



        $data['judul'] = 'Kegiatan';
        $data['link'] = 'kegiatan.css';
        $data['start'] = $this->uri->segment(3);
        $data['kegiatan'] = $this->ModelKegiatan->getKegiatanLimit($config['per_page'], $data['start'])->result_array();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('kegiatan/index', $data);
        $this->load->view('templates/footer_user',);
    }

    public function detail($id) {

        $data['judul'] = 'Detail Kegiatan';
        $data['link'] = 'detail.css';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->cekDaftar(['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['tran'] = $this->ModelKegiatan->transaksi()->result_array();
        $data['kegiatan'] = $this->ModelKegiatan->KegiatanWhere(['id_kegiatan' => $id])->row_array();

        
        $array = array('id_kegiatan' => $id, 'id_user' => $data['user']['id_user']);
        

        $data['arah'] = $this->ModelKegiatan->row($array)->num_rows();



        if ($data['user']['role_id'] == 1) {
            $this->load->view('user/blank2');
        }elseif ($data['user']['role_id'] == 3) {
            
            $this->load->view('templates/header_user', $data);
            $this->load->view('kegiatan/detail', $data);
            $this->load->view('templates/footer_user',$data);

        }
        
    }

    public function kegiatan_anggota() {

        $data['judul'] = 'Daftar Riwayat Kegiatan';
        $data['link'] = 'profil.css';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->ModelKegiatan->KegiatanRiwayat(['id_user' => $this->session->userdata('id_user')])->result_array();
        $data['profil'] = $this->ModelUser->cekDaftar(['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('profil/kegiatan_anggota', $data);
        $this->load->view('templates/footer_user',);

    }
    
    public function daftar_k() {

        $data['judul'] = 'Detail Transaksi';
        $data['link'] = 'detail.css';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->cekDaftar(['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['tran'] = $this->ModelKegiatan->transaksi()->result_array();

        $this->form_validation->set_rules('metode', 'metode', 'trim|required');

        if ( $this->form_validation->run()  == false){

            $this->load->view('templates/header_user', $data);
            $this->load->view('kegiatan/detail', $data);
            $this->load->view('templates/footer_user',$data);
            
        } else {

            $metod = $this->input->post('metode', true);
            $id_kegiatan = $this->input->post('id_kegiatan', true);
            $id = $this->ModelKegiatan->KegiatanNo(['metode_pembayaran' => $metod])->row_array();
            $id_transaksi = $id['id_transaksi'];
            $id_user = $data['user']['id_user'];
            $pembayaran = 'belum';

            $isi = [
                "id_kegiatan" => $id_kegiatan,
                "id_transaksi" => $id_transaksi,
                "id_user" => $id_user,
                "pembayaran" => $pembayaran
            ];


            $this->ModelKegiatan->tambah($isi);
            redirect('kegiatan/kegiatan_anggota');
            
        }
        
    }

    public function daftar_kegiatan() {

        $data['judul'] = 'Daftar Kegiatan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->ModelKegiatan->count()->result_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('kegiatan/daftar_kegiatan', $data);
        $this->load->view('templates/admin_footer');

    }

    public function detail_k($id) {

        $data['judul'] = 'Detail Materi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->ModelKegiatan->KegiatanWhere(['id_kegiatan' => $id])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('kegiatan/detail_k', $data);
        $this->load->view('templates/admin_footer');
    }


    public function edit($id) {

        $data['judul'] = 'Edit Kegiatan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->ModelKegiatan->KegiatanWhere(['id_kegiatan' => $id])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('kegiatan/edit', $data);
        $this->load->view('templates/admin_footer');

        
    }

    public function update_kegiatan() {

        $data['judul'] = 'Edit Materi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('tgl', 'tanggal', 'required');
        $this->form_validation->set_rules('lokasi', 'lokasi', 'required');
        $this->form_validation->set_rules('biaya', 'biaya', 'trim|required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        if ( $this->form_validation->run()  == false){
            redirect('kegiatan/edit');
        } else {

            $this->ModelKegiatan->updateKegiatan();
            redirect('kegiatan/daftar_kegiatan');
            
        }

        
    }

    public function hapus($id){
        $this->ModelKegiatan->hapusKegiatan($id);
        redirect('kegiatan/daftar_kegiatan');
    }

    public function tambah() {

        $data['judul'] = 'Edit Materi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('tgl', 'penulis', 'trim|required');
        $this->form_validation->set_rules('lokasi', 'materi', 'required');
        $this->form_validation->set_rules('biaya', 'deskripsi', 'trim|required');
        $this->form_validation->set_rules('thn', 'tahun', 'required');

        if ( $this->form_validation->run()  == false){
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('kegiatan/tambah', $data);
            $this->load->view('templates/admin_footer');
        } else {

            $this->ModelKegiatan->simpanKegiatan();
            redirect('kegiatan/daftar_kegiatan');
            
        }
        
    }

    public function pendaftaran_k() {

        $data['judul'] = 'Daftar Pendaftaran Kegiatan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->ModelKegiatan->join2table()->result_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('kegiatan/pendaftaran', $data);
        $this->load->view('templates/admin_footer');

    }

    public function bayar_p($id) {

        $data = [
            "pembayaran" => 'lunas'
        ];

        $this->db->where('id', $id);
        $this->db->update('pendaftaran_kegiatan', $data);
        redirect('kegiatan/pendaftaran_k');
    

    }

    public function filter_p($id) {

        $data['judul'] = 'Daftar Pendaftaran Kegiatan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->ModelKegiatan->join2where($id)->result_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('kegiatan/pendaftaran', $data);
        $this->load->view('templates/admin_footer');

    }

    public function filter_k($id) {

        $data['judul'] = 'Daftar Pendaftaran Kegiatan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->ModelKegiatan->join($id)->result_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('kegiatan/pendaftaran', $data);
        $this->load->view('templates/admin_footer');

    }

    public function detail_p($id) {

        $data['judul'] = 'Detail Pendaftaran Kegiatan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->ModelKegiatan->join4table($id)->row_array();
        $data['anggota'] = $this->ModelUser->cekDaftar(['id_user' => $data['kegiatan']['id_user']])->row_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('kegiatan/detail_p', $data);
        $this->load->view('templates/admin_footer');

    }

}
