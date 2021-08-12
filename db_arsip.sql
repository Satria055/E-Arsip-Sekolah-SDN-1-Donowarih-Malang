-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2021 at 01:53 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `jenis_surat` tinyint(4) NOT NULL COMMENT '0:suratkeluar;1:suratmasuk;2:ijazah;',
  `uploader` varchar(255) NOT NULL,
  `time_added` timestamp NOT NULL,
  `is_approved` tinyint(4) DEFAULT NULL COMMENT '1:approved;0:read;2:rejected'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `judul`, `nomor`, `tgl`, `file_name`, `file_path`, `jenis_surat`, `uploader`, `time_added`, `is_approved`) VALUES
(1, 'asdasddas', 'asdasdas', '0000-00-00', 'File_demo.pdf', NULL, 1, 'alumni', '0000-00-00 00:00:00', NULL),
(2, '123', 'asdasdasdasd', '0000-00-00', 'File_demo.pdf', NULL, 1, 'alumni', '2021-06-29 06:33:37', NULL),
(3, 'asdasda', 'asdasdasd', '0000-00-00', 'File_demo.pdf', NULL, 1, 'alumni', '2021-06-29 06:44:00', NULL),
(4, 'dasdasda', 'amsmamsda', '0000-00-00', 'File_demo.pdf', './media/suratmasuk/', 1, 'alumni', '2021-06-29 06:49:34', NULL),
(5, 'asdasdasd', 'asdasdasda', '0000-00-00', '-File_demo.pdf', './media/suratmasuk/', 1, 'alumni', '2021-06-29 06:54:01', NULL),
(6, '1231231', 'asdasda', '0000-00-00', '-File_demo.pdf', './media/suratmasuk/', 1, 'alumni', '2021-06-29 06:56:03', NULL),
(7, '12312', 'dasdasda', '0000-00-00', '1624975332File_demo.pdf', './media/suratmasuk/', 1, 'alumni', '2021-06-29 07:02:12', NULL),
(8, '1231241', '123123', '0000-00-00', '1624975481-File_demo.pdf', './media/suratmasuk/', 1, 'alumni', '2021-06-29 07:04:41', NULL),
(9, 'dasdasdasd', 'asdasdasd', '0000-00-00', '1624975568-File_demo.pdf', './media/ijazah/', 2, 'asdasdasda', '2021-06-29 07:06:08', 1),
(10, 'dasdasdasd', 'asdasdasd', '0000-00-00', '1624975568-File_demo.pdf', './media/ijazah/', 2, 'asdasdasda', '2021-06-29 07:06:08', 1),
(11, 'Ijazah - asdasdas', 'asdasdqwqsas', '0000-00-00', '1624975711-File_demo.pdf', './media/ijazah/', 2, 'aasdasdas', '2021-06-29 07:08:31', 1),
(12, 'SKHUN - asdasdas', 'asdasdqwqsas', '0000-00-00', '1624975711-File_demo.pdf', './media/ijazah/', 2, 'aasdasdas', '2021-06-29 07:08:31', 1),
(13, 'asdasdasda', 'asdasdas', '0000-00-00', '1625061481-File_demo.pdf', './media/suratmasuk/', 1, 'admin', '2021-06-30 06:58:01', NULL),
(14, 'qweqwasda', 'qwadasdqwe', '0000-00-00', '1625062465-File_demo.pdf', './media/suratmasuk/', 1, 'Guru', '2021-06-30 07:14:25', NULL),
(15, 'asdasdasd', 'asdasdasdasd', '0000-00-00', '1625062594-File_demo.pdf', './media/suratmasuk/', 1, 'Guru', '2021-06-30 07:16:34', NULL),
(16, 'asdasdas', 'asdasdasdas', '0000-00-00', '1625062638-File_demo.pdf', './media/suratmasuk/', 1, 'Guru', '2021-06-30 07:17:18', NULL),
(17, 'adasda', 'asdafasda', '0000-00-00', '1625093835-File_demo.pdf', './media/suratmasuk/', 1, 'Guru', '2021-06-30 15:57:15', NULL),
(18, 'asdasfasd', 'asdasdasda', '0000-00-00', '1625094734-File_demo.pdf', './media/suratmasuk/', 1, 'Guru', '2021-06-30 16:12:14', NULL),
(19, 'asdasdas', 'ASDad', '0000-00-00', '1625314485-File_demo.pdf', './media/suratmasuk/', 1, 'alumni', '2021-07-03 05:14:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ijazah`
--

CREATE TABLE `ijazah` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `no_un` varchar(30) NOT NULL,
  `no_ijazah` varchar(30) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `skhun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ijazah`
--

INSERT INTO `ijazah` (`id`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `no_un`, `no_ijazah`, `tahun_lulus`, `berkas`, `skhun`) VALUES
(2, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(3, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(4, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(5, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(6, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(7, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(8, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(9, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(10, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(11, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(12, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(13, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(14, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(15, 'Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(16, 'Satria Yudha Pratama', 'Pangkalan Bun', '19-12-1994', '015-001-2012', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(18, 'Satrio Abimanyu', 'Banyuwangi', '19-12-1994', '015-001-2012', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(19, 'Soleh Untung', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(20, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(24, 'Adimas Primananda', 'Banyuwangi', '22-07-2005', '015-001-2014', 'DN-3421600', '2015', 'File_demo.docx', 'File_demo.pdf'),
(28, 'Wahid', 'Jombang', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(29, 'Siska Dwi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(30, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(31, 'Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(32, 'asdasdasda', 'asdasdasdas', '01-06-2021', 'dasdasdasd', 'asdasdasd', '2021', '1624975568-File_demo.pdf', '1624975568-File_demo.pdf'),
(33, 'aasdasdas', 'dasdasdas', '01-06-2021', 'asdasdas', 'asdasdqwqsas', '2021', '1624975711-File_demo.pdf', '1624975711-File_demo.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `guru` varchar(40) NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `jurusan`, `kelas`, `kode`, `semester`, `tahun_ajaran`, `guru`, `berkas`) VALUES
(4, 'TKJ', 'Kelas 1', 'A', '2 (Dua)', '2018/2019', 'Puguh Sulistyo Pambudi', 'File_demo.pdf'),
(5, 'TKJ', 'Kelas 1', 'A', '2 (Dua)', '2018/2019', 'Sumarni', 'File_demo.pdf'),
(6, 'TKJ', 'Kelas 1', 'A', '2 (Dua)', '2018/2019', 'Puguh Sulistyo Pambudi', 'File_demo.pdf'),
(11, 'TKJ', 'Kelas 4', 'B', '2 (Dua)', '2019/2020', 'Satria Yudha Pratama', 'File_demo.pdf'),
(12, '', 'Kelas 5', 'C', '2 (Dua)', '2019/2020', 'Satria Yudha Pratama', 'File_demo.pdf'),
(13, '', 'Kelas 6', 'C', '2 (Dua)', '2018/2019', 'Hariyanto', 'File_demo.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `level` enum('Wali Murid','Murid','Alumni') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `full_name`, `level`) VALUES
(7, 'murid', '$2y$10$1mNsNBmNb0aYpTnBOzQjmu4IGAk5tJ6dy6rYC/M7giJhd1DfaC03a\n', 'Satria', 'Murid'),
(15, 'alumni', '$2y$10$0pr/rm/LGZ6vV/g8nPSrWeyMvqrECaBLkdCrz01ucN7O5jUERGCaW\n', 'alumni 123', 'Alumni'),
(16, 'walimurid', '$2y$10$Q63k7PF59Y9DSJnoKiHlgOXgkPrHFoDRr9praZKU4cAoXkC67BUzC\n', 'Siska Dwi', 'Wali Murid'),
(17, 'sayud', '$2y$10$jIWmjRvSXi5x9u9X.FB40eboZ.AX/.1Qf69I7qH6.vIZ8gtTnNJnO\n', 'Satria Yudha Pratama', 'Alumni'),
(18, 'murid1', '$2y$10$UtUyYMpx7xxRDkB8cmeG/u0Wvm90OEak0oc5zZ/SUC/r9EaoFUCMi\n', 'Yudha Pratama', 'Murid');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `kode_mapel` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `guru` varchar(30) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `kurikulum` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `mapel`, `kode_mapel`, `kelas`, `kode`, `jurusan`, `semester`, `guru`, `tahun_ajaran`, `kurikulum`, `jenis`, `berkas`) VALUES
(4, 'Matematika', 'MTK', 'Kelas 2', 'A', 'RPL', '2 (Dua)', 'Puguh Sulistyo Pambudi', '2018/2019', 'K13', 'UTS', 'File_demo.docx'),
(5, 'Bahasa Indonesia', 'MTK', 'Kelas 2', 'A', 'RPL', '2 (Dua)', 'Bambang Hariyanto', '2018/2019', 'K13', 'UTS', 'File_demo.docx'),
(6, 'Bahasa Inggris', 'B.ING', 'Kelas 2', 'A', 'RPL', '2 (Dua)', 'Puguh Sulistyo Pambudi', '2018/2019', 'K13', 'UTS', 'File_demo.docx'),
(7, 'Bahasa Indonesia', 'B.IND', 'Kelas 2', 'A', 'RPL', '2 (Dua)', 'Sutrisno', '2018/2019', 'K13', 'UTS', 'File_demo.docx'),
(8, 'Matematika', 'MTK', 'Kelas 2', 'A', 'RPL', '2 (Dua)', 'Sutrisno', '2018/2019', 'K13', 'UTS', 'File_demo.docx'),
(9, 'Bahasa Inggris', 'B.ING', 'Kelas 6', 'B', '', '1 (Satu)', 'Satria Yudha Pratama', '2020', 'K119', 'Try Out', 'File_demo.pdf'),
(10, 'Matematika', 'MTK', 'Kelas 5', 'A', '', '1 (Satu)', 'Hariyanto', '2019', '2018/2019', 'UTS', 'File_demo.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `nomor` varchar(30) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `perihal` varchar(20) NOT NULL,
  `tertuju` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `disposisi` varchar(40) DEFAULT NULL,
  `isi_disposisi` varchar(100) NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `is_approved` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `tanggal`, `nomor`, `pengirim`, `perihal`, `tertuju`, `alamat`, `disposisi`, `isi_disposisi`, `berkas`, `is_approved`) VALUES
(2, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(3, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(4, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(5, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(6, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(7, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(8, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(9, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(10, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(11, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(12, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(14, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(15, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(16, '22-07-2018', '422/B/210/2018', 'SDS', 'Undangan', 'FFG', 'Jl. Teuku Umar', 'Disposisi 1', 'asasasas', 'File_demo.pdf', 0),
(17, '04-06-2021', '46b57', 'Alumni', 'Undangan', 'Guru', 'Desa Natai Raya', 'Disposisi 1', 'Segera', 'File_demo.pdf', 0),
(18, '22-06-2021', '12344', 'Alumni', 'undangan', 'Guru', 'malang', 'Disposisi 1', 'dilanjutkan', 'File_demo.pdf', 0),
(19, '01-06-2021', '1', 'ada', 'asdas', 'Alumni', 'asdasdasd', 'Disposisi 1', 'asdasd', 'SOP Re Program.pdf', 1),
(20, '20-06-2021', '123', 'asdasdas', 'dasdasd', 'Alumni', 'asdas', 'Disposisi 1', 'dasdasd', 'File_demo.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `perihal` varchar(100) NOT NULL,
  `disposisi` varchar(50) DEFAULT NULL,
  `isi_disposisi` varchar(255) NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `is_approved` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `tanggal`, `nomor`, `pengirim`, `tujuan`, `perihal`, `disposisi`, `isi_disposisi`, `berkas`, `is_approved`) VALUES
(2, '22-07-2018', '421.5/A/201/2018', 'DDS', NULL, 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf', 0),
(3, '22-07-2018', '421.5/A/201/2018', 'DDS', NULL, 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf', 0),
(4, '22-07-2018', '421.5/A/201/2018', 'DDS', NULL, 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf', 0),
(5, '22-07-2018', '421.5/A/201/2018', 'DDS', NULL, 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf', 0),
(7, '22-07-2018', '421.5/A/201/2018', 'DDS', NULL, 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf', 0),
(8, '22-07-2018', '421.5/A/201/2018', 'DDS', NULL, 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf', 0),
(9, '22-07-2018', '421.5/A/201/2018', 'DDS', NULL, 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf', 0),
(10, '22-07-2018', '421.5/A/201/2018', 'DDS', NULL, 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf', 0),
(11, '22-07-2018', '421.5/A/201/2018', 'DDS', NULL, 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf', 0),
(12, '22-07-2018', '421.5/A/201/2018', 'DDS', NULL, 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf', 0),
(13, '22-07-2018', '421.5/A/201/2018', 'DDS', NULL, 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf', 0),
(14, '22-07-2018', '421.5/A/201/2018', 'DDS', NULL, 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf', 0),
(15, '22-07-2018', '421.5/A/201/2018', 'DDS', NULL, 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf', 0),
(16, '09-06-2021', 'a1qqwesasdas', 'alumni', NULL, 'asdasds', 'Disposisi 1', 'asasdasdaacvxz', 'SOP Re Program.pdf', 0),
(17, '14-06-2021', 'asdasadas', 'alumni', NULL, 'asdasd', 'Disposisi 1', 'asdasdasd', 'SOP Re Program.pdf', 2),
(18, '14-06-2021', 'asdasdasdasd', 'alumni', 'Guru', 'asdasdas', 'Disposisi 1', 'asdasda', 'SOP Re Program.pdf', 0),
(19, '15-06-2021', 'zxczxczx', 'alumni', 'Guru', 'zxczxc', 'Disposisi 1', 'zxczxczx', 'SOP Re Program.pdf', 0),
(20, '15-06-2021', 'asdfasdfadf', 'alumni', 'Guru', 'adfasdf', 'Disposisi 1', 'asdfadfasd', 'SOP Re Program.pdf', 1),
(21, '17-06-2021', 'asdasdasdasd', 'walimurid', 'siska', 'asdasdas', 'Disposisi 1', 'asdsdasdasdasa', 'SOP Re Program.pdf', 0),
(22, '17-06-2021', 'asdasdas', 'walimurid', 'sayud', 'asdasd', 'Disposisi 1', 'asdasda', 'SOP Re Program.pdf', 0),
(23, '20-06-2021', '123', 'alumni', 'Admin', 'dasdasd', NULL, 'asdasdas', 'File_demo.pdf', NULL),
(24, '20-06-2021', 'asdasd', 'alumni', 'sayud', 'asdasd', NULL, 'asdasd', 'File_demo.pdf', NULL),
(25, '01-06-2021', 'asdasdas', 'alumni', 'Admin', 'asdasddas', NULL, 'asdasdasd', 'File_demo.pdf', NULL),
(26, '01-06-2021', 'asdasdasdasd', 'alumni', 'Admin', '123', NULL, 'asdasda', 'File_demo.pdf', NULL),
(27, '01-06-2021', 'asdasdasd', 'alumni', 'Admin', 'asdasda', NULL, 'dadasdasdasd', 'File_demo.pdf', NULL),
(28, '01-06-2021', 'amsmamsda', 'alumni', 'Admin', 'dasdasda', NULL, 'asdasdasf', 'File_demo.pdf', NULL),
(29, '01-06-2021', 'asdasdasda', 'alumni', 'Guru', 'asdasdasd', NULL, 'asdadasdas', '-File_demo.pdf', NULL),
(30, '01-06-2021', 'asdasda', 'alumni', 'Admin', '1231231', NULL, '123123123', '-File_demo.pdf', NULL),
(31, '01-06-2021', 'dasdasda', 'alumni', 'Admin', '12312', NULL, 'qwqweq1', '1624975332File_demo.pdf', NULL),
(32, '02-06-2021', '123123', 'alumni', 'Admin', '1231241', NULL, 'adqewqwasda', '1624975481-File_demo.pdf', NULL),
(33, '01-06-2021', 'asdasdas', 'admin', 'komite', 'asdasdasda', 'Disposisi 1', 'adasasdasd', '1625061481-File_demo.pdf', NULL),
(34, '30-06-2021', 'qwadasdqwe', 'Guru', 'Murid', 'qweqwasda', NULL, 'asdasdqweqw', '1625062465-File_demo.pdf', NULL),
(35, '30-06-2021', 'asdasdasdasd', 'Guru', 'Murid', 'asdasdasd', NULL, 'asdasdasdas', '1625062594-File_demo.pdf', NULL),
(36, '30-06-2021', 'asdasdasdas', 'Guru', 'Murid', 'asdasdas', NULL, 'asdasfasdas', '1625062638-File_demo.pdf', NULL),
(37, '01-07-2021', 'asdafasda', 'Guru', 'Murid', 'adasda', 'Diterima TU', 'asdasdasfasda', '1625093835-File_demo.pdf', 1),
(38, '01-08-2021', 'asdasdasda', 'Guru', 'Wali Murid', 'asdasfasd', NULL, 'asdasdasdasfasda', '1625094734-File_demo.pdf', NULL),
(39, '31-07-2021', 'ASDad', 'alumni', 'Guru', 'asdasdas', NULL, 'asdasd', '1625314485-File_demo.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_disposisi`
--

CREATE TABLE `tb_disposisi` (
  `id` int(11) NOT NULL,
  `disposisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_disposisi`
--

INSERT INTO `tb_disposisi` (`id`, `disposisi`) VALUES
(2, 'Disposisi 1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelajaran`
--

CREATE TABLE `tb_pelajaran` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelajaran`
--

INSERT INTO `tb_pelajaran` (`id`, `kode`, `mapel`) VALUES
(2, 'MTK', 'Matematika'),
(3, 'B.ING', 'Bahasa Inggris'),
(4, 'SBD', 'Seni Budaya'),
(5, 'B.INDO', 'Bahasa Indonesia'),
(6, 'PKN', 'Pendidikan Kewarganegaraan'),
(7, 'AGMI', 'Agama Islam'),
(8, 'AGMK', 'Agama Kristen'),
(9, 'IPS', 'Ilmu Pengetahuan Sosial'),
(10, 'IPA', 'Ilmu Pengetahuan Alam'),
(11, 'OLGA', 'Olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id` int(2) NOT NULL,
  `kepala_sekolah` varchar(40) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama_sekolah` varchar(40) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id`, `kepala_sekolah`, `nip`, `nama_sekolah`, `no_telp`, `email`, `alamat`, `website`) VALUES
(1, 'Abdul Kohar', '1110060211950003', 'Sekolah Dasar Negeri 1 Donowarih Malang', '082274404756', 'smkn12acehsingkil@gmail.com', 'Jl. Raya Donowarih RT.08 RW.12 Dusun Karangan', 'Belum Ada');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `level` enum('Admin','Komite','Guru') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `level`) VALUES
(7, 'admin', '$2y$10$AEqMqeUsSXYozFN7nRV/6OC7atabQrSkLa/4DM.CpItWCxHwG6MgG\n', 'Budiono', 'Admin'),
(13, 'Guru', '$2y$10$4W2wni1W4DD6Ta18I8Mioec3SCAZB/mE/WKQGFjklYyyVylEUMrTW\n', 'Sri Lestari', 'Guru'),
(16, 'sayud', '$2y$10$GEMFZgTyz8BBi7cn9IuBgOyZ8s6h1I9yv0GkHEG63sVTASK9BjM2.\n', 'Satria Yudha Pratama', 'Guru'),
(18, 'siska', '$2y$10$VCTrexxAXb9SZfVknFk9dOqwJ2Hb2en2Xxp2lQcLjwPBybXDToCTy\n', 'Siska Dwi Retno', 'Guru'),
(20, 'komite', '$2y$10$eHLsTSkKmcdV9RaXrxFuYuP03Z49vy01q50TKnyJQcLoCpaM/iuO2\n', 'Sutrisno', 'Komite');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ijazah`
--
ALTER TABLE `ijazah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelajaran`
--
ALTER TABLE `tb_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ijazah`
--
ALTER TABLE `ijazah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pelajaran`
--
ALTER TABLE `tb_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
