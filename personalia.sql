-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mar 2021 pada 12.07
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
  `id` int(11) NOT NULL,
  `jen_kel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jeniskelamin`
--

INSERT INTO `jeniskelamin` (`id`, `jen_kel`) VALUES
(1, 'Laki-laki'),
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
  `id` int(11) NOT NULL,
  `Penanggung` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penanggung`
--

INSERT INTO `penanggung` (`id`, `Penanggung`) VALUES
(1, 'Pribadi'),
(2, 'BPJS'),
(3, 'Asuransi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poliklinik`
--

CREATE TABLE `poliklinik` (
  `id` int(11) NOT NULL,
  `Poliklinik` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poliklinik`
--

INSERT INTO `poliklinik` (`id`, `Poliklinik`) VALUES
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
  `jeniskelamin` varchar(10) NOT NULL,
  `penanggung` varchar(10) NOT NULL,
  `poliklinik` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `no_transaksi`, `nama`, `jeniskelamin`, `penanggung`, `poliklinik`) VALUES
(5, 'RS-0321-0002', 'Rananda Diki Pratama', 'Laki-laki', 'BPJS', 'Poli Umum'),
(6, 'RS-0321-0006', 'Arawinda Dea Alisia', 'Perempuan', 'Asuransi', 'Poli Jantung'),
(7, 'RS-0321-0007', 'Arinanda Dara Juniar', 'Perempuan', 'Asuransi', 'Poli THT'),
(8, 'RS-0321-0008', 'Erika Novita Sari', 'Perempuan', 'Pribadi', 'Poli Umum'),
(9, 'RS-0321-0009', 'Christian Aldo M', 'Laki-laki', 'Asuransi', 'Poli Jantung'),
(10, 'RS-0321-0010', 'Kentit', 'Perempuan', 'Pribadi', 'Poli Umum'),
(12, 'RS-0321-0012', 'Didik Budi S', 'Laki-laki', 'Pribadi', 'Poli Jantung'),
(13, 'RS-0321-0013', 'Eko Nanang S', 'Laki-laki', 'BPJS', 'Poli Gigi'),
(14, 'RS-0321-0014', 'Teguh Pribadi', 'Laki-laki', 'Pribadi', 'Poli Umum'),
(15, 'RS-0321-0015', 'Nana', 'Perempuan', 'Pribadi', 'Poli Gigi'),
(16, 'RS-0321-0016', 'Nopa Dwi Saoutra', 'Laki-laki', 'BPJS', 'Poli Umum'),
(17, 'RS-0321-0017', 'Eka Johan', 'Laki-laki', 'BPJS', 'Poli Gigi'),
(18, 'RS-0321-0018', 'Radit', 'Laki-laki', 'Pribadi', 'Poli Gigi'),
(19, 'RS-0321-0019', 'Novita', 'Perempuan', 'Asuransi', 'Poli Gigi'),
(20, 'RS-0321-0020', 'Paqur', 'Laki-laki', 'BPJS', 'Poli Jantung'),
(21, 'RS-0321-0021', 'Dodit', 'Laki-laki', 'Pribadi', 'Poli Umum'),
(22, 'RS-0321-0022', 'Narimo', 'Laki-laki', 'BPJS', 'Poli Gigi'),
(23, 'RS-0321-0023', 'Cah Nakal', 'Laki-laki', 'BPJS', 'Poli Gigi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penanggung`
--
ALTER TABLE `penanggung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
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
-- AUTO_INCREMENT for table `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penanggung`
--
ALTER TABLE `penanggung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
