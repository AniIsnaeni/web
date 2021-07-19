<?php

include"koneksii.php";
$user=$_POST['username'];
$pass=$_POST['password'];

$sql=mysqli_query($koneksi, " Select * from users where username='$user' and password='$pass'");

$cek=mysqli_num_rows($sql);

if($cek >0){
    echo"  selamat <b>$user</b> anda berhasil login<br>";
    echo " silahkan <a href=dashboard1.php>lanjutkan<a/>";

}

else{
    echo " Username dan password salah";
            echo " silahkan < a href=index.php.php>Logout<a/> kembali";
        
}

?>
