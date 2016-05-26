<?php
include "connect.php";
if(!empty($_POST['login'])){
$Nama=$_POST['Nama'];
$passwords=$_POST['password'];
$password=md5($passwords);

$queriku= mysqli_query($connect,"SELECT Nama, password FROM admin WHERE Nama='$Nama' AND password='$password'");
if (mysqli_fetch_array($queriku) > 0 && !isset($_SESSION['user'])){
	echo "<script language='javascript'>alert('Login sebagai Admin Berhasil!')</script>";
	session_start(); //menyimpan data login di browser supaya tetep login
	$_SESSION['admin'] = $Nama; // simpen Nama di index user sebagai data user
	echo "<script>document.location.href='adminhome.php';</script>";
}
else echo "<script language='javascript'>alert('Login Gagal. Anda bukan Admin atau masih login sebagai user')</script>";
}
?>


<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

    <?php 
    include 'header.php';

    ?>
<div class="container">
    <h4>Masuk sebagai Admin</h4>
    <p>Masuk sebagai user <br> <a href="signin.php">Klik di sini</a></p>
     <form action=""  method="post" class="col s12">
    <div class="row">
        <div class="input-field col s6">
            <input id="Nama" type="text" name="Nama">
            <label for="Nama">Nama</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="password" type="password" name="password"class="validate">
            <label for="password">Password</label>
        </div>
    </div>
      <button class="btn waves-effect waves-light" type="submit" name="login" value="1">Login
    <i class="material-icons right">send</i>
  </button>
  </form>
    </div>
    
</body>

<?php

require 'footer.php'

?>

</html>