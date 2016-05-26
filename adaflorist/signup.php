<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
        session_start();
        include "connect.php";
        if(isset($_POST['daftar'])){ // kondisi di klik
        $nama= $_POST['nama']; //nampung sementara, $_POST itu sesuai yg dipake di form, yg dalam kurung sesuai name
        $email= $_POST['email'];
        $passwords= $_POST['password'];
        $password=md5($passwords);
        $no_hp= $_POST['no_hp'];
        $alamat= $_POST['alamat'];
        
      $queriku= mysqli_query($connect,"INSERT INTO customer(nama, alamat,notelfon,email,password)
 VALUES('$nama','$alamat','$no_hp','$email','$password') ");
   if($queriku){
        echo "<script language='javascript'>alert('Mendaftar Berhasil!')</script>";
        echo "<script>document.location.href='signin.php'</script>";
        
   }
   else echo "<script language='javascript'>alert('Mendaftar Gagal!')</script>";


               
            
        }
        


  

        ?>

</head>

<body>

    <?php 
    require 'header.php'

    ?>

        <div class="container">
            <h5 class="row col s6">Pendaftaran</h5>
            <p class="row">Sudah Punya Akun?
                <br>
                <a href="signin.php">Sign In</a>
                <div class="row col s6">
                    <form action="" method="post" class="col s12">
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="nama" type="text" name="nama" class="validate" required>
                                <label for="nama">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="email" type="email" name="email" class="validate" required>
                                <label for="email" data-error="Format Email tidak sesuai"> Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="alamat" type="text" name="alamat" class="validate" required>
                                <label for="alamat">Alamat</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="password" type="password" name="password" class="validate" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="no_hp" type="text" name="no_hp" class="validate" required>
                                <label for="no_hp">Nomor Telepon</label>
                            </div>
                        </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="daftar" value="1">Daftar
                    <i class="material-icons right">assignment_ind</i>
                </button>
                </form>

        </div>
</body>
<?php

require 'footer.php'

?>

</html>