<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Tambah Ketersedian Tempat Tidur</h5>
        </div>
        <div class="card-body ">
          <form action="pages/bedmonitoring/bedmonitoring_proses.php?aksi=insert" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="department" class="col-form-label">Kode Ruangan</label>
              <select name="kode_ruang" class="form-control">
                <option value="">-- Kode Ruangan --</option>
                <?php
                        //Membuat koneksi ke database 
                $kon = mysqli_connect("localhost",'root',"","siranap");
                if (!$kon){
                  die("Koneksi database gagal:".mysqli_connect_error());
                }
                $sql="SELECT * FROM tb_kelas";

                $hasil2=mysqli_query($kon,$sql);
                $no=0;
                while ($data2 = mysqli_fetch_array($hasil2)) {
                  $no++;
                  ?>
                  <option value="<?php echo $data2['kode_kelas'];?>"><?php echo $data2['nama_kelas'];?></option>
                  <?php 
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="department" class="col-form-label">Kode Kelas</label>
              <select name="tipe_pasien" class="form-control">
                <option value="">-- Kode Kelas --</option>
                <?php
                        //Membuat koneksi ke database 
                $kon = mysqli_connect("localhost",'root',"","siranap");
                if (!$kon){
                  die("Koneksi database gagal:".mysqli_connect_error());
                }
                $sql="SELECT * FROM tb_ruangan";

                $hasil=mysqli_query($kon,$sql);
                $no=0;
                while ($data = mysqli_fetch_array($hasil)) {
                  $no++;
                  ?>
                  <option value="<?php echo $data['kode_ruangan'];?>"><?php echo $data['nama_ruangan'];?></option>
                  <?php 
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="inputText3" class="col-form-label">Total Tempat Tidur</label>
              <input id="inputText3" name="total_TT" type="number" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputText3" class="col-form-label">Tempat Tidur Digunakan Pria</label>
              <input id="inputText3" name="terpakai_male" type="number" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputText3" class="col-form-label">Tempat Tidur Digunakan Wanita</label>
              <input id="inputText3" name="terpakai_female" type="number" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputText3" class="col-form-label">Tempat Tidur Kosong Pria</label>
              <input id="inputText3" name="kosong_male" type="number" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputText3" class="col-form-label">Tempat Tidur Kosong Wanita</label>
              <input id="inputText3" name="kosong_female" type="number" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputText3" class="col-form-label">Waiting</label>
              <input id="inputText3" name="waiting" type="number" class="form-control">
              <input id="inputText3" name="tgl_update" type="hidden" value="<?php echo date('Y-m-d H:m:s') ?>"  class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function tambahFile() {
   var html = '<div id="item"><div class="form-group"><input id="inputText3" name="file[]" type="file" class="form-control" style="position:unset;opacity:1"></div><a href="javascript:void(0)" onclick="removeFile(this)" class="btn btn-danger">Hapus</a></div>';

   $('#image').append(html);
 }

 function removeFile(e) {
   let parent = e.parentNode;

   parent.remove()
 }
</script>