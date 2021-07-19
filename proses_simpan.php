<?php
include "koneksi.php";
$Nama = $_POST['Nama'];
$Negara= $_POST['Negara'];
$Waktu = $_POST['Waktu'];
$Ciri= $_POST['Ciri'];
$sql = $pdo->prepare("INSERT INTO vip( Nama, Negara, Waktu,Ciri) VALUES(:Nama,:Negara,:Waktu,:Ciri)");
$sql->bindParam(':Nama', $Nama);
$sql->bindParam(':Negara', $Negara);
$sql->bindParam(':Waktu', $Waktu);
$sql->bindParam(':Ciri', $Ciri);
$sql->execute(); 
if($sql){ 
  
  header("location: index2.php"); 
}else{
  
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
