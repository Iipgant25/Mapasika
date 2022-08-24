<div class="container border bg-light mt-5 shadow p-3 mb-5 bg-white rounded">
    <h3 class="alert alert-primary text-center mt-2">FORM PENDAFTARAN ANGGOTA BARU</h3>
    <form action="<?= base_url('user/daftar_anggota/'); ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">>
            <input type="text" class="form-control" name="id" value="<?= $user['id_user'];?>" hidden>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda ...">
        </div>
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan Nim Anda ...">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tmp">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tmp" name="tempat" placeholder="Masukan Tempat Lahir Anda ...">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tgl">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Masukan Tanggal Lahir Anda ...">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="kampus">Kampus</label>
            <input type="text" class="form-control" id="kampus" name="kampus" placeholder="Masukan Kampus Anda ...">
        </div>
        <div class="form-group">
            <label for="no">No HP</label>
            <input type="text" class="form-control" id="no" name="no" placeholder="Masukan No HP Anda ...">
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="bb">Berat Badan</label>
                    <input type="number" class="form-control" id="bb" name="bb" placeholder="Masukan Berat Badan Anda ...">
                    <small>Dalam satuan Kg</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="tb">Tinggi Badan</label>
                    <input type="number" class="form-control" id="tb" name="tb" placeholder="Masukan Tinggi Badan Anda ...">
                    <small>Dalam satuan CM</small>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="rp">Riwayat Penyakit</label>
            <input type="text" class="form-control" id="rp" name="rp" placeholder="Masukan Riwayat Penyakit ...">
            <small>Jika Tidak Mempunyai Riwayat Penyakit Dapat Di Kosongkan </small>
        </div>
        <div class="form-group">
            <label for="ob">Obat Riwayat Penyakit</label>
            <input type="text" class="form-control" id="ob" name="orp" placeholder="Masukan Obat Riwayat Penyakit ...">
            <small>Di Isi Jika Anda Mempunyai Riwayat Penyakit</small>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control select2" required="required"  name="jeniskel">
                <option disabled selected value> -- Pilih Jenis Kelamin -- </option>
                <option value="L">Laki Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Foto <small style="color:green">(gambar) * </small></label>
            <input type="file" accept="image/*" name="foto">
        </div>
        <div class="tombol mb-4">
            <button type="submit" class="btn btn-primary btn-md">Daftar</button>
            <button type="reset" class="btn btn-secondary btn-md">Reset</button>
            <a class="btn btn-danger btn-md" href="<?= base_url('user');?>">Batal</a>
        </div>
    </form>
</div>

