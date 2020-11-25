-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2020 at 12:51 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_peminjam`
--

CREATE TABLE `db_peminjam` (
  `tanggal` varchar(20) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nama_buku` varchar(30) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_peminjam`
--

INSERT INTO `db_peminjam` (`tanggal`, `nim`, `nama`, `nama_buku`, `kelas`) VALUES
('2020-11-26', 311810168, 'Khalid Firdaus', 'SISTEM INFORMASI', 'TI.18.D6'),
('2020-11-25', 311810324, 'Ridwan Ardiansyah', 'Visual Basic', 'TI.18.D6'),
('2020-11-26', 311810765, 'Riza Febriani NF', 'BIOGRAFI', 'TI.18.D6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_peminjam`
--
ALTER TABLE `db_peminjam`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
