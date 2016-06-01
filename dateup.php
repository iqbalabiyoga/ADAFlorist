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
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>
    
   <?php 
    session_start();
     if(empty($_SESSION['admin'])) echo "<script>document.location.href='forbid.php'</script>";
    include 'headadmin.php'?>
<p><h4><center>Daftar Tanaman Dijual</center></h4></p>
    <table class="striped bordered" border="1px" width="59%">
        <thead>
            <th>ID Tanaman</th>
            <th>Nama Tanaman</th>
            <th>Jenis Tanaman</th>
            <th>Harga Tanaman</th>
            <th>Stok Tanaman</th>
            <th>Deskripsi Tanaman</th>
            <th width=15%>Tindakan</th>
        </thead>
        <?php
       
            include 'connect.php';
            $no = 0;
            $tanaman = mysqli_query($connect, "SELECT * FROM tanaman ORDER BY ID_Tanaman");
            while ($data = mysqli_fetch_assoc($tanaman)) {
        ?>
        <?php $no++ ?>
        <tr>
            <td align="center"><?php echo $data['ID_Tanaman'] ?></td>
            <td width=18%><a href="tanaman.php?idtanaman=<?php echo $data['ID_Tanaman']?>"><?php echo  $data['Nama_Tanaman']?></a></td>
            <td width=15%><?php echo $data['Jenis_Tanaman'] ?></td>
            <td width=10%><?= "Rp "?><?php
            $tots= $data['Harga_Tanaman'];
            echo 
            number_format("$tots",0,",",".") ?></td>
            <td><?php echo $data['Jumlah_Stok'] ?></td>
            <td width=50%><?php echo $data['Deskripsi_Tanaman'] ?></td>
            <td><a class='waves effect waves-light btn red modal-trigger' href="#hapus<?php echo $data['ID_Tanaman']?>">Hapus</a></td>
            <td><a class='waves effect waves-light btn blue'href="ubah.php?del=<?php echo $data['ID_Tanaman'] ?>">Ubah</a></td>
        </tr>
         <!-- Modal Structure -->
  <div id="hapus<?php echo $data['ID_Tanaman']?>" class="modal">
    <div class="modal-content">
      <h4>Hapus Tanaman</h4>
        <p>Apakah Anda ingin menghapus tanaman <strong> <?php echo $data['Nama_Tanaman']?> </strong> dari daftar katalog? </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Batal</a>
      <a href="delete.php?del=<?php echo $data['ID_Tanaman'] ?>" class=" modal-action modal-close waves-effect waves-green btn-flat">Hapus</a>
    </div>
  </div>
    
        <?php
                }
        ?>
    </table>
    <script>
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
    </script>
</html>