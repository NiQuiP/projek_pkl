-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2023 pada 07.48
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
-- Database: `ci4login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nim_nis` varchar(25) NOT NULL,
  `jenis_user` enum('Siswa','Mahasiswa') NOT NULL,
  `instansi_pendidikan` varchar(25) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `checkin_time` time NOT NULL DEFAULT current_timestamp(),
  `checkout_time` time DEFAULT NULL,
  `foto_absen` varchar(50) NOT NULL,
  `waktu_absen` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `nama_lengkap`, `email`, `nim_nis`, `jenis_user`, `instansi_pendidikan`, `nama_instansi`, `status`, `keterangan`, `lokasi`, `checkin_time`, `checkout_time`, `foto_absen`, `waktu_absen`) VALUES
(65, 'admin', 'pain696987@gmail.com', '281721', 'Siswa', 'Sekolah', 'dugam', 'Masuk', '', 'lat: -6.1863751, long: 106.8315616', '09:03:54', NULL, '2023.11.01 - 09.03.54am.jpeg', '2023-11-01'),
(66, 'sumanto', 'sumanto@gmail.com', '281721111', 'Siswa', 'Sekolah', 'dugam', 'Masuk', '', 'lat: -6.1863751, long: 106.8315616', '09:03:54', NULL, '2023.11.01 - 09.03.54am.jpeg', '2023-11-01'),
(67, 'admin', 'pain696987@gmail.com', '281721', 'Siswa', 'Sekolah', 'dugam', 'izin', '', 'lat: -6.1863751, long: 106.8315616', '09:03:54', NULL, '2023.11.01 - 09.03.54am.jpeg', '2023-11-01'),
(68, 'alex', 'alex@gmail.com', '28172122212', 'Siswa', 'Sekolah', 'dugam', 'Sakit', '', 'lat: -6.1863751, long: 106.8315616', '09:03:54', NULL, '2023.11.01 - 09.03.54am.jpeg', '2023-11-01'),
(69, 'jason', 'jason@gmail.com', '1', 'Siswa', 'Sekolah', 'dugam', 'Masuk', '', 'lat: -6.1863751, long: 106.8315616', '09:03:54', NULL, '2023.11.01 - 09.03.54am.jpeg', '2023-11-01'),
(70, 'zidan', 'zidan@gmail.com', '01920192019', 'Siswa', 'Sekolah', 'dugam', 'Masuk', '', 'lat: -6.1863751, long: 106.8315616', '09:03:54', NULL, '2023.11.01 - 09.03.54am.jpeg', '2023-11-01'),
(71, 'admin', 'pain696987@gmail.com', '281721', 'Siswa', 'Sekolah', 'dugam', 'Masuk', '', 'lat: -6.1863751, long: 106.8315616', '12:12:39', NULL, '2023.11.01 - 12.12.39pm.jpeg', '2023-11-01'),
(72, 'admin', 'pain696987@gmail.com', '281721', 'Siswa', 'Sekolah', 'dugam', 'Masuk', '', 'lat: -6.1863751, long: 106.8315616', '12:35:23', NULL, '2023.11.01 - 12.35.23pm.jpeg', '2023-11-01'),
(73, 'admin', 'pain696987@gmail.com', '281721', 'Siswa', 'Sekolah', 'dugam', 'Masuk', '', 'lat: -6.1863751, long: 106.8315616', '12:35:41', NULL, '2023.11.01 - 12.35.41pm.jpeg', '2023-11-01'),
(74, 'admin', 'pain696987@gmail.com', '281721', 'Siswa', 'Sekolah', 'dugam', 'Masuk', '', 'lat: -6.1863751, long: 106.8315616', '13:08:55', NULL, '2023.11.01 - 01.08.55pm.jpeg', '2023-11-01'),
(75, 'alex', 'syahrilnursidik668@gmail.com', '212121', 'Siswa', 'Sekolah', 'SMKN 2 JAKARTA', 'Masuk', '', 'lat: , long: ', '14:34:35', NULL, '2023.11.03 - 02.34.35pm.jpeg', '2023-11-03'),
(76, 'alex', 'syahrilnursidik668@gmail.com', '212121', 'Siswa', 'Sekolah', 'SMKN 2 JAKARTA', 'Masuk', '', 'lat: , long: ', '14:34:44', NULL, '2023.11.03 - 02.34.44pm.jpeg', '2023-11-03'),
(77, 'Raviz Suradamaris', 'ravizakew@gmail.com', '217242', 'Siswa', 'Sekolah', 'SMKN 2 JAKARTA', 'Masuk', '', 'lat: , long: ', '14:35:14', NULL, '2023.11.03 - 02.35.14pm.jpeg', '2023-11-03'),
(78, 'alex', 'syahrilnursidik668@gmail.com', '2121212', 'Siswa', 'Sekolah', 'SMKN 2 JAKARTA', 'Masuk', '', 'lat: , long: ', '14:46:42', NULL, '2023.11.03 - 02.46.42pm.jpeg', '2023-11-03'),
(79, 'alex', 'syahrilnursidik668@gmail.com', '45445415', 'Siswa', 'Sekolah', 'DUGAM', 'Masuk', '', 'lat: , long: ', '15:44:26', NULL, '2023.11.03 - 03.44.26pm.jpeg', '2023-11-03'),
(80, 'sumanto', 'sumanto123@gmail.com', '92817827', 'Siswa', 'Universitas', 'UGM', 'Masuk', '', 'lat: -6.1733997, long: 106.8251778', '10:08:30', NULL, '2023.11.08 - 10.08.30am.jpeg', '2023-11-08'),
(81, 'sumanto', 'sumanto123@gmail.com', '92817827', 'Siswa', 'Universitas', 'UGM', 'Masuk', '', 'lat: -6.173028700430554, long: 106.82212560094541', '10:39:04', NULL, '2023.11.08 - 10.39.04am.jpeg', '2023-11-08'),
(82, 'sumanto', 'sumanto123@gmail.com', '92817827', 'Siswa', 'Universitas', 'UGM', 'Masuk', '', 'lat: -6.173038814609386, long: 106.82212505468681', '10:57:46', NULL, '2023.11.08 - 10.57.46am.jpeg', '2023-11-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `member_id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nim_nis` varchar(20) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `jenis_user` enum('Siswa','Mahasiswa') NOT NULL,
  `instansi_pendidikan` varchar(25) NOT NULL COMMENT 'Siswa/Mahasiswa',
  `nama_instansi` varchar(255) NOT NULL,
  `level` enum('1','2','3') NOT NULL DEFAULT '3' COMMENT '1=superadmin, 2=admin, 3=user',
  `token` varchar(255) DEFAULT NULL,
  `is_verifikasi` enum('yes','no') NOT NULL DEFAULT 'no',
  `tanggal_bergabung` date NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`member_id`, `username`, `password`, `email`, `nama_lengkap`, `nim_nis`, `no_hp`, `foto`, `jenis_kelamin`, `jenis_user`, `instansi_pendidikan`, `nama_instansi`, `level`, `token`, `is_verifikasi`, `tanggal_bergabung`, `last_login`) VALUES
(1, 'aril', 'babayo', 'arilpain@gmail.com', 'aril benn', '217278', '089650548877', '', 'Pria', 'Siswa', 'Sekolah', 'SMKN 2 JAKARTA', '3', '', '', '2023-11-07', '2023-11-07 06:58:44'),
(40, 'admin', 'admin', 'pain696987@gmail.com', 'admin', '92817827', '08239287397', '1699418311_f404c4080e09dbd036d3.jpg', 'Pria', 'Siswa', 'Universitas', 'UGM', '2', NULL, 'yes', '2023-11-07', '2023-11-08 04:48:46'),
(60, 'ikuraaa', 'bijiku', 'ahmadnengkuh@gmail.com', 'aril', '216969', '0895358265450', '1698283906_310edecf15a3c26dcb77.png', 'Pria', 'Mahasiswa', 'Universitas', 'Universitas Indonesia', '3', NULL, 'yes', '2023-11-07', '2023-10-31 07:37:17');

--
-- Trigger `member`
--
DELIMITER $$
CREATE TRIGGER `set_jenis_user_trigger` BEFORE INSERT ON `member` FOR EACH ROW BEGIN
    IF NEW.instansi_pendidikan = 'Sekolah' THEN
        SET NEW.jenis_user = 'Siswa';
    ELSEIF NEW.instansi_pendidikan = 'Universitas' THEN
        SET NEW.jenis_user = 'Mahasiswa';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `post_id` int(5) UNSIGNED NOT NULL,
  `username` varchar(25) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_title_seo` varchar(255) NOT NULL,
  `post_status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `post_type` enum('article','page') NOT NULL DEFAULT 'article',
  `post_thumbnail` varchar(255) NOT NULL,
  `post_description` varchar(255) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `posts_username_foreign` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_username_foreign` FOREIGN KEY (`username`) REFERENCES `admin` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
