<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Ketersedian Tempat Tidur</h5>
        </div>
        <div class="card-body ">
          <a href="index.php?m=bedmonitoring&s=bedmonitoring_add" class="btn btn-primary">Tambah Ketersedian Tempat Tidur</a>
          <a href="http://127.0.0.1/app-dev/siranap/siranap-post/index.php" target="_blank" class="btn btn-dark">POST BRIDGING</a>
          <!-- <a href="http://10.10.10.120/app-dev/siranap/siranap-post/index.php" target="_blank" class="btn btn-dark">POST BRIDGING</a> -->
          <a href="http://127.0.0.1/app-dev/siranap/siranap-ws/index.php" target="_blank" class="btn btn-dark">LIHAT BRIDGING</a>
          <!-- <a href="http://10.10.10.120/app-dev/siranap/siranap-ws/index.php" target="_blank" class="btn btn-dark">LIHAT BRIDGING</a> -->
          <div class="table-responsive">
            <table class="table table-striped table-bordered data">
              <thead>
                <tr>
                  <th><font style="font-size: 9px">ID</font></th>
                  <th><font style="font-size: 9px">Kode Ruangan</font></th>
                  <th><font style="font-size: 9px">Tipe Pasien</font></th>
                  <th><font style="font-size: 9px">Total Tempat Tidur</font></th>
                  <th><font style="font-size: 9px">Bed Diguanakan Pria</font></th>
                  <th><font style="font-size: 9px">Bed Diguanakan Wanita</font></th>
                  <th><font style="font-size: 9px">Bed Tersedia Pria</font></th>
                  <th><font style="font-size: 9px">Bed Tersedia Wanita</font></th>
                  <th><font style="font-size: 9px">Waiting</font></th>
                  <th><font style="font-size: 9px">Tanggal Update</font></th>
                  <th><font style="font-size: 9px">Aksi</font></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $data = $db->query("SELECT * FROM tb_bedmonitoring ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?= $row['id'] ?></td>
                    <td>
                      <?php
                      if ($row['tipe_pasien']=='0000') {
                         echo "Umum";
                      }elseif ($row['tipe_pasien']=='0001') {
                        echo "Anak";
                      }elseif ($row['tipe_pasien']=='0002') {
                        echo "Anak (Luka Bakar)";
                      }elseif ($row['tipe_pasien']=='0003') {
                        echo "Penyakit Dalam";
                      }elseif ($row['tipe_pasien']=='0004') {
                        echo "Kebidanan";
                      }elseif ($row['tipe_pasien']=='0005') {
                        echo "Kandungan";
                      }elseif ($row['tipe_pasien']=='0006') {
                        echo "Bedah";
                      }elseif ($row['tipe_pasien']=='0007') {
                        echo "Kanker";
                      }elseif ($row['tipe_pasien']=='0008') {
                        echo "Mata";
                      }elseif ($row['tipe_pasien']=='0009') {
                        echo "THT";
                      }elseif ($row['tipe_pasien']=='0010') {
                        echo "Paru";
                      }elseif ($row['tipe_pasien']=='0011') {
                        echo "Jantung";
                      }elseif ($row['tipe_pasien']=='0012') {
                        echo "Orthopedi";
                      }elseif ($row['tipe_pasien']=='0013') {
                        echo "Kulit dan Kelamin";
                      }elseif ($row['tipe_pasien']=='0014') {
                        echo "Saraf";
                      }elseif ($row['tipe_pasien']=='0015') {
                        echo "Jiwa";
                      }elseif ($row['tipe_pasien']=='0016') {
                        echo "Infeksi";
                      }elseif ($row['tipe_pasien']=='0017') {
                        echo "Luka Bakar";
                      }elseif ($row['tipe_pasien']=='0018') {
                        echo "NAPZA";
                      }elseif ($row['tipe_pasien']=='0019') {
                        echo "Isolasi Air Borne";
                      }elseif ($row['tipe_pasien']=='0020') {
                        echo "Isolasi TB MDR ";
                      }elseif ($row['tipe_pasien']=='0021') {
                        echo "Kulit dan Kelamin";
                      }elseif ($row['tipe_pasien']=='0022') {
                        echo "Isolasi Imunitas menurun";
                      }elseif ($row['tipe_pasien']=='0023') {
                        echo "Isolasi Radioaktif";
                      }elseif ($row['tipe_pasien']=='0024') {
                        echo "ICU/RICU";
                      }elseif ($row['tipe_pasien']=='0025') {
                        echo "NICU";
                      }elseif ($row['tipe_pasien']=='0026') {
                        echo "PICU";
                      }elseif ($row['tipe_pasien']=='0027') {
                        echo "CVCU/ICCU";
                      }elseif ($row['tipe_pasien']=='0028') {
                        echo "";
                      }elseif ($row['tipe_pasien']=='0029') {
                        echo "HCU";
                      }elseif ($row['tipe_pasien']=='0030') {
                        echo "Kedokteran Nuklir";
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      if ($row['kode_ruang']=='0001') {
                         echo "super VIP";
                      }elseif ($row['kode_ruang']=='0002') {
                        echo "VIP";
                      }elseif ($row['kode_ruang']=='0003') {
                        echo "Kelas 1";
                      }elseif ($row['kode_ruang']=='0004') {
                        echo "Kelas 2";
                      }elseif ($row['kode_ruang']=='0005') {
                        echo "Kelas 3";
                      }elseif ($row['kode_ruang']=='0006') {
                        echo "Intermediate";
                      }elseif ($row['kode_ruang']=='0007') {
                        echo "Isolasi";
                      }elseif ($row['kode_ruang']=='0008') {
                        echo "Rawat Khusus";
                      }elseif ($row['kode_ruang']=='0009') {
                        echo "Stroke Care Unit";
                      }
                      ?>
                    </td>
                    <td><?= $row['total_TT'] ?></td>
                    <td><?= $row['terpakai_male'] ?></td>
                    <td><?= $row['terpakai_female'] ?></td>
                    <td><?= $row['kosong_male'] ?></td>
                    <td><?= $row['kosong_female'] ?></td>
                    <td><?= $row['waiting'] ?></td>
                    <td><?= $row['tgl_update'] ?></td>
                    <td>
                      <a href="index.php?m=bedmonitoring&s=bedmonitoring_edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-pencil"></i></a>
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
      location.href = "pages/bedmonitoring/bedmonitoring_proses.php?aksi=hapus&id=" + id;
    }
  }
</script>