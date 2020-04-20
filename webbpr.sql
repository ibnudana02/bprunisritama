-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 02:35 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbpr`
--
CREATE DATABASE IF NOT EXISTS `webbpr` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webbpr`;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` varchar(64) NOT NULL,
  `id_kategori` varchar(64) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` varchar(30) DEFAULT NULL,
  `update_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul`, `slug`, `isi`, `image`, `penulis`, `created_on`, `update_by`, `update_on`) VALUES
('5e96be20d03e5', '5e93c1fd87d92', 'peringati hut ke 28 bpr unisritama', 'peringati-hut-ke-28-bpr-unisritama', '&lt;p&gt;Yaumil milad &lt;a href=&quot;https://www.facebook.com/unisritama?__tn__=%2CdK-R-R&amp;amp;eid=ARB4VKDTr0trZz_MTdLGfl-kGFhmLggUXU9qmFTESij8l_WHjiO4VzCwp6pqv3Yyc_EVv-Qa0GhO0f_Y&amp;amp;fref=mentions&quot;&gt;Bpr Unisritama&lt;/a&gt;.. semoga menjadi bank syariah secepatnya dan terus maju dan berkembang menjadi lembaga perbankan yg membantu masyarakat.&lt;/p&gt;', '5e96be20d03e5.jpg', 'IBNU WARDANA', '2020-04-15 07:56:16', '', '2020-04-15 07:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` varchar(64) NOT NULL,
  `id` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `alias` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `id`, `jabatan`, `alias`) VALUES
('5e8a9f9db4d01', 6, 'KEPALA BAGIAN OPERASIONAL', 'KABAG OPERASIONAL'),
('5e8aa1b80b473', 14, 'ADMIN KREDIT', 'ADM KRD'),
('5e8aa1c2538c5', 10, 'IT', 'IT'),
('5e8aa1cbcdf6e', 4, 'DIREKTUR', 'DIR'),
('5e8aa1d544c2f', 3, 'DIREKTUR UTAMA', 'DIRUT'),
('5e8aa1f5b2650', 5, 'PEJABAT EKSEKUTIF AUDIT INTERNAL', 'PEAI'),
('5e8aa20df164a', 8, 'UMUM dan PERSONALIA', 'HRD'),
('5e8aa238b73aa', 11, 'TELLER', 'TLR'),
('5e8aa2449044e', 12, 'CUSTOMER SERVICE', 'CS'),
('5e8aa25327a30', 1, 'KOMISARIS UTAMA', 'KOMUT'),
('5e8aa25cc4161', 2, 'KOMISARIS', 'KOM'),
('5e8aa26537770', 9, 'ACCOUNTING', 'ACC'),
('5e8aa283e6616', 15, 'MARKETING KREDIT', 'AO KRD'),
('5e8aa28ccfd35', 16, 'MARKETING DANA', 'AO DANA'),
('5e8aa2a9f2369', 17, 'ANALIS KREDIT', 'ANALIS KRD'),
('5e8aa2be6886c', 7, 'KEPALA SEKSI BISNIS', 'KASI BISNIS'),
('5e8aa2cf02ada', 13, 'DRIVER', 'DRV'),
('5e8c290177f9b', 0, 'PEJABAT EKSEKUTIF MANAJAMEN RISIKO', 'MENRISK'),
('5e8c2ec2e30f1', 0, 'SECURITY', 'SCR'),
('5e8c2f1fabba4', 0, 'OFFICE BOY', 'OB'),
('5e8c2f4c9dfa3', 0, 'KEPALA KANTOR KAS', 'K3');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

