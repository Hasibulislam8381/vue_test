-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2024 at 12:08 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baganbari_feature`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `photo`, `alt_text`, `title`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703131148/newFolder/banner/kx090g5osncmvsbmkemd.jpg', 'Banner1', 'Welcome', 'draft', '2023-12-30 11:02:38', '2023-09-24 07:06:36', '2023-12-30 11:02:38'),
(3, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703914140/newFolder/banner/vdlbqcnqtetghihgkszb.jpg', 'Landscaping', 'EXPLORE', 'publish', NULL, '2023-09-24 07:13:53', '2024-01-03 10:39:22'),
(4, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704358947/newFolder/banner/wjwqlqvdguovlxxidc8e.jpg', 'Landscape consultancy', 'EXPLORE', 'publish', NULL, '2023-09-24 22:39:49', '2024-01-04 14:02:29'),
(5, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704260416/newFolder/banner/pkidom0vhjcu4l9usqcj.jpg', 'Landscape Design', 'Explore', 'publish', NULL, '2023-10-07 07:01:06', '2024-01-03 10:40:20'),
(6, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704260542/newFolder/banner/ppysvrkymjwfeutoxvpl.jpg', 'Commercial Landscape', 'Explore', 'publish', NULL, '2023-10-07 07:01:25', '2024-01-03 10:42:24'),
(7, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704261199/newFolder/banner/f2gppubu336difdmhn2j.jpg', 'residential landscape', 'Explore', 'publish', NULL, '2023-10-17 06:34:56', '2024-01-03 10:53:21'),
(8, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704261497/newFolder/banner/gtqstmbecqpfa0hbbrzv.jpg', 'Vertical garden', 'Explore', 'publish', NULL, '2023-11-26 16:13:22', '2024-01-03 10:58:20'),
(9, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704261682/newFolder/banner/ffzfrct6qkivawifjdi8.jpg', 'rooftop Garden', 'EXPLORE', 'publish', NULL, '2023-12-14 14:44:53', '2024-01-03 11:01:25'),
(10, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704261857/newFolder/banner/oikyap8bfimfatrscoed.jpg', 'Hardscaping', 'Explore', 'publish', NULL, '2023-12-18 14:24:52', '2024-01-03 11:04:19'),
(12, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704268353/newFolder/banner/t96e3c4s5qk7ydw4ileu.jpg', 'Garden maintainance', 'Explore', 'publish', NULL, '2023-12-21 09:06:13', '2024-01-03 12:52:35'),
(13, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704262917/newFolder/banner/odscjgisiaqvtlph5zpi.jpg', 'Lighting', 'Explore', 'publish', NULL, '2023-12-21 09:07:00', '2024-01-03 11:22:00'),
(15, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704263177/newFolder/banner/ouanagj7wvgbzetgyu8a.jpg', 'water Fountain', 'Explore', 'publish', NULL, '2023-12-24 12:23:42', '2024-01-03 11:26:19'),
(16, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704263920/newFolder/banner/oydr23wmous96dn6qilu.jpg', 'Swimming pool', 'Explore', 'publish', NULL, '2023-12-24 16:47:44', '2024-01-03 11:38:43'),
(17, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704264108/newFolder/banner/igvskarcne2bgrdi6vnj.jpg', 'Drip irrigation', 'Explore', 'publish', NULL, '2024-01-03 11:41:51', '2024-01-03 11:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auther` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `m_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_description` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `photo`, `auther`, `meta_photo`, `alt_text`, `date`, `description`, `m_title`, `m_keyword`, `m_description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Baganbari Landscaping', 'baganbari-landscaping', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700977035/newFolder/blog/qhg7hrqtsxdy7sv3nnbq.jpg', 'Baganbari', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700981713/newFolder/blog/d9nfbzkvxrne0m14gaor.jpg', 'Photo', '2023-11-15', '<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti. Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu. Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>', 'uiluui', 'luiluil', 'luiluil', 'publish', NULL, NULL, '2023-11-26 00:55:11'),
(2, 'Baganbari Furnished', 'baganbari-furnished', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700977173/newFolder/blog/jtv4ckgcoljddl0yjwue.jpg', 'Alia', NULL, 'vsdvs', '2023-11-10', '<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti.</p>\r\n\r\n<p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>\r\n\r\n<p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>', NULL, NULL, NULL, 'publish', NULL, '2023-11-25 23:39:32', '2023-11-25 23:39:32'),
(3, 'Residential Landscapr', 'residential-landscapr', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700978450/newFolder/blog/xq4h7aylcpz3hb9aulvy.jpg', 'Imran', NULL, NULL, '2023-11-02', '<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti.</p>\r\n\r\n<p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>\r\n\r\n<p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>', NULL, NULL, NULL, 'publish', NULL, '2023-11-26 00:00:48', '2023-11-26 00:00:48'),
(4, 'Khan Villa', 'khan-villa', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700978821/newFolder/blog/qwdikprxyjfhpbm9xgcz.jpg', 'Khan Villa', NULL, 'icon1', '2023-11-09', '<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti.</p>\r\n\r\n<p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>\r\n\r\n<p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>', NULL, NULL, NULL, 'publish', NULL, '2023-11-26 00:07:00', '2023-11-26 00:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `board_of_directors`
--

CREATE TABLE `board_of_directors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `meta_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_description` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `board_of_directors`
--

