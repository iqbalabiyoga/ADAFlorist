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


	$foto_size = $_FILES["photouser"]["size"];
	$foto_loc = $_FILES["photouser"]["tmp_name"];
	$foto_name = $_FILES["photouser"]["name"];

	$format=pathinfo($foto_name,PATHINFO_EXTENSION);

	if($foto_size < 1000000 && $format==="jpg"){
		move_uploaded_file($foto_loc,"image/".$foto_name);
		$sql_tambah = "INSERT INTO `tanaman`(Nama_Tanaman,Harga_Tanaman,Deskripsi_Tanaman,Jumlah_Stok,Jenis_Tanaman,Gambar,Berat,Iklim,Ukuran_Tanaman,Media_Tanam,Ukuranpot,Penyiraman,Kebutuhan_Sinar,Pemupukan,Asal_Bibit,Kondisi_Tanaman) VALUES ('$nama','$harga','$deskripsi','$stok','$jenis','$foto_name','$berat','$iklim','$ukurantanaman','$media','$ukuranpot','$penyiraman','$sinar','$pemupukan','$asal','$kondisi')";

		mysqli_query($connect,$sql_tambah);
	?>
		<script language="javascript">alert("Register Successful");</script>
					<script>document.location.href='dateup.php';</script>
	<?php
	}else {
		?>
		<script language="javascript">alert("Register Failed");</script>
	<?php
	}
mysqli_close($connect);
?>