-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2023 pada 05.45
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lakeside`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `debit`
--

CREATE TABLE `debit` (
  `id_debit` int(255) NOT NULL,
  `Jumlah` int(255) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `PJ` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `debit`
--

INSERT INTO `debit` (`id_debit`, `Jumlah`, `Tanggal`, `Keterangan`, `PJ`, `created_at`, `updated_at`) VALUES
(1, 0, '2023-07-19', 'Ini hanya tes', 'Jonat', NULL, NULL),
(2, 0, '2023-07-19', 'ini hanya tes', 'Apalah', NULL, NULL),
(3, 0, '2023-07-19', 'ini hanya tes', 'Apalah', NULL, NULL),
(4, 0, '2023-07-24', 'apalah', 'iya saya', NULL, NULL),
(5, 0, NULL, '', '', '2023-07-25', '2023-07-25'),
(6, 0, NULL, '', '', '2023-07-25', '2023-07-25'),
(7, 0, NULL, '', '', '2023-07-25', '2023-07-25'),
(8, 0, NULL, '', '', '2023-07-25', '2023-07-25'),
(9, 0, NULL, '', '', '2023-07-25', '2023-07-25'),
(10, 0, NULL, '', '', '2023-07-25', '2023-07-25'),
(11, 0, NULL, '', '', '2023-07-25', '2023-07-25'),
(12, 0, NULL, '', '', '2023-07-25', '2023-07-25'),
(13, 0, NULL, '', '', '2023-07-25', '2023-07-25'),
(14, 0, NULL, '', NULL, '2023-07-25', '2023-07-25'),
(15, 0, NULL, '', NULL, '2023-07-25', '2023-07-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kredit`
--

CREATE TABLE `kredit` (
  `id_kredit` int(255) NOT NULL,
  `Jumlah` int(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Penanggung Jawab` varchar(255) NOT NULL,
  `Bukti` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kredit`
--

INSERT INTO `kredit` (`id_kredit`, `Jumlah`, `Tanggal`, `Keterangan`, `Penanggung Jawab`, `Bukti`, `created_at`, `updated_at`) VALUES
(1, 0, '2023-07-19', 'ini hanya tes', 'Jonathan', 'foto.jpg', NULL, NULL),
(2, 0, '2023-07-19', 'ini hanya tes', 'Jonathan', 'foto.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `debit`
--
ALTER TABLE `debit`
  ADD PRIMARY KEY (`id_debit`);

--
-- Indeks untuk tabel `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`id_kredit`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `debit`
--
ALTER TABLE `debit`
  MODIFY `id_debit` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kredit`
--
ALTER TABLE `kredit`
  MODIFY `id_kredit` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
