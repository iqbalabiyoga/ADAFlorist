<?php
	session_start();
	if(isset($_SESSION['cart_items']))
		unset($_SESSION['cart_items']);
		echo "<script>document.location.href='keranjang.php';</script>";
?>