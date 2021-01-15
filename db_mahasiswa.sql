-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Jan 2021 pada 06.07
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `s1_kemahasiswaan`
--

CREATE TABLE `s1_kemahasiswaan` (
  `id` varchar(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jrs` varchar(20) NOT NULL,
  `matkul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `s1_kemahasiswaan`
--

INSERT INTO `s1_kemahasiswaan` (`id`, `nama`, `nim`, `jrs`, `matkul`) VALUES
('', 'Putu Laksmi', '1851007', 'Sistem Informasi', 'Basis Data'),
('1', 'Muhammad Kanzul Fikri', '18510021', 'Sistem Informasi', 'Basis Data'),
('3', 'Istiqomah', '18210008', 'Fisika', 'Pemrograman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`) VALUES
('18510021', 'pieckbae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s1_kemahasiswaan`
--
ALTER TABLE `s1_kemahasiswaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
