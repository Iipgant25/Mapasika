<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Mapasika</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('user/materi');?>">Materi <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row detail mt-5 mb-5">
        <div class="col-lg-6">
            <img src="<?= base_url('assets');?>/gambar/<?=$materi['image'];?>" alt="gambar" class="img-fluid">
        </div>
        <div class="col-lg-6">
            <h3><?= $materi['judul_materi']; ?></h3>
            <h6>Penulis : <?= $materi['penulis']; ?> | Tahun : <?= $materi['tahun']; ?></h6>
            <label>Deskripsi :</label><br>
            <p><?= $materi['deskripsi']; ?></p>
            <a href="<?= $materi['materi']; ?>" target="_blank" class="btn btn-primary tombol mt-5">Baca Materi</a>
        </div>
    </div>
</div>