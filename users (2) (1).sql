-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 05, 2022 at 01:28 AM
-- Server version: 10.8.3-MariaDB-log
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sktpihnv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_peranan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_status` tinyint(1) NOT NULL,
  `pengguna_jawatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_notelefon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_online` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `pengguna_peranan`, `pengguna_status`, `pengguna_jawatan`, `pengguna_jabatan`, `pengguna_notelefon`, `pengguna_online`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pentadbir Sistem', 'admin', NULL, NULL, '$2y$10$Q9qtkM2kjutHh8gQiOmBeO/vYrTMamokV3WO3zq0faipc5NDetNEa', '2', 1, 'Pegawai IT', 'Jabatan IT', '638', 0, NULL, '2022-08-16 00:45:11', '2022-08-16 00:45:11'),
(2, 'Maslan Abd. Rasak', 'maslan', NULL, NULL, '$2y$10$itWsBbMTF1wWq/ldnMhcV.L.thWCO7MbTPyqi66XRvAlilrEYS8ZG', '2', 1, 'Pembantu Penyelidik', 'JPSM', '', 0, NULL, '2022-08-16 00:45:11', '2022-08-16 00:45:11'),
(3, 'Zekri', 'zekri', NULL, NULL, '$2y$10$wn6Jx7tDwQ.JFSF2eQAwAu4q0utQCq.l9AnxW1i.V/LYcpilq/at2', '2', 1, 'Pembantu Penyelidik', 'JPSM', '0192563514', 0, NULL, '2022-08-16 00:45:11', '2022-08-16 00:45:11'),
(4, 'mohd zekri b che wel', 'zekri', NULL, NULL, '$2y$10$uSMVI.YBQL4dsoTIac8rWOZIjOZg7ddmH.OXGWSvDP6QsCwYKay6G', '1', 1, 'pembantu penyelidik', 'jpsm', '0192563514', 0, NULL, '2022-08-16 00:45:12', '2022-08-16 00:45:12'),
(5, 'Saifualelmee', 'saiful', NULL, NULL, '$2y$10$0QGj/B/CAtqv52Xo3ECtrus1VgqXbXyGRySsb6RKnSqedjnmw4V56', '1', 1, 'Pembantu Penyelidik', 'JPSM', '', 0, NULL, '2022-08-16 00:45:12', '2022-08-16 00:45:12'),
(6, 'Khairul Shazwan Bin Mohd Nazri', 'shazwan', NULL, NULL, '$2y$10$g/A6rg0JzfKevYMrHnhm8eV5KB5VraBVLvK5q2V3CcOmDUh8ZbM86', '1', 1, 'Pembantu Penyelidik', 'Jabatan Perhutanan Semenanjung Malaysia', '', 1, NULL, '2022-08-16 00:45:12', '2022-08-16 00:45:12'),
(7, 'Anuar bin Mohd Talib', 'anuar', NULL, NULL, '$2y$10$SWejyLc8lvGvE.XeZnvX4O/JiN5wDqkypXVnv5ukj2eYKJ8idtnF.', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '0192539780', 1, NULL, '2022-08-16 00:45:12', '2022-08-16 00:45:12'),
(8, 'Ahmad Shahril bin Samat', 'shahril', NULL, NULL, '$2y$10$.sGkHkB0f3Mpjk.Hl5YFqOhX7ltI8AHUrq52miKv9xPfSxoi5NjDC', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '', 0, NULL, '2022-08-16 00:45:12', '2022-08-16 00:45:12'),
(9, 'Mohd Jamil bin Samsudin', 'jamil', NULL, NULL, '$2y$10$SuecXu0RdfKMe0Yh8CjUV.PyKiDyCi4HjSUPGCkaFS88AKvXbj0gu', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '0135088710', 1, NULL, '2022-08-16 00:45:12', '2022-08-16 00:45:12'),
(10, 'Mohd Fadli Azaha bin Omar', 'fadli', NULL, NULL, '$2y$10$qV4NRDwNWDZGLY0kLlFYSuSHCRxLB8vB5/waqvxoNUFqIZx.swabm', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '013-6410897', 0, NULL, '2022-08-16 00:45:12', '2022-08-16 00:45:12'),
(11, 'Mohd Fahmi bin Zainal', 'fahmi', NULL, NULL, '$2y$10$8VFKeUgY79VaLmeQQ8/A6eKn2TJcPapChMoCqE0lRpsTiHVqFrIBO', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '', 1, NULL, '2022-08-16 00:45:12', '2022-08-16 00:45:12'),
(12, 'Mohd Muntasir bin Mat Isa', 'muntasir', NULL, NULL, '$2y$10$y.RgaXD88vcLQW0iUJz8qOIOUI86zCREr3v8qt9G6Or3gbBaWVTsq', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '0125412951', 1, NULL, '2022-08-16 00:45:12', '2022-08-16 00:45:12'),
(13, 'Mohd Rosdi bin Johar', 'rosdi', NULL, NULL, '$2y$10$5Hx0wg8qIAK8w9RIZBabEe/jS0zYHhoyraz8Q5BH4hQ9c9nysvLQu', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '01395937012', 1, NULL, '2022-08-16 00:45:12', '2022-08-16 00:45:12'),
(14, 'MOHD FARID BIN MAHFAR', 'farid', NULL, NULL, '$2y$10$IHdaXr4dIM91g.AJgndDMu5F3.qv/qMp0XI0RuduVdTsVbK6YlFx2', '2', 1, 'PEGAWAI TEKNOLOGI MAKLUMAT', 'PENGURUSAN MAKLUMAT', '', 0, NULL, '2022-08-16 00:45:12', '2022-08-16 00:45:12'),
(15, 'Tn Haji Khairuddin bin Mohamad Mor', 'khairuddin', NULL, NULL, '$2y$10$zRs2WOVv1bXas8VmV/fmmO3bJILg2zx0EN0Bi/YghX955hqxraMCe', '1', 1, 'Pengarah Bahagian Pengurusan Maklumat', 'Pengurusan Maklumat', '434', 0, NULL, '2022-08-16 00:45:12', '2022-08-16 00:45:12'),
(16, 'Tokimun', 'tokimun', NULL, NULL, '$2y$10$zRZdkM0nDNzdKMjCwZycfuWXS7P1BRGQ4U4jJt1ahwMy7tyc/MdFi', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:12', '2022-08-16 00:45:12'),
(17, 'Nurul Huda', 'huda', NULL, NULL, '$2y$10$orEU9quFOuHqztxvmm/NFuUmjMGXNnUhzrBcvUeDuRAWr8fVbIwxC', '2', 1, 'Penolong Pegawai Penilaian Sumber Hutan Kayu', 'Pengurusan Hutan', '0122046943', 1, NULL, '2022-08-16 00:45:13', '2022-08-16 00:45:13'),
(18, 'Nurul Aidah binti Bahrum', 'Aidah', NULL, NULL, '$2y$10$rMLO5RSNcA9wjTtwK59OguN/gSv/3Kw6KmMYtkb5.5tFP5/b1Y6a6', '2', 1, 'Penolong Pegawai Penilaian Sumber Hutan Bukan Kayu', '', '', 1, NULL, '2022-08-16 00:45:13', '2022-08-16 00:45:13'),
(19, 'NorisahJiling', 'norisah', NULL, NULL, '$2y$10$3pxHvN35h27U.hZ/6q.r8.O9kEhvI8LbFuvCeDUc2SOxJPqJ0IHGe', '1', 1, 'Pen. Pegawai Perancangan Sumber Hutan II', 'Jabatan Perhutanan Semenanjung Malaysia', '', 0, NULL, '2022-08-16 00:45:13', '2022-08-16 00:45:13'),
(20, 'Mohd Aizat Bin Arippin', 'aizat', NULL, NULL, '$2y$10$Q/HowsFZ7Lka9LEsE5njG.pLQTrek4PCgGoFuWj73Cju.vZ6Acjsm', '2', 1, 'Penolong Pengarah Penilaian Sumber Hutan Bukan Kayu', '', '', 1, NULL, '2022-08-16 00:45:13', '2022-08-16 00:45:13'),
(21, 'SPA TESTING ', '999999999999', NULL, NULL, '$2y$10$97Rrbw.s2jCAY7nZMYbjJOuQ47WHn36NOwudPkxBzfJvklE4iJTjO', '1', 1, 'SPA TESTING ', 'SPA TESTING ', '01754', 0, NULL, '2022-08-16 00:45:13', '2022-08-16 00:45:13'),
(22, 'Syamsul Azmi bin Sulaiman', 'syamsulazmi', NULL, NULL, '$2y$10$PNKPp2dDlVRAXUFY2W5yROjm0skiL1JN1AJcK0l1girM7N.lRlhiy', '1', 1, '', '', '', 0, NULL, '2022-08-16 00:45:13', '2022-08-16 00:45:13'),
(23, 'Suhaadi bin Omar', 'Suhaadi ', NULL, NULL, '$2y$10$W8V4vZjpvK.g5Xk9.s4HeeA1e9Tw6jGPAV9RjRKaUtIy.cjcpKI1q', '1', 1, '', '', '', 0, NULL, '2022-08-16 00:45:13', '2022-08-16 00:45:13'),
(24, 'Mohd Zunaidi bin Awang@Said', 'zunaidi', NULL, NULL, '$2y$10$vW/5TmTRPgupN0IeAg82uueopdJ5IPS3V0hA6V.DX4kSROwGhYdK6', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:13', '2022-08-16 00:45:13'),
(25, 'Mohd Akram bin Razali', 'akram', NULL, NULL, '$2y$10$geSEQXSTbAYaRg51V8auyuvTTmVuY0tTjUkfKlBqIIy9.UUikHOOy', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:13', '2022-08-16 00:45:13'),
(26, 'Khusnul Aliya Nur binti Mustafa Cheng', 'aliya', NULL, NULL, '$2y$10$8.zgNiL0U0EbNjQcds8yaOPmJSxfk3NutKl.C6psNaUJdLq9Ab5ie', '1', 1, 'Pembantu Penyelidik', 'JPSM', '0326164488', 1, NULL, '2022-08-16 00:45:13', '2022-08-16 00:45:13'),
(27, 'Akram bin Gimin', 'akramgimin', NULL, NULL, '$2y$10$VHNvVORHVnHvA.kpwxg4F.1Ts4GmlJAIQVhkPu2ey7wcrKKBZZVV.', '2', 1, 'PP(IHBK)', 'IPJSPM', '', 0, NULL, '2022-08-16 00:45:13', '2022-08-16 00:45:13'),
(28, 'ujian1', 'ujian1', NULL, NULL, '$2y$10$PzQ8Ufb4yqyG5iEN4bb0F.N58MiQuYKDoJCw1YJLQh04n/ujnLU6a', '1', 1, '', '', '', 0, NULL, '2022-08-16 00:45:13', '2022-08-16 00:45:13'),
(29, 'ujian2', 'ujian2', NULL, NULL, '$2y$10$Bb5LpSp/5M4jNr8jgD7AHu7F2dKXEb2GcL314mF/Vq7swlKlgcS9W', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:14', '2022-08-16 00:45:14'),
(30, 'ujian3', 'ujian3', NULL, NULL, '$2y$10$itOvgPtkXa6fMaXn7eOBj.8P.C8912Bs3rk0Fik6YuI.CHArIerD6', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:14', '2022-08-16 00:45:14'),
(31, 'ujian4', 'ujian4', NULL, NULL, '$2y$10$qdRsJ2XOkovSPq7XCTG.tu1sXbQlgxNVLAow3f/WZ4aODxwFD2S5e', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:14', '2022-08-16 00:45:14'),
(32, 'ujian5', 'ujian5', NULL, NULL, '$2y$10$iqJXUi8tpNP/6JF1BShBP.jY/9cXe4170kSopXJH4zEXeUKf1hUMq', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:14', '2022-08-16 00:45:14'),
(33, 'Shahrul Azwan bin Mohd Sabri', 'shahrulazwan', NULL, NULL, '$2y$10$bg6eOkTM6bjdHO49eAjwCOFEb3fVc2Z3ExHDKuNS.LX1vx0hp1bc6', '2', 1, 'PpK(IHK)', '', '', 0, NULL, '2022-08-16 00:45:14', '2022-08-16 00:45:14'),
(34, 'Pentadbir Sistem', 'admin', NULL, NULL, '$2y$10$ybH6i4wLEK285C2.lqyXFum72YM19FFclR1GNpV6VXHMvAPM6mJ5K', '2', 1, 'Pegawai IT', 'Jabatan IT', '638', 0, NULL, '2022-08-16 00:45:14', '2022-08-16 00:45:14'),
(35, 'Maslan Abd. Rasak', 'maslan', NULL, NULL, '$2y$10$a/yZ5lkjdiCZGCNgnW1dou8wvyXvjx6UOTL1ZgnhdyamdxA4XUmnC', '2', 1, 'Pembantu Penyelidik', 'JPSM', '', 0, NULL, '2022-08-16 00:45:14', '2022-08-16 00:45:14'),
(36, 'Zekri', 'zekri', NULL, NULL, '$2y$10$sKv5jQ7b00raHGPoC378..UH360mW.Omv495iCxWGeFy5L8uNmglW', '2', 1, 'Pembantu Penyelidik', 'JPSM', '0192563514', 0, NULL, '2022-08-16 00:45:14', '2022-08-16 00:45:14'),
(37, 'mohd zekri b che wel', 'zekri', NULL, NULL, '$2y$10$KsOqLkZcTdTnc5ez1AHLQeowa6NTUiSdDnnA3AH/FuVUgN22qAczm', '1', 1, 'pembantu penyelidik', 'jpsm', '0192563514', 0, NULL, '2022-08-16 00:45:14', '2022-08-16 00:45:14'),
(38, 'Saifualelmee', 'saiful', NULL, NULL, '$2y$10$q9I5M8/AinYtCqmnusQUuOxQGpLecDyenINR3ARtNQYsGQ/Iq6ELy', '1', 1, 'Pembantu Penyelidik', 'JPSM', '', 0, NULL, '2022-08-16 00:45:14', '2022-08-16 00:45:14'),
(39, 'Khairul Shazwan Bin Mohd Nazri', 'shazwan', NULL, NULL, '$2y$10$8hM3SWx2GmyZ6zAzZ2u7VeTkob9xIGeHyNYHpg4nAZXqQYIQIWsL6', '1', 1, 'Pembantu Penyelidik', 'Jabatan Perhutanan Semenanjung Malaysia', '', 1, NULL, '2022-08-16 00:45:14', '2022-08-16 00:45:14'),
(40, 'Anuar bin Mohd Talib', 'anuar', NULL, NULL, '$2y$10$BqXdv0CnPojAKbCDNMEBrOTqlGjWjVEcdXvX0WIlDDOmQgrNNwZZe', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '0192539780', 1, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(41, 'Ahmad Shahril bin Samat', 'shahril', NULL, NULL, '$2y$10$TSYGYvwDVjZAoZUeLJK3FuxKgbsdUa4Hasv5aWuC21CPp6y48b5We', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '', 0, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(42, 'Mohd Jamil bin Samsudin', 'jamil', NULL, NULL, '$2y$10$UIstaPsXUwIo/vskg.5Gy.aOQSRfmAfhVQ81cY2mTFkRgE5Db71ba', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '0135088710', 1, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(43, 'Mohd Fadli Azaha bin Omar', 'fadli', NULL, NULL, '$2y$10$sdmbkAoL.Z3FDAlwdQnIo.ovpOFbyJKTU2VfqHJCbeSBbkDL8FEui', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '013-6410897', 0, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(44, 'Mohd Fahmi bin Zainal', 'fahmi', NULL, NULL, '$2y$10$VU0y6QfXFY2CsdDGEnlhk.UbKbupDsVK4Xke6Zk3pEcaSWbbZGe.q', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '', 1, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(45, 'Mohd Muntasir bin Mat Isa', 'muntasir', NULL, NULL, '$2y$10$4bJbsHGasJrtlA5Y9rlsm.3hjoioVKFSk1WBRg3XMMkrN40LBqISy', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '0125412951', 1, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(46, 'Mohd Rosdi bin Johar', 'rosdi', NULL, NULL, '$2y$10$ojfGBrqVrJ.Uo9zxoaPbg.FOg7JOV8R0spZoABlL/jGL2pnOACWnO', '1', 1, 'PH', 'Jabatan Perhutanan Semenanjung Malaysia', '01395937012', 1, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(47, 'MOHD FARID BIN MAHFAR', 'farid', NULL, NULL, '$2y$10$mtFDSpRl/ufqJ3FzvPgB7ud56wpkFaJ3DAGunjSBd0Hq.1LVADWU6', '2', 1, 'PEGAWAI TEKNOLOGI MAKLUMAT', 'PENGURUSAN MAKLUMAT', '', 0, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(48, 'Tn Haji Khairuddin bin Mohamad Mor', 'khairuddin', NULL, NULL, '$2y$10$P5IwoppdqgdcuLGAmDWAm.2kWZhyK00zaUWNQ4SukV8FadpDQjw8m', '1', 1, 'Pengarah Bahagian Pengurusan Maklumat', 'Pengurusan Maklumat', '434', 0, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(49, 'Tokimun', 'tokimun', NULL, NULL, '$2y$10$fsMBc3O3iVbh6ahup/ewVOf/gnmODhXQY0GQvSF1MGuvqfnJWw51S', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(50, 'Nurul Huda', 'huda', NULL, NULL, '$2y$10$sutpWS672B9BebZYvTQ.ce519EkQMNbWPwtT3AhHp2u.DHMlmYRe2', '2', 1, 'Penolong Pegawai Penilaian Sumber Hutan Kayu', 'Pengurusan Hutan', '0122046943', 1, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(51, 'Nurul Aidah binti Bahrum', 'Aidah', NULL, NULL, '$2y$10$fZ2Iof1YWqL.teT4Ofa3TuRmLpAyxr/aeakD9zpRoj8uhv3KjqCF6', '2', 1, 'Penolong Pegawai Penilaian Sumber Hutan Bukan Kayu', '', '', 1, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(52, 'NorisahJiling', 'norisah', NULL, NULL, '$2y$10$2uYIjbzTR1LMjOW9C89pHuTguML2cGKoRd8DFF1QAcjlfg2e3Yk42', '1', 1, 'Pen. Pegawai Perancangan Sumber Hutan II', 'Jabatan Perhutanan Semenanjung Malaysia', '', 0, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(53, 'Mohd Aizat Bin Arippin', 'aizat', NULL, NULL, '$2y$10$5L9gTQc.giUqQ6x9alm4WebkFA3YAj5QD6KHzLQ6HOdmZ07gosmJm', '2', 1, 'Penolong Pengarah Penilaian Sumber Hutan Bukan Kayu', '', '', 1, NULL, '2022-08-16 00:45:15', '2022-08-16 00:45:15'),
(54, 'SPA TESTING ', '999999999999', NULL, NULL, '$2y$10$CPrUbB.QxfXtvm45C4vx0uVXy2xWyB9QhfQavkfM8c1L.m9sksPZ.', '1', 1, 'SPA TESTING ', 'SPA TESTING ', '01754', 0, NULL, '2022-08-16 00:45:16', '2022-08-16 00:45:16'),
(55, 'Syamsul Azmi bin Sulaiman', 'syamsulazmi', NULL, NULL, '$2y$10$WIuT47RcTtILDzjlmJWLrOTx/Rxf1n2a4.HtgZcvJ69LW.RhsuS/m', '1', 1, '', '', '', 0, NULL, '2022-08-16 00:45:16', '2022-08-16 00:45:16'),
(56, 'Suhaadi bin Omar', 'Suhaadi ', NULL, NULL, '$2y$10$OAiGEshruH1Cm9PACLatZeleAqG9qW0s0CNURgGTBD0uiPLJ5LipO', '1', 1, '', '', '', 0, NULL, '2022-08-16 00:45:16', '2022-08-16 00:45:16'),
(57, 'Mohd Zunaidi bin Awang@Said', 'zunaidi', NULL, NULL, '$2y$10$MyQJfgOB/SfN0cMT6EWXJezaJgPNqiQhn5Kd3gai3.qR3xy58vyIe', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:16', '2022-08-16 00:45:16'),
(58, 'Mohd Akram bin Razali', 'akram', NULL, NULL, '$2y$10$1JXt5UzJ43XFoHyE9FAsve4Gc9UxlHcdTYkycTiLhPL.miljjGv6u', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:16', '2022-08-16 00:45:16'),
(59, 'Khusnul Aliya Nur binti Mustafa Cheng', 'aliya', NULL, NULL, '$2y$10$EuDRtZd7tr7KLfsKw.M8aO33iweqXbcjIE.nt6jRg.6CLVRKyaUBy', '1', 1, 'Pembantu Penyelidik', 'JPSM', '0326164488', 1, NULL, '2022-08-16 00:45:16', '2022-08-16 00:45:16'),
(60, 'Akram bin Gimin', 'akramgimin', NULL, NULL, '$2y$10$n0w0ueGV0dJyvA98MQvG3.ru2YBTgU7PphJLUYuLpC3BDgn9WS9lK', '2', 1, 'PP(IHBK)', 'IPJSPM', '', 0, NULL, '2022-08-16 00:45:16', '2022-08-16 00:45:16'),
(61, 'ujian1', 'ujian1', NULL, NULL, '$2y$10$DaM1Trhkzj9RAIu.2WMs3eoq1Ma856M5FK9JSEHc.HBBe56.SNdqC', '1', 1, '', '', '', 0, NULL, '2022-08-16 00:45:16', '2022-08-16 00:45:16'),
(62, 'ujian2', 'ujian2', NULL, NULL, '$2y$10$F36/qMuk0EiCJZXXmvwT1eMbk5ini6mCfMSj2ixDRQwqkd.7CpQsW', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:16', '2022-08-16 00:45:16'),
(63, 'ujian3', 'ujian3', NULL, NULL, '$2y$10$PaTniZoc1bphv3KfwtT3tOqwx1aJtIGDlJgO57e3cTenl4YV50zIC', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:16', '2022-08-16 00:45:16'),
(64, 'ujian4', 'ujian4', NULL, NULL, '$2y$10$ok3j1SF.6TbsQp.7sRY4E.pC1R.9Qo8Ju8qZzvwattmhxsZdTbj.G', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:16', '2022-08-16 00:45:16'),
(65, 'ujian5', 'ujian5', NULL, NULL, '$2y$10$L7lGhxbPZTNLXPUzSiUqvO9AHdvitDZbqt/HgtrMsuNXxkN2WbwUC', '1', 1, '', '', '', 1, NULL, '2022-08-16 00:45:16', '2022-08-16 00:45:16'),
(66, 'Shahrul Azwan bin Mohd Sabri', 'shahrulazwan', NULL, NULL, '$2y$10$ENz2ajNGYwBiIWeJRZPtkez/N.Au.Xploh/s7MZINMLVMRsgfPDJC', '2', 1, 'PpK(IHK)', '', '', 0, NULL, '2022-08-16 00:45:17', '2022-08-16 00:45:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
