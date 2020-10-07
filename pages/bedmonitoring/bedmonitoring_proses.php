<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];

if ($aksi == 'insert') {
    $kode_ruang = $_POST['kode_ruang'];
    $tipe_pasien = $_POST['tipe_pasien'];
    $total_TT = $_POST['total_TT'];
    $terpakai_male = $_POST['terpakai_male'];
    $terpakai_female = $_POST['terpakai_female'];
    $kosong_male = $_POST['kosong_male'];
    $kosong_female = $_POST['kosong_female'];
    $waiting = $_POST['waiting'];
    $tgl_update = $_POST['tgl_update'];
    
    $insert = $db->query('INSERT INTO tb_bedmonitoring 
        (kode_ruang,
        tipe_pasien,
        total_TT,
        terpakai_male, 
        terpakai_female,
        kosong_male, 
        kosong_female, 
        waiting, 
        tgl_update) 
        VALUES 
        ("'.$kode_ruang.'",
        "'.$tipe_pasien.'",
        "'.$total_TT.'",
        "'.$terpakai_male.'",
        "'.$terpakai_female.'",
        "'.$kosong_male.'",
        "'.$kosong_female.'",
        "'.$waiting.'",
        "'.$tgl_update.'"
    )');

    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=bedmonitoring&s=bedmonitoring"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }
} else if ($aksi == 'update') {
    $id = $_GET['id'];
    $kode_ruang = $_POST['kode_ruang'];
    $tipe_pasien = $_POST['tipe_pasien'];
    $total_TT = $_POST['total_TT'];
    $terpakai_male = $_POST['terpakai_male'];
    $terpakai_female = $_POST['terpakai_female'];
    $kosong_male = $_POST['kosong_male'];
    $kosong_female = $_POST['kosong_female'];
    $waiting = $_POST['waiting'];
    $tgl_update = $_POST['tgl_update'];
    
    $update = $db->query('UPDATE tb_bedmonitoring SET kode_ruang="'.$kode_ruang.'", 
        tipe_pasien="'.$tipe_pasien.'",
        total_TT="'.$total_TT.'",
        terpakai_male="'.$terpakai_male.'",
        terpakai_female="'.$terpakai_female.'",
        kosong_male="'.$kosong_male.'",
        kosong_female="'.$kosong_female.'",
        waiting="'.$waiting.'",
        tgl_update="'.$tgl_update.'"
        WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diedit");location.href = "../../index.php?m=bedmonitoring&s=bedmonitoring"</script>';
    } else {
        echo '<script>alert("Data gagal diedit");history.go(-1)</script>';
    }

} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM tb_bedmonitoring WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=bedmonitoring&s=bedmonitoring"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
}