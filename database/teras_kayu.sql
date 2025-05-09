-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2025 pada 14.51
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teras_kayu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'Paket 1', 'Paket 1', 'gambar-kategori/fzNkyvQADxdzF0hzrGNrIxpcjw0Pl9cGmmOtkac2.jpg', '2023-06-19 17:24:54', '2023-06-19 17:24:54'),
(3, 'Paket 2', 'Paket 2', 'gambar-kategori/LOixBmRjoRipnDK4zJ4Le1uhpgM2c2rYxszs0jQe.jpg', '2023-06-29 23:30:01', '2023-06-29 23:30:01'),
(4, 'Paket 3', 'Paket 3', 'gambar-kategori/1enrVFEQcHIT3edtg6XyiGBTiTT6FMobM2HcWMlw.jpg', '2023-06-30 02:13:15', '2023-07-13 19:32:52'),
(5, 'Paket 4', 'Paket 4', NULL, '2023-07-14 07:12:25', '2023-07-14 07:12:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `full_customs`
--

CREATE TABLE `full_customs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `fullcustom_date` date NOT NULL,
  `phone_number` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_custom` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `full_customs`
--

INSERT INTO `full_customs` (`id`, `status`, `fullcustom_date`, `phone_number`, `description`, `image_custom`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 1, '2023-07-15', '08977373148', 'testing', 'gambar-fullcustom/XZ33y2hG3mha2JLyaKVzPgPfRv3EGTOhW8Dp0BEO.png', 4, '2023-07-14 17:02:04', '2023-07-14 17:02:04'),
(6, 1, '2025-05-04', '085940067444', 'Rumah lantai 2 dan minimalis dilengkapi dengan garasi untuk mobil.', 'gambar-fullcustom/WaFAKcx2gfIxI8HMlmpYDqFBs7yJUDF33OlJ6qlm.jpg', 14, '2025-05-04 03:38:58', '2025-05-04 03:38:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `full_custom_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `body`, `user_id`, `full_custom_id`, `created_at`, `updated_at`) VALUES
(133, 'hallo kak', 14, 6, '2025-05-04 03:39:18', '2025-05-04 03:39:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_09_100738_create_products_table', 1),
(6, '2023_04_09_100950_create_categories_table', 1),
(7, '2023_04_09_101051_create_orders_table', 1),
(8, '2023_04_09_101224_create_order_details_table', 1),
(9, '2023_04_10_023305_create_user_data_table', 1),
(10, '2023_05_23_060546_create_shipments_table', 1),
(11, '2023_05_28_093905_create_full_customs_table', 1),
(12, '2023_05_30_055100_create_messages_table', 1),
(13, '2023_06_18_052303_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('2dfdcda0-a613-459c-a3d5-b92d5ace44da', 'App\\Notifications\\CreateMessage', 'App\\Models\\User', 3, '{\"message_id\":135,\"full_custom_id\":6,\"user_create\":\"Erwin Smith\",\"body\":\"woilah bales\",\"user_id\":14}', NULL, '2025-05-04 09:20:05', '2025-05-04 09:20:05'),
('4bc57aee-1ca8-4e4a-a421-0b81328dd7f3', 'App\\Notifications\\CreateMessage', 'App\\Models\\User', 3, '{\"message_id\":133,\"full_custom_id\":6,\"user_create\":\"Erwin Smith\",\"body\":\"hallo kak\",\"user_id\":14}', NULL, '2025-05-04 03:39:19', '2025-05-04 03:39:19'),
('5ab4a1b1-4d56-48bf-ba5f-5b414fab5b79', 'App\\Notifications\\CreateMessage', 'App\\Models\\User', 4, '{\"message_id\":134,\"full_custom_id\":6,\"user_create\":\"Erwin Smith\",\"body\":\"woilah bales\",\"user_id\":14}', NULL, '2025-05-04 09:20:03', '2025-05-04 09:20:03'),
('767348f1-b09e-4a3a-8992-3da9f205435b', 'App\\Notifications\\CreateMessage', 'App\\Models\\User', 4, '{\"message_id\":135,\"full_custom_id\":6,\"user_create\":\"Erwin Smith\",\"body\":\"woilah bales\",\"user_id\":14}', NULL, '2025-05-04 09:20:05', '2025-05-04 09:20:05'),
('7cd4c514-e189-4748-a1e9-cb0f3f3e53e1', 'App\\Notifications\\CreateMessage', 'App\\Models\\User', 4, '{\"message_id\":133,\"full_custom_id\":6,\"user_create\":\"Erwin Smith\",\"body\":\"hallo kak\",\"user_id\":14}', NULL, '2025-05-04 03:39:19', '2025-05-04 03:39:19'),
('809e85ac-e9b6-4c36-ade4-61adea168c53', 'App\\Notifications\\CreateMessage', 'App\\Models\\User', 3, '{\"message_id\":134,\"full_custom_id\":6,\"user_create\":\"Erwin Smith\",\"body\":\"woilah bales\",\"user_id\":14}', NULL, '2025-05-04 09:20:03', '2025-05-04 09:20:03'),
('95e9b882-b44c-446b-8b7a-3f9b572ec94f', 'App\\Notifications\\CreateMessage', 'App\\Models\\User', 1, '{\"message_id\":135,\"full_custom_id\":6,\"user_create\":\"Erwin Smith\",\"body\":\"woilah bales\",\"user_id\":14}', NULL, '2025-05-04 09:20:05', '2025-05-04 09:20:05'),
('d0a9735f-395e-48b9-8288-56794377ced9', 'App\\Notifications\\CreateMessage', 'App\\Models\\User', 1, '{\"message_id\":134,\"full_custom_id\":6,\"user_create\":\"Erwin Smith\",\"body\":\"woilah bales\",\"user_id\":14}', NULL, '2025-05-04 09:20:03', '2025-05-04 09:20:03'),
('d3b6dc7f-c21c-4f7f-afed-a9ef1cd1ab82', 'App\\Notifications\\CreateMessage', 'App\\Models\\User', 1, '{\"message_id\":133,\"full_custom_id\":6,\"user_create\":\"Erwin Smith\",\"body\":\"hallo kak\",\"user_id\":14}', NULL, '2025-05-04 03:39:19', '2025-05-04 03:39:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `order_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu Konfirmasi',
  `payment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu Pembayaran',
  `order_date` date NOT NULL,
  `dp_price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `remaining_payment` int(11) NOT NULL,
  `payment_option` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DP 50%',
  `full_payment` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evidencetf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evidencetf2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_method` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_service` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resi_number` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postage` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shipment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `status`, `order_status`, `payment_status`, `order_date`, `dp_price`, `total_price`, `remaining_payment`, `payment_option`, `full_payment`, `evidencetf`, `evidencetf2`, `shipping_method`, `shipping_service`, `resi_number`, `postage`, `user_id`, `shipment_id`, `created_at`, `updated_at`) VALUES
(32, 'TKP-4-32', 1, 'Diproses', 'DP', '2023-07-14', 2125000, 4250000, 2125000, 'DP 50%', NULL, 'buktif-tf/1uZmYd1GBHZ6TeWNWdvWozM2hePEMucxHwLhVxRA.png', NULL, NULL, NULL, NULL, NULL, 4, 15, '2023-07-14 05:33:43', '2023-07-14 06:02:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qty_order` tinyint(4) NOT NULL,
  `length` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `order_details`
--

INSERT INTO `order_details` (`id`, `qty_order`, `length`, `height`, `product_id`, `order_id`, `created_at`, `updated_at`) VALUES
(32, 1, 200, 170, 6, 32, '2023-07-14 05:33:43', '2023-07-14 05:33:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ayanika251@gmail.com', '$2y$10$597SGnJpy1RncB7v6O/joOwLhm3GE76Y8ieWU0BdbDpak7HsMbLua', '2025-04-28 11:05:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_image` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_meter` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `product_image`, `name`, `slug`, `description`, `price_meter`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'gambar-produk/WmGMJANSjZvY0mBF0J6W5t3GutefE9REEQLYSAm5.jpg', 'Paket 1', 'Rp. 10.000/m²', 'Visualisasi 3D Eksterior\r\n\r\n1 View tampak/fasad bangunan\r\n\r\nGambar Arsitektur\r\n✅ Gambar Denah\r\n✅ Gambar Tampak\r\n✅ Gambar Potongan\r\n✅ Gambar Denah Atap\r\n❌ Gambar Pola Lantai/Keramik\r\n❌ Gambar Pola Plafon + detail\r\n❌ Gambar Kusen + detail kusen\r\n\r\nGambar Struktur\r\n❌ Semua gambar struktur (pondasi, sloof, kolom, balok, lantai, rangka atap, tangga)\r\n\r\nGambar Mekanikal Elektrikal Plumbing (MEP)\r\n❌ Semua (denah listrik, air bersih, air kotor, septic tank)', 1500000, 1, '2023-06-19 17:25:29', '2023-06-29 23:34:14'),
(4, 'gambar-produk/1TDC3LfMdNCtV5dfOP7kBJNDNf7N5LmYDlh9nD0x.jpg', 'Paket 2', 'Rp. 20.000/m²', 'Visualisasi 3D Eksterior\r\n\r\n2 View\r\n\r\nGambar Arsitektur\r\n✅ Gambar Denah\r\n✅ Gambar Tampak\r\n✅ Gambar Potongan\r\n✅ Gambar Denah Atap\r\n❌ Gambar Pola Lantai/Keramik\r\n❌ Gambar Pola Plafon\r\n❌ Gambar Kusen + detail\r\n\r\nGambar Struktur\r\n✅ Gambar Denah Sloof + Detail\r\n✅ Gambar Denah Kolom + Detail\r\n✅ Gambar Denah Balok + Detail\r\n✅ Gambar Denah Rangka Atap + Detail\r\n✅ Gambar Detail Tangga\r\n❌ Gambar Pondasi\r\n❌ Gambar Plat Lantai\r\n\r\nGambar MEP\r\n❌ Semua tidak tersedia\r\n\r\n', 50, 3, '2023-06-29 23:38:26', '2023-07-07 19:32:43'),
(5, 'gambar-produk/iqv50TBChxQY2m2UYvbahwDmQoGn3Pu07T0yTqab.jpg', 'Paket 3', 'Rp. 25.000/m²', 'Visualisasi 3D Eksterior\r\n\r\n2 View\r\n\r\nGambar Arsitektur\r\n✅ Semua seperti Paket 2 +\r\n✅ Gambar Pola Lantai/Keramik\r\n✅ Gambar Pola Plafon\r\n❌ Gambar Kusen + detail kusen\r\n\r\nGambar Struktur\r\n✅ Semuanya tersedia kecuali:\r\n❌ Gambar Denah Pondasi\r\n\r\nGambar MEP\r\n✅ Semua tersedia:\r\n\r\nGambar Denah Elektrikal\r\n\r\nGambar Denah Air Bersih\r\n\r\nGambar Denah Air Kotor\r\n\r\nGambar Detail Septic Tank', 1000000, 3, '2023-06-30 02:11:28', '2023-06-30 02:11:28'),
(6, 'gambar-produk/aYHW0cLG7ztSNHijVPoq60CSmh3epPTd1hsUMDoi.jpg', 'Paket 4', 'Rp. 30.000/m²', 'Visualisasi 3D Eksterior\r\n\r\n4 View\r\n\r\nGambar Arsitektur\r\n✅ Semua lengkap:\r\n\r\nDenah, Tampak, Potongan\r\n\r\nPola Lantai, Pola Plafon\r\n\r\nKusen + detail\r\n\r\nDenah Atap\r\n\r\nGambar Struktur\r\n✅ Semua lengkap:\r\n\r\nPondasi, Sloof, Kolom, Balok\r\n\r\nPlat Lantai, Rangka Atap\r\n\r\nTangga\r\n\r\nGambar MEP\r\n✅ Semua lengkap:\r\n\r\nDenah Elektrikal\r\n\r\nAir Bersih, Air Kotor\r\n\r\nSeptic Tank\r\n\r\n', 1250000, 4, '2023-06-30 02:16:01', '2023-06-30 02:16:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` char(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `shipments`
--

INSERT INTO `shipments` (`id`, `name`, `address`, `phone_number`, `user_id`, `created_at`, `updated_at`) VALUES
(15, 'Risang Abdurrahman Gustiwa', 'Kutasari RT03/RW02 Baturraden', '08977373148', 4, '2023-06-29 19:40:03', '2023-06-29 19:40:03'),
(16, 'Erwin Smith', 'Jalan Imam Bonjol Nomor 180', '085940067444', 14, '2025-05-04 03:32:24', '2025-05-04 03:32:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2025-05-04 10:43:39', 'admin123', 'admin', NULL, '2025-05-03 22:24:04', '2025-04-27 08:20:33'),
(3, 'Reiner Braun', 'reinerbraun90@gmail.com', NULL, 'reinerbraun123', 'user', NULL, NULL, NULL),
(4, 'Risang Abdurrahman Gustiwa', 'rabdurrahmang@gmail.com', '2023-06-27 18:35:58', '$2y$10$taNA.R.KqEl0finXc4SfiuX/WXDYmck8o2jnnewLAZG9SjH9gOewi', 'user', 'Z6DHbTkPLgWSi064jdkbllqdZQ2BQBCaS2O6d8SdKH4Q9LJuCuc8kc5Jxagh', '2023-06-27 17:54:35', '2023-07-04 22:56:03'),
(14, 'Erwin Smith', 'erwinsmith97@gmail.com', '2025-05-04 10:29:01', '$2y$10$16qtQA23yESU/5T4ulE.iOSEykc78PUIflNCfi9hQ.tPDEdL4BKI6', 'user', 'pbx9Yjc0XC09DQ0gjB3I71hwaLmiWfxCLnReCz6egzHfgvtgcs5NAC3N0MV2', '2025-05-04 03:24:39', '2025-05-04 03:24:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_data`
--

CREATE TABLE `user_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dateborn` date DEFAULT NULL,
  `gender` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` char(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_data`
--

INSERT INTO `user_data` (`id`, `dateborn`, `gender`, `phone_number`, `user_id`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, '08977373148', 4, '2023-06-29 19:40:03', '2023-06-29 19:40:03'),
(4, '1997-09-15', 'Laki-laki', '085940067444', 14, '2025-05-04 03:31:49', '2025-05-04 03:31:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `full_customs`
--
ALTER TABLE `full_customs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_full_custom_id_foreign` (`full_custom_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indeks untuk tabel `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_data_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `full_customs`
--
ALTER TABLE `full_customs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_full_custom_id_foreign` FOREIGN KEY (`full_custom_id`) REFERENCES `full_customs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
