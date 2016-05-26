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

<body>
     <?php
    session_start();
    include 'header.php'

    ?>
    <div id="toko" class="row section scrollspy">
        <h5 align=center>Kaktus dan Sukulen</h5>
        <div class="col s3">
            <?php
        include 'kategori.php'
        ?>
        </div>


        <?php 
        	include 'connect.php';
	        $tanamans = mysqli_query($connect, "SELECT * FROM tanaman where Jenis_Tanaman='Kaktus dan Sukulen'");
			while ($tanaman = mysqli_fetch_assoc($tanamans)) {
		?>
		<div class="col s3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="image/<?= $tanaman['Gambar']?>">
                </div>
                <div class="card-content">
                    <p class="card-title activator grey-text text-darken-4"><?php echo $tanaman['Nama_Tanaman'] ?><i class="material-icons right">more_vert</i></p>
                     <span class="card-title activator cyan-text text-darken-4">
                                        <div class="row"><div class="col s6"><strong>Rp <?php echo $tanaman['Harga_Tanaman'] ?></strong></div><div class="col s6"><?php if ($tanaman['Jumlah_Stok']>0) echo "<h6 class='white-text teal'>Stok Tersedia</h6>"; else echo "<h6 class='white-text red'>Stok Habis</h6>";?></div></div>
                    </span>
                    <p> <a class="waves effect waves-light btn cyan" href="tanaman.php?idtanaman=<?php echo $tanaman['ID_Tanaman']?> ">Beli Sekarang  <i class="material-icons">shopping_cart</i></a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?php echo $tanaman['Nama_Tanaman'] ?><i class="material-icons right">close</i></span>
                    <p><?php echo $tanaman['Deskripsi_Tanaman'] ?></p>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>


</body>

<?php

require 'footer.php'

?>
</html>