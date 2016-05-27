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
    include 'connect.php';
    session_start();
     if(empty($_SESSION['admin'])) echo "<script>document.location.href='forbid.php'</script>";
    include 'headadmin.php';
    $no=0;?>
        <div class="container">
            <center><h5>Daftar Transaksi</h5></center>
            <table class="striped">
                <thead>
                    <th>Nomor Transaksi</th>
                    <th>Waktu Transaksi</th>
                    <th>Jumlah Pembelian</th>
                    <th>Nama Pelanggan</th>
                    <th>Konfirmasi Pembayaran</th>
                    <th>Waktu Konfirmasi</th>
                </thead>
                <?php $transs=mysqli_query($connect,"select * from transaksi");
    while ($trans=mysqli_fetch_assoc($transs)){
    $idpel=$trans['id_customer'];
    $pelanggans=mysqli_query($connect,"select * from customer where ID_customer='$idpel'");
    $pelanggan=mysqli_fetch_array($pelanggans);
    ?>
                <tr>
                    <td width=10%>
                        <?php echo "<a href='detail_trans.php?idtransaksi=".$trans['ID_Transaksi']."'>".$trans['ID_Transaksi']."</a>"?>
                    </td>
                    <td>
                        <?php echo $trans['Tanggal_transaksi']?>
                    </td>
                    <td width=10%>
                        
                        Rp <?php echo $trans['Total_Biaya']?>
                    </td>
                    <td>
                        <?php echo $pelanggan['nama'];?>
                    </td>
                    <td>
                        <?php if ($trans['Konfirmasi']==0) echo 
                        "<a class='waves-effect waves light btn' href='bayar.php?idtransaksi=".$trans[ 'ID_Transaksi']."'>Konfirmasi</a>";
                        else echo "<a class='waves-effect waves light btn cyan'>Sudah Dikonfirmasi</a>";?>
                    </td>

                    <td>
                        <?php if ($trans['Konfirmasi']>0) {echo $trans['waktu_konfirmasi'];} else echo "";?>
                    </td>
                    <?php } ?>
                </tr>
            </table>
        </div>
</body>
</html>