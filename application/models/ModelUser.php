<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function insert()
    {
        $this->db->insert('profil');
    }

    public function getMateriLimit($limit, $start)
    {
        return $this->db->get('materi', $limit, $start);
    }

    public function count()
    {
        return $this->db->get('materi');
    }
    public function materiWhere($where = null)
    {
        return $this->db->get_where('materi', $where);
    }

    public function simpanDaftar(){

        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 3000;
        $config['max_height']           = 3000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {
          echo "gagal";
        }
        else
        {

          $gambar = $this->upload->data();
          $jabatan = 'calon anggota';
          $data = [
            "id_user" => $this->input->post('id', true),
            "nama_lengkap" => $this->input->post('nama', true),
            "tempat_lahir" => $this->input->post('tempat', true),
            "tgl_lahir" => $this->input->post('tgl', true),
            "nim" => $this->input->post('nim', true),
            "kampus" => $this->input->post('kampus', true),
            "alamat" => $this->input->post('alamat', true),
            "nomer_hp" => $this->input->post('no', true),
            "berat_badan" => $this->input->post('bb', true),
            "tinggi_badan" => $this->input->post('tb', true),
            "jenis_kelamin" => $this->input->post('jeniskel', true),
            "riwayat_penyakit" => $this->input->post('rp', true),
            "obat_riwayat_penyakit" => $this->input->post('orp', true),
            "foto" => $gambar['file_name'],
            "jabatan" => $jabatan
          ];

          $this->db->insert('anggota', $data);
        }

    }


    public function cekDaftar($where = null)
    {
        return $this->db->get_where('anggota', $where);
    }

    public function getAnggota()
    {
        return $this->db->get('anggota');
    }

    public function anggotaUpdate()
    {
      $data = [
        "jabatan" => $this->input->post('jabatan', true)
      ];

        $id = $this->input->post('id_user', true);
        $this->db->where('id_user', $id);
        return $this->db->update('anggota', $data);
    }









    public function updateAnggota(){
      $config['upload_path']          = './assets/img/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 2048;
      $config['max_width']            = 3000;
      $config['max_height']           = 3000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('gambar'))
      {
        $gambar = $this->input->post('img', true);

        $data = [
          "nama_lengkap" => $this->input->post('nama', true),
          "tempat_lahir" => $this->input->post('tempat', true),
          "tgl_lahir" => $this->input->post('tgl', true),
          "nim" => $this->input->post('nim', true),
          "kampus" => $this->input->post('kampus', true),
          "alamat" => $this->input->post('alamat', true),
          "nomer_hp" => $this->input->post('no', true),
          "berat_badan" => $this->input->post('bb', true),
          "tinggi_badan" => $this->input->post('tb', true),
          "jenis_kelamin" => $this->input->post('jeniskel', true),
          "riwayat_penyakit" => $this->input->post('rp', true),
          "obat_riwayat_penyakit" => $this->input->post('orp', true),
          "foto" => $gambar,
          "jabatan" => $this->input->post('jabatan', true)
        ];

          $id = $this->input->post('id_user', true);
          $this->db->where('id_user', $id);
          $this->db->update('anggota', $data);
      }
      else
      {
        $gambar = $this->upload->data();
        $data = [
          "nama_lengkap" => $this->input->post('nama', true),
          "tempat_lahir" => $this->input->post('tempat', true),
          "tgl_lahir" => $this->input->post('tgl', true),
          "nim" => $this->input->post('nim', true),
          "kampus" => $this->input->post('kampus', true),
          "alamat" => $this->input->post('alamat', true),
          "nomer_hp" => $this->input->post('no', true),
          "berat_badan" => $this->input->post('bb', true),
          "tinggi_badan" => $this->input->post('tb', true),
          "jenis_kelamin" => $this->input->post('jeniskel', true),
          "riwayat_penyakit" => $this->input->post('rp', true),
          "obat_riwayat_penyakit" => $this->input->post('orp', true),
          "foto" => $gambar['file_name'],
          "jabatan" => $this->input->post('jabatan', true)
        ];

          $id = $this->input->post('id_user', true);
          $this->db->where('id_user', $id);
          $this->db->update('anggota', $data);
      }

    }

    public function update1($id,$data)
    {
      $this->db->where('id_user', $id);
      return $this->db->update('user', $data);
    }

    public function update2($id,$data)
    {
      $this->db->where('id_user', $id);
      return $this->db->update('anggota', $data);
    }




    public function getUser()
    {
        return $this->db->get('user');
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function cekProfil($where = null)
    {
        return $this->db->get_where('profil', $where);
    }

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }

    public function hapusUser($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    public function hapusKategori($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }

    function joinAnggota($id){
      $this->db->select('*');
      $this->db->from('user');
      $this->db->join('anggota','anggota.id_user = user.id_user');
      $this->db->where('role_id', $id);
      return $this->db->get();
   }

}
