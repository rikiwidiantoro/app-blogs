-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 11:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Enim qui voluptatum aut quasi maiores aut.', 'A mollitia eos magnam dolore ipsa. Est nihil nisi et facere nesciunt modi. Est ut quod sed dolor ea quia qui. Facilis aut modi sequi. Libero pariatur fuga ut saepe ut et hic.', 'quod.jpg', 3, '2022-10-02 02:21:31', '2022-10-02 02:21:31'),
(2, 'Amet quis ipsum sapiente ea consequatur quasi vel.', 'In aperiam nisi hic rem dolores suscipit. In qui ut dolorem eveniet et dicta. Est dolor cupiditate ex a officiis excepturi. Consectetur amet cum excepturi omnis veniam a doloremque. Rerum est modi delectus voluptatem provident molestiae. Non ducimus rerum omnis consequatur pariatur facere unde.', 'exercitationem.jpg', 3, '2022-10-02 02:21:31', '2022-10-02 02:21:31'),
(3, 'Ipsam animi eaque voluptas saepe dignissimos et eos.', 'Reiciendis voluptatem nam molestiae possimus. Et eum ex dolor minima quo minima iusto. Voluptatem facere consequatur qui quam voluptatem aliquid eius. Odio officia possimus sed laboriosam natus.', 'quod.jpg', 2, '2022-10-02 02:21:31', '2022-10-02 02:21:31'),
(4, 'Sed aliquid ea eum voluptas ullam.', 'Quia nam sit maiores consequatur sunt. Sed quidem quasi eum labore at.', 'dicta.jpg', 3, '2022-10-02 02:21:31', '2022-10-02 02:21:31'),
(5, 'Dolorem expedita alias architecto natus praesentium labore.', 'Odio voluptatum sit fugiat quos unde. Quia quisquam et qui mollitia. Eaque temporibus sunt est ut et.', 'qui.jpg', 2, '2022-10-02 02:21:31', '2022-10-02 02:21:31'),
(6, 'Quaerat esse rerum quos.', 'Quia illum laudantium expedita praesentium fugit. Consequatur dolorem natus sunt. Corporis possimus veritatis dolorem qui alias aliquam minus.', 'ut.jpg', 1, '2022-10-02 02:21:31', '2022-10-02 02:21:31'),
(7, 'Reiciendis quod quae id culpa optio iste.', 'Quia aliquam voluptatem fugiat blanditiis est. Eos excepturi officia omnis eius impedit rerum molestias molestiae. Odit sint non eaque modi ut eius dolor.', 'facere.jpg', 1, '2022-10-02 02:21:31', '2022-10-02 02:21:31'),
(8, 'Voluptates voluptatibus laboriosam quia qui vel.', 'Ut inventore animi quis ratione iure voluptates porro. Rerum vel nobis ad id voluptatibus quam eligendi eaque. Sequi et ipsam voluptate sint. Nisi ut minima iusto ab. Corrupti placeat porro sed aut dolore commodi officia.', 'nulla.jpg', 2, '2022-10-02 02:21:31', '2022-10-02 02:21:31'),
(9, 'Provident unde magni doloremque dicta nostrum.', 'Commodi enim error alias pariatur et aliquid. Voluptatem culpa fugit omnis aperiam harum. Sint ipsam nostrum fugit eos necessitatibus assumenda. Qui omnis aut velit nihil modi sint. Perferendis omnis tenetur ipsa.', 'eum.jpg', 3, '2022-10-02 02:21:31', '2022-10-02 02:21:31'),
(10, 'Aut vel nulla quod corrupti eos.', 'Sed voluptate quis harum quo reprehenderit officiis ut. Totam unde eum nemo rerum nihil ut. Aut labore reprehenderit delectus nam.', 'facilis.jpg', 1, '2022-10-02 02:21:31', '2022-10-02 02:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kategori Satu', '2022-10-02 02:21:31', '2022-10-02 02:21:31'),
(2, 'Kategori Dua', '2022-10-02 02:21:31', '2022-10-02 02:21:31'),
(3, 'Kategori Tiga', '2022-10-02 02:21:31', '2022-10-02 02:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(113, '2014_10_12_000000_create_users_table', 1),
(114, '2014_10_12_100000_create_password_resets_table', 1),
(115, '2019_08_19_000000_create_failed_jobs_table', 1),
(116, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(117, '2022_09_29_062628_create_articles_table', 1),
(118, '2022_09_29_071410_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Riki Widiantoro', 'qwerty@aa.com', NULL, '$2y$10$Utp3KRftYBnN.fuG.a5m5ums.oU6ujvodnVOhPD524/G5JHmRqJCi', NULL, '2022-10-02 02:21:31', '2022-10-02 02:21:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
