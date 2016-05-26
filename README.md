





DESKRIPSI PERANCANGAN PERANGKAT LUNAK



ADAFlorist
(PENJUALAN TANAMAN HIAS ONLINE) 



untuk:
Kelompok 7



Dipersiapkan oleh:

Iqbal Abiyoga	(G64140014)
Rahmad Ilham Pratama	(G64140016)
David Tahi Ulubalang	(G64140060)
Wulan Maulida	(G64140061)









Departemen Ilmu Komputer
Fakultas Matematika dan Ilmu Pengetahuan Alam
Institut Pertanian Bogor



 	Departemen
Ilmu Komputer

Institut Pertanian Bogor	Nomor Dokumen	Halaman
	
	SKPL - ADAflorist	1/31
	
	Revisi  -	
DAFTAR PERUBAHAN

Revisi	Deskripsi

A
	

B
	


C
	


D
	


E
	


F
	


G
	



INDEX	-	A	B	C	D	E	F	G
TGL								
Ditulis oleh								
Diperiksa oleh								
Disetujui oleh								









DAFTAR HALAMAN PERUBAHAN

Halaman	Revisi	Halaman	Revisi











			







































DAFTAR ISI


DAFTAR PERUBAHAN	2
DAFTAR HALAMAN PERUBAHAN	3
DAFTAR ISI	4
DAFTAR GAMBAR	5
DAFTAR TABEL	6
1.	PENDAHULUAN	7
1.1.	TUJUAN PENULISAN DOKUMEN	7
1.2.	LINGKUP MASALAH	7
1.3.	DEFINISI DAN ISTILAH	8
1.4.	ATURAN PENAMAAN DAN PENOMORAN	9
1.5.	REFERENSI	10
1.6.	IKHTISAR DOKUMEN	10
2.	DESKRIPSI PERANCANGAN GLOBAL	10
2.1.	RANCANGAN LINGKUNGAN IMPLEMENTASI	10
2.2.	DESKRIPSI DATA	10
2.2.1.	Conceptual Data Model	11
2.2.2.	Physical Data Model	12
2.2.3.	Daftar Tabel Aplikasi	13
2.3.	DESKRIPSI MODUL	14
3.	DESKRIPSI PERANCANGAN RINCI	15
3.1.	DESKRIPSI RINCI TABEL	15
3.1.1.	Tabel Customer	15
3.1.2.	Tabel Admin	15
3.1.3.	Tabel Detail Transaksi	16
3.1.4.	Tabel Tanaman	16
3.1.5.	Tabel Transaksi	19
3.2.	DESKRIPSI RINCI MODUL	19
3.2.1.	Modul Home	19
3.2.1.1.	Spesifikasi Fungsi Home	19
3.2.1.2.	Spesifikasi Layar Utama Fungsi Home	20
3.2.1.3.	Spesifikasi Query Fungsi Home	20
3.2.1.4.	Spesifikasi Field Data Layar Fungsi Home	21
3.2.1.5.	Spesifikasi Objek-Objek pada  Layar Fungsi Home	21
3.2.2.	Modul Pembelian	21
3.2.2.1.	Spesifikasi Fungsi Pembelian	21
3.2.2.2.	Spesifikasi Layar Utama Fungsi Pembelian	22
3.2.2.3.	Spesifikasi Query Fungsi Pembelian	23
3.2.2.4.	Spesifikasi Field Data Layar Fungsi Pembelian	24
3.2.3.	Modul  Sign-in	25
3.2.3.1.	Spesifikasi Fungsi Sign-in	25
3.2.3.2.	Spesifikasi Layar Utama Fungsi Sign-in	25
3.2.3.3.	Spesifikasi Query Fungsi Sign-in	26
3.2.3.4.	Spesifikasi Field Data Layar Fungsi Sign-in	26
3.2.3.5.	Spesifikasi Objek-Objek pada  Layar Fungsi Sign-in	26
3.2.4.	Modul Sign-up	27
3.2.4.1.	Spesifikasi Fungsi sign-up	27
3.2.4.2.	Spesifikasi Layar Utama Fungsi sign-up	27
3.2.4.3.	Spesifikasi Query Fungsi sign-up	27
3.2.4.4.	Spesifikasi Field Data Layar Fungsi sign-up	28
3.2.4.5.	Spesifikasi Objek-Objek pada  Layar Fungsi sign-up	28
3.2.5.	Modul Status Pembayaran	29
3.2.5.1.	Spesifikasi Fungsi Status Pembayaran	29
3.2.5.2.	Spesifikasi Layar Utama Fungsi Status Pembayaran	29
3.2.5.3.	Spesifikasi Query Fungsi Status Pembayaran	29
3.2.5.4.	Spesifikasi Field Data Layar Fungsi Status Pembayaran	30
3.2.5.5.	Spesifikasi Objek-Objek pada  Layar Status Pembayaran	30
3.2.6.	Modul Daftar Transaksi Costumer	30
3.2.6.1.	Spesifikasi Fungsi Daftar Transaksi Costumer	30
3.2.6.2.	Spesifikasi Layar Utama Fungsi Status Pembayaran	30
3.2.6.3.	Spesifikasi Query Fungsi Status Pembayaran	31
3.2.6.4.	Spesifikasi Field Data Layar Fungsi Status Pembayaran	31
3.2.6.5.	Spesifikasi Objek-Objek pada  Layar Status Pembayaran	31
3.2.7.	Modul CRUD Database	31
3.2.7.1.	Spesifikasi Fungsi CRUD Database	31
3.2.7.2.	Spesifikasi Layar Utama Fungsi CRUD Database	32
3.2.7.3.	Spesifikasi Query Fungsi CRUD Database	32
3.2.7.4.	Spesifikasi Field Data Layar Fungsi CRUD Database	35
3.2.7.5.	Spesifikasi Objek-Objek pada  Layar Fungsi CRUD Database	35
3.3.	MATRIKS KERUNUTAN	36
3.3.1.	Tabel Kerunutan	36

