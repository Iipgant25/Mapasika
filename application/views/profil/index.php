<style>
    body{
        background-color: #DCDCDC;
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
        <h3 class="alert alert-primary text-center" style="text-transform: uppercase;">PROFIL <?= $profil['nama_lengkap'];?></h3>
            <div class="row">
                <div class="col-8">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="text-dark">
                                <td>Nama Lengkap</td>
                                <td><?= $profil['nama_lengkap'];?></td>
                            </tr>
                            <tr class="text-dark">
                                <td>NIM</td>
                                <td><?= $profil['nim'];?></td>
                            </tr>
                            <tr class="text-dark">
                                <td>Tempat Lahir</td>
                                <td><?= $profil['tempat_lahir'];?></td>
                            </tr>
                            <tr class="text-dark">
                                <td>Tanggal Lahir</td>
                                <td><?= $profil['tgl_lahir'];?></td>
                            </tr>
                            <tr class="text-dark">
                                <td>Kampus</td>
                                <td><?= $profil['kampus'];?></td>
                            </tr>
                            <tr class="text-dark">
                                <td>Alamat</td>
                                <td><?= $profil['alamat'];?></td>
                            </tr>
                            <tr class="text-dark">
                                <td>No Hp</td>
                                <td><?= $profil['nomer_hp'];?></td>
                            </tr>
                            <tr class="text-dark">
                                <td>Berat Badan</td>
                                <td><?= $profil['berat_badan'];?> Kg</td>
                            </tr>
                            <tr class="text-dark">
                                <td>Tinggi Badan</td>
                                <td><?= $profil['tinggi_badan'];?> cm</td>
                            </tr>
                            <tr class="text-dark">
                                <td>Jenis Kelamin</td>
                                <td><?= $profil['jenis_kelamin'];?></td>
                            </tr>
                            <tr class="text-dark">
                                <td>Riwayat Penyakit</td>
                                <td><?= $profil['riwayat_penyakit'];?></td>
                            </tr>
                            <tr class="text-dark">
                                <td>Obat Riwayat Penyakit</td>
                                <td><?= $profil['obat_riwayat_penyakit'];?></td>
                            </tr>
                            <tr class="text-dark">
                                <td>Jabatan</td>
                                <td><?= $profil['jabatan'];?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-4 image">
                    <img src="<?= base_url('assets');?>/img/<?= $profil['foto'];?>" alt="gambar">
                </div>
            </div>
        </div>
    </div>
</div>