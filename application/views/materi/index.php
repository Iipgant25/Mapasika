
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Materi</h1>

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Daftar Materi</h6>
                            </div>
                            <div class="card-header py-3">
                                <a href="<?= base_url('materi/tambah');?>" class="btn btn-primary">Tambah Data Materi</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                          <tr>
                                              <th>Judul</th>
                                              <th>Penulis</th>
                                              <th>Tahun</th>
                                              <th>sampul</th>
                                              <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              <th>Judul</th>
                                              <th>Penulis</th>
                                              <th>Tahun</th>
                                              <th>sampul</th>
                                              <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                          <?php foreach ($materi as $m): ?>
                                            <tr>
                                                <td><?= $m['judul_materi']; ?></td>
                                                <td><?= $m['penulis']; ?></td>
                                                <td><?= $m['tahun']; ?></td>
                                                <td><img style="width: 50px; height: 50px;" src="<?= base_url('assets/gambar/') . $m['image']; ?>"</td>
                                                <td>
                                                    <a href="<?= base_url('materi/edit/') . $m['id_materi']; ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?= base_url('materi/hapus/') . $m['id_materi']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus materi ini?')">Hapus</a>
                                                    <a href="<?= base_url('materi/detail/') . $m['id_materi']; ?>" class="btn btn-primary">detail</a>
                                                </td>
                                            </tr>
                                          <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
