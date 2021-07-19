<html>
<head>
  <title></title>
</head>
<body>
  <h1>Tambah Data Pengunjung</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>Nama</td>
        <td><input type="text" name="Nama"></td>
      </tr>
      <tr>
        <td>Negara</td>
        <td><input type="text" name="Negara"></td>
      </tr>
      <tr>
        <td>Waktu <input type="date" name="tanggal"></td> 
      </tr>

      <tr>
        <td>Ciri</td>
        <td><input type="text" name="Ciri"></td>
      </tr>


    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="index2.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>
