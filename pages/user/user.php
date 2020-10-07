<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Users</h5>
        </div>
        <div class="card-body ">
          <a href="index.php?m=user&s=user_add" class="btn btn-primary">Tambah User</a>
          <div class="table-responsive">
            <table class="table table-striped table-bordered data">
              <thead>
                <tr align="center">
                  <th>Username</th>
                  <th>Nama Lengkap</th>
                  <th>Gelar Depan</th>
                  <th>Gelar Belakang</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th>Role</th>
                  <th>Alamat</th>
                  <th>No. Telepon</th>
                  <th>Bagian/Unit/Instalasi</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody> 
                <?php 
                $data = $db->query("SELECT * FROM tb_user ORDER BY id DESC", 0);

                while($row = $data->fetch_assoc()) {
                  ?>
                  <tr align="center">
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['firstname'] ?> <?= $row['lastname'] ?></td>
                    <td><?= $row['gelar_depan'] ?></td>
                    <td><?= $row['gelar_belakang'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['jenis_kelamin'] ?></td>
                    <td><?= $row['role'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['no_telepon'] ?></td>
                    <td><?= $row['unit'] ?></td>
                    <td><?= $row['jabatan'] ?></td>
                    <td>
                      <a href="index.php?m=user&s=user_edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-pencil"></i></a>
                      <a href="index.php?m=user&s=user_password&id=<?= $row['id'] ?>" class="btn btn-sm btn-secondary"><i class="fa fas fa-lock"></i></a>
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
      location.href = "pages/user/user_proses.php?aksi=hapus&id=" + id;
    }
  }
</script>