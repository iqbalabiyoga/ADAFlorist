<?php 
session_start();
if (isset($_SESSION['user'])){
    $idcust=$_SESSION['idcust'];
    include 'connect.php';
    $total=0;
    $jumlah=0;
    if(isset($_SESSION['cart_items'])){
    mysqli_query($connect,"insert into transaksi(id_customer,Total_Biaya) values('$idcust','0')");
    $transaksi_id = mysqli_insert_id($connect);
    foreach($_SESSION['cart_items'] as $id=>$value){
        $rujuk = mysqli_query($connect, "Select * from tanaman where ID_Tanaman = $id");
	$tanaman = mysqli_fetch_array($rujuk);
        $stok=$tanaman['Jumlah_Stok'];
        $sisa=$stok-$value;
        if($sisa>=0){
        $idtanaman = $tanaman['ID_Tanaman'];
        mysqli_query($connect, "INSERT INTO detail_transaksi(transaksi_id,tanaman_id,jumlah_beli)
        VALUES('$transaksi_id','$idtanaman','$value')");
        $total=$total+($tanaman['Harga_Tanaman']*$value);
        $jumlah=$jumlah+$value;
        $jumbel=$tanaman['jumlah_beli'];
        $jumbelupdate=$jumbel+$value;
        mysqli_query($connect, "update tanaman Set Jumlah_Stok='$sisa', jumlah_beli='$jumbelupdate' where ID_Tanaman='$id'");
    }
    } 
	echo "<script language='javascript'>alert('Pembelian sukses dilakukan!');</script>";
	echo "<script>document.location.href='konfirmasi.php?idtransaksi=$transaksi_id';</script>";
    mysqli_query($connect,"update transaksi set Total_Biaya='$total' where ID_Transaksi='$transaksi_id'");}
    mysqli_query($connect,"update customer set beli=beli+1 where ID_customer='$idcust'");
}

else { echo "
    <script language='javascript'>
        alert('Silakan Login sebagai user terlebih dahulu!')
    </script>"; echo "
    <script>
        document.location.href = 'signin.php';
    </script>"; } ?>