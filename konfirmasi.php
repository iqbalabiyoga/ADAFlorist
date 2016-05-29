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
    if(isset($_SESSION['cart_items']))
		unset($_SESSION['cart_items']);
    if(isset($_SESSION['admin'])){
    include 'headadmin.php';} else{
    include 'header.php';}
    include 'connect.php';
    $no=0;
    $id=$_GET['idtransaksi'];
    $nomor=$id;
    $transs=mysqli_query($connect,"select * from transaksi where ID_Transaksi='$id'");
    $trans = mysqli_fetch_assoc($transs);
    $idpelanggan=$trans['id_customer']; if(isset($_SESSION['user'])&&$idpelanggan!=$_SESSION['idcust']) echo "<script>document.location.href='forbid.php'</script>";
    $pelanggans=mysqli_query($connect,"select * from customer where ID_customer='$idpelanggan'");
    $pelanggan=mysqli_fetch_array($pelanggans);
    $detils=mysqli_query($connect,"Select sum(jumlah_beli) as jumlahs from detail_transaksi where transaksi_id='$id'");
    $detil=mysqli_fetch_assoc($detils);
    ?>
    <br>
    
        <div class="container">
             <h3 align="center">Terima Kasih, <?php echo $pelanggan['nama'];?></h3>
                        <p align="center">Transaksi ini dicatat dengan nomor <strong>#<?php echo $trans['ID_Transaksi']?></strong> pada <strong>
                            <?php echo $trans['Tanggal_transaksi']?></strong>.
                            <br>Barang berupa <strong>
                            <?php echo $detil['jumlahs']?> </strong> buah tanaman akan dikirim setelah uang pembayaran dikonfirmasi</p>
                        <p align="center"> Lakukan pembayaran sebesar:
                            <p>
                                <h4 align="center">Rp <?php echo $trans['Total_Biaya']?></h4>
            <br>
            <div class="row">
                <div class="col s3">
                    Nomor Transaksi 
                </div>
                <div class="col s6">
                    :  <?php echo $trans['ID_Transaksi']?>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    Waktu Transaksi 
                </div>
                <div class="col s6">
                    :  <?php echo $trans['Tanggal_transaksi']?>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    Nama Pelanggan 
                </div>
                <div class="col s6">
                    :  <?php echo $pelanggan['nama']?>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    Alamat Pengiriman 
                </div>
                <div class="col s6">
                    :  <?php echo $pelanggan['alamat']?>
                </div>
            </div>
            <center>------------------------------------------------------------------------------------------<strong><h5>Rincian Belanja</h5></strong>------------------------------------------------------------------------------------------</center>
            <table>
                <thead>
                    <th>No.</th>
                    <th></th>
                    <th>Nama Tanaman</th>
                    <th>Harga</th>
                    <th>Jumlah Pembelian</th>
                    <th>Subtotal</th>

                </thead>
                <?php 
            $jumlah=0;
            $total=0;
            $detail=mysqli_query($connect,"Select * from detail_transaksi where transaksi_id='$nomor'");
            while($ulang=mysqli_fetch_assoc($detail)){
            $no++;
            $idtanaman=$ulang['tanaman_id'];
            $query = mysqli_query($connect,"SELECT * FROM tanaman WHERE ID_Tanaman ='$idtanaman'");
            $tanaman = mysqli_fetch_array($query);?>
                    <tr>
                        <td>
                            <?php echo $no?>
                        </td>
                        <td>
                            <img class="materialboxed" data-caption="<?php echo $tanaman['Nama_Tanaman']?> - Rp <?php echo $tanaman['Harga_Tanaman']?>/pcs" width="100" src="image/<?php echo $tanaman['Gambar']?>">
                        </td>
                        <td>
                            <a href="tanaman.php?idtanaman=<?php echo $idtanaman ?>"><?php echo $tanaman['Nama_Tanaman']?></a>
                        </td>
                        <td>
                            <?php echo $tanaman['Harga_Tanaman']?>
                        </td>
                        <td>
                            <?php echo $ulang['jumlah_beli']?>
                        </td>
                        <td>
                            <?php echo ($tanaman['Harga_Tanaman']*$ulang['jumlah_beli'])?>
                        </td>
                    </tr>
                    <?php $total=$total+($tanaman['Harga_Tanaman']*$ulang['jumlah_beli']);
                    $jumlah=$jumlah+$ulang['jumlah_beli'];?>
                        <?php } ?>
                            <tr class="black-text cyan lighten-5">
                                <td><strong>Total Belanja</strong></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php echo "<strong>$jumlah</strong>"?> buah </td>
                                <td>
                                    Rp
                                    <?php echo "<strong>$total</strong>"?>
                                </td>
                            </tr>

            </table>
        </div>
        <script>
            $(document).ready(function () {
                $('.materialboxed').materialbox();
            });
        </script>
</body>
<?php include 'footer.php'?>
</html>