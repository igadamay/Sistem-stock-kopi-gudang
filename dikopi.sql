-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 15.03
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dikopi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kopi`
--

CREATE TABLE `kopi` (
  `Idkopi` varchar(100) NOT NULL,
  `Jenis_kopi` varchar(100) NOT NULL,
  `Tanggal` int(250) NOT NULL,
  `Bulan` varchar(100) NOT NULL,
  `Tahun` varchar(100) NOT NULL,
  `Jumlah_kopi` int(100) NOT NULL,
  `Exp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kopi`
--

INSERT INTO `kopi` (`Idkopi`, `Jenis_kopi`, `Tanggal`, `Bulan`, `Tahun`, `Jumlah_kopi`, `Exp`) VALUES
('AA001', 'Arabika Gayo', 7, 'September', '2021', 32, '17 Septemer 2023'),
('AG010', 'Arabika Gayo', 11, 'Juni', '2020', 1700, '2024-07-18'),
('AT0019', 'Arabika Toraja', 3, 'Juni', '2020', 300, '2025-06-23'),
('AT002', 'Arabika Toraja', 28, 'September', '2021', 30, '18 Septemer 2023'),
('AT0020', 'Arabika Toraja', 12, 'Juni', '2021', 200, '2021-06-30'),
('AT009', 'Arabika Toraja', 10, 'Juni', '2021', 50, '2021-06-16'),
('K001', 'Kintamani', 9, 'Januari', '2020', 70, '19 Januari 2023'),
('K002', 'Kintamani', 10, 'September', '2020', 35, '20 Septemer 2023'),
('K003', 'Kintamani', 21, 'Maret', '2021', 50, '21 Maret 2023'),
('L001', 'Luwak', 12, 'Agustus', '2019', 20, '22 Agustus 2022'),
('L002', 'Luwak', 31, 'Januari', '2020', 30, '23 Januari 2023'),
('R001', 'Robusta', 11, 'Juni', '2021', 50, '08 juni 2025'),
('R002', 'Robusta', 2, 'Maret', '2021', 60, '9 maret 2025'),
('R003', 'Robusta', 23, 'Juli', '2021', 40, '10 juli 2025'),
('R004', 'Robusta', 14, 'Juni', '2021', 35, '19 juni 2025'),
('R005', 'Robusta', 5, 'Mei', '2021', 35, '12 mei 2025'),
('R006', 'Robusta', 26, 'Juli', '2021', 40, '23 juli 2025');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `password`) VALUES
('001', 'Adminolliv', 'olliv'),
('002', 'igadamay', 'igadamay');

-- --------------------------------------------------------

--
-- Struktur dari tabel `olah_kopi`
--

CREATE TABLE `olah_kopi` (
  `id` varchar(100) NOT NULL,
  `nama_kopi` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `exp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `olah_kopi`
--

INSERT INTO `olah_kopi` (`id`, `nama_kopi`, `jumlah`, `exp`) VALUES
('AA001', 'Arabika Gayo', 10, '21 juni 2025'),
('AA002', 'Arabika Gayo', 10, '22 juni 2025'),
('AA003', 'Arabika Gayo', 10, '23 juni 2025'),
('AA004', 'Arabika Gayo', 10, '24 juni 2025'),
('K002', 'Kintani', 10, '11 juni 2025'),
('K003', 'Kintani', 10, '12 juni 2025'),
('K004', 'Kintani', 10, '13 juni 2025'),
('K005', 'Kintani', 10, '14 juni 2025'),
('K006', 'Kintani', 10, '15 juni 2025'),
('L001', 'Luwak', 10, '16 juni 2025'),
('L002', 'Luwak', 10, '17 juni 2025'),
('L003', 'Luwak', 10, '18 juni 2025'),
('L004', 'Luwak', 10, '19 juni 2025'),
('L005', 'Luwak', 10, '20 juni 2025'),
('R001', 'Robusta', 10, '08 juni 2025'),
('R002', 'Robusta', 10, '9 juni 2025'),
('R003', 'Robusta', 10, '10 juni 2025');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kopi`
--
ALTER TABLE `kopi`
  ADD PRIMARY KEY (`Idkopi`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `olah_kopi`
--
ALTER TABLE `olah_kopi`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
