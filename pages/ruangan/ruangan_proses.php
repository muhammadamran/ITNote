<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];

// PROSES INPUT DATA USER
if ($aksi == 'insert') {
	$kode_ruangan = $_POST['kode_ruangan'];
	$nama_ruangan = $_POST['nama_ruangan'];
	
	$insert = $db->query('INSERT INTO tb_ruangan 
		(kode_ruangan, 
		nama_ruangan) 
		VALUES 
		("'.$kode_ruangan.'",
		"'.$nama_ruangan.'"
	)');

	if ($insert) {
		echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=ruangan&s=ruangan"</script>';
	} else {
		echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
	}
// PROSES DATA UPDATE USER
} else if ($aksi == 'update') {
	$id = $_GET['id'];
	$kode_ruangan = $_POST['kode_ruangan'];
	$nama_ruangan = $_POST['nama_ruangan'];
	
	$update = $db->query('UPDATE tb_ruangan SET kode_ruangan="'.$kode_ruangan.'", 
		nama_ruangan="'.$nama_ruangan.'"
		WHERE id="'.$id.'"');

	if ($update) {
		echo '<script>alert("Data berhasil diedit");location.href = "../../index.php?m=ruangan&s=ruangan"</script>';
	} else {
		echo '<script>alert("Data gagal diedit");history.go(-1)</script>';
	}
// HAPUS DATA USER BERDASARKAN ID
} else if ($aksi == 'hapus') {
	$id = $_GET['id'];
	$hapus = $db->query('DELETE FROM tb_ruangan WHERE id="'.$id.'"');

	if ($hapus) {
		echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=ruangan&s=ruangan"</script>';
	} else {
		echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
	}
}