DAFTAR GAMBAR
Gambar 1 Conceptual Data Model	
Gambar 2 Physical Data Model	
Gambar 3 Spesifikasi Layar Utama Fungsi Home	
Gambar 4 Spesifikasi Layar Utama Fungsi Beli	
Gambar 5 Spesifikasi Layar Utama Fungsi Status Pembelian	
Gambar 5 Spesifikasi Layar Utama Fungsi Status Pembelian	
Gambar 7 Spesifikasi Layar Utama Fungsi Investor	
Gambar 8 Spesifikasi Layar Utama Fungsi CRUD Database	

DAFTAR TABEL
Tabel 1 Definisi singkat dan akronim	
Tabel 2 Daftar Tabel Aplikasi	
Tabel 3 Definisi Domain/ Type	
Tabel 4 Deskripsi Rinci Tabel ADAflorist.pembeli	
Tabel 5 Deskripsi Rinci Tabel ADAflorist.petani	
Tabel 6 Deskripsi Rinci Tabel ADAflorist.investor	
Tabel 7 Deskripsi Rinci Tabel ADAflorist.admin	
Tabel 8 Deskripsi Rinci Tabel ADAflorist.stok	
Tabel 9 Deskripsi Rinci Tabel ADAflorist.berita	
Tabel 10 Deskripsi Rinci Tabel ADAflorist.harga	
Tabel 11 Deskripsi Rinci Tabel ADAflorist.paket	
Tabel 12 Spesifikasi Field Data Layar Fungsi Home	
Tabel 12 Spesifikasi Objek-objek Data Layar Fungsi Home	
Tabel 14 Spesifikasi Field Data Layar Fungsi Beli	
Tabel 15 Spesifikasi Objek-Objek Layar Fungsi Beli	
Tabel 16 Spesifikasi Field Data Layar Status Pembelian	
Tabel 17 Spesifikasi Objek-objek Layar Fungsi Status Pembelian	
Tabel 18 Spesifikasi Field Data Layar Fungsi Petani	
Tabel 19 Spesifikasi Objek-Objek Layar Fungsi Petani	
Tabel 20 Spesifikasi Field Data Layar Fungsi Investor	
Tabel 21 Spesifikasi Objek-Objek Layar Fungsi Petani	
Tabel 22 Spesifikasi Field Data Layar Fungsi CRUD Database	
Tabel 23 Spesifikasi Objek-Objek Layar Fungsi CRUD Database	
Tabel 10 Kerunutan	
























1.	Pendahuluan
1.1.	Tujuan Penulisan Dokumen
Dokumen DPPL merupakan dokumen deskripsi dari perancangan perangkat lunak yang akan dikembangkan dan bertujuan untuk memberikan landasan yang diperlukan dalam proses pengembangan perangkat lunak ADAflorist. Dokumen ini digunakan oleh pengembang perangkat lunak sebagai acuan teknis pengembangan perangkat lunak pada tahap selanjutnya.

1.2.	Lingkup Masalah 
Tanaman hias adalah semua jenis tanaman yang bermanfaat untuk menambah keindahan dan kecantikan baik itu tanaman hias bunga, daun, batang maupun akar. Tanaman hias umumnya sengaja ditanam dengan tujuan untuk memberikan kesan indah baik untuk dalam ruangan maupun untuk diluar ruangan. Tanaman hias tidak hanya memberikan unsur keindahan saja namun juga memberikan berbagai manfaat.
Para kolektor tanaman hias mencari tanaman hias hingga keluar daerah maupun pergi ke luar Indonesia untuk mendapatkan jenis tanaman yang diinginkan. Namun dengan terkendala waktu dan pekerjaan, kolektor tanaman hias kesulitan untuk mendapatkan jenis tanaman hias yang diinginkan. 
Seiring dengan berkembangnya teknologi dan informasi, seperti internet, segala bentuk transaksi  jual beli  dapat dilakukan melalui web browser yang terkoneksi internet. Transaksi jual beli  dapat dilakukan tanpa bertemu secara langsung. Dengan menggunakan teknologi intenet dan aplikasi yang dibuat, memudahkan kolektor tanaman hias ataupun pecinta tanaman lainnya untuk melihat informasi produk yang dijual oleh admin. akan membuat sebuah aplikasi berbasis web untuk mempermudah kolektor tanaman hias dalam  membeli tanaman hias tanpa perlu mendatangi tempat penjualan tanaman hias. Pembeli juga dapat memesan atau melihat informasi tanaman hias yang dijual. 
1.3.	Definisi dan Istilah
Definisi, Istilah, dan singkatan yang digunakan dalam pembuatan dokumen DPPL ini adalah:



Tabel 1 Definisi singkat dan akronim
NO.	ISTILAH, SINGKATAN, AKRONIM	KETERANGAN
1.	SKPL	Spesifikasi kebutuhan perangkat lunak atau Software Requirement Specification (SRS), merupakan dokumentasi kebutuhan perangkat lunak
2.	SKPL-ADAflorist.A-xxx	SKPL Aplikasi ADAflorist--A xxx adalah kode yang digunakan untuk merepresentasikan kebutuhan (requirement) pada ADAflorist, dengan Aplikasi ADAflorist merupakan kode perangkat lunak, ADAflorist adalah kode sistem, dan A adalah digit/nomor kebutuhan (requirement).
3.	Data Flow Diagram	Data Flow Diagram (DFD) adalah diagram dan notasi yang digunakan untuk menunjukkan aliran data pada perangkat lunak.
4.	Entity Relationship Diagram	Entity Relarionship Diagram (ERD) adalah suatu diagram yang menunjukkan keterhubungan antar entitas yang ada pada system tempat perangkat lunak ini akan diterapkan
5. 	DPPL	Deskripsi Perancangan Perangkat Lunak,  atau dalam bahasa Inggris-nya sering juga disebut sebagai Software Design Description (SDD), dan merupakan deskripsi dari perangkat lunak yang akan dikembangkan.
6.	DPPL-ADAflorist A-xxx	DPPL-ADAflorist.A-xxx adalah kode yang digunakan untuk merepresentasikan fungsi atau modul pada ADAflorist, dengan ADAflorist merupakan kode perangkat lunak, ADAflorist.A adalah kode fase, dan xxx adalah digit/nomor kebutuhan (requirement).




















































