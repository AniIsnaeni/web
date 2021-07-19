
<?php
session_start();
include "koneksi.php";
$username = $_POST['user_name'];
$pass = md5($_POST['pass']);
$login = mysqli_query($koneksi,"SELECT * FROM profil WHERE user_name='$username' and pass='$pass'");
$cek = mysqli_num_rows($login);
 
if ($cek > 0) {
  $_SESSION['user_name'] = $username;
  $_SESSION['status'] = "login";
  header("location:dashboard.php");
 
}else {
  header("location:index.php?pesan=gagal");
 
}
 ?>
