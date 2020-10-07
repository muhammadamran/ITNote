<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Kode Kelas</h5>
        </div>
        <div class="card-body ">
          <a href="index.php?m=kelas&s=kelas_add" class="btn btn-primary">Tambah Kelas</a>
          <div class="table-responsive">
            <table class="table table-striped table-bordered data">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Kode Kelas</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $data = $db->query("SELECT * FROM tb_kelas ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['kode_kelas'] ?></td>
                    <td><?= $row['nama_kelas'] ?></td>
                    <td>
                      <a href="index.php?m=kelas&s=kelas_edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-pencil"></i></a>
                      <a onclick="deleteData(<?= $row['id'] ?>)" class="btn btn-sm btn-danger" style="color:#fff;cursor:pointer"><i class="fa fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function deleteData(id) {
    var r = confirm("Anda yakin ingin menghapus ini");
    if (r == true) {
      location.href = "pages/kelas/kelas_proses.php?aksi=hapus&id=" + id;
    }
  }
</script>