1.4.	Aturan Penamaan dan Penomoran
Aturan penamaan dan penomoran pada perangkat lunak ini adalah:
●	ADAflorirst_[xxxx], adalah kode yang digunakan untuk aturan penamaan bagi nama-nama tabel yang terdapat pada ADAflorist, dengan xxxx adalah serangkaian huruf dari nama tabel yang bersangkutan.

1.5.	Referensi 
Referensi yang digunakan pada perangkat lunak ADAflorist adalah:
Vincent, Tony. Spesifikasi Perangkat Lunak Atma Vision(AON), Universitas Atma Jaya Yogyakarta, 2010.
1.6.	Ikhtisar Dokumen
Dokumen DPPL ini dibagi menjadi tiga bagian utama. Bagian pertama berisi penjelasan tentang dokumen DPPL yang mencakup tujuan pembuatan dokumen ini,
 lingkup masalah yang diselesaikan oleh perangkat lunak yang dikembangkan, definisi, referensi dan deskripsi umum.
Bagian kedua berisi diagram dan spesifikasi kelas, komponen sistem dan arsitektur sistem dari ADAflorist yang telah dispesifikasikan pada dokumen SKPL. Bagian ketiga berisi deskripsi rinci masing-masing kelas.
2.	Deskripsi Perancangan Global
2.1.	Rancangan Lingkungan Implementasi
ADAflorist akan dikembangkan pada lingkungan dengan spesifikasi sebagai berikut :
•	Sistem Operasi	: Microsoft® Windows 10
•	Bahasa Pemrograman 	: PHP, HTML
•	DBMS	                 	: PhpMyAdmin
•	Tools			: Notepad++,  Brackets, XAMPP

2.2.	Deskripsi Data
●	Nama table		: Customer
Volume 		: 7 kolom	
Primary key 		: ID_Customer
Constraint integrity	: -
Tabel Customer adalah tabel basis data yang berisi daftar identitas Customer.
●	Nama table		: Admin
Volume 		: 3 Kolom	
Primary key 		: id_admin
Constraint integrity	: -
Tabel Admin adalah tabel basis data yang berisi daftar identitas sign-in untuk masuk dalam sistem admin.

●	Nama table		: Tanaman
Volume 		: 19 Kolom	
Primary key 		: ID_Tanaman
Constraint integrity	: -
Tabel tanaman adalah tabel basis data yang berisi deskripsi tanaman, rincian tanaman, harga dan jumlah stok tanaman yang tersedia.

●	Nama table		: Transaksi
Volume 		: 6 kolom	
Primary key 		: ID_Transaksi
Constraint integrity	: -
Tabel transaksi adalah tabel basis data yang berisi transaksi pembelian serta total biaya transaksi.
●	Nama table		: Detail Transaksi
Volume 		: 3 kolom	
Primary key 		: -
Constraint integrity	: -
Tabel  detail transaksi adalah tabel basis data yang berisi rincian dari setiap transaksi customer.

2.2.1.	Conceptual Data Model













Gambar 1 Conceptual Data Model
2.2.2.	Physical Data Model



 
Gambar 2 Physical Data Model














2.2.3.	Daftar Tabel Aplikasi
Tabel 2 Daftar Tabel Aplikasi
Nama Tabel	Primary key 	Data Store	E/R	Deskripsi isi
Customer	ID_Customer			Tabel Customer adalah tabel basis data yang berisi daftar identitas Customer.

Admin	id_Admin			Tabel Admin adalah tabel basis data yang berisi daftar identitas sign-in untuk masuk dalam sistem admin.

Tanaman	ID_Tanaman			Tabel tanaman adalah tabel basis data yang berisi deskripsi tanaman, rincian tanaman, harga dan jumlah stok tanaman yang tersedia.

Transaksi	ID_Transaksi			Tabel transaksi adalah tabel basis data yang berisi transaksi pembelian serta total biaya transaksi.
Detail Transaksi	-			Tabel  detail transaksi adalah tabel basis data yang berisi rincian dari setiap transaksi customer.














2.3.	Deskripsi Modul
Tabel 3 Definisi Domain/ Type
No.	Fungsi/
Proses	Data Input	Data Output	Keterangan
DPPL-ADAflorist.A-001	Fungsi Home	-	Halaman home
dari aplikasi	Fungsi menampilkan home sebagai tampilan default ketika sistem pertama kali diakses dan menampilkan tanaman terlaris pada home.
DPPL-ADAflorist.A-002	Fungsi pembelian	Data Tanaman	Tanaman yang akan dibeli customer.	Fungsi untuk menampilkan tanaman yang akan dibeli customer.
DPPL-ADAflorist.A-003	Fungsi sign-in	Data customer	Masuk sebagai customer 	Fungsi untuk masuk sebagai customer.
DPPL-ADAflorist.A-005	Fungsi sign-up	Data customer	Mendaftarkan untuk menjadi costumer.	Fungsi untuk keluar dari customer di ADAflorist.
DPPL-ADAflorist.A-006	Fungsi daftar transaksi costumer	Data Transaksi	Halaman untuk melihat riwayat transaksi yang dilakukan customer .	Fungsi untuk melihat transaksi yang pernah dilakukan customer.
	fungsi data tanaman (admin)			