INSERT INTO `board_of_directors` (`id`, `name`, `designation`, `photo`, `alt_text`, `facebook`, `linkedin`, `twitter`, `whatsapp`, `description`, `meta_photo`, `m_title`, `m_keyword`, `m_description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Alisa Heily', 'Founder', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696492856/newFolder/team/ztshskn7irkddc6mssor.png', 'icon1', 'https://www.facebook.com/', 'https://www.linkedin.com/authwall?trk=qf&original_referer=https://www.google.com/&sessionRedirect=https%3A%2F%2Fbd.linkedin.com%2F', 'https://twitter.com/', 'You whatsapp Link', '<p>Prominent Banker Mr. Hasan Rahman Has Been Serving As Additional Managing Director Of Capitec Since October 2018. Before Assuming That Role, He Attended The Same Organization As A Deputy Managing Director. Mr. Ferdous, A Veteran Of Capitec Who Joined The Services Of The Company As A Probationary Officer In 1984, Has Held Different Banking Positions In The Arena Of General Banking, Foreign Exchange, Credit Administration And Etc Including 22 Years Of Managerial Responsibilities. Prominent Banker Mr. Hasan Rahman Has Been Serving As Additional Managing Director Of Capitec Since October 2018. Before Assuming That Role, He Attended The Same Organization As A Deputy Managing Director. Mr. Ferdous, A Veteran Of Capitec Who Joined The Services Of The Company As A Probationary Officer In 1984, Has Held Different Banking Positions In The Arena Of General Banking, Foreign Exchange, Credit Administration And Etc Including 22 Years Of Managerial Responsibilities. Prominent Banker Mr. Hasan Rahman Has Been Serving As Additional Managing Director Of Capitec Since October 2018. Before Assuming That Role, He Attended The Same Organization As A Deputy Managing Director. Mr. Ferdous, A Veteran Of Capitec Who Joined The Services Of The Company As A Probationary Officer In 1984, Has Held Different Banking Positions In The Arena Of General Banking, Foreign Exchange, Credit Administration And Different Banking Positions In The Arena Of General Banking, Foreign Exchange, Credit Administration And Etc Including 22 Years Of Managerial Responsibilities. Prominent Banker Mr. Hasan Rahman Has Been Serving As Additional Managing Director Of Capitec Since October 2018. Before Assuming That Role, He Attended The Same Organization As A Deputy Managing Director. Mr. Deputy Managing Director. Mr. Ferdous, A Veteran Of Capitec Who Joined The Services Of The Company A</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696487920/newFolder/property/dawkopugefqirunmg2iq.png', 'Board of Director', 'Board of Director', 'Board of Director', 'publish', NULL, '2023-10-05 00:38:43', '2023-10-05 02:09:30'),
(2, 'Rayna  Islam', 'Cheif Designer', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696488031/newFolder/team/wlmmual8bmpbcay46iwy.png', 'icon2', 'https://www.facebook.com/', 'https://www.linkedin.com/authwall?trk=qf&original_referer=https://www.google.com/&sessionRedirect=https%3A%2F%2Fbd.linkedin.com%2F', 'https://twitter.com/', 'You whatsapp Link', '<p>Prominent Banker Mr. Hasan Rahman Has Been Serving As Additional Managing Director Of Capitec Since October 2018. Before Assuming That Role, He Attended The Same Organization As A Deputy Managing Director. Mr. Ferdous, A Veteran Of Capitec Who Joined The Services Of The Company As A Probationary Officer In 1984, Has Held Different Banking Positions In The Arena Of General Banking, Foreign Exchange, Credit Administration And Etc Including 22 Years Of Managerial Responsibilities. Prominent Banker Mr. Hasan Rahman Has Been Serving As Additional Managing Director Of Capitec Since October 2018. Before Assuming That Role, He Attended The Same Organization As A Deputy Managing Director. Mr. Ferdous, A Veteran Of Capitec Who Joined The Services Of The Company As A Probationary Officer In 1984, Has Held Different Banking Positions In The Arena Of General Banking, Foreign Exchange, Credit Administration And Etc Including 22 Years Of Managerial Responsibilities. Prominent Banker Mr. Hasan Rahman Has Been Serving As Additional Managing Director Of Capitec Since October 2018. Before Assuming That Role, He Attended The Same Organization As A Deputy Managing Director. Mr. Ferdous, A Veteran Of Capitec Who Joined The Services Of The Company As A Probationary Officer In 1984, Has Held Different Banking Positions In The Arena Of General Banking, Foreign Exchange, Credit Administration And Different Banking Positions In The Arena Of General Banking, Foreign Exchange, Credit Administration And Etc Including 22 Years Of Managerial Responsibilities. Prominent Banker Mr. Hasan Rahman Has Been Serving As Additional Managing Director Of Capitec Since October 2018. Before Assuming That Role, He Attended The Same Organization As A Deputy Managing Director. Mr. Deputy Managing Director. Mr. Ferdous, A Veteran Of Capitec Who Joined The Services Of The Company A</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696488028/newFolder/property/owkjt0pvhk0ec0zkpccy.png', 'Director', 'Adipisicing est vol', 'fsdfsdf', 'publish', NULL, '2023-10-05 00:40:32', '2023-11-05 03:51:16'),
(3, 'Ayshu Khan', 'Cheif Designer', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696488093/newFolder/team/zuz1ecnmxvhgjxeodz0y.png', 'icon2', 'https://www.facebook.com/', 'https://www.linkedin.com/authwall?trk=qf&original_referer=https://www.google.com/&sessionRedirect=https%3A%2F%2Fbd.linkedin.com%2F', 'https://twitter.com/', 'You whatsapp Link', '<p>Prominent Banker Mr. Hasan Rahman Has Been Serving As Additional Managing Director Of Capitec Since October 2018. Before Assuming That Role, He Attended The Same Organization As A Deputy Managing Director. Mr. Ferdous, A Veteran Of Capitec Who Joined The Services Of The Company As A Probationary Officer In 1984, Has Held Different Banking Positions In The Arena Of General Banking, Foreign Exchange, Credit Administration And Etc Including 22 Years Of Managerial Responsibilities. Prominent Banker Mr. Hasan Rahman Has Been Serving As Additional Managing Director Of Capitec Since October 2018. Before Assuming That Role, He Attended The Same Organization As A Deputy Managing Director. Mr. Ferdous, A Veteran Of Capitec Who Joined The Services Of The Company As A Probationary Officer In 1984, Has Held Different Banking Positions In The Arena Of General Banking, Foreign Exchange, Credit Administration And Etc Including 22 Years Of Managerial Responsibilities. Prominent Banker Mr. Hasan Rahman Has Been Serving As Additional Managing Director Of Capitec Since October 2018. Before Assuming That Role, He Attended The Same Organization As A Deputy Managing Director. Mr. Ferdous, A Veteran Of Capitec Who Joined The Services Of The Company As A Probationary Officer In 1984, Has Held Different Banking Positions In The Arena Of General Banking, Foreign Exchange, Credit Administration And Different Banking Positions In The Arena Of General Banking, Foreign Exchange, Credit Administration And Etc Including 22 Years Of Managerial Responsibilities. Prominent Banker Mr. Hasan Rahman Has Been Serving As Additional Managing Director Of Capitec Since October 2018. Before Assuming That Role, He Attended The Same Organization As A Deputy Managing Director. Mr. Deputy Managing Director. Mr. Ferdous, A Veteran Of Capitec Who Joined The Services Of The Company A</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696488090/newFolder/property/xivcz2pgcmfhyhwdr43g.png', 'Quas ea rerum dolore', 'Odit reprehenderit s', 'ffsd', 'publish', NULL, '2023-10-05 00:41:33', '2023-10-05 00:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bradcamp` text COLLATE utf8mb4_unicode_ci,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `m_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_description` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `slug`, `photo`, `bradcamp`, `alt_text`, `meta_photo`, `description`, `job_type`, `salary`, `location`, `deadline`, `m_title`, `m_keyword`, `m_description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Senior Developer', 'senior-developer', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696653668/newFolder/career/y5nbqje4nsxut2gesdxe.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703760908/newFolder/career/wmf6coewxqykqpyoiemf.png', 'icon1', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696653670/newFolder/career/sd7x36wnk0qhwnrwaahu.jpg', '<p>fefe</p>', 'Senior Developer', '18000', 'Baridhara', '2023-10-12', 'Eligendi ullam labor', 'Adipisicing est vol', '<p>fwefew</p>', 'publish', NULL, '2023-10-06 22:41:11', '2023-12-28 04:55:06'),
(2, 'Junior Software Engineer', 'junior-software-engineer', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697284771/newFolder/career/d0kvyvu0ywvkgcjvccpf.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703572126/newFolder/career/oh4lmmpia3qoxe7vucsd.jpg', 'Banner1', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697284639/newFolder/career/lh6k1qar4oen26v1q0hy.png', '<p>fffffffffffffffffffffffffffffffffffffffffffffsfsdf</p>', 'Full Time', '18000', 'Fugiat dolor sed im', '2023-10-06', NULL, NULL, NULL, 'publish', NULL, '2023-10-14 05:57:21', '2023-12-26 00:28:44'),
(3, 'Software Engineer', 'software-engineer', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697285128/newFolder/career/fqev4bbeh6l3ykymwz4z.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703572139/newFolder/career/tgjuyaobihsxuprr2act.jpg', 'icon1', NULL, '<p>dsafsdfsdf</p>', 'Full Time', '22000', 'Baridhara', '2023-10-12', NULL, NULL, NULL, 'publish', NULL, '2023-10-14 06:05:28', '2023-12-26 00:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `property_type`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Completed Project', NULL, 'publish', NULL, '2023-09-30 02:39:31', '2023-09-30 03:21:40'),
(3, 'Ongoing Project', NULL, 'publish', NULL, '2023-09-30 02:40:26', '2023-11-21 02:47:20'),
(4, 'Upcoming Project', NULL, 'publish', NULL, '2023-09-30 02:40:38', '2023-11-21 02:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci,
  `b_photo` longtext COLLATE utf8mb4_unicode_ci,
  `quote_image` text COLLATE utf8mb4_unicode_ci,
  `contact_image` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `title`, `map`, `b_photo`, `quote_image`, `contact_image`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Contact With Us Now', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704106993/newFolder/conatct/pljl9w34hdlu4afarux2.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699426851/newFolder/contact/gsxtpayhuolfnv2l6m5q.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699426856/newFolder/contact/w4mfbrkdkmprlv4pwodn.jpg', 'Get a free estimate for your garden', 'publish', NULL, NULL, '2024-01-01 16:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `dream_with_us`
--

CREATE TABLE `dream_with_us` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dream_with_us`
--

INSERT INTO `dream_with_us` (`id`, `title`, `slug`, `description`, `add_description`, `name`, `address`, `photo`, `alt_text`, `video`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'DREAM WITH US,PARTNER WITH US', 'dream-with-us', '<p>Relax and reap the benefits of owning property in Bangladesh. See your property transform as per your dreams, sooner than you anticipated!</p>', '<p>One of our goals is to be a partner in the country&#39;s environment-friendly development through sustainable greening with the aim of gifting a green world to the next generation.</p>', 'Giasuddin Akash', 'MD, BaganBari Ltd', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1695556935/newFolder/dreamWithUs/qdwmvjyknkd3lhidoxyx.png', 'icon1', 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'draft', '2023-09-25 03:45:10', '2023-09-24 04:08:27', '2023-09-25 03:45:10'),
(6, 'DREAM WITH US, PARTNER WITH US', 'dream-with-us-partner-with-us', '<p>Relax and reap the benefits of owning property in Bangladesh. See your property transform as per your dreams, sooner than you anticipated!&nbsp;</p>', '<p>One of our goals is to be a partner in the country&#39;s environment-friendly development through sustainable greening with the aim of gifting a green world to the next generation.&nbsp;</p>', 'Giasuddin Akash', 'MD, BaganBari Ltd.', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697366370/newFolder/dreamWithUs/kuvhnqkzfk7othdiabfo.jpg', 'icon1', 'https://www.youtube.com/watch?v=URyXVWnmBI8', 'publish', NULL, '2023-09-25 05:22:59', '2023-11-26 16:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint UNSIGNED NOT NULL,
  `property_id` bigint UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `property_id`, `photo`, `alt_text`, `title`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 20, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700555886/newFolder/property/pycocowsm7dkn8zr4b9a.png', 'Cupiditate consequat', 'Features Landscape gerwger', 'Alias Asperiores Aut', 'publish', NULL, '2023-10-01 04:02:44', '2023-11-21 02:38:24'),
(6, 20, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696666788/newFolder/property/exli4nruu3mdh4mcdeit.png', 'Cupiditate consequat fwefwe 12', 'Features Landscape ? fefe', 'Alias Asperiores Aut fefwe', 'publish', '2023-11-21 01:00:52', '2023-10-07 02:19:56', '2023-11-21 01:00:52'),
(7, 20, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696666792/newFolder/property/v28gcf6hcdbg6qbugc2p.png', 'Baganbari', 'Baganbari', 'Baganbari', 'publish', NULL, '2023-10-07 02:19:56', '2023-11-21 02:38:53'),
(8, 20, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696666796/newFolder/property/uhutbdjnsibpmcd9c6hc.png', 'Cupiditate consequat', 'Features Landscape', 'Alias Asperiores Aut', 'publish', '2023-11-21 01:00:02', '2023-10-07 02:19:56', '2023-11-21 01:00:02'),
(9, 21, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700542543/newFolder/property/lfnhvcz1aplagftpjpau.png', 'ewfwefwe', 'Consequatur Minus qefwwefwe', 'fwefewfwe', 'publish', NULL, '2023-11-20 22:55:42', '2023-11-20 22:55:42'),
(10, 20, NULL, 'Cupiditate consequat', 'Features Landscape', 'Alias Asperiores Aut', 'publish', '2023-11-21 00:59:40', '2023-11-21 00:17:39', '2023-11-21 00:59:40'),
(11, 20, NULL, 'Cupiditate consequat gerger', 'In dolor eu et quis  gfergerg', 'Alias Asperiores Aut  ergerger', 'publish', '2023-11-21 00:59:40', '2023-11-21 00:17:39', '2023-11-21 00:59:40'),
(12, 20, NULL, 'Officiis sit molesti', 'Omnis aute quas perf', 'Alias Asperiores Aut', 'publish', '2023-11-21 00:59:40', '2023-11-21 00:17:40', '2023-11-21 00:59:40'),
(13, 20, NULL, 'rfsdf', 'fsdfsd', 'fsdfds', 'publish', '2023-11-21 02:28:21', '2023-11-21 02:27:42', '2023-11-21 02:28:21'),
(14, 20, NULL, 'wefwefwe htrhtr', 'hrthrt', 'hrthrt', 'publish', '2023-11-21 02:28:21', '2023-11-21 02:28:12', '2023-11-21 02:28:21'),
(15, 20, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700555969/newFolder/property/oaf4scwr6btkwzyllpyh.png', '3rd feature', '3rd feature', '3rd feature', 'publish', '2023-11-21 02:39:40', '2023-11-21 02:39:26', '2023-11-21 02:39:40'),
(16, 20, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700556018/newFolder/property/ne0ei5ntuw0tpna9vfup.png', '3rd feature', '3rd feature', '3rd feature', 'publish', '2023-12-20 16:14:43', '2023-11-21 02:40:15', '2023-12-20 16:14:43'),
(17, 14, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700556096/newFolder/property/azbq8zoehoxmvj6ev76k.png', 'Feature 1', 'Feature 1', 'Feature 1', 'publish', NULL, '2023-11-21 02:41:33', '2023-11-21 02:41:35'),
(18, 14, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700556098/newFolder/property/mzs96qxsqizgi83sinc7.png', 'feature 2', 'feature 2', 'feature 2', 'publish', NULL, '2023-11-21 02:41:35', '2023-11-21 02:41:37'),
(19, 13, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700556179/newFolder/property/iiielsev9hectfaedxts.png', '1st Feature', '1st Feature', '1st Feature', 'publish', NULL, '2023-11-21 02:42:56', '2023-11-21 02:42:58'),
(20, 6, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703068715/newFolder/property/rmocde7fgit2lphkumb4.png', 'fwefwe', 'fewfew', 'fwefwefewf', 'publish', '2023-12-20 16:14:57', '2023-12-20 15:38:34', '2023-12-20 16:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `general_infos`
--

CREATE TABLE `general_infos` (
  `id` bigint UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bradcrum_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_d_bradcrumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_des` longtext COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_of_exp_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_exp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `happy_client_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `happy_client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `corporate_client_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `corporate_client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projects_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projects` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_pixel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_messenger` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_infos`
--

INSERT INTO `general_infos` (`id`, `site_name`, `email`, `phone`, `logo`, `favicon_logo`, `footer_logo`, `bradcrum_photo`, `p_d_bradcrumb`, `footer_des`, `facebook`, `twitter`, `instagram`, `linkedin`, `whatsapp`, `youtube`, `year_of_exp_title`, `year_of_exp`, `happy_client_title`, `happy_client`, `corporate_client_title`, `corporate_client`, `projects_title`, `projects`, `google_tag`, `facebook_pixel`, `facebook_messenger`, `address`, `copyright_text`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'BaganBari LTD', 'hellobaganbari@gmail.com', '+8801611759515', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703151129/newFolder/general_info/nkwoqjqe63gjpnzzzdej.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696763487/newFolder/general_info/d7prq6y04pd7c1hhmtis.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700482893/newFolder/general_info/dmsk08ekz6vr0kxbphnx.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704107583/newFolder/general_info/ozdsampwgxzpt0kju6mj.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704107561/newFolder/general_info/n3avzluywvczsyo216zy.png', NULL, 'https://www.facebook.com/baganbariltd', 'https://twitter.com/BaganbariLTD', 'https://www.instagram.com/baganbarii', 'https://www.linkedin.com/company/bagan-bari-ltd', '+8801611759515', 'https://www.youtube.com/@Bagan-bari', 'Year Of Experience', '08', 'Our Happy Client', '350', 'Our Corporate Client', '400', 'Our Total Projects', '2250', '<p>googel tags</p>', '<p>facebook pixel</p>', '<p>update facebook messenger</p>', 'House-11, Road-04,\r\n\r\nBanani DOHS, Dhaka-1213', 'COPYRIGHT 2023| CAPITEC ASSET MANAGEMENT LIMITED', NULL, '2023-08-03 06:52:49', '2024-01-01 16:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `latest_services`
--

CREATE TABLE `latest_services` (
  `id` bigint UNSIGNED NOT NULL,
  `services_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latest_services`
--

INSERT INTO `latest_services` (`id`, `services_id`, `photo`, `alt_text`, `title`, `slug`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704345589/newFolder/services/flpmrg9a7srvc8rzl3qd.jpg', 'Banner1', 'Roof Landscape', 'roof-landscape', '<p>Assure Interior Solutions Can Incorporate Branding Elements Within Commercial Spaces To Reinforce Brand Identity.</p>', 'publish', NULL, '2023-10-12 05:03:22', '2024-01-04 10:19:50'),
(2, '2', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697367513/newFolder/services/mfnw3cr9opd89qkzic7v.jpg', 'icon1', 'Roof Landscape', 'roof-landscape', '<p>Assure Interior Solutions Can Incorporate Branding Elements Within Commercial Spaces To Reinforce Brand Identity.</p>', 'publish', NULL, '2023-10-12 05:04:00', '2023-10-15 04:58:32'),
(3, '3', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697367527/newFolder/services/jsk5xkrpgr030l3glfyu.jpg', 'Banner1', 'Commercial Landsscape', 'commercial-landsscape', '<p>Assure Interior Solutions Can Incorporate Branding Elements Within Commercial Spaces To Reinforce Brand Identity.</p>', 'publish', NULL, '2023-10-12 05:05:13', '2023-10-15 04:58:46'),
(4, '8', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704346616/newFolder/services/jyojs9nupklmpuvy7mnb.jpg', 'Banner1', 'maintenance service', 'furnished-apartment-rent-in-dhaka', '<p>frfsdfsdf</p>', 'publish', NULL, '2023-10-14 04:15:54', '2024-01-04 10:36:57'),
(5, '7', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704345884/newFolder/services/qnxaqz64y1w4ibfy9sp1.jpg', 'dscds', 'Halim garden', 'halim-garden', '<p>hfoewofiewf ijewidjpewod enmoewidc</p>', 'publish', NULL, '2024-01-04 10:24:45', '2024-01-04 10:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `leaf_controllers`
--

CREATE TABLE `leaf_controllers` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` longtext COLLATE utf8mb4_unicode_ci,
  `section_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `photo`, `section_name`, `alt_text`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700972630/newFolder/leaf/jeubf88kscxl2edrodbj.png', 'why_baganbari', 'Leaf', 'publish', NULL, NULL, '2023-11-25 22:23:47'),
(2, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699937049/newFolder/leaf/xyemfzlljos7cwyim6ue.png', 'dream_with_us', 'dream Photo', 'publish', NULL, NULL, '2023-11-13 22:44:09'),
(3, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699880744/newFolder/leaf/ltp0gsobi261vgxmwjfd.png', 'our_service_home', 'our service Home', 'publish', NULL, NULL, '2023-11-13 07:05:44'),
(4, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699880968/newFolder/leaf/zezhbx8r29wyz1kxl7wn.png', 'contact_us_home', 'contact_us_home', 'publish', NULL, NULL, '2023-11-13 07:09:27'),
(5, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699937193/newFolder/leaf/dyt0txvxywgjqus9lwpt.png', 'footer_image', 'footer Image', 'publish', NULL, NULL, '2023-11-13 22:46:32'),
(6, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699938036/newFolder/leaf/cyh8ljh2arlcpqgixish.png', 'landscape_design', 'landscape_design', 'publish', NULL, NULL, '2023-11-13 23:00:36'),
(7, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699938938/newFolder/leaf/ocoe49jvoqwxolxzv1nj.png', 'step_of_work', 'step_of_work', 'publish', NULL, NULL, '2023-11-13 23:15:38'),
(8, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699939123/newFolder/leaf/qlnt4jd4ox29roomgzuj.png', 'importants_of_landscape', 'importants_of_landscape', 'publish', NULL, NULL, '2023-11-13 23:18:42'),
(9, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699939848/newFolder/leaf/zhtkidsaqpiiscgiehtl.png', 'specification', 'specification', 'publish', NULL, NULL, '2023-11-13 23:30:47'),
(10, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699941354/newFolder/leaf/moxnetrmo5ovlbrblo4n.png', 'our_story_background', 'our_story_background', 'publish', NULL, NULL, '2023-11-13 23:55:53'),
(11, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699944694/newFolder/leaf/beajtlkeofmdqqyeizit.png', 'bradecamp_leaf_one', 'bradecamp_leaf_one', 'publish', NULL, NULL, '2023-11-14 00:51:33'),
(12, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699944746/newFolder/leaf/nrdhhsvp6yiq2pdaiy6c.png', 'bradecamp_leaf_two', 'bradecamp_leaf_two', 'publish', NULL, NULL, '2023-11-14 00:52:25'),
(13, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699957598/newFolder/leaf/itzhsz2mnfl9neotyzjb.png', 'completed_project', 'completed_project', 'publish', NULL, NULL, '2023-11-14 04:26:37'),
(14, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699957162/newFolder/leaf/dxreesnxkir5c49vnly0.png', 'ongoing_project', 'ongoing_project', 'publish', NULL, NULL, '2023-11-14 04:19:21'),
(15, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700973097/newFolder/leaf/xnadv9nowvnoarqpksng.png', 'upcoming_project', 'upcoming_project', 'publish', NULL, NULL, '2023-11-25 22:31:34'),
(16, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700973082/newFolder/leaf/qtyal3opjyxclybafhca.png', 'work_process1', 'work_process1', 'publish', NULL, NULL, '2023-11-25 22:31:19'),
(17, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700973129/newFolder/leaf/zsiipuvcpqocjemsf8fq.png', 'work_process2', 'work_process2', 'publish', NULL, NULL, '2023-11-25 22:32:06'),
(18, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700973129/newFolder/leaf/zsiipuvcpqocjemsf8fq.png', 'mission_vision_inside', 'mission_vision_inside', 'publish', NULL, NULL, NULL),
(19, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700973129/newFolder/leaf/zsiipuvcpqocjemsf8fq.png', 'package_details', 'package_details', 'publish', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `slug`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Banani', 'banani', 'draft', NULL, NULL, '2023-12-26 02:59:14'),
(2, 'Gulshan', 'gulshan', 'publish', NULL, '2023-10-03 07:56:30', '2023-10-03 07:56:30'),
(3, 'Uttara', 'uttara', 'publish', NULL, '2023-10-03 07:57:13', '2023-10-03 08:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

CREATE TABLE `metas` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bradcamp` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `custom_header` longtext COLLATE utf8mb4_unicode_ci,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metas`
--

INSERT INTO `metas` (`id`, `title`, `bradcamp`, `description`, `custom_header`, `keyword`, `page_name`, `meta_photo`, `created_at`, `updated_at`) VALUES
(1, 'home page', NULL, 'This is the home page', NULL, NULL, 'home', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699172725/newFolder/meta/hce472c8ja5opfhyijdy.png', NULL, '2023-11-05 02:25:22'),
(2, 'Our story', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703761971/newFolder/meta/qvfmwmxbhtcjfa9w7jzg.png', 'This is our story page', NULL, 'Our Story', 'Our Story', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699172725/newFolder/meta/hce472c8ja5opfhyijdy.png', NULL, '2023-12-28 05:12:48'),
(3, 'Mission and Vision', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703764371/newFolder/meta/v5uyyxjduwg6wgvgcr2s.png', 'Mission and Vision', NULL, 'Mission Vision', 'Mission and Vision', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699172725/newFolder/meta/hce472c8ja5opfhyijdy.png', NULL, '2023-12-28 05:52:48'),
(4, 'Board of Director', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703764548/newFolder/meta/upjs6xpuqfkfqpqynsor.png', 'Board of Director', NULL, 'Board of Director', 'Board of Director', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699172725/newFolder/meta/hce472c8ja5opfhyijdy.png', NULL, '2023-12-28 05:55:45'),
(5, 'Our Client', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703765011/newFolder/meta/kvnuwbgkm7k7j4nqmyii.png', 'Our Client', NULL, 'Our Client', 'Our Client', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699172725/newFolder/meta/hce472c8ja5opfhyijdy.png', NULL, '2023-12-28 06:03:28'),
(6, 'Our Portfolio', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704362253/newFolder/meta/krdh70vfhnxlf2goro9f.jpg', 'Our Portfolio', NULL, 'Our Portfolio', 'Our Portfolio', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699172725/newFolder/meta/hce472c8ja5opfhyijdy.png', NULL, '2024-01-04 14:57:37'),
(7, 'Packages', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704350199/newFolder/meta/x4omn5mwymyodp7vjkdn.jpg', 'Packages', 'Packages', 'Packages', 'Packages', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699172725/newFolder/meta/hce472c8ja5opfhyijdy.png', NULL, '2024-01-04 11:36:40'),
(8, 'Contact Us', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703760416/newFolder/meta/gtqfn5k8meyazqziza40.png', 'Contact Us', 'Contact Us', 'Contact Us', 'Contact Us', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699172725/newFolder/meta/hce472c8ja5opfhyijdy.png', NULL, '2023-12-28 04:46:53'),
(9, 'Get Free Quote', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704796038/newFolder/meta/g5azmhdnlhbrbpv2q9v2.png', 'Get Free Quote', 'Get Free Quote', 'Get Free Quote', 'Get Free Quote', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699172725/newFolder/meta/hce472c8ja5opfhyijdy.png', NULL, '2024-01-09 04:27:18'),
(10, 'Videos', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703760633/newFolder/meta/awuwhk045xsgjo6aggbo.png', 'Videos', 'Videos', 'Videos', 'Videos', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699172725/newFolder/meta/hce472c8ja5opfhyijdy.png', NULL, '2023-12-28 04:50:30'),
(11, 'Career', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703760789/newFolder/meta/iqf5rdrajgxqk8mdivxz.png', 'Career', 'Career', 'Career', 'Career', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699172725/newFolder/meta/hce472c8ja5opfhyijdy.png', NULL, '2023-12-28 04:53:07'),
(12, 'Privacy Policy', NULL, 'Privacy Policy', 'Privacy Policy', 'Privacy Policy', 'Privacy Policy', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699172725/newFolder/meta/hce472c8ja5opfhyijdy.png', NULL, NULL),
(13, 'Gallery', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703760712/newFolder/meta/usymjqdga3avhdibuooj.png', 'Gallery', 'Gallery', 'Gallery', 'Gallery', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1699172725/newFolder/meta/hce472c8ja5opfhyijdy.png', NULL, '2023-12-28 04:51:49'),
(14, 'This is blog', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703570988/newFolder/meta/ae82baao7gzcrlq5kaxw.jpg', 'This is blog', 'This is blog', 'This is blog', 'blog', NULL, NULL, '2023-12-26 00:09:46'),
(15, 'All Services', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703569726/newFolder/meta/xa0jgcvjohhyjrfzp4yi.jpg', 'All services page', 'All services page', 'All services page', 'All Services', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_08_20_100522_create_blogs_table', 1),
(8, '2023_08_31_063501_create_section_contents_table', 1),
(9, '2023_08_31_105407_create_faqs_table', 1),
(10, '2023_09_02_090327_create_metas_table', 1),
(12, '2023_08_10_061448_create_general_infos_table', 2),
(13, '2023_09_24_075151_create_dream_with_us_table', 3),
(14, '2023_09_03_051220_create_banners_table', 4),
(15, '2023_09_25_080005_create_why_baganbaris_table', 5),
(16, '2023_09_27_050431_create_subscribers_table', 6),
(17, '2023_09_27_112149_create_our_stories_table', 7),
(19, '2023_09_30_081923_create_categories_table', 8),
(22, '2023_09_30_093426_create_requirement_types_table', 10),
(24, '2023_09_30_070141_create_properties_table', 11),
(25, '2023_10_01_094116_create_features_table', 12),
(26, '2023_10_02_091017_create_packages_table', 13),
(27, '2023_10_03_085345_create_request_messages_table', 14),
(28, '2023_10_03_133741_create_locations_table', 15),
(29, '2023_10_04_073512_create_mission_visions_table', 16),
(31, '2023_10_05_060602_create_board_of_directors_table', 17),
(32, '2023_10_05_084833_create_our_clients_table', 18),
(34, '2023_10_05_104148_create_services_table', 19),
(35, '2023_09_02_044412_create_careers_table', 20),
(36, '2023_09_05_050221_create_photo_galleries_table', 21),
(37, '2023_09_11_043342_create_video_galleries_table', 22),
(38, '2023_07_31_051146_create_terms_table', 23),
(39, '2023_07_29_060133_create_partners_table', 24),
(40, '2023_10_12_084255_create_latest_services_table', 25),
(41, '2023_11_08_054322_create_contact_us_table', 26),
(42, '2023_11_11_050412_create_leaves_table', 27),
(43, '2023_11_11_050247_create_leaf_controllers_table', 28),
(44, '2023_12_17_123734_create_packages_details_table', 28),
(45, '2023_12_26_081306_create_package_types_table', 29),
(46, '2023_12_27_080825_create_package_categories_table', 30);

-- --------------------------------------------------------

--
-- Table structure for table `mission_visions`
--

CREATE TABLE `mission_visions` (
  `id` bigint UNSIGNED NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci,
  `mission_icon` text COLLATE utf8mb4_unicode_ci,
  `mission_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci,
  `vision_icon` text COLLATE utf8mb4_unicode_ci,
  `vision_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `values` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `values_icon` text COLLATE utf8mb4_unicode_ci,
  `values_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_visions`
--

INSERT INTO `mission_visions` (`id`, `mission`, `mission_icon`, `mission_photo`, `vision`, `vision_icon`, `vision_photo`, `values`, `values_icon`, `values_photo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '<p>Our mission is to cultivate sustainable and picturesque landscapes that are in harmony with the natural environment. We are committed to providing high-quality, eco-friendly goods and services that enhance the beauty of outdoor spaces while conserving the health of the soil. We strive to make a long-term influence on our community and contribute to a greener, more vibrant planet through creative and responsible farming practices.</p>', 'fa fa-meetup', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702547338/newFolder/ourStory/lzxtkuofl1rd7kxpngsd.png', '<p>As a pioneer in the landscape farming industry, we are known for our dedication to environmental stewardship and the creation of breathtaking, long-lasting landscapes.&quot; Our mission is to inspire and educate people about the necessity of living in harmony with the environment, cultivating a profound appreciation for the natural beauty that surrounds us. As we expand, we hope to be a positive change agent, supporting a sustainable future in which people and the earth coexist.</p>', 'fa fa-meetup', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696409953/newFolder/ourStory/bnanyd9qtzkrofpslofe.png', '<p><strong>Sustainability</strong>: We are devoted to environmentally responsible practices, reducing our ecological imprint, and cultivating a resilient ecosystem.<br />\r\n<strong>Creativity</strong>: We value innovative and artistic methods of landscaping and are always looking for new ways to improve the beauty and utility of our landscapes.<br />\r\n<strong>Community</strong>: We believe in developing strong, collaborative relationships with our clients, partners, and local communities. We seek to build spaces that connect individuals and foster a sense of belonging.<br />\r\n<strong>Integrity</strong>: Honesty, transparency, and ethical behavior influence our actions. We take pleasure in delivering on our promises and upholding the highest possible standards in our work.<br />\r\n<strong>Education</strong>: We are committed to sharing knowledge about sustainable landscaping practices and empowering others to become environmental stewards.<br />\r\n<strong>Quality</strong>: We are committed to providing high-quality landscapes that will last a long time. Our work is defined by attention to detail, workmanship, and a desire for quality.<br />\r\n<strong>Respect</strong>: We value diversity, treat everyone with dignity, and value the individuality that each person provides to our team and community.<br />\r\n<strong>Innovation</strong>: We embrace change and are constantly looking for ways to grow and evolve. We cultivate a culture that promotes innovative thinking and adaptability to new and emerging trends.</p>', 'fa fa-meetup', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696409958/newFolder/ourStory/msjll4y586gpuczgggny.png', 'publish', NULL, NULL, '2023-12-19 10:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `our_clients`
--

CREATE TABLE `our_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_description` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_clients`
--

INSERT INTO `our_clients` (`id`, `photo`, `alt_text`, `meta_photo`, `m_title`, `m_keyword`, `m_description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696497967/newFolder/ourStory/y3nidvzbbgbgei149rfv.png', 'Photo1', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696497962/newFolder/ourStory/j3h0nyorr3ya2uyjzrtx.png', 'Our Client', 'Our Client', 'Our Client', 'publish', NULL, NULL, '2023-10-05 03:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `our_stories`
--

CREATE TABLE `our_stories` (
  `id` bigint UNSIGNED NOT NULL,
  `banner_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec1_photo` text COLLATE utf8mb4_unicode_ci,
  `sec1_alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec1_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec1_description` text COLLATE utf8mb4_unicode_ci,
  `sec2_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec2_description` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'section_one',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_stories`
--

INSERT INTO `our_stories` (`id`, `banner_photo`, `banner_alt_text`, `banner_title`, `banner_description`, `sec1_photo`, `sec1_alt_text`, `sec1_title`, `sec1_description`, `sec2_title`, `sec2_description`, `type`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUR UNIQUENESS', '<p>Bagan Bari, a stunning environment situated in the heart of [insert area], stands as a tribute to nature&#39;s beauty and human history&#39;s rich fabric. This fascinating location is recognized by its incomparable distinctiveness, perfectly blending cultural history, architectural marvels, and natural grandeur.</p>\r\n\r\n<p>The historical significance of Bagan Bari is at the heart of its attractiveness. This ancient place has a centuries-old past that serves as a live canvas for telling stories from bygone ages. A multitude of pagodas, temples, and stupas dot the landscape, acting as stoic witnesses to the passing of time. Each edifice has a tale to tell, illustrating the architectural prowess and religious dedication of the people that previously flourished here.</p>', 'section_two', 'publish', NULL, NULL, '2023-12-14 12:06:21'),
(8, NULL, NULL, NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697366478/newFolder/ourStory/xrghxkwtm7f2h7okjpn8.jpg', 'image 2', 'BACKGROUND', '<p><strong>Baganbari Landscaping Ltd</strong>.&#39;s goal is to support the growth of the landscaping industry in Bangladesh by offering professional landscaping services with dedication and making them available throughout the country. We also offer Rooftop gardening, Farming, Vertical gardening, and Landscaping necessities to help you create a green environment in your arena for healthy, habitable, and attractive countries. Baganbari Landscaping Ltd. is a full-service gardening company. <strong>Since 2016</strong>, we have been delivering excellent <strong>landscaping services</strong>. In the last eight years, we have successfully executed over <strong>2250+</strong> landscape projects for over <strong>320+</strong> corporate clients. Our landscape staff is dedicated to providing the best landscaping solutions in town. Whether it is a commercial or residential landscape, our skilled team will <strong>plan</strong>, <strong>3D design</strong>, <strong>implement</strong>, and <strong>maintain your garden</strong> to your specifications.</p>', NULL, NULL, 'section_one', 'publish', NULL, '2023-09-27 06:32:12', '2023-12-14 12:10:03'),
(9, NULL, NULL, NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697366494/newFolder/ourStory/tzjcs1xbbven249ojt5e.jpg', 'image 1', 'Our commitment', '<p><strong>Landscape architecture:</strong></p>\r\n\r\n<p>Based on your budget and preferences, we combine our knowledge and your vision to create useful, unique spaces. This is a professional team of architects, planners, and executioners. Their main goal is to ensure that we are in harmony with nature. We also combine our knowledge and your vision to create functional, creative, and innovative environments that are tailored to your budget and tastes.&nbsp;Our planner will work with skilled designers and construction teams to beautify places based on environmental data and your specifications, regardless of whether the space is residential or commercial.&nbsp;</p>', NULL, NULL, 'section_one', 'publish', NULL, '2023-09-27 06:33:51', '2023-12-14 12:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint UNSIGNED NOT NULL,
  `package_type_id` int DEFAULT NULL,
  `package_category_id` int DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `thumb_photo` text COLLATE utf8mb4_unicode_ci,
  `gallery_image` text COLLATE utf8mb4_unicode_ci,
  `price` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_package` text COLLATE utf8mb4_unicode_ci,
  `meta_photo` text COLLATE utf8mb4_unicode_ci,
  `m_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_type_id`, `package_category_id`, `parent_id`, `title`, `slug`, `package_type`, `photo`, `thumb_photo`, `gallery_image`, `price`, `description`, `about_package`, `meta_photo`, `m_title`, `m_keyword`, `m_description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'OUR PRICING & PLANS', 'our-pricing-plans', NULL, NULL, NULL, '', NULL, 'Here Is Our Some Service Packages For All Customer Who Want To Decorate Their Home-Land In Healthy & Benefit Way', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, NULL, '2023-12-27 23:57:07'),
(3, 3, 1, 10, 'Day Gardener Service', 'day-gardener-service', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704349728/newFolder/package/a1rlnsfendbfcjnuhbxl.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704791313/newFolder/package/q4flfashhdgob6zxolmr.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704349722/newFolder/property/ipahcq8l4runprgyjsmc.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704349725/newFolder/property/kixxjsnnitvrwpxtxm3l.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703654343/newFolder/property/mylv14z04cx8ypfkkflw.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703654345/newFolder/property/xjofowam6nip7rfsugzv.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703654348/newFolder/property/ij8wltkqermzhyoqp7dh.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703654354/newFolder/property/jgczevjwbaahf7tsuqn8.png', '1480', 'One Gardener,  Working Time Eight Hours', '<p>A landscape is&nbsp;<strong>part of Earth&#39;s surface that can be viewed at one time from one place</strong>. It consists of the geographic features that mark, or are characteristic of, a particular area. The term comes from the Dutch word landschap, the name given to paintings of the countryside</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702880283/newFolder/package/vsu6dd4usqhkojmynv9s.png', 'residential', 'residential', 'liooi', 'publish', NULL, '2023-10-02 06:31:12', '2024-01-09 03:08:32'),
(4, 1, 1, 10, 'Day Gardener Service', 'day-gardener-service', NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704791411/newFolder/package/uwcorzp9jggdkzhmw2en.jpg', '', '3000', 'One Gardener, Working Time Eight Hours, Agriculture Specialist Consultancy 1 Day, NKPS & Insafety Side Include', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702878718/newFolder/property/bmaok7ytkmmfdmtvm1kz.jpg', NULL, NULL, NULL, 'publish', NULL, '2023-10-02 06:32:45', '2024-01-09 03:10:09'),
(5, 1, 1, 10, 'Day Consultancy Service', 'day-consultancy-service', NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704791453/newFolder/package/g0womqkgaqfbpfocettv.jpg', '', '999', 'Consultancy Service, One Agriculture Specialist, Month 1 Time', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-10-02 06:34:15', '2024-01-09 03:10:52'),
(7, 1, 1, 10, 'Weekly Gardener Service', 'weekly-gardener-service', NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704791474/newFolder/package/wysj24c4epsss1hkbgir.jpg', '', '2990', 'One Gardener in a Day, Eight Hours in a Day, Month Two Day', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-11 14:01:46', '2024-01-09 03:11:13'),
(8, 2, 2, 10, 'Weekly Gardener Service', 'weekly-gardener-service', NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704791474/newFolder/package/wysj24c4epsss1hkbgir.jpg', '', '6000', 'One Gardener in a Day, Eight Hours in a Day, Month 4 Days (Week 1 day), Agriculture Specialist Consultancy Month 1 Day', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-11 15:18:09', '2023-12-27 05:12:37'),
(9, 2, 2, 11, 'Weekly Gardener Service', 'weekly-gardener-service', NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704791474/newFolder/package/wysj24c4epsss1hkbgir.jpg', '', '9000', 'One Gardener in a Day, Four Hours in a Day, Month 12 Days (Week 3 day), Agriculture Specialist Consultancy Month 1 Day, Plants Replacement Warranty, NKPS & Insafety Side Include', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-11 15:25:00', '2023-12-27 05:12:50'),
(10, 2, 2, 11, 'Weekly Consultancy Service', 'weekly-consultancy-service', NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704791474/newFolder/package/wysj24c4epsss1hkbgir.jpg', '', '7500', 'One Gardener in a Day, Four Hours in a Day, Month 8 Days (Week 2 day), Agriculture Specialist Consultancy Month 1 Day, Include Fertilizer', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-11 15:34:09', '2023-12-27 05:13:02'),
(11, 3, NULL, NULL, 'Monthly Gardener Service', 'monthly-gardener-service', 'BASIC', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704791474/newFolder/package/wysj24c4epsss1hkbgir.jpg', NULL, '9000', 'One Gardener in a Day, Four Hours in One Day, Month 15th Days, Agriculture Specialist Consultancy Month 1 Day', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-11 15:37:49', '2023-12-26 03:52:19'),
(12, 3, NULL, 11, 'Monthly Gardener Service', 'monthly-gardener-service', NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704791474/newFolder/package/wysj24c4epsss1hkbgir.jpg', '', '14000', 'One Gardener in a Day, Eight Hours in One Day, Month 15th Days, Agriculture Specialist Consultancy Month 1 Day, NKPS & Insafety Side Include', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-11 15:40:10', '2023-12-27 05:20:24'),
(13, 3, NULL, 11, 'Monthly Gardener Service', 'monthly-gardener-service', NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704791474/newFolder/package/wysj24c4epsss1hkbgir.jpg', '', '22000', 'One Gardener in a Day, Eight Hours in One Day, Month 30th Days (Exclude Weekend), Agriculture Specialist Consultancy Month 2 Day, NKPS & Insafety Side Include', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-11 15:42:05', '2023-12-27 05:20:15'),
(14, 3, 2, 10, 'Monthly Gardener Service', 'monthly-gardener-service', NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704791474/newFolder/package/wysj24c4epsss1hkbgir.jpg', '', '14000', 'One Gardener in a Day, Four Hours in One Day, Month 30th Days (Exclude Weekend), Agriculture Specialist Consultancy Month 2 Day', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-11 15:46:06', '2023-12-27 22:33:42'),
(16, NULL, NULL, NULL, 'My package', 'my-package', 'BASIC', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702879331/newFolder/Packages/rmoqci5k1kdh4fj2mrkq.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704791474/newFolder/package/wysj24c4epsss1hkbgir.jpg', NULL, '300', 'fwefwe', '<p>fwef</p>', NULL, NULL, NULL, NULL, 'draft', NULL, '2023-12-18 00:02:11', '2023-12-23 15:28:00'),
(17, 1, NULL, NULL, 'ytjytjyt', 'ytjytjyt', 'STANDARD', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703652308/newFolder/Packages/zfzkcvl7figusam4zjxy.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704791474/newFolder/package/wysj24c4epsss1hkbgir.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703653797/newFolder/property/ivitahfjhedyxah1mhxs.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703653800/newFolder/property/dee69l03ygbrtc51rfjs.png', '1480', 'uuikuu,ikuykyu,yuyu,uikyui', '<p>tiyyt7uytutyu</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703652310/newFolder/Packages/jufes4n7wpok6shfstjv.png', 'Eligendi ullam labor', 'residential', 'i67', 'publish', '2023-12-26 23:18:43', '2023-12-26 22:45:07', '2023-12-26 23:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `packages_details`
--

CREATE TABLE `packages_details` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bradcamp` text COLLATE utf8mb4_unicode_ci,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `work_process_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `step_of_work_process_photo` text COLLATE utf8mb4_unicode_ci,
  `contact_background` text COLLATE utf8mb4_unicode_ci,
  `work_process` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `important_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `important_description` text COLLATE utf8mb4_unicode_ci,
  `meta_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_description` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages_details`
--

INSERT INTO `packages_details` (`id`, `title`, `slug`, `photo`, `bradcamp`, `alt_text`, `description`, `work_process_photo`, `step_of_work_process_photo`, `contact_background`, `work_process`, `important_photo`, `important_description`, `meta_photo`, `m_title`, `m_keyword`, `m_description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Garden Maintainance Service', 'garden-maintainance-service', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704355531/newFolder/services/pmnrt64lry0ik3gflczj.jpg', NULL, NULL, NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704349427/newFolder/services/zjk4zopwpjzzwhpkbysj.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, NULL, '2024-01-04 13:05:32'),
(10, 'Rooftop Gardening', 'rooftop-gardening', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703048977/newFolder/services/guy8k3hxwybibyhzdh7a.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704356856/newFolder/services/u6qwvar12scdhsrmbwbd.jpg', NULL, '<p>Dhaka, the capital city of Bangladesh and a city of at least 10 million people made it one of the most densely populated countries in the world which suffered unrecoverable damage to the green areas of the city. Having the most polluted air, the residents of this city are forced to live in a dusty, polluted, toxic, and poisonous environment. The rapid growth of Bangladesh`s capital has destroyed crucial ecosystems, caused rising temperatures, and quickly lost its green. There is only one way to bring back its green, good air and repair its lung is &ldquo;rooftop gardening&rdquo;.</p>\r\n\r\n<p>Recently, the city has been ranked second in the US Air Quality Index of the world&rsquo;s worst cities for air pollution. To fight back from such a damaged and polluted environment, the rooftop garden movement can be a good way considering the growing popularity of the city as experts say that, apart from the obvious aesthetics, can improve air quality, provide fresh food, and lower ambient temperature. Large-scale implementation of roof gardens in Dhaka will reduce the urban heat island effect, carbon dioxide and increase oxygen content in the atmosphere. Green practices will also create new opportunities for food security and security, nutrition, employment, and city planning. In addition to decorative benefits, roof coverings have temperature control, hydrological benefits, architectural enhancements, wildlife habitats or corridors, recreational opportunities, and even ecological benefits on a large scale.</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702818230/newFolder/services/vcacfj4xl54w6zsu6l6n.png', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704349030/newFolder/services/eicvbhoodogkypexgm3c.jpg', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702818234/newFolder/services/dwe84wp4rytsq3xma8ef.png', NULL, NULL, 'fsdefdfsd', NULL, NULL, 'publish', NULL, '2023-12-17 07:03:54', '2024-01-04 13:27:37'),
(11, 'Corridor & Terrace', 'corridor-terrace', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702875759/newFolder/services/da1mpcf1qezd12g6nukt.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704356939/newFolder/services/ox5vhyowh9e5m5smer2q.jpg', NULL, '<p>Landscape Consultancy Entails Giving Expert Advice And Services About Outdoor Space Planning, Design, And Management. Landscape Consultants Collaborate With Clients To Develop Surroundings That Are Useful, Visually Pleasant, And Sustainable.</p>', NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704349336/newFolder/services/k5q6nunfl5fn88g42mon.jpg', NULL, NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703920688/newFolder/services/dwlzhakouv2prchgr0bm.jpg', NULL, NULL, NULL, 'publish', NULL, '2023-12-17 07:07:26', '2024-01-04 13:29:01'),
(12, 'House front yard', 'house-front-yard', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-19 11:22:57', '2023-12-20 15:01:11'),
(13, 'Design Consultancy', 'design-consultancy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-19 11:23:23', '2023-12-20 15:01:42'),
(14, 'Bed Room & Living Gardening', 'bed-room-living-gardening', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-19 11:23:41', '2023-12-20 15:03:40'),
(15, 'Office Gardening', 'office-gardening', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-19 11:24:08', '2023-12-20 15:04:14'),
(16, 'Indore Plant Package', 'indore-plant-package', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-19 11:24:31', '2023-12-20 15:05:19'),
(17, 'Gift Package', 'gift-package', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-19 11:59:03', '2023-12-20 15:05:47'),
(18, 'Tubs Package', 'tubs-package', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, '2023-12-19 11:59:21', '2023-12-20 15:06:13'),
(19, 'Amane vila', 'amane-vila', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703049018/newFolder/services/kto2iankjja5l5jkb2dj.jpg', NULL, NULL, '<p>Landscape Consultancy Entails Giving Expert Advice And Services About Outdoor Space Planning, Design, And Management. Landscape Consultants Collaborate With Clients To Develop Surroundings That Are Useful, Visually Pleasant, And Sustainable.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'publish', '2023-12-20 15:06:49', '2023-12-19 23:10:18', '2023-12-20 15:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `package_categories`
--

CREATE TABLE `package_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `banner_photo` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_categories`
--

INSERT INTO `package_categories` (`id`, `name`, `slug`, `details`, `banner_photo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Standard', 'standard', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704794093/newFolder/package/qnntsb9y6qkrjytoydcu.jpg', 'publish', NULL, '2023-12-27 02:33:58', '2024-01-09 03:54:53'),
(2, 'Premium', 'premium', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704794120/newFolder/package/zix0f13mvzo6ahbfcwnh.jpg', 'publish', NULL, '2023-12-27 02:34:09', '2024-01-09 03:55:20'),
(3, 'Special', 'special', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704794144/newFolder/package/qqqycdbfimorlqj23rgj.jpg', 'publish', NULL, '2023-12-27 02:34:39', '2024-01-09 03:55:45'),
(4, 'Basic', 'basic', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704794161/newFolder/package/e6zcczmmhvcamuchkmhc.jpg', 'publish', NULL, '2023-12-27 02:34:44', '2024-01-09 03:56:01'),
(6, 'sabbsa', 'sabbsa', 'yjhytjyt', NULL, 'publish', '2023-12-27 22:24:27', '2023-12-27 22:24:24', '2023-12-27 22:24:27'),
(7, 'fwefew', 'fwefew', NULL, NULL, 'publish', '2024-01-09 03:56:08', '2024-01-09 03:30:46', '2024-01-09 03:56:08'),
(8, 'ergterwtwer', 'ergterwtwer', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704792854/newFolder/Packages/rfy4gyxgmozcoibrmtxi.jpg', 'publish', '2024-01-09 03:56:05', '2024-01-09 03:34:12', '2024-01-09 03:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `package_types`
--

CREATE TABLE `package_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_types`
--

INSERT INTO `package_types` (`id`, `name`, `slug`, `details`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Day', 'day', 'Day:Here Is Our Some Service Packages For All Customer Who Want To Decorate Their Home-Land In Healthy & Benefit Way', 'publish', NULL, '2023-12-26 02:48:34', '2023-12-27 23:27:21'),
(2, 'Weekly', 'weekly', 'Weekly:Here Is Our Some Service Packages For All Customer Who Want To Decorate Their Home-Land In Healthy & Benefit Way', 'publish', NULL, '2023-12-26 02:48:51', '2023-12-27 23:27:36'),
(3, 'Monthly', 'monthly', 'Monthly:Here Is Our Some Service Packages For All Customer Who Want To Decorate Their Home-Land In Healthy & Benefit Way', 'publish', NULL, '2023-12-26 02:48:58', '2023-12-27 23:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `photo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697258791/newFolder/partner/sr65gve0olvonfqzkxur.png', 'publish', NULL, NULL, '2023-10-13 22:46:31'),
(2, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697258801/newFolder/partner/wqjlwzg2ye9ozbfwkk9n.png', 'publish', NULL, '2023-10-13 22:46:42', '2023-10-13 22:46:42'),
(3, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697258811/newFolder/partner/uxa2kcyrocxb1aedwae0.png', 'publish', NULL, '2023-10-13 22:46:51', '2023-10-13 22:46:51');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `thumb_photo` text COLLATE utf8mb4_unicode_ci,
  `thumb_alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `thumb_photo`, `thumb_alt_text`, `title`, `slug`, `photo`, `alt_text`, `photo_title`, `parent_id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696916015/newFolder/photo_gallery/icobff5vnkdxd9vwbwzc.png', 'thumb photo ok', 'Our Achivement', 'our-achivement', '', NULL, NULL, NULL, 'publish', NULL, '2023-10-09 23:11:47', '2023-10-09 23:33:38'),
(2, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696916032/newFolder/photo_gallery/n9fkilojokvtpzrsmrli.png', 'thumb photo ok', 'Tour', 'tour', '', NULL, NULL, NULL, 'publish', NULL, '2023-10-09 23:12:26', '2023-10-09 23:33:55'),
(3, NULL, NULL, NULL, '', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696917652/newFolder/photo_gallery/udwcmi1eku2vazuckyjb.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696917656/newFolder/photo_gallery/xk0deg8sl831crafyxfy.png', 'icon1', '1st day', '1', 'publish', NULL, '2023-10-09 23:13:17', '2023-10-10 00:00:57'),
(4, NULL, NULL, NULL, '', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696917709/newFolder/photo_gallery/ztwj64tfrr0vl1un05ej.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696917714/newFolder/photo_gallery/q32dmxxjfrr3qmk1lrlr.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696914960/newFolder/photo_gallery/tfntwlolq4hpqktcvqvq.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696914965/newFolder/photo_gallery/qb2qy4rvmhpbbx9x3rdq.png', 'icon1', 'Our tour', '1', 'publish', '2023-11-26 15:12:32', '2023-10-09 23:16:06', '2023-11-26 15:12:32'),
(5, NULL, NULL, NULL, '', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696915011/newFolder/photo_gallery/fkcdeac38anpmnye4bkg.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696915015/newFolder/photo_gallery/qma6hwleb8hvsfblrorl.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696915019/newFolder/photo_gallery/dfjyvddngkwyvui7qirz.png', 'icon1', '2nd day', '2', 'publish', NULL, '2023-10-09 23:17:00', '2023-10-09 23:17:00'),
(6, NULL, NULL, NULL, '', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697278762/newFolder/photo_gallery/jsxcgj77l1kzt9uowt7s.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697278768/newFolder/photo_gallery/rbgprlzpfxbyiqysp6xm.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697278773/newFolder/photo_gallery/ftlbdt0z0ry2yaozutxv.png', 'sdvsdv', 'Mutual Fund', '2', 'publish', '2023-11-26 15:12:25', '2023-10-14 04:19:34', '2023-11-26 15:12:25'),
(7, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697278829/newFolder/photo_gallery/xmavegyipsbpx4i8nq8j.png', 'thumb photo ok', 'Mahjabin', 'mahjabin', '', NULL, NULL, NULL, 'publish', NULL, '2023-10-14 04:20:32', '2023-10-14 04:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `requirement_type_id` bigint UNSIGNED NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `thumb_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_image_front` text COLLATE utf8mb4_unicode_ci,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `land_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_orientation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `design_consultant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `launch_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_image` text COLLATE utf8mb4_unicode_ci,
  `meta_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_description` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `category_id`, `requirement_type_id`, `banner_image`, `title`, `slug`, `description`, `thumb_image`, `thumb_image_front`, `alt_text`, `address`, `location`, `land_area`, `property_orientation`, `road_width`, `design_consultant`, `building_height`, `no_of_unit`, `no_of_parking`, `launch_date`, `video_thumb`, `video`, `gallery_image`, `meta_photo`, `m_title`, `m_keyword`, `m_description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703142737/newFolder/property/f0uvoj0magpx5lfkdeei.jpg', 'Shanta foram', 'shanta-foram', '<p>Plants Provide The Oxygen We Breathe. Plants Are The Basis Of The Food That Nourishes Us And The Medicines That Heal Us. Plants Are Also Our Favored Decoration Indoors And Out. We Send Plants As Gifts, Celebrate Our Joys And Express Our Sympathies With Flowers. We At The Plant Professionals Are Fortunate To Work With Plants Every Day. We Enjoy Them, Nourish Them And Constantly Seek New Knowledge About Them. We Thrive On Solving Problems With Plants And Finding New Ways To Use Plants To Please People. Our Palette Continues To Expand, Along With Our Staff And Our Knowledge. Allow Us To Assist You When You Have A Desire Or A Need For Plants Or Flowers. Our Focus Is On Improving The Lives Of People Through The Use Of Plants. We Understand The Importance Of Great Soils And Drainage As The Basis Of Plant Health In Both Potted Plants And Garden Plants. Principles Of Design Is Essential To Designing A Landscape And Working Through The Design Process. A Landscape Is Part Of Earth&#39;s Surface That Can Be Viewed At One Time From One Place. It Consists Of The Geographic Features That Mark, Or Are Characteristic Of, A Particular Area. A Natural Landscape Is A Part Of Landscape Geography That Entails The Original View Of Land Before Humans Act Upon It. The Elements In A Natural Landscape Consist Of A Collection Of Landforms That Are Living Or Non-Living, Such As Rocks, Vegetation, Trees, Bodies Of Water, And Soil. Although Wind Can Blow Trees Away, Fires Burn Vegetation, And Floods Move Rocks, Only Human Factors Can Cause A Difference In A Natural Landscape. Is, However, Defined In Quite Different Ways. Conceives Of Landscape Not As A Mental Construct But As An Objectively</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703142732/newFolder/property/pv6axoryfvaichgbvwl2.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703915514/newFolder/property/tm51hcpb7qyzc2lbz74g.jpg', 'shanta com p.', 'Gulshan', '2', 'Laudantium asperior', 'Dolorum nisi commodi', 'Cupiditate tempore', 'Cumque quis magnam d', 'Voluptatum fuga Vol', 'Labore suscipit dolo', 'Sint veniam pariat', 'launch_date', NULL, 'Expedita quia sint f', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703142742/newFolder/property/wuvmhhdbjzf45x5hxrsf.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703142744/newFolder/property/vjdyscntre0fd5jgdkyk.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703142740/newFolder/property/uwjfchqiif3euzoatkd0.jpg', 'Aut sequi quia adipi', 'Et in autem possimus', 'Ullamco blanditiis f', 'publish', NULL, '2023-09-30 05:27:56', '2023-12-30 10:51:55'),
(2, 1, 2, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704359843/newFolder/property/vbrhtdpxshfdxwjys4gj.jpg', 'Confidence Group', 'confidence-group', '<p>Rooftop garden</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704359841/newFolder/property/ks8gjegbk9yrnpszrboc.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703914886/newFolder/property/ickbhyg7gtllfn57lmkp.jpg', NULL, 'Narayanganj', '0', 'Omnis quia voluptate', 'Sed dolorem ipsam co', 'Esse voluptatem lab', 'Adipisicing dignissi', 'Officia maiores solu', 'Est quasi adipisci a', 'Similique ut volupta', 'launch_date', NULL, 'Nemo anim minim mole', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704359845/newFolder/property/sozen8cfewhxxj2owfac.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704359847/newFolder/property/kpwog6duvnh1arrhnnkt.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704359848/newFolder/property/vsyw8jky7qyuptbyiwbs.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703143008/newFolder/property/ncvnufc6gn4nhsiiul0q.jpg', 'Nihil pariatur Volu', 'Nobis nulla odit ten', 'In et id rerum nostr', 'publish', NULL, '2023-09-30 05:31:02', '2024-01-04 14:17:29'),
(3, 3, 2, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697115659/newFolder/property/yw4f1nbs2kdbhm1xfmuk.jpg', 'Labore asperiores su', 'labore-asperiores-su', '<p>csacascasc</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697115643/newFolder/property/m5nred3cbmezhe3aket1.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703915820/newFolder/property/jai0jf5safumanh78raf.jpg', NULL, 'Ex nulla aut dolorem', '1', 'Laborum Consectetur', 'Rem eligendi dolorem', 'Nisi proident id pa', 'Eos id veritatis com', 'Ratione proident mo', 'Dolorem mollit id e', 'Corporis lorem ex re', 'launch_date', NULL, 'Enim id in aliquam', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696073844/newFolder/property/ikyckmpu7quszwcsqprl.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696073851/newFolder/property/xkuwjdrxdgugjvnf9svh.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696073858/newFolder/property/hrnjlwpvhkwzth0rw17f.png', 'Ducimus lorem optio', 'Labore assumenda qui', 'Vero aut facere omni', 'publish', NULL, '2023-09-30 05:37:54', '2023-12-30 10:57:01'),
(4, 4, 1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702544974/newFolder/property/l8db1pzzahknlhrqb80f.png', 'Dhaka DC house', 'dhaka-dc-house', '<p>Designing the landscape for a <strong>Dhaka DC house</strong> provides a unique opportunity to combine modern aesthetics with <strong>cultural depth</strong>, resulting in a <strong>harmonious atmosphere</strong> that embodies<strong> Bangladesh&#39;s culture</strong>. We want to perfectly merge the <strong>natural beauty</strong> of the region with contemporary features in this original landscape design, transforming the outside space into a refuge of peace and sophistication.</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702544965/newFolder/property/vvven1ob9kguy3irsneg.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704095778/newFolder/property/kwqi72j2kiw0nthdj1cp.jpg', NULL, 'Minto Road , Sagunbagicha, Dhaka', '2', '111798.80 square ft', NULL, NULL, 'Baganbari Landscape Ltd', NULL, NULL, NULL, 'launch_date', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702544980/newFolder/property/t1k4agrsuhiscsuc0duc.png', 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702544985/newFolder/property/j4o29fsnjgshckqjk7pz.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696074351/newFolder/property/ss0gbtnivuuozyt9bflr.png', 'Property1', 'Property1', 'Property1', 'publish', NULL, '2023-09-30 05:46:02', '2024-01-01 12:56:19'),
(5, 1, 2, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704361946/newFolder/property/jfgh7tnydcks0vrzny58.jpg', 'Chillox', 'chillox', '<p>Plants provide the oxygen we breathe. Plants are the basis of the food that nourishes us and the medicines that heal us. Plants are also our favored decoration indoors and out. We send plants as gifts, celebrate our joys and express our sympathies with flowers. We at The Plant Professionals are fortunate to work with plants every day. We enjoy them, nourish them and constantly seek new knowledge about them. We thrive on solving problems with plants and finding new ways to use plants to please people. Our palette continues to expand, along with our staff and our knowledge. Allow us to assist you when you have a desire or a need for plants or flowers. Our focus is on improving the lives of people through the use of plants. We understand the importance of great soils and drainage as the basis of plant health in both potted plants and garden plants. principles of design is essential to designing a landscape and working through the design process. A landscape is part of Earth&#39;s surface that can be viewed at one time from one place. It consists of the geographic features that mark, or are characteristic of, a particular area. A natural landscape is a part of landscape geography that entails the original view of land before humans act upon it. The elements in a natural landscape consist of a collection of landforms that are living or non-living, such as rocks, vegetation, trees, bodies of water, and soil. Although wind can blow trees away, fires burn vegetation, and floods move rocks, only human factors can cause a difference in a natural landscape. is, however, defined in quite different ways. conceives of landscape not as a mental construct but as an objectively</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704361943/newFolder/property/p3htpwpdlzcocsridih5.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703917861/newFolder/property/u6yrwm1rvrrzgcrmq16m.jpg', 'c,p.shanta', 'Mirpur-11,Dhaka.', '0', '3.4 kata', 'south', '35 feet', 'Baganbari Limited', '2B+g+14', '4', '2', 'launch_date', NULL, 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704361948/newFolder/property/cxidrqextwja8b5awict.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703143307/newFolder/property/ncvlf5nvkop0hwha8ekv.jpg', 'Banani', 'Nesciunt dolore con', 'gsdg', 'publish', NULL, '2023-09-30 05:48:50', '2024-01-04 15:04:16'),
(6, 4, 2, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703071191/newFolder/property/zidgqolfkz9svpkh2ktu.jpg', 'Maymansingha Vacation House Masterplan', 'maymansingha-vacation-house-masterplan', '<p>Incorporate native plants, rocks, and terrain features into the landscaping to create a seamless integration with the natural surroundings. This not only enhances the beauty of the property but also minimizes the environmental impact. Consider elements such as a well-designed patio, deck, or pergola with comfortable seating areas, creating an extension of the indoor living space. Integrate features like fire pits, outdoor kitchens, and cozy nooks for a variety of experiences. Implement eco-friendly landscaping practices, such as water-efficient irrigation systems, permeable paving, and the use of recycled materials. Consider the energy efficiency of outdoor lighting, and explore options like solar-powered fixtures. Sustainability not only aligns with environmental values but also contributes to long-term cost savings.</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703071188/newFolder/property/zf2gorc0lby9eqozol9a.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704099332/newFolder/property/c8iwxs5akdq1gg4vgmix.jpg', NULL, 'Maymansingha', '3', '20 Katha', 'south', '35 feet', 'Baganbari Limited', '2B+g+14', '4', '2', 'launch_date', NULL, 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703071193/newFolder/property/yqdlwy3bhtapjfpfwevs.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703071196/newFolder/property/dgejilbr9op5ugcrgsjv.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703071199/newFolder/property/sbdfdtdepq3pztqcckuf.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696074625/newFolder/property/mgj4ms6qdp9v4n459m8a.png', 'Ducimus non consequ', 'Nesciunt dolore con', 'csssss', 'publish', NULL, '2023-09-30 05:50:33', '2024-01-01 13:55:33'),
(7, 4, 1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703071864/newFolder/property/vxlqroymsbmqygdnkceu.jpg', 'Basundhara C Block Terrace', 'basundhara-c-block-terrace', '<p>Capitalize on the veranda&#39;s location to frame scenic views while ensuring an element of privacy. Strategically position landscaping elements such as tall potted plants, trellises, or pergolas to create secluded areas without obstructing breathtaking views. This balance allows residents to enjoy the outdoors while maintaining a sense of intimacy.</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703071856/newFolder/property/bj8ndzjojblmmte2ojuh.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704095578/newFolder/property/bcovmdd5f37qqmiegahc.jpg', NULL, 'Baridhara C block', '1', '75 Sft', 'south', '35 feet', 'Baganbari Limited', '2B+g+14', '4', '2', 'launch_date', NULL, 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703071868/newFolder/property/feog0k1snehk6mfnybx7.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703071871/newFolder/property/qf68jwdltq30srmfbvrm.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703071874/newFolder/property/rl0nvirmpbklg8pzica7.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703071878/newFolder/property/vgihqzmiam8c55itgryb.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696074743/newFolder/property/njecumgi8odcu0acvpon.png', 'Natus quos qui nostr', 'Ipsum deserunt opti', 'dfwedfas', 'publish', NULL, '2023-09-30 05:52:29', '2024-01-01 12:52:58'),
(8, 4, 1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703072603/newFolder/property/wxog59xz3voxrz6zkkhn.jpg', 'Senbcrop Playground', 'senbcrop-playground', '<p>Create distinct play zones that cater to different age groups and activities. Segregate areas for toddlers, preschoolers, and older children, each with age-appropriate equipment. Incorporate a mix of active play structures, imaginative play areas, and quiet spaces for reading or contemplation. Encourage imaginative and creative play by incorporating elements that spark children&#39;s creativity. Consider features like art installations, musical instruments, or themed play structures that inspire storytelling and make-believe adventures.</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703072596/newFolder/property/egqdwfdnwrsiyhxz286i.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704095607/newFolder/property/fpwlmapj78t1f16mhgoo.jpg', NULL, 'Sirajganj', '3', '6000 Sft', 'south', '35 feet', 'Baganbari Limited', '2B+g+14', '4', '2', 'launch_date', NULL, 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703072606/newFolder/property/vcuqvokrvn7aognqdwk3.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703072609/newFolder/property/rhgtdshe2utrz3iypoh7.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703072612/newFolder/property/xfkcya78e1lluvyxjoga.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703072615/newFolder/property/mi9ugpihntpdzeevispv.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703072619/newFolder/property/oxcbsowngajvzh4roch3.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703072622/newFolder/property/soc4tfbxhmp2rh2dcobp.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703072626/newFolder/property/zfecykcbvszfq11yrehw.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703072629/newFolder/property/dhvym2cdcrhrkx2wvyqg.jpg;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703072633/newFolder/property/crewdvcts2dt8rtz29pv.jpg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696074870/newFolder/property/bb692gysrfuoggeamw84.png', 'Eligendi ullam labor', 'Ipsum deserunt opti', 'wefrew', 'publish', NULL, '2023-09-30 05:54:36', '2024-01-01 12:53:27'),
(9, 4, 1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697115346/newFolder/property/bixwghm0hkzg22bians4.jpg', 'Gulshan Lake park', 'gulshan-lake-park', '<p>Plants provide the oxygen we breathe. Plants are the basis of the food that nourishes us and the medicines that heal us. Plants are also our favored decoration indoors and out. We send plants as gifts, celebrate our joys and express our sympathies with flowers. We at The Plant Professionals are fortunate to work with plants every day. We enjoy them, nourish them and constantly seek new knowledge about them. We thrive on solving problems with plants and finding new ways to use plants to please people. Our palette continues to expand, along with our staff and our knowledge. Allow us to assist you when you have a desire or a need for plants or flowers. Our focus is on improving the lives of people through the use of plants. We understand the importance of great soils and drainage as the basis of plant health in both potted plants and garden plants. principles of design is essential to designing a landscape and working through the design process. A landscape is part of Earth&#39;s surface that can be viewed at one time from one place. It consists of the geographic features that mark, or are characteristic of, a particular area. A natural landscape is a part of landscape geography that entails the original view of land before humans act upon it. The elements in a natural landscape consist of a collection of landforms that are living or non-living, such as rocks, vegetation, trees, bodies of water, and soil. Although wind can blow trees away, fires burn vegetation, and floods move rocks, only human factors can cause a difference in a natural landscape. is, however, defined in quite different ways. conceives of landscape not as a mental construct but as an objectively</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697115336/newFolder/property/uos0m5fkit4csgchdjgk.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704095741/newFolder/property/wmnaqzm5sffbphedrtna.jpg', NULL, 'Baridhara J block,Dhaka', '2', '3.4 kata', 'south', NULL, NULL, '2B+g+14', '4', '2', 'launch_date', NULL, 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696074984/newFolder/property/c8ivwprmzqnkrfmkemwa.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696074989/newFolder/property/lkcsjv4dceoqibkkc1zm.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696074995/newFolder/property/cor2muemzxfilmlag4kd.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075000/newFolder/property/rvv9g22fb3lb51f6lyry.png', 'Ducimus non consequ', 'Odit reprehenderit s', 'sads', 'publish', NULL, '2023-09-30 05:56:53', '2024-01-01 12:55:41'),
(10, 3, 1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697115296/newFolder/property/ehxfmc4dpjjaffs1tjkk.jpg', 'Moitri Vila', 'moitri-vila', '<p>Plants provide the oxygen we breathe. Plants are the basis of the food that nourishes us and the medicines that heal us. Plants are also our favored decoration indoors and out. We send plants as gifts, celebrate our joys and express our sympathies with flowers. We at The Plant Professionals are fortunate to work with plants every day. We enjoy them, nourish them and constantly seek new knowledge about them. We thrive on solving problems with plants and finding new ways to use plants to please people. Our palette continues to expand, along with our staff and our knowledge. Allow us to assist you when you have a desire or a need for plants or flowers. Our focus is on improving the lives of people through the use of plants. We understand the importance of great soils and drainage as the basis of plant health in both potted plants and garden plants. principles of design is essential to designing a landscape and working through the design process. A landscape is part of Earth&#39;s surface that can be viewed at one time from one place. It consists of the geographic features that mark, or are characteristic of, a particular area. A natural landscape is a part of landscape geography that entails the original view of land before humans act upon it. The elements in a natural landscape consist of a collection of landforms that are living or non-living, such as rocks, vegetation, trees, bodies of water, and soil. Although wind can blow trees away, fires burn vegetation, and floods move rocks, only human factors can cause a difference in a natural landscape. is, however, defined in quite different ways. conceives of landscape not as a mental construct but as an objectively</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697115287/newFolder/property/q5pwgkequvo8lhtxvdlf.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703915768/newFolder/property/jyf9rtnd2z7gfcrf1klp.jpg', NULL, 'Badda ,Dhaka', '1', '3.4 kata', 'south', '35 feet', 'Baganbari Limited', '2B+g+14', '4', '2', 'launch_date', NULL, 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075101/newFolder/property/pttldds8xjjm3juel7ax.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075106/newFolder/property/zybmn6bzmkj4fsy14ojx.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075111/newFolder/property/bkewud4b0vonvaunmjcc.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075116/newFolder/property/dl7uvohduztztxzvakzi.png', 'Natus quos qui nostr', 'Adipisicing est vol', 'sds', 'publish', NULL, '2023-09-30 05:58:43', '2023-12-30 10:56:09'),
(11, 3, 1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697115230/newFolder/property/zggbqv5ixg6zxqmyukgh.jpg', 'LLb House', 'llb-house', '<p>Plants provide the oxygen we breathe. Plants are the basis of the food that nourishes us and the medicines that heal us. Plants are also our favored decoration indoors and out. We send plants as gifts, celebrate our joys and express our sympathies with flowers. We at The Plant Professionals are fortunate to work with plants every day. We enjoy them, nourish them and constantly seek new knowledge about them. We thrive on solving problems with plants and finding new ways to use plants to please people. Our palette continues to expand, along with our staff and our knowledge. Allow us to assist you when you have a desire or a need for plants or flowers. Our focus is on improving the lives of people through the use of plants. We understand the importance of great soils and drainage as the basis of plant health in both potted plants and garden plants. principles of design is essential to designing a landscape and working through the design process. A landscape is part of Earth&#39;s surface that can be viewed at one time from one place. It consists of the geographic features that mark, or are characteristic of, a particular area. A natural landscape is a part of landscape geography that entails the original view of land before humans act upon it. The elements in a natural landscape consist of a collection of landforms that are living or non-living, such as rocks, vegetation, trees, bodies of water, and soil. Although wind can blow trees away, fires burn vegetation, and floods move rocks, only human factors can cause a difference in a natural landscape. is, however, defined in quite different ways. conceives of landscape not as a mental construct but as an objectively</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697115219/newFolder/property/l6xp2djkqntzu1hef5ol.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703915943/newFolder/property/sb8ijxut1ae1qzzwrpvw.jpg', NULL, 'Baridhara J block,Dhaka', '1', '3.4 kata', 'south', '35 feet', 'Baganbari Limited', '2B+g+14', '4', '2', 'launch_date', NULL, 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075647/newFolder/property/ycylkmq5u7uvhxljjoz2.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075652/newFolder/property/umdgc4pzjytdxxqxltxj.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075656/newFolder/property/ghkkqgutjylpepw2rxxu.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075661/newFolder/property/u12hsmbwt8wb0vpk9s4z.png', 'Eligendi ullam labor', 'Odit reprehenderit s', 'asdfs', 'publish', NULL, '2023-09-30 06:07:50', '2023-12-30 10:59:04'),
(12, 1, 1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697115177/newFolder/property/mypocochowta5hxjcajk.jpg', 'Ma residential Apartment updated', 'ma-residential-apartment-updated', '<p>Plants provide the oxygen we breathe. Plants are the basis of the food that nourishes us and the medicines that heal us. Plants are also our favored decoration indoors and out. We send plants as gifts, celebrate our joys and express our sympathies with flowers. We at The Plant Professionals are fortunate to work with plants every day. We enjoy them, nourish them and constantly seek new knowledge about them. We thrive on solving problems with plants and finding new ways to use plants to please people. Our palette continues to expand, along with our staff and our knowledge. Allow us to assist you when you have a desire or a need for plants or flowers. Our focus is on improving the lives of people through the use of plants. We understand the importance of great soils and drainage as the basis of plant health in both potted plants and garden plants. principles of design is essential to designing a landscape and working through the design process. A landscape is part of Earth&#39;s surface that can be viewed at one time from one place. It consists of the geographic features that mark, or are characteristic of, a particular area. A natural landscape is a part of landscape geography that entails the original view of land before humans act upon it. The elements in a natural landscape consist of a collection of landforms that are living or non-living, such as rocks, vegetation, trees, bodies of water, and soil. Although wind can blow trees away, fires burn vegetation, and floods move rocks, only human factors can cause a difference in a natural landscape. is, however, defined in quite different ways. conceives of landscape not as a mental construct but as an objectively</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075803/newFolder/property/j016yxvgmcfizc4p0xtg.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703915634/newFolder/property/ia8yjzoqnuykvdwrbyht.jpg', NULL, 'Baridhara J block,Dhaka', '3', '3.4 kata', 'south', '35 feet', 'Baganbari Limited', '2B+g+14', '4', '2', 'launch_date', NULL, 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075784/newFolder/property/nzcw9nikff8jaqu2wchk.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075789/newFolder/property/pjv41ydfklnn9gowxfss.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075794/newFolder/property/cer8brvyre7s3ednzp8j.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696075798/newFolder/property/px5loypj7xbf2v8bpagy.png', 'Ducimus non consequ', 'Minima dolore distin', 'cascsac', 'publish', NULL, '2023-09-30 06:10:07', '2023-12-30 10:53:55'),
(13, 3, 1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697115610/newFolder/property/dicg84tl31h2zm0p0vod.jpg', 'Lasuiet', 'lasuiet', '<p>Plants provide the oxygen we breathe. Plants are the basis of the food that nourishes us and the medicines that heal us. Plants are also our favored decoration indoors and out. We send plants as gifts, celebrate our joys and express our sympathies with flowers. We at The Plant Professionals are fortunate to work with plants every day. We enjoy them, nourish them and constantly seek new knowledge about them. We thrive on solving problems with plants and finding new ways to use plants to please people. Our palette continues to expand, along with our staff and our knowledge. Allow us to assist you when you have a desire or a need for plants or flowers. Our focus is on improving the lives of people through the use of plants. We understand the importance of great soils and drainage as the basis of plant health in both potted plants and garden plants. principles of design is essential to designing a landscape and working through the design process. A landscape is part of Earth&#39;s surface that can be viewed at one time from one place. It consists of the geographic features that mark, or are characteristic of, a particular area. A natural landscape is a part of landscape geography that entails the original view of land before humans act upon it. The elements in a natural landscape consist of a collection of landforms that are living or non-living, such as rocks, vegetation, trees, bodies of water, and soil. Although wind can blow trees away, fires burn vegetation, and floods move rocks, only human factors can cause a difference in a natural landscape. is, however, defined in quite different ways. conceives of landscape not as a mental construct but as an objectively</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696938096/newFolder/property/rid1s4wgtpgrckknsy61.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703916016/newFolder/property/hjsjqj1r4kdp95ttkbrc.jpg', NULL, 'Baridhara J block,Dhaka', '1', '3.4 kata', 'south', '35 feet', 'Baganbari Limited', '2B+g+14', '4', '2', 'launch_date', NULL, 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696655911/newFolder/property/j6h1wj46uvlspcavcju7.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696655916/newFolder/property/mohnqi7d3awyeircnfnh.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696655919/newFolder/property/aqwkcq7hn2nbnmhtlg74.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696077489/newFolder/property/qu7ii7sexakh99t0c2ib.png', 'Ducimus non consequ', 'Odit reprehenderit s', 'frtwefew', 'publish', NULL, '2023-09-30 06:38:17', '2023-12-30 11:00:17'),
(14, 4, 1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697115066/newFolder/property/s8qqdsjv186g4jozaenm.jpg', 'Qui esse quis volupt updated', 'qui-esse-quis-volupt-updated', '<p>Plants provide the oxygen we breathe. Plants are the basis of the food that nourishes us and the medicines that heal us. Plants are also our favored decoration indoors and out. We send plants as gifts, celebrate our joys and express our sympathies with flowers. We at The Plant Professionals are fortunate to work with plants every day. We enjoy them, nourish them and constantly seek new knowledge about them. We thrive on solving problems with plants and finding new ways to use plants to please people. Our palette continues to expand, along with our staff and our knowledge. Allow us to assist you when you have a desire or a need for plants or flowers. Our focus is on improving the lives of people through the use of plants. We understand the importance of great soils and drainage as the basis of plant health in both potted plants and garden plants. principles of design is essential to designing a landscape and working through the design process. A landscape is part of Earth&#39;s surface that can be viewed at one time from one place. It consists of the geographic features that mark, or are characteristic of, a particular area. A natural landscape is a part of landscape geography that entails the original view of land before humans act upon it. The elements in a natural landscape consist of a collection of landforms that are living or non-living, such as rocks, vegetation, trees, bodies of water, and soil. Although wind can blow trees away, fires burn vegetation, and floods move rocks, only human factors can cause a difference in a natural landscape. is, however, defined in quite different ways. conceives of landscape not as a mental construct but as an objectively<br />\r\n&nbsp;</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696657270/newFolder/property/kumzdlaia0xxbxspnuwb.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704098835/newFolder/property/xncftn72l6mcjpvbgnav.jpg', 'afas', 'Voluptas aut consect', '2', 'Et tempor dolor sunt', 'Possimus vel accusa', 'Fugiat eos labore', 'Architecto nesciunt', 'Anim sed sunt eius q', 'Ut tenetur cumque qu', 'Soluta cumque dolor', 'launch_date', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696400142/newFolder/property/xtfn5br4014pbjwmyp2l.png', 'https://www.youtube.com/watch?v=9SV_Myw4sQY', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696655877/newFolder/property/pttijklrswwajmmz213u.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696655882/newFolder/property/d3njfqkgdtu4ja27ncyj.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696655886/newFolder/property/axwmuouacwjmhjlhrdnz.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696400146/newFolder/property/dqwynwnw6hc84zpcssfu.png', 'Suscipit aut amet s', 'Aliquip tenetur labo', 'Ea non quidem volupt', 'publish', NULL, '2023-10-01 04:02:38', '2024-01-01 13:47:16'),
(20, 3, 1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697115030/newFolder/property/nqsiw4sbj2ig2c9evds4.jpg', 'Furnished Full apartment', 'furnished-full-apartment', '<p>Plants Provide The Oxygen We Breathe. Plants Are The Basis Of The Food That Nourishes Us And The Medicines That Heal Us. Plants Are Also Our Favored Decoration Indoors And Out. We Send Plants As Gifts, Celebrate Our Joys And Express Our Sympathies With Flowers. We At The Plant Professionals Are Fortunate To Work With Plants Every Day. We Enjoy Them, Nourish Them And Constantly Seek New Knowledge About Them. We Thrive On Solving Problems With Plants And Finding New Ways To Use Plants To Please People. Our Palette Continues To Expand, Along With Our Staff And Our Knowledge. Allow Us To Assist You When You Have A Desire Or A Need For Plants Or Flowers. Our Focus Is On Improving The Lives Of People Through The Use Of Plants. We Understand The Importance Of Great Soils And Drainage As The Basis Of Plant Health In Both Potted Plants And Garden Plants. Principles Of Design Is Essential To Designing A Landscape And Working Through The Design Process. A Landscape Is Part Of Earth&#39;s Surface That Can Be Viewed At One Time From One Place. It Consists Of The Geographic Features That Mark, Or Are Characteristic Of, A Particular Area. A Natural Landscape Is A Part Of Landscape Geography That Entails The Original View Of Land Before Humans Act Upon It. The Elements In A Natural Landscape Consist Of A Collection Of Landforms That Are Living Or Non-Living, Such As Rocks, Vegetation, Trees, Bodies Of Water, And Soil. Although Wind Can Blow Trees Away, Fires Burn Vegetation, And Floods Move Rocks, Only Human Factors Can Cause A Difference In A Natural Landscape. Is, However, Defined In Quite Different Ways. Conceives Of Landscape Not As A Mental Construct But As An Objectively</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696666759/newFolder/property/abwokkyvaseelqu94g9u.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1703916071/newFolder/property/ajwl3rko407newyjnw97.jpg', 'icon1', 'Baridhara J block,Dhaka', '2', '3.4 kata', 'south', '35 feet', 'Baganbari Limited', '2B+g+14', '4', '2', 'launch_date', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696666783/newFolder/property/hac9ylqjdmxwwfrius0s.png', 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696666743/newFolder/property/s9tkzzhezpaeo88oopg8.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696666747/newFolder/property/hvzt2ssvxplspc3wp17t.png;https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696666751/newFolder/property/mmfqrewwbuyke7xfixlg.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696666755/newFolder/property/l17vyvu9ofbdrvlgapi4.png', 'fwefwefe', 'fwefewfew', 'fewfewf', 'publish', NULL, '2023-10-07 02:19:46', '2023-12-30 11:01:12'),
(21, 3, 1, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700542539/newFolder/property/bqxeur0r7f2tnfhnbtlt.png', 'bwjobvwv', 'bwjobvwv', '<p>vwevwe</p>', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700542535/newFolder/property/yq7bk9n7uuo4fxdpv4re.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700542537/newFolder/property/ndahzxqlfcfd2qwmfffa.png', 'vewvwev', 'vwevwe', '2', 'Laudantium asperior', 'south', 'Cupiditate tempore', 'Cumque quis magnam d', 'Voluptatum fuga Vol', '4', '2', '27-Feb-1985', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700542540/newFolder/property/jdjscfsojreq5qfdofqs.png', 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700542529/newFolder/property/xteiduk7wqgz1gvcimqn.png', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1700542533/newFolder/property/wcdhhlfnjsaphojblv8o.png', 'Banani', 'ewfewf', 'fwefwef', 'publish', '2023-11-20 22:56:22', '2023-11-20 22:55:40', '2023-11-20 22:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `request_messages`
--

CREATE TABLE `request_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `package_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visit_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_messages`
--

INSERT INTO `request_messages` (`id`, `package_id`, `name`, `email`, `phone`, `company_name`, `visit_date`, `project_type`, `project_size`, `message`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, '3', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Residential Apartment', '12', 'awergarhy5rth', 'publish', NULL, '2023-10-03 05:06:03', '2023-10-03 22:46:19'),
(3, '4', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Commercial Space', '12', 'awergar', 'publish', NULL, '2023-10-03 05:06:48', '2023-10-03 06:20:51'),
(4, '2', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Commercial Space', '12', 'awergar', 'publish', NULL, '2023-10-11 06:59:05', '2023-10-11 06:59:05'),
(5, '0', 'Hasibul Islam Himel', 'admin@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Residential Apartment', '12', 'awergar', 'publish', NULL, '2023-10-11 07:08:24', '2023-10-11 07:08:24'),
(6, '2', 'Hasibul Islam Himel', 'admin@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Residential Apartment', '12', 'awergar', 'publish', NULL, '2023-10-11 07:10:44', '2023-10-11 07:10:44'),
(7, '1', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Residential Apartment', '12', 'awergar', 'publish', NULL, '2023-10-11 22:59:46', '2023-10-11 22:59:46'),
(8, '2', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Residential Apartment', '12', 'awergarhy5rth', 'publish', NULL, '2023-10-12 06:41:27', '2023-10-12 06:41:27'),
(9, '3', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Commercial Space', '12', 'Hey Can U meet', 'publish', NULL, '2023-10-14 04:14:36', '2023-10-14 04:14:36'),
(10, 'No Package', 'Hasibul Islam Himel', 'admin@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Commercial Space', '12', 'Hey Can U meet', 'publish', NULL, '2023-10-14 04:50:49', '2023-10-14 04:50:49'),
(11, 'No Package', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Commercial Space', '12', 'awergar', 'publish', NULL, '2023-10-14 04:52:36', '2023-10-14 04:52:36'),
(12, 'Quote Message', 'Hasibul Islam Himel', 'admin@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Commercial Space', '12', 'Hey Can U meet', 'publish', NULL, '2023-10-14 04:53:37', '2023-10-14 04:53:37'),
(13, '2', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Commercial Space', '12', 'awergarhy5rth', 'publish', NULL, '2023-10-14 04:54:58', '2023-10-14 04:54:58'),
(14, 'Quote Message', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Residential Apartment', '12', 'Hey Can U meet', 'publish', NULL, '2023-10-14 06:04:43', '2023-10-14 06:04:43'),
(15, '2', 'Hasibul Islam Himel', 'admin@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Commercial Space', '12', 'awergar', 'publish', NULL, '2023-10-15 04:10:36', '2023-10-15 04:10:36'),
(16, '20', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Residential Apartment', '12', 'awergar', 'publish', NULL, '2023-10-15 04:24:54', '2023-10-15 04:24:54'),
(17, '20', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Residential Apartment', '12', NULL, 'publish', NULL, '2023-10-16 06:06:07', '2023-10-16 06:06:07'),
(18, '2', 'Hasibul Islam Himel', 'himel.techdynobd@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Residential Apartment', '12', 'awergar', 'publish', NULL, '2023-11-05 05:04:10', '2023-11-05 05:04:10'),
(19, '1', 'Hasibul Islam Himel', 'admin@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', NULL, '12', 'awergarhy5rth', 'publish', NULL, '2023-11-14 23:41:23', '2023-11-14 23:41:23'),
(20, '1', 'sam', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '9-09/2021', NULL, '12', 'awergar', 'publish', NULL, '2023-11-14 23:42:57', '2023-11-14 23:42:57'),
(21, '1', 'sammi', 'admin@gmail.com', '01761833681', 'Hamid EnterPrise', '9-09-2021', 'Commercial Space', '12', 'awergarhy5rth', 'publish', NULL, '2023-11-14 23:47:10', '2023-11-14 23:47:10'),
(22, '4', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Commercial Space', '12', 'awergar', 'publish', NULL, '2023-11-19 01:46:31', '2023-11-19 01:46:31'),
(23, '2', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Residential Apartment', '12', 'awergar', 'publish', NULL, '2023-11-19 01:47:22', '2023-11-19 01:47:22'),
(24, 'Quote Message', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Residential Apartment', '12', 'awergar', 'publish', NULL, '2023-11-19 01:47:50', '2023-11-19 01:47:50'),
(25, '2', 'Hasibul Islam Himel', 'hasibulislam8381@gmail.com', '01761833681', 'Hamid EnterPrise', '23-12-1', 'Residential Apartment', '12', 'awergar', 'publish', NULL, '2023-11-19 01:52:34', '2023-12-17 10:36:13'),
(26, '2', 'Hasibul Islam Himel', 'molimoilondon@gmail.com', '01761833681', NULL, NULL, NULL, NULL, 'Baridhara J-block,Dhaka', 'publish', NULL, '2023-12-17 10:37:19', '2023-12-17 10:37:19'),
(28, '10', 'Samira khan mahi', 'hasibulislam8381@gmail.com', '01761833681', NULL, NULL, NULL, NULL, 'Baridhara J-block,Dhaka', 'publish', NULL, '2023-12-18 02:06:28', '2023-12-18 02:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `requirement_types`
--

CREATE TABLE `requirement_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requirement_types`
--

INSERT INTO `requirement_types` (`id`, `name`, `slug`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Residence Roof-top', 'roof-top-gardening', 'publish', NULL, '2023-09-30 04:07:11', '2023-12-14 13:26:48'),
(2, 'Commercial Roof-top', 'roof-top-gardening', 'publish', NULL, '2023-09-30 04:07:24', '2023-12-14 13:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `section_contents`
--

CREATE TABLE `section_contents` (
  `id` bigint UNSIGNED NOT NULL,
  `header` text COLLATE utf8mb4_unicode_ci,
  `sub_header` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `sec_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_head` text COLLATE utf8mb4_unicode_ci,
  `b_photo` text COLLATE utf8mb4_unicode_ci,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bradcamp` text COLLATE utf8mb4_unicode_ci,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `work_process_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `step_of_work_process_photo` text COLLATE utf8mb4_unicode_ci,
  `contact_background` text COLLATE utf8mb4_unicode_ci,
  `work_process` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `important_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `important_description` text COLLATE utf8mb4_unicode_ci,
  `meta_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_description` longtext COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'card',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `title_head`, `description_head`, `b_photo`, `logo`, `slug`, `photo`, `bradcamp`, `alt_text`, `description`, `work_process_photo`, `step_of_work_process_photo`, `contact_background`, `work_process`, `important_photo`, `important_description`, `meta_photo`, `m_title`, `m_keyword`, `m_description`, `type`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(16, 'Academic', NULL, NULL, NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1715080404/newFolder/services/roqt25uyfs3qplxhcw7q.png', 'academic', NULL, NULL, NULL, '<p>CGPa:3.59</p>\r\n\r\n<p>International University Of Business Agriculture and Technology</p>\r\n\r\n<p>Year:2022</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'card', 'publish', NULL, '2024-05-07 05:13:13', '2024-05-07 05:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Hasibul Islam Himel', 'admin@gmail.com', 'publish', NULL, '2023-09-26 23:32:33', '2023-09-26 23:32:33'),
(4, 'Hasibul Islam Himel', 'admin@gmail.com', 'publish', NULL, '2023-10-03 06:36:50', '2023-10-03 06:36:50'),
(5, 'Hasibul Islam Himel', 'admin@gmail.com', 'publish', NULL, '2023-10-10 23:27:49', '2023-10-10 23:27:49'),
(6, NULL, 'admin@gmail.com', 'publish', '2023-11-26 16:55:32', '2023-11-20 22:46:13', '2023-11-26 16:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `title`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, '<p><strong>License to use website</strong></p>\r\n\r\n<p>&nbsp;Unless otherwise stated, Rents.com.bd and/or its licensors own all intellectual property rights contained within this website, and all material on the website. Subject to the license below, all these intellectual property rights are reserved.</p>\r\n\r\n<p>You may view, download for caching purposes only, and print pages [or other content] from the website for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.</p>\r\n\r\n<p><strong>Acceptable use&nbsp;</strong><strong>You MUST NOT:</strong></p>\r\n\r\n<ul>\r\n	<li>&bull; Republish material from this website in any form, including reproduction on any other website.</li>\r\n	<li>&bull;Sell, rent or sub-license any material from this website.</li>\r\n	<li>&bull; Present or reproduce any material from this website in public, either on or offline.</li>\r\n	<li>&bull;Reproduce, duplicate, copy or otherwise exploit material on this website for any commercial purposes.</li>\r\n	<li>&bull;Edit or otherwise modify any material on the website for any purposes.</li>\r\n	<li>&bull;Redistribute material from this website, except for content where consent has been expressly made for specific redistribution. Where content is specifically made available for redistribution and consent is given for redistribution for these purposes, it may only be redistributed by you/your company under the conditions set out in the terms set by the Rents.com.bd</li>\r\n	<li>&bull; Use this website to copy, store, host, transmit, send, use, publish or distribute any material which consists of, or is linked to, any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit or other malicious computer software.</li>\r\n	<li>&bull; Use this website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website; or in any way that is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity.</li>\r\n	<li>&bull; Conduct any systematic or automated data collection activities (including, but not limited to, scraping, data mining, data extraction and data harvesting) on, or in relation to this website, without the express written consent of Rents.com.bd</li>\r\n</ul>\r\n\r\n<p><strong>Restricted access</strong></p>\r\n\r\n<p>Access to certain areas of this website is restricted. Rents.com.bd reserves the right to restrict access to this and to any other areas of this website, or indeed this entire website, at the discretion of the Rents.com.bd</p>\r\n\r\n<p><strong>User-generated content</strong></p>\r\n\r\n<p>In these terms and conditions, &ldquo;your user content&rdquo; means any material (including, but not limited to, images, audio material, video material and audio-visual material) that you submit to this website, for whatever purpose. You grant to the Rents.com.bd a worldwide, irrevocable, non-exclusive, royalty-free license to use, reproduce, adapt, publish, translate and distribute your user content in any existing or future media. You also grant to the Rents.com.bd the right to sub-license these rights, and the right to bring an action for infringement of these rights.</p>\r\n\r\n<p>Your user content must not be illegal or unlawful, must not infringe any third party&rsquo;s legal rights, and must not be capable of giving rise to legal action whether against you or the Rents.com.bd or a third party (in each case under any applicable law).</p>\r\n\r\n<p>You must not submit any user content to the website that is, or has ever been, the subject of any legal proceedings, threatened or actual, or other official complaint.</p>\r\n\r\n<p>Rents.com.bd reserves the right to edit or remove any material submitted to this website, or stored on the Rents.com.bd servers, or hosted or published upon this website.</p>\r\n\r\n<p>Notwithstanding the Rents.com.bd rights under these terms and conditions relating to user content, the Rents.com.bd does not monitor the submission of such content to, or the publication of such content on, this website.</p>', 'publish', NULL, '2023-10-10 00:44:48', '2023-10-10 00:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'Hasibul Islam Himel', 'admin@gmail.com', NULL, '$2y$10$Y4.bv1JxOhlDEiOzg.Yt2Ogo0cOnXVIDlnfysiq49g9vky0eN.C.6', 'mFC01mbkPUAZ00cg95X9aNnPdVjnTp0p5rWy2NUHaBeOo4BMiHbxHhkcTljo', '2023-09-23 22:54:53', '2023-09-23 22:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_galleries`
--

INSERT INTO `video_galleries` (`id`, `title`, `slug`, `photo`, `alt_text`, `video`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '10 lakhs laxary flat', '10-lakhs-laxary-flat', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696918716/newFolder/videoGallery/nmj8ddr2zugfiags1ya4.png', 'icon1', 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'publish', NULL, '2023-10-10 00:18:38', '2023-10-10 00:18:38'),
(2, 'Laxary Apartment', 'laxary-apartment', 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1696918744/newFolder/videoGallery/f8vbdgh8zawndhri1tsy.png', 'icon1', 'https://www.youtube.com/watch?v=Vw6utYElVFg', 'publish', NULL, '2023-10-10 00:19:06', '2023-10-10 00:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `why_baganbaris`
--

CREATE TABLE `why_baganbaris` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_photo` text COLLATE utf8mb4_unicode_ci,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'card',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_baganbaris`
--

INSERT INTO `why_baganbaris` (`id`, `title`, `slug`, `description`, `photo`, `b_photo`, `alt_text`, `head`, `card_description`, `status`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'WHY BAGANBARI LANDSCAPING LIMITED...?', '', '<ul>\r\n	<li><big><strong>Artistic Design </strong></big>Artistic design encompasses various creative disciplines, including visual arts, graphic design, industrial design, and fashion design. While each field has specific considerations, some general design details are important across various artistic disciplines.</li>\r\n	<li><big><strong>Innovation&nbsp;</strong><small>At its core, innovation is the transformation of ideas into tangible and valuable solutions. It encompasses the development of novel products, services, processes, or methodologies that enhance efficiency, effectiveness, and overall well-being.</small></big></li>\r\n	<li><big><strong>Collaboration&nbsp;</strong><small>&nbsp;Innovation thrives on collaboration. Cross-disciplinary teamwork brings together diverse perspectives, skill sets, and experiences, fostering a fertile ground for the generation of groundbreaking ideas.</small></big></li>\r\n	<li><big><strong>Quality&nbsp;</strong><small>Furthermore, quality articles are more likely to be shared and referenced by others, increasing visibility and establishing the author&#39;s authority in their field.</small></big></li>\r\n	<li><big><strong>Commitment&nbsp;</strong><small>Commitment is more than a promise to do or give something.</small></big></li>\r\n</ul>', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1704099997/newFolder/whyBaganbari/sxtx1onou2irsztqdssi.jpg', NULL, NULL, NULL, 'publish', 'heading', NULL, NULL, '2024-01-01 14:06:38'),
(4, NULL, 'experience', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702890659/newFolder/whyBaganbari/huiukxa1zhvq5hjwyb18.png', NULL, 'icon1', 'EXPERIENCE', '<p>Baganbari Landscaping Ltd. is a stop gardening service provider company. We have been providing professional landscaping services since 2016. We have completed 2250+ Landscape projects with 320+ Corporate clients in the last 8 years.</p>', 'publish', 'card', NULL, '2023-09-25 03:12:52', '2023-12-18 14:11:00'),
(5, NULL, 'trust', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702890676/newFolder/whyBaganbari/xgohz8neb4lwoeopv9ce.png', NULL, NULL, 'TRUST', '<p>Our landscape team is committed to providing you with the best landscaping solutions in the city. Be it commercial or residential landscape our professional team will plan, 3d design, implementation, and garden maintenance the way to your dream.</p>', 'publish', 'card', NULL, '2023-09-25 04:57:09', '2023-12-18 14:11:16'),
(6, NULL, 'design', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702890693/newFolder/whyBaganbari/k2qigpvtzd4tdwfupj1u.png', NULL, NULL, 'DESIGN', '<p>Baganbari Landscaping Ltd. has a professional team of architects, planners, and executioners. We combine our knowledge and your vision to create functional, creative, and innovative environments tailored to your budget and tastes. our skilled designers and construction teams work to beautify places based on environmental data, your specifications, and the requirements of your space.</p>', 'publish', 'card', NULL, '2023-09-25 04:57:20', '2023-12-23 10:01:32'),
(7, NULL, 'quality', NULL, 'https://res.cloudinary.com/dmlmcjkxa/image/upload/v1702890705/newFolder/whyBaganbari/toiasvakozjxsilfrri2.png', NULL, 'icon1', 'QUALITY', '<p>We are committed to producing long-lasting, high-quality landscapes. Attention to detail, craftsmanship, and a drive for quality characterize our work.</p>', 'publish', 'card', NULL, '2023-09-25 04:57:36', '2023-12-18 14:11:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board_of_directors`
--
ALTER TABLE `board_of_directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dream_with_us`
--
ALTER TABLE `dream_with_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `features_property_id_foreign` (`property_id`);

--
-- Indexes for table `general_infos`
--
ALTER TABLE `general_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_services`
--
ALTER TABLE `latest_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaf_controllers`
--
ALTER TABLE `leaf_controllers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission_visions`
--
ALTER TABLE `mission_visions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_clients`
--
ALTER TABLE `our_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_stories`
--
ALTER TABLE `our_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages_details`
--
ALTER TABLE `packages_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_categories`
--
ALTER TABLE `package_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_types`
--
ALTER TABLE `package_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_category_id_foreign` (`category_id`),
  ADD KEY `properties_requirement_type_id_foreign` (`requirement_type_id`);

--
-- Indexes for table `request_messages`
--
ALTER TABLE `request_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirement_types`
--
ALTER TABLE `requirement_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_contents`
--
ALTER TABLE `section_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_baganbaris`
--
ALTER TABLE `why_baganbaris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `board_of_directors`
--
ALTER TABLE `board_of_directors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dream_with_us`
--
ALTER TABLE `dream_with_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `general_infos`
--
ALTER TABLE `general_infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `latest_services`
--
ALTER TABLE `latest_services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leaf_controllers`
--
ALTER TABLE `leaf_controllers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `metas`
--
ALTER TABLE `metas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `mission_visions`
--
ALTER TABLE `mission_visions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_clients`
--
ALTER TABLE `our_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_stories`
--
ALTER TABLE `our_stories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `packages_details`
--
ALTER TABLE `packages_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `package_categories`
--
ALTER TABLE `package_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `package_types`
--
ALTER TABLE `package_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `request_messages`
--
ALTER TABLE `request_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `requirement_types`
--
ALTER TABLE `requirement_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section_contents`
--
ALTER TABLE `section_contents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `why_baganbaris`
--
ALTER TABLE `why_baganbaris`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `features_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `properties_requirement_type_id_foreign` FOREIGN KEY (`requirement_type_id`) REFERENCES `requirement_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
