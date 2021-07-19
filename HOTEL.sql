-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 19 Jul 2021 pada 19.59
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HOTEL`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'ani', 'ani.isnaeny07@gmail.com', 'admin', '2021-07-18 11:45:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456'),
(2, 'staffname', 'stafftoken');

-- --------------------------------------------------------

--
-- Struktur dari tabel `VIP`
--

CREATE TABLE `VIP` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Negara` varchar(20) NOT NULL,
  `Waktu` datetime(6) DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `Ciri` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `VIP`
--

INSERT INTO `VIP` (`id`, `Nama`, `Negara`, `Waktu`, `Ciri`) VALUES
(7, 'Taufik Hidayat', 'indonesia', '2021-07-20 00:10:46.398401', 'memakai kacamata'),
(8, 'Paul Pogba', 'USA', '2021-07-20 00:11:21.520067', 'kacamata'),
(9, 'Joanita', 'china', '2021-07-31 00:00:00.000000', 'memakai rok hitam dan topi merah'),
(10, 'ani isnaeni', 'afganistan', '2021-07-20 00:12:49.067971', 'memakai kaos merah'),
(13, 'diko', 'vietnam', '2021-07-22 00:00:00.000000', 'rambut hitam panjang'),
(14, 'rindhie antika', 'korea utara', '2021-07-22 00:00:00.000000', 'memakai tas gucci coklat'),
(15, 'riri ', 'afganistan', '2021-07-22 00:00:00.000000', 'tinggi rambut curly blonde');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `VIP`
--
ALTER TABLE `VIP`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `VIP`
--
ALTER TABLE `VIP`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
