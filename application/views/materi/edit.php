

<div class="container-fluid" style="height: 680px;">
  <!-- Card -->
  <div class="card mb-3">
      <div class="card-header">
          Edit Materi
      </div>
      <div class="card-body">
        <div class="content-wrapper">
          <section class="content">
          <div class="row">
              <div class="col-md-12">
                  <div class="box box-primary">
                        <div class="box-header with-border">
                        </div>
                  <!-- box-header -->
                  <div class="box-body">
                            <form action="<?= base_url('materi/update_materi'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Judul Materi</label>
                                            <input type="text" class="form-control" name="judul" value="<?= $materi['judul_materi'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Penulis</label>
                                            <input type="text" class="form-control" name="penulis" value="<?= $materi['penulis'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>link Materi</label>
                                            <input type="text" class="form-control" name="materi" value="<?= $materi['materi'];?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="id_materi" value="<?= $materi['id_materi'];?>" hidden>
                                            <input type="text" class="form-control" name="img" value="<?= $materi['image'];?>" hidden>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control" cols="10" rows="5"><?= $materi['deskripsi'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <input type="number" class="form-control" name="tahun" value="<?= $materi['tahun'];?>">
                                        </div>
                                        <div class="form-group">
                                            <img src="<?= base_url('assets/gambar/') . $materi['image']; ?>" width="240px">
                                        </div>

                                        <div class="form-group">
                                            <label>Sampul <small style="color:green">(gambar) * opsional</small></label>
                                            <input type="file" accept="image/*" name="gambar">
                                        </div>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <input type="hidden" name="tambah" value="tambah">
                                    <button type="submit" class="btn btn-primary btn-md">Save</button>
                            </form>
                                    <a href="<?= base_url('materi'); ?>" class="btn btn-danger btn-md">Kembali</a>
                                </div>
                    </div>
                  </div>
              </div>
            </div>
        </section>
        </div>
      </div>
  </div>
</div>
