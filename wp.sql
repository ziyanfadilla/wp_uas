-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2021 pada 12.42
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masker`
--

CREATE TABLE `masker` (
  `id` int(11) NOT NULL,
  `nama_masker` varchar(200) NOT NULL,
  `jenis_kulit` varchar(200) NOT NULL,
  `kategori` varchar(150) NOT NULL,
  `bahan_pembuatan` varchar(150) NOT NULL,
  `stok_barang` int(150) NOT NULL,
  `harga` varchar(350) NOT NULL,
  `gambar` varchar(124) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `masker`
--

INSERT INTO `masker` (`id`, `nama_masker`, `jenis_kulit`, `kategori`, `bahan_pembuatan`, `stok_barang`, `harga`, `gambar`) VALUES
(3, 'daisy organic gren tea', 'berjerawat', 'Organic Face Mask ', 'daun teh', 10, '35.000', '35.000'),
(9, 'daisy organic chocolate', 'berjerawat', 'face mark', 'ada', 23, '35.000', ''),
(10, 'daisy organic mlik', 'normal', 'face mark', 'susu', 23, '35.000', '35.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `nama_masker` varchar(150) NOT NULL,
  `jumlah_barang` int(250) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_harga` int(124) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `alamat`, `nama_masker`, `jumlah_barang`, `tanggal_pembelian`, `total_harga`, `email`) VALUES
(1, 'coba', 'desa coba coba berhadiah', 'daisy organic milk', 123, '2020-08-06', 150000, 'coba@gmail.com'),
(3, 'yuni', 'slerok', 'daisy organic chocolate', 123, '2020-12-03', 90000, 'ziyanfadilla1@gmail.com'),
(5, 'ziyan', 'tegal', 'daisy organic ', 123, '2020-12-09', 1500000, 'ziyanfadilla1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masker`
--
ALTER TABLE `masker`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `masker`
--
ALTER TABLE `masker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
