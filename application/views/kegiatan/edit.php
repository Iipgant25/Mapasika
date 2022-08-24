

<div class="container-fluid" style="height: 680px;">
  <!-- Card -->
  <div class="card mb-3">
      <div class="card-header">
          Edit Kegiatan
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
                            <form action="<?= base_url('kegiatan/update_kegiatan'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Judul Kegiatan</label>
                                            <input type="text" class="form-control" name="judul" value="<?= $kegiatan['nama_kegiatan'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kegiatan</label>
                                            <input type="date" class="form-control" name="tgl" value="<?= $kegiatan['tgl_kegiatan'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input type="text" class="form-control" name="lokasi" value="<?= $kegiatan['lokasi'];?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="id_kegiatan" value="<?= $kegiatan['id_kegiatan'];?>" hidden>
                                            <input type="text" class="form-control" name="img" value="<?= $kegiatan['img'];?>" hidden>
                                        </div>
                                        <div class="form-group">
                                            <label>Biaya</label>
                                            <input type="text" class="form-control" name="biaya" value="<?= $kegiatan['biaya'];?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <input type="number" class="form-control" name="tahun" value="<?= $kegiatan['thn'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2" required="required"  name="status">
                                            <option value="<?= $kegiatan['status']; ?>"><?= $kegiatan['status']; ?></option>
                                            <option value="tutup">tutup</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <img src="<?= base_url('assets/gambar/') . $kegiatan['img']; ?>" width="240px">
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
                                    <a href="<?= base_url('kegiatan/daftar_kegiatan'); ?>" class="btn btn-danger btn-md">Kembali</a>
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
