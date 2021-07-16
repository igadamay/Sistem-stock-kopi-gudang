<?php

    include 'connect.php';

$nama = $_POST['nama'];
$password = $_POST['password'];
$login = mysqli_query($koneksi, "SELECT * FROM login WHERE nama = '$nama' and password ='$password'");
$cek = mysqli_num_rows($login);
if ($cek>0) {
    # code...
    header('Location: index1.html');
}
else{
    header('Location: index.php');
}


?>