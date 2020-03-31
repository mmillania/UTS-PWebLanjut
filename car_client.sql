-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2020 at 01:54 PM
-- Server version: 8.0.18
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_client`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `alamat`, `no_ktp`, `no_tlp`, `gender`, `username`, `password`, `role_id`) VALUES
(1, 'milea', 'jalan bandung', '0002345968', '0898388292', 'Wanita', 'milea', 'd8073e37388c2273ef871e6e5f8e0b33', 1),
(2, 'siti', 'jalan jalan', '12345', '08918293121', 'Perempuan', 'siti', '5c2e4a2563f9f4427955422fe1402762', 2),
(4, 'millania', 'jalan Kusumba dalam 10,Malang', '00089898', '085567676', 'Perempuan', 'millania', '39542a9eaa616eaf50ea9e1c670d1245', 2),
(5, 'admin', 'Malang', '000989989', '08984249934', 'Perempuan', 'admin', '0192023a7bbd73250516f069df18b500', 1),
(6, 'rizki', 'jalan soekarno hatta no 10', '000098010282', '08279818980', 'Laki-laki', 'rizki', 'dab89aa869f58c32931df83e1e7d4beb', 2);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `merk_mobil` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `nama`, `alamat`, `no_ktp`, `no_tlp`, `merk_mobil`, `tgl_pinjam`, `tgl_kembali`, `durasi`, `username`) VALUES
(1, 'millania', 'jalan Kusumba dalam 10,Malang', '00089898', '085567676', 'Jetbuz MC', '2020-04-01', '2020-04-02', '1', 'millania');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
