<style>
    body{
        background-color: #DCDCDC;
    }
    label{
        color: black;
    }
    .edit{
        height: 1600px;
    }



    /* desktop version */
    @media (min-width: 992px) {
        .edit{
            height: 900px;
        }
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
        <div class="col-lg-2 shadow p-3 mr-4 mb-5 bg-white rounded text-dark" style="height: 225px;">
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
        <div class="col-lg-9 edit shadow p-3 mb-5 bg-light rounded"">
        <h3 class="alert alert-primary text-center" style="text-transform: uppercase;">PROFIL <?= $profil['nama_lengkap'];?></h3>
            <div class="row">
                <div class="col">
                    <div class="container-fluid" style="height: 680px;">
                    <!-- Card -->
                        <div class="card mb-3">
                            <div class="card-header text-center text-dark">
                                Edit Profil
                            </div>
                            <div class="card-body">
                                <div class="content-wrapper">
                                <section class="content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box box-primary">
                                                <div class="box-header with-border">
                                                </div>
                                            <!-- box-header -->
                                            <div class="box-body">
                                                    <form action="<?= base_url('profil/edit');?>" method="POST" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Nama Lengkap</label>
                                                                    <input type="text" class="form-control" name="nama"  value="<?= $profil['nama_lengkap'];?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>NIM</label>
                                                                    <input type="text" class="form-control" name="nim"  value="<?= $profil['nim'];?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tempat Lahir</label>
                                                                    <input type="text" class="form-control" name="tempat"  value="<?= $profil['tempat_lahir'];?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tanggal Lahir</label>
                                                                    <input type="date" class="form-control" name="tgl"  value="<?= $profil['tgl_lahir'];?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kampus</label>
                                                                    <input type="text" class="form-control" name="kampus"  value="<?= $profil['kampus'];?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Alamat</label>
                                                                    <input type="text" class="form-control" name="alamat"  value="<?= $profil['alamat'];?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>No Hp</label>
                                                                    <input type="text" class="form-control" name="no" value="<?= $profil['nomer_hp'];?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Berat Badan</label>
                                                                    <input type="number" class="form-control" name="bb" value="<?= $profil['berat_badan'];?>">
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label>Tinggi Badan</label>
                                                                    <input type="number" class="form-control" name="tb"  value="<?= $profil['tinggi_badan'];?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jenis Kelamin</label>
                                                                    <select class="form-control select2" required="required"  name="jeniskel">
                                                                        <option value="<?= $profil['jenis_kelamin'];?>">pilih</option>
                                                                        <option value="L">Laki Laki</option>
                                                                        <option value="P">Perempuan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Riwayat Penyakit</label>
                                                                    <input type="text" class="form-control" name="rp" value="<?= $profil['riwayat_penyakit'];?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Obat Riwayat Penyakit</label>
                                                                    <input type="text" class="form-control" name="orp" value="<?= $profil['obat_riwayat_penyakit'];?>">
                                                                </div>   
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="jabatan"  value="<?= $profil['jabatan'];?>" hidden>
                                                                    <input type="text" class="form-control" name="id_user"  value="<?= $profil['id_user'];?>" hidden>
                                                                    <input type="text" class="form-control" name="img"  value="<?= $profil['foto'];?>" hidden>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <img src="<?= base_url('assets');?>/img/<?= $profil['foto'];?>" width="100px">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Foto <small style="color:green">(gambar) * opsional</small></label>
                                                                    <input type="file" accept="image/*" name="gambar">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pull-right">
                                                            <input type="hidden" name="tambah" value="tambah">
                                                            <button type="submit" class="btn btn-primary btn-md">Save</button>
                                                    </form>
                                                            <a href="#" class="btn btn-danger btn-md">Kembali</a>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



