<?php
session_start();
if(isset($_SESSION['user'])){
    echo "<script>document.location.href='index.php';</script>";
}
include "connect.php";
if(!empty($_POST['login'])){
function anti_injection($data){
$filter = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));

return $filter;

}
$emails=$_POST['email'];
$email=anti_injection($emails);
$passwords=$_POST['password'];
$password=md5($passwords);
$queriku= mysqli_query($connect,"SELECT email, password FROM customer WHERE email='$email' AND password='$password'");
$kuerimu= mysqli_query($connect,"select * from customer where email='$email'");
$ambil= mysqli_fetch_assoc($kuerimu);
if (mysqli_fetch_array($queriku) > 0){
	echo "<script language='javascript'>alert('Login Berhasil!')</script>";
    if(!isset($_SESSION)){
	session_start(); }//menyimpan data login di browser supaya tetep login
	$_SESSION['user'] = $email;
    $_SESSION['idcust']= $ambil['ID_customer'];// simpen email di index user sebagai data user
    if(isset($_SESSION['cart_items']))
	echo "<script>document.location.href='keranjang.php';</script>";
    else echo "<script>document.location.href='index.php'</script>";
    
}
else echo "<script language='javascript'>alert('Login Gagal Periksa Email dan Kata Sandi Anda!')</script>";
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

<body>
    <?php 
    require 'header.php'

    ?>
<div class="container">
    <h4>Masuk ke Akun AdaFlorist</h4>
    <p>Belum punya Akun? <br> <a href="signup.php">Daftar</a></p>
     <form action=""  method="post" class="col s12">
    <div class="row">
        <div class="input-field col s6">
            <input id="email" type="email" name="email"class="validate">
            <label for="email" data-error="Format Email tidak sesuai">Email</label>
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