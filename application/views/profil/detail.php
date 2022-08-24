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
        <h3 class="alert alert-primary text-center" style="text-transform: uppercase;">detail</h3>
        <?= $this->session->flashdata('message');?>
            <div class="row">
                <div class="col-5">
                    <h5>Nama</h5>
                    <h5>Kegiatan</h5>
                    <h5>Tanggal</h5>
                    <h5>Lokasi</h5>
                    <h5>Biaya</h5>
                    <h5>Metode Pembayaran</h5>
                    <h5>Nomor Rekening/Hp</h5>
                    <h5>Atas Nama</h5>
                    <?php if ($id1['pembayaran'] == 'belum') { ?>
                        <a href="<?= base_url('transaksi/bukti/') . $id;?>" class="btn btn-secondary mt-4">upload bukti</a>
                    <?php }else { ?>
                        <a href="<?= base_url('kegiatan/kegiatan_anggota');?>" class="btn btn-danger mt-4">Kembali</a>
                    <?php  } ?>
                </div>
                <div class="col-5">
                    <h5><?= $user['nama'];?></h5>
                    <h5><?= $keg['nama_kegiatan'];?></h5>
                    <h5><?= $keg['tgl_kegiatan'];?></h5>
                    <h5><?= $keg['lokasi'];?></h5>
                    <h5><?= $keg['biaya'];?></h5>
                    <h5><?= $tran['metode_pembayaran'];?></h5>
                    <h5><?= $tran['norek'];?></h5>
                    <h5><?= $tran['atas_nama'];?></h5>
                    
                </div>
                <div class="col-2">
                    <?php if ($id1['pembayaran'] == 'lunas') { ?>
                        <img src="<?= base_url('assets');?>/gambar/lunas.jpg" alt="gambar" class="img-fluid"" alt="foto">
                    <?php }else { ?>
                        <img src="<?= base_url('assets/gambar/') . $keg['img'];?>" alt="gambar" class="img-fluid"" alt="foto">
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</div>