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
        <h3 class="alert alert-primary text-center">Upload Bukti Pembayaran</h3>
            <div class="row">
                <div class="col" style="font-size: 12px;">
                    <p class="text-dark">Jika kondisi yang menyebabkan anggota mapasika harus melakukan upload bukti pembayaran kegiatan, yaitu:</p>
                    <p class="text-dark" style="margin-top: -12px; margin-left: 5px;">- Sudah melakukan pembayaran, namun tidak terverifikasi oleh Admin sehingga status pembayaran masih " Belum Lunas ".</p>
                    <p class="text-dark">Tetapi diharapkan agar ketika setelah pembayaran dapat mengupload bukti pembayaran dapat berupa screenshot/foto..</p>
                    <form action="<?= base_url('transaksi/upload_bukti'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Foto <small style="color:green">(screenshoot) * </small></label>
                            <input type="file" accept="image/*" name="gambar">
                        </div>
                        <div class="form-group">
                            <input type="text" name="id" value="<?= $id; ?>" hidden>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>