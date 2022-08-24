        
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Materi</h1>

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Detail Materi</h6>
                            </div>
                        </div>
                        <div class="row gutters mb-5">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="account-settings">
                                            <div class="user-profile">
                                                <div class="">
                                                    <img src="<?= base_url('assets/gambar/') . $materi['image']; ?>" style="height: 250px; width: 200px;" >
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <div class="card-title" >  <h5><?= $materi['judul_materi']; ?></h5> </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row gutters">
                                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
                                                <div class="form-group">
                                                    <label for="pe">Penulis</label>
                                                    <input type="text" class="form-control" id="pe"
                                                    value="<?= $materi['penulis']; ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kat">Tahun</label>
                                                    <input type="text" class="form-control"
                                                    id="kat" readonly
                                                    value="<?= $materi['tahun']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="kat">Deskripsi</label>
                                                    <textarea id="kat" class="form-control" cols="10" rows="4">"<?= $materi['deskripsi']; ?>"</textarea>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <a href="<?= $materi['materi']; ?>" target="blank" class="btn btn-outline-primary">Baca Materi</a>
                                                    <a class="btn btn-outline-danger ml-3" href="<?= base_url('materi');?>">Kembali</a>
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

        
        
        
        
        