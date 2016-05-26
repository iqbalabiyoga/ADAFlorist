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
        include 'connect.php';
        include 'header.php';?>
        <div id="hasilcari" class="row section scrollspy">

        <?php if isset($_GET['caris']){?>
            <h5 align=center>Hasil Pencarian</h5>
            <div class="row container">
                    <form method="" action="hasil.php">
                        <div class="col s9">
                            <input type="search" name="cari" placeholder="Cari Tanaman">
                        </div>
                        <div class="col s3">
                            <button class="waves-effect waves-light btn" type="submit" name="caris" value="1">Cari</button>
                        </div>
                    </form>
                </div>
            <?php $key=$_GET['cari'];
        $hasils=mysqli_query($connect,"select * from tanaman where Deskripsi_Tanaman like '%$key%' or Deskripsi_Tanaman like '%$key%' ");
        while ($hasil=mysqli_fetch_assoc($hasils)) {?>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="image/<?= $hasil['Gambar']?>">
                        </div>
                        <div class="card-content">
                            <p class="card-title activator grey-text text-darken-4">
                                <?php echo $hasil['Nama_Tanaman'] ?><i class="material-icons right">more_vert</i></p>
                            <span class="card-title activator cyan-text text-darken-4"><strong>Rp <?php echo $hasil['Harga_Tanaman'] ?></strong>
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
                <?php }} ?>
        </div>
</body>