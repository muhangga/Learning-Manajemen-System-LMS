-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2020 pada 10.53
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning_softes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `tanggal_dibuat` int(11) NOT NULL,
  `akses` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `email`, `nama`, `password`, `gambar`, `tanggal_dibuat`, `akses`, `status`) VALUES
(4, 'admin@gmail.com', 'Muhammad Angga', '$2y$10$6WCpUp2auE7CBcNkiDHQfuKTsOYtIoq0gemRemWZ8S.VZcValgafG', 'angga2.jpg', 1601949936, 1, 1),
(7, 'nurmin@gmail.com', 'Nurmin Kuma', '$2y$10$Wh582/T7Z2WfwavA22l9d.vCcYfXw04gFC0.tH8DjCUrYg1MDLFqe', 'user.png', 1603127748, 1, 1),
(8, 'adinda@gmail.com', 'Adinda Risty Kumala', '$2y$10$wME6VVIwb3a4.o6dUKWmQek1uVWQ.AQhVBigs.t2cD19VK7gutx8m', 'user.png', 1603127761, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas_matkul`
--

CREATE TABLE `tbl_kelas_matkul` (
  `id_kelas_matkul` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `matkul` varchar(255) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas_matkul`
--

INSERT INTO `tbl_kelas_matkul` (`id_kelas_matkul`, `id_user`, `matkul`, `status`) VALUES
(10, 17, 'Analisis Perancangan Sistem', '1'),
(11, 17, 'Sistem Mikroprosessor', '1'),
(12, 17, 'Teknik Simulasi Dan Data Mining', '1'),
(13, 17, 'Desain Grafis', '1'),
(14, 17, 'Software Testing', '1'),
(15, 17, 'Manajemen Proyek', '1'),
(16, 17, 'Internet Of Things', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `id_matkul` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `matkul` varchar(255) NOT NULL,
  `type_semester` int(2) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_matkul`
--

INSERT INTO `tbl_matkul` (`id_matkul`, `semester`, `matkul`, `type_semester`, `status`) VALUES
(4, 6, 'Mobile Programming', 2, 1),
(7, 5, 'Sistem Mikroprosessor', 1, 1),
(8, 5, 'Analisis Perancangan Sistem', 1, 1),
(9, 5, 'Internet Of Things', 1, 1),
(10, 5, 'Teknik Simulasi Dan Data Mining', 1, 1),
(11, 5, 'Desain Grafis', 1, 1),
(12, 5, 'Software Testing', 1, 1),
(13, 5, 'Manajemen Proyek', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `npm` varchar(25) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `tanggal_dibuat` int(11) NOT NULL,
  `akses` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `npm`, `nama`, `email`, `password`, `gambar`, `tanggal_dibuat`, `akses`, `status`) VALUES
(17, '065118183', 'Muhamad Angga', 'angga11@gmail.com', '$2y$10$122dMLFf9UWMza19CezgoOHvt1p2q5PCpX.BmxwhWcn0tr3ACg37C', 'angga3.jpg', 1602477871, 2, 1),
(18, '065118202', 'Adinda Risty Kumalaa', 'adinda@gmail.com', '$2y$10$XP0gDFMeceFeASWx2CKqW.MuluBnTO1.wHcqn5q.IwK5BBxIZ1MT2', 'user1.png', 1603127625, 2, 1),
(19, '065118322', 'Nurmin Kuma', 'nurmin@gmail.com', '$2y$10$oC2yHwoqI0LlCSoI.vGN4OrHdKC3IBfLyjAsl8GECpZ84rGVKeJTC', 'user.png', 1603128034, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_kelas_matkul`
--
ALTER TABLE `tbl_kelas_matkul`
  ADD PRIMARY KEY (`id_kelas_matkul`);

--
-- Indeks untuk tabel `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas_matkul`
--
ALTER TABLE `tbl_kelas_matkul`
  MODIFY `id_kelas_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
