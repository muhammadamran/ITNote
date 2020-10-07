<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];

// PROSES INPUT DATA USER
if ($aksi == 'insert') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gelar_depan = $_POST['gelar_depan'];
    $gelar_belakang = $_POST['gelar_belakang'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $unit = $_POST['unit'];
    $jabatan = $_POST['jabatan'];
    
    $insert = $db->query('INSERT INTO tb_user 
                        (firstname, 
                        lastname, 
                        gelar_depan, 
                        gelar_belakang, 
                        username, password, 
                        jenis_kelamin, 
                        email, 
                        role, 
                        alamat,
                        no_telepon,
                        unit, 
                        jabatan) 
                        VALUES 
                        ("'.$firstname.'",
                        "'.$lastname.'",
                        "'.$gelar_depan.'",
                        "'.$gelar_belakang.'",
                        "'.$username.'",
                        "'.$password.'",
                        "'.$jenis_kelamin.'",
                        "'.$email.'",
                        "'.$role.'",
                        "'.$alamat.'",
                        "'.$no_telepon.'",
                        "'.$unit.'",
                        "'.$jabatan.'"
                        )');

    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=user&s=user"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }
// PROSES DATA UPDATE USER
} else if ($aksi == 'update') {
    $id = $_GET['id'];
    $department = $_POST['department'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $grade = $_POST['grade'];
    $usia = $_POST['usia'];
    $status_pernikahan = $_POST['status_pernikahan'];
    $indesk_predikat = $_POST['indesk_predikat'];
    $kehadiran = $_POST['kehadiran'];
    $rangking = $_POST['rangking'];
    
    $update = $db->query('UPDATE tb_user SET nama="'.$nama.'", 
                                          department="'.$department.'", 
                                          email="'.$email.'",
                                          role="'.$role.'", 
                                          grade="'.$grade.'", 
                                          usia="'.$usia.'", 
                                          status_pernikahan="'.$status_pernikahan.'", 
                                          indesk_predikat="'.$indesk_predikat.'", 
                                          kehadiran="'.$kehadiran.'", 
                                          rangking="'.$rangking.'", 
                                          role="'.$role.'" 
                                          WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diedit");location.href = "../../index.php?m=user&s=user"</script>';
    } else {
        echo '<script>alert("Data gagal diedit");history.go(-1)</script>';
    }
// HAPUS DATA USER BERDASARKAN ID
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM tb_user WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=user&s=user"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD USER BERDASARKAN ID
} else if ($aksi == 'update_password') {
    $id = $_GET['id'];
    $password = md5($_POST['password']);
    
    $change = $db->query('UPDATE tb_user SET password="'.$password.'" WHERE id="'.$id.'"');

    if ($change) {
        echo '<script>alert("Password berhasil diganti");location.href = "../../index.php?m=user&s=user"</script>';
    } else {
        echo '<script>alert("Password gagal diganti");history.go(-1)</script>';
    }
}