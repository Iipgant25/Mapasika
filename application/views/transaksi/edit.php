

<div class="container-fluid" style="height: 680px;">
  <!-- Card -->
  <div class="card mb-3">
      <div class="card-header">
          Edit Transaksi
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
                            <form action="<?= base_url('transaksi/update_transaksi'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Metode Pembayaran</label>
                                            <input type="text" class="form-control" name="metode" value="<?= $tran['metode_pembayaran'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>No Rek</label>
                                            <input type="text" class="form-control" name="norek" value="<?= $tran['norek'];?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Atas Nama</label>
                                            <input type="text" class="form-control" name="nama" value="<?= $tran['atas_nama'];?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="id" value="<?= $tran['id_transaksi'];?>" hidden>
                                        </div>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <input type="hidden" name="tambah" value="tambah">
                                    <button type="submit" class="btn btn-primary btn-md">Save</button>
                            </form>
                                    <a href="<?= base_url('transaksi'); ?>" class="btn btn-danger btn-md">Kembali</a>
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
