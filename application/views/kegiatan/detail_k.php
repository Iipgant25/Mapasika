        
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Kegiatan</h1>

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Detail Kegiatan</h6>
                            </div>
                        </div>
                        <div class="row gutters mb-5">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="account-settings">
                                            <div class="user-profile">
                                                <div class="">
                                                    <img src="<?= base_url('assets/gambar/') . $kegiatan['img']; ?>" style="height: 250px; width: 200px;" >
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
                                                    <label for="pe">Tanggal Kegiatan</label>
                                                    <input type="text" class="form-control" id="pe"
                                                    value="<?= $kegiatan['tgl_kegiatan']; ?>" readonly>
                                                </div>
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
                                                    <label for="kat">Tahun</label>
                                                    <input type="text" class="form-control"
                                                    id="kat" readonly
                                                    value="<?= $kegiatan['thn']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="kat">Status</label>
                                                    <input type="text" class="form-control"
                                                    id="kat" readonly
                                                    value="<?= $kegiatan['status']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <?php if ($kegiatan['status'] == 'buka') { ?>
                                                        <a href="<?= base_url('kegiatan/daftar_kegiatan');?>" class="btn btn-primary">Buka</a>
                                                    <?php }else{ ?>
                                                        <a href="<?= base_url('kegiatan/daftar_kegiatan');?>" class="btn btn-danger">Tutup</a>
                                                    <?php } ?>
                                                    <a class="btn btn-outline-danger ml-3" href="<?= base_url('kegiatan/daftar_kegiatan');?>">Kembali</a>
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

        
        
        
        
        