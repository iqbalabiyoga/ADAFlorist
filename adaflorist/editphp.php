<?php
	include "connect.php";
	$deskripsi=$_POST['deskripsi'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$jenis = $_POST['jenis'];
	$berat= $_POST['berat'];
	$iklim=$_POST['iklim'];
	$ukurantanaman=$_POST['ukurantanaman'];
	$media=$_POST['media'];
	$ukuranpot=$_POST['ukuranpot'];
	$penyiraman=$_POST['penyiraman'];
	$sinar=$_POST['sinar'];
	$pemupukan=$_POST['pemupukan'];
	$asal=$_POST['asal'];
	$kondisi=$_POST['kondisi'];
	$id = $_GET['del'];
	$error=$_FILES["photouser"]["error"];
if($error==0){
	$foto_size = $_FILES["photouser"]["size"];
	//$folder = "image";
	$foto_loc = $_FILES["photouser"]["tmp_name"];
	$foto_name =$_FILES["photouser"]["name"];
	$format=pathinfo($foto_name,PATHINFO_EXTENSION);


	if($foto_size < 1000000 && $format==="jpg"){

		move_uploaded_file($foto_loc, "image/".$foto_name);

$sql_tambah ="UPDATE tanaman SET Nama_Tanaman='$nama',Harga_Tanaman='$harga',Deskripsi_Tanaman='$deskripsi',Jumlah_Stok='$stok',Jenis_Tanaman='$jenis',Gambar='$foto_name',Berat='$berat',Iklim='$iklim',Ukuran_Tanaman='$ukurantanaman',Media_Tanam='$media',Ukuranpot='$ukuranpot',Penyiraman='$penyiraman',Kebutuhan_Sinar='$sinar',Pemupukan='$pemupukan',Asal_Bibit='$asal',Kondisi_Tanaman='$kondisi' WHERE ID_tanaman =$id";



		mysqli_query($connect,$sql_tambah);
	?>
		<script language="javascript">alert("Pembaruan Berhasil dilakukan");</script>
		<script>document.location.href='dateup.php';</script>
	<?php
	}else {
		?>
		<script language="javascript">alert("Pembaruan Gagal");</script>
		<script>document.location.href='ubah.php?del=<?php echo $id ; ?>';</script>
	<?php
	}
}
else{
	$sql_tambah ="UPDATE tanaman SET Nama_Tanaman='$nama',Harga_Tanaman='$harga',Deskripsi_Tanaman='$deskripsi',Jumlah_Stok='$stok',Jenis_Tanaman='$jenis',Berat='$berat',Iklim='$iklim',Ukuran_Tanaman='$ukurantanaman',Media_Tanam='$media',Ukuranpot='$ukuranpot',Penyiraman='$penyiraman',Kebutuhan_Sinar='$sinar',Pemupukan='$pemupukan',Asal_Bibit='$asal',Kondisi_Tanaman='$kondisi' WHERE ID_tanaman =$id";
	$david=mysqli_query($connect,$sql_tambah);
		if($david)
		{?>
			<script language="javascript">alert("Pembaruan Berhasil dilakukan");</script>
			<script>document.location.href='dateup.php';</script>
		<?php
		}else {
		?>
		<script language="javascript">alert("Pembaruan Gagal");</script>
		<script>document.location.href='ubah.php?del=<?php echo $id ; ?>';</script>
	<?php
	}
}
mysqli_close($connect);
?>