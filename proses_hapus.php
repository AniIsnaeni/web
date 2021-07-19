<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM vip WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 
  header("location: index2.php");
}else{
  echo "Data gagal dihapus. <a href='index2.php'>Kembali</a>";
}
?>
