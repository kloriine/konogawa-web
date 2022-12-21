-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 01:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konogawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `modified_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `modified_at`) VALUES
(1, 'Mentai Series', '2022-12-20', NULL),
(2, 'Katsu Series', '2022-12-20', NULL),
(3, 'Rice Box', '2022-12-20', NULL),
(4, 'Snack', '2022-12-20', NULL),
(5, 'Dessert', '2022-12-20', NULL),
(6, 'Coffee Based', '2022-12-20', NULL),
(7, 'Latte and Friends', '2022-12-20', NULL),
(8, 'Coffee For Another Day', '2022-12-20', NULL),
(9, 'Manual Brew', '2022-12-20', NULL),
(10, 'Don\'t Spill it', '2022-12-20', NULL),
(11, 'Konogawa Special Signature', '2022-12-20', NULL);

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` date DEFAULT NULL,
  `modified_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `category_id`, `price`, `created_at`, `modified_at`) VALUES
(1, 'Mofu Mofu Tamago', 'Soft omelette egg showered with our special mentai sauce, will guarantee you a sweet experience', 1, 25000, '2022-12-20', NULL),
(2, 'Orenji Chikin', 'Fresh chicken cooked with our OG mentai sauce, served with love and rice', 1, 29000, '2022-12-20', NULL),
(3, 'Chicken Katsu the OG', 'Our specialty Chicken Katsu served with tonkatsu sauce, rice, side dish, and love', 2, 35000, '2022-12-20', NULL),
(4, 'Chicken Katsu Deep Orange Sea', 'Our specialty Chicken Katsu served with tonkatsu sauce, rice, side dish, and love', 2, 35000, '2022-12-20', NULL),
(5, 'Chicken Katsu In Vacation', 'Imagine your katsu visiting Bali, spicy, umami, tropical, and perfection', 2, 35000, '2022-12-20', NULL),
(6, 'Kare Katsu', 'Chicken katsu teamed up with Konogawa homemade curry, best combi ever!', 2, 39000, '2022-12-20', NULL),
(7, 'Chicken Kono Spicy', 'Mysterious spice, dark, and bold. You will like this!', 3, 25000, '2022-12-20', NULL),
(8, 'Chicken Teriyaki Sauce', 'Spicy, like your neighbour mouth', 3, 25000, '2022-12-20', NULL),
(9, 'Chicken Honey Glazed', 'Original taste from east island, sweet yet also umami', 3, 25000, '2022-12-20', NULL),
(10, 'Chicken Salted Egg', 'Honey, yes, sweet and tasty!', 3, 25000, '2022-12-20', NULL),
(11, 'Konoswich', 'You will never experience this kind of sandwich ever in your life, buy it!', 4, 20000, '2022-12-20', NULL),
(12, 'Fureido Potato', 'Ahh yess, simple yet also tasty, potato will never betray you', 4, 18000, '2022-12-20', NULL),
(13, 'Tempe Mendo', 'Javanese fried soybean cake, Perfection', 4, 16000, '2022-12-20', NULL),
(14, 'Cheerful Somay', 'Colorful dumplings will take you to new heights of taste!', 4, 20000, '2022-12-20', NULL),
(15, 'Tempoora', 'We are so sorry that you are getting more chubby, fried food will never give you up though!', 4, 23000, '2022-12-20', NULL),
(16, 'Mini Platter', 'Hungry? But not sure what to get? Get this!', 4, 29000, '2022-12-20', NULL),
(17, 'Snack Platter', 'Still hungry? Okay, get this instead', 4, 35000, '2022-12-20', NULL),
(18, 'Cheerful Dango', 'Feels like you\'re taking a walk in a Japanese festival', 5, 23000, '2022-12-20', NULL),
(19, 'Mitarashi Dango', 'You are in Kyoto, walking with your lover while flirting with them', 5, 25000, '2022-12-20', NULL),
(20, 'Tanghulu', 'You are a child, you like sweets, nostalgic guaranteed!', 5, 22000, '2022-12-20', NULL),
(21, 'Gedangage', 'Take it with your friend, or don\'t share it. It\'s so tasty! Fried Banana, chocolate sauce, and powdered sugar', 5, 18000, '2022-12-20', NULL),
(22, 'Hot Americano', 'Hot Water, Espresso', 6, 22000, '2022-12-20', NULL),
(23, 'Americano Cold', 'Hot Water, Espresso, Iced!', 6, 24000, '2022-12-20', NULL),
(24, 'Hot Cafe Latte', 'Milk, Espresso', 6, 23000, '2022-12-20', NULL),
(25, 'Ice Cafe Latte', 'Milk, Espresso, Iced!', 6, 25000, '2022-12-20', NULL),
(26, 'Cappucino', 'Espresso, Milk', 6, 23000, '2022-12-20', NULL),
(27, 'Espresso', 'Coffee Extraction', 6, 17000, '2022-12-20', NULL),
(28, 'Split Shot', 'Double Shot Espresso', 6, 25000, '2022-12-20', NULL),
(29, 'Picollo', 'Smoll Latte', 6, 21000, '2022-12-20', NULL),
(30, 'Hot Butter Scotch Latte', 'Espresso, Heated Fresh Milk, Butterscotch Syrup', 7, 23000, '2022-12-20', NULL),
(31, 'Ice Butter Scotch Latte', 'Espresso, Heated Fresh Milk, Butterscotch Syrup, Iced!', 7, 25000, '2022-12-20', NULL),
(32, 'Hot Vanilla Latte', 'Espresso, Heated Fresh Milk, Vanilla Syrup', 7, 23000, '2022-12-20', NULL),
(33, 'Ice Vanilla Latte', 'Espresso, Heated Fresh Milk, Vanilla Syrup, Iced!', 7, 25000, '2022-12-20', NULL),
(34, 'Hot Caramel Latte', 'Espresso, Heated Fresh Milk, Caramel Syrup', 7, 23000, '2022-12-20', NULL),
(35, 'Ice Caramel Latte', 'Espresso, Heated Fresh Milk, Caramel Syrup, Iced!', 7, 25000, '2022-12-20', NULL),
(36, 'Hot Mochaccino', 'Espresso, Milk, Chocolate', 7, 23000, '2022-12-20', NULL),
(37, 'Ice Mochaccino', 'Espresso, Milk, Chocolate, Iced!', 7, 25000, '2022-12-20', NULL),
(38, 'Hojicha Hot', 'Stronger version of matcha. It is hojicha with milk, coming in hot!', 8, 23000, '2022-12-20', NULL),
(39, 'Hojicha Cold', 'Stronger version of matcha. It is hojicha with milk, iced!', 8, 25000, '2022-12-20', NULL),
(40, 'Matcha Hot', 'Your classic choice of matcha latte, coming in hot!', 8, 23000, '2022-12-20', NULL),
(41, 'Matcha Cold', 'Your classic choice of matcha latte, iced!', 8, 25000, '2022-12-20', NULL),
(42, 'Chocolate Hot', 'A smooth-tasting chocolate for every mood, coming in hot!', 8, 23000, '2022-12-20', NULL),
(43, 'Chocolate Cold', 'A smooth-tasting chocolate for every mood, iced!', 8, 25000, '2022-12-20', NULL),
(44, 'Red Velvet Hot', 'Red velvet latte for the win, coming in hot!', 8, 23000, '2022-12-20', NULL),
(45, 'Red Velvet Cold', 'Red velvet latte for the win, iced!', 8, 25000, '2022-12-20', NULL),
(46, 'Babycino', 'Steamed Milk With Chocolate Powder On Top', 8, 18000, '2022-12-20', NULL),
(47, 'Blue Label', NULL, 9, 32000, '2022-12-20', NULL),
(48, 'Green Label', NULL, 9, 25000, '2022-12-20', NULL),
(49, 'Red Label', NULL, 9, 20000, '2022-12-20', NULL),
(50, 'Hot Remon Tea', 'Classic tea with homemade honey-lemon mixture, garnished with lemon slice', 10, 20000, '2022-12-20', NULL),
(51, 'Cold Remon Tea', 'Classic iced tea with homemade honey-lemon mixture, garnished with lemon slice', 10, 22000, '2022-12-20', NULL),
(52, 'Hot Raichi Tea', 'Classic lychee tea', 10, 20000, '2022-12-20', NULL),
(53, 'Cold Raichi Tea', 'Classic iced lychee tea', 10, 22000, '2022-12-20', NULL),
(54, 'Hot Artisan Tea', NULL, 10, 22000, '2022-12-20', NULL),
(55, 'Cold Artisan Tea', NULL, 10, 24000, '2022-12-20', NULL),
(56, 'Kono-Ice Coffee', 'Special Recipe for You', 11, 25000, '2022-12-20', NULL),
(57, 'Gawa-Ice Coffee', 'Special Recipe for Sweet Tooth', 11, 25000, '2022-12-20', NULL),
(58, 'Osaka Red District', 'Rosella, Based with Milk', 11, 25000, '2022-12-20', NULL),
(59, 'Pikotaro Boost', 'Out Special Coffee Mocktail', 11, 25000, '2022-12-20', NULL),
(60, '???', 'Mysterious Drink', 11, 25000, '2022-12-20', NULL);

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
(1, 'Ahlul Aziz', 'ahlulazizap@gmail.com', NULL, '$2y$10$3AMBlGq3W89RE85zryL2OuBTYe0xEdTPoIrBqyCtgsjeT037qsyJ.', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
