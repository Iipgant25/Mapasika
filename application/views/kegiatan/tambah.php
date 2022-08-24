

<div class="container-fluid" style="height: 680px;">
  <!-- Card -->
  <div class="card mb-3">
      <div class="card-header">
          Tambah Kegiatan
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
                            <form action="<?= base_url('kegiatan/tambah'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Judul Kegiatan</label>
                                            <input type="text" class="form-control" name="judul">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kegiatan</label>
                                            <input type="date" class="form-control" name="tgl">
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input type="text" class="form-control" name="lokasi">
                                        </div>
                                        <div class="form-group">
                                            <label>Biaya</label>
                                            <input type="text" class="form-control" name="biaya">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <input type="number" class="form-control" name="thn">
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
