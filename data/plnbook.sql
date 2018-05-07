-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 05:19 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plnbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `role_login`
--

CREATE TABLE `role_login` (
  `id_role` varchar(2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='role login apps';

--
-- Dumping data for table `role_login`
--

INSERT INTO `role_login` (`id_role`, `status`) VALUES
('1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `nip` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `username` varchar(10) NOT NULL,
  `passwd` varchar(6) NOT NULL,
  `id_role` varchar(2) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`nip`, `nama_karyawan`, `email`, `contact`, `username`, `passwd`, `id_role`, `img`) VALUES
('PLN0001', 'M Iriansyah Putra Pratama', 'pace@gmail.com', '6282248080870', 'pace', 'pace', '1', 'pace.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id_booking` varchar(15) NOT NULL,
  `id_category` varchar(15) NOT NULL,
  `id_sub` varchar(15) NOT NULL,
  `id_produk` varchar(15) NOT NULL,
  `id_pelanggan` varchar(15) NOT NULL,
  `id_mitrapln` varchar(15) DEFAULT NULL,
  `id_rating` varchar(15) NOT NULL,
  `lokasi` text NOT NULL,
  `catatan` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cash` int(3) NOT NULL,
  `status_jalan` int(3) NOT NULL,
  `status_belajar` int(3) NOT NULL,
  `status_selesai` int(3) NOT NULL,
  `cancel` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `nama`, `status`) VALUES
('CATEGORY001', 'Meteran', 1),
('CATEGORY002', 'Distribusi', 1),
('CATEGORY003', 'Konstruksi', 1),
('CATEGORY004', 'APD', 1),
('CATEGORY005', 'Keuangan', 1),
('CATEGORY006', 'SDM', 1),
('CATEGORY007', 'Dinamo', 1),
('CATEGORY008', 'P3B', 1),
('CATEGORY009', 'PJB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id_faq` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id_faq`, `judul`, `deskripsi`, `status`) VALUES
(1, 'Mengapa saya tidak mendapat Order ?', 'mungkin jaringan sedang bermasalah, mohon bersabar ini ujian.. :D', 1),
(2, 'Bagaimana cara TOP UP dompet ?', 'untuk melakukan TOP UP bisa melalui Bank yang ditunjuk oleh kami', 1),
(4, 'Bagaimana menghubungi CS ?', 'silahkan menghubungi CS kami disini', 1),
(6, 'Bagaimana melakukan cancel terhadap Orderan ?', 'cukup menekan tombol CANCEL pada Booking', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_help`
--

CREATE TABLE `tbl_help` (
  `id_help` int(10) NOT NULL,
  `id_category` varchar(15) NOT NULL,
  `isi_saran` text NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_help`
--

INSERT INTO `tbl_help` (`id_help`, `id_category`, `isi_saran`, `tgl_masuk`) VALUES
(1, 'CATEGORY001', 'Mantap lah ya.. ', '2018-05-05'),
(2, 'CATEGORY003', 'Kalo bisa, Mitra PLNnya lebih sigap lagi, jadinya nggak keteteran juga konsumen yg mesannya. Selebihnya baik.. (y)', '2018-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kemampuan`
--

CREATE TABLE `tbl_kemampuan` (
  `id_kemampuan` varchar(15) NOT NULL,
  `id_produk` varchar(15) NOT NULL,
  `id_mitrapln` varchar(15) NOT NULL,
  `nama_kemampuan` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kemampuan`
--

INSERT INTO `tbl_kemampuan` (`id_kemampuan`, `id_produk`, `id_mitrapln`, `nama_kemampuan`, `status`) VALUES
('SKILL001', 'PRODUK001', 'MITRAPLN001', 'Pasang KWH Meter', 1),
('SKILL002', 'PRODUK002', 'MITRAPLN002', 'Penjelasan mengenai meteran', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mitrapln`
--

CREATE TABLE `tbl_mitrapln` (
  `id_mitrapln` varchar(15) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `handphone` varchar(13) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `img` varchar(100) NOT NULL,
  `bio` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mitrapln`
--

INSERT INTO `tbl_mitrapln` (`id_mitrapln`, `full_name`, `email`, `handphone`, `pin`, `img`, `bio`, `status`) VALUES
('MITRAPLN001', 'Muh Iriansyah', 'ryanjoker87@gmail.com', '082248080870', '123456', 'FOTO_M IRIANSYAH.jpg', 'belajar dan bekerja', 1),
('MITRAPLN002', 'Riantri Alvani', 'riantri@gmail.com', '081354141927', 'riantr', 'me.jpg', 'tetap semangat', 1),
('MITRAPLN004', 'Thufail Erlangga', 'erlangga@gmail.com', '081344303816', '2files', 'P_20170704_094835.jpg', 'lulus tepat waktu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` varchar(15) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `handphone` varchar(13) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `full_name`, `email`, `handphone`, `pin`, `img`, `status`) VALUES
('PELANGGAN001', 'Abdul Malik', 'malik@gmail.com', '080870707070', 'maliki', 'P_20170704_135128_BF.jpg', 1),
('PELANGGAN002', 'Firman Giri', 'firman@gmail.com', '808080808080', 'firman', 'qqeqeq.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` varchar(15) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `have` int(2) NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `judul`, `deskripsi`, `have`, `tgl_pesan`) VALUES
('PESAN001', 'pembayaran asuransi', 'data pembayaran bapak belum ada. segera melapor ke kantor kami di ruangan administrasi lantai 4.', 1, '2018-05-04'),
('PESAN002', 'bayar utang', 'jangan lupa bayar utang', 1, '2018-05-04'),
('PESAN003', 'info top up', 'top up dapat dilakukan di Alfamidi dan Alfamart. Terima kasih.', 0, '2018-05-04'),
('PESAN004', 'info THR lebaran', 'THR Lebaran dapat segera diambil ya gaes. di kantor Disjaya lantai 4', 0, '2018-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanglobal`
--

CREATE TABLE `tbl_pesanglobal` (
  `id_pesanglobal` int(10) NOT NULL,
  `id_pesan` varchar(15) NOT NULL,
  `id_mitrapln` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesanglobal`
--

INSERT INTO `tbl_pesanglobal` (`id_pesanglobal`, `id_pesan`, `id_mitrapln`) VALUES
(6, 'PESAN003', 'MITRAPLN001'),
(7, 'PESAN004', 'MITRAPLN001'),
(8, 'PESAN003', 'MITRAPLN002'),
(9, 'PESAN004', 'MITRAPLN002');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanperson`
--

CREATE TABLE `tbl_pesanperson` (
  `id_pesanperson` int(10) NOT NULL,
  `id_pesan` varchar(15) NOT NULL,
  `id_mitrapln` varchar(15) NOT NULL,
  `view` int(2) NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesanperson`
--

INSERT INTO `tbl_pesanperson` (`id_pesanperson`, `id_pesan`, `id_mitrapln`, `view`, `tgl_pesan`) VALUES
(4, 'PESAN001', 'MITRAPLN001', 1, '2018-05-04'),
(5, 'PESAN002', 'MITRAPLN002', 1, '2018-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` varchar(15) NOT NULL,
  `id_category` varchar(15) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `durasi` int(5) NOT NULL,
  `biaya` int(10) NOT NULL,
  `persentasi` int(5) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `id_category`, `nama_produk`, `durasi`, `biaya`, `persentasi`, `status`) VALUES
('PRODUK001', 'CATEGORY001', 'Pemasangan KWH Meter', 120, 200000, 10, 1),
('PRODUK002', 'CATEGORY001', 'Meter masa kini', 180, 300000, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `id_rating` varchar(15) NOT NULL,
  `rating` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub`
--

CREATE TABLE `tbl_sub` (
  `id_sub` varchar(15) NOT NULL,
  `nama_sub` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub`
--

INSERT INTO `tbl_sub` (`id_sub`, `nama_sub`, `status`) VALUES
('SUB001', 'Prabayar', 1),
('SUB002', 'Pascabayar', 1),
('SUB003', 'Otomatis', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role_login`
--
ALTER TABLE `role_login`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_sub` (`id_sub`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_mitrapln` (`id_mitrapln`),
  ADD KEY `id_rating` (`id_rating`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `tbl_help`
--
ALTER TABLE `tbl_help`
  ADD PRIMARY KEY (`id_help`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `tbl_kemampuan`
--
ALTER TABLE `tbl_kemampuan`
  ADD PRIMARY KEY (`id_kemampuan`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_mitrapln` (`id_mitrapln`);

--
-- Indexes for table `tbl_mitrapln`
--
ALTER TABLE `tbl_mitrapln`
  ADD PRIMARY KEY (`id_mitrapln`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbl_pesanglobal`
--
ALTER TABLE `tbl_pesanglobal`
  ADD PRIMARY KEY (`id_pesanglobal`),
  ADD KEY `id_pesan` (`id_pesan`),
  ADD KEY `id_mitrapln` (`id_mitrapln`);

--
-- Indexes for table `tbl_pesanperson`
--
ALTER TABLE `tbl_pesanperson`
  ADD PRIMARY KEY (`id_pesanperson`),
  ADD KEY `id_pesan` (`id_pesan`),
  ADD KEY `id_mitrapln` (`id_mitrapln`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `tbl_sub`
--
ALTER TABLE `tbl_sub`
  ADD PRIMARY KEY (`id_sub`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id_faq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_help`
--
ALTER TABLE `tbl_help`
  MODIFY `id_help` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pesanglobal`
--
ALTER TABLE `tbl_pesanglobal`
  MODIFY `id_pesanglobal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_pesanperson`
--
ALTER TABLE `tbl_pesanperson`
  MODIFY `id_pesanperson` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD CONSTRAINT `tbl_booking_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `tbl_category` (`id_category`),
  ADD CONSTRAINT `tbl_booking_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`),
  ADD CONSTRAINT `tbl_booking_ibfk_3` FOREIGN KEY (`id_sub`) REFERENCES `tbl_sub` (`id_sub`),
  ADD CONSTRAINT `tbl_booking_ibfk_4` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `tbl_booking_ibfk_5` FOREIGN KEY (`id_mitrapln`) REFERENCES `tbl_mitrapln` (`id_mitrapln`),
  ADD CONSTRAINT `tbl_booking_ibfk_6` FOREIGN KEY (`id_rating`) REFERENCES `tbl_rating` (`id_rating`);

--
-- Constraints for table `tbl_help`
--
ALTER TABLE `tbl_help`
  ADD CONSTRAINT `tbl_help_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `tbl_category` (`id_category`);

--
-- Constraints for table `tbl_kemampuan`
--
ALTER TABLE `tbl_kemampuan`
  ADD CONSTRAINT `tbl_kemampuan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`),
  ADD CONSTRAINT `tbl_kemampuan_ibfk_2` FOREIGN KEY (`id_mitrapln`) REFERENCES `tbl_mitrapln` (`id_mitrapln`);

--
-- Constraints for table `tbl_pesanglobal`
--
ALTER TABLE `tbl_pesanglobal`
  ADD CONSTRAINT `tbl_pesanglobal_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `tbl_pesan` (`id_pesan`),
  ADD CONSTRAINT `tbl_pesanglobal_ibfk_2` FOREIGN KEY (`id_mitrapln`) REFERENCES `tbl_mitrapln` (`id_mitrapln`);

--
-- Constraints for table `tbl_pesanperson`
--
ALTER TABLE `tbl_pesanperson`
  ADD CONSTRAINT `tbl_pesanperson_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `tbl_pesan` (`id_pesan`),
  ADD CONSTRAINT `tbl_pesanperson_ibfk_2` FOREIGN KEY (`id_mitrapln`) REFERENCES `tbl_mitrapln` (`id_mitrapln`);

--
-- Constraints for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `tbl_category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
