<!DOCTYPE HTML>
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

<?php 
    session_start();
    include 'headadmin.php';
    include 'connect.php';?>
    <div class="container">
        <center><h5>Pelanggan Terdaftar</h5></center>
    <table class="striped">
        <thead>
            <th>ID Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Nomor Ponsel</th>
            <th>Email</th>
            <th>Jumlah Transaksi</th>
            <th>Transaksi Terkini</th>
        
        
        
        </thead>
    <?php 
    $pelanggans=mysqli_query($connect,"select * from customer");
    while($pelanggan=mysqli_fetch_assoc($pelanggans)){
    $idpel=$pelanggan['ID_customer'];
    $transs=mysqli_query($connect,"select max(ID_Transaksi) as baru from transaksi where id_customer='$idpel'");
    $trans = mysqli_fetch_array($transs);
    ?>
        
    <tr>
        <td>#<?php echo $pelanggan['ID_customer']?></td>
        <td><a href="transaksi_user.php?idcustomer=<?php echo $pelanggan['ID_customer']?>"><?php echo $pelanggan['nama']?></a></td>
        <td><?php echo $pelanggan['alamat']?></td>
        <td><?php echo $pelanggan['notelfon']?></td>
        <td><?php echo $pelanggan['email']?></td>
        <td><?php echo $pelanggan['beli']?></td>
        <td><a href='detail_trans.php?idtransaksi=<?php echo $trans['baru']?>&idcustomer=<?php echo $pelanggan['ID_customer']?>'><?php echo $trans['baru']?></a></td>
    </tr>
   
    <?php } ?>
         </table>
    </div>