<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<!-- style css -->
	<link rel="stylesheet" href="<?=base_url('assets');?>/landing/style.css">

	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <title>Mapasika</title>
  </head>
  <body>
    
  <!-- nav bar -->
  <nav class="navbar navbar-expand-lg navbar-light">
	  <div class="container">
	  <a class="navbar-brand" href="#">Mapasika</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav ml-auto">
			<a class="nav-link active" href="#about">Tentang<span class="sr-only">(current)</span></a>
			<a class="nav-link" href="<?= base_url('auth/register');?>">Daftar</a>
			<a class="btn btn-success tombol" href="<?= base_url('auth');?>">Masuk</a>
			</div>
		</div>
	  </div>
	</nav>
  <!-- akhir nav bar -->

  <!-- jumbotron -->
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">"Melihat <span>keindahan</span> di dunia, adalah langkah pertama <span>memurnikan</span> pikiran."</h1>
			<a class="btn btn-success tombol" href="<?= base_url('auth');?>">Beranda</a>
		</div>
	</div>
  <!-- akhir jumbotron -->

  <!-- container -->
  <div class="container">

	  <!-- panel -->
	  <div class="row justify-content-center">
		  <div class="col-10 panel">
			<div class="row">
				<div class="col-lg">
					<img src="<?= base_url('assets');?>/gambar/materi.png" alt="materi" class="float-left">
					<h4>Materi</h4>
					<p>Mari belajar berbagai materi pecinta alam.</p>
				</div>
				<div class="col-lg">
					<img src="<?= base_url('assets');?>/gambar/jadwal.png" alt="jadwal" class="float-left">
					<h4>Jadwal Kegiatan</h4>
					<p>Banyak kegiatan yang seru dan menantang!</p>
				</div>
				<div class="col-lg">
					<img src="<?= base_url('assets');?>/gambar/daftar.png" alt="daftar" class="float-left">
					<h4>Pendaftaran</h4>
					<p>Ayo, bergabung dengan kami!</p>
				</div>
			</div>
		  </div>
	  </div>
	  <!-- akhir panel -->

	  <!-- content -->
	  <div class="row g" id="about">
		  <div class="col-lg">
			  <img src="<?= base_url('assets');?>/gambar/mapasika.jpeg" alt="gunung" class="img-fluid">
		  </div>
		  <div class="col-lg">
			  <h3> SEJARAH “MAPASI<span>KA</span>”.</h3>
			  <p class="text-dark">Mapasika di dirikan pada tanggal  29 Januari 2017 di puncak sempur loji karawang dalam kegiatan latihan dasar kepemimpinan ( LDK ) Sebagai kegiatan pertama untuk pelatihan dan pembinaan untuk calon dewan pengurus mapasika angkatan perintis agar dapat menjalankan organisasi dengan baik dan benar , mapasika di tandai   dengan penanaman dua buah pohon pucuk merah , mapasika didirikan oleh seorang perintis di pimpin oleh Ahmad hidayat
				( MP.PD.001.PM )
				Dan di resmikan sebagai salah satu Unit kerja senat mahasiswa ( UKSM ) di Bsi karawang.
				Nama mapasika di  cetuskan oleh Yulia Suaedah ( MP.01.003.P ) yaitu di ambil dari singkatan Mahasiswa pencinta alam UBSI Karawang ( MAPASIKA ) .
			  </p>
			  <a class="btn btn-success tombol" href="<?= base_url('auth');?>">Beranda</a>
		  </div>
	  </div>
	  <!-- akhir content -->


	  <!-- Visi Dan Misi -->
	  <div class="bgr p-3">
		<div class="mt-5 text-center">
			<h2 style="font-family: viga;
						font-size: 32px;
						margin-top: 100px;">
						Visi Misi MAPASIKA
					</h2>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6">
				<h3 style="font-family: viga; font-size: 25px;">VISI</h3>
				<p>Menjadikan Organisasi Pencinta alam yang mempunyai nilai-nilai yang terkandung dalam Pancasila, Kode etik Pencinta alam dan Tri Dhrama perguruan tinggi, untuk selanjutnya dapat di terapkan dalam keseharian Organisasi maupun di masyarakat.
					Menjadikan anggota MAPASIKA yang tangguh dialam terbuka dan berkarya di dunia nyata.
				</p>
				<img src="<?= base_url('assets');?>/gambar/visi.png" alt="visi dan misi" class="img-fluid" style="height: 250px;">
			</div>
			<div class="col-lg-6">
				<div class="misi" style="margin-top:200px">
					<h3 style="font-family: viga; font-size: 25px;">MISI</h3>
					<p>Mencetak anggota MAPASIKA yang memilki loyalitas tinggi dan mampu menjalankan roda organisasi dengan tata kelola yang baik dan meningkat.
						Menumbuhkan dan membangun rasa kekeluargaan yang erat dengan memegang teguh prinsip gotong royong.
						Mengembangkan setiap kemampuan anggota dalam kegiatan pembinaan atau pelatihan dengan menggunakan media Alam dan Teknologi.
					</p>
				</div> 
			</div>
		</div>
	  </div>
	<!-- Akhir Visi Dan Misi -->

	  <!-- About -->
	  <section class="about">
		  <div class="row justify-content-center">
			<div class="col-8">
				<h5>Mahasiswa Pencinta Alam UBSI Karawang <br><span>"peduli, cerdas, berani, terampil, tangguh."</span></h5>
			</div>
		  </div>

		  <div class="row justify-content-center">
			  <div class="col-lg-6 justify-content-center d-flex">
			  <figure class="figure">
					<img src="<?= base_url('assets');?>/gambar/contoh.png" class="figure-img img-fluid rounded-circle" alt="default">
					<figcaption class="figure-caption">
						<h5>Wakil Ketua</h5>
						<p>Tarman</p>
					</figcaption>
				</figure>
				<figure class="figure">
					<img src="<?= base_url('assets');?>/gambar/contoh.png" class="figure-img img-fluid rounded-circle" alt="default">
					<figcaption class="figure-caption">
						<h5>Ketua</h5>
						<p>Jeje ahmad f</p>
					</figcaption>
				</figure>
				<figure class="figure">
					<img src="<?= base_url('assets');?>/gambar/contoh.png" class="figure-img img-fluid rounded-circle" alt="default">
					<figcaption class="figure-caption">
						<h5>Bendahara</h5>
						<p>Isna camelia t</p>
					</figcaption>
				</figure>
			  </div>
		  </div>
	  </section>
	  <!-- Akhir About -->
  </div>
  <!-- akhir container -->

  <!-- footer -->
  <div class="row footer">
	  <div class="col text-center">
		  <p>2022 All Rights Reserved by Mapasika.</p>
	  </div>
  </div>
  <!-- Akhir footer -->
















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>