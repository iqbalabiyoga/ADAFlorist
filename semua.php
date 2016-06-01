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
<?php
session_start();
include 'connect.php';
include 'header.php';
?>

    <body>

        <?php if (isset($_GET['caris'])){?>
            <div id="hasilcari" class="row section scrollspy">
                <h5 align=center>Hasil Pencarian</h5>
                <div class="row container">
                    <form method="get" action="">
                        <div class="col s9">
                            <input type="search" name="cari" placeholder="nama, jenis, ciri, dan sebagainya">
                        </div>
                        <div class="col s3">
                            <button class="waves-effect waves-light btn" type="submit" name="caris" value="1">Cari</button>
                        </div>
                    
                        </form>
                </div>
                <?php
                    include 'anti-inject.php';
                    $keys=$_GET['cari'];
                    $key=anti_injection($keys);
                    $hasils=mysqli_query($connect,"select * from tanaman where Nama_Tanaman like '%$key%' or Deskripsi_Tanaman like '%$key%' or Jenis_Tanaman like '%$key%' order by rand()");
        $jums=mysqli_query($connect,"select * from tanaman where Nama_Tanaman like '%$key%' or Deskripsi_Tanaman like '%$key%' or Jenis_Tanaman like '%$key%' order by rand()");
        $jum=mysqli_fetch_array($jums);
        if($jum>0){ ?>
                    <h6 class="blue-text center">Berikut adalah hasil pencarian yang cocok dengan kata kunci <strong>'<?php echo $key ?>'</strong></h6>
                    <?php while ($hasil=mysqli_fetch_assoc($hasils)) {?>
                        <div class="col s3">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="image/<?= $hasil['Gambar']?>">
                                </div>
                                <div class="card-content">
                                    <p class="card-title activator grey-text text-darken-4">
                                        <?php echo $hasil['Nama_Tanaman'] ?><i class="material-icons right">more_vert</i></p>
                                    <span class="card-title activator cyan-text text-darken-4">
                                        <div class="row"><div class="col s6"><strong>Rp <?php $has=$hasil['Harga_Tanaman'] ;
        echo number_format("$has","0",",",".") ?></strong></div><div class="col s6"><?php if ($hasil['Jumlah_Stok']>0) echo "<h6 class='white-text teal'>Stok Tersedia</h6>"; else echo "<h6 class='white-text red'>Stok Habis</h6>";?></div></div>
                    </span>
                                    <p> <a class="waves effect waves-light btn cyan" href="tanaman.php?idtanaman=<?php echo $hasil['ID_Tanaman']?> ">Beli Sekarang  <i class="material-icons">shopping_cart</i></a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?php echo $hasil['Nama_Tanaman'] ?><i class="material-icons right">close</i></span>
                                    <p>
                                        <?php echo $hasil['Deskripsi_Tanaman'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <?php }; } 
                                         else {echo "<h6 class='blue-text center'>Maaf, kata kunci <strong>'$key'</strong> tidak cocok dengan tanaman apapun</h6>";}?> </div>
            <?php } else { ?>

                <div id="toko" class="row section scrollspy">
                    <h5 align=center>Semua Tanaman</h5>
                    <div class="container">
                        <div class="row">
                            <form method="get" action="">
                                <div class="col s9">
                                    <input type="search" name="cari" placeholder="nama, jenis, ciri, dan sebagainya">
                                </div>
                                <div class="col s3">
                                    <button class="waves-effect waves-light btn" type="submit" name="caris" value="1">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php include 'connect.php';
	        $tanamans = mysqli_query($connect, "SELECT * FROM tanaman order by rand()");
			while ($tanaman = mysqli_fetch_assoc($tanamans)) {?>
                        <div class="col s3">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="image/<?= $tanaman['Gambar']?>">
                                </div>
                                <div class="card-content">
                                    <p class="card-title activator grey-text text-darken-4">
                                        <?php echo $tanaman['Nama_Tanaman'] ?><i class="material-icons right">more_vert</i></p>
                                    <span class="card-title activator cyan-text text-darken-4">
                                        <div class="row"><div class="col s6"><strong>Rp <?php
                $tots= $tanaman['Harga_Tanaman'];
            echo 
            number_format("$tots",0,",",".")?></strong></div><div class="col s6"><?php if ($tanaman['Jumlah_Stok']>0) echo "<h6 class='white-text teal'>Stok Tersedia</h6>"; else echo "<h6 class='white-text red'>Stok Habis</h6>";?></div></div>
                    </span>
                                    <p> <a class="waves effect waves-light btn cyan" href="tanaman.php?idtanaman=<?php echo $tanaman['ID_Tanaman']?> ">Beli Sekarang  <i class="material-icons">shopping_cart</i></a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?php echo $tanaman['Nama_Tanaman'] ?><i class="material-icons right">close</i></span>
                                    <p>
                                        <?php echo $tanaman['Deskripsi_Tanaman'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                </div>
                <?php } ?>
                    <div class="container" align='right'>
                        <a class="waves effect waves-light btn cyan" href="index.php"> Kembali Ke Halaman Utama<i class="material-icons">fast_rewind</i></a>
                    </div>
    </body>
    <?php include 'footer.php';?>