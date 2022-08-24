<style>
    body{
        background-color: #DCDCDC;
    }
    label{
        color: black;
    }
</style>
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4 text-center">Selamat Datang<br><span>
        </span><br><span class="wlc">Di Profil <?= $user['nama']; ?></span> </h1>
	</div>
</div>
<!-- Akhir Jumbotron -->

<!-- Profil -->
<div class="container">
    <div class="row menu">
        <div class="col-lg-2 shadow p-3 mb-5 mr-4 bg-white rounded text-dark" style="height: 225px;">
            <a href="<?= base_url('profil');?>">
                <i class="fa-solid fa-user"></i>
                <span>Profil</span>
            </a>
            <a href="<?= base_url('profil/edit');?>">
                <i class="fa-solid fa-user-pen"></i>
                <span>Edit profil</span>
            </a>
            <a href="<?= base_url('profil/ganti_password');?>">
                <i class="fa-solid fa-unlock"></i>
                <span> Ganti Password</span>
            </a>
            <a href="<?= base_url('kegiatan/kegiatan_anggota');?>">
                <i class="fa-solid fa-align-justify"></i>
                <span>Kegiatan</span>
            </a>
            <a href="<?= base_url('auth/logout');?>">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </div>
        <div class="col-lg-9 shadow p-3 mb-5 bg-white rounded">
          <h3 class="alert alert-primary text-center" style="text-transform: uppercase;">kegiatan</h3>
            <div class="row">
                <div class="col">
                  <div class="container-fluid">
                  <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4" style="margin-top: -30px;">
                        <div class="card-header py-3">
                          <div class="row">
                            <h4 class="font-weight-bold text-primary">Daftar Riwayat Kegiatan</h4>
                          </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                          <th>Kegiatan</th>
                                          <th>Tanggal</th>
                                          <th>lokasi</th>
                                          <th>bayar</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Kegiatan</th>
                                          <th>Tanggal</th>
                                          <th>lokasi</th>
                                          <th>bayar</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($kegiatan as $k) { 

                                        $this->load->model('ModelKegiatan');
                                        $keg = $this->ModelKegiatan->KegiatanWhere(['id_kegiatan' => $k['id_kegiatan']])->row_array();

                                        ?>
                                        <tr>
                                            <td><?= $keg['nama_kegiatan'];?></td>
                                            <td nowrap><?= $keg['tgl_kegiatan'];?></td>
                                            <td nowrap><?= $keg['lokasi'];?></td>

                                            <?php if ($k['pembayaran'] == 'belum') { ?>
                                                <td nowrap class="text-danger"><?= $keg['biaya'];?></td>
                                                <td nowrap>Belum Lunas</td>
                                            <?php }else { ?>
                                                <td nowrap class="text-success">Lunas</td>
                                                <td nowrap>Peserta</td>
                                            <?php  } ?>
                                            <td nowrap><a href="<?= base_url('profil/detail/') . $k['id']; ?>" class="btn btn-primary">Detail</a></td>
                                            
                                        </tr>
                                      <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

