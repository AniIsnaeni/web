<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Ubah Data Siswa</h1>
  <?php

  include "koneksi.php";

  $id = $_GET['id'];
  
  $sql = $pdo->prepare("SELECT * FROM vip WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
    <table cellpadding="8">
      <tr>
        <td>Nama</td>
        <td><input type="text" name="Nama" value="<?php echo $data['Nama']; ?>"></td>
      </tr>
      <tr>
        <td>Negara</td>
        <td><input type="text" name="Negara" value="<?php echo $data['Negara']; ?>"> </td>
      </tr>
      <tr>
        <td>Waktu</td>
        <td><input type="date" name="Waktu" value="<?php echo $data['Waktu']; ?>"> </td>
      </tr>
      <tr>
        <td>Ciri</td>
        <td><input type="text" name="Ciri" value="<?php echo $data['Ciri']; ?>"> </td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="index2.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>

