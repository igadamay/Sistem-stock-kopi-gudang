<?php 

include 'connect.php';
$Idkopi = $_POST['Idkopi'];
$Jenis_kopi = $_POST['Jenis_kopi'];
$Tanggal = $_POST['Tanggal'];
$Bulan = $_POST['Bulan'];
$Tahun = $_POST['Tahun'];
$Jumlah_kopi = $_POST['Jumlah_kopi'];
$Exp = $_POST['Exp'];

mysqli_query($koneksi,"insert into kopi values ('$Idkopi','$Jenis_kopi','$Tanggal','$Bulan','$Tahun','$Jumlah_kopi','$Exp')");
	header("location: data_kopi.php");
?>