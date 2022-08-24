  <!-- Modal Kegiatan -->
  <div class="modal fade" id="kegiatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pembayaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <p>Nama : <?= $anggota['nama_lengkap'];?></p>
              <p>NIM  : <?= $anggota['nim'];?></p>
              <p>No Hp : <?= $anggota['nomer_hp'];?></p>
              <p>Kegiatan : <?= $kegiatan['nama_kegiatan'];?></p>
              <form action="<?= base_url('kegiatan/daftar_k');?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Metode Pembayaran</label>
                  <select class="form-control select2" required="required"  name="metode">
                      <option value="#">Pilih Metode</option>
                      <?php foreach ($tran as $t): ?>
                        <option value="<?= $t['metode_pembayaran'];?>"><?= $t['metode_pembayaran'];?></option>
                      <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                     <input type="text" class="form-control" name="id_kegiatan" value="<?= $kegiatan['id_kegiatan'];?>" hidden>
                 </div>
              
              
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Bayar</button>
        </div>
              </form>
      </div>
    </div>
  </div>
  
  <!---footer---->
	<footer>
		<p>Kelompok 6</p>
		<p>Jagalah kebersihan alam.</p>
		<p class="end">CopyRight By Kelompok 6</p>
	</footer>
    <!-- Akhir Footer -->
	
    <!-- Akhir Content --->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->

    
  </body>
</html>