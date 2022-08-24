
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Metode Pembayaran</h1>

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Metode Pembayaran</h6>
                            </div>
                            <div class="card-header py-3">
                                <a href="<?= base_url('transaksi/tambah');?>" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                          <tr>
                                              <th>Metode Pembayaran</th>
                                              <th>No Rek</th>
                                              <th>Atas Nama</th>
                                              <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>Metode Pembayaran</th>
                                              <th>No Rek</th>
                                              <th>Atas Nama</th>
                                              <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                          <?php foreach ($tran as $t): ?>
                                            <tr>
                                                <td><?= $t['metode_pembayaran']; ?></td>
                                                <td><?= $t['norek']; ?></td>
                                                <td><?= $t['atas_nama']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('transaksi/edit/') . $t['id_transaksi']; ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?= base_url('transaksi/hapus/') . $t['id_transaksi']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus metode ini?')">Hapus</a>
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
