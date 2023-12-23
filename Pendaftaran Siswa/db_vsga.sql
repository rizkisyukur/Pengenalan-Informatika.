-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2023 pada 04.50
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vsga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nama` varchar(50) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki laki') NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha','Konghucu') NOT NULL,
  `sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nama`, `id_siswa`, `alamat`, `jenis_kelamin`, `agama`, `sekolah`) VALUES
('Raflhy Nur Ramadhan', 1, 'BANDUNG, JAWA BARAT', 'Laki laki', 'Islam', 'SMK BAKTI NUSANTARA 666'),
('Budi', 2, 'Semarang', 'Laki laki', 'Kristen', 'SMK BINTARA'),
('Sinta', 3, 'Karawang', 'Perempuan', 'Hindu', 'SMK TANJUNG SARI'),
('Ane', 4, 'BANDUNG', 'Perempuan', 'Konghucu', 'SMK CIAMIS'),
('JOKO', 5, 'BANYUMAS', 'Laki laki', 'Islam', 'SMK TASIK'),
('AGUNG', 6, 'SOLO', 'Laki laki', 'Islam', 'SMK TARUNA'),
('anton', 7, 'karawang', 'Laki laki', 'Islam', 'SMK BAKTI KENCANA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
