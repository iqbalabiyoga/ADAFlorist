<?php
	session_start();
	if(isset($_SESSION['user'])||(isset($_SESSION['admin']))){
		session_destroy();
		echo "<script>document.location.href='index.php';</script>";
	}
?>