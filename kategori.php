

<h4>Kategori Tanaman</h4>
            <ul>
                <?php include 'connect.php';
$kategoris=mysqli_query($connect,"select distinct(Jenis_Tanaman) from tanaman");
while($kategori=mysqli_fetch_array($kategoris)){
?>
                <li>
                    <div class="collapsible-header active"><a href="darikategori.php?kategori=<?php echo $kategori['Jenis_Tanaman']?>"><?php echo $kategori['Jenis_Tanaman']?></a></div>
                </li> <?php } ?>
                    <li>
                    <div class="collapsible-header active"><a class='waves effect waves-light btn cyan' href='semua.php'>Lihat Semua Tanaman</a> </div>
                </li>
            </ul>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>