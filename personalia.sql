-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mar 2021 pada 07.01
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jeniskelamin`
--

CREATE TABLE `jeniskelamin` (
  `id_jk` int(11) NOT NULL,
  `jen_kel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jeniskelamin`
--

INSERT INTO `jeniskelamin` (`id_jk`, `jen_kel`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$7roR4EbEUnPvm/qRyI79xOnFj3wuUVwgDGzSPUZdhgddGXE72R9eu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penanggung`
--

CREATE TABLE `penanggung` (
  `id_pg` int(11) NOT NULL,
  `Penanggung` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penanggung`
--

INSERT INTO `penanggung` (`id_pg`, `Penanggung`) VALUES
(1, 'Pribadi'),
(2, 'BPJS'),
(3, 'Asuransi'),
(5, 'Prudential');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poliklinik`
--

CREATE TABLE `poliklinik` (
  `id_pk` int(11) NOT NULL,
  `Poliklinik` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poliklinik`
--

INSERT INTO `poliklinik` (`id_pk`, `Poliklinik`) VALUES
(1, 'Poli Umum'),
(2, 'Poli Gigi'),
(3, 'Poli Jantung'),
(4, 'Poli THT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `no_transaksi` varchar(12) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jeniskelamin` int(1) NOT NULL,
  `penanggung` int(1) NOT NULL,
  `poliklinik` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `no_transaksi`, `nama`, `jeniskelamin`, `penanggung`, `poliklinik`) VALUES
(40, 'RS-0321-0001', 'Rananda Diki', 1, 3, 3),
(41, 'RS-0321-0041', 'Arawinda Dea Alisia', 2, 2, 3),
(42, 'RS-0321-0042', 'Erika Novita Sari', 2, 1, 1),
(43, 'RS-0321-0043', 'Christian Aldo M', 1, 3, 2),
(44, 'RS-0321-0044', 'Arinanda Dara Juniar', 2, 1, 1),
(45, 'RS-0321-0045', 'Agustinus Alfonsusus', 1, 2, 2),
(46, 'RS-0321-0046', 'Didik Budi Sulistio', 1, 2, 2),
(48, 'RS-1003-0047', 'Akbar Muhamad Widayat', 1, 5, 2),
(49, 'RS-1203-0049', 'Gabby', 1, 1, 2),
(50, 'RS-1203-0050', ' Nara dara', 2, 3, 3),
(51, 'RS-1203-0051', 'Genji setiawan', 1, 2, 3),
(52, 'RS-1203-0052', 'Iko Setyoko', 1, 3, 3),
(53, 'RS-1203-0053', 'Ratna Dwi Utami', 2, 1, 1),
(54, 'RS-1203-0054', 'Lala Lativa', 2, 1, 2),
(55, 'RS-1203-0055', 'Jeje Nugraha', 1, 3, 1),
(56, 'RS-1203-0056', 'Jenifer Lopes', 2, 2, 4),
(57, 'RS-1203-0057', 'Sasa Frida ', 2, 1, 1),
(58, 'RS-1203-0058', 'Reni Dwi Febriani', 2, 1, 2),
(59, 'RS-1203-0059', 'Bima Nugraha Aji', 2, 1, 1),
(60, 'RS-1203-0060', 'Jandi hundowo', 1, 2, 3),
(61, 'RS-1203-0061', 'Fafa Latifa', 2, 2, 2),
(62, 'RS-1203-0062', 'Arum Ningsih Putri', 2, 1, 3),
(63, 'RS-1303-0063', 'Gino Santoso', 1, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penanggung`
--
ALTER TABLE `penanggung`
  ADD PRIMARY KEY (`id_pg`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`id_pk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  MODIFY `id_jk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penanggung`
--
ALTER TABLE `penanggung`
  MODIFY `id_pg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
