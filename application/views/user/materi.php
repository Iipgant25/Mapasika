<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4 text-center">Selamat Membaca...<br><span><?= $user['nama']; ?></span><br>
            <span class="wlc"> "Ilmu itu ada di mana-mana, pengetahuan di mana-mana tersebar,<br> kalau kita bersedia membaca, dan bersedia mendengar."</span> </h1>
			
		</div>
</div>
<!-- Akhir Jumbotron -->

<!-- Materi -->
<div class="container mt-5 mb-5">
        <div class="title mb-5">
                <h2>Materi</h2>
        </div>
      <div class="row">
        <?php foreach ($materi as $m): ?>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets');?>/gambar/<?=$m['image'];?>" style="height: 200px;" alt="gambar">
                <h5 class="card-title"><?= $m['judul_materi']; ?></h5>
                <p class="card-text" style="min-height:30px; white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    max-width: 400px;"><?= $m['deskripsi']; ?></p>
                <a href="<?= base_url('user/detail/') . $m['id_materi']; ?>" class="btn btn-success">Detail Materi</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <?= $this->pagination->create_links(); ?>
    <!-- Akhir Materi -->