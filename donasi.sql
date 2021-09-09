-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 25, 2020 at 06:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `hak_akses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_donasi`
--

CREATE TABLE `data_donasi` (
  `id_donasi` int(11) NOT NULL,
  `nama_donasi` text NOT NULL,
  `kategori_donasi` text NOT NULL,
  `target_donasi` text NOT NULL,
  `perolehan_donasi` text NOT NULL,
  `masa_donasi` date NOT NULL,
  `deskripsi_donasi` text NOT NULL,
  `tgl_donasi` date NOT NULL,
  `masa_aktif` int(3) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_donasi`
--

INSERT INTO `data_donasi` (`id_donasi`, `nama_donasi`, `kategori_donasi`, `target_donasi`, `perolehan_donasi`, `masa_donasi`, `deskripsi_donasi`, `tgl_donasi`, `masa_aktif`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(1, 'korban bencana tsunami banten & lampung', 'Bencana Alam', '10000000', '190000', '2020-02-24', 'Tsunami menerjang Banten, Lampung, dan sekitarnya, malam (22/12). Sebabkan puluhan jiwa meninggal dan ratusan luka-luka. ', '2019-03-05', -306, 'front/images/donasi/1.jpg', 'front/images/donasi/806456_720.jpg', 'front/images/donasi/b59ddcac-961a-4b6e-a50f-8a7ed7d1bdca.jpg', 'front/images/donasi/bencana-alam-terjang-3-kabupaten-9-705-warga-aceh-jadi-korban-gDUhFbrS5M.jpg', 'front/images/donasi/tohoku-gempa-dan-tsunami-2011_20171226_155443.jpg'),
(2, 'Wujudkan Impian Ani Bersekolah', 'pendidikan', '50000000', '317280', '2019-12-21', 'Ani Maulidah (10), merupakan salah satu anak kurang beruntung itu. Sejak ditinggal ayahnya ketika ia masih kecil, keluarganya hidup dalam kesulitan.  Walau hidupnya sulit, Ani memiliki tekad yang kuat untuk menjalani hidupnya. Dengan motivasi untuk membahagiakan orang tuanya, serta mewujudkan mimpinya agar orang tuanya bangga dengan apa yang ia dapat raih.', '2019-03-12', -371, 'front/images/donasi/20171207tersisihkan-anak-tki-ilegal-berhak-sekolah_20171207_112412.jpg', 'front/images/donasi/555dc2f40423bdfc308b4567.jpeg', 'front/images/donasi/anak-tki.jpg', 'front/images/donasi/hipwee-Sekolah-9-750x422.jpg', 'front/images/donasi/perumnas-balaroa-gempa_20181001_083821.jpg'),
(3, 'Bantu Renovasi Mesjid Jami AT-TAQWA Kami ', 'Rumah Ibadah', '300000000', '155317', '2020-04-28', 'Kami memohon kepada Alloh Swt , dan hakikatnya dari bapak/ibu untuk membantu kami merenovasi mesjid utama kami (AT-TAQWA) di kampung kami agar proses beribadah kami bisa nyaman dan mendapat amal yang bermanfaat untuk urusan dunia & akhirat . Sementara kami membutuhkan dana sekitar Rp. 300.000.000 (Tiga Ratus Juta Rupiah) Untuk Memulai Proses Renovasi/pembangunan ulang dan insya alloh untuk bantuan yang anda berikan hanya alloh yang bisa membalas nya dengan amal baik dan amal jariyah yang insya alloh mengalir sampe akhirat nanti karena bantuan berapapun juga untuk rumah Alloh akan panjang dan bermanfaat untuk selamanya . Aamiin', '2019-03-14', -242, 'front/images/donasi/31_29526_1493805004_378839_f.jpg', 'front/images/donasi/31_16980_1462171386_185311_f.png', 'front/images/donasi/images.jpg', 'front/images/donasi/ewew.jpg', 'front/images/donasi/thumbnail9-5be8261aa530d.jpg'),
(24, 'Bantu kami menjadikan pantai Tuban indah & bersih ', 'Lingkungan ', '20000000', '0', '2020-01-04', 'Yuk, generasi muda, peduli dengan kebersihian pantai Tuban dan tentu saja hewan2 laut dan habitatnya yang rusak karena sampah yang begitu banyak. ', '2019-03-15', -357, 'front/images/donasi/sukarelawan-membersihkan-sampah-di-pantai.jpg', 'front/images/donasi/karyawan-dan-tamu-discovery-kartika-plaza-hotel-bersihkan-sampah-di-pantai-kuta_20160129_223914.jpg', 'front/images/donasi/img_2861-fileminimizer.jpg', 'front/images/donasi/1501080IMG-20160717-WA0004780x390.jpg', 'front/images/donasi/091696600_1514139260-KKP2.jpg'),
(25, 'Bantu sofia anak 5 tahun untuk memecah kesunyian ', 'Difabel', '65000000', '0', '2020-02-23', 'hai..nama saya sofia  saya berumur 5 tahun, saya anak yang aktif dan sangat lincah, tapi saya memiliki keterbatasan untuk mendengar suara dan bunyi.  ayah dan ibu saya belum bisa membelikan saya alat bantu dengar dikarenakan ayah saya bekerja serabutan sejak beliau mengalami kecelakaan kerja, ibu saya juga tidak bisa bekerja optimal karena harus merawat saya dan adik kecil saya.  mohon untuk para donatur bantulah saya mewujudkan harapan kecil melalui alat bantu dengar untuk bisa mendengar suara dan bunyi dari ciptaan Tuhan yang lain..  mohon dukungan dan doa untuk saya.  semoga kalian selalu diberkati Tuhan, amin  terimakasih', '2019-03-15', -307, 'front/images/donasi/0f6dacff-a900-48c4-b139-88f4d5db0610.jpg', 'front/images/donasi/', 'front/images/donasi/', 'front/images/donasi/', 'front/images/donasi/'),
(28, 'Gerakan Infaq Beras Yatim & Penghafal Al-Qur\'an ', 'Sosial', '500000000', '0', '2020-09-01', 'Perkenalkan Kami dari Gerkan Infaq Beras.  Berawal dari Kunjungan Guru Kami Ustadz Luqmanul Hakim ke salah satu pondok di daerah Pontianak. Beliau mendapati beras yang tidak layak untuk dikonsumsi anak-anak sekelas penghafal Al-Qur\'an.  Berasnya banyak yang patah, bau, berkutu, dan kotor. Hal ini tentu membuat Kita sangat prihatin. Dimana Para Santri terpilih yang diamanahi menghafal Al-Qur\'an namun tidak disupport dengan makanan yang layak.', '2019-03-25', -116, 'front/images/donasi/4ca0f6b2-80f3-417c-a3f8-ae86ed1f42a5.jpg', 'front/images/donasi/index.jpg', 'front/images/donasi/anak_gaza__3_.jpg', 'front/images/donasi/menghafal-quran.jpg', 'front/images/donasi/Ahmad yasin.jpg'),
(29, 'R80 Untuk Indonesia', 'Produk & Inovasi', '750000000', '75419', '2021-03-01', 'Kita punya sejarah patungan beli pesawat ?untuk Indonesia, Dakota RI-001 Seulawah! Sekarang panggilan itu kembali, yuk patungan pesawat R80 untuk Indonesia! ', '2019-03-23', 65, 'front/images/donasi/31_38661_1503487260_804923_f.png', 'front/images/donasi/mantan-presiden-bj-habibie-dan-replika-pesawat-regio-prop-80-r80_20170211_072240.jpg', 'front/images/donasi/6befd76cb9c8e8e4078c85dbad1b9cb49a814b45.jpeg', 'front/images/donasi/81c9fd5abe86629053caaf61bdb5cf2a53588b6e.jpeg', 'front/images/donasi/2399735001.jpeg'),
(30, 'Bantu wujudkan yatim Indonesia Untuk Indonesia berprestasi ', 'Panti Asuhan', '100000000', '0', '2020-02-06', 'Adapun bantuan yang diberikan kepada lembaga sosial pra sejahtera berupa pembinaan management, program dan bantuan biaya operasional yayasan atau berupa sarana penunjang pembelajaran untuk anak.  Semoga langkah yang kami lakukan mendapatkan ridho dari Alloh SWT serta mendapatkan dukungan penuh dari masyarakat Indonesia khususnya demi terwujudnya penerus bangsa yang berprestasi, mandiri dan berkarakter.', '2019-03-25', -324, 'front/images/donasi/96c0240c311d032c2ac50d03a38adbb109dea6e0.png', 'front/images/donasi/619a1adc587381459fc02f2b44582c43384449de.png', 'front/images/donasi/img_1237.jpg', 'front/images/donasi/IMG_9566-e1476620697563.jpg.webp', 'front/images/donasi/cf33376bd9e432f8c662b9b11fb360de9783c945.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `data_feedback`
--

CREATE TABLE `data_feedback` (
  `id_feedback` int(11) NOT NULL,
  `nama_feedback` text NOT NULL,
  `no_telp_feedback` text NOT NULL,
  `pesan_feedback` text NOT NULL,
  `tgl_feedback` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_feedback`
--

INSERT INTO `data_feedback` (`id_feedback`, `nama_feedback`, `no_telp_feedback`, `pesan_feedback`, `tgl_feedback`) VALUES
(1, 'Steven Hernanda', '087777565', 'ditingkatkan lagi pelayanannya', '2019-03-05'),
(2, 'KanzuL aUfa', '0877667667667', 'semoga lebih baik lagi', '2019-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_donasi` int(11) NOT NULL,
  `nama_donatur` text NOT NULL,
  `no_telp_donatur` text NOT NULL,
  `pesan_donatur` text NOT NULL,
  `jumlah_donasi` int(11) NOT NULL,
  `kode_transaksi` text NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `bayar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`id_transaksi`, `id_donasi`, `nama_donatur`, `no_telp_donatur`, `pesan_donatur`, `jumlah_donasi`, `kode_transaksi`, `tgl_transaksi`, `bayar`) VALUES
(2, 1, 'Oktavian Putra', '08121244141', 'semoga membantu', 100000, 'LMI050867', '2019-03-05', 1),
(3, 2, 'Rizky Wahyu', '08736363636', 'saya iba', 50000, 'LMI120144', '2019-03-12', 0),
(4, 2, 'mdvmdvmdm', '525252', 'vdsvvdsssv', 90000, 'LMI120331', '2019-03-12', 1),
(5, 2, 'Aries April', 'nliihihoh', 'cdcd\'cdc', 90000, 'LMI120157', '2019-03-12', 1),
(6, 2, 'Aries April', 'nliihihoh', 'cdcd\'cdc', 90000, 'LMI120317', '2019-03-12', 0),
(7, 2, 'Aries Zuanedi', '0897777777', 'saya terharu', 9000, 'LMI120491', '2019-03-12', 1),
(8, 2, 'kanzul aufa', '08777777', 'asasasa', 60000, 'LMI120291', '2019-03-12', 0),
(9, 2, 'ckdcwklknwk', '890898', 'knkn', 341341, 'LMI230823', '2019-03-23', 0),
(10, 1, 'aufa', '0877777777', 'bkbbbbb', 90000, 'LMI23073', '2019-03-23', 1),
(12, 2, 'twst', '87777', 'nnnnkn', 98000, 'LMI230896', '2019-03-23', 1),
(14, 3, 'dsfdf1', 'ffefefe', 'k;m', 32434, 'LMI230452', '2019-03-23', 0),
(15, 2, 'xsxsn', '908098', 'nnx', 100000, 'LMI250831', '2019-03-25', 0),
(16, 24, 'Jeremy Andreas', '082123232323', 'semoga membantu', 80000, 'LMI280874', '2019-03-28', 0),
(17, 28, 'Amir Kusnanda', '08999999999', 'saya mau bantu', 60000, 'LMI040818', '2019-04-04', 0),
(18, 3, 'risfani bimanrata', '086667575755', 'semoga terbantu dan bermanfaat', 75000, 'LMI130703', '2019-04-13', 1),
(19, 25, 'Dwi', '08121122121', 'qwerty', 50000, 'LMI090675', '2019-04-09', 0),
(21, 2, 'wdwd', '89089889', 'klnklnklnkn', 30280, 'LMI090707', '2019-04-09', 1),
(22, 28, 'fewfewfw', '324242', 'fwfwewe', 50722, 'LMI090884', '2019-04-09', 0),
(23, 2, 'kanzul', '0877777777', 'nxksxs', 50570, 'LMI090824', '2019-04-09', 0),
(24, 2, 'sawil', '085656565', 'kkkkk', 20202, 'LMI090202', '2019-04-09', 0),
(25, 25, 'Fany Ahmaf', '08767776676', 'saya terharu', 60584, 'LMI090584', '2019-04-09', 0),
(26, 29, 'Armando Diego', '08212221131', 'maju terus', 75419, 'LMI110290', '2019-04-11', 1),
(27, 3, 'Steven Irwin', '0863637373', 'saya bantu', 80317, 'LMI160249', '2019-04-16', 1),
(28, 1, 'Risfani Aufa', '08765566656', 'semoga bermfaat', 100162, 'LMI160257', '2019-04-16', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_donasi`
--
ALTER TABLE `data_donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `data_feedback`
--
ALTER TABLE `data_feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_donasi`
--
ALTER TABLE `data_donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `data_feedback`
--
ALTER TABLE `data_feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
