-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Mei 2016 pada 09.27
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adaflorist`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `Nama`, `password`) VALUES
(1, 'iqbal', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `ID_customer` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `notelfon` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `beli` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`ID_customer`, `nama`, `alamat`, `notelfon`, `email`, `password`, `beli`) VALUES
(42, 'Iqbal Abiyoga', 'Gang Sabar RT 01 RW 10 Babakan Lio Kelurahan Balumbang Jaya Kecamatan Bogor Barat Kota Bogor, JAWA B', '08996451049', 'abiyoga.iqbal@gmail.com', '06ae294f8cf20baa09d6dd26a71caf4f', 7),
(43, 'Aman Sukarman', 'Jalan Gotong Royong Gadingrejo Pringsewu LAMPUNG 35372', '083169006360', 'anjos99917@gmail.com', '06ae294f8cf20baa09d6dd26a71caf4f', 1),
(44, 'Muhammad Iqbal', 'Jalan Haji Gadung VI No.81 Kelurahan Ciputat Timur Kecamatan Ciputat KOTA TANGGERANG SELATAN', '081281883686', 'iqbal99.abiyoga@yahoo.co.', '06ae294f8cf20baa09d6dd26a71caf4f', 0),
(45, 'Ridwan Aditya', 'Jalan Gotong Royong Gadingrejo Pringsewu LAMPUNG 35372', '085644534343', 'iwan@gmail.com', 'bc15a9c5515b04560239e443967a3797', 1),
(46, 'David', 'bogor', '085710408114', 'david@gmail.com', '96910e4a55eac09f60bf51547d1b158a', 1),
(47, 'Wahida Ainun Mumtaza', 'bogor', '08999652669', 'adadaja@gmail.com', '0a0e29d2aecddd6cadf5b4a18557b6ef', 1),
(48, 'Via Sulviana', 'Bogor', '087126482736', 'viasulviana@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 1),
(49, 'winda', 'bateng', '089089388', 'winda@gmail.com', 'ba57a805ffbfd7441cf3fccf4b022725', 1),
(50, 'Fadhila Hijryani', 'Perwira', '087772888104', 'fadhilahijryani@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 1),
(51, 'Aldi Solihin', 'Bogor', '089976545453', 'aldi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(53, 'Nizar Maulana A', 'bogor', '034345325311', 'nizar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `transaksi_id` int(20) NOT NULL,
  `tanaman_id` int(20) NOT NULL,
  `jumlah_beli` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`transaksi_id`, `tanaman_id`, `jumlah_beli`) VALUES
(148, 15, 5),
(148, 16, 2),
(149, 1, 10),
(150, 6, 5),
(150, 11, 5),
(151, 16, 8),
(151, 14, 5),
(152, 11, 10),
(153, 8, 5),
(153, 3, 2),
(158, 5, 2),
(159, 11, 5),
(160, 11, 5),
(161, 11, 5),
(162, 11, 5),
(163, 11, 5),
(164, 11, 5),
(165, 10, 5),
(165, 12, 5),
(166, 14, 5),
(166, 12, 5),
(167, 15, 5),
(168, 1, 1),
(169, 12, 1),
(170, 8, 1),
(171, 5, 1),
(172, 2, 1),
(172, 3, 3),
(173, 12, 5),
(173, 7, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanaman`
--

