-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 29, 2020 at 02:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_tahfiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `no_induk` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `no_induk`, `nama`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `status`, `no_hp`, `image`) VALUES
(3, '003', 'yahdi almukaram', 'laki-laki', '31-08-2020', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak kandung', '0982273673', '667ed98ad25b37b8ed9c739f86256ce1.jpg'),
(4, '002', 'yahdi al', 'Perempuan', '31-08-2020', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak tiri', '8493590', '7df564598db9630baafce8d19a13d916.PNG'),
(8, '0048', 'lutvi', 'laki-laki', '31.08.2020', 'batusangkar', 'Anak kandung', '0982273673', '96117bd940d29db72cf7882ea07168a9.PNG'),
(9, '002', 'lutvi', '0', '03.07.1996', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak kandung', '0982273673', '1a7615fb7e248f79795b7151c6b5356a.PNG'),
(10, '004', 'yahdi almukaram', 'laki-laki', '25.08.2020', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak kandung', '0982273673', '4d5f53a9e8b6544d4da80e9b73a81358.jpg'),
(13, '0021', 'yahdi almukaram', 'laki-laki', '31.08.2020', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak tiri', '0982273673', 'be1093e5d648b47fbee5097b3b36995f.jpg'),
(14, '00212', 'cici', 'laki-laki', '31.08.2020', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak kandung', '0982273673', 'b03e56bbe09e30afc65558f4bffc0883.PNG'),
(15, '112', 'lutvi', 'laki-laki', '29.08.2020', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak kandung', '0982273673', 'aa791cf319a7280daf14836da709d941.jpg'),
(16, '090', 'nadia anggiss', 'laki-laki', '24.08.2020', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak kandung', '0982273673', '172fe532355aeed8ecc972981be0181c.jpg'),
(17, '090', 'nadia anggiss', 'laki-laki', '24.08.2020', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak kandung', '0982273673', 'd3cfccae2df8d3747d4a5df759aae8e0.jpg'),
(18, '90', 'yahdi al', 'laki-laki', '29.08.2020', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak kandung', '082169074845', 'fed7cd8f30657cf47e5432c6e498b0c5.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(2, 'yahdi', '58d432c74ad12fc7d0f30300771bec18', 'admin'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_walimurid`
--

CREATE TABLE `tb_walimurid` (
  `id_walimurid` int(11) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_walimurid`
--

INSERT INTO `tb_walimurid` (`id_walimurid`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `alamat`, `no_hp`) VALUES
(5, 'ayah', 'tani', 'ibu', 'dagang', 'padang', 989898),
(6, 'arjalis', 'tani', 'darnis', 'dagang', 'malalo', 9346329),
(7, 'arjalis', 'tani', 'd', 'dagang', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 982273673),
(8, 'da', 'tani', 'd', 'dagang', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 3897938),
(9, 'arjalis', 'tani', 'darnis', 'dagang', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 982273673),
(10, 'arjalis', 'tani', 'darnis', 'dagang', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 982273673),
(11, 'ar', 'tani', 'dar', 'dagang', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_walimurid`
--
ALTER TABLE `tb_walimurid`
  ADD PRIMARY KEY (`id_walimurid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_walimurid`
--
ALTER TABLE `tb_walimurid`
  MODIFY `id_walimurid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
