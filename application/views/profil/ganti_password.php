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
        <h3 class="alert alert-primary text-center" style="text-transform: uppercase;">Ganti Password</h3>
        <?= $this->session->flashdata('message');?>
            <div class="row">
                <div class="col">
                    <form action="<?= base_url('profil/ganti_password');?>" method="POST">
                        <div class="form-group">
                            <label for="lama">Password Lama</label>
                            <input type="password" class="form-control" id="lama" name="pwd_lama">
                            <?= form_error('pwd_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="baru">Password Baru</label>
                            <input type="password" class="form-control" id="baru" name="pwd_baru">
                            <?= form_error('pwd_baru', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="konfirmasi">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="konfirmasi" name="pwd_konfirm">
                            <?= form_error('pwd_konfirm', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>