-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 03:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasadesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(45) NOT NULL,
  `nohp` varchar(45) NOT NULL,
  `username_admin` varchar(45) NOT NULL,
  `password_admin` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama`, `nohp`, `username_admin`, `password_admin`) VALUES
('admin', '09876543212', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `id_design` int(11) NOT NULL,
  `username_member` varchar(45) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jenis_design` varchar(60) NOT NULL,
  `ukuran_kertas` varchar(60) NOT NULL,
  `saran_warna` varchar(60) NOT NULL,
  `deskripsi_design` varchar(100) NOT NULL,
  `resource` varchar(30) NOT NULL,
  `hasil_design` varchar(30) NOT NULL,
  `status_design` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`id_design`, `username_member`, `order_date`, `jenis_design`, `ukuran_kertas`, `saran_warna`, `deskripsi_design`, `resource`, `hasil_design`, `status_design`) VALUES
(2, 'a', '2017-11-11 05:17:10', 'CV', 'A3', 'asdasAa', '   a', '1510377430.jpg', '1511269207.jpg', 'selesai'),
(3, 'a', '2017-11-11 05:17:41', 'CV', 'A3', 'asdasAa', '   a', '1510377461.txt', '', 'Selesai'),
(4, 'a', '2017-11-11 05:39:11', 'Logo', 'A3', 'A', '   A', '1510378751.jpg', '', 'Selesai'),
(5, 'a', '2017-11-11 05:40:28', 'Logo', 'A5', 'A', 'A   ', '1510378828.zip', '', 'Selesai'),
(6, 'a', '2017-11-11 07:15:17', 'CV', 'A3', 'ered', '   sd', '1510384517.jpg', '', 'Selesai'),
(7, 'a', '2017-11-11 07:15:42', 'Video', 'A3', 'qqqqqq', '  qwewqeqwe ', '1510384542.jpg', '1510579808.jpg', 'Selesai'),
(8, 'a', '2017-11-13 13:07:01', 'CV', 'A4', 'aa', '   asada', '1510578421.jpg', '', 'Selesai'),
(9, 'a', '2017-11-13 14:24:40', 'Video', 'A4', 'MERAH PINK', 'psoter iklan soas strawberry yang rasanya lezat sekali', '1510583080.jpg', '1510583097.jpg', 'Selesai'),
(10, 'b', '2017-11-16 11:51:39', 'CV', 'A4', 'a', 'a   ', '1510833099.jpg', '1511008870.jpg', 'Selesai'),
(11, 'b', '2017-11-16 11:55:13', 'Poster', 'A3', 'c', 'c   ', '1510833313.jpg', '1511010572.jpg', 'Selesai'),
(12, 'w', '2017-11-18 12:04:33', 'CV', 'A3', 'wefe', '   werfewr', '1511006673.jpg', '', 'on revisi'),
(13, 'w', '2017-11-18 16:35:29', 'CV', 'A3', 'asdasd', '   asdasdcasd', '1511022929.JPG', '', 'On going');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id_gambar` int(11) NOT NULL,
  `file_gambar` varchar(45) NOT NULL,
  `jenis` varchar(45) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_gambar`, `file_gambar`, `jenis`, `keterangan`) VALUES
(1, '1.png', 'Poster', 'Poster ini didesign dengan warna warni'),
(2, '2.png', 'Logo', 'logo sederhana sesuai keinginan user'),
(7, '1511180100.png', 'logo', 'logo terbaru'),
(8, '1511180319.png', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `nama` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `nohp` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username_member` varchar(45) NOT NULL,
  `password_member` varchar(45) NOT NULL,
  `foto_member` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`nama`, `alamat`, `nohp`, `email`, `username_member`, `password_member`, `foto_member`) VALUES
('a', 'a', 'a', 'a', 'a', 'a', 'a'),
('bbb', 'b', 'b', 'bcc', 'b', 'b', ''),
('baru', 'baru', '0987654323456', 'baru', 'baru', 'baru', ''),
('akuu', 'w', 'w', 'w', 'w', 'w', ''),
('x', 'x', 'x', 'x', 'x', 'x', '');

-- --------------------------------------------------------

--
-- Table structure for table `revisi`
--

CREATE TABLE `revisi` (
  `id_revisi` int(11) NOT NULL,
  `id_design` int(30) NOT NULL,
  `tgl_revisi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file_revisi` varchar(45) NOT NULL,
  `komentar` varchar(45) NOT NULL,
  `tgl_selesai` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revisi`
--

INSERT INTO `revisi` (`id_revisi`, `id_design`, `tgl_revisi`, `file_revisi`, `komentar`, `tgl_selesai`) VALUES
(0, 9, '2017-12-29 17:00:00', '', 'sfsdfsf', '0000-00-00 00:00:00'),
(1, 1, '0000-00-00 00:00:00', 'werreferf', 'asferfaesr', '0000-00-00 00:00:00'),
(4, 2, '2017-11-10 17:00:00', '1511025038.JPG', 'Warnanya jelek', '2017-11-18 17:10:38'),
(5, 6, '2017-11-12 17:00:00', '1510582375.jpg', 'ubah warna', '0000-00-00 00:00:00'),
(7, 9, '2017-11-12 17:00:00', '1510583218.jpg', 'Ubah dibagian botol saus dan bagian design un', '0000-00-00 00:00:00'),
(11, 12, '2017-11-15 17:00:00', '', 'egytgeyt', '0000-00-00 00:00:00'),
(14, 12, '2017-11-15 17:00:00', '1511009101.jpg', 'rfvfrvrf', '0000-00-00 00:00:00'),
(15, 0, '2017-11-18 17:21:33', '', 'aaaaa', '2017-11-18 17:21:33'),
(16, 0, '2017-11-18 17:23:18', '', 'aaaaa', '2017-11-18 17:23:18'),
(19, 2, '2017-11-18 17:32:04', '1511269207.jpg', 'tolong bla', '2017-11-21 13:00:07'),
(20, 12, '2017-11-19 23:01:53', '', 'sda', '2017-11-19 23:01:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id_design`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username_member`);

--
-- Indexes for table `revisi`
--
ALTER TABLE `revisi`
  ADD PRIMARY KEY (`id_revisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `id_design` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `revisi`
--
ALTER TABLE `revisi`
  MODIFY `id_revisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
