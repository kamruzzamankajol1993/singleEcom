-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 09:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `singleecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_one` varchar(255) DEFAULT NULL,
  `title_two` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `button_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title_one`, `title_two`, `price`, `discount`, `image`, `button_name`, `created_at`, `updated_at`) VALUES
(1, 'Customer Service', 'Online Consultation', '100', '90', 'public/uploads/1690656447buy-main2.png', 'Show', '2023-07-29 12:47:27', '2023-07-29 12:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `ship_price` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'NANNA PLATTER', 'nanna-platter', 'uploads/16845760502.png', 'Active', '2023-05-20 03:47:31', '2023-05-20 07:02:58'),
(2, 'PLAIN POLAO PLATTER', 'plain-polao-platter', 'uploads/16845774701.png', 'Active', '2023-05-20 04:11:11', '2023-05-20 07:03:22'),
(3, 'SPECIALS PRE-ORDER', 'specials-pre-order', 'uploads/16845775433.png', 'Active', '2023-05-20 04:12:24', '2023-05-20 07:04:16'),
(4, 'VEGETABLE SELECTION', 'vegetable-selection', 'uploads/16845775934.png', 'Active', '2023-05-20 04:13:14', '2023-05-20 07:04:39'),
(5, 'RICE', 'rice', 'uploads/16845776235.png', 'Active', '2023-05-20 04:13:44', '2023-05-20 07:04:57'),
(6, 'KIDS MENU', 'kids-menu', 'uploads/16845776726.png', 'Active', '2023-05-20 04:14:33', '2023-05-20 07:05:20'),
(7, 'BEVERAGE', 'beverage', 'uploads/16845777077.png', 'Active', '2023-05-20 04:15:07', '2023-05-20 07:05:44'),
(8, 'DESSERT', 'dessert', 'uploads/16845777888.png', 'Active', '2023-05-20 04:16:29', '2023-05-20 07:06:08'),
(9, 'STARTERS', 'starters', 'uploads/16845778249.png', 'Active', '2023-05-20 04:17:05', '2023-05-20 07:06:23'),
(10, 'TRADITIONAL CURRIES', 'traditional-curries', 'uploads/168457787210.png', 'Active', '2023-05-20 04:17:52', '2023-05-20 07:06:49'),
(11, 'TRADITIONAL BIRYANI', 'traditional-biryani', 'uploads/168457791111.png', 'Active', '2023-05-20 04:18:31', '2023-05-20 07:07:18'),
(12, 'FISH DISH', 'fish-dish', 'uploads/168457794312.png', 'Active', '2023-05-20 04:19:04', '2023-05-20 07:07:34'),
(13, 'NANNA SPECIAL ADDITON', 'nanna-special-additon', 'uploads/1684588464Salad.png', 'Active', '2023-05-20 07:14:24', '2023-05-20 07:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `choose_us`
--

CREATE TABLE `choose_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `animate_title` varchar(255) DEFAULT NULL,
  `title_one` varchar(255) DEFAULT NULL,
  `title_two` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_one` varchar(255) DEFAULT NULL,
  `button_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `choose_us`
--

INSERT INTO `choose_us` (`id`, `animate_title`, `title_one`, `title_two`, `image`, `image_one`, `button_name`, `created_at`, `updated_at`) VALUES
(1, 'dsfdsf', 'fdfd', 'sdfds', 'public/uploads/1690657506sale-bg2.png', 'public/uploads/1690657506sale-main2.png', NULL, '2023-07-29 13:05:06', '2023-07-29 13:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_one` varchar(255) DEFAULT NULL,
  `phone_two` varchar(255) DEFAULT NULL,
  `email_one` text DEFAULT NULL,
  `email_two` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_addresses`
--

CREATE TABLE `delivery_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `extra_items`
--

CREATE TABLE `extra_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `food_slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `type`, `slug`, `image`, `category_slug`, `detail`, `price`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Kacchi Platter', 'Yes', 'kacchi-platter', 'uploads/1684588637download.jpg', 'nanna-platter', 'Kacchi Chicken Roast,  Sami Kebab, Beef Rezala,  Borhani or Soft Drinks,  Firni, Chutney, Salad', '35.95', 'Active', '2023-05-20 07:17:17', '2023-05-20 07:17:17'),
(3, 'Plain Polao', 'Yes', 'plain-polao', 'uploads/1684588779ctwothree_b.jpg', 'plain-polao-platter', 'Plain Polao, Chicken Roast,  Beef Rezala, Borhani or Soft  Drinks, Firni, Chutney, Salad', '18.95', 'Active', '2023-05-20 07:19:39', '2023-05-20 07:19:39'),
(4, 'Beef Tehari', 'Yes', 'beef-tehari', 'uploads/1684588894beef-tehari-bengali-style-258218695.jpg', 'plain-polao-platter', 'Beef Tehari, Sami Kebab,  Firni, Chutney, Salad', '13.95', 'Active', '2023-05-20 07:21:34', '2023-05-20 07:21:34'),
(5, 'Lamb Leg Roas', 'Yes', 'lamb-leg-roas', 'uploads/16845931739380-roast-leg-of-lamb-DDMFS-4x3-088295149a224717acbfbfb069098c3e.jpg', 'specials-pre-order', 'Pre-order', '49.95', 'Active', '2023-05-20 08:32:53', '2023-05-20 08:32:53'),
(6, 'Whole Chicken Roast', 'Yes', 'whole-chicken-roast', 'uploads/1684593251Roasted-Chicken-with-Lemon-Recipe-1200.jpg', 'specials-pre-order', 'Pre-order', '13.95', 'Active', '2023-05-20 08:34:12', '2023-05-20 08:34:12'),
(7, 'Kata Moshlai Gorur Mangsho', 'Yes', 'kata-moshlai-gorur-mangsho', 'uploads/1684593331Kata-Moshlay-Gorur-Mangsho-Cookish-Creation.jpg', 'specials-pre-order', 'Pre-order', '10.95', 'Active', '2023-05-20 08:35:31', '2023-05-20 08:35:31'),
(8, 'Potato Bhaji', 'Yes', 'potato-bhaji', 'uploads/1684593445dry-potato-bhaji.jpg', 'vegetable-selection', 'আলু ভাজি', '5.95', 'Active', '2023-05-20 08:37:26', '2023-05-20 08:41:36'),
(9, 'Tarka Dal', 'Yes', 'tarka-dal', 'uploads/1684593576tarka-dhal-1200x800.jpg', 'vegetable-selection', 'টারকা ডাল', '5.95', 'Active', '2023-05-20 08:39:36', '2023-05-20 08:42:41'),
(10, 'Polao', 'Yes', 'polao', 'uploads/1684593872Daily-sun-2018-03-05-06-5.jpg', 'rice', 'পোলাও', '4.95', 'Active', '2023-05-20 08:44:32', '2023-05-20 08:44:32'),
(11, 'Plain Rice', 'No', 'plain-rice', 'uploads/16845973302ce4bee6-2e4c-477d-96d8-f4c7c7eaff0c.jpg', 'rice', 'সাদা ভাত', '3.95', 'Active', '2023-05-20 09:42:10', '2023-05-20 09:42:10'),
(12, 'Plain Khichuri', 'No', 'plain-khichuri', 'uploads/1684597437maxresdefault.jpg', 'rice', 'খিচুড়ি', '4.95', 'Active', '2023-05-20 09:43:58', '2023-05-20 09:45:50'),
(13, 'Chicken Roast with Polao Rice', 'No', 'chicken-roast-with-polao-rice', 'uploads/1684597539download (1).jpg', 'kids-menu', 'Roasted chicken topped with fried onions.', '8.95', 'Active', '2023-05-20 09:45:39', '2023-05-20 09:45:39'),
(14, 'Borhani', 'No', 'borhani', 'uploads/1684597827borhani_5418-reg.jpg', 'beverage', 'appretising drink বোরহানী (Glass)', '3.50', 'Active', '2023-05-20 09:50:27', '2023-05-20 09:50:37'),
(15, 'Borhani', 'No', 'borhani', 'uploads/1684597935000217kalerkantho-09-05-2020-16.jpg', 'beverage', '(500ml)', '4.95', 'Active', '2023-05-20 09:52:15', '2023-05-20 09:52:15'),
(16, 'Borhani', 'No', 'borhani', 'uploads/1684598021maxresdefault (1).jpg', 'beverage', '1.5(Ltr)', '9.95', 'Active', '2023-05-20 09:53:42', '2023-05-20 09:53:42'),
(17, 'Zafran Sorbot', 'No', 'zafran-sorbot', 'uploads/1684598120badam-thandai.jpg', 'beverage', '(Glass)', '2.50', 'Active', '2023-05-20 09:55:20', '2023-05-20 09:55:20'),
(18, 'Mango Lassi', 'No', 'mango-lassi', 'uploads/1684598244Mango-Lassi-Square-500x375.jpg', 'beverage', 'Glass', '3.95', 'Active', '2023-05-20 09:57:24', '2023-05-20 09:57:24'),
(19, 'Coke / Fanta / 7up', 'No', 'coke-fanta-7up', 'uploads/1684598411sawaconglomerate-19100270.jpg', 'beverage', NULL, '2.50', 'Active', '2023-05-20 10:00:12', '2023-05-20 10:00:12'),
(20, 'Coke / Fanta / 7up', 'No', 'coke-fanta-7up', 'uploads/1684598464sawaconglomerate-19100270.jpg', 'beverage', '1.5 ltr', '3.95', 'Active', '2023-05-20 10:01:04', '2023-05-20 10:01:04'),
(21, 'Water', 'No', 'water', 'uploads/1684598628waterbottles.png', 'beverage', 'Small (330ml)', '1.95', 'Active', '2023-05-20 10:03:48', '2023-05-20 10:03:48'),
(22, 'Water', 'No', 'water', 'uploads/1684598671depositphotos_64744193-stock-photo-cold-water-bottles-in-ice.jpg', 'beverage', 'Large (1.5 ltr)', '3.95', 'Active', '2023-05-20 10:04:31', '2023-05-20 10:04:31'),
(23, 'Lemon Tea', 'No', 'lemon-tea', 'uploads/1684598802Refreshing-Cold-Lemon-Iced-Tea.jpg', 'beverage', 'লেমন চা', '1.95', 'Active', '2023-05-20 10:06:42', '2023-05-20 10:06:42'),
(24, 'Karak Chai', 'No', 'karak-chai', 'uploads/1684598883karak-spots-in-Dubai.jpg', 'beverage', NULL, '2.50', 'Active', '2023-05-20 10:08:03', '2023-05-20 10:08:03'),
(25, 'Firni', 'No', 'firni', 'uploads/16845989367071.jpg', 'dessert', NULL, '3.95', 'Active', '2023-05-20 10:08:56', '2023-05-20 10:08:56'),
(26, 'Jorda', 'No', 'jorda', 'uploads/1684599019maxresdefault (2).jpg', 'dessert', NULL, '2.95', 'Active', '2023-05-20 10:10:19', '2023-05-20 10:10:19'),
(27, 'Doi', 'No', 'doi', 'uploads/1684599075p93r-hero.webp', 'dessert', NULL, '2.95', 'Active', '2023-05-20 10:11:15', '2023-05-20 10:11:15'),
(28, 'Aloobukhara Chutney', 'No', 'aloobukhara-chutney', 'uploads/1684599429photo.jpg', 'starters', '(আলুবুখারা চাটনি)Aloobukhara (dried plum) prepared with special masala, tamarind, served with chutney.', '2.40', 'Active', '2023-05-20 10:17:09', '2023-05-20 10:17:09'),
(29, 'Fuska 6pcs', 'No', 'fuska-6pcs', 'uploads/1684599533fuska.jpg', 'starters', '(ফুসকা),Golden brown crispy puree stuffed with yellow peas and potato preparation, served with tamarind sauce.', '5.95', 'Active', '2023-05-20 10:18:53', '2023-05-20 10:18:53'),
(30, 'Chotpoti', 'No', 'chotpoti', 'uploads/1684599880images.jpg', 'starters', 'চোটপটি ,Yellow peas and potato preparation mixed with chotpoti masala. Topped up with shredded egg and served with tamarind sauce', '5.95', 'Active', '2023-05-20 10:24:40', '2023-05-20 10:24:40'),
(31, 'Shahi Haleem', 'No', 'shahi-haleem', 'uploads/1684599971download (2).jpg', 'starters', 'শাহী হালিম,Seven different types of lentils cooked with special haleem masala and chunk of beef, served with fresh coriander, ginger, green chilli & lemon.', '6.95', 'Active', '2023-05-20 10:26:11', '2023-05-20 10:26:11'),
(32, 'Shami Kebab', 'No', 'shami-kebab', 'uploads/1684600086659515114_muttonshamikebab600x400.jpg', 'starters', 'শামি কাবাব, Small party of minced meat mixed with shahi masala & fried in deep oil.', '5.95', 'Active', '2023-05-20 10:28:06', '2023-05-20 10:28:06'),
(33, 'Chicken Roast 1pc', 'No', 'chicken-roast-1pc', 'uploads/1684600258maxresdefault (3).jpg', 'starters', 'চিকেন রোস্ট, Roasted chicken topped with fried onions.', '4.95', 'Active', '2023-05-20 10:30:58', '2023-05-20 10:30:58'),
(34, 'Chicken Koliza Fry', 'No', 'chicken-koliza-fry', 'uploads/1684600373Beef-Liver-Curry-Kolija-Bhuna.jpg', 'starters', 'চিকেন কলিজা ফ্রাই', '3.95', 'Active', '2023-05-20 10:32:53', '2023-05-20 10:32:53'),
(35, 'Chicken Bhuna', 'No', 'chicken-bhuna', 'uploads/1684600496img65413.whqc_768x512q90fpt550fpl578.jpg', 'traditional-curries', '(On the Bone) Chicken cooked with deshi style', '9.95', 'Active', '2023-05-20 10:34:56', '2023-05-20 10:34:56'),
(36, 'Lamb Bhuna', 'No', 'lamb-bhuna', 'uploads/1684600579lamb-bhuna_s900x0_c2112x1234_l0x1080.jpg', 'traditional-curries', '(On the Bone) Lamb cooked with deshi style', '11.95', 'Active', '2023-05-20 10:36:19', '2023-05-20 10:36:19'),
(37, 'Mezbani', 'No', 'mezbani', 'uploads/168460069733bc88d2dbc6d4bb578dc3985ec8c9ed.jpg', 'traditional-curries', '(On the bone) hot or mild', '11.95', 'Active', '2023-05-20 10:38:17', '2023-05-20 10:38:17'),
(38, 'Kala Bhuna', 'No', 'kala-bhuna', 'uploads/1684600787Beef-Kala-Bhuna-Recipe.jpg', 'traditional-curries', '(On the bone) hot or mild', '11.95', 'Active', '2023-05-20 10:39:47', '2023-05-20 10:39:47'),
(39, 'Beef Bhuna', 'No', 'beef-bhuna', 'uploads/1684600861beef-bhuna-768x540.jpg', 'traditional-curries', '(On the bone) hot or mild', '11.95', 'Active', '2023-05-20 10:41:01', '2023-05-20 10:41:01'),
(40, 'Beef Rezala', 'No', 'beef-rezala', 'uploads/1684600919maxresdefault (4).jpg', 'traditional-curries', '(On the bone)', '11.95', 'Active', '2023-05-20 10:41:59', '2023-05-20 10:41:59'),
(41, 'Lamb Chop Fry', 'No', 'lamb-chop-fry', 'uploads/1684601014maxresdefault (5).jpg', 'traditional-curries', '(On the bone)', '9.95', 'Active', '2023-05-20 10:43:34', '2023-05-20 10:43:34'),
(42, 'Kacchi Biryani', 'No', 'kacchi-biryani', 'uploads/1684601086download (3).jpg', 'traditional-biryani', '(On the bone) Kacchi biryani cooked by Kalijeera rice & pieces of lamb in charcoal heat from top & bottom. Served with boiled egg, Potato & salad.', '13.95', 'Active', '2023-05-20 10:44:46', '2023-05-20 10:44:46'),
(43, 'Shahi Morog Polao', 'No', 'shahi-morog-polao', 'uploads/16846011701539329725.jpg', 'traditional-biryani', 'On the bone) Quarter chicken shahi meal cooked by Kalijeera rice, served with boiled egg, salad.', '10.95', 'Active', '2023-05-20 10:46:10', '2023-05-20 10:46:10'),
(44, 'Elish Polao', 'No', 'elish-polao', 'uploads/1684601266ilish.jpg', 'traditional-biryani', 'Bangladeshi fragrant kalijeera rice served with cooked Elish fish (on the Bone), & Salad.', '14.95', 'Active', '2023-05-20 10:47:46', '2023-05-20 10:47:46'),
(45, 'Beef Tehari', 'No', 'beef-tehari', 'uploads/1684601343beef-tehari-final-.jpg', 'traditional-biryani', 'Pieces of beef, potato & Kalijeera rice cooked in three different stage', '11.95', 'Active', '2023-05-20 10:49:03', '2023-05-20 10:49:03'),
(46, 'Beef Bhuna Khichuri', 'No', 'beef-bhuna-khichuri', 'uploads/1684601406Beef-Khichuri.jpg', 'traditional-biryani', '(On the bone) Kalijeera rice, muger dal & pieces of beef cooked with deshi style, spicy.', '11.95', 'Active', '2023-05-20 10:50:07', '2023-05-20 10:50:07'),
(47, 'Lamb Bhuna Khichuri', 'No', 'lamb-bhuna-khichuri', 'uploads/1684601529Beef-Khichuri-serve.jpg', 'traditional-biryani', '(On the bone) Kalijeera rice, muger dal & pieces of lamb cooked with deshi style, spicy', '11.95', 'Active', '2023-05-20 10:52:09', '2023-05-20 10:52:09'),
(48, 'Elish Khichuri', 'No', 'elish-khichuri', 'uploads/1684601584maxresdefault (6).jpg', 'nanna-special-additon', '(On the bone) Kalijeera rice, muger dal & Elish fish cooked with deshi style, spicy', '14.95', 'Active', '2023-05-20 10:53:04', '2023-05-20 10:53:04'),
(49, 'Rohu Fry(Rohu fry with fried onion)', 'Yes', 'rohu-fryrohu-fry-with-fried-onion', 'uploads/1684601772fish fry recipe.jpg', 'fish-dish', 'Bangladeshi Rohu fish with fried onion.', '8.95', 'Active', '2023-05-20 10:56:12', '2023-05-20 10:56:12'),
(50, 'Rohu Bhuna', 'No', 'rohu-bhuna', 'uploads/1684601921maxresdefault (7).jpg', 'fish-dish', 'Piece of Rohu fish cooked and prepared with onions, popular deshi fish dish.', '9.95', 'Active', '2023-05-20 10:58:41', '2023-05-20 10:58:41'),
(51, 'Elish Fry', 'No', 'elish-fry', 'uploads/16846020181927b33e054131e87f6191b3324438ef.webp', 'fish-dish', 'Bangladeshi fresh water fish (Elish) fried with onions.', '12.95', 'Active', '2023-05-20 11:00:18', '2023-05-20 11:00:18'),
(52, 'Shorisha Elish', 'No', 'shorisha-elish', 'uploads/1684602104maxresdefault (8).jpg', 'fish-dish', 'Bangladeshi fresh water fish (Elish) cooked with herbs, onions and mustard seeds.', '13.95', 'Active', '2023-05-20 11:01:44', '2023-05-20 11:01:44'),
(53, 'Elish Bhuna', 'Yes', 'elish-bhuna', 'uploads/1684602175ilish (1).jpg', 'fish-dish', 'Bangladeshi fresh water fish (Elish) cooked with herbs and onions.', '13.95', 'Active', '2023-05-20 11:02:56', '2023-05-20 11:02:56'),
(54, 'Kacchi Biryani with Borhani or Soft Drinks, Firni', 'No', 'kacchi-biryani-with-borhani-or-soft-drinks-firni', 'uploads/1684602416sultans-dine-kachchi-biryani-with-borhani-jorda-firni.jpg', 'nanna-special-additon', NULL, '16.95', 'Active', '2023-05-20 11:06:57', '2023-05-20 11:06:57'),
(55, 'Kacchi Biryani with Chicken Roast, Sami Kebab, Borhani or Soft Drinks', 'No', 'kacchi-biryani-with-chicken-roast-sami-kebab-borhani-or-soft-drinks', 'uploads/1684602500images (1).jpg', 'nanna-special-additon', NULL, '20.95', 'Active', '2023-05-20 11:08:20', '2023-05-20 11:08:20'),
(56, 'Kacchi Biryani with Chicken Roast, Borhani or Soft Drinks', 'No', 'kacchi-biryani-with-chicken-roast-borhani-or-soft-drinks', 'uploads/1684602596kchivai8_b.jpg', 'nanna-special-additon', NULL, '17.95', 'Active', '2023-05-20 11:09:56', '2023-05-20 11:09:56'),
(57, 'Morog Polao with Sami Kebab, Borhani or Soft Drinks', 'No', 'morog-polao-with-sami-kebab-borhani-or-soft-drinks', 'uploads/1684602710maxresdefault (9).jpg', 'nanna-special-additon', NULL, '14.95', 'Active', '2023-05-20 11:11:50', '2023-05-20 11:11:50'),
(58, 'Morog Polao with Borhani or Soft Drinks', 'No', 'morog-polao-with-borhani-or-soft-drinks', 'uploads/1684602783o7bs-hero.jpg', 'nanna-special-additon', NULL, '11.95', 'Active', '2023-05-20 11:13:03', '2023-05-20 11:13:03'),
(59, 'Plain Polao, Chicken Roast, Borhani or Soft Drinks', 'No', 'plain-polao-chicken-roast-borhani-or-soft-drinks', 'uploads/16846028581641469868_1_1_1209530018.png', 'nanna-special-additon', NULL, '11.95', 'Active', '2023-05-20 11:14:18', '2023-05-20 11:14:18'),
(60, 'Beef Tehari with Borhani or Soft Drinks', 'No', 'beef-tehari-with-borhani-or-soft-drinks', 'uploads/1684602959maxresdefault (10).jpg', 'nanna-special-additon', NULL, '12.95', 'Active', '2023-05-20 11:15:59', '2023-05-20 11:15:59'),
(61, 'Beef Tehari with sami Kebab, Borhani or Soft Drinks', 'No', 'beef-tehari-with-sami-kebab-borhani-or-soft-drinks', 'uploads/1684603047Beef-Tehari.jpg', 'nanna-special-additon', NULL, '15.95', 'Active', '2023-05-20 11:17:27', '2023-05-20 11:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `main_titles`
--

CREATE TABLE `main_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_titles`
--

INSERT INTO `main_titles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Main Titlek', '2023-07-29 11:32:24', '2023-07-29 11:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_details`
--

CREATE TABLE `menu_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_slug` varchar(255) DEFAULT NULL,
  `food_slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_06_183216_create_categories_table', 1),
(6, '2023_04_06_183314_create_food_table', 1),
(7, '2023_04_06_183509_create_menus_table', 1),
(8, '2023_04_06_183641_create_extra_items_table', 1),
(9, '2023_04_06_183829_create_clients_table', 1),
(10, '2023_04_06_183858_create_zip_codes_table', 1),
(11, '2023_04_06_183935_create_delivery_addresses_table', 1),
(12, '2023_04_06_184001_create_orders_table', 1),
(13, '2023_04_06_184029_create_order_details_table', 1),
(14, '2023_04_06_184141_create_system_information_table', 1),
(15, '2023_04_06_184306_create_offers_table', 1),
(16, '2023_04_06_184446_create_payments_table', 1),
(17, '2023_04_06_190337_create_menu_details_table', 1),
(18, '2023_07_29_155622_create_main_titles_table', 2),
(19, '2023_07_29_155844_create_sliders_table', 2),
(20, '2023_07_29_160255_create_seos_table', 2),
(21, '2023_07_29_161005_create_services_table', 2),
(22, '2023_07_29_161312_create_about_us_table', 2),
(23, '2023_07_29_161627_create_choose_us_table', 2),
(24, '2023_07_29_161707_create_testimonials_table', 2),
(25, '2023_07_29_161732_create_products_table', 2),
(26, '2023_07_29_161809_create_billings_table', 2),
(27, '2023_07_29_161826_create_shippings_table', 2),
(28, '2023_07_29_161913_create_contacts_table', 2),
(29, '2023_07_29_161941_create_socials_table', 2),
(30, '2023_07_29_162036_create_policies_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_one` varchar(255) DEFAULT NULL,
  `title_two` varchar(255) DEFAULT NULL,
  `offer_type` varchar(255) DEFAULT NULL,
  `offer_amount` varchar(255) DEFAULT NULL,
  `product_id_list` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_d` varchar(255) DEFAULT NULL,
  `delivery_address_id` varchar(255) DEFAULT NULL,
  `person_name` varchar(200) DEFAULT NULL,
  `person_phone` varchar(200) DEFAULT NULL,
  `subtotal` varchar(255) DEFAULT NULL,
  `delivery_charge` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `vat` varchar(255) DEFAULT NULL,
  `grandtotal` varchar(255) DEFAULT NULL,
  `order_status` varchar(255) DEFAULT NULL,
  `suggestion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_d`, `delivery_address_id`, `person_name`, `person_phone`, `subtotal`, `delivery_charge`, `discount`, `vat`, `grandtotal`, `order_status`, `suggestion`, `created_at`, `updated_at`) VALUES
(3, 'NaBUK-43481546', '400', 'k701hsY8SY', '7822212658', '10.95', NULL, NULL, NULL, '10.95', 'Confirmed', 'uyuY9jvBEj', '2023-05-26 12:12:25', '2023-05-26 13:07:25'),
(5, 'NaBUK-13677669', '400', 'p2', '01646735100', '11.95', NULL, NULL, NULL, '11.95', 'Pending', 'fff', '2023-05-26 12:24:17', '2023-05-26 12:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `product_slug` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `subtotal` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_slug`, `qty`, `price`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, '3', '43', '1', '10.95', '10.95', '2023-05-26 12:12:25', '2023-05-26 12:12:25'),
(2, '5', '59', '1', '11.95', '11.95', '2023-05-26 12:24:18', '2023-05-26 12:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `pay_type` varchar(255) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `cvv_number` varchar(255) DEFAULT NULL,
  `name_on_card` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `pay_type`, `card_number`, `cvv_number`, `name_on_card`, `created_at`, `updated_at`) VALUES
(2, '3', 'Online Payment', '117991', '024777', 'jlEdqEsUXu', '2023-05-26 12:12:25', '2023-05-26 12:12:25'),
(3, '4', 'Online Payment', '117991', '024777', 'jlEdqEsUXu', '2023-05-26 12:18:26', '2023-05-26 12:18:26'),
(4, '5', 'Cash On Delivery', NULL, NULL, NULL, '2023-05-26 12:24:18', '2023-05-26 12:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `return_policy` text DEFAULT NULL,
  `privacy_policy` text DEFAULT NULL,
  `term_condition` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `discount_per` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_image_width` varchar(255) DEFAULT NULL,
  `product_image_height` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon_name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `background_color` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon_name`, `title`, `des`, `background_color`, `created_at`, `updated_at`) VALUES
(1, 'ff2', 'fgf2', 'fgfd2', '342344', '2023-07-29 12:17:09', '2023-07-29 12:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_one` varchar(255) DEFAULT NULL,
  `title_two` varchar(255) DEFAULT NULL,
  `button_name` varchar(255) DEFAULT NULL,
  `small_image` varchar(255) DEFAULT NULL,
  `big_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_one`, `title_two`, `button_name`, `small_image`, `big_image`, `created_at`, `updated_at`) VALUES
(1, 'Get All Trendy Furniture In One Store', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat', 'Shop Now', 'public/uploads/1690653493banner-shape1.png', 'public/uploads/1690653494banner2.png', '2023-07-29 11:58:15', '2023-07-29 11:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_information`
--

CREATE TABLE `system_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `charge` varchar(255) DEFAULT NULL,
  `vat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desi` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', '1111111111', 'user@gmail.com', NULL, '$2y$10$O5KbkBEm7PuSbNFS5FrbJOe3rvvvZBAJUA3R8cY/2pWAwl9qciQN.', NULL, '2023-05-20 08:04:59', '2023-05-20 08:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `zip_codes`
--

CREATE TABLE `zip_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zip_codes`
--

INSERT INTO `zip_codes` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, '400', 'a2', '2023-05-20 05:11:36', '2023-05-20 05:11:36'),
(2, '700', 'd4', '2023-05-20 05:11:55', '2023-05-20 05:11:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose_us`
--
ALTER TABLE `choose_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_items`
--
ALTER TABLE `extra_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_titles`
--
ALTER TABLE `main_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_details`
--
ALTER TABLE `menu_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_information`
--
ALTER TABLE `system_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zip_codes`
--
ALTER TABLE `zip_codes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `choose_us`
--
ALTER TABLE `choose_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `extra_items`
--
ALTER TABLE `extra_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `main_titles`
--
ALTER TABLE `main_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_details`
--
ALTER TABLE `menu_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_information`
--
ALTER TABLE `system_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zip_codes`
--
ALTER TABLE `zip_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
