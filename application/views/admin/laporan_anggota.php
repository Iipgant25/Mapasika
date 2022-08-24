
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Anggota</h1>

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <a href="<?= base_url('laporan/print');?>" class="btn btn-primary"><i class="fa-solid fa-print"></i> Print</a>
                                <a href="<?= base_url('laporan/excel');?>" class="btn btn-success" onclick="return confirm('apakah anda ingin mendownload file ini?')"><i class="fa-solid fa-file-excel"></i> Excel</a>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                          <tr>
                                          <th>Nama</th>
                                                <th>NIM</th>
                                                <th>No Hp</th>
                                                <th>kampus</th>
                                                <th>alamat</th>
                                                <th>tahun</th>
                                                <th>jabatan</th>
                                          </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nama</th>
                                                <th>NIM</th>
                                                <th>No Hp</th>
                                                <th>kampus</th>
                                                <th>alamat</th>
                                                <th>tahun</th>
                                                <th>jabatan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                          <?php foreach ($daftar_anggota as $da):?>
                                            <tr>
                                                <td><?= $da['nama_lengkap']; ?></td>
                                                <td><?= $da['nim']; ?></td>
                                                <td><?= $da['nomer_hp']; ?></td>
                                                <td><?= $da['kampus']; ?></td>
                                                <td><?= $da['alamat']; ?></td>
                                                <td><?= date('Y',$da['date_create']); ?></td>
                                                <td><?= $da['jabatan']; ?></td>
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
