-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Mar 2023 pada 13.00
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfaisalfahlevi_05`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa_05`
--

CREATE TABLE `tbl_siswa_05` (
  `idsiswa05` int(10) NOT NULL,
  `nmsiswa05` varchar(35) NOT NULL,
  `tlpsiswa05` varchar(15) NOT NULL,
  `jursiswa05` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_siswa_05`
--

INSERT INTO `tbl_siswa_05` (`idsiswa05`, `nmsiswa05`, `tlpsiswa05`, `jursiswa05`) VALUES
(1, 'levi', '085153243', 'RPL'),
(4, 'Siaapa', '0321937218', 'RPL');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_siswa_05`
--
ALTER TABLE `tbl_siswa_05`
  ADD PRIMARY KEY (`idsiswa05`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa_05`
--
ALTER TABLE `tbl_siswa_05`
  MODIFY `idsiswa05` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
