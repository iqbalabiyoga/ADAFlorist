<?php
$id=$_GET['del'];
include'connect.php';
$query=mysqli_query($connect,"SELECT * FROM tanaman WHERE ID_Tanaman='$id'");
$data=mysqli_fetch_array($query);
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
    <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
<?php
session_start();
if(empty($_SESSION['admin'])) echo "<script>document.location.href='forbid.php'</script>";
include 'headadmin.php';
?>
 

        <div class="container">
            <br>
            <br>
            <h5 class="row col s6">Perbarui Identitas Tanaman</h5>
                    <form action="editphp.php?del=<?php echo $id ; ?>" method="post" class="col s12" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="nama" type="text" name="nama" class="validate" value="<?php echo $data['Nama_Tanaman']; ?>" required>
                                <label for="nama">Nama Tanaman</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="harga" type="number" name="harga" class="validate" value="<?php echo $data['Harga_Tanaman']; ?>" required>
                                <label for="harga">Harga Tanaman</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="stok" type="number" name="stok" class="validate" value="<?php echo $data['Jumlah_Stok']; ?>"required>
                                <label for="stok">Jumlah Stok</label>
                            </div>
                          </div>
                        <div class="row">
                        <h5>Jenis Tanaman</h5>
                        <p>
                            
                            <input name="jenis" type="radio" id="Aromatherapy"value="Aromatherapy" <?= $data['Jenis_Tanaman'] == 'Aromatherapy' ? 'checked' : '' ?>/>
                            <label for="Aromatherapy">Aromatherapy</label>
                        </p>
                        <p>
                            <input name="jenis" type="radio" id="Tanaman Indoor" value="Tanaman Indoor"<?= $data['Jenis_Tanaman'] == 'Tanaman Indoor' ? 'checked' : '' ?> />
                            <label for="Tanaman Indoor">Tanaman Indoor</label>
                        </p>
                        <p>
                            <input name="jenis" type="radio" id="Tanaman Air" value="Tanaman Air" <?= $data['Jenis_Tanaman'] == 'Tanaman Air' ? 'checked' : '' ?> />
                            <label for="Tanaman Air">Tanaman Air</label>
                        </p>
                        <p>
                            <input name="jenis" type="radio" id="Tanaman Gantung" value="Tanaman Gantung"<?= $data['Jenis_Tanaman'] == 'Tanaman Gantung' ? 'checked' : '' ?> />
                            <label for="Tanaman Gantung">Tanaman Gantung</label>
                        </p>
                          <p>
                            <input name="jenis" type="radio" id="Kaktus dan Sukulen" value="Kaktus dan Sukulen" <?= $data['Jenis_Tanaman'] == 'Kaktus dan Sukulen' ? 'checked' : '' ?> />
                            <label for="Kaktus dan Sukulen">Kaktus dan Sukulen</label>
                        </p>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="berat" type="text" name="berat" class="validate" value="<?php echo $data['Berat']; ?>">
                                <label for="berat">Berat(Kg)</label>
                            </div>
                          </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="Iklim" type="text" name="iklim" class="validate" value="<?php echo $data['Iklim']; ?>">
                                <label for="Iklim">Iklim</label>
                            </div>
                          </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="ukurantanaman" type="text" name="ukurantanaman" class="validate" value="<?php echo $data['Ukuran_Tanaman']; ?>" >
                                <label for="ukurantanaman">Ukuran Tanaman(cm)</label>
                            </div>
                        </div>
                         <div class="row">
                            <div class="input-field col s8">
                                <input id="media" type="text" name="media" class="validate" value="<?php echo $data['Media_Tanam']; ?>">
                                <label for="media">Media Tanam</label>
                            </div>
                          </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="ukuranpot" type="text" name="ukuranpot" class="validate" value="<?php echo $data['Ukuranpot']; ?>" >
                                <label for="ukuranpot">Ukuran Pot</label>
                            </div>
                          </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="penyiraman" type="text" name="penyiraman" class="validate" value="<?php echo $data['Penyiraman']; ?>" >
                                <label for="penyiraman">Penyiraman</label>
                            </div>
                          </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="sinar" type="text" name="sinar" class="validate" value="<?php echo $data['Kebutuhan_Sinar']; ?>" >
                                <label for="sinar">Kebutuhan Sinar Matahari</label>
                            </div>
                          </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="pemupukan" type="text" name="pemupukan" class="validate" value="<?php echo $data['Pemupukan']; ?>" >
                                <label for="Pemupukan">Pemupukan</label>
                            </div>
                          </div>
                         <div class="row">
                            <div class="input-field col s8">
                                <input id="asal" type="text" name="asal" class="validate" value="<?php echo $data['Asal_Bibit']; ?>">
                                <label for="asal">Asal Bibit</label>
                            </div>
                          </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="kondisi" type="text" name="kondisi" class="validate" value="<?php echo $data['Kondisi_Tanaman']; ?>">
                                <label for="kondisi">Kondisi Tanaman</label>
                            </div>
                          </div>
                        
                          <div class="row">
                            <div class="input-field col s12">
                             <textarea id="deskripsi" name="deskripsi" class="materialize-textarea"><?php echo $data['Deskripsi_Tanaman']; ?></textarea>
                             <label for="deskripsi">Deskripsi Tanaman</label>
                            </div>
                           </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <i class="material-icons prefix"></i>
                                  <div class="file-field input-field">
                                    <div class="btn">
                                      <span>File</span>
                                       <input type="file" name="photouser" >
                                    </div>
                                    <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" <?php echo $data['Gambar']; ?> placeholder="masukkan gambar tanaman">
                          </div>
                     </div>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="daftar" value="1">Perbaharui
                    <i class="material-icons right">library_add</i>
                </button>
                        </div>
                        
                </form>
            
            
        </div>
    </body>

</html>