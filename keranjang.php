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
    include 'header.php'?>
    <br>

    <?php if(isset($_SESSION['cart_items'])){?>
        <div class="row container">
            <div class="col s6" id="keranjang">
                <h5 align="center">Keranjang Belanja Anda</h5></div>
            <div class="col s6">
                <a class="btn waves-effect waves-light left red" href="kosong_keranjang.php">Kosongkan Keranjang
    <i class="material-icons right">delete</i>
  </a>
            </div>
        </div>
        <table class="container">
            <thead>
                <th>
                </th>
                <th>
                    Nama Tanaman
                </th>
                <th>
                    Harga
                </th>
                <th>
                    Jumlah Pembelian
                </th>
                <th>
                    Subtotal
                </th>
            </thead>
            <?php $total=0;
         $jumlah=0;?>
                <?php foreach($_SESSION['cart_items'] as $id=>$value){?>

                    <?php include 'connect.php';
        $query = mysqli_query($connect, "SELECT * FROM tanaman WHERE ID_Tanaman = '$id' ");
		$tanaman = mysqli_fetch_array($query);?>
                        <tr>
                            <td>
                                <img class="materialboxed" data-caption="<?php echo $tanaman['Nama_Tanaman']?> - Rp <?php
            $tots= $tanaman['Harga_Tanaman'];
            echo 
            number_format("$tots",0,", ",". ")?>/pcs" width="100" src="image/<?php echo $tanaman['Gambar']?>">
                            </td>
                            <td>
                                <a href="tanaman.php?idtanaman=<?php echo $tanaman['ID_Tanaman']?>">
                                    <?php echo  $tanaman['Nama_Tanaman']?>
                                </a>
                            </td>
                            <td>
                                Rp
                                <?php
                $tots= $tanaman['Harga_Tanaman'];
            echo 
            number_format("$tots",0,",",".")?>
                            </td>
                            <td align=center>
                                <?php echo $value?> buah
                            </td>
                            <td>
                                Rp
                                <?php $subtotal=$tanaman['Harga_Tanaman']*$value;
                                echo number_format("$subtotal","0",",",".")?>
                            </td>
                            <?php $total=$total+$subtotal;
            $jumlah=$jumlah+$value?>
                             <td><a href='buangdarikeranjang.php?id=<?php echo $id?>'><i class="material-icons">delete</i></a></td>
                        </tr>
                        <?php } ?>
                            <tr class="black-text cyan lighten-5">
                                <td><strong>Total Belanja</strong></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php echo "<strong>$jumlah</strong>"?> buah </td>
                                <td>
                                    Rp <strong><?php echo
            number_format("$total",0,",",".")
             ?> </strong>
                                </td>
                            </tr>
                            <div class="container">
                                <a class="waves-effect waves-light right teal btn modal-trigger" href="#modal1">Lanjut ke Pembayaran
    <i class="material-icons right">input</i>
  </a>
                            </div>
                            <?php } else {
    echo "<center>Keranjang Belanja Anda Kosong</center><br><br><br><br><br><br><br><br><br><br><br>";
} ?>
        </table>
        <br>

        <br>

        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Konfirmasi</h4>
                <p>Anda akan membeli <strong> <?php echo $jumlah?> buah </strong> tanaman dengan <strong>total harga Rp <?php echo $total?> </strong>. Apakah Anda sudah selesai belanja dan ingin lanjut ke pembayaran?</p>
            </div>
            <div class="modal-footer">
                <a href="lanjut.php" class=" modal-action modal-close waves-effect waves-green btn-flat">Konfirmasi dan Bayar</a>
                <a href="#keranjang" class=" modal-action modal-close waves-effect waves-green btn-flat">Lihat Kembali Keranjang</a>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
            });
        </script>
        <?php require 'footer.php';?>

</html>