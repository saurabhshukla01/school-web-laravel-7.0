-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 09:23 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolweb_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `type`, `mobile`, `email`, `email_verified_at`, `password`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin panel', 'admin', '7290944755', 'admin@gmail.com', NULL, '$2y$10$8z6zKNzRISpsCtt3UBMofu71qmEGLdYUM2shP/.adUWSDx.cWE9Nu', '915889.jpg', 1, NULL, NULL, '2020-08-07 08:52:39'),
(2, 'Saurabh shukla', 'subadmin', '7290944755', 'saurabh@gmail.com', NULL, '$2y$10$8z6zKNzRISpsCtt3UBMofu71qmEGLdYUM2shP/.adUWSDx.cWE9Nu', '540807.jpg', 1, NULL, NULL, '2020-08-07 08:50:29'),
(3, 'abhi', 'subadmin', '7290944755', 'abhi@gmail.com', NULL, '$2y$10$8z6zKNzRISpsCtt3UBMofu71qmEGLdYUM2shP/.adUWSDx.cWE9Nu', '74024.jpg', 1, NULL, NULL, '2020-08-07 08:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `eventcategories`
--

CREATE TABLE `eventcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eventcategories`
--

INSERT INTO `eventcategories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Music', 1, '2020-08-08 02:52:12', '2020-08-08 09:09:48'),
(2, 'Visual Arts', 1, '2020-08-08 02:52:25', '2020-08-08 09:09:47'),
(3, 'Performing Arts', 1, '2020-08-08 02:52:36', '2020-08-08 09:09:45'),
(4, 'Film', 1, '2020-08-08 02:57:43', '2020-08-08 02:57:43'),
(5, 'Lectures And  Books', 1, '2020-08-08 02:58:34', '2020-08-08 02:58:34'),
(6, 'Fashion', 1, '2020-08-08 02:58:52', '2020-08-08 02:58:52'),
(7, 'Food And Drink', 1, '2020-08-08 02:59:11', '2020-08-08 02:59:11'),
(8, 'Festivals And Fairs', 1, '2020-08-08 03:05:33', '2020-08-08 09:09:55'),
(9, 'Charities', 1, '2020-08-08 03:49:21', '2020-08-08 09:09:54'),
(10, 'Sports And Active Life', 1, '2020-08-08 03:49:42', '2020-08-08 09:09:51'),
(11, 'Nightlife', 1, '2020-08-08 03:50:07', '2020-08-08 09:09:50'),
(12, 'Kids And Family', 1, '2020-08-08 03:50:28', '2020-08-08 09:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_category` int(11) NOT NULL,
  `event_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upcoming_event` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_title`, `event_category`, `event_location`, `event_image`, `event_date`, `start_time`, `end_time`, `description`, `upcoming_event`, `status`, `created_at`, `updated_at`) VALUES
(2, 'All School Production, an extravaganza of singing, dancing and acting', 1, 'Noida', '179575.jpg', '2020-08-05', '12:48:00', '03:51:00', 'In the winter trimester, our attention turns to The All School Production, an extravaganza of singing, dancing and acting. It brings together the hard work and dedication of students, teachers, and parents from both schools and of all ages, from elementary, middle and high school. Students and staff work together on performing, creating props and sets, making costumes, working on lights, sound, hair, make-up, posters, tickets… the list goes on. The work culminates with four performances in the middle of February and is another event in which new skills and talents are discovered while creating friendships and memories to last a lifetime.', 'No', 1, '2020-08-08 10:45:36', '2020-08-09 01:02:21'),
(3, 'The countdown is on to the big two-schools-together event of the winter trimester', 8, 'Greater Noida', '195998.jpg', '2020-08-07', '12:49:00', '13:50:00', 'The countdown is on to the big two-schools-together event of the winter trimester - the All School Production. Cast and crew are looking forward to entertaining you with 4 performances which will be quite different from anything you have seen before in the school theatre! Enter the Caribbean world of peasant girl Ti Moune and rich city boy Daniel. They have fallen in love, but on their tropical island the all-powerful gods are playing games with their lives and will ultimately decide their fates. This tropical re-telling of The Little Mermaid has minimal props and sets and, with our first every attempt at creating a theatre in the round - where the audience surrounds the stage - you will be completely transported to a tropical world which moves to a calypso beat.', 'No', 1, '2020-08-08 10:46:58', '2020-08-09 01:02:45'),
(4, 'SOIS students and elementary-age children, and ¥1800 for adults', 12, 'Kanpur', '62673.jpg', '2020-08-02', '23:52:00', '11:51:00', 'SOIS students and elementary-age children, and ¥1800 for adults All photos are the property of SOILS and are provided here as a courtesy to parents and students. We ask you to respect the rights of the students, parents, and staff in these pictures by ensuring that no photographs or images are redistributed or modified in any way. All photos are the property of SOILS and are provided here as a courtesy to parents and students. We ask you to respect the rights of the students, parents, and staff in these pictures by ensuring that no photographs or images are redistributed or modified in any way.', 'No', 1, '2020-08-08 10:50:35', '2020-08-09 01:03:05'),
(5, 'An added bonus is that all profits from the day go towards school improvement projects', 12, 'Unnao', '522357.jpg', '2020-07-29', '22:52:00', '11:53:00', 'Held in November, the International Fair brings together the formidable organizational power of our two Parent Associations. Showcasing the multicultural nature of our community, it offers foods, performances, games and goods from around the world ensuring a fun-filled day out for all. An added bonus is that all profits from the day go towards school improvement projects.', 'No', 1, '2020-08-08 10:51:59', '2020-08-09 01:51:08'),
(6, 'our attention turns to The All School Production, an extravaganza of singing, dancing and acting', 12, 'Guwahati', '215054.jpg', '2020-07-26', '00:05:00', '16:05:00', 'In the winter trimester, our attention turns to The All School Production, an extravaganza of singing, dancing and acting. It brings together the hard work and dedication of students, teachers, and parents from both schools and of all ages, from elementary, middle and high school. Students and staff work together on performing, creating props and sets, making costumes, working on lights, sound, hair, make-up, posters, tickets… the list goes on. The work culminates with four performances in the middle of February and is another event in which new skills and talents are discovered while creating friendships and memories to last a lifetime.', 'Yes', 1, '2020-08-08 23:06:19', '2020-08-09 01:51:24'),
(10, 'The Events Planning Student Coordinator reports directly to the Events Planning Coordinator', 12, 'Dehli', '139644.jpg', '2020-08-13', '01:47:00', '05:47:00', 'The Events Planning Student Coordinator reports directly to the Events Planning Coordinator. This\r\nposition is responsible for assisting students, departments, and campus offices in planning, coordinating,\r\nand executing successful events. Specifically, the coordinating of events for student organization regular\r\nmeetings and special events are the duties of this position. The Coordinator will manage online room\r\nreservations, update online request forms as necessary, and assist with event reservations and client\r\ncommunication via email, phone, and walk-ins. Supporting the Events Planning Staff with administrative\r\nand operational projects, taking reservations, copying, and answering phones are a significant part of this\r\nposition, as well as other clerical and administrative duties that may be assigned from time to time.', 'No', 1, '2020-08-09 00:48:06', '2020-08-09 01:09:37'),
(11, 'We have four major school events which are held annually and see the communities of our two schools working side by side', 8, 'Kanpur', '313539.jpg', '2020-08-04', '13:11:00', '16:13:00', 'The Event Planning Student Coordinator responsibilities include attending Event Planning meetings as\r\nneeded. Also, the Student Coordinator must participate in a paid fall training (approximately six days\r\nprior to fall quarter), all-staff training, and be subject to quarterly reviews by the Event Planning\r\nCoordinator. Participation in a pre-year, mid-year, and post-year learning assessment, and attendance at\r\nstaff development and advancement opportunities throughout the academic year are required.', 'Yes', 1, '2020-08-09 01:11:54', '2020-08-09 01:44:51'),
(12, 'Understands all general tasks and responsibilities of being a Student Coordinator', 8, 'USA', '621440.jpg', '2020-08-21', '15:14:00', '18:14:00', 'Understands all general tasks and responsibilities of being a Student Coordinator\r\nUnderstands all specific tasks and directions required for a current shift, including completion of daily\r\ncommunication sheets, taking reservations, and making necessary copies and correspondence\r\nWilling to ask questions and make comments to better develop knowledge and abilities in Coordinator role\r\nAttends personal and staff development opportunities willingly and with an open mind\r\nUnderstands all general tasks and responsibilities of being a Student Coordinator\r\nUnderstands all specific tasks and directions required for a current shift, including completion of daily\r\ncommunication sheets, taking reservations, and making necessary copies and correspondence\r\nWilling to ask questions and make comments to better develop knowledge and abilities in Coordinator role\r\nAttends personal and staff development opportunities willingly and with an open mind', 'No', 1, '2020-08-09 01:14:29', '2020-08-09 01:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_07_032223_create_admins_table', 2),
(5, '2020_08_08_050917_create_eventcategories_table', 3),
(6, '2020_08_08_121055_create_events_table', 4),
(7, '2020_08_08_135738_add_column_to_events', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user@gmail.com', '$2y$10$TQzDiaNW4p7yQkuMa16gLe5cg.CCs88NgA7YEQ4svS0EdN2TcTF7e', '2020-08-06 03:59:50'),
('saurabh@gmail.com', '$2y$10$nH/vg1gw9RAbCXxV6SRs9.oAWslRvqKdcA3JTMYL4dL5QHblx02tq', '2020-08-06 04:14:51');

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
(1, 'Saurabh Shukla', 'saurabh@gmail.com', NULL, '$2y$10$uhN4z6dtwoHlhYxKBdzemOMDeYM9HmNo16NQ.aoUBF446m/X0WceW', NULL, '2020-08-06 02:55:52', '2020-08-06 02:55:52'),
(2, 'User', 'user@gmail.com', NULL, '$2y$10$mcoFyfWKlRwabniVa7GileeW5EnivBYdsiOg1AQF0PxBLE0qJVdu.', NULL, '2020-08-06 03:32:50', '2020-08-06 03:32:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `eventcategories`
--
ALTER TABLE `eventcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventcategories`
--
ALTER TABLE `eventcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
