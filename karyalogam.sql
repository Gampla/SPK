-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jun 2023 pada 16.20
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karya_tembaga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `id_feedback` int(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_feedback`
--

INSERT INTO `tb_feedback` (`id_feedback`, `nama`, `feedback`) VALUES
(12, 'Afrisa Miftaqul Huda', 'Aplikasi ini menurut saya kurang namun secara fungsional sidah memenuhi kebutuhan web ecomerce'),
(13, 'afrisa', 'aplikasi ......'),
(14, 'Afrisa Miftaqul Huda', 'Mantap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama_pemesan` varchar(60) DEFAULT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id_invoice`, `nama_pemesan`, `tgl_pesan`, `batas_bayar`) VALUES
(40, 'Afrisa Miftaqul Huda', '2023-01-13 00:26:03', '2023-01-14 00:26:03'),
(41, 'afrisa', '2023-01-25 09:39:02', '2023-01-26 09:39:02'),
(42, 'anddan', '2023-01-26 08:11:41', '2023-01-27 08:11:41'),
(43, 'dsdsd', '2023-01-27 14:00:11', '2023-01-28 14:00:11'),
(44, '', '2023-04-06 10:20:27', '2023-04-07 10:20:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kerajinan`
--

CREATE TABLE `tb_kerajinan` (
  `id_kerajinan` int(11) NOT NULL,
  `nama_kerajinan` varchar(120) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kerajinan`
--

INSERT INTO `tb_kerajinan` (`id_kerajinan`, `nama_kerajinan`, `deskripsi`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(29, 'Lampu Nabawi', 'Lampu Nabawi adalah hiasan lampu khas yang bercorak ketimuran dengan adanya ukiran kaligrafi yang menghiasi lampu, dan lampu ini dibuat dengan material kuningan yang berkualitas. ', 'Lampu gantung', 22000000, 4, 'WhatsApp_Image_2023-01-19_at_08_34_50.jpg'),
(30, 'Pintu Nabawi', 'replika pintu majid nabai yang terbuat dari kuningan', 'pintu', 1400000, 12, 'WhatsApp_Image_2023-01-19_at_08_39_15.jpg'),
(31, 'sddsd', 'dsdd', 'sds', 2122, 323, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_kerajinan` int(11) NOT NULL,
  `nama_kerajinan` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_kerajinan`, `nama_kerajinan`, `jumlah`, `harga`) VALUES
(18, 2, 20, 'Rak Meja', 2, 5000),
(19, 35, 24, 'Bahar', 1, 500000),
(20, 36, 26, 'Sing 8', 1, 500000),
(21, 37, 24, 'Bahar', 1, 500000),
(22, 38, 24, 'Bahar', 1, 500000),
(23, 39, 24, 'Bahar', 1, 500000),
(24, 40, 28, 'Lampu Nabawi', 1, 1200000),
(25, 41, 28, 'Lampu Nabawi', 1, 1200000),
(26, 41, 29, 'Lampu Nabawi', 1, 22000000),
(27, 42, 29, 'Lampu Nabawi', 1, 22000000),
(28, 43, 29, 'Lampu Nabawi', 1, 22000000),
(29, 43, 30, 'Pintu Nabawi', 1, 1400000),
(30, 44, 30, 'Pintu Nabawi', 1, 1400000),
(31, 45, 29, 'Lampu Nabawi', 1, 22000000),
(32, 44, 30, 'Pintu Nabawi', 1, 1400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'Sofia Aziziah', 'sofia1827@students.amikom.ac.id', 'default.jpg', '$2y$10$EPzN3hVQAn/MkblGIRU1D.9ZHYsUm4IxMkBmQRz1m6tITO9sbBe3m', 2, 1, 20220113),
(7, 'admin', 'admin@students.amikom.ac.id', 'default.jpg', '$2y$10$QQHsuxPQJT8SoLUKSbAlC..P9XIwBQZ4mgMlC5lVs0pubLjYhUMPO', 1, 1, 1642052546),
(8, 'Sofia Aziziah F', 'Shofia@to2k.com', 'default.jpg', '$2y$10$73aHceY5GnRNb7U3oBt4CeH3ppWoIXh4boGSIEPkfTodprZuvAURe', 2, 1, 1642087194),
(9, 'Bagus Wijanarko', 'bagus@gmail.com', 'default.jpg', '$2y$10$LElyCbAurGT5NeZlVU68o.aKNP7uMhX1n.hLtOnJ0JkCxJC9seqt6', 2, 1, 1670964026);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `tb_kerajinan`
--
ALTER TABLE `tb_kerajinan`
  ADD PRIMARY KEY (`id_kerajinan`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_invoice` (`id_invoice`),
  ADD KEY `id_tiket` (`id_kerajinan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `id_feedback` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tb_kerajinan`
--
ALTER TABLE `tb_kerajinan`
  MODIFY `id_kerajinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`role_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
