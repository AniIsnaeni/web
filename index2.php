<html>
<head>
</head>
<link rel="stylesheet" href="style2.css">
<body>
  <a href="tambah_data.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Nama</th>
    <th>Negara</th>
    <th>Waktu</th>
    <th>Ciri</th>
    <th colspan="2">Aksi</th>
  </tr>

  
  <?php
  
  include "koneksi.php";
  
  $sql = $pdo->prepare("SELECT * FROM vip");
  $sql->execute(); 
  while($data = $sql->fetch()){ 
    echo "<tr>";
    echo "<td>".$data['Nama']."</td>";
    echo "<td>".$data['Negara']."</td>";
    echo "<td>".$data['Waktu']."</td>";
    echo "<td>".$data['Ciri']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>

  </table>
  <center><button class="button-flat"><a href='dashboard1.php'>kembali</button></center>

</body>
</html>
