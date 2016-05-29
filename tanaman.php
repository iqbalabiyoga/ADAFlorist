<!DOCTYPE html>
<html>
<?php
    session_start();
	include 'connect.php';
    include 'anti-inject.php';
	$ids = $_GET['idtanaman'];
    $id=anti_injection($ids);
?>

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
        if(isset($_SESSION['admin'])){
        include 'headadmin.php';} else{
        include 'header.php';}?>
            <div class="container">
                <div class="row">
                    <div class="col s4">
                        <div class="card medium">
                            <?php

		$query = mysqli_query($connect, "SELECT * FROM tanaman WHERE ID_Tanaman = '$id' ");
		$tanaman = mysqli_fetch_array($query);
        $jumlih=$tanaman['jumlah_lihat'];
        $lihat=$tanaman['jumlah_lihat']+1;
        mysqli_query($connect, "update tanaman set jumlah_lihat='$lihat' where ID_Tanaman = '$id'");
	?>
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="image/<?php echo $tanaman['Gambar'] ?>">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4"><?php echo $tanaman['Nama_Tanaman'] ?><i class="material-icons right">more_vert</i></span>
                                    <br>(klik gambar untuk lihat deskripsi)
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Deskripsi Tanaman<i class="material-icons right">close</i></span>

                                    <?php echo $tanaman['Deskripsi_Tanaman'] ?>

                                </div>
                        </div>
                            <?php if($tanaman['Jumlah_Stok']>0) echo "<h5 class='brown-text cyan lighten-5'> Stok Tersedia : ".$tanaman['Jumlah_Stok']."</h5>"; else echo "<h5 class='white-text red'> Stok Habis</h5>";?>
                        <div class="row">
                            <form action="addtocart.php" name="beli" method="get">
                                <div class="input-field col s5">
                                    <input id="quantity" type="number" name="quantity" class="validate" min="1" max="<?php echo $tanaman['Jumlah_Stok']?>" required>
                                    <label for="jumlah">Jumlah Pembelian</label>
                                </div>
                                <input id="id" type="hidden" name="id" value=<?php echo "$id"?>>
                                <button class="waves-effect waves-light btn" type="submit" name="tambah">
                                    <i class="material-icons right">shopping_cart</i>Tambahkan ke Keranjang
                                </button>
                            </form>
                        </div>
                        <div class="row">
                            Terjual sebanyak :
                            <?php echo $tanaman['jumlah_beli']?> tanaman
                                <br> Dilihat sebanyak
                                <?php echo $tanaman['jumlah_lihat']?> kali oleh pengguna
                        </div>
                    </div>
                    <div class="col s8">
                        <h4><?php echo $tanaman['Nama_Tanaman'] ?></h4>
                        <div class="row white-text cyan">
                            <div class="col s4">
                                <h5>Harga</h5></div>
                            <div class="col s6"><h5>: Rp
                                <?php echo $tanaman['Harga_Tanaman'] ?>
                                    </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s4"><strong>Jenis</strong></div>
                            <div class="col s6">:
                                <?php echo $tanaman['Jenis_Tanaman'] ?>
                            </div>
                        </div>
                        <div class="row teal lighten-4">
                            <div class="col s4"><strong>Berat</strong></div>
                            <div class="col s6">:
                                <?php echo $tanaman['Berat'] ?> Kg
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s4"><strong>Iklim</strong></div>
                            <div class="col s6">:
                                <?php echo $tanaman['Iklim'] ?>
                            </div>
                        </div>
                        <div class="row teal lighten-4">
                            <div class="col s4"><strong>Ukuran Tanaman</strong></div>
                            <div class="col s6">:
                                <?php echo $tanaman['Ukuran_Tanaman'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s4"><strong>Media Tanam</strong></div>
                            <div class="col s6">:
                                <?php echo $tanaman['Media_Tanam'] ?>
                            </div>
                        </div>
                        <div class="row teal lighten-4">
                            <div class="col s4"><strong>Ukuran pot</strong></div>
                            <div class="col s6">:
                                <?php echo $tanaman['Ukuranpot'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s4"><strong>Penyiraman</strong></div>
                            <div class="col s6">:
                                <?php echo $tanaman['Penyiraman'] ?>
                            </div>
                        </div>
                        <div class="row teal lighten-4">
                            <div class="col s4"><strong>Kebutuhan Sinar Matahari</strong></div>
                            <div class="col s6">:
                                <?php echo $tanaman['Kebutuhan_Sinar'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s4"><strong>Pemupukan</strong></div>
                            <div class="col s6">:
                                <?php echo $tanaman['Pemupukan'] ?>
                            </div>
                        </div>
                        <div class="row teal lighten-4">
                            <div class="col s4"><strong>Asal Bibit</strong></div>
                            <div class="col s6">:
                                <?php echo $tanaman['Asal_Bibit'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s4"><strong>Kondisi Tanaman</strong></div>
                            <div class="col s6">:
                                <?php echo $tanaman['Kondisi_Tanaman'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <h5>Tanaman Sejenis</h5>
                <div class="row bordered">
                    <?php
                $jenis=$tanaman['Jenis_Tanaman'];
                $sejeniss=mysqli_query($connect,"select * from tanaman where Jenis_Tanaman = '$jenis' and ID_Tanaman!='$id'");
                while($sejenis=mysqli_fetch_array($sejeniss)){?>
                    <div class="col s4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="image/<?= $sejenis['Gambar']?>">
                                </div>
                                <div class="card-content">
                                    <p class="card-title activator grey-text text-darken-4">
                                        <?php echo $sejenis['Nama_Tanaman'] ?><i class="material-icons right">more_vert</i></p>
                                    <span class="card-title activator cyan-text text-darken-4">
                                        <div class="row"><div class="col s6"><strong>Rp <?php echo $sejenis['Harga_Tanaman'] ?></strong></div><div class="col s6"><?php if ($sejenis['Jumlah_Stok']>0) echo "<h6 class='white-text teal'>Stok Tersedia</h6>"; else echo "<h6 class='white-text red'>Stok Habis</h6>";?></div></div>
                    </span>
                                    <p> <a class="waves effect waves-light btn cyan" href="tanaman.php?idtanaman=<?php echo $sejenis['ID_Tanaman']?> ">Beli Sekarang  <i class="material-icons">shopping_cart</i></a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?php echo $sejenis['Nama_Tanaman'] ?><i class="material-icons right">close</i></span>
                                    <p>
                                        <?php echo $sejenis['Deskripsi_Tanaman'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    
                </div>
                
            </div>
    </body>
    <?php
/*<a  href="addtocart.php?id=<?php echo $idbarang?>&quantity=
        <?php echo $quantity?>">*/ require 'footer.php' ?>

</html>