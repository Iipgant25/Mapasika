<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('ModelUser');
        $this->load->model('ModelKegiatan');
        $this->load->library('form_validation');
    
      }
    
    public function index() {

        $data['judul'] = 'Profil';
        $data['link'] = 'profil.css';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->ModelUser->cekDaftar(['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('profil/index', $data);
        $this->load->view('templates/footer_user',);

    }

    public function edit() {

        $data['judul'] = 'Edit Profil';
        $data['link'] = 'profil.css';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->ModelUser->cekDaftar(['id_user' => $this->session->userdata('id_user')])->row_array();
        
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
        $this->form_validation->set_rules('rp', 'riwayat penyakit', 'trim');
        $this->form_validation->set_rules('orp', 'obat riwayat penyakit', 'trim');

        if ( $this->form_validation->run()  == false){
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('profil/edit', $data);
            $this->load->view('templates/footer_user',);
        } else {

            $this->ModelUser->updateAnggota();
            redirect('profil');
            
        }

        

    }


    public function ganti_password() {

        $data['judul'] = 'Ganti Password';
        $data['link'] = 'profil.css';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->ModelUser->cekDaftar(['id_user' => $this->session->userdata('id_user')])->row_array();
        
        $this->form_validation->set_rules('pwd_lama', 'password lama', 'required|trim');
        $this->form_validation->set_rules('pwd_baru', 'password baru', 'required|trim|min_length[3]|matches[pwd_konfirm]');
        $this->form_validation->set_rules('pwd_konfirm', 'password konfirmasi', 'required|trim|min_length[3]|matches[pwd_baru]');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('profil/ganti_password', $data);
            $this->load->view('templates/footer_user',);
        } else {
            $pwd_lama = $this->input->post('pwd_lama');
            $pwd_baru = $this->input->post('pwd_baru');
            if (!password_verify($pwd_lama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">password salah!</div>');
                redirect('profil/ganti_password');
            } else {
                if ($pwd_lama == $pwd_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">password tidak sama!</div>');
                    redirect('profil/ganti_password');
                } else {
                    // password sudah benar
                    $password_hash = password_hash($pwd_baru, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">password berhasil diubah</div>');
                    redirect('profil/ganti_password');
                }
            }
        }
        

    }

    public function detail($id) {

        $data['judul'] = 'detail';
        $data['link'] = 'profil.css';
        $data['id'] = $id;
        $data['id1'] = $this->ModelKegiatan->KegiatanRiwayat(['id' => $id])->row_array();
        $data['tran'] = $this->ModelKegiatan->KegiatanNo(['id_transaksi' => $data['id1']['id_transaksi']])->row_array();
        $data['keg'] = $this->ModelKegiatan->KegiatanWhere(['id_kegiatan' => $data['id1']['id_kegiatan']])->row_array();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->ModelUser->cekDaftar(['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('profil/detail', $data);
        $this->load->view('templates/footer_user',);


    }


}