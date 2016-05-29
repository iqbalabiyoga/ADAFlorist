<!DOCTYPE html>
<html>

<head>
    <title>AdaFlorist-Belanja Bibit Tanaman Hias Mudah dan Aman</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<?php session_start();
if(empty($_SESSION['user'])&&empty($_SESSION['admin'])) echo "<script>document.location.href='forbid.php'</script>";
include 'header.php';
include 'anti-inject.php';
$idcusts=$_GET['idcustomer'];
$idcust=anti_injection($idcusts);
if(isset($_SESSION['user'])&&$_SESSION['idcust']!=$idcust) echo "<script>document.location.href='forbid.php'</script>";
$pelanggans=mysqli_query($connect,"select * from customer where ID_customer='$idcust'");
$pelanggan=mysqli_fetch_array($pelanggans);
$transs=mysqli_query($connect, "select * from transaksi where id_customer='$idcust'");
$jums=mysqli_query($connect,"select count(ID_Transaksi) as jumlah from transaksi where id_customer='$idcust'");
$jum=mysqli_fetch_array($jums);?>
<br>
<?php if($jum['jumlah']>0){ ?>
<div class="container">
<center><h6>Berikut adalah daftar transaksi yang dilakukan oleh </h6>
    <h4><?php echo $pelanggan['nama']?></h4></center>
<h7>Klik pada nomor transaksi untuk melihat detail transaksi</h7>
<table class="striped">
    <thead>
        <th>Nomor Transaksi</th>
        <th>Waktu Transaksi</th>
        <th>Jumlah Pembelian</th>
        <th>Status Pembayaran</th>
    </thead>

<?php
while($trans=mysqli_fetch_array($transs)){
    $no=0;?>
    <tr>
        <td>
            <a href='detail_trans.php?idtransaksi=<?php echo $trans['ID_Transaksi']?>'>
                <?php echo $trans['ID_Transaksi']?></a>
        </td>
        <td>
        <?php echo $trans['Tanggal_transaksi']?>
        </td>
        <td>
        Rp <?php echo $trans['Total_Biaya']?>,-
        </td>
        <td>
        <?= $trans['Konfirmasi']==1 ? 'Sudah Dikonfirmasi' : 'Belum Dikonfirmasi' ?>
        </td>
    
    </tr>
<?php } ?>  </table> 
<?php } else echo "<h5 class='center'>Anda Belum pernah melakukan transaksi, Ayo segera Belanja</h5>";?>