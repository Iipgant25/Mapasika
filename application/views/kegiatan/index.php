<style>
    .jumbotron{
        margin-top: -75px;
        height: 440px;
        background-size: cover;
        background-image: url(<?=base_url('assets/')?>/gambar/mendaki.jpeg);}
    
    
    .jumbotron .display-4 {
        color: white;
        margin-top: 100px;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.6);
        font-size: 30px;
        margin-bottom: 30px;
        
    }
    .jumbotron .display-4 span {
        font-weight: 500;
    }

    .jumbotron .display-4 .wlc {
        font-weight: 300;
        font-size: 20px;
        font-family: viga;
        
    }
</style>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4 text-center">Selamat Beraktivitas<br><span><?= $user['nama']; ?></span><br>
		</div>
</div>
<!-- Akhir Jumbotron -->

<!-- Kegiatan -->
<div class="container mt-5 mb-5">
    
    <div class="row">
        <div class="col-lg">
            <div class="title mt-2 mb-2">
                <h2>Kegiatan Terbaru</h2>
            </div>
            <div class="row">
                <?php foreach ($kegiatan as $k): ?>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?= base_url('assets');?>/gambar/<?= $k['img']; ?>" style="height: 200px;" alt="gambar">
                            <h5 class="card-title" style="min-height:30px; white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                max-width: 400px;"><?= $k['nama_kegiatan']; ?></h5>
                            <p class="card-text" style="min-height:30px; white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                max-width: 400px;">Lokasi : <?= $k['lokasi']; ?></p>
                            <?php if ($k['status'] == 'buka') { ?>
                                <p class="card-text" style="margin-top: -30px;">Biaya :Rp. <?= $k['biaya']; ?></p>
                                <a href="<?= base_url('kegiatan/detail/') . $k['id_kegiatan']; ?>" class="btn btn-success">Detail Kegiatan</a>
                            <?php }elseif ($k['status'] == 'tutup'){ ?>
                                <p class="card-text" style="margin-top: -30px;">Pendaftaran : Di tutup</p>
                                <a href="<?= base_url('kegiatan/detail/') . $k['id_kegiatan']; ?>" class="btn btn-danger">Detail Kegiatan</a>
                            <?php }?>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <br>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>