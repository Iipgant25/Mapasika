
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Pendaftaran Kegiatan</h1>

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Daftar Kegiatan</h6>
                            </div>
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="dropdown">
                                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="1" data-toggle="dropdown" aria-expanded="false">
                                                kegiatan
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="1">
                                            <?php 
                                            $this->load->model('ModelKegiatan');
                                            $keg = $this->ModelKegiatan->Kegiatan()->result_array();
                                            ?>
                                            <?php foreach ($keg as $k): ?>
                                                <?php if ($k['status'] == 'buka') { ?>
                                                    <a class="dropdown-item" href="<?= base_url('kegiatan/filter_k/') . $k['id_kegiatan'] ;?>"><?= $k['nama_kegiatan'];?></a>
                                                <?php } ?>
                                                

                                            <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="dropdown">
                                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="2" data-toggle="dropdown" aria-expanded="false">
                                                Pembayaran
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="2">
                                                <a class="dropdown-item" href="<?= base_url('kegiatan/filter_p/') . 'lunas' ;?>">Lunas</a>
                                                <a class="dropdown-item" href="<?= base_url('kegiatan/filter_p/') . 'belum' ;?>">Belum</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                          <tr>
                                              <th>Nama</th>
                                              <th>NIM</th>
                                              <th>Kegiatan</th>
                                              <th>Biaya</th>
                                              <th>Pembayaran</th>
                                              <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              <th>Nama</th>
                                              <th>NIM</th>
                                              <th>Kegiatan</th>
                                              <th>Biaya</th>
                                              <th>Pembayaran</th>
                                              <th>Action</th>
                                          </tr>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                          <?php foreach ($kegiatan as $k): 
                                            $this->load->model('ModelKegiatan');
                                            $this->load->model('ModelUser');
                                            $user = $this->ModelUser->cekDaftar(['id_user' => $k['id_user']])->row_array();
                                            $keg = $this->ModelKegiatan->KegiatanWhere(['id_kegiatan' => $k['id_kegiatan']])->row_array();
                                            ?>
                                            <tr>
                                                <td><?= $user['nama_lengkap']; ?></td>
                                                <td><?= $user['nim']; ?></td>
                                                <td><?= $keg['nama_kegiatan']; ?></td>
                                                <td><?= $keg['biaya']; ?></td>
                                                <?php if ($k['pembayaran'] == 'lunas') { ?>
                                                    <td><img style="width: 50px; height: 50px;" src="<?= base_url('assets/gambar/lunas.jpg');?>"</td>
                                                    <td>
                                                        <a href="" class="btn btn-success" onclick="return confirm('Pembayaran Sudah Lunas')">Lunas</a>
                                                        <a href="<?= base_url('kegiatan/detail_p/') . $k['id']; ?>" class="btn btn-primary">detail</a>
                                                    </td>
                                                <?php }else{ ?>
                                                    <td><?= $k['pembayaran']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('kegiatan/bayar_p/') . $k['id']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Bayar</a>
                                                        <a href="<?= base_url('kegiatan/detail_p/') . $k['id']; ?>" class="btn btn-primary">detail</a>
                                                    </td>
                                                <?php }?>
                                                
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
