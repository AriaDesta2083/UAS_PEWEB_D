-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2021 pada 16.29
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_ar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(285) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id`, `nama`, `alamat`, `jk`, `email`, `password`) VALUES
(6, 'asd', 'asd', 'pria', 'asd@mail.com', '$2y$10$r1JNe.0Mu/y3A7vx2Ub4Fev1sVkjaCJqzoDBupTg5OPUhbbGYo19u'),
(9, 'pocii', 'jember', 'pria', 'poci@mail.com', '$2y$10$yWkaFyr3NHJa9OGi4h0GNuqWoLceDiqLR2JxjgXeNl0ldvu3SWmB2'),
(10, 'desta', 'paris', 'pria', 'desta@mail.com', '$2y$10$4ASLSKVlMUnDSj/ErVBD8.6wWeYR0u07lN4.tQHfaESlu0Ah26Irq'),
(13, 'Aria Desta Prabu', 'Bondowoso', NULL, 'ar@gmail.com', '$2y$10$95S512VgXvQMDg.Xa2VP3eBIhLLQsqPLqzGHXHhTSkZ0p2Y7qQOjO'),
(14, 'igithalia arifki', 'maesan', 'pria', 'ijit@mail.com', '$2y$10$YPVhuzx6mMlmyNZIkrtoy.tBjP9PSuasgK0tnPWuBgTCFD9KNzkqm'),
(15, 'raras dwistian', 'Blitar', 'pria', 'raras@mail.com', '$2y$10$sbMLahKTHqKA5TiseYaSYexFN/ZIUrKVmFeKCANADXxyYhOnXRTU2'),
(16, 'sultan hasbi', 'america', 'pria', 'hasbi@mail.com', '$2y$10$T.oFk7siQWGk7cLINmsgs.wHjUAhAi7DVI/QkrUZC0naW9EblJIcm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_user`
--

CREATE TABLE `file_user` (
  `id_user` int(11) NOT NULL,
  `nama_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `file_user`
--

INSERT INTO `file_user` (`id_user`, `nama_file`) VALUES
(9, 'poci.jpg'),
(10, 'paolo-bendandi-CU_tgif9PTg-unsplash.jpg'),
(13, 'AR.jpg'),
(14, 'ijit.jpg'),
(15, 'poci.jpg'),
(16, 'hasbi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `file_user`
--
ALTER TABLE `file_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
