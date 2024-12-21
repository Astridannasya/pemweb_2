-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2024 pada 09.35
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_puskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama`, `kec_id`) VALUES
(1, 'Bubulak', 2),
(2, 'Cilendek', 1),
(3, 'Semplak', 3),
(4, 'Margajaya', 3),
(5, 'Gunung Batu', 3),
(6, 'Pasirjaya', 1),
(7, 'Loji', 1),
(8, 'Pasir Kuda', 2),
(9, 'Curug Mekar', 2),
(11, 'Balumbang Jaya', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paramedik`
--

CREATE TABLE `paramedik` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gender` char(1) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kategori` enum('Dokter Umum','Perawat','Bidan','Dokter Spesialis','Asisten Medis') DEFAULT NULL,
  `telpon` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `unit_kerja_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paramedik`
--

INSERT INTO `paramedik` (`id`, `nama`, `gender`, `tmp_lahir`, `tgl_lahir`, `kategori`, `telpon`, `alamat`, `unit_kerja_id`) VALUES
(8, 'Dr. Rayendra', 'L', 'Jakarta', '2016-05-10', 'Dokter Umum', '085707301467', 'Jl. Raya Sangga ', 2),
(9, 'Dr. Rani', 'P', 'Bogor', '2024-04-21', 'Dokter Umum', '085707301467', 'Cibadak', 4),
(10, 'Dr. Astrid', 'P', 'Bangka Belitung', '2024-05-05', 'Dokter Umum', '0867583912', 'Dramaga', 2),
(11, 'Dr. RIna', 'P', 'Jakarta', '2018-06-21', 'Dokter Umum', '085674927', 'Depok', 1),
(12, 'Randi', 'L', 'Tanggerang', '2015-02-07', 'Perawat', '089753135', 'Pasar Lama', 3),
(13, 'Dr. Mamat', 'L', 'Bogor', '2024-05-08', 'Dokter Umum', '08973562', 'Puri 2', 8),
(14, 'Dr. Nazril', 'L', 'Palembang', '2024-05-24', 'Dokter Umum', '0897654234', 'Bekasan', 4),
(15, 'Dr, Lina', 'P', 'Bogor', '2024-05-01', 'Bidan', '0986543', 'Pintu Ledeng', 6),
(16, 'Dr. CIndy', 'P', 'Jakarta', '2024-05-31', 'Dokter Umum', '0897654234', 'Batu Tulis', 5),
(17, 'Dr. NIar', 'P', 'Tanggerang', '2020-06-07', 'Dokter Spesialis', '086539228', 'Ciomas', 4),
(18, 'Dr. Subhan', 'L', 'Tanggerang', '2019-01-29', 'Dokter Spesialis', '08656534289', 'Jl. Merak', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelurahan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `kode`, `nama`, `tmp_lahir`, `tgl_lahir`, `gender`, `email`, `alamat`, `kelurahan_id`) VALUES
(1, 'K10234', 'Ranti', 'Bogor', '2024-01-16', 'P', 'jeno@gmail.com', 'Bogor Timur', 3),
(13, 'A1023', 'Andi', 'Bogor', '2007-02-16', 'P', 'andi12@gmail.com', 'Ciherang', 2),
(14, 'B1234', 'Azka', 'Bekasi', '2020-01-07', 'L', 'nadhir@gmail.com', 'Setu Indah', 6),
(15, 'A2301', 'Rayyan', 'Bogor', '2015-01-27', 'L', 'Raqi@gmail.com', 'Kapling', 6),
(16, 'G3456', 'Ghaisan', 'Bogor', '2022-01-03', 'L', 'Eges@gmail.com', 'Caringin', 4),
(17, 'C8790', 'Vinka', 'Jakarta', '2000-01-11', 'P', 'vinka@gmail.com', 'Situgede', 3),
(18, 'B1235', 'Fany', 'Jakarta', '2009-01-08', 'P', 'fany@gmail.com', 'Bubulak', 6),
(19, 'A8907', 'Aurel', 'Palembang', '2010-06-07', 'P', 'Aurel@gmail.com', 'Binamarga', 4),
(20, 'A8945', 'Farel', 'Bogor', '2024-05-23', 'L', 'fare[@gmail.com', 'Loji', 7),
(21, 'C1256', 'Rizki', 'Maluku', '1985-06-18', 'L', 'riz@gmail.com', 'Nurul ibad', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa`
--

CREATE TABLE `periksa` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `berat` double NOT NULL,
  `tinggi` double NOT NULL,
  `tensi` varchar(20) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `pasien_id` int(11) NOT NULL,
  `paramedik_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `periksa`
--

INSERT INTO `periksa` (`id`, `tanggal`, `berat`, `tinggi`, `tensi`, `keterangan`, `pasien_id`, `paramedik_id`) VALUES
(3, '2024-05-22', 70, 160, '90', 'Bagus Baik', 1, 8),
(4, '2024-05-09', 70, 156, '130', 'Batuk-batuk', 13, 14),
(5, '2024-05-17', 80, 176, '70', 'Anemia dan Pusing', 15, 8),
(6, '2024-04-03', 65, 146, '120', 'Sakit Lambung', 16, 10),
(7, '2024-04-09', 73, 176, '130', 'Flu dan demam', 21, 12),
(8, '2024-05-30', 60, 154, '118', 'Sakit Gigi', 19, 14),
(9, '2024-05-20', 40, 145, '127', 'Tipes', 20, 14),
(10, '2024-05-17', 80, 157, '140', 'Konsultasi Kandungan', 17, 15),
(11, '2024-05-17', 67, 170, '70', 'Darah rendah dan Pusing', 13, 10),
(12, '2024-05-24', 50, 163, '100', 'Lambung dan Sariawan', 15, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `unitkerja`
--

CREATE TABLE `unitkerja` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `unitkerja`
--

INSERT INTO `unitkerja` (`id`, `nama`) VALUES
(1, 'Unit Pelayanan Kesehatan'),
(2, 'Unit Pelayanan Gigi dan Mulut'),
(3, 'Unit Rawat Jalan'),
(4, 'Unit Rawat Inap'),
(5, 'Unit Laboratorium'),
(6, 'Unit Kesehatan ibu dan Anak (KIA)'),
(7, 'Unit Konseling Gizi'),
(8, 'Unit Kesehatan Lingkungan'),
(9, 'Unit Farmasi'),
(10, 'Unit Administrasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user','paramedik') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'user1', 'user123', 'user'),
(3, 'paramedik', 'paramedik123', 'paramedik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_kerja_id` (`unit_kerja_id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelurahan_id` (`kelurahan_id`);

--
-- Indeks untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien_id` (`pasien_id`),
  ADD KEY `paramedik_id` (`paramedik_id`);

--
-- Indeks untuk tabel `unitkerja`
--
ALTER TABLE `unitkerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `unitkerja`
--
ALTER TABLE `unitkerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  ADD CONSTRAINT `paramedik_ibfk_1` FOREIGN KEY (`unit_kerja_id`) REFERENCES `unitkerja` (`id`);

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`kelurahan_id`) REFERENCES `kelurahan` (`id`);

--
-- Ketidakleluasaan untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD CONSTRAINT `periksa_ibfk_1` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`),
  ADD CONSTRAINT `periksa_ibfk_2` FOREIGN KEY (`paramedik_id`) REFERENCES `paramedik` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
