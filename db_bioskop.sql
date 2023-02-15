-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2023 pada 07.03
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bioskop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl_rilis` date NOT NULL,
  `sinopsis` text NOT NULL,
  `cover` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id`, `genre`, `judul`, `tgl_rilis`, `sinopsis`, `cover`, `created_at`, `updated_at`) VALUES
(1, '\r\nHorror, Mystery', 'KKN di Desa Penari', '2022-04-30', 'Nur, Widya, Ayu, Bima, Anton, dan Wahyu melaksanakan kuliah kerja nyata (KKN) di sebuah desa terpencil. Namun, mereka sama sekali tidak menyangka bahwa desa yang mereka pilih bukanlah desa biasa. Pak Prabu, sang kepala desa telah memperingatkan mereka untuk tidak melewati batas gapura terlarang. Beberapa hari di desa tersebut, mereka mulai merasakan keanehan. Bima mengalami perubahan sikap dan program KKN mereka akhirnya berantakan.\r\n\r\nMereka pun mendapatkan teror sosok penari misterius menyeramkan. Mereka meminta bantuan Mbah Buyut, dukun setempat. Sayangnya, mereka terancam tidak bisa pulang dengan selamat dari desa yang dikenal dengan sebutan desa penari tersebut.', 'kkn.jpg', NULL, NULL),
(2, 'Action, Adventure, Fantasy', 'Thor: Love and Thunder', '2022-05-02', 'menceritakan Thor (Chris Hemsworth) dalam sebuah perjalanan yang belum pernah ia jalani – pencariankedamaian batin. Namun, masa pensiunnya terganggu oleh seorang pembunuh galaksi yang dikenal sebagai Gorr sang Dewa Jagal (Christian Bale), yang ingin memusnahkan para dewa. Untuk mengatasi ancaman, Thor meminta bantuan Raja Valkyrie (Tessa Thompson), Korg (Taika Waititi), dan mantan kekasihnya Jane Foster (Natalie Portman), yang secara mengejutkan dan misterius berhasil menggunakan palu ajaibnya, Mjolnir, sebagai Mighty Thor. Bersama, mereka memulai petualangan kosmik yang mendebarkan untuk mengungkap misteri pembalasan Dewa Jagal dan menghentikannya sebelum terlambat.', 'thor.jpg', NULL, NULL),
(3, 'Action, Adventure, Fantasy', 'Spider-Man: No Way Home', '2021-08-19', 'Setelah identitas Spider-Man terbongkar ke semua orang di seluruh dunia, Peter Parker yang diperankan oleh Tom Holland, meminta bantuan kepada Doctor Strange yang diperankan oleh Benedict Cumberbatch agar membuat semua orang lupa bahwa dia adalah Spider-Man. Namun, mantra yang dirapalkan Doctor Strange gagal dan menghancurkan Multiverse, yang akhirnya berdampak besar yaitu mengundang penjahat-penjahat dari universe lain yang berpotensi menghancurkan dunia.\r\n', 'spiderman.jpg', NULL, NULL),
(14, 'a', 'a', '0222-12-11', 'Dalam trailernya yang diunggah di YouTube Marvel Entertainment, dibuka dengan monolog dari Stephen Strange, yang diganggu oleh mimpi yang sama setiap malam setelah kejadian di No Way Home. Dilansir dari laman Techradar, film ini akan mengajak penonton untuk berfokus pada multiverse atau multisemesta dan mengikuti perjalanan Dr. Strange yang sedang melanjutkan penelitiannya tentang time stone. Penelitiannya itu akan diganggu oleh ancaman musuh, salah satunya adalah Mordo. Penjahat WandaVision Agatha Harkness mengisyaratkan bahwa Penyihir Merah akan \"menghancurkan dunia\". Sementara itu, Scarlet Witch membutuhkan Strange untuk bekerja sama dengan makhluk berkekuatan super lainnya untuk mengatasi musuh. Mereka jelas akan bergabung dengan Chavez, Wong, Rintrah, dan penyihir lainnya, tetapi sepertinya mereka membutuhkan lebih banyak bantuan untuk menghentikan seseorang yang sekuat Penyihir Merah. Mungkin saja, ketika Strange meminta bantuan Wanda dalam menangani multiverse, dia menggunakan sihir terlarangnya yang justru akan memperburuk keadaan dan meluasnya kekacauan.', 'a.jpg', '2022-12-22 18:33:44', NULL),
(15, 'a', 'a', '0333-02-12', 'Dalam trailernya yang diunggah di YouTube Marvel Entertainment, dibuka dengan monolog dari Stephen Strange, yang diganggu oleh mimpi yang sama setiap malam setelah kejadian di No Way Home. Dilansir dari laman Techradar, film ini akan mengajak penonton untuk berfokus pada multiverse atau multisemesta dan mengikuti perjalanan Dr. Strange yang sedang melanjutkan penelitiannya tentang time stone. Penelitiannya itu akan diganggu oleh ancaman musuh, salah satunya adalah Mordo. Penjahat WandaVision Agatha Harkness mengisyaratkan bahwa Penyihir Merah akan \"menghancurkan dunia\". Sementara itu, Scarlet Witch membutuhkan Strange untuk bekerja sama dengan makhluk berkekuatan super lainnya untuk mengatasi musuh. Mereka jelas akan bergabung dengan Chavez, Wong, Rintrah, dan penyihir lainnya, tetapi sepertinya mereka membutuhkan lebih banyak bantuan untuk menghentikan seseorang yang sekuat Penyihir Merah. Mungkin saja, ketika Strange meminta bantuan Wanda dalam menangani multiverse, dia menggunakan sihir terlarangnya yang justru akan memperburuk keadaan dan meluasnya kekacauan.', 'a.jpg', '2022-12-22 19:35:12', NULL),
(17, 'KomediAction', 'Doctor Strange in', '0002-02-02', 'Dalam trailernya yang diunggah di YouTube Marvel Entertainment, dibuka dengan monolog dari Stephen Strange, yang diganggu oleh mimpi yang sama setiap malam setelah kejadian di No Way Home. Dilansir dari laman Techradar, film ini akan mengajak penonton untuk berfokus pada multiverse atau multisemesta dan mengikuti perjalanan Dr. Strange yang sedang melanjutkan penelitiannya tentang time stone. Penelitiannya itu akan diganggu oleh ancaman musuh, salah satunya adalah Mordo. Penjahat WandaVision Agatha Harkness mengisyaratkan bahwa Penyihir Merah akan \"menghancurkan dunia\". Sementara itu, Scarlet Witch membutuhkan Strange untuk bekerja sama dengan makhluk berkekuatan super lainnya untuk mengatasi musuh. Mereka jelas akan bergabung dengan Chavez, Wong, Rintrah, dan penyihir lainnya, tetapi sepertinya mereka membutuhkan lebih banyak bantuan untuk menghentikan seseorang yang sekuat Penyihir Merah. Mungkin saja, ketika Strange meminta bantuan Wanda dalam menangani multiverse, dia menggunakan sihir terlarangnya yang justru akan memperburuk keadaan dan meluasnya kekacauan.', 'Doctor Strange in.jpg', '2022-12-22 19:37:10', NULL),
(18, 'Action, Adventure, Fantasy', 'Doctor Strange in the', '2022-12-21', 'Dalam trailernya yang diunggah di YouTube Marvel Entertainment, dibuka dengan monolog dari Stephen Strange, yang diganggu oleh mimpi yang sama setiap malam setelah kejadian di No Way Home. Dilansir dari laman Techradar, film ini akan mengajak penonton untuk berfokus pada multiverse atau multisemesta dan mengikuti perjalanan Dr. Strange yang sedang melanjutkan penelitiannya tentang time stone. Penelitiannya itu akan diganggu oleh ancaman musuh, salah satunya adalah Mordo. Penjahat WandaVision Agatha Harkness mengisyaratkan bahwa Penyihir Merah akan \"menghancurkan dunia\". Sementara itu, Scarlet Witch membutuhkan Strange untuk bekerja sama dengan makhluk berkekuatan super lainnya untuk mengatasi musuh. Mereka jelas akan bergabung dengan Chavez, Wong, Rintrah, dan penyihir lainnya, tetapi sepertinya mereka membutuhkan lebih banyak bantuan untuk menghentikan seseorang yang sekuat Penyihir Merah. Mungkin saja, ketika Strange meminta bantuan Wanda dalam menangani multiverse, dia menggunakan sihir terlarangnya yang justru akan memperburuk keadaan dan meluasnya kekacauan.', 'Doctor Strange in the.jpg', '2022-12-22 19:49:52', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_11_25_123353_create_pegawai_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `isactive` tinyint(1) NOT NULL DEFAULT 0,
  `foto` varchar(50) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `isactive`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yudha', 'yudha@gmail.com', NULL, '$2y$10$3GhFiuUjOmUodswfALItuOxxx4LVQotRenWw.Hp3t5mKo0q8vqiIy', 'admin', 1, 'yudha.jpg', NULL, '2022-11-21 20:25:07', '2022-11-21 20:25:07'),
(9, 'dwiyudha', 'dwiyudha0444@gmail.com', NULL, '$2y$10$CivZ69kFeGOLGo9a2zMRsuGcMhVjnFN8CC/cM8xyDPEMtzRnqdW8m', 'admin', 1, NULL, NULL, '2022-12-21 06:20:38', '2022-12-21 06:20:38'),
(11, 'eya', 'eya@q', NULL, '$2y$10$gxmUGRmSg5FCAq3Jp6gu1O7jpMFI3/HMfllO/FY8IbbpnpGQYJYAa', 'user', 0, NULL, NULL, '2022-12-21 06:37:07', '2022-12-21 06:37:07'),
(12, 'jarwoq', 'jarwo@h', NULL, '$2y$10$La86EvFu8np2SsOdmfbVLeWgTzM9BXz1km4kD/jQkVaQlDsF5qBFu', 'user', 1, NULL, NULL, '2022-12-21 06:49:59', '2022-12-22 05:03:00'),
(13, 'fu', 'fu@a', NULL, '$2y$10$cqkKUuGpR37YGrYpdH6oMODy77JboJWlSOieW4Fl214q2gabIDV8O', 'user', 1, NULL, NULL, '2022-12-22 05:05:36', '2022-12-22 08:19:44'),
(14, 'bew', 'bew@bew', NULL, '$2y$10$tT9q8xWKfrPYHa9eATmj8e7cSKZGYbR5GJ7FaYC7sFSLKFg2PvERa', 'user', 1, NULL, NULL, '2022-12-22 07:37:15', '2022-12-22 08:19:55'),
(15, 'yuu', 'yuu1@gmail.com', NULL, '$2y$10$m5IK6pT5grmlINUAm6h94uGq4uSajZRtrp2cyYkBjiJRk/6FI3L6G', 'user', 1, NULL, NULL, '2022-12-22 18:42:13', '2022-12-22 19:38:47'),
(16, 'yud', 'yud@gmail.com', NULL, '$2y$10$RBuhpCucpjJrJBPQSgYS9.Gn/WQn4/AXb6RE21ttuolNk06qPIz1C', 'user', 1, NULL, NULL, '2022-12-22 19:32:53', '2022-12-22 19:39:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
