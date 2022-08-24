<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMateri extends CI_Model
{

    public function getMateri()
    {
        return $this->db->get('materi');
    }

    public function materiWhere($where = null)
    {
        return $this->db->get_where('materi', $where);
    }

    public function updateMateri(){
        $config['upload_path']          = './assets/gambar/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 3000;
        $config['max_height']           = 3000;
  
        $this->load->library('upload', $config);
  
        if ( ! $this->upload->do_upload('gambar'))
        {
          $gambar = $this->input->post('img', true);
  
          $data = [
            "judul_materi" => $this->input->post('judul', true),
            "penulis" => $this->input->post('penulis', true),
            "tahun" => $this->input->post('tahun', true),
            "image" => $gambar,
            "materi" => $this->input->post('materi', true),
            "deskripsi" => $this->input->post('deskripsi', true)
          ];
  
            $id = $this->input->post('id_materi', true);
            $this->db->where('id_materi', $id);
            $this->db->update('materi', $data);
        }
        else
        {
          $gambar = $this->upload->data();
          $data = [
            "judul_materi" => $this->input->post('judul', true),
            "penulis" => $this->input->post('penulis', true),
            "tahun" => $this->input->post('tahun', true),
            "image" => $gambar['file_name'],
            "materi" => $this->input->post('materi', true),
            "deskripsi" => $this->input->post('deskripsi', true)
          ];
  
          $id = $this->input->post('id_materi', true);
          $this->db->where('id_materi', $id);
          $this->db->update('materi', $data);
        }
  
      }

    public function hapusMateri($id)
    {
        $this->db->where('id_materi', $id);
        $this->db->delete('materi');
    }

    public function simpanMateri(){

        $config['upload_path']          = './assets/gambar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 3000;
        $config['max_height']           = 3000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar'))
        {
          echo "gagal";
        }
        else
        {

          $gambar = $this->upload->data();
          $data = [
            "judul_materi" => $this->input->post('judul', true),
            "penulis" => $this->input->post('penulis', true),
            "tahun" => $this->input->post('tahun', true),
            "image" => $gambar['file_name'],
            "materi" => $this->input->post('materi', true),
            "deskripsi" => $this->input->post('deskripsi', true)
          ];

          $this->db->insert('materi', $data);
        }

    }

}