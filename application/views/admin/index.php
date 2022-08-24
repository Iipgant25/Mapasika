
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dasboard</h1>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Anggota</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $anggota; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Materi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $materi; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                              Jumlah kegiatan
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                              <div class="col mr-2">
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kegiatan; ?></div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah user</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user1; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                          <?php foreach ($daftar_anggota as $da):
                                            $this->load->model('ModelUser');
                                            $user = $this->ModelUser->cekDaftar(['id_user' => $da['id_user']])->row_array();

                                            ?>
                                            <tr>
                                                <td><?= $user['nama_lengkap']; ?></td>
                                                <td><?= $user['nim']; ?></td>
                                                <td><?= $user['nomer_hp']; ?></td>
                                                <td><?= $user['kampus']; ?></td>
                                                <td><?= date('Y',$da['date_create']); ?></td>
                                                <td><img style="width: 50px; height: 50px;" src="<?= base_url('assets/img/') . $user['foto']; ?>"</td>
                                                <td>
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
