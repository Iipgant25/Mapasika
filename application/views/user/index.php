    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4 text-center">Selamat Datang<br><span><?= $user['nama']; ?></span><br><span class="wlc">"Tanam benih kebahagiaan, harapan, kesuksesan, dan cinta;<br> semuanya akan kembali kepadamu dengan berlimpah. Ini adalah hukum alam." </span> </h1>
			
		</div>
	</div>
    <!-- Akhir Jumbotron -->

    <!-- Content --->
	
    <!--Gallery--->
	<section class="destination">
		<div class="title">
			<h2>Mapasika</h2>
		</div>

		<div class="destination-content">
			<div class="col-content">
				<img src="<?= base_url('assets');?>/gambar/H.jpg">
				<h5>Mendaki Gunung</h5>
				<p>MAPASIKA</p>
			</div>

			<div class="col-content">
				<img src="<?= base_url('assets');?>/gambar/K.jpg">
				<h5>Berkemah</h5>
				<p>MAPASIKA</p>
			</div>

			<div class="col-content">
				<img src="<?= base_url('assets');?>/gambar/N.jpg">
				<h5>Menjelajah Hutan</h5>
				<p>MAPASIKA</p>
			</div>

			<div class="col-content">
				<img src="<?= base_url('assets');?>/gambar/R.jpg">
				<h5>Rafting</h5>
				<p>MAPASIKA</p>
			</div>

		</div>
	</section>
	<!-- Akhir Gallery -->

    <!-- About -->
    <div class="container">
    <div class="row g">
		  <div class="col-lg">
			  <img src="<?= base_url('assets');?>/gambar/bg6.jpg" alt="gunung" class="img-fluid">
		  </div>
		  <div class="col-lg">
			  <h3 class="text-dark"> Go <span>Hiking</span> “SALAM LESTARI <span>ALAMKU</span>”.</h3>
			  <p class="text-dark">Tujuan hidup adalah untuk membuat detak jantungmu cocok dengan ketukan alam semesta, untuk mencocokkan sifatmu dengan Alam.</p>
			  <a class="btn tombol" href="<?= base_url('kegiatan');?>">Kegiatan</a>
		  </div>
	  </div>
    </div>
	  
	<!-- akhir About -->

    <!-- service -->
    <div class="container mt-3 mb-5">
        <div class="a">
            <div class="title mb-5">
                <h2>Service</h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url('assets');?>/gambar/materi.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Materi</h5>
                            <p class="card-text">Sesingkat jarak pendakian dan sepanjang ilmu pengetahuan.</p>
                            <a href="<?= base_url('user/materi');?>" class="btn tombol">Materi</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url('assets');?>/gambar/jadwal.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kegiatan</h5>
                            <p class="card-text">Banyak kegiatan yang seru dan menantang.</p>
                            <a href="<?= base_url('kegiatan');?>" class="btn tombol">Kegiatan</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url('assets');?>/gambar/daftar.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pendaftaran</h5>
                            <p class="card-text">Pendaftaran dibuka untuk seluruh mahasiswa pecinta alam.</p>
                            <a href="<?= base_url('user/daftar');?>" class="btn tombol">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir servvice -->