DROP TABLE IF EXISTS `jenis`;
CREATE TABLE IF NOT EXISTS `jenis` (
  `id_jenis` varchar(64) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`) VALUES
('5e95446379a58', 'PPOB'),
('5e95457d76d01', 'PMB'),
('5e954595bcb46', 'Deposito'),
('5e95459d30794', 'Kredit'),
('5e9545a2ecf3e', 'Tabungan');

-- --------------------------------------------------------

--
-- Table structure for table `kantor`
--

DROP TABLE IF EXISTS `kantor`;
CREATE TABLE IF NOT EXISTS `kantor` (
  `id_kantor` int(11) NOT NULL,
  `nama_kantor` varchar(255) NOT NULL,
  `lat_map` float(10,6) NOT NULL,
  `lng_map` float(10,6) NOT NULL,
  `lat_view` float(10,6) NOT NULL,
  `lng_view` float(10,6) NOT NULL,
  `zoom` int(2) NOT NULL,
  PRIMARY KEY (`id_kantor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantor`
--

INSERT INTO `kantor` (`id_kantor`, `nama_kantor`, `lat_map`, `lng_map`, `lat_view`, `lng_view`, `zoom`) VALUES
(1, 'KANTOR PUSAT BANK UNISRITAMA', 0.424879, 101.435684, 0.424445, 101.435654, 19),
(2, 'KANTOR PELAYANAN KAS UIR', 0.448182, 101.453583, 0.447211, 101.453636, 16);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` varchar(64) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_by` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `link`, `created_by`, `created_on`) VALUES
('5e856667690a3', 'Berita Terbaru', '', 'IBNU WARDANA', '2020-04-02 04:13:27'),
('5e856673ceff9', 'Fasilitas Dan Layanan', '', 'IBNU WARDANA', '2020-04-02 04:13:39'),
('5e85667f8991d', 'Profil Perusahaan', 'tentang/profil', 'IBNU WARDANA', '2020-04-09 03:54:24'),
('5e93c1fd87d92', 'HUT', '', 'IBNU WARDANA', '2020-04-13 01:35:57'),
('5e965d85ca586', 'produk', '', 'IBNU WARDANA', '2020-04-15 01:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

DROP TABLE IF EXISTS `layanan`;
CREATE TABLE IF NOT EXISTS `layanan` (
  `id_layanan` varchar(64) NOT NULL,
  `layanan` varchar(64) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `layanan`, `deskripsi`) VALUES
('5e97b2324dc8f', 'pickup service', 'layanan antar jemput setoran dan penarikan nasabah serta aplikasi kredit.');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` varchar(64) NOT NULL,
  `job_id` int(11) NOT NULL,
  `parent_job` varchar(64) NOT NULL,
  `tag` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_jabatan` varchar(64) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `job_id`, `parent_job`, `tag`, `nama`, `id_jabatan`) VALUES
('5e8c208114add', 1, '5e8d376097dde', 'Dewan Komisaris', 'RIKA PUSPA AYU', '5e8aa25327a30'),
('5e8c20b6ab62b', 2, '5e8c208114add', 'Dewan Komisaris', 'AZWIRMAN', '5e8aa25cc4161'),
('5e8c20c510ff5', 3, '5e8c20b6ab62b', 'Direksi', 'NANCY TAHAR', '5e8aa1d544c2f'),
('5e8c20ceb1416', 0, '5e8c20c510ff5', 'Direksi', 'PARHAN', '5e8aa1cbcdf6e'),
('5e8c20fddbda8', 0, '5e8c20ceb1416', 'Department', 'DEVITA SARI', '5e8aa1f5b2650'),
('5e8c291741b01', 0, '5e8c20ceb1416', 'Department', 'SUZI SASWANTI', '5e8c290177f9b'),
('5e8c293377823', 0, '5e8c20ceb1416', 'Department', 'NELDA YANTI', '5e8a9f9db4d01'),
('5e8c298834108', 0, '5e8c20ceb1416', 'Department', 'HAMANDA HADI SAPUTRA', '5e8aa2be6886c'),
('5e8c2998856b4', 0, '5e8c293377823', 'Staff', 'USNIDAR', '5e8aa20df164a'),
('5e8c29a1b36b4', 0, '5e8c293377823', 'Staff', 'MAISARA', '5e8aa26537770'),
('5e8c29b83460c', 0, '5e8c293377823', 'Staff', 'M. IBNU WARDANA', '5e8aa1c2538c5'),
('5e8c2c4cdb233', 0, '5e8c293377823', 'Staff', 'OKTAVIANTI ALISA', '5e8aa2449044e'),
('5e8c2c5a0bd1a', 0, '5e8c293377823', 'Staff', 'RIA INNEKE', '5e8aa238b73aa'),
('5e8c2d8c61446', 0, '5e8c293377823', 'Staff', 'YULIANTI AHSYAR', '5e8aa238b73aa'),
('5e8c2d9895b6b', 0, '5e8c293377823', 'Staff', 'WILDA DWI OKTAYANTI', '5e8aa238b73aa'),
('5e8c2e346b457', 0, '5e8c298834108', 'Staff', 'FIRANTI WAHYULI', '5e8aa1b80b473'),
('5e8c2e3ca5165', 0, '5e8c298834108', 'Staff', 'AGUSTAMI', '5e8aa283e6616'),
('5e8c2e495b75b', 0, '5e8c298834108', 'Staff', 'BENO NAS PARTIO', '5e8aa283e6616'),
('5e8c2e531e6dd', 0, '5e8c298834108', 'Staff', 'TASMAN', '5e8aa283e6616'),
('5e8c2e6d013da', 0, '5e8c298834108', 'Staff', 'YULIS BUDI WINATA', '5e8aa283e6616'),
('5e8c2e81ceb7f', 0, '5e8c298834108', 'Staff', 'MUHAMMAD FADHIL', '5e8aa28ccfd35'),
('5e8c2e941fb9f', 0, '5e8c298834108', 'Staff', 'DEDI YULIANTO', '5e8aa2a9f2369'),
('5e8c2eab35387', 0, '5e8c293377823', 'Staff', 'AHMAD', '5e8aa2cf02ada'),
('5e8c2ef87e01f', 0, '5e8c293377823', 'Staff', 'ADAM MALIK', '5e8c2ec2e30f1'),
('5e8c2f30c75f2', 0, '5e8c293377823', 'Staff', 'WILSON', '5e8c2f1fabba4'),
('5e8c2f6226f19', 0, '5e8c293377823', 'Staff', 'LISA', '5e8c2f4c9dfa3'),
('5e8d376097dde', 0, '', 'Company', 'PT. BPR UNISRITAMA', '');

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan`
--

DROP TABLE IF EXISTS `penghargaan`;
CREATE TABLE IF NOT EXISTS `penghargaan` (
  `id_penghargaan` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_penghargaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penghargaan`
--

INSERT INTO `penghargaan` (`id_penghargaan`, `nama`, `gambar`) VALUES
('5e97fcdcdcc43', 'INFOBANK AWARDS 2019', '5e97fcdcdcc43.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` varchar(64) NOT NULL,
  `produk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `penulis` varchar(64) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` varchar(64) NOT NULL,
  `update_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `produk`, `deskripsi`, `jenis`, `image`, `penulis`, `created_on`, `update_by`, `update_on`) VALUES
('5e96bb4b21ce7', 'tabunganku', 'simpanan pelajar cerdas. membantu orang tua mendidik anak pandai mengelola keuangan sejak dini.', '5e9545a2ecf3e', '5e96bb4b21ce7.jpg', 'IBNU WARDANA', '2020-04-15 07:44:11', '', '2020-04-15 07:44:11'),
('5e96bd2139efc', 'pembayaran mahasiswa', 'menerima pembayaran kewajiban mahasiswa di lingkungan Universitas Islam Riau. Membantu pihak kampus dalam penyaluran Beasiswa bagi mahasiswa yang mendapatkan.', '5e95457d76d01', '5e96bd2139efc.jpg', 'IBNU WARDANA', '2020-04-15 07:52:01', '', '2020-04-15 07:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` varchar(64) NOT NULL,
  `slider` varchar(255) NOT NULL,
  `image` varchar(64) NOT NULL,
  `aktif` enum('Active','Null') NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `slider`, `image`, `aktif`) VALUES
('5e9be4050de27', 'slider 1', '5e9be4050de27.png', 'Active'),
('5e9bede00f969', 'slider 2', '5e9bede00f969.jpg', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

DROP TABLE IF EXISTS `tentang`;
CREATE TABLE IF NOT EXISTS `tentang` (
  `id_tentang` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(30) NOT NULL,
  `facebook` varchar(30) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `youtube` varchar(30) NOT NULL,
  `linkedin` varchar(30) NOT NULL,
  `twitter` varchar(30) NOT NULL,
  PRIMARY KEY (`id_tentang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `company`, `story`, `alamat`, `phone`, `email`, `whatsapp`, `facebook`, `instagram`, `youtube`, `linkedin`, `twitter`) VALUES
(1, 'PT. Bank Perkreditan Rakyat Unisritama', '<p class=\"h5 style=\"text-align:justify\"><em>Bank Unisritama yang semula bernama PT. Bank Perkreditan Rakyat Unisri (BPR Unisri) berdiri sejak tahun 1991 dan berkedudukan di Desa Kubang Jaya, Kecamatan Siak Hulu, Kabupaten Kampar, Provinsi Riau. Pendirian Bank Unisritama mempunyai maksud dan tujuan untuk menghimpun dana dari masyarakat dalam bentuk deposito berjangka dan tabungan serta memberikan kredit bagi pengusaha kecil dan atau masyarakat pedesaan. </em></p>', 'Jalan Soekarno-Hatta No. 03, Pekanbaru - Riau', '(0761) - 63381', 'unisritamabpr@yahoo.co.id', '6282391031212', 'bankunisritama', 'bpr_unisritama', 'UCDXod80EPm_B-YndX4AMlIw', 'pt-bpr-unisritama', 'bpr_unisritama');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `role_id`, `date_created`) VALUES
(1, 'MUHAMMAD IBNU WARDANA', 'muhammadibnuwardana@gmail.com', '$2y$10$Cd0t1lA8B5F3aU/nlxcMRuf4LHwB4DB0FBWcTPR0BYZtwFtdRCSsa', 1, '2020-04-01 11:51:19'),
(2, 'IBNU WARDANA', 'ibnudana02@gmail.com', '$2y$10$dYhqfn.ESNscwvi4Uk/Cc.tssWlyXG/dDE9BCsEDTXBiQLr7R.Lxe', 1, '2020-04-01 11:48:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
