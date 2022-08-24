
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dasboard</h1>

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4 p-3">
                            <div class="row">
                                <div class="col">
                                    <form action="<?= base_url('admin/jabatan');?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <select class="form-control select2" required="required"  name="jabatan">
                                                <option value="#">Pilih Jabatan</option>
                                                <option value="ketua">Ketua</option>
                                                <option value="wakil">Wakil</option>
                                                <option value="bendahara">Bendahara</option>
                                                <option value="sekertaris">Sekertaris</option>
                                                <option value="anggota">Anggota</option>
                                                <option value="alumni">Alumni</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="id_user" value="<?= $id;?>" hidden>
                                        </div>

                                        <a href="<?= base_url('admin/anggota');?>" class="btn btn-secondary">Kembali</a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


