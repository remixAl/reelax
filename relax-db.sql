-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 08:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relax-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(265) NOT NULL,
  `date_created` int(11) NOT NULL,
  `image` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`, `date_created`, `image`) VALUES
(1, 'Reinaldi', 'remixx', 'reinaldiobi@gmail.com', '$2y$10$BVcsWxQ1LMMV4Yran1tEr.f.NcqlgSaXzIVU.V1RXcCafF68uyT06', 1748917590, 'default.png'),
(2, 'Admin 1', 'admin', 'admin@admin.admin', '$2y$10$TaoyQEB75vO4J01yn5jKo.39Vz19BD0W2RAF.lsd6GDTT73JM//g2', 1748918300, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(3, 'Menu'),
(24, 'CBT'),
(25, 'Tugas'),
(26, 'Menu Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Siswa\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'bx bx-tachometer', 1),
(4, 3, 'Menu Management', 'menu', 'bx bx-folder', 1),
(5, 3, 'Sub Menu Management', 'menu/submenu', 'bx bx-folder-open', 1),
(39, 24, 'Upload Soal', 'cbt/uploadSoal', 'fa-solid fa-file-arrow-up', 1),
(40, 24, 'Bank Soal', 'cbt/bankSoal', 'fa-solid fa-book', 1),
(41, 24, 'Daftar Jenis Ujian', 'cbt/daftarJenisUjian', 'fa-solid fa-table-list', 1),
(42, 24, 'Daftar Ruangan', 'cbt/daftarRuangan', 'fa-solid fa-people-roof', 1),
(43, 24, 'Penjadwalan', 'cbt/penjadwalan', 'fa-solid fa-calendar', 1),
(44, 24, 'Pelaksanaan', 'cbt/pelaksanaan', 'fa-solid fa-clock', 1),
(45, 24, 'Penilaian', 'cbt/penilaian', 'fa-solid fa-square-check', 1),
(46, 24, 'Analisis Butir Soal', 'cbt/analisis', 'bx bx-chart', 1),
(47, 25, 'Tugas', 'tugas', 'bx bx-calendar-check', 1),
(48, 26, 'Data Sekolah', 'other/dataSekolah', 'bx bx-buildings', 1),
(49, 26, 'Konten Belajar', 'other/kontenBelajar', 'bx bx-book', 1),
(50, 26, 'Kelas Virtual', 'other/kelasVirtual', 'bx bx-camera', 1),
(51, 26, 'Laporan', 'other/laporan', 'bx bx-clipboard', 1),
(52, 26, 'e-Rapor', 'other/e-rapor', 'bx bx-', 1),
(53, 26, 'Pengumuman', 'other/pengumuman', 'fa-solid fa-bullhorn', 1),
(54, 1, 'Role', 'admin/role', 'fa-solid fa-user-tie', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
