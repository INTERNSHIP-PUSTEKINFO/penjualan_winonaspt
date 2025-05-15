-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2025 at 06:49 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpenjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int NOT NULL,
  `nama_customer` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telepon` int DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama_customer`, `email`, `no_telepon`, `alamat`) VALUES
(6, 'Saskia lavensky', 'saskialavensky@gmail.com', 866778899, 'BSD'),
(7, 'Marvin Gultom', 'marvingltm@gmail.com', 877889900, 'Bogor'),
(8, 'Ricky Cang', 'ricky@gmail.com', 888990011, 'Jakarta'),
(9, 'Ghafiq', 'ghafiq@gmail.com', 899001124, 'Bekasi'),
(10, 'Izzan', 'izzan@gmail.com', 811223344, 'Serpong'),
(14, 'hodiiuccha', 'hodiuccha@gmail.com', 81235789, 'meruya'),
(15, 'winonaspt', 'winonaspt@gmail.com', 977294142, 'cirendeu'),
(17, 'athayarm', 'athayarm@gmail.com', 812357890, 'Tajur Halang'),
(19, 'berlianisls', 'berlianisls@gmail.com', 812357890, 'Depok'),
(31, 'Ike', 'Ike123@gmail.com', 812345, 'Senayan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Makanan'),
(2, 'Minuman'),
(3, 'Pakaian'),
(5, 'Kesehatan'),
(6, 'Kecantikan'),
(7, 'Olahraga'),
(8, 'Mainan Anak'),
(10, 'Perabotan'),
(11, 'Puzzle');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `id_kategori` int DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `stok` int DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_kategori`, `nama_produk`, `harga`, `stok`, `deskripsi`) VALUES
(1, 1, 'Serum Brightening', 140000, 30, 'Brightening untuk mencerahkan wajah'),
(3, 3, 'Kalung', 350000, 50, 'Kalung untuk aksesoris'),
(4, 4, 'Earphone', 250000, 10, 'Earphone dengan suara yang bass dan nyaman untuk didengar'),
(5, 5, 'Blender Philips', 450000, 30, 'Blender untuk membuat jus dan smoothie'),
(6, 6, 'Oli Mesin Motor', 75000, 500, 'Oli mesin motor untuk menjaga performa mesin'),
(7, 7, 'Snack Coklat', 25000, 1000, 'Snack coklat dengan rasa manis dan creamy'),
(8, 8, 'Soda Botol 500ml', 12000, 1200, 'Minuman soda dengan rasa menyegarkan'),
(10, 10, 'Kaos Polos Merah', 80000, 300, 'Kaos polos warna merah untuk gaya santai');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int NOT NULL,
  `nama_customer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `metode_pembayaran` varchar(255) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `total` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama_customer`, `nama_produk`, `tanggal_transaksi`, `metode_pembayaran`, `quantity`, `total`) VALUES
(1, 'Saskia lavensky', 'Baju', '2025-04-20', 'Transfer Bank', 2, 240000),
(2, 'Winonaspt', 'Kalung', '2025-04-19', 'Cash On Delivery', 1, 350000),
(3, 'Athayarm', 'Blender Philips', '2025-04-28', 'Tunai', 1, 450000),
(4, 'Winonaspt', 'Snack Coklat', '2025-04-28', 'E-wallet', 3, 75000),
(5, 'Berliani', 'Smartphone XYZ 5G', '2025-04-28', 'Transfer Bank', 1, 5500000),
(6, 'Hodiuccha', 'Kaos Polos Merah', '2025-04-28', 'Kartu Kredit', 2, 160000),
(7, 'Lala', 'Serum Wajah', '2025-04-28', 'Cash On Delivery', 5, 900000),
(8, 'Saskia', 'Boneka Teddy Bear', '2025-04-28', 'Transfer Bank', 1, 150000),
(9, 'Athayarm', 'Oli Mesin Motor', '2025-04-28', 'Tunai', 2, 90000),
(10, 'Berliani', 'Soda Botol 500ml', '2025-04-28', 'E-wallet', 4, 48000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
