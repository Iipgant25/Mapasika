-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 04:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mapasika`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nim` char(8) NOT NULL,
  `kampus` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nomer_hp` char(13) NOT NULL,
  `berat_badan` char(3) NOT NULL,
  `tinggi_badan` char(3) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `riwayat_penyakit` char(20) NOT NULL,
  `obat_riwayat_penyakit` char(20) NOT NULL,
  `foto` char(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_user`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `nim`, `kampus`, `alamat`, `nomer_hp`, `berat_badan`, `tinggi_badan`, `jenis_kelamin`, `riwayat_penyakit`, `obat_riwayat_penyakit`, `foto`, `jabatan`) VALUES
(1, 'Agung Gunawan', 'Karawang', '2022-05-06', '12201228', 'UBSI Karawang', 'tirtajaya', '08765432345', '60', '170', 'L', 'maag', 'promaag', 'AA5.jpg', 'calon anggota');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `biaya` int(11) NOT NULL,
  `thn` year(4) NOT NULL,
  `img` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `tgl_kegiatan`, `nama_kegiatan`, `lokasi`, `biaya`, `thn`, `img`, `status`) VALUES
(1, '2022-06-09', 'Mendaki Gunung Salak', 'Gunung', 200000, 2022, 'G.jpg', 'tutup'),
(2, '2022-06-16', 'Mencari Jejak', 'Hutan', 100000, 2022, 'G.jpg', 'buka'),
(3, '2022-06-23', 'Serah Terima Jabatan', 'Kampus', 0, 2022, 'G.jpg', 'buka'),
(4, '2022-07-13', 'Penggalangan Bantuan Banjir', 'Karawang', 0, 2022, 'G.jpg', 'buka'),
(5, '2022-08-17', 'Merayakan Hari Kemerdekaan', 'Kampus', 50000, 2022, 'G.jpg', 'tutup'),
(6, '2022-08-29', 'Mendaki Gunung Fuji', 'Gunung', 200000, 2022, 'G.jpg', 'buka'),
(7, '2022-09-09', 'Camping', 'Hutan', 100000, 2022, 'G.jpg', 'buka');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `judul_materi` varchar(30) NOT NULL,
  `penulis` varchar(20) NOT NULL,
  `tahun` year(4) NOT NULL,
  `image` varchar(50) NOT NULL,
  `materi` varchar(257) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `judul_materi`, `penulis`, `tahun`, `image`, `materi`, `deskripsi`) VALUES
(1, 'Tali temali', 'tatang', 2014, 'materi.jpg', 'https://drive.google.com/file/d/1GMAi3rmCHVAtP2WB-bzKDTePqH0Zxv7I/view?usp=sharing', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.'),
(2, 'Bertahan hidup di hutan', 'gugun gunawan', 2015, 'materi.jpg', 'https://drive.google.com/file/d/1GMAi3rmCHVAtP2WB-bzKDTePqH0Zxv7I/view?usp=sharing', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.'),
(3, 'Memasak Di Hutan', 'Dea fransiska', 2018, 'materi.jpg', 'https://drive.google.com/file/d/1GMAi3rmCHVAtP2WB-bzKDTePqH0Zxv7I/view?usp=sharing', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.'),
(4, 'Memancing Ikan', 'herman', 2011, 'materi.jpg', 'https://drive.google.com/file/d/1GMAi3rmCHVAtP2WB-bzKDTePqH0Zxv7I/view?usp=sharing', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.'),
(5, 'Membangun Tenda', 'Jujun Junaedi', 2016, 'materi.jpg', 'https://drive.google.com/file/d/1GMAi3rmCHVAtP2WB-bzKDTePqH0Zxv7I/view?usp=sharing', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.'),
(6, 'Mencari Jejak', 'Irfan', 2020, 'materi.jpg', 'https://drive.google.com/file/d/1GMAi3rmCHVAtP2WB-bzKDTePqH0Zxv7I/view?usp=sharing', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.'),
(7, 'Cara Memanggang Ikan', 'Agus Hermansyah', 2021, 'materi.jpg', 'https://drive.google.com/file/d/1GMAi3rmCHVAtP2WB-bzKDTePqH0Zxv7I/view?usp=sharing', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_kegiatan`
--

CREATE TABLE `pendaftaran_kegiatan` (
  `id` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pembayaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran_kegiatan`
--

INSERT INTO `pendaftaran_kegiatan` (`id`, `id_kegiatan`, `id_transaksi`, `id_user`, `pembayaran`) VALUES
(1, 1, 3, 1, 'lunas'),
(2, 6, 4, 1, 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(1) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`) VALUES
(1, 'user'),
(2, 'admin'),
(3, 'anggota');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `metode_pembayaran` varchar(30) NOT NULL,
  `norek` varchar(30) NOT NULL,
  `atas_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `metode_pembayaran`, `norek`, `atas_nama`) VALUES
(1, 'Gopay', '085894403718', 'tatang'),
(2, 'Dana', '08688974984', 'desi ratna sari'),
(3, 'OVO', '086853773790', 'dewiyana'),
(4, 'BCA', '352478575456786', 'gunawan tri handoko'),
(5, 'BRI', '3215201004010005', 'kurnia');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(257) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(1, 'Agung Gunawan', 'agung@gmail.com', '$2y$10$xAS2pXzMhwcLdOaDpF4GaeuJ3hiVL8Y0VLlptBkaLcyWWqKKeQQsS', 3, 1, 1653441863),
(2, 'Dirman Setiawan', 'dirman@gmail.com', '$2y$10$Mc8ylD4uKbSoyzOGpV4y7.7d2e52V67NgePSFgyzDQRBFHP8PN.NO', 2, 1, 1653442631),
(3, 'tatang', 'tatang@gmail.com', '$2y$10$rgQSPC29O00HaklbrWfrZOavakZc1BLhGaR2w2PDup5shbAZzNldK', 1, 1, 1653957665);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `pendaftaran_kegiatan`
--
ALTER TABLE `pendaftaran_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pendaftaran_kegiatan`
--
ALTER TABLE `pendaftaran_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