DPPL-ADAflorist.A-007	Fungsi konfirmasi pembayaran	Data Transaksi	Halaman untuk mengkonfirmasi status pembayaran customer	Fungsi bagi admin untuk mengkonfirmasi status pembayaran customer.
DPPL-ADAflorist.A-008	Fungsi CRUD Admin	Data Tanaman, Data transaksi	Informasi mengenai customer dan tanaman hias.	Fungsi untuk melihat customer yang melakukan transaksi, menambah tanaman, menghapus tanaman, dan meng-edit tanaman.

3.	Deskripsi Perancangan Rinci
3.1.	Deskripsi Rinci Tabel
3.1.1.	Tabel Customer
Identifikasi/Nama	: Customer
Deskripsi Isi		: Tabel Customer adalah tabel basis data yang berisi daftar identitas Customer.
Jenis			: Tabel referensi
Volume		: -
Laju			: -
Primary Key		: ID_Customer

Tabel 4 Deskripsi Rinci Tabel Customer
ID_Field	Deskripsi	Tipe & Length	Boleh NULL	Keterangan
ID_Customer	field yang berisi id tiap Customer.	Int(9)	NO	Contoh : 65487
nama	field yang berisi nama Customer.	varchar(50)	NO	Contoh : Iqbal Abiyoga

alamat	field yang berisi alamat Customer	varchar(250)	NO	Contoh alamat Customer : Jalan raya dramaga no 20
notelefon	field yang berisi nomor telepon setiap Customer.	varchar(12))	NO	Contoh : 081277805808
email	field yang berisi alamat email setiap Customer.	varchar(25)	NO	Contoh : kedaitani@gmail.com


3.1.2.	Tabel Admin
Identifikasi/Nama	: Admin
Deskripsi Isi		: Tabel Admin adalah tabel basis data yang berisi daftar identitas sign-in untuk masuk dalam sistem admin.
Jenis			: tabel referensi
Volume		: -
Laju			: -
Primary Key		: ID_Admin

Tabel 5 Deskripsi Rinci Tabel ADAflorist.petani
ID_Field	Deskripsi	Tipe & Length	Boleh NULL	Keterangan
ID_Admin	field yang berisi id tiap admin	Int(10)	NO	Contoh : 896876
Nama	field yang berisi nama admin	varchar(50)	NO	Contoh : Nizar Maulana
Password	field yang berisi password dari id admin	varchar(20)	NO	Contoh : limabelas15

3.1.3.	Tabel Detail Transaksi
Identifikasi/Nama	: Detail Transaksi
Deskripsi Isi		: Tabel detail transaksi adalah tabel basis data yang berisi jumlah pembelian tanaman yang dibeli
Jenis			: tabel referensi
Volume		: -
Laju			: -
Primary Foreign Key	: Transaksi_id

Tabel 6 Deskripsi Rinci Tabel ADAflorist.investor
ID_Field	Deskripsi	Tipe & Length	Boleh NULL	Keterangan
Transaksi_id	field yang berisi foreign key dari id_transaksi.	Int(20)	NO	Auto increament
Contoh: INV123456

Tanaman_id	field yang merujuk foreign key dari id_tanaman.	Int(20)	NO	Contoh : 21
Jumlah_beli	field yang merujuk pada id tamanan.	Int(20)	NO	Contoh :  200
3.1.4.	Tabel Tanaman

Identifikasi/Nama	: Tanaman
Deskripsi Isi		: Tabel tanaman adalah tabel basis data yang berisi identitas tanaman , jumlah tanaman yang dibeli, jumlah tanaman yang dilihat.
Jenis			: Tabel referensi
Volume		: -
Laju			: -
Primary Key		: ID_Tanaman





Tabel 6 Deskripsi Rinci Tabel ADAflorist.investor
ID_Field	Deskripsi	Tipe & Length	Boleh NULL	Keterangan
ID_Tanaman	field yang berisi id tiap tanaman	Int(11)	NO	Contoh: 1

Nama_Tanaman	field yang berisi nama tanaman	Varchar(25)	NO	Contoh : Dendrobium aphyllum
Harga_Tanaman	field yang berisi harga tanaman	Bigint(20)	NO	Contoh : 48000
Deskripsi_tanaman	field yang berisi deskripsi tanaman	Varchar(500)	NO	Contoh : Bunga Dendrobium aphyllum ini warnanya kombinasi ungu dan putih. 
Jumlah_stok	field yang berisi jumlah stok tanaman	Int(11)	NO	Contoh : 190
Jenis_Tanaman	field yang berisi jenis tanaman	Varchar(50)	NO	Contoh : Tanaman Aromatherapy
Gambar	field yang berisi gambar tanaman	Varchar(100)	NO	Contoh Dendrobiumaphyllum.jpg
Berat	field yang berisi berat tanaman	Float	YES	Contoh : 0.3005
Iklim 	field yang berisi iklim tanaman	Varchar(50)	YES	Contoh : musim kemarau
Ukuran_Tanaman	field yang berisi ukuran tanaman	Varchar(50)	YES	Contoh : 20-40cm
Media_Tanaman	field yang berisi media tanaman	Varchar(50)	YES	Contoh : tanah dan humus 
Ukuranpot	field yang berisi ukuran pot tanaman	Varchar(50)	YES	Contoh : diameter 20-30cm
Penyiraman	field yang berisi ukuran pot tanaman	Varchar(50)	YES	Contoh : sehari 1x
Kebutuhan_Sinar	field yang berisi ukuran pot tanaman	Varchar(50)	YES	Contoh : di bawah naungan
Pemupukan	field yang berisi ukuran pot tanaman	Varchar(50)	YES	Contoh : dua minggu sekali dengan kompos
Asal_Bibit	field yang berisi ukuran pot tanaman	Varchar(50)	YES	Contoh : pemisahan rumpun
Kondisi_Tanaman	field yang berisi ukuran pot tanaman	Varchar(50)	YES	Contoh : baik, tumbuh semusim
Jumlah_beli	field yang berisi jumlah tanaman yang dibeli customer.	Varchar(50)	YES	Contoh : 12
Jumlah_lihat	field yang berisi jumlah user yang membuka ADAflorist.	Varchar(50)	YES	Contoh : 20
 
