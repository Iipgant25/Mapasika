<!-- nav bar --> 
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        <a class="navbar-brand" href="#"><span>Mapasika</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="<?= base_url('user');?>"><span>Beranda</span></a>
                    <a class="nav-link" href="<?= base_url('user/materi');?>"><span>Materi</span></a>
                    <a class="nav-link" href="<?= base_url('kegiatan/');?>"><span>Kegiatan</span></a>
                <?php if ($user['role_id'] == 1) { ?>
                    <a class="nav-link" href="<?= base_url('auth/logout');?>"><span>logout</span></a>
                </div>
                    <a class="btn btn-succces tombol" href="<?= base_url('user/daftar');?>">Daftar</a>
                <?php }else{ ?>
                    <a class="nav-link" href="<?= base_url('profil/');?>"><span>Profil</span></a>
                    <a class="nav-link" href="<?= base_url('auth/logout');?>"><span>logout</span></a>
                </div>
                <?php }?>
            </div>
        </div>
    </nav>
    <!-- akhir nav bar -->

    