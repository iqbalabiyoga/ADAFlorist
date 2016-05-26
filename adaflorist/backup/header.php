<!--Import jQuery before materialize.js-->
<?php
$data=0;
?>
<?php
if(isset($_SESSION['cart_items']))
$data+=(count($_SESSIONl['cart_items']))?>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.collapsible').collapsible({
                    accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
                });
            });
        </script>
        <?phpa
    include 'connect.php';
    if(isset($_SESSION['user'])){
    $id_customer = $_SESSION['idcust'];
    $pembelis=mysqli_query($connect,"Select * from customer where ID_customer='$id_customer'");
    $pembeli=mysqli_fetch_array($pembelis);
    $iduser=$pembeli['ID_customer'];}?>

            <div class="navbar-fixed">
                <nav class="teal light-1">
                    <div class="navbar-wrapper container">
                        <a href="index.php" class="brand-logo left">ADAFlorist</a>
                        <ul class="right">
                            <li> <a href="tentang.php">Tentang</a></li>
                            <li> </li>
                            <?php if(isset($_SESSION['user'])) echo "<strong><li>Halo, ".$pembeli['nama']."</li></strong>"?>

                                <?php if(isset($_SESSION['user']))
                    echo "<li> <a href='transaksi_user.php?idcustomer=".$iduser."'>Daftar Transaksi</a></li>";?>
                                    <li> </li>
                                    <?php if(isset($_SESSION['user'])||isset($_SESSION['admin']))
                echo "<li> <a class='waves effect waves-light btn cyan' href='logout.php'>Sign Out</a></li>
               ";
                else echo "<li> <a class='waves effect waves-light btn cyan' href='signin.php'>Sign In</a></li>";
            ?>
                                        <?php
                if(isset($_SESSION['admin']))
                    echo "<li> <a href='adminhome.php'>Admin</a></li>";
                ?>

                                            <li><a href='keranjang.php'><i class='material-icons'>shopping_cart</i></a></li>
                                            <li>
                                                <?php if($data>0) echo $data; else echo 0;?>
                                            </li>
                        </ul>
                    </div>
                </nav>

            </div>

            <body>