CREATE TABLE `tanaman` (
  `ID_Tanaman` int(11) NOT NULL,
  `Nama_Tanaman` varchar(25) NOT NULL,
  `Harga_Tanaman` bigint(20) NOT NULL,
  `Deskripsi_Tanaman` varchar(500) NOT NULL,
  `Jumlah_Stok` int(11) NOT NULL,
  `Jenis_Tanaman` varchar(50) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Berat` float DEFAULT NULL,
  `Iklim` varchar(50) DEFAULT NULL,
  `Ukuran_Tanaman` varchar(50) DEFAULT NULL,
  `Media_Tanam` varchar(50) DEFAULT NULL,
  `Ukuranpot` varchar(50) DEFAULT NULL,
  `Penyiraman` varchar(50) DEFAULT NULL,
  `Kebutuhan_Sinar` varchar(50) DEFAULT NULL,
  `Pemupukan` varchar(100) DEFAULT NULL,
  `Asal_Bibit` varchar(100) DEFAULT NULL,
  `Kondisi_Tanaman` varchar(60) DEFAULT NULL,
  `jumlah_beli` int(20) NOT NULL DEFAULT '0',
  `jumlah_lihat` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanaman`
--

INSERT INTO `tanaman` (`ID_Tanaman`, `Nama_Tanaman`, `Harga_Tanaman`, `Deskripsi_Tanaman`, `Jumlah_Stok`, `Jenis_Tanaman`, `Gambar`, `Berat`, `Iklim`, `Ukuran_Tanaman`, `Media_Tanam`, `Ukuranpot`, `Penyiraman`, `Kebutuhan_Sinar`, `Pemupukan`, `Asal_Bibit`, `Kondisi_Tanaman`, `jumlah_beli`, `jumlah_lihat`) VALUES
(1, 'Dendrobium aphyllum', 48000, 'Bunga Dendrobium aphyllum ini warnanya kombinasi ungu dan putih. Tanaman yang dapat ditemukan di dataran China hingga Australia ini sebaiknya diletakkan di tempat yang sering Anda kunjungi, karena saat mekar bunganya akan merfungsi sebagai aromatherapy.', 190, 'Aromatherapy', 'Dendrobiumaphyllum.jpg', 2, 'panas', '20-40cm', 'tanah dan humus', 'diameter 20-30cm', 'sehari 1x', 'di bawah naungan', 'dua minggu sekali dengan kompos', 'pemisahan rumpun', 'baik, tumbuh semusim', 10, 16),
(2, 'Purple angelonia', 12000, 'Angelonia ungu merupakan tanaman ini biasanya disebut dengan lavender palsu. Tanaman hias ini memiliki bunga yang bergerombol dan memiliki bau yang harum dan lembut apabila Anda menciumnya. Selain digunakan sebagai tanaman hias tanaman ini juga bisa digunakan sebagai pengharum ruangan. Jika Anda menginginkan tanaman hias dengan bentuk dan bau semerbak, Angelonia ungu jawabannya.', 150, 'Aromatherapy', 'purpleangelonia.jpg', 0.3005, 'dataran rendah sampai dataran tinggi', '20-40cm', 'tanah dan humus', 'diameter 20-30cm', 'sehari 1x', 'sepanjang hari', 'sebulan sekali dengan pupuk NPK Bunga', 'stek batang', '', 0, 2),
(3, 'Limnophila borneo', 10000, 'Tahukah Anda, apa flora yang paling digemari dari Pulau Kalimantan ini? Yup, Limnophila sp ‘Borneo’ memang merupakan tanaman air yang paling banyak diburu oleh para penggemar aquascape. Keunikan bentuknya serta corak warnanya yang indah tentu saja akan menambah nuansa eksotis pada aquarium. Belum lagi, tanaman ini juga terbilang mudah dalam perawatannya. So, buruan ambil aja tanaman eksotis ini!', 248, 'Tanaman Air', 'Limnophilaborneo.jpg', 0.3005, 'dataran rendah sampai dataran tinggi', 'kurang dari 20cm', 'pasir malang dan pupuk dasar', '10-20 cm', '', 'dibawah naungan', '', 'stek batang', 'daun darat dan per-batang', 2, 7),
(4, 'Marsilea SP', 5000, 'Tanaman semanggi berdaun empat ini konon dapat memberikan keberuntungan bagi pemiliknya. Gimana gak beruntung, kalau dilihat dari bentuk dan warnanya saja sudah menyiratkan keindahan luar biasa. Jadi, tak heran jika aquarium Anda pun akan semakin cantik dengan kehadiran tanaman ini. Selain itu, Marsilea sp juga dapat menjadi habitat ikan dan mencegah pertumbuhan lumut. Nah, tunggu apa lagi? Ambil aja semanggi keberuntungan ini!', 250, 'Tanaman Air', 'MarsileaSP.jpg', 0.3005, 'dataran rendah sampai dataran tinggi', 'kurang dari 50cm', 'pasir malang dan pupuk dasar', 'tergantung panjang tanaman', '', 'dibawah naungan', '', 'pemisahan rumpun', 'daun darat dan per-batang', 0, 6),
(5, 'Fishbone Cactus', 18000, 'Berkampung halaman di Meksiko, kaktus ini tentu memiliki ketahanan yang sangat kuat dan tidak terlalu rewel. Anda malah dilarang menyiram terlalu sering karena hal itu membuatnya tak bisa tumbuh. Selain itu, seperti namanya, batang si hijau berbunga cantik ini sungguh terlihat seperti tulang ikan.', 150, 'Kaktus dan Sukulen', 'FishboneCactus.jpg', 0.3005, 'dataran rendah sampai dataran tinggi', '20-40cm', 'tanah dan humus', 'diameter 20-30cm', 'apabila media tanam kering', 'dibawah naungan', 'sebulan sekali dengan pupuk NPK Daun', 'stek batang', 'berbunga dalam bulan tertentu', 0, 7),
(6, 'Gymmo nishiki', 8000, 'Dapat ditempatkan dalam ruangan namun tetap dilakukan penjemuran dibawah sinar matahari 2 kali seminggu. Mengandung senyawa yang mampu menyerap polutan asap rokok dalam ruangan. Penyiraman cukup 1 minggu sekali dan pemupukan NPK daun 1 bulan sekali.', 245, 'Kaktus dan Sukulen', 'Gymmonishiki.jpg', 0.3005, 'dataran rendah sampai dataran tinggi', 'kurang dari 20cm', 'tanah ,pupuk kandang dan pasir', 'diameter 5-10cm', 'apabila media tanam kering', 'dibawah naungan', 'sebulan sekali dengan pupuk NPK Daun', 'okulasi', '', 5, 7),
(7, 'Palm Succulent', 12000, 'Palm succulent adalah tumbuhan yang kuat yang sanggup bertahan dari suhu dingin-panas dan hanya membutuhkan sedikit perawatan agar bisa tumbuh sehat. Palm succulent tidak bisa menerima terlalu banyak air, yang berakibat bakal merusak pertumbuhan dan kesehatannya. Untuk menumbuhkan palm succulent dengan optimal, bisa ditambahkan pupuk dalam periode tertentu.', 200, 'Kaktus dan Sukulen', 'palmSucculent.jpg', 0.2005, 'dataran rendah sampai dataran tinggi', 'kurang dari 20cm', 'tanah dan humus', 'diameter 5-10cm', 'apabila media tanam kering', 'sepanjang hari', 'sebulan sekali dengan pupuk NPK Daun', '', 'Buah tidak bisa dimakan dan pertumbuhannya tegak.', 0, 5),
(8, 'Schlumbergera Pink', 9000, 'Schlumbergera pink merupakan tanaman yang sejenis dengan cactus, tanaman ini memiliki batang yang tebal dan mampu menghasilkan bunga disetiap batangnya. Bunga yang berwarna pink dengan bagian tengah berwana putih menjadi daya tarik tanaman ini. Tanaman hias ini tidak memerlukan air yang banyak cukup menyiramnya 1 kali dalam sehari.', 245, 'Kaktus dan Sukulen', 'SchlumbergeraPink.jpg', 0.3005, 'dataran rendah sampai dataran tinggi', 'kurang dari 20cm', 'tanah : pupuk kandang : pasir', 'diameter 20-30cm', 'sehari 1x', 'dibawah naungan', 'sebulan sekali dengan pupuk NPK Bunga', 'stek batang', 'Tidak memiliki aroma bunga ', 5, 8),
(9, 'Lipstik Pink', 16000, 'Tanaman hias yang satu ini memiliki daun yang tebal dan rimbun. Bentuk bunganya juga cantik seperti anggrek dan rajin berbunga setiap bulannya. Sangat toleran dengan kekeringan dan mudah dirawat.', 200, 'Tanaman Gantung', 'LipstikPink.jpg', 0.5005, 'dataran rendah sampai dataran tinggi', '20-40cm', 'cacahan pakis', 'diameter 20-30cm', 'sehari 1x', 'dibawah naungan', 'dua minggu sekali dengan pupuk NPK daun, lalu diteruskan dengan NPK Bunga pada minggu berikutnya', 'stek batang', 'hidup epifit, mirip anggrek', 0, 3),
(10, 'Pink Pelargonium', 24000, 'Pelargonium Pink (Pelargonium sp) adalah Tanaman hias bunga gantung yang mempunyai bunga sangat cantik dengan sedikit rimbun. Biasanya digunakan sebagai hiasan untuk depan rumah. Belakangan bunga ini digunakan sebagai anti kanker karena memiliki kandungan minyak atsiri.', 250, 'Tanaman Gantung', 'PinkPelargonium.jpg', 0.3005, 'dataran tinggi / suhu dingin 20-26c', '20-40cm', 'tanah dan humus', 'diameter 20-30cm', 'sehari 1x', 'dibawah naungan', 'sebulan sekali dengan pupuk NPK Bunga', 'stek batang', 'Tidak ada Aroma Bunga', 0, 1),
(11, 'Red Pelargonium', 18000, 'Red pelargonium memiliki bunga merah menyala yang sangat cantik. Jenis ini Sangat pas digunakan sebagai bunga gantung yang bisa digunakan untuk memperindah teras rumah Anda. Kelebihan dari jenis ini adalah bahwa tanaman ini mampu berbunga beberapa kali dalam sebulan. Tanaman yang menyukai paparan sinar matahari sepanjang hari ini sangat mudah perawatannya, cukup disiram secara rutin satu kali sehari dan menambahkan pupuk NPK bunga setiap bulannya.', 235, 'Tanaman Gantung', 'RedPelargonium.jpg', 0.3005, 'dataran tinggi / suhu dingin 20-26c', '20-40cm', 'tanah dan humus', 'diameter 20-30cm', 'sehari 1x', 'dibawah naungan', 'sebulan sekali dengan pupuk NPK Bunga', 'stek batang', 'Tidak ada aroma bunga', 15, 7),
(12, 'White schlumbergera', 12000, 'Schlumbergera putih adalah tanaman yang memiliki bentuk batang yang keras. Tanaman ini memiliki bentuk bunga yang bertumpuk dan berwarna putih. Tanaman ini mampu menghasilkan bunga disetiap batangnya. Tanaman ini sangat cocok diletakkan dipot gantung.', 200, 'Tanaman Gantung', 'Whiteschlumbergera.jpg', 0.3005, 'dataran rendah sampai dataran tinggi', 'kurang dari 20cm', 'tanah dan humus', 'diameter 5-10cm', 'apabila media tanam kering', 'dibawah naungan', 'sebulan sekali dengan pupuk NPK Bunga', 'stek batang', 'Tidak memiliki aroma bunga', 0, 7),
(13, 'Glacier Ivy', 12000, 'Glacier Ivy (Hedera helix) adalah tanaman merambat yang mampu tumbuh dengan cepat, sangat cocok sebagai peneduh untuk menutupi kanopi Anda. Tidak hanya itu, tanaman ini juga cocok dirambatkan pada dinding taman sehingga tercipta suasana hijau yang menenangkan', 350, 'Tanaman Gantung', 'GlacierIvy.jpg', 0.3005, 'dataran rendah sampai dataran tinggi', '20-40cm', 'tanah dan humus', 'diameter 20-30cm', 'sehari 1x', 'dibawah naungan', 'sebulan sekali dengan pupuk NPK Daun', 'stek batang', 'tumbuh menempel pada tembok', 0, 3),
(14, 'Sirih Belanda', 12000, 'Warnanya yang cerah membuatnya sangat cocok bila ditempatkan di pot gantung dan dibiarkan tumbuh menjuntai menghiasi teras Anda. Tak hanya sedap dipandang, sirih belanda juga memiliki banyak kegunaan', 245, 'Tanaman Gantung', 'SirihBelanda.jpg', 0.3005, 'dataran rendah sampai dataran tinggi', '20-40cm', 'tanah dan humus', 'diameter 20-30cm', 'sehari 2x', 'dibawah naungan', 'sebulan sekali dengan pupuk NPK Daun', 'stek batang', 'Tanaman tahan 2 minggu dalam ruangan', 5, 9),
(15, 'Cempaka Kelopak Ungu', 42000, 'Terkenal dengan bunganya yang sangat harum, cempaka sangat dicintai para penggemar tanaman. Pohon cempaka biasanya tumbuh besar nan rindang, serta bisa dimanfaatkan untuk kerajinan kayu di negara tropis seperti Thailand. Cempaka kelopak ungu merupakan salah satu jenis yang langkap', 235, 'Tanaman Indoor', 'CempakaKelopakUngu.jpg', 0.3005, 'dataran tinggi / suhu dingin 20-26c', '20-40cm', 'tanah dan humus', 'diameter 20-30cm', 'sehari 1x', 'sepanjang hari', 'dua minggu sekali dengan pupuk NPK daun, lalu diteruskan dengan NPK Bunga pada minggu berikutnya', 'ditumbuhkan dari biji', 'umur tanaman semusim, mati setelah berbunga ', 5, 7),
(16, 'Sansevieria', 18000, 'Asap kendaraan bermotor dan pabrik menjadi penyebab utama yang membuat kondisi udara semakin memburuk. Oleh sebab itulah, Anda harus memiliki siasat jitu untuk tetap bisa menghirup udara yang bersih. Salah satu pilihannya adalah menanam sansevieria di rumah, karena memiliki fungsi utama sebagai anti polutan. Tanaman ini disebut - sebut sebagai pencuci udara karena mampu menyerap zat - zat berbahaya di udara yang bersifat racun.', 190, 'Tanaman Indoor', 'Sansevieria.jpg', 0.5005, 'dataran rendah sampai dataran tinggi', '80-100cm', 'tanah dan humus', 'diameter lebih dari 60cm', 'sehari 2x', 'sepanjang hari', 'sebulan sekali dengan pupuk NPK Daun', 'pemisahan rumpun', 'Sebagai tumbuhan penyerap racun di udara', 10, 5),
(18, 'Pisang Raja', 10000, 'Pisang Raja adalah pisang para raja ', 100, 'Tanaman Gantung', 'back.jpg', 10, 'panas', '10', 'tanah', '20', 'dengan air ', 'cukupin', 'NPK 2 kali sehari', 'pemotongan rumpun', 'baik', 0, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_Transaksi` int(9) NOT NULL,
  `Total_Biaya` bigint(20) NOT NULL,
  `Tanggal_transaksi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_customer` int(11) NOT NULL,
  `Konfirmasi` tinyint(1) NOT NULL DEFAULT '0',
  `waktu_konfirmasi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`ID_Transaksi`, `Total_Biaya`, `Tanggal_transaksi`, `id_customer`, `Konfirmasi`, `waktu_konfirmasi`) VALUES
(148, 246000, '2016-05-14 10:19:05', 42, 1, '2016-05-14 10:34:05'),
(149, 480000, '2016-05-14 10:24:36', 42, 1, '2016-05-14 10:34:05'),
(150, 130000, '2016-05-14 10:28:22', 42, 1, '2016-05-14 10:34:05'),
(151, 204000, '2016-05-14 10:30:03', 42, 1, '2016-05-14 10:34:05'),
(152, 180000, '2016-05-14 10:45:18', 42, 1, '2016-05-14 10:49:35'),
(153, 65000, '2016-05-14 18:47:44', 42, 1, '2016-05-14 18:53:19'),
(158, 36000, '2016-05-15 02:48:50', 43, 1, '2016-05-16 16:41:13'),
(159, 90000, '2016-05-15 02:51:59', 43, 1, '2016-05-17 19:47:26'),
(160, 90000, '2016-05-15 02:52:09', 43, 0, '2016-05-15 02:52:09'),
(161, 90000, '2016-05-15 02:52:35', 43, 1, '2016-05-15 12:47:36'),
(162, 90000, '2016-05-15 02:52:41', 43, 0, '2016-05-15 02:52:41'),
(163, 90000, '2016-05-15 02:52:45', 43, 1, '2016-05-15 08:16:02'),
(164, 90000, '2016-05-15 02:53:34', 43, 1, '2016-05-15 08:01:36'),
(165, 180000, '2016-05-15 09:08:35', 43, 1, '2016-05-15 09:08:57'),
(166, 120000, '2016-05-15 09:24:46', 45, 1, '2016-05-15 09:28:11'),
(167, 210000, '2016-05-15 13:55:40', 46, 1, '2016-05-15 13:56:07'),
(168, 48000, '2016-05-15 19:34:46', 47, 1, '2016-05-15 19:38:42'),
(169, 12000, '2016-05-15 19:45:07', 48, 1, '2016-05-15 19:45:33'),
(170, 9000, '2016-05-15 21:37:23', 49, 1, '2016-05-15 22:56:16'),
(171, 18000, '2016-05-17 22:51:22', 50, 0, '2016-05-17 22:51:23'),
(172, 42000, '2016-05-18 12:57:40', 42, 1, '2016-05-18 13:03:11'),
(173, 84000, '2016-05-18 15:26:36', 51, 1, '2016-05-18 15:28:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID_customer`),
  ADD UNIQUE KEY `notelfon` (`notelfon`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD KEY `transaksi_id` (`transaksi_id`),
  ADD KEY `tanaman_id` (`tanaman_id`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`ID_Tanaman`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_Transaksi`),
  ADD KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID_customer` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `ID_Tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `ID_Transaksi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`tanaman_id`) REFERENCES `tanaman` (`ID_Tanaman`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`ID_Transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
