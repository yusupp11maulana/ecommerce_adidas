-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2021 pada 23.57
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_adidas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_cust` varchar(20) NOT NULL,
  `nama_cust` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `notelp_cust` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_cust`, `nama_cust`, `email`, `password`, `notelp_cust`) VALUES
('Cust0001', 'Era Hermawan', 'rehrmwn@gmail.com', 'era123', '0895605891012');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kode_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `size_nya` varchar(255) NOT NULL,
  `img_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama_produk`, `harga`, `size_nya`, `img_produk`) VALUES
(1, 'ULTRABOOST 20 SHOES', 1800000, '39 - 45', 'assets/images/product/Sepatu 1.jpg'),
(2, 'Terrex Urban Low Hiking', 2000000, '39 - 45', 'assets/images/product/Sepatu 2.jpg'),
(3, 'ZX 1000 Retro Shoes', 1800000, '39 - 45', 'assets/images/product/Sepatu 3.jpg'),
(4, 'X9000L2 Shoes', 1700000, '35 - 43', 'assets/images/product/Sepatu 4.jpg'),
(5, 'Edge XT Shoes', 1440000, '35 - 43', 'assets/images/product/Sepatu 5.jpg'),
(6, 'X9000L1 Shoes', 1400000, '35 - 43', 'assets/images/product/Sepatu 6.jpg'),
(7, 'X9000L3 Shoes', 1900000, '16 - 30', 'assets/images/product/Sepatu 7.jpg'),
(8, 'Courtmaster Shoes', 1100000, '16 - 30', 'assets/images/product/Sepatu 8.jpg'),
(9, 'Response Trail Shoes', 1100000, '16 - 30', 'assets/images/product/Sepatu 9.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(20) NOT NULL,
  `kode_produk` int(11) DEFAULT NULL,
  `id_cust` varchar(20) DEFAULT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `alamat_cust` varchar(100) NOT NULL,
  `jml_beli` int(11) DEFAULT NULL,
  `size` varchar(20) NOT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `tgl_transaksi` date NOT NULL,
  `norek_cust` varchar(100) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `status_trans` varchar(20) NOT NULL,
  `ketnya` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_produk`, `id_cust`, `nama_pemesan`, `alamat_cust`, `jml_beli`, `size`, `total_bayar`, `tgl_transaksi`, `norek_cust`, `bukti_pembayaran`, `status_trans`, `ketnya`) VALUES
('TOAS00001', 9, 'Cust0001', 'Era Hermawan', 'Jl Rungkut Madya blok C No 27', 1, '42', 1100000, '2021-01-28', '1410016860132', 'EraHermawan28Jan.png', 'Refund', 'mohon maaf, stok produk anda masih kosong');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `kode_produk` (`kode_produk`),
  ADD KEY `transaksi_ibfk_2` (`id_cust`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_cust`) REFERENCES `customer` (`id_cust`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
