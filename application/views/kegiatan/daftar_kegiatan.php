
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Kegiatan</h1>

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Daftar Kegiatan</h6>
                            </div>
                            <div class="card-header py-3">
                                <a href="<?= base_url('kegiatan/tambah');?>" class="btn btn-primary">Tambah Data Kegiatan</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                          <tr>
                                              <th>Kegiatan</th>
                                              <th>Tanggal Kegiatan</th>
                                              <th>lokasi</th>
                                              <th>Status</th>
                                              <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              <th>Kegiatan</th>
                                              <th>Tanggal Kegiatan</th>
                                              <th>lokasi</th>
                                              <th>Status</th>
                                              <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                          <?php foreach ($kegiatan as $k): ?>
                                            <tr>
                                                <td><?= $k['nama_kegiatan']; ?></td>
                                                <td><?= $k['tgl_kegiatan']; ?></td>
                                                <td><?= $k['lokasi']; ?></td>
                                                <td><?= $k['status']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('kegiatan/edit/') . $k['id_kegiatan']; ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?= base_url('kegiatan/hapus/') . $k['id_kegiatan']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus kegiatan ini?')">Hapus</a>
                                                    <a href="<?= base_url('kegiatan/detail_k/') . $k['id_kegiatan']; ?>" class="btn btn-primary">detail</a>
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
