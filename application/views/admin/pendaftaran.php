
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Pendaftaran</h1>
                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Anggota Pendaftaran</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                          <tr>
                                              <th>Nama</th>
                                              <th>NIM</th>
                                              <th>No Hp</th>
                                              <th>kampus</th>
                                              <th>Tahun</th>
                                              <th>foto</th>
                                              <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nama</th>
                                                <th>NIM</th>
                                                <th>No Hp</th>
                                                <th>kampus</th>
                                                <th>Tahun</th>
                                                <th>foto</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                          <?php foreach ($daftar_daftar as $da):
                                            $this->load->model('ModelUser');
                                            $user = $this->ModelUser->cekData(['id_user' => $da['id_user']])->row_array();

                                            ?>
                                            <tr>
                                                <td><?= $da['nama_lengkap']; ?></td>
                                                <td><?= $da['nim']; ?></td>
                                                <td><?= $da['nomer_hp']; ?></td>
                                                <td><?= $da['kampus']; ?></td>
                                                <td><?= date('Y',$user['date_create']); ?></td>
                                                <td><img style="width: 50px; height: 50px;" src="<?= base_url('assets/img/') . $da['foto']; ?>"</td>
                                                <td>
                                                  <a href="<?= base_url('admin/lolos/') . $da['id_user']; ?>" class="btn btn-success" onclick="return confirm('apakah anda yakin?')">Lolos</a>
                                                  <a href="<?= base_url('admin/detail/') . $da['id_user']; ?>" class="btn btn-primary">detail</a>
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
