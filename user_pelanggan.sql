-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2017 at 04:29 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_pelanggan`
--
CREATE DATABASE IF NOT EXISTS `user_pelanggan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `user_pelanggan`;

-- --------------------------------------------------------

--
-- Table structure for table `dt_internet_fo`
--

CREATE TABLE `dt_internet_fo` (
  `id` int(11) NOT NULL,
  `userid` char(5) NOT NULL,
  `media_akses` varchar(15) NOT NULL,
  `bandwith` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_internet_fo`
--

INSERT INTO `dt_internet_fo` (`id`, `userid`, `media_akses`, `bandwith`) VALUES
(1, 'U0001', 'FO', '2');

-- --------------------------------------------------------

--
-- Table structure for table `dt_internet_wireless`
--

CREATE TABLE `dt_internet_wireless` (
  `id` int(11) NOT NULL,
  `userid` char(5) NOT NULL,
  `media_akses` varchar(15) NOT NULL,
  `productid_antena` char(5) NOT NULL,
  `productid_radio` char(5) NOT NULL,
  `productid_bts` char(5) NOT NULL,
  `bandwith` char(5) NOT NULL,
  `frequensi` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_internet_wireless`
--

INSERT INTO `dt_internet_wireless` (`id`, `userid`, `media_akses`, `productid_antena`, `productid_radio`, `productid_bts`, `bandwith`, `frequensi`) VALUES
(1, 'U0006', 'Wireless', 'A0001', 'R0001', 'B0001', '2', '2,4 G'),
(2, 'U0001', 'Wireless', 'A0001', 'R0002', 'B0002', '2', '5,8 GHZ'),
(3, 'U0001', 'Wireless', 'A0001', 'R0001', 'B0001', '3', '2,4 GHZ');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `userid` char(5) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `web` varchar(15) NOT NULL,
  `WA` varchar(12) NOT NULL,
  `user_since` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`userid`, `nama_user`, `alamat`, `telp`, `email`, `web`, `WA`, `user_since`) VALUES
