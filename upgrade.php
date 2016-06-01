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
        include 'headadmin.php' ?>

        <div class="container">
            <br>
            <br>
            <h5 class="row col s6">Masukan identitas tanaman baru</h5>
            <form action="up.php" method="post" class="col s12" enctype="multipart/form-data">
                <div class="row">
                    <div class="input-field col s8">
                        <input id="nama" type="text" name="nama" class="validate" required>
                        <label for="nama">Nama Tanaman</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <input id="harga" type="number" name="harga" class="validate" required>
                        <label for="harga">Harga Tanaman</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <input id="stok" type="number" name="stok" class="validate" required>
                        <label for="stok">Jumlah Stok</label>
                    </div>
                </div>
                <div class="row">
                    <h5>Jenis Tanaman</h5>
                    <p>
                        <input name="jenis" type="radio" id="aromatherapy" value="Aromatherapy" />
                        <label for="aromatherapy">Aromatherapy</label>
                    </p>
                    <p>
                        <input name="jenis" type="radio" id="indoor" value="Tanaman Indoor" />
                        <label for="indoor">Indoor</label>
                    </p>
                    <p>
                        <input name="jenis" type="radio" id="air" value="Tanaman Air" />
                        <label for="air">Air</label>
                    </p>
                    <p>
                        <input name="jenis" type="radio" id="gantung" value="Tanaman Gantung" />
                        <label for="gantung">Gantung</label>
                    </p>
                    <p>
                        <input name="jenis" type="radio" id="kaktus" value="Kaktus dan Sukulen" />
                        <label for="kaktus">Kaktus dan Sukulen</label>
                    </p>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="berat" type="text" name="berat" class="validate">
                            <label for="berat">Berat(Kg)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="iklim" type="text" name="iklim" class="validate">
                            <label for="iklim">Iklim</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="ukurantanaman" type="text" name="ukurantanaman" class="validate">
                            <label for="ukurantanaman">Ukuran Tanaman(cm)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="media" type="text" name="media" class="validate">
                            <label for="media">Media Tanam</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="ukuranpot" type="text" name="ukuranpot" class="validate">
                            <label for="ukuranpot">Ukuran Pot</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="penyiraman" type="text" name="penyiraman" class="validate">
                            <label for="penyiraman">Penyiraman</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="sinar" type="text" name="sinar" class="validate">
                            <label for="sinar">Kebutuhan Sinar Matahari</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="pemupukan" type="text" name="pemupukan" class="validate">
                            <label for="pemupukan">Pemupukan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="asal" type="text" name="asal" class="validate">
                            <label for="asal">Asal Bibit</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="kondisi" type="text" name="kondisi" class="validate">
                            <label for="kondisi">Kondisi Tanaman</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="deskripsi" name="deskripsi" class="materialize-textarea" required></textarea>
                        <label for="deskripsi">Deskripsi Tanaman</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <i class="material-icons prefix"></i>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Gambar</span>
                                <input type="file" name="photouser">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="masukkan gambar tanaman">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" align="center" type="submit" name="tambah" value="1">Tambah ke Katalog
                    <i class="material-icons right">library_add</i>
                </button>
            </form>
        </div>
</body>

</html>