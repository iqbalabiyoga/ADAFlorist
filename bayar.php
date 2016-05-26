<?php
session_start();
include 'connect.php';
$idtrans=$_GET['idtransaksi'];
mysqli_query($connect,"update transaksi set Konfirmasi = 1 where ID_Transaksi = '$idtrans'");
echo "<script> document.location.href = 'transaksilist.php'; </script>";
?>