('U0001', 'jodi', 'kerjo', '08888112312', 'ss@gmail.com', 'www.solo.net', '890092', '2017-02-26'),
('U0002', 'Masduki', 'kerjo', '098789', 'sjodi442@gmail.', 'e33.co.id', '08989832', '2017-02-27'),
('U0003', 'nanada', 'karanganyar', '0889', 'ana@gmail.com', 'www.sss.com', '093824', '2017-02-27'),
('U0004', 'mssj', 'solo', '089989', 'ads@hmail.com', 'www.ss.org', '00908', '2017-02-26'),
('U0005', 'Agunk', 'Karanganyar', '08911233122', 'agunk@gmail.com', 'www.aa.com', '090123', '2017-03-26'),
('U0006', 'Rikki', 'KAbekramat', '08823213123', 'rikki@gmail.com', 'www.rikki.com', '090123', '2017-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan_compushop`
--

CREATE TABLE `pelanggan_compushop` (
  `id` int(11) NOT NULL,
  `userid` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan_compushop`
--

INSERT INTO `pelanggan_compushop` (`id`, `userid`) VALUES
(1, 'U0001'),
(2, 'U0003'),
(3, 'U0005'),
(4, 'U0006');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan_internet`
--

CREATE TABLE `pelanggan_internet` (
  `id` int(11) NOT NULL,
  `userid` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan_internet`
--

INSERT INTO `pelanggan_internet` (`id`, `userid`) VALUES
(1, 'U0001'),
(2, 'U0005'),
(3, 'U0006');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan_training`
--

CREATE TABLE `pelanggan_training` (
  `id` int(11) NOT NULL,
  `userid` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan_training`
--

INSERT INTO `pelanggan_training` (`id`, `userid`) VALUES
(1, 'U0004'),
(2, 'U0005'),
(3, 'U0006');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan_websoft`
--

CREATE TABLE `pelanggan_websoft` (
  `id` int(11) NOT NULL,
  `userid` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan_websoft`
--

INSERT INTO `pelanggan_websoft` (`id`, `userid`) VALUES
(1, 'U0002'),
(2, 'U0005'),
(3, 'U0006');

-- --------------------------------------------------------

--
-- Table structure for table `produk_compushop`
--

CREATE TABLE `produk_compushop` (
  `productid` char(5) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `qty` int(5) NOT NULL,
  `harga_satuan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_compushop`
--

INSERT INTO `produk_compushop` (`productid`, `nama_produk`, `qty`, `harga_satuan`) VALUES
('P0001', 'produk1', 20, 20000),
('P0002', 'produk2', 20, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `produk_internet_antena`
--

CREATE TABLE `produk_internet_antena` (
  `productid_antena` char(5) NOT NULL,
  `nama_antena` varchar(20) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_internet_antena`
--

INSERT INTO `produk_internet_antena` (`productid_antena`, `nama_antena`, `qty`) VALUES
('A0001', 'jenis1', 20),
('A0002', 'jenis2', 20);

-- --------------------------------------------------------

--
-- Table structure for table `produk_internet_bts`
--

CREATE TABLE `produk_internet_bts` (
  `productid_bts` char(5) NOT NULL,
  `nama_bts` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_internet_bts`
--

INSERT INTO `produk_internet_bts` (`productid_bts`, `nama_bts`) VALUES
('B0001', 'bts1'),
('B0002', 'bts2');

-- --------------------------------------------------------

--
-- Table structure for table `produk_internet_radio`
--

CREATE TABLE `produk_internet_radio` (
  `productid_radio` char(5) NOT NULL,
  `nama_radio` varchar(20) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_internet_radio`
--

INSERT INTO `produk_internet_radio` (`productid_radio`, `nama_radio`, `qty`) VALUES
('R0001', 'mikrotik1', 20),
('R0002', 'Mikrotik2', 20),
('R0003', 'Ubiquity1', 20);

-- --------------------------------------------------------

--
-- Table structure for table `produk_training`
--

CREATE TABLE `produk_training` (
  `productid_training` char(5) NOT NULL,
  `nama_training` varchar(20) NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_training`
--

INSERT INTO `produk_training` (`productid_training`, `nama_training`, `harga`) VALUES
('Z0001', 'MTCNA', 2000000),
('Z0002', 'CCNA', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_log`
--

CREATE TABLE `transaction_log` (
  `inv_num` char(15) NOT NULL,
  `userid` char(5) NOT NULL,
  `tipe_prod` varchar(10) NOT NULL,
  `total_bayar` int(12) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `due_date` date NOT NULL,
  `payment_date` date NOT NULL,
  `outstanding` int(12) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_log`
--

INSERT INTO `transaction_log` (`inv_num`, `userid`, `tipe_prod`, `total_bayar`, `tgl_transaksi`, `due_date`, `payment_date`, `outstanding`, `status`) VALUES
('T000001', 'U0001', 'compushop', 40000, '2017-03-03', '2017-03-22', '0000-00-00', 40000, 'hutang'),
('T000002', 'U0003', 'compushop', 15000, '2017-03-03', '2017-03-31', '0000-00-00', 15000, 'hutang'),
('T000003', 'U0001', 'compushop', 15000, '2017-03-05', '2017-04-01', '0000-00-00', 15000, 'hutang'),
('T000004', 'U0004', 'training', 3000000, '2017-03-08', '2017-04-01', '0000-00-00', 3000000, 'hutang'),
('T000005', 'U0005', 'compushop', 40000, '2017-03-10', '2017-04-01', '0000-00-00', 40000, 'hutang'),
('T000006', 'U0005', 'training', 2000000, '2017-03-10', '2017-04-01', '0000-00-00', 2000000, 'hutang'),
('T000008', 'U0006', 'compushop', 40000, '2017-03-12', '2017-04-01', '0000-00-00', 40000, 'hutang'),
('T000009', 'U0006', 'training', 3000000, '2017-03-12', '2017-04-01', '0000-00-00', 3000000, 'hutang'),
('T000010', 'U0001', 'internet', 12000, '2017-03-14', '2017-04-01', '0000-00-00', 12000, 'hutang'),
('T000011', 'U0006', 'internet', 12000, '2017-03-14', '2017-03-31', '0000-00-00', 12000, 'hutang'),
('T000012', 'U0001', 'internet', 12000, '2017-03-14', '0000-00-00', '0000-00-00', 12000, 'hutang'),
('T000013', 'U0001', 'internet', 132000, '2017-03-14', '2017-03-31', '0000-00-00', 132000, 'hutang');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_log_compushop`
--

CREATE TABLE `transaction_log_compushop` (
  `id_tl` int(11) NOT NULL,
  `inv_num` char(15) NOT NULL,
  `userid` char(5) NOT NULL,
  `productid` char(5) NOT NULL,
  `harga_satuan` int(12) NOT NULL,
  `qty` int(5) NOT NULL,
  `total_bayar` int(12) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `garansi_mulai` date NOT NULL,
  `garansi_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_log_compushop`
--

INSERT INTO `transaction_log_compushop` (`id_tl`, `inv_num`, `userid`, `productid`, `harga_satuan`, `qty`, `total_bayar`, `tgl_transaksi`, `garansi_mulai`, `garansi_akhir`) VALUES
(4, 'T000001', 'U0001', 'P0001', 20000, 2, 40000, '2017-03-03', '2017-03-03', '2017-03-24'),
(5, 'T000002', 'U0003', 'P0002', 5000, 3, 15000, '2017-03-03', '2017-03-03', '2017-06-09'),
(6, 'T000003', 'U0001', 'P0002', 5000, 3, 15000, '2017-03-05', '2017-03-05', '2017-04-01'),
(8, 'T000005', 'U0005', 'P0001', 20000, 2, 40000, '2017-03-10', '2017-03-10', '2017-04-01'),
(9, 'T000008', 'U0006', 'P0001', 20000, 2, 40000, '2017-03-12', '2017-03-12', '2017-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_log_internet`
--

CREATE TABLE `transaction_log_internet` (
  `id_tl` int(11) NOT NULL,
  `inv_num` char(15) NOT NULL,
  `userid` char(5) NOT NULL,
  `media_akses` varchar(10) NOT NULL,
  `bandwith` char(5) NOT NULL,
  `total_bayar` int(12) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_log_internet`
--

INSERT INTO `transaction_log_internet` (`id_tl`, `inv_num`, `userid`, `media_akses`, `bandwith`, `total_bayar`, `tgl_transaksi`) VALUES
(8, 'T000010', 'U0001', 'FO', '2', 12000, '2017-03-14'),
(9, 'T000011', 'U0006', 'Wireless', '2', 12000, '2017-03-14'),
(10, 'T000012', 'U0001', 'Wireless', '2', 12000, '2017-03-14'),
(11, 'T000013', 'U0001', 'Wireless', '5', 132000, '2017-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_log_training`
--

CREATE TABLE `transaction_log_training` (
  `id_tl` int(11) NOT NULL,
  `inv_num` char(15) NOT NULL,
  `userid` char(5) NOT NULL,
  `productid_training` char(5) NOT NULL,
  `total_bayar` int(12) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_log_training`
--

INSERT INTO `transaction_log_training` (`id_tl`, `inv_num`, `userid`, `productid_training`, `total_bayar`, `tgl_transaksi`) VALUES
(2, 'T000004', 'U0004', 'Z0002', 3000000, '2017-03-08'),
(4, 'T000006', 'U0005', 'Z0001', 2000000, '2017-03-10'),
(5, 'T000009', 'U0006', 'Z0002', 3000000, '2017-03-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_internet_fo`
--
ALTER TABLE `dt_internet_fo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `dt_internet_wireless`
--
ALTER TABLE `dt_internet_wireless`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `productid_antena` (`productid_antena`),
  ADD KEY `productid_radio` (`productid_radio`),
  ADD KEY `productid_bts` (`productid_bts`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `pelanggan_compushop`
--
ALTER TABLE `pelanggan_compushop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `pelanggan_internet`
--
ALTER TABLE `pelanggan_internet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `pelanggan_training`
--
ALTER TABLE `pelanggan_training`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `pelanggan_websoft`
--
ALTER TABLE `pelanggan_websoft`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `produk_compushop`
--
ALTER TABLE `produk_compushop`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `produk_internet_antena`
--
ALTER TABLE `produk_internet_antena`
  ADD PRIMARY KEY (`productid_antena`);

--
-- Indexes for table `produk_internet_bts`
--
ALTER TABLE `produk_internet_bts`
  ADD PRIMARY KEY (`productid_bts`);

--
-- Indexes for table `produk_internet_radio`
--
ALTER TABLE `produk_internet_radio`
  ADD PRIMARY KEY (`productid_radio`);

--
-- Indexes for table `produk_training`
--
ALTER TABLE `produk_training`
  ADD PRIMARY KEY (`productid_training`);

--
-- Indexes for table `transaction_log`
--
ALTER TABLE `transaction_log`
  ADD PRIMARY KEY (`inv_num`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `transaction_log_compushop`
--
ALTER TABLE `transaction_log_compushop`
  ADD PRIMARY KEY (`id_tl`),
  ADD KEY `userid` (`userid`),
  ADD KEY `productid` (`productid`),
  ADD KEY `inv_num` (`inv_num`);

--
-- Indexes for table `transaction_log_internet`
--
ALTER TABLE `transaction_log_internet`
  ADD PRIMARY KEY (`id_tl`),
  ADD KEY `userid` (`userid`),
  ADD KEY `inv_num` (`inv_num`);

--
-- Indexes for table `transaction_log_training`
--
ALTER TABLE `transaction_log_training`
  ADD PRIMARY KEY (`id_tl`),
  ADD KEY `userid` (`userid`),
  ADD KEY `productid` (`productid_training`),
  ADD KEY `inv_num` (`inv_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_internet_fo`
--
ALTER TABLE `dt_internet_fo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dt_internet_wireless`
--
ALTER TABLE `dt_internet_wireless`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelanggan_compushop`
--
ALTER TABLE `pelanggan_compushop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pelanggan_internet`
--
ALTER TABLE `pelanggan_internet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelanggan_training`
--
ALTER TABLE `pelanggan_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelanggan_websoft`
--
ALTER TABLE `pelanggan_websoft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaction_log_compushop`
--
ALTER TABLE `transaction_log_compushop`
  MODIFY `id_tl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `transaction_log_internet`
--
ALTER TABLE `transaction_log_internet`
  MODIFY `id_tl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `transaction_log_training`
--
ALTER TABLE `transaction_log_training`
  MODIFY `id_tl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dt_internet_wireless`
--
ALTER TABLE `dt_internet_wireless`
  ADD CONSTRAINT `dt_internet_wireless_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `pelanggan` (`userid`),
  ADD CONSTRAINT `dt_internet_wireless_ibfk_2` FOREIGN KEY (`productid_antena`) REFERENCES `produk_internet_antena` (`productid_antena`),
  ADD CONSTRAINT `dt_internet_wireless_ibfk_3` FOREIGN KEY (`productid_bts`) REFERENCES `produk_internet_bts` (`productid_bts`),
  ADD CONSTRAINT `dt_internet_wireless_ibfk_4` FOREIGN KEY (`productid_radio`) REFERENCES `produk_internet_radio` (`productid_radio`);

--
-- Constraints for table `transaction_log`
--
ALTER TABLE `transaction_log`
  ADD CONSTRAINT `transaction_log_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `pelanggan` (`userid`);

--
-- Constraints for table `transaction_log_compushop`
--
ALTER TABLE `transaction_log_compushop`
  ADD CONSTRAINT `transaction_log_compushop_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `pelanggan` (`userid`),
  ADD CONSTRAINT `transaction_log_compushop_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `produk_compushop` (`productid`),
  ADD CONSTRAINT `transaction_log_compushop_ibfk_3` FOREIGN KEY (`inv_num`) REFERENCES `transaction_log` (`inv_num`);

--
-- Constraints for table `transaction_log_internet`
--
ALTER TABLE `transaction_log_internet`
  ADD CONSTRAINT `transaction_log_internet_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `pelanggan` (`userid`),
  ADD CONSTRAINT `transaction_log_internet_ibfk_2` FOREIGN KEY (`inv_num`) REFERENCES `transaction_log` (`inv_num`);

--
-- Constraints for table `transaction_log_training`
--
ALTER TABLE `transaction_log_training`
  ADD CONSTRAINT `transaction_log_training_ibfk_1` FOREIGN KEY (`productid_training`) REFERENCES `produk_training` (`productid_training`),
  ADD CONSTRAINT `transaction_log_training_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `pelanggan` (`userid`),
  ADD CONSTRAINT `transaction_log_training_ibfk_3` FOREIGN KEY (`inv_num`) REFERENCES `transaction_log` (`inv_num`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
