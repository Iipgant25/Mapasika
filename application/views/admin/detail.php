
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dasboard</h1>

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4 p-3">
                                    <h3 class="alert alert-primary text-center" style="text-transform: uppercase;">PROFIL <?= $anggota['nama_lengkap'];?></h3>
                                        <div class="row">
                                            <div class="col-8">
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr class="text-dark">
                                                            <td>Nama Lengkap</td>
                                                            <td><?= $anggota['nama_lengkap'];?></td>
                                                        </tr>
                                                        <tr class="text-dark">
                                                            <td>NIM</td>
                                                            <td><?= $anggota['nim'];?></td>
                                                        </tr>
                                                        <tr class="text-dark">
                                                            <td>Tempat Lahir</td>
                                                            <td><?= $anggota['tempat_lahir'];?></td>
                                                        </tr>
                                                        <tr class="text-dark">
                                                            <td>Tanggal Lahir</td>
                                                            <td><?= $anggota['tgl_lahir'];?></td>
                                                        </tr>
                                                        <tr class="text-dark">
                                                            <td>Kampus</td>
                                                            <td><?= $anggota['kampus'];?></td>
                                                        </tr>
                                                        <tr class="text-dark">
                                                            <td>Alamat</td>
                                                            <td><?= $anggota['alamat'];?></td>
                                                        </tr>
                                                        <tr class="text-dark">
                                                            <td>No Hp</td>
                                                            <td><?= $anggota['nomer_hp'];?></td>
                                                        </tr>
                                                        <tr class="text-dark">
                                                            <td>Berat Badan</td>
                                                            <td><?= $anggota['berat_badan'];?> Kg</td>
                                                        </tr>
                                                        <tr class="text-dark">
                                                            <td>Tinggi Badan</td>
                                                            <td><?= $anggota['tinggi_badan'];?> cm</td>
                                                        </tr>
                                                        <tr class="text-dark">
                                                            <td>Jenis Kelamin</td>
                                                            <td><?= $anggota['jenis_kelamin'];?></td>
                                                        </tr>
                                                        <tr class="text-dark">
                                                            <td>Riwayat Penyakit</td>
                                                            <td><?= $anggota['riwayat_penyakit'];?></td>
                                                        </tr>
                                                        <tr class="text-dark">
                                                            <td>Obat Riwayat Penyakit</td>
                                                            <td><?= $anggota['obat_riwayat_penyakit'];?></td>
                                                        </tr>
                                                        <tr class="text-dark">
                                                            <td>Jabatan</td>
                                                            <td><?= $anggota['jabatan'];?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-4 image">
                                                <img style="width: 200px; height: 250px; " src="<?= base_url('assets');?>/img/<?= $anggota['foto'];?>" alt="gambar"><br>
                                                <a href="<?=base_url('admin/anggota');?>" class="btn btn-secondary mt-5">Kembali</a>
                                                <a href="<?=base_url('admin');?>" class="btn btn-danger mt-5">Dasboard</a>
                                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
