-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2020 pada 05.54
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

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
-- Struktur dari tabel `sering`
--

CREATE TABLE `sering` (
  `id` int(3) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `gambar` varchar(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sering`
--

INSERT INTO `sering` (`id`, `judul`, `kategori`, `gambar`, `deskripsi`) VALUES
(4, 'Mirip dengan MERS dan SARS, In', 'Berita', 'covid4.jpg', 'Liputan6.com, Jakarta SARS-Cov-2 penyebab COVID-10 atau dinyatakan para peneliti tidak jauh berbeda '),
(10, '11 Cara Diet Sehat untuk Menur', 'tips', 'diet1.jpeg', 'Berikut tata cara diet sehat secara alami yang harus kamu lakukan:\r\n1. Pilih Makanan Tepat\r\n2. Tidak'),
(12, 'Tips Awet Muda', 'Kecantikan', 'cantik1.jpg', 'dengan rajin berolahraga dan rajin makan sayur dan buah akan membuat kalian akan nampak lebih 10 tah'),
(13, 'Video Syur Mirip Gisel', 'Berita', 'berita1.jpg', ' Jagat dunia maya sedang dihebohkan dengan video syur mirip Gisella Anastasia. Bahkan, ibu dari Gemp');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sering`
--
ALTER TABLE `sering`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sering`
--
ALTER TABLE `sering`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
