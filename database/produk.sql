-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2019 at 05:43 AM
-- Server version: 5.5.22
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ID` int(10) NOT NULL,
  `NAMA` varchar(200) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL,
  `DESKRIPSI` text,
  `IMAGE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID`, `NAMA`, `HARGA`, `DESKRIPSI`, `IMAGE`) VALUES
(1, 'Acer Aspire E5-473G', 9000000, 'Spesifikasi: intel core i7, nvidia gforce, windows 10 home', 'Acer Aspire E5-473G.PNG'),
(2, 'Samsung LED TV 32 inch', 5000000, 'Fitur :\r\n-LED TV\r\n-32 Inch\r\n-HD Ready 1366 x 768\r\n-Clear Motion Rate 120/50Hz\r\n-USB Movie\r\n-1x HDMI\r\n-1x USB', 'Samsung LED TV 32 inch.png'),
(3, 'Samsung Galaxy Note 9', 8000000, 'Qualcomm octa core processor, baterai 4200MAH, layar corning gorila glass 4', 'Galaxy Note 9.png'),
(8, 'Casio Edifice Men\'s Watch', 2100000, 'Stainless Steel Band. Rantai EFR-556DB terbuat dari Stainless Steel original kualitas terbaik.', 'CASIO EDIFICE ORIGINAL.jpg'),
(9, 'Mairu Tas Ransel Laptop', 400000, 'Nyaman digunakan untuk beraktivitas sehari-hari. Dilengkapi juga dengan fitur kompartemen khusus yang dapat memuat laptop berukuran hingga 14 Inch', 'Mairu Tas Ransel Laptop.png'),
(11, 'Nike Tech Swoosh Cap', 120000, 'Didesain khusus untuk olah raga tennis. Warna hitam. Material poliester', 'Nike Tech Swoosh Cap.png'),
(12, 'Rubik 3x3 Yong Jun Yulong Stickerless', 90000, 'Rubik yong jun Yulong original \r\nwarna stickerless (tanpa sticker)', 'Rubik 3x3 Yong Jun YJ Yulong Speedcube Stickerless.png'),
(55, 'Nike Sports Shoes', 700000, 'Size: 36-40\r\nPREMIUM QUALITY\r\nBrand New With Box', '833260-010-ni-7-nike-black-white-original-imaf9gj5fgp3n43x.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
