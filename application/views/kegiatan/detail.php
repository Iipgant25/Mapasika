<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Mapasika</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('kegiatan');?>">Kegiatan <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <div class="row detail mt-5 mb-5">
        <div class="col-lg-6">
            <img src="<?= base_url('assets');?>/gambar/<?= $kegiatan['img']; ?>" alt="gambar" class="img-fluid">
        </div>
        <div class="col-lg-6">
            <h3><?= $kegiatan['nama_kegiatan']; ?></h3>
            <h6>Lokasi : <?= $kegiatan['lokasi']; ?> | Tahun : <?= $kegiatan['thn']; ?></h6>
            <label>TGL Kegiatan : <?= $kegiatan['tgl_kegiatan']; ?></label><br>
            <?php if ($kegiatan['status'] == 'buka') {?>

                <p>Biaya : Rp. <?= $kegiatan['biaya']; ?></p><br>
                <?php if ($arah == 0) { ?>
                    <a href="#" data-toggle="modal" data-target="#kegiatan" class="btn btn-success tombol mt-5">Daftar</a>
                <?php }elseif ($arah == 1){ ?>
                    <a href="<?= base_url('kegiatan/kegiatan_anggota');?>" onclick="return confirm('anda sudah mendaftar kegiatan ini mohon untuk melakukan pembayaran jika belum lunas!')" class="btn btn-warning tombol mt-5">Udah Daftar</a>
                <?php }?>
            <?php }elseif ($kegiatan['status'] == 'tutup'){ ?>
                <p>Pendaftaran : Sudah Di Tutup</p><br>
                <a href="<?= base_url('kegiatan/');?>" class="btn btn-danger tombol mt-5">Tutup</a>
            <?php }?>
            
        </div>
    </div>
</div>