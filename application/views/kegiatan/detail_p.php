        
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Kegiatan</h1>

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="row gutters mb-5">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="account-settings">
                                            <div class="user-profile">
                                                <div class="">
                                                    <img src="<?= base_url('assets/gambar/') . $kegiatan['img']; ?>" style="height: 250px; width: 200px;" >
                                                </div><br>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="pe"
                                                    value="<?= $anggota['nama_lengkap']; ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                    id="kat" readonly
                                                    value="<?= $anggota['nim']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="pe"
                                                    value="<?= $anggota['nomer_hp']; ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                    id="kat" readonly
                                                    value="<?= $anggota['kampus']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                    id="kat" readonly
                                                    value="<?= $anggota['jabatan']; ?>">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <div class="card-title" >  <h5><?= $kegiatan['nama_kegiatan']; ?></h5> </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row gutters">
                                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
                                                
                                                <div class="form-group">
                                                    <label for="kat">Lokasi</label>
                                                    <input type="text" class="form-control"
                                                    id="kat" readonly
                                                    value="<?= $kegiatan['lokasi']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="kat">Biaya</label>
                                                    <input type="text" class="form-control"
                                                    id="kat" readonly
                                                    value="<?= $kegiatan['biaya']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="kat">Status Pembayaran</label>
                                                    <input type="text" class="form-control"
                                                    id="kat" readonly
                                                    value="<?= $kegiatan['pembayaran']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="kat">Metode Pembayaran</label>
                                                    <input type="text" class="form-control"
                                                    id="kat" readonly
                                                    value="<?= $kegiatan['metode_pembayaran']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pe">No Rek</label>
                                                    <input type="text" class="form-control" id="pe"
                                                    value="<?= $kegiatan['norek']; ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pe">Penerima Pembayaran</label>
                                                    <input type="text" class="form-control" id="pe"
                                                    value="<?= $kegiatan['atas_nama']; ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <?php if ($kegiatan['pembayaran'] == 'lunas') { ?>
                                                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Bukti</button>
                                                    <?php }else{ ?>
                                                        <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Cek Bukti</button>
                                                    <?php } ?>
                                                    <a class="btn btn-outline-danger ml-3" href="<?= base_url('kegiatan/pendaftaran_k');?>">Kembali</a>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="text-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Bukti Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="<?= base_url('assets/gambar/') . $kegiatan['bukti']; ?>" alt="belum mengupload bukti pembayaran" style="width: 350px; height: 400px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                </div>
                </div>
            </div>
            </div>

        
        
        
        
        