3.1.5.	Tabel Transaksi
Identifikasi/Nama	:Transaksi
Deskripsi Isi		:Tabel transaksi adalah tabel basis data yang berisi transaksi pembelian serta total biaya transaksi.
Jenis			: tabel transaksi
Volume		: -
Laju			: -
Primary Key		: ID_Transaksi

Tabel 8 Deskripsi Rinci Tabel Transaksi
ID_Field	Deskripsi	Tipe & Length	Boleh NULL	Keterangan
ID_Transaksi	field yang berisi id transaksi tiap pembelian tanaman	Int(9)	NO	Contoh : 148
 
Total_biaya	field yang berisi total biaya transaksi	Bigint(20)	NO	Contoh : 1500000
Tanggal_transaksi	field yang berisi tanggal transaksi	Datetime 	NO	Contoh :
2016-05-14 10:19:05
id_customer	field yang merujuk pada id tiap Customer	Int(11)	NO	Contoh : 42
Konfirmasi 	field yang merujuk pada id tiap Customer	tinyint(11)	NO	Contoh : 1
Waku_konfirmasi	field yang berisi  waktu konfirmasi pembelian barang	Datetime 	NO	Contoh :
2016-0514 10:34:05

3.2.	Deskripsi Rinci Modul
3.2.1.	Modul Home
3.2.1.1.	Spesifikasi Fungsi Home
Identifikasi nama :	Menampilkan Halaman Home
Deskripsi isi	:	Fungsi ini menampilkan halaman home, yang berisi , informasi mengenai ADAflorist, dan produk pertanian terlaris di bulan tersebut yang akan dijual.
Jenis	:	button, table, list



3.2.1.2.	 Spesifikasi Layar Utama Fungsi Home
 
 
Gambar 3 Spesifikasi Layar Halaman Utama 

3.2.1.3.	 Spesifikasi Query Fungsi Home
include 'kategori.php’            
include 'connect.php';
 $tanamans = mysqli_query($connect, "SELECT * FROM tanaman order by rand() LIMIT 3");
 while ($tanaman = mysqli_fetch_array($tanamans))
$tanaman['Gambar']
$tanaman['Nama_Tanaman']
$tanaman['Harga_Tanaman']
$tanaman['ID_Tanaman']
$tanaman['Deskripsi_Tanaman']
	

3.2.1.4.	 Spesifikasi Field Data Layar Fungsi Home

Tabel 12 Spesifikasi Field Data Layar Fungsi Home
Label	Field	Tabel	Validasi	Keterangan
1	field header	-	-	Menampilkan tulisan ADAflorist , tentang ADAflorist, button sign-in dan keranjang. 
2	field footer	-	-	Menampilkan deskripsi ADAflorist dan informasi kontak ADAflorist.
3	Field cari tanaman	Tanaman	-	Menampilkan tanaman yang diinputkan oleh user.


3.2.1.5.	 Spesifikasi Objek-Objek pada  Layar Fungsi Home

Tabel 13 Spesifikasi Objek-objek Data Layar Fungsi Home
Id_Objek 	Jenis	Keterangan
Button Beli sekarang	Button	Jika di klik, maka calon Customer masuk ke halaman profile tanaman tersebut
Button Sign-in	Button	Jika di kilik, maka calon Customer masuk ke halaman sign-in
Button Tentang	Button	Jika di klik, maka akan masuk ke halaman informasi ADAflorist.
Button Lihat Semua Tanaman	Button	Jika di klik, maka akan masuk ke halaman lihat semua tanaman.
Button Keranjang	Button	Jika di klik , maka akan masuk pada halaman keranjang pembelian
Button ADAflorist	Button	Jika di klik , maka akan masuk pada halaman utama ADAflorist.
Button Panduan ADAflorist	Button	Jika di klik , maka akan masuk pada halaman panduan berbelanja di aplikasi ADAflorist.
Button Belanja sekarang	Button	Jika di klik , maka akan turun pada halaman utama tanaman .
Button Cari	Button	Jika di klik , maka akan mencari  keyword yang diberikan user.

3.2.2.	Modul Pembelian

3.2.2.1.	Spesifikasi Fungsi Pembelian
Identifikasi nama 	: Menampilkan keranjang pembelian.
Deskripsi isi		: Fungsi ini menampilkan halaman keranjang belanja customer dimana keranjang berisi jumlah pembelian serta total pembelian. Serta menampilkan rincian belanja yang dilakukan costumer.
Jenis			: button

3.2.2.2.	 Spesifikasi Layar Utama Fungsi Pembelian
 
 
 
 

Gambar 5 Spesifikasi Layar Utama Fungsi Pembelian

3.2.2.3.	 Spesifikasi Query Fungsi Pembelian
Keranjang.php: 
<?php
if(isset($_SESSION['cart_items']))
$total=0
$jumlah=0
foreach($_SESSION['cart_items'] as $id=>$value)
"SELECT * FROM tanaman WHERE ID_Tanaman = '$id'
$tanaman['ID_Tanaman']
$tanaman['Nama_Tanaman']
$tanaman['Harga_Tanaman'
$value
$subtotal=$tanaman['Harga_Tanaman']*$value;
$total=$total+$subtotal;
 $jumlah=$jumlah+$value;

Lanjut.php :
<?php 
session_start();
if (isset($_SESSION['user'])){
    $idcust=$_SESSION['idcust'];
    include 'connect.php';
    $total=0;
    $jumlah=0;
    if(isset($_SESSION['cart_items'])){
    mysqli_query($connect,"insert into transaksi(id_customer,Total_Biaya) values('$idcust','0')");
    $transaksi_id = mysqli_insert_id($connect);
    foreach($_SESSION['cart_items'] as $id=>$value){
        $rujuk = mysqli_query($connect, "Select * from tanaman where ID_Tanaman = $id");
 $tanaman = mysqli_fetch_array($rujuk);
        $stok=$tanaman['Jumlah_Stok'];
        $sisa=$stok-$value;
        if($sisa>=0){
        $idtanaman = $tanaman['ID_Tanaman'];
        mysqli_query($connect, "INSERT INTO detail_transaksi(transaksi_id,tanaman_id,jumlah_beli)
        VALUES('$transaksi_id','$idtanaman','$value')");
        $total=$total+($tanaman['Harga_Tanaman']*$value);
        $jumlah=$jumlah+$value;
        $jumbel=$tanaman['jumlah_beli'];
        $jumbelupdate=$jumbel+$value;
        mysqli_query($connect, "update tanaman Set Jumlah_Stok='$sisa', jumlah_beli='$jumbelupdate' where ID_Tanaman='$id'");
    }
    } 
 echo "<script language='javascript'>alert('Pembelian sukses dilakukan!');</script>";
 echo "<script>document.location.href='konfirmasi.php?idtransaksi=$transaksi_id';</script>";
    mysqli_query($connect,"update transaksi set Total_Biaya='$total' where ID_Transaksi='$transaksi_id'");}
    mysqli_query($connect,"update customer set beli=beli+1 where ID_customer='$idcust'");
}

else { echo "
    <script language='javascript'>
        alert('Silakan Login sebagai user terlebih dahulu!')
    </script>"; echo "
    <script>
        document.location.href = 'signin.php';
    </script>"; } ?>

3.2.2.4.	Spesifikasi Field Data Layar Fungsi Pembelian

Tabel 16 Spesifikasi Field Pembelian
Label	Field	Tabel	Validasi	Keterangan
1	field jumlah pembelian	Tanaman	-	Untuk mengosongkan keranjang pembelian.

3.2.3.1	 Spesifikasi Objek-Objek pada  Layar Fungsi Status Pembelian

Tabel 17 Spesifikasi Objek-objek Layar Fungsi Status Pembelian
Id_Objek 	Jenis	Keterangan
Button tambahkan ke keranjang	Button	Jika di klik, maka calon Customer masuk ke halaman informasi pembayaran
Button keranjang	Button	Jika di klik, maka Costumer masuk ke halaman isi keranjang.
Button kosongkan keranjang	Button	Jika di klik, maka Costumer masuk ke halaman isi keranjang.
Button lanjut ke pembayaran.	Button	Jika di klik, maka akan muncul modul konfirmasi.
Button konfirmasi dan bayar	Button	Jika di klik, maka Costumer akan masuk pada halaman rincian belanja.
Button lihat kembali keranjang.	Button	Jika di klik, maka akan kembali ke halaman sebelumnya.

3.2.3.	Modul  Sign-in

3.2.3.1.	 Spesifikasi Fungsi Sign-in
Identifikasi nama 	: Menampilkan Halaman Sign-in
Deskripsi isi		: Fungsi ini menampilkan halaman log-in, yang berisi field nama dan password yang akan diisi oleh admin. 
Jenis			: button


3.2.3.2.	 Spesifikasi Layar Utama Fungsi Sign-in
 
Gambar 6 Spesifikasi Layar Utama Fungsi Status Sign-in






3.2.3.3.	 Spesifikasi Query Fungsi Sign-in
<?php
include "connect.php";

if(isset($_POST['login'])){
$email=$_POST['email'];
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
   		else echo "<script>document.location.href='index.php'</script>";}

3.2.3.4.	 Spesifikasi Field Data Layar Fungsi Sign-in
Tabel 18 Spesifikasi Field Data Layar Fungsi Sign-in
Label	Field	Tabel	Validasi	Keterangan
Field Email	Email	Customer	-	Field untuk mengisi email yang terdaftar pada database.
Field Password	Password	Customer	-	Field untuk mengisi password yang terdaftar pada database.

3.2.3.5.	 Spesifikasi Objek-Objek pada  Layar Fungsi Sign-in
Tabel 19 Spesifikasi Objek-Objek Layar Fungsi Sign-in
Id_Objek 	Jenis	Keterangan
Button login	Button	Jika di klik, maka customer masukan ke halaman utama ADAflorist







3.2.4.	Modul Sign-up
3.2.4.1.	 Spesifikasi Fungsi sign-up
Identifikasi nama 	: Menampilkan Halaman sign-up
Deskripsi isi		: Fungsi ini menampilkan halaman sign-up, yang berisikan form pendaftaran yang akan diisi oleh customer.
Jenis			: button

3.2.4.2.	 Spesifikasi Layar Utama Fungsi sign-up
 


 
Gambar 7 Spesifikasi Layar Utama Fungsi sign-up

3.2.4.3.	 Spesifikasi Query Fungsi sign-up
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
   else echo "<script language='javascript'>alert('Mendaftar Gagal!')</script>";               ";
3.2.4.4.	 Spesifikasi Field Data Layar Fungsi sign-up
Tabel 20 Spesifikasi Field Data Layar Fungsi sign-up
Label 	Field	Tabel/
Query	Validasi	Keterangan
Nama Lengkap	Nama Lengkap	Customer	-	Field untuk mengisi nama lengkap untuk didaftarkan pada database.
Email	Email	Customer	-	Field untuk mengisi email untuk didaftarkan pada database.
Alamat	Alamat	Customer	-	Field untuk mengisi alamat untuk didaftarkan pada database.
Password	Password	Customer	-	Field untuk mengisi password untuk didaftarkan pada database.
Nomor Telepon	Nomor Telepon	Customer	-	Field untuk mengisi nomor telepon untuk didaftarkan pada database.

3.2.4.5.	 Spesifikasi Objek-Objek pada  Layar Fungsi sign-up
Tabel 21 Spesifikasi Objek-Objek Layar Fungsi sign-up
Id_Objek 	Jenis	Keterangan
Button DAFTAR	Button	Jika di klik, maka customer dapat melakukan sign-in
Button Sign-in	Button	Jika di klik, maka customer akan masuk ke halaman utama
		
		
3.2.5.	Modul Status Pembayaran

3.2.5.1.	 Spesifikasi Fungsi Status Pembayaran
Identifikasi nama :	Menampilkan status pembayaran
Deskripsi isi	:	Fungsi bagi admin untuk mengkonfirmasi status pembayaran customer.
Jenis	:	button, table, list

3.2.5.2.	 Spesifikasi Layar Utama Fungsi Status Pembayaran
 
Gambar 3 Spesifikasi Layar Status Pembayran

3.2.5.3.	 Spesifikasi Query Fungsi Status Pembayaran
session_start();
include 'connect.php';
$idtrans=$_GET['idtransaksi'];
mysqli_query($connect,"update transaksi set Konfirmasi = 1 where ID_Transaksi = '$idtrans'");
echo "<script> document.location.href = 'transaksilist.php'; </script>";

if ($trans['Konfirmasi']==0)
"<a class='waves-effect waves light btn' href='bayar.php?idtransaksi=".$trans[ 'ID_Transaksi']."'>Konfirmasi</a>
if ($trans['Konfirmasi']>0) {echo $trans['waktu_konfirmasi'];} else echo "";

	




3.2.5.4.	 Spesifikasi Field Data Layar Fungsi Status Pembayaran

Tabel 12 Spesifikasi Field Data Layar Fungsi Status Pembayaran
Label	Field	Tabel	Validasi	Keterangan
-	-	-	-	-


3.2.5.5.	 Spesifikasi Objek-Objek pada  Layar Status Pembayaran
Tabel 13 Spesifikasi Objek-objek Data Layar Fungsi Status Pemabayaran
Id_Objek 	Jenis	Keterangan
Button konfirmasi	Button	Jika di klik, maka button berubah menjadi sudah dikonfirmasi
Button sudah dikonfirmasi	Button	Button yang sudah di klik dari button konfirmasi.

3.2.6.	Modul Daftar Transaksi Costumer
3.2.6.1.	 Spesifikasi Fungsi Daftar Transaksi Costumer
Identifikasi nama :	Menampilkan daftar transaksi costumer
Deskripsi isi	:	Fungsi bagi costumer untuk melihat daftar transaksi dan melihat 
Jenis	:	button, table, list

3.2.6.2.	 Spesifikasi Layar Utama Fungsi Status Pembayaran
 
Gambar 3 Spesifikasi Layar Status Pembayran



3.2.6.3.	 Spesifikasi Query Fungsi Status Pembayaran
session_start();
include 'connect.php';
$idtrans=$_GET['idtransaksi'];
mysqli_query($connect,"update transaksi set Konfirmasi = 1 where ID_Transaksi = '$idtrans'");
echo "<script> document.location.href = 'transaksilist.php'; </script>";

if ($trans['Konfirmasi']==0)
"<a class='waves-effect waves light btn' href='bayar.php?idtransaksi=".$trans[ 'ID_Transaksi']."'>Konfirmasi</a>
if ($trans['Konfirmasi']>0) {echo $trans['waktu_konfirmasi'];} else echo "";

	
3.2.6.4.	 Spesifikasi Field Data Layar Fungsi Status Pembayaran

Tabel 12 Spesifikasi Field Data Layar Fungsi Status Pembayaran
Label	Field	Tabel	Validasi	Keterangan
-	-	-	-	-


3.2.6.5.	 Spesifikasi Objek-Objek pada  Layar Status Pembayaran
Tabel 13 Spesifikasi Objek-objek Data Layar Fungsi Status Pemabayaran
Id_Objek 	Jenis	Keterangan
Button konfirmasi	Button	Jika di klik, maka button berubah menjadi sudah dikonfirmasi
Button sudah dikonfirmasi	Button	Button yang sudah di klik dari button konfirmasi.

3.2.7.	Modul CRUD Database
3.2.7.1.	 Spesifikasi Fungsi CRUD Database
Identifikasi nama 	: Menampilkan Halaman CRUD Database
Deskripsi isi		: Fungsi ini menampilkan halaman edit, add, delete, update tanaman hias pada dashboard admin.
Jenis			: button,  table







3.2.7.2.	 Spesifikasi Layar Utama Fungsi CRUD Database

 
Gambar 8 Spesifikasi Layar Utama Fungsi CRUD Database

3.2.7.3.	 Spesifikasi Query Fungsi CRUD Database
	Adminhome.php :
	<?php
    session_start();
    if(empty($_SESSION['admin'])) echo "<script>document.location.href='forbid.php'</script>";
    include 'connect.php';
    $jumlah=0;
    $jumpel=0;
    $jumitem=0;
    $tanamans = mysqli_query($connect, "SELECT * FROM tanaman");
    $pelanggans= mysqli_query($connect, "SELECT * FROM customer");
    while ($tanaman = mysqli_fetch_assoc($tanamans)) {
    $jumlah=$jumlah+$tanaman['Jumlah_Stok'];
    $jumitem++;}
    while ($pelanggan = mysqli_fetch_assoc($pelanggans)) {
    $jumpel++;}
    
    ?>

    <body>
        <?php include 'headadmin.php'?>
            <div class="container">
                <h5>
    Dashboard
</h5>

                <div class="row">
                    <div class="card col s4">

                        <h5 class="pink white-text">Tanaman Dijual</h5>
                        <h4><?php echo $jumitem ?> item</h4>
                        <div class="card-action">
                            <a href="dateup.php">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    <div class="card col s4">

                        <h5 class="teal white-text"> Stok Tanaman Tersedia</h5>
                        <h4><?php echo $jumlah ?> tanaman</h4>
                    </div>
                    <div class="card col s4">
                        <h5 class="white-text pink">Transaksi Total</h5>
                        <?php $trans=mysqli_query($connect,"select count(ID_Transaksi) as jum from transaksi");
                    $tran=mysqli_fetch_array($trans);
                    $belums=mysqli_query($connect,"select count(ID_Transaksi) as belum from transaksi where Konfirmasi=0");
                    $belum=mysqli_fetch_array($belums);?>
                            <h4><?php echo $tran['jum'];?> transaksi</h4>
                            <h6><?php if ($belum['belum']==0) echo "sudah dikonfirmasi seluruhnya"; else echo $belum['belum']." transaksi belum dikonfirmasi";?></h6>
                            <div class="card-action">
                                <a href="transaksilist.php">Lihat Selengkapnya</a>
                            </div>
                    </div>

                </div>
                <div class="row">
                    <div class="card col s4">
                        <h5 class="brown white-text"> Tanaman Terlaris </h5>
                        <?php $no=0;
                        $tanams=mysqli_query($connect,"select * from tanaman order by jumlah_beli desc limit 5");
                        while ($tanam=mysqli_fetch_array($tanams)){
                            $no++;?>
                            <?php echo $no?> .
                                <a href="tanaman.php?idtanaman=<?php echo $tanam['ID_Tanaman']?>">
                                    <?php echo $tanam['Nama_Tanaman']?>
                                </a>
                                <br>
                                <?php } ?>
                    </div>
                    <div class="card col s4">
                        <h5 class="black white-text"> Paling Sering Dilihat </h5>
                        <?php $no=0;
                        $tanims=mysqli_query($connect,"select * from tanaman order by jumlah_lihat desc limit 5");
                        while ($tanim=mysqli_fetch_array($tanims)){
                            $no++;?>
                            <?php echo $no?> .
                                <a href="tanaman.php?idtanaman=<?php echo $tanim['ID_Tanaman']?>">
                                    <?php echo $tanim['Nama_Tanaman']?>
                                </a>
                                <br>
                                <?php } ?>
                    </div>
                    <div class="card col s4">
                        <h5 class="cyan darken-5 white-text">Pelanggan Terdaftar</h5>
                        <h4><?php echo $jumpel?> orang</h4>
                        <div class="card-action">
                        <a href="daftar_pelanggan.php">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="card col s4">
                        <h5 class="purple white-text">Paling Sering Transaksi </h5>
                        <?php $no=0;
                        $serings=mysqli_query($connect,"select * from customer order by beli desc limit 5");
                        while ($sering=mysqli_fetch_array($serings)){
                            $no++;?>
                            <?php echo $no?> .
                                <a href="transaksi_user.php?idcustomer=<?php echo $sering['ID_customer']?>">
                                    <?php echo $sering['nama']?>
                                </a>
                                <br>
                                <?php } ?>










3.2.7.4.	Spesifikasi Field Data Layar Fungsi CRUD Database
Tabel 22 Spesifikasi Field Data Layar Fungsi CRUD Database
Label 	Field	Tabel/
Query	Validasi	Keterangan
1	Field tanaman	Tanaman	-	CRUD tanaman 

3.2.7.5.	 Spesifikasi Objek-Objek pada  Layar Fungsi CRUD Database
Tabel 23 Spesifikasi Objek-Objek Layar Fungsi CRUD Database
Id_Objek 	Jenis	Keterangan
Button perbaharui tanaman	Button	Jika di klik, maka akan berpindah ke halaman data tanaman dijual.
Button tambah tanaman	Button	Jika di klik, maka akan berpindah ke halaman untuk mengisi identitas tanaman baru.
Button sign-out	Button	Jika di klik, maka akan keluar dari halaman dashboard admin.
Button lihat toko	Button	Jika di klik, maka akan berpindah ke halaman utama ADAflorist.
Button ADAflorist-admin	Button	Jika di klik, maka akan berpindah ke halaman dashboard admin.
























3.3.	Matriks Kerunutan
3.3.1.	Tabel Kerunutan
ID Kebutuhan	Modul
SKPL-ADAflorist.A-001	DPPL-ADAflorist.A-001
SKPL-ADAflorist.A-002	DPPL-ADAflorist.A-001
SKPL-ADAflorist.A-003	DPPL-ADAflorist.A-002
SKPL-ADAflorist.A-004	DPPL-ADAflorist.A-002
SKPL-ADAflorist.A-005	DPPL-ADAflorist.A-002
SKPL-ADAflorist.A-006	DPPL-ADAflorist.A-002
SKPL-ADAflorist.A-007	DPPL-ADAflorist.A-003
SKPL-ADAflorist.A-008	DPPL-ADAflorist.A-004
SKPL-ADAflorist.A-009	DPPL-ADAflorist.A-005
SKPL-ADAflorist.A-010	DPPL-ADAflorist.A-005
SKPL-ADAflorist.A-011	DPPL-ADAflorist.A-005
SKPL-ADAflorist.A-012	DPPL-ADAflorist.A-005
SKPL-ADAflorist.A-013	DPPL-ADAflorist.A-005
SKPL-ADAflorist.A-014	DPPL-ADAflorist.A-006
SKPL-ADAflorist.A-015	DPPL-ADAflorist.A-006
SKPL-ADAflorist.A-016	DPPL-ADAflorist.A-006
SKPL-ADAflorist.A-017	DPPL-ADAflorist.A-006
SKPL-ADAflorist.A-018	DPPL-ADAflorist.A-006
SKPL-ADAflorist.A-019	DPPL-ADAflorist.A-006
SKPL-ADAflorist.A-020	DPPL-ADAflorist.A-001
SKPL-ADAflorist.A-021	
SKPL-ADAflorist.A-022	
SKPL-ADAflorist.A-023	


