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
    if(empty($_SESSION['admin'])) echo "<script>document.location.href='forbid.php'</script>";
    include 'connect.php';
    $jumlah=0;
    $jumpel=0;
    $jumitem=0;
    $tanamans = mysqli_query($connect, "SELECT * FROM tanaman");
    $pelanggans= mysqli_query($connect, "SELECT * FROM customer");
    while ($tanaman = mysqli_fetch_assoc($tanamans)) {
    $jumlah=$jumlah+$tanaman['Jumlah_Stok'];
    $jumitem++;}
    while ($pelanggan = mysqli_fetch_assoc($pelanggans)) {
    $jumpel++;}
    
    ?>

    <body>
        <?php include 'headadmin.php'?>
            <div class="container">
                <h5>
    Dashboard
</h5>

                <div class="row">
                    <div class="card col s4">

                        <h5 class="pink white-text">Tanaman Dijual</h5>
                        <h4><?php echo $jumitem ?> item</h4>
                        <div class="card-action">
                            <a href="dateup.php">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    <div class="card col s4">

                        <h5 class="teal white-text"> Stok Tanaman Tersedia</h5>
                        <h4><?php echo $jumlah ?> tanaman</h4>
                    </div>
                    <div class="card col s4">
                        <h5 class="white-text pink">Transaksi Total</h5>
                        <?php $trans=mysqli_query($connect,"select count(ID_Transaksi) as jum from transaksi");
                    $tran=mysqli_fetch_array($trans);
                    $belums=mysqli_query($connect,"select count(ID_Transaksi) as belum from transaksi where Konfirmasi=0");
                    $belum=mysqli_fetch_array($belums);?>
                            <h4><?php echo $tran['jum'];?> transaksi</h4>
                            <h6><?php if ($belum['belum']==0) echo "sudah dikonfirmasi seluruhnya"; else echo $belum['belum']." transaksi belum dikonfirmasi";?></h6>
                            <div class="card-action">
                                <a href="transaksilist.php">Lihat Selengkapnya</a>
                            </div>
                    </div>

                </div>
                <div class="row">
                    <div class="card col s4">
                        <h5 class="brown white-text"> Tanaman Terlaris </h5>
                        <?php $no=0;
                        $tanams=mysqli_query($connect,"select * from tanaman order by jumlah_beli desc limit 5");
                        while ($tanam=mysqli_fetch_array($tanams)){
                            $no++;?>
                            <?php echo $no?> .
                                <a href="tanaman.php?idtanaman=<?php echo $tanam['ID_Tanaman']?>">
                                    <?php echo $tanam['Nama_Tanaman']?>
                                </a>
                                <br>
                                <?php } ?>
                    </div>
                    <div class="card col s4">
                        <h5 class="black white-text"> Paling Sering Dilihat </h5>
                        <?php $no=0;
                        $tanims=mysqli_query($connect,"select * from tanaman order by jumlah_lihat desc limit 5");
                        while ($tanim=mysqli_fetch_array($tanims)){
                            $no++;?>
                            <?php echo $no?> .
                                <a href="tanaman.php?idtanaman=<?php echo $tanim['ID_Tanaman']?>">
                                    <?php echo $tanim['Nama_Tanaman']?>
                                </a>
                                <br>
                                <?php } ?>
                    </div>
                    <div class="card col s4">
                        <h5 class="cyan darken-5 white-text">Pelanggan Terdaftar</h5>
                        <h4><?php echo $jumpel?> orang</h4>
                        <div class="card-action">
                        <a href="daftar_pelanggan.php">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="card col s4">
                        <h5 class="purple white-text">Paling Sering Transaksi </h5>
                        <?php $no=0;
                        $serings=mysqli_query($connect,"select * from customer order by beli desc limit 5");
                        while ($sering=mysqli_fetch_array($serings)){
                            $no++;?>
                            <?php echo $no?> .
                                <a href="transaksi_user.php?idcustomer=<?php echo $sering['ID_customer']?>">
                                    <?php echo $sering['nama']?>
                                </a>
                                <br>
                                <?php } ?>
                    </div>
                </div>
            </div>
    </body>