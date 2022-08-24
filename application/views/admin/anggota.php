
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Anggota</h1>

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                          <tr>
                                              <th>Nama</th>
                                              <th>NIM</th>
                                              <th>No Hp</th>
                                              <th>jabatan</th>
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
                                                <th>jabatan</th>
                                                <th>Tahun</th>
                                                <th>foto</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                          <?php foreach ($daftar_anggota as $da):
                                            $this->load->model('ModelUser');
                                            $user = $this->ModelUser->cekDaftar(['id_user' => $da['id_user']])->row_array();

                                            ?>
                                            <tr>
                                                <td><?= $user['nama_lengkap']; ?></td>
                                                <td><?= $user['nim']; ?></td>
                                                <td><?= $user['nomer_hp']; ?></td>
                                                <td><?= $user['jabatan']; ?></td>
                                                <td><?= date('Y',$da['date_create']); ?></td>
                                                <td><img style="width: 50px; height: 50px;" src="<?= base_url('assets/img/') . $user['foto']; ?>"</td>
                                                <td>
                                                    <a href="<?= base_url('admin/jabatan_anggota/') . $da['id_user']; ?>" class="btn btn-secondary">Jabatan</a>
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
