<?php
  session_start();
  include 'db/db.php';
  
  function login($data) {
    if ($data['password_hash'] == $data['password']) {
      $_SESSION['id'] = $data['id'];
      $_SESSION['firstname'] = $data['firstname'];
      $_SESSION['lastname'] = $data['lastname'];
      $_SESSION['gelar_depan'] = $data['gelar_depan'];
      $_SESSION['gelar_belakang'] = $data['gelar_belakang'];
      $_SESSION['jenis_kelamin'] = $data['jenis_kelamin'];
      $_SESSION['role'] = $data['role'];
      $_SESSION['alamat'] = $data['alamat'];
      $_SESSION['no_telepon'] = $data['no_telepon'];
      $_SESSION['unit'] = $data['unit'];
      $_SESSION['jabatan'] = $data['jabatan'];
      return 2;
    }
    else return 1;
  }

  if(isset($_POST["username"])){$username_=$db->real_escape_string($_POST["username"]);}else{$username_="";}
  if(isset($_POST["password"])){$password_=$db->real_escape_string($_POST["password"]);}else{$password_="";}
  
  $user = $db->query("SELECT id, 
                             password, 
                             firstname, 
                             lastname, 
                             gelar_depan, 
                             gelar_belakang, 
                             jenis_kelamin, 
                             role,
                             alamat,
                             no_telepon,
                             unit,
                             jabatan
                      FROM tb_user
                      WHERE username='".$username_."' AND password='".md5($password_)."'", 0);
  $result = $user->fetch_assoc();
  $id = $result['id'];
  $password = $result['password'];
  $firstname = $result['firstname'];
  $lastname = $result['lastname'];
  $gelar_depan = $result['gelar_depan'];
  $gelar_belakang = $result['gelar_belakang'];
  $jenis_kelamin = $result['jenis_kelamin'];
  $role = $result['role'];
  $alamat = $result['alamat'];
  $no_telepon = $result['no_telepon'];
  $unit = $result['unit'];
  $jabatan = $result['jabatan'];

  $data = [
    'id' => $id,
    'password' => $password,
    'password_hash' => md5($password_),
    'firstname' => $firstname,
    'lastname' => $lastname,
    'gelar_depan' => $gelar_depan,
    'gelar_belakang' => $gelar_belakang,
    'jenis_kelamin' => $jenis_kelamin,
    'alamat' => $alamat,
    'no_telepon' => $no_telepon,
    'unit' => $unit,
    'jabatan' => $jabatan,
    'role' => $role
  ];

  $loginArea = login($data);

  if ($loginArea == 2) {
      echo '<script>alert("Hai, ' . $firstname . ' ' . $lastname . '. kamu berhasil login");location.href = "index.php"</script>';
  } else if ($loginArea == 1) {
      echo '<script>alert("Gagal Login");window.history.go(-1);</script>';
  }
?>