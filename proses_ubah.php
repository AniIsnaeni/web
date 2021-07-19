<?php

include "koneksi.php";

$id = $_GET['id'];

$Nama = $_POST['Nama'];
$Negara = $_POST['Negara'];
$Waktu = $_POST['Waktu'];
$Ciri = $_POST['Ciri'];

$sql = $pdo->prepare("UPDATE vip SET Nama=:Nama, Negara=:Negara, Waktu=:Waktu, Ciri=:Ciri WHERE id=:id");
$sql->bindParam(':Nama', $Nama);
$sql->bindParam(':Negara', $Negara);
$sql->bindParam(':Waktu', $Waktu);
$sql->bindParam(':Ciri', $Ciri);
$sql->bindParam(':id', $id);
$execute = $sql->execute();
if($execute){ 
  
  header("location: index2.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>
