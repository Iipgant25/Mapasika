
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
                                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#filter"><i class="fa-solid fa-file-export"></i> Export File</button>
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
                                                    <a href="<?= base_url('laporan/print_k/') . $k['id_kegiatan']; ?>" class="btn btn-primary"><i class="fa-solid fa-print"></i> Print</a>
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




            <!-- Modal -->
            <div class="modal fade" id="filter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="exampleModalLabel">Filter Kegiatan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('laporan/export'); ?>" method="POST" enctype="multipart/form-data">

                                <label class="text-dark">Kegiatan</label>
                                <select class="form-control select2" required="required"  name="kegiatan">
                                    <?php foreach ($keg as $k): ?>
                                        <option value="<?= $k['id_kegiatan'];?>"><?= $k['nama_kegiatan'];?></option>
                                    <?php endforeach; ?>
                                </select>

                                <label class="text-dark mt-2">Status Pembayaran</label>
                                <select class="form-control select2" required="required"  name="pembayaran">
                                    <option value="lunas">Lunas</option>
                                    <option value="belum">Belum</option>
                                </select>

                                <label class="text-dark mt-2">Export</label>
                                <select class="form-control select2" required="required"  name="export">
                                    <option value="print">Print</option>
                                    <option value="excel">Excel</option>
                                </select>

                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Export</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
