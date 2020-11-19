-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 02:38 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media_serve`
--

-- --------------------------------------------------------

--
-- Table structure for table `sering`
--

CREATE TABLE `sering` (
  `id` int(3) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `gambar` varchar(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sering`
--

INSERT INTO `sering` (`id`, `judul`, `kategori`, `gambar`, `deskripsi`) VALUES
(4, 'Mirip dengan MERS dan SARS, In', 'Berita', 'covid4.jpg', 'Liputan6.com, Jakarta SARS-Cov-2 penyebab COVID-10 atau dinyatakan para peneliti tidak jauh berbeda '),
(10, '11 Cara Diet Sehat untuk Menur', 'tips', 'diet1.jpeg', 'Berikut tata cara diet sehat secara alami yang harus kamu lakukan:\r\n1. Pilih Makanan Tepat\r\n2. Tidak'),
(12, 'Tips Awet Muda', 'Kecantikan', 'cantik1.jpg', 'dengan rajin berolahraga dan rajin makan sayur dan buah akan membuat kalian akan nampak lebih 10 tah'),
(13, 'Video Syur Mirip Gisel', 'Berita', 'berita1.jpg', ' Jagat dunia maya sedang dihebohkan dengan video syur mirip Gisella Anastasia. Bahkan, ibu dari Gemp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(130) NOT NULL,
  `email` varchar(130) NOT NULL,
  `image` varchar(130) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$443X2QbnGk4NcudsxjudVe/0X5JkNPhd9V8fy/53FcLD6DzQ5/GSu', 1, 1, 1604908512),
(8, 'Gung Aga', 'gungaga03@gmail.com', 'default.jpg', '$2y$10$v8wQyAAec5uRFr3f1AV/xuetKOAApsuSHVaBrfgJGszaIClhUbM9W', 2, 1, 1605764213);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sering`
--
ALTER TABLE `sering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sering`
--
ALTER TABLE `sering`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
