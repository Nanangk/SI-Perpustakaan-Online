-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2019 pada 18.31
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaanku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(2, 'farhan', 'farhan@gmail.com', '12345'),
(3, 'Nanang Tamvan', '07091997', 'qwerty');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `tahun` int(4) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `fisik` varchar(30) NOT NULL,
  `stok` int(10) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `tahun`, `genre`, `fisik`, `stok`, `lokasi`, `deskripsi`, `foto`) VALUES
(11, 'HibernateNotesForProfessionals_01', 'goalkicker.com', 2014, 'edukatif', 'tersedia', 2, 'Perpustakaan Daerah Mataram', 'This Hibernate Notes for Professionals book is compiled from Stack Overflow\r\nDocumentation, the content is written by the beautiful people at Stack Overflow.\r\nText content is released under Creative Commons BY-SA, see credits at the end\r\nof this book whom contributed to the various chapters. Images may be copyright\r\nof their respective owners unless otherwise specified\r\n', 'HibernateNotesForProfessionals_01.jpg'),
(12, 'HaskellNotesForProfessionals_01', 'goalkicker.com', 2013, 'ilmiah', 'tersedia', 1, 'Perpustakaan Daerah Mataram', 'This Haskell Notes for Professionals book is compiled from Stack Overflow\r\nDocumentation, the content is written by the beautiful people at Stack Overflow.\r\nText content is released under Creative Commons BY-SA, see credits at the end\r\nof this book whom contributed to the various chapters. Images may be copyright\r\nof their respective owners unless otherwise specified', 'HaskellNotesForProfessionals_01.jpg'),
(23, 'TES TES', 'NANANG', 2022, 'Dan Lain-lain', 'tersedia', 12, 'sddfdf', 'dsdsdsdsd', 'tuntunan sholat.jpg'),
(24, 'Allah is my goal versi 2', 'NANANG', 2020, 'Karya Umum', 'tersedia', 20, 'RAK 009', ' Buku untuk menjadi lebih baik', '54983-allah-swt-is-my-goal-vax-365x0.jpg'),
(25, 'Dalam Sketsa', 'MALIK ADAM2020', 2001, 'Karya Umum', 'tersedia', 2, 'RAK 001', 'buku tentang sketsa yang keren', '107827_f.jpg'),
(26, '9 Keajaiban 9 Bulan Kehamilan', 'zafran', 2010, 'Filsafat dan Psikologi', 'tersedia', 2, 'RAK 009 ', 'Buku tentang Keajaiban Kehamilan Cocok untuk ibu hamil, ibu hamil ya bukan remaja hamil', '6826145_f7261bc7-1e9e-446f-9907-8371675e905a_1200_1774.jpg'),
(27, 'Cewek Susah Move On', 'Senorita', 2019, 'Ilmu-ilmu Sosial', 'tersedia', 5, 'RAK 008', 'Membahas kenapa cewek susah move on', '20181028_135554_0001.png'),
(28, 'Jangan Salahkan Cinta', 'NANANG', 2017, 'Kesusasteraan', 'tersedia', 1, 'RAK 001', 'Cinta gak salah kamunya aja yang gak pandai memilih orang buat jatuh cinta, jadinya sakit kan', 'images.jpg'),
(29, 'HOPE versi', 'bayu', 2015, 'Karya Umum', 'tersedia', 3, 'rak 007', 'buku ttg harapan', '100385_f.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(30) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `hari_tgl` date NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `jumlah_peserta` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `poster` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `nama`, `hari_tgl`, `lokasi`, `jumlah_peserta`, `deskripsi`, `poster`) VALUES
(1, 'lomba poster', '2018-08-31', 'UNIVERSITAS Mataram', 50, '\"\"\"Peserta dalam lomba ini adalah Mahasiswa atau Mahasiswi di Indonesia\r\nPeserta dalam lomba dilakukan dengan Tim/Kelompok\r\nTim atau kelompok yang mengikuti Diponegoro Business Case Competition 2018 di Undip ini batas maksimalnya adalah 3 mahasiswa dari kampus yang sama\r\nPeserta wajib membayar biaya pendaftaran\r\nBiaya pendaftaran dalam lomba ini adalah 180 K/Karya\r\nKarya yang dikirimkan adalah karya asli\r\nNo plagiat\r\nKarya yang dikirimkan dalam Diponegoro Business Case Competition 2018 di Undip juga sesuai dengan tema dalam lomba dan fokus utama kajian yang dilakukan\r\nPendaftaran akhir dalam kompetisi ini sampai dengan tanggal 30 Juni 2018\"\"\"', '107827_f.jpg'),
(2, 'Lomba Desain Poster Nasional', '2018-07-20', 'UNIVERSITAS PENDIDIKAN INDONESIA', 60, '\"Perlombaan dibuka untuk umum.\r\nDesain bebas dan karya yang dibuat harus sesuai dengan tema yang ditentukan panitia.\r\nPoster yang diikutkan dalam lomba harus orisinil atau belum pernah dilombakan maupun\r\nDesain poster haruslah sesuai dengan tema : â€œTourism to Save Earthâ€\r\nPoster dibuat dalam ukuran A3 (42 x 29,7 cm).\r\nDesain poster dibuat dalam format JPG, BMP, GIF, TIFF, dengan resolusi minimal 300 dpi dengan menggunakan aplikasi/software bebas.\r\nKarya poster tidak mengandung unsur SARA\r\nKarya juga tidak bertentangan dengan norma yang berlaku.\r\nSetiap karya yang dikumpulkan wajib memberikan deskripsi singkat mengenai karya tersebut minimal 150 kata.\r\nKarya yang dikumpulkan menjadi hak panitia yang nantinya akan disebarkan ke masyarakat melalui lembaga-lembaga terkait.\r\nBiaya Pendaftaran dalam lomba ini adalah R 30.000/karya\r\nPendafataran: Dibuka hingga Tanggal 18 April 2018\r\nSedangkan Batas Pengumpulan dalam lomba sampai dengan tanggal 19 April 2018 (Poster A3 dikirim via email)\r\nPengumuman dalam lomba ini akan dilakukan pada tanggal 22 April 2018\"', 'Lomba Desain 2018.jpg'),
(3, 'Lomba Essay Nasional', '2018-12-01', 'FMIPA UNS', 50, '\"Peserta dalam lomba ini adalah Tingkat Mahasiswa\r\nMahasiswa yang berasal dari PTN ataupun PTS di Indonesia\r\nMahasiswa pendaftar dalam kompetisi menulis ini sendiri adalah mahasiswa D3 atau S1 di Indonesia\r\nKarya yang dijaukan dalam Lomba Essay Nasional PHARMACOPE UNS 2018 adalah karya asli\r\nNo plagiat\r\nKarya juga tidak pernah dipublikasikan atau menjadi juara dalam lomba lainnya\r\nPendaftar dalam lomba ini bisa melakukan pendaftaran dengan tiga gelombang\r\nRincian dalam gelombang tersebut diantaranya Gelombang I : 20 Mei â€“ 16 Juni 2018, Gelombang II : 17 Juni â€“ 16 Juli 2018, dan Gelombang III : 17 Juli â€“ 16 Agustus 2018\r\nPenjurian dalam Lomba Essay Nasional PHARMACOPE UNS 2018 ini dilakukan pada tanggal 17 Agustus - 27 Agustus 2018\r\nPengumuman Juara : 28 Agustus 2018 \r\nSedangkan untuk Konfirmasi Kedatangan APC pada tanggal 29 Agustus â€“ 31 Agustus 2018\r\nPeserta wajib membayar biaya pendaftaran\r\nAdapun Biaya Registrasi pada Gel. I : Rp. 50.000, pada Gel. II : Rp. 55.000, dan pada Gel. III : Rp. 65.000\r\nKeputusan dewan juri tidak dapat diganggu gugat\"', 'lomba 2018 terbaru.jpg'),
(4, 'Lomba Essay dan Desain Poster Nasional', '2018-02-21', 'Universitas Mataram', 85, '\"Peserta dalam event ini terbuka untuk pelajar dan mahasiswa\r\nPelajar dan Mahasiswa terbut bisa berasal dari sekolah atau kampus negri dan swasta di Indonesia\r\nPeserta membuktikan diri dengan KTM ataupun Kartu Siswa yang masih aktif\r\nPendaftar juga dalam event ini hanya terbuka untuk usia 16 sampai dengan usia maksimlanya adalah 27 Tahun\r\nKarya yang diikutsertakan dalam Lomba Essay dan Desain Poster Nasional 2018 di Universitas Mataram ini adalah karya asli\r\nNo plagiat\r\nKarya dalam lomba juga sesuai dengan tema ataupun sub tema dalam lomba\r\nPendaftaran dalam lomba ini untuk pengumpulan naskah  atau poster dibagi dalam 2 gelombang\r\nGEL I  dilakukan pendaftaran pada tanggal 1 sampai dengan tanggal 14 Juli 2018 sedangkan untuk GEL 2 pendaftaran dibuka pada tanggal 15 sampai dengan tanggal 31 Juli 2018\r\nKeputusan dewan juri dalam lomba tidak dapat dianggu gugat\r\nPeserta wajib mengisi formulir pendaftaran\"', 'lomba 2018 terbaru (1).jpg'),
(5, 'Lomba poster nasional', '2018-03-10', 'UNIVERSITAS MATARAM', 65, '\"\"Peserta lomba debat intelektual FITION 2018 merupakan Mahasiswa/i aktif yang berasal dari Perguruan Tinggi Negeri/Swasta Se-Indonesia.\r\nPeserta lomba debat merupakan Mahasiswa/i jenjang D3/S1 maksimal semester delapan.\r\nPerlombaan ini diselenggarakan untuk tim\r\nDimana dalam Satu tim debat terdiri dari 3 orang.\r\nSatu tim debat berasal dari program studi yang berbeda atau dari satu program studi yang sama, namun masih dalam satu perguruan tinggi yang sama.\r\nSetiap tim pendaftar wajib mengirimkan satu naskah essay untuk tahap seleksi 16 besar, yang akan bertanding mengikuti babak penyisihan di FISIP Universitas Riau.\r\nMelampirkan Curiculum Vitae (CV) masing-masing anggota tim dengan syarat mencantumkan\r\nnomor handphone aktif yang dapat dihubungi.\r\nMelampirkan scan Kartu Tanda Mahasiswa (KTM) masing-masing anggota tim.\r\nMelampirkan scan resi pembayaran.\r\nSetiap tim hanya diperbolehkan mengirimkan 1 naskah essay.\r\nPembayaran biaya pendaftaran dan pengiriman essay dapat dilakukan dalam dua gelombang, dimana untuk Gelombang 1 : 26 Nov 2017 â€“ 31 Des 2018 â†’Rp.100.000/Team dan pada Gelombang 2 : 01 Jan 2018 â€“ 14 Jan 2018 â†’ Rp.120.000/Team\r\nBagi setiap tim yang dinyatakan lolos seleksi essay, diwajibkan untuk membayar uang sebesar Rp.550.000/orang dengan rincian sebagai berikut: Rp. 350.000 : Akomodasi (penginapan, makan dan transportasi) dan Rp. 200.000 : Field trip\"\"', '54983-allah-swt-is-my-goal-vax-365x0.jpg'),
(6, 'Olimpiade Pelajar SMP/Sederajat ', '2018-01-09', 'SMAN 5 Surabaya', 70, '\"Olimpiade tingkat SMP/se-derajat\r\nPelajar tersebut khususnya adalah pelajar yang ada di Pulau Jawa yang ingin menambah pengalaman di bidang akademis\r\nPendaftaran dalam agenda ini dilakukan pada tanggal 1 Maret 2018 sampai dengan Tanggal 27 April 2018\r\nPelanksanaan dan Pilihan dalam Mata Pelajaranannya, pada tanggal 28 April 2018 adalah Matematika-Fisika, 29 April 2018 : Bahasa Inggris, 5 Mei 2018 : Bahasa Indonesia - Biologi , sedangkan pada tanggal 6 Mei 2018 : Final semua mapel\r\nSatu tim beranggotakan 2 orang dari sekolah yang sama \r\nBiaya pendaftaran satu tim Rp. 120.000,- \r\nMasing-masing anggota membawa 2 fotocopy kartu pelajar\r\nPendfatar dalam lomba juga mengirimkan 2 foto 3x4 berwarna\"', 'lomba 2018 terbaru (3).jpg'),
(7, 'Stock Competition & Business Case Competition 2018', '2018-06-20', 'Sampoerna University', 0, '\"Hallo Indonesia Young Investor!. Sampoerna Young Investor Club (SYIC) presents you a very competitive national trading competition named [PROSPECT: Professional Sampoerna University Stock Competition]\r\n\r\nThis annual national trading competition allows you to use your analysis and critical thinking skills within 2 type of competitions:\r\n\r\nStock Competition\r\nBusiness Case Competition\r\n\r\n\r\nTrading Competition\r\n\r\n1. The 1st winner: IDR 4,000,000 + RDN 1,000,000 + Certificate + Medal\r\n2. The 2nd place: IDR 3,000,000 + RDN 1,000,000 + Certificate + Medal\r\n3. The 3rd place:IDR 1,500,000 + RDN 1,000,000 + Certificate + Medal\r\n4. The 4th place: IDR 1,000,000 + RDN 7,50,000 + Certificate + Medal\r\n5. The 5th - 10th place: Certificate + Merchandise + Medal\r\n\r\nBusiness Case Competition\r\n\r\n1. The 1st winner: IDR 8,000,000 + Trophy + Certificate \r\n2. The 2nd place: IDR 6,000,000 + Trophy + Certificate\r\n3. The 3rd place: \r\nIDR 4,000,000 + Trophy + certificate .\"', 'lomba 2018 terbaru (4).jpg'),
(9, 'Lomba Akuntansi Challenge Nasional 2018 di UNIB', '2018-02-10', 'UNIB', 0, 'Syarat dan Ketentuan Lomba Akuntansi Challenge Nasional 2018 di UNIB\r\n\r\nPendaftar dalam kompetisi diperuntukan untuk mahasiswa dan mahasiswi di Indonesia, baik dari PTN dan PTS\r\nPendaftaran dalam lomba ini dapat dilakukan pada tanggal 2 Februari 2018 sampai dengan batas akhir pendaftarannya sampai dengan tanggal 17 April 2017\r\nPeserta dalam lomba ini dilakukan dengan Tim/Kelompok\r\nPeserta pendaftar dalam Lomba Akuntansi Challenge Nasional 2018 di UNIB ini haruslah membayar biaya pendaftaran\r\nUntuk biaya pendaftaran dalam lomba ini normalnya adalah 100 Rb dan untuk yang berhasil menjadi 15 besar nilai tertinggi hanya cukup membayar uang pendaftaran sebesar 65 Rb\r\nPeserta dalam lomba ini juga diharuskan mengisi formulir pendaftaran\r\nFormulir pendaftaran tersebut bisa di klik disini\r\nAdapun formulir pendaftaran, slip uang pendaftaran lalu dikirim ke email himasi.feb.unib@gmail.com with subject: NAC_Registration2_UniversityName\r\nHadiah Lomba Akuntansi Challenge Nasional 2018 di UNIB\r\n\r\nJuara 1 dalam Lomba Akuntansi Challenge Nasional 2018 di UNIB ini akan mendapatkan hadiah berupa Uang Tunai Rp 5.000.000 + Trophy + Certificate\r\nJuara 2 dalam Lomba Akuntansi Challenge Nasional 2018 di UNIB ini akan mendapatkan hadiah berupa Uang Tunai Rp 3.000.000 + Trophy + Certificate\r\nJuara 3 dalam Lomba Akuntansi Challenge Nasional 2018 di UNIB ini akan mendapatkan hadiah berupa Uang Tunai Rp 2.000.000 + Trophy + Certificate\r\nJuara 4 dalam Lomba Akuntansi Challenge Nasional 2018 di UNIB ini akan mendapatkan hadiah berupa Uang Tunai Rp 1.000.000 + Trophy + Certificate\r\n\r\nDemikianlah informasi mengenai adanya Lomba Akuntansi Challenge Nasional 2018 di UNIB. Adapun syarat dan ketentuan lebih engkpanya jika masih kebingungan dengan informasi loma terbaru ini silahkan dapat menghubungi pihak penyelenggara dalam lomba, dengan alamat hp dan id line panitianya adalah sebagai berikut;\r\n\r\nNining || 081532279836 / Line: niningpertiwy\r\nBimo || 089654496486 / Line: bimoas06\r\nLibertus || 082352304479 / Line: libertferry993', 'lomba 2018 terbaru (5).jpg'),
(10, 'Lomba Poster', '2020-02-03', 'Universitas Mataram', 80, 'Lomba poster bergengsi', 'lombaposter.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `nama user` varchar(30) NOT NULL,
  `judul buku` varchar(30) NOT NULL,
  `tgl_pinjam` varchar(30) NOT NULL,
  `tgl_kembali` varchar(30) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_user`, `id_buku`, `nama user`, `judul buku`, `tgl_pinjam`, `tgl_kembali`, `kode`, `status`) VALUES
(28, 18, 24, 'Nanang Kasim', 'Allah is my goal', '26 Jul 2019', '01 Aug 2019', 'NKTIB9PT', 'belum diambil'),
(29, 19, 9, 'nank', 'Agribisnis Tanaman Sayuran', '27 Jul 2019', '02 Aug 2019', '5YIZN86N', 'belum diambil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kelahiran` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `pekerjaan`, `email`, `kelahiran`, `nohp`, `password`, `foto`) VALUES
(17, 'kyoshiro', 'Jonggat lombok tengah', 'nanang@gmail.com', '12345', 'lombok tengah', '087750037215', 'qwertyuiop', '77655.JPG'),
(18, 'Nanang Kasim', 'Jln. Kartanegara No.13', 'Nanangk.ti16@gmail.com', 'F1D016063', 'Lombok Tengah', '087750037215', 'qwerty', '13423552_976732302447483_1713343447_n.jpg'),
(19, 'nank', 'Jln. Kartanegara No.13', 'Nanangk.ti16@gmail.com', '999', 'nanangk.ti16@gmail.com', '087750037215', 'qwerty', 'axxcxc.PNG'),
(20, 'nanang', 'sukarara', 'programmer', 'nanang@richmedia.id', 'mataram', '087750037215', 'qwerty', 'WhatsApp Image 2019-12-18 at 17.04.43.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
