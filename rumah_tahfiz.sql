-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 08, 2020 at 02:09 PM
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
(1, '001', 'yahdi', 'laki', '08-09-2888', 'malalo', 'anak kandung', '09737263723', ''),
(3, '003', 'yahdi almukaram', 'laki-laki', '31-08-2020', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak kandung', '0982273673', '667ed98ad25b37b8ed9c739f86256ce1.jpg'),
(4, '002', 'yahdi al', 'Perempuan', '31-08-2020', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak tiri', '8493590', '7df564598db9630baafce8d19a13d916.PNG'),
(8, '0048', 'lutvi', 'laki-laki', '31.08.2020', 'batusangkar', 'Anak kandung', '0982273673', '96117bd940d29db72cf7882ea07168a9.PNG'),
(9, '002', 'lutvi', 'laki-laki', '03.07.1996', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak kandung', '0982273673', '1a7615fb7e248f79795b7151c6b5356a.PNG'),
(10, '004', 'nadia', 'laki-laki', '03.07.1996', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', 'Anak kandung', '082169074845', '71c66b4ae41b704f8f19c984e35d5c7c.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
