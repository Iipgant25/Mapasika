<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKegiatan extends CI_Model{

    public function count()
    {
        return $this->db->get('kegiatan');
    }

    public function getKegiatanLimit($limit, $start)
    {
        return $this->db->get('kegiatan', $limit, $start);
    }

    public function KegiatanWhere($where = null)
    {
        return $this->db->get_where('kegiatan', $where);
    }

    public function Kegiatan()
    {
        return $this->db->get('kegiatan');
    }

    public function KegiatanRiwayat($where = null)
    {
        return $this->db->get_where('pendaftaran_kegiatan', $where);
    }

    public function KegiatanNo($where = null)
    {
        return $this->db->get_where('transaksi', $where);
    }

    public function transaksi()
    {
        return $this->db->get('transaksi');
    }

    public function hapusTransaksi($id)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->delete('transaksi');
    }

    public function updateTransaksi(){
        $data = [
          "metode_pembayaran" => $this->input->post('metode', true),
          "norek" => $this->input->post('norek', true),
          "atas_nama" => $this->input->post('nama', true)
        ];

          $id = $this->input->post('id', true);
          $this->db->where('id_transaksi', $id);
          $this->db->update('transaksi', $data);
    }

    public function tambahTransaksi(){
      $data = [
        "metode_pembayaran" => $this->input->post('metode', true),
        "norek" => $this->input->post('norek', true),
        "atas_nama" => $this->input->post('nama', true)
      ];

        $this->db->insert('transaksi', $data);
  }

  

    public function tambah($data)
    {
        $this->db->insert('pendaftaran_kegiatan', $data);
    }

    public function row($where = null){
        return $this->db->get_where('pendaftaran_kegiatan', $where);
     }

     public function updateKegiatan(){
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
            "tgl_kegiatan" => $this->input->post('tgl', true),
            "nama_kegiatan" => $this->input->post('judul', true),
            "lokasi" => $this->input->post('lokasi', true),
            "biaya" => $this->input->post('biaya', true),
            "thn" => $this->input->post('tahun', true),
            "img" => $gambar,
            "status" => $this->input->post('status', true)
          ];
  
            $id = $this->input->post('id_kegiatan', true);
            $this->db->where('id_kegiatan', $id);
            $this->db->update('kegiatan', $data);
        }
        else
        {
          $gambar = $this->upload->data();
          $data = [
            "tgl_kegiatan" => $this->input->post('tgl', true),
            "nama_kegiatan" => $this->input->post('judul', true),
            "lokasi" => $this->input->post('lokasi', true),
            "biaya" => $this->input->post('biaya', true),
            "thn" => $this->input->post('tahun', true),
            "img" => $gambar['file_name'],
            "status" => $this->input->post('status', true)
          ];
  
          $id = $this->input->post('id_kegiatan', true);
          $this->db->where('id_kegiatan', $id);
          $this->db->update('kegiatan', $data);
        }
  
      }

    public function hapusKegiatan($id)
    {
        $this->db->where('id_kegiatan', $id);
        $this->db->delete('kegiatan');
    }

    public function simpanKegiatan(){

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
            "tgl_kegiatan" => $this->input->post('tgl', true),
            "nama_kegiatan" => $this->input->post('judul', true),
            "lokasi" => $this->input->post('lokasi', true),
            "biaya" => $this->input->post('biaya', true),
            "thn" => $this->input->post('thn', true),
            "img" => $gambar['file_name'],
            "status" => 'buka'
          ];

          $this->db->insert('kegiatan', $data);
        }

    }

    function join2table(){
        $this->db->select('*');
        $this->db->from('pendaftaran_kegiatan');
        $this->db->join('user','user.id_user = pendaftaran_kegiatan.id_user');      
        return $this->db->get();
     }

    function join2where($data){
      $this->db->select('*');
      $this->db->from('pendaftaran_kegiatan');
      $this->db->join('user','user.id_user = pendaftaran_kegiatan.id_user');
      $this->db->where('pembayaran', $data);
      return $this->db->get();
   }

   function join($data){
    $this->db->select('*');
    $this->db->from('pendaftaran_kegiatan');
    $this->db->join('user','user.id_user = pendaftaran_kegiatan.id_user');
    $this->db->where('id_kegiatan', $data);
    return $this->db->get();
    
  }

  function join2($data){
    $this->db->select('*');
    $this->db->from('pendaftaran_kegiatan');
    $this->db->join('anggota','anggota.id_user = pendaftaran_kegiatan.id_user','LEFT');
    $this->db->join('user','user.id_user = pendaftaran_kegiatan.id_user','LEFT');   
    $this->db->where('id_kegiatan', $data);
    return $this->db->get();
    
  }

  function join3($data,$p){
    $this->db->select('*');
    $this->db->from('pendaftaran_kegiatan');
    $this->db->join('anggota','anggota.id_user = pendaftaran_kegiatan.id_user','LEFT');
    $this->db->join('user','user.id_user = pendaftaran_kegiatan.id_user','LEFT');   
    $this->db->where('id_kegiatan', $data);
    $this->db->where('pembayaran', $p);
    return $this->db->get();
    
  }



  public function join4table($data){

    $this->db->select('*');
    $this->db->from('pendaftaran_kegiatan');
    $this->db->join('user','user.id_user = pendaftaran_kegiatan.id_user','LEFT');      
    $this->db->join('kegiatan','pendaftaran_kegiatan.id_kegiatan = kegiatan.id_kegiatan','LEFT');
    $this->db->join('transaksi','pendaftaran_kegiatan.id_transaksi = transaksi.id_transaksi','LEFT');
    $this->db->where('id', $data);
    return $this->db->get();

 }


  public function bukti(){
    $config['upload_path']          = './assets/gambar/';
    $config['allowed_types']        = 'jpg|png|jpeg';
    $config['max_size']             = 2048;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('gambar'))
    {
      echo"gagal";
    }
    else
    {
      $gambar = $this->upload->data();
      $data = [
        "bukti" => $gambar['file_name'],
      ];

      $id = $this->input->post('id', true);
      $this->db->where('id', $id);
      $this->db->update('pendaftaran_kegiatan', $data);
    }

  }

}

