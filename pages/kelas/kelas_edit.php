<?php 
$data = $db->query("SELECT * FROM tb_kelas WHERE id='".$_GET['id']."' LIMIT 1", 0);
$row = $data->fetch_assoc();
?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Edit Kode Kelas</h5>
        </div>
        <div class="card-body ">
          <form action="pages/kelas/kelas_proses.php?aksi=update&id=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputText3" class="col-form-label">Kode Kelas SIRANAP</label>
              <input id="inputText3" name="kode_kelas" type="text" value="<?= $row['kode_kelas'] ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputText3" class="col-form-label">Nama Kelas</label>
              <input id="inputText3" name="nama_kelas" type="text" value="<?= $row['nama_kelas']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Update">
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