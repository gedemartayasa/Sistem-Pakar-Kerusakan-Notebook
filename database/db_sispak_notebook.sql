-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Okt 2022 pada 10.53
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sispak_notebook`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kesimpulan`
--

CREATE TABLE `tb_kesimpulan` (
  `kode_kesimpulan` int(11) NOT NULL,
  `solusi` varchar(250) NOT NULL,
  `fakta` varchar(100) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kesimpulan`
--

INSERT INTO `tb_kesimpulan` (`kode_kesimpulan`, `solusi`, `fakta`, `oleh`, `status`) VALUES
(1, 'S001', 'LED notebook menyala', 'pakar', 'setuju'),
(2, 'S001', 'LED berkedip jika kabel digerakkan', 'pakar', 'setuju'),
(3, 'S001', 'Internal Jack putus', 'pakar', 'setuju'),
(4, 'S002', 'LED notebook menyala', 'pakar ', 'setuju'),
(5, 'S002', 'LED berkedip jika kabel digerakkan', 'pakar', 'setuju'),
(6, 'S003', 'LED berkedip jika kabel digerakkan', 'pakar ', 'setuju'),
(7, 'S003', 'Beep beberapa kali', 'pakar', 'setuju'),
(8, 'S004', 'LED notebook menyala\r\n', 'pakar', 'setuju'),
(9, 'S004', 'Booting jika ada komponen dilepas', 'pakar', 'setuju'),
(10, 'S005', 'LED notebook menyala', 'pakar', 'setuju'),
(11, 'S005', 'Komponen sudah berumur\r\n', 'pakar', 'setuju'),
(12, 'S006', 'LED notebook menyala', 'pakar', 'setuju'),
(13, 'S006', 'Permasalahan ada di Switch', 'pakar', 'setuju'),
(14, 'S007', 'LED notebook menyala', 'pakar', 'setuju'),
(15, 'S008', 'Tegangan keluaran DC baik', 'pakar', 'setuju'),
(16, 'S008', 'Konektor DC putus dalam notebook', 'pakar', 'setuju'),
(17, 'S012', 'Tegangan AC Adaptor tidak baik', 'pakar', 'setuju'),
(18, 'S012', 'Tegangan DC konektor putus', 'pakar', 'setuju'),
(19, 'S013', 'Tegangan AC Adaptor tidak baik', 'pakar', 'setuju'),
(20, 'S011', 'Tegangan keluaran DC baik', 'pakar', 'setuju'),
(21, 'S009', 'Tegangan keluaran DC baik', 'pakar', 'setuju'),
(22, 'S009', 'Menyala ketika baterai dilepas', 'pakar', 'setuju'),
(23, 'S009', 'Ada aliran listrik', 'pakar', 'setuju'),
(24, 'S010', 'Tegangan keluaran DC baik', 'pakar', 'setuju'),
(25, 'S010', 'Menyala ketika baterai dilepas', 'pakar', 'setuju');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `kode_pertanyaan` varchar(50) NOT NULL,
  `isi_pertanyaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`kode_pertanyaan`, `isi_pertanyaan`) VALUES
('P001', 'LED notebook menyala?'),
('P002', 'LED berkedip jika kabel digerakkan?'),
('P003', 'Internal Jack putus?'),
('P004', 'Beep beberapa kali?'),
('P005', 'Booting jika ada komponen dilepas?'),
('P006', 'Komponen sudah berumur?'),
('P007', 'Permasalahan ada di Switch?'),
('P008', 'Tegangan keluaran DC baik?'),
('P009', 'Konektor DC putus dalam notebook?'),
('P010', 'Menyala ketika baterai dilepas?\r\n'),
('P011', 'Ada aliran listrik?'),
('P012', 'Tegangan AC Adaptor tidak baik?'),
('P013', 'Tegangan DC konektor putus?\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rule`
--

CREATE TABLE `tb_rule` (
  `jika` varchar(150) DEFAULT NULL,
  `maka` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rule`
--

INSERT INTO `tb_rule` (`jika`, `maka`) VALUES
('P001 AND P002 AND P003', 'S001'),
('P001 AND P002', 'S002'),
('P001 AND P004', 'S003'),
('P001 AND P005', 'S004'),
('P001 AND P006', 'S005'),
('P001 AND P007', 'S006'),
('P001', 'S007'),
('P008 AND P009', 'S008'),
('P008 AND P010 AND P011', 'S009'),
('P008 AND P010', 'S010'),
('P008', 'S011'),
('P012 AND P013', 'S012'),
('P012', 'S013'),
('', 'S014');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `kode_solusi` varchar(50) NOT NULL,
  `isi_solusi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_solusi`
--

INSERT INTO `tb_solusi` (`kode_solusi`, `isi_solusi`) VALUES
('S001', 'Kerusakan pada \r\nPower Supply. \r\nGanti dengan Internal Jack'),
('S002', 'Kerusakan pada \r\nPower Supply. \r\nGanti Kabel AC \r\nOutput & \r\nKonektor'),
('S003', 'Kerusakan pada \r\nPower Supply. \r\nCek di Web atau \r\nmanual arti bunyi \r\nbeep solusi yang \r\numum board harus \r\ndiperbaiki'),
('S004', 'Kerusakan pada \r\nPower Supply. \r\nDeterminasi \r\nmasalah antara \r\nperlunya akses \r\nkoneksi ulang \r\nperangkat jika \r\ndilepaskan dan \r\njika perangkat \r\nUSB yang dilepas, \r\ncoba menggunakan port \r\nUSB lain'),
('S005', 'Kerusakan pada \r\nPower Supply. \r\nNyalakan dalam \r\nkeadaan tanpa \r\nbaterai\r\n'),
('S006', 'Kerusakan pada \r\nPower Supply. \r\nKerusakan Switch \r\nsering disebabkan \r\nkarena penekanan \r\nketika \r\nmemasukkan dan \r\nmengeluarkan \r\njack. Jika Switch \r\nbagus, cari sebab \r\nlain'),
('S007', 'Kerusakan pada \r\nPower Supply. \r\nTidak ada masalah \r\nberat dalam \r\nnotebook'),
('S008', 'Kerusakan pada \r\nPower Supply. \r\nSolder Konektor \r\nbaru'),
('S009', 'Kerusakan pada \r\nPower Supply. \r\nCek komponen, \r\ndrive internal, dan \r\nkonektor, \r\npasangkan \r\nkembali sampai \r\nditemukan \r\nkomponen \r\npenyebab masalah'),
('S010', 'Kerusakan pada \r\nmainboard\r\n'),
('S011', 'Ganti baterai jika \r\nmemang itu \r\npenyebab \r\nmasalahnya'),
('S012', 'Kerusakan pada \r\nPower Supply. \r\nSolder Konektor \r\nbaru'),
('S013', 'Kerusakan pada \r\nAdaptor. Ganti \r\nAdaptor baru'),
('S014', 'ERROR');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  ADD PRIMARY KEY (`kode_kesimpulan`);

--
-- Indeks untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`kode_pertanyaan`);

--
-- Indeks untuk tabel `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`kode_solusi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  MODIFY `kode_kesimpulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
