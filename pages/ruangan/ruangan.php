<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Kode Ruangan</h5>
        </div>
        <div class="card-body ">
          <a href="index.php?m=ruangan&s=ruangan_add" class="btn btn-primary">Tambah Ruangan</a>
          <div class="table-responsive">
            <table class="table table-striped table-bordered data">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Kode Ruangan</th>
                  <th>Ruangan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $data = $db->query("SELECT * FROM tb_ruangan ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['kode_ruangan'] ?></td>
                    <td><?= $row['nama_ruangan'] ?></td>
                    <td>
                      <a href="index.php?m=ruangan&s=ruangan_edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-pencil"></i></a>
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
      location.href = "pages/ruangan/ruangan_proses.php?aksi=hapus&id=" + id;
    }
  }
</script>