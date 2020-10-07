<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];

// PROSES INPUT DATA USER
if ($aksi == 'insert') {
    $kode_kelas = $_POST['kode_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    
    $insert = $db->query('INSERT INTO tb_kelas 
        (kode_kelas, 
        nama_kelas) 
        VALUES 
        ("'.$kode_kelas.'",
        "'.$nama_kelas.'"
    )');

    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=kelas&s=kelas"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }
// PROSES DATA UPDATE USER
} else if ($aksi == 'update') {
    $id = $_GET['id'];
    $kode_kelas = $_POST['kode_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    
    $update = $db->query('UPDATE tb_kelas SET kode_kelas="'.$kode_kelas.'", 
        nama_kelas="'.$nama_kelas.'"
        WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diedit");location.href = "../../index.php?m=kelas&s=kelas"</script>';
    } else {
        echo '<script>alert("Data gagal diedit");history.go(-1)</script>';
    }
// HAPUS DATA USER BERDASARKAN ID
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM tb_kelas WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=kelas&s=kelas"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
}