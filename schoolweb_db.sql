-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 06:47 PM
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
(3, 'Abhi kumar shukla', 'subadmin', '7290944755', 'abhi@gmail.com', NULL, '$2y$10$8z6zKNzRISpsCtt3UBMofu71qmEGLdYUM2shP/.adUWSDx.cWE9Nu', '74024.jpg', 1, NULL, NULL, '2020-08-11 22:36:38');

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
(1, 'our attention turns to The All School Production, an extravaganza of singing, dancing and acting', 12, 'Guwahati', '215054.jpg', '2020-07-26', '00:05:00', '16:05:00', 'In the winter trimester, our attention turns to The All School Production, an extravaganza of singing, dancing and acting. It brings together the hard work and dedication of students, teachers, and parents from both schools and of all ages, from elementary, middle and high school. Students and staff work together on performing, creating props and sets, making costumes, working on lights, sound, hair, make-up, posters, tickets… the list goes on. The work culminates with four performances in the middle of February and is another event in which new skills and talents are discovered while creating friendships and memories to last a lifetime.', 'Yes', 1, '2020-08-08 23:06:19', '2020-08-12 01:23:36'),
(2, 'All School Production, an extravaganza of singing, dancing and acting', 1, 'Noida', '179575.jpg', '2020-08-05', '12:48:00', '03:51:00', 'In the winter trimester, our attention turns to The All School Production, an extravaganza of singing, dancing and acting. It brings together the hard work and dedication of students, teachers, and parents from both schools and of all ages, from elementary, middle and high school. Students and staff work together on performing, creating props and sets, making costumes, working on lights, sound, hair, make-up, posters, tickets… the list goes on. The work culminates with four performances in the middle of February and is another event in which new skills and talents are discovered while creating friendships and memories to last a lifetime.', 'No', 1, '2020-08-08 10:45:36', '2020-08-12 01:23:37'),
(3, 'The countdown is on to the big two-schools-together event of the winter trimester', 8, 'Greater Noida', '195998.jpg', '2020-08-07', '12:49:00', '13:50:00', 'The countdown is on to the big two-schools-together event of the winter trimester - the All School Production. Cast and crew are looking forward to entertaining you with 4 performances which will be quite different from anything you have seen before in the school theatre! Enter the Caribbean world of peasant girl Ti Moune and rich city boy Daniel. They have fallen in love, but on their tropical island the all-powerful gods are playing games with their lives and will ultimately decide their fates. This tropical re-telling of The Little Mermaid has minimal props and sets and, with our first every attempt at creating a theatre in the round - where the audience surrounds the stage - you will be completely transported to a tropical world which moves to a calypso beat.', 'Yes', 1, '2020-08-08 10:46:58', '2020-08-12 01:23:38'),
(4, 'SOIS students and elementary-age children, and ¥1800 for adults', 12, 'Kanpur', '62673.jpg', '2020-08-02', '23:52:00', '11:51:00', 'SOIS students and elementary-age children, and ¥1800 for adults All photos are the property of SOILS and are provided here as a courtesy to parents and students. We ask you to respect the rights of the students, parents, and staff in these pictures by ensuring that no photographs or images are redistributed or modified in any way. All photos are the property of SOILS and are provided here as a courtesy to parents and students. We ask you to respect the rights of the students, parents, and staff in these pictures by ensuring that no photographs or images are redistributed or modified in any way.', 'No', 1, '2020-08-08 10:50:35', '2020-08-12 01:23:40'),
(5, 'An added bonus is that all profits from the day go towards school improvement projects', 12, 'Unnao', '522357.jpg', '2020-07-29', '22:52:00', '11:53:00', 'Held in November, the International Fair brings together the formidable organizational power of our two Parent Associations. Showcasing the multicultural nature of our community, it offers foods, performances, games and goods from around the world ensuring a fun-filled day out for all. An added bonus is that all profits from the day go towards school improvement projects.', 'No', 1, '2020-08-08 10:51:59', '2020-08-12 01:23:41'),
(6, 'We have four major school events which are held annually and see the communities of our two schools working side by side', 8, 'Kanpur', '414395.jpg', '2020-08-04', '13:11:00', '16:13:00', 'The Event Planning Student Coordinator responsibilities include attending Event Planning meetings as\r\nneeded. Also, the Student Coordinator must participate in a paid fall training (approximately six days\r\nprior to fall quarter), all-staff training, and be subject to quarterly reviews by the Event Planning\r\nCoordinator. Participation in a pre-year, mid-year, and post-year learning assessment, and attendance at\r\nstaff development and advancement opportunities throughout the academic year are required.', 'Yes', 1, '2020-08-09 01:11:54', '2020-08-12 01:23:43'),
(7, 'The Events Planning Student Coordinator reports directly to the Events Planning Coordinator', 12, 'Dehli', '139644.jpg', '2020-08-13', '01:47:00', '05:47:00', 'The Events Planning Student Coordinator reports directly to the Events Planning Coordinator. This\r\nposition is responsible for assisting students, departments, and campus offices in planning, coordinating,\r\nand executing successful events. Specifically, the coordinating of events for student organization regular\r\nmeetings and special events are the duties of this position. The Coordinator will manage online room\r\nreservations, update online request forms as necessary, and assist with event reservations and client\r\ncommunication via email, phone, and walk-ins. Supporting the Events Planning Staff with administrative\r\nand operational projects, taking reservations, copying, and answering phones are a significant part of this\r\nposition, as well as other clerical and administrative duties that may be assigned from time to time.', 'No', 1, '2020-08-09 00:48:06', '2020-08-12 01:23:44'),
(8, 'Understands all general tasks and responsibilities of being a Student Coordinator', 8, 'USA', '621440.jpg', '2020-08-21', '15:14:00', '18:14:00', 'Understands all general tasks and responsibilities of being a Student Coordinator\r\nUnderstands all specific tasks and directions required for a current shift, including completion of daily\r\ncommunication sheets, taking reservations, and making necessary copies and correspondence\r\nWilling to ask questions and make comments to better develop knowledge and abilities in Coordinator role\r\nAttends personal and staff development opportunities willingly and with an open mind\r\nUnderstands all general tasks and responsibilities of being a Student Coordinator\r\nUnderstands all specific tasks and directions required for a current shift, including completion of daily\r\ncommunication sheets, taking reservations, and making necessary copies and correspondence\r\nWilling to ask questions and make comments to better develop knowledge and abilities in Coordinator role\r\nAttends personal and staff development opportunities willingly and with an open mind', 'Yes', 1, '2020-08-09 01:14:29', '2020-08-12 01:23:46');

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
-- Table structure for table `gallaries_tables`
--

CREATE TABLE `gallaries_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_category_id` int(11) NOT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallary_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallary_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latest_image_video` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallaries_tables`
--

INSERT INTO `gallaries_tables` (`id`, `school_category_id`, `image_title`, `gallary_image`, `gallary_video`, `latest_image_video`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Class room image', '405257.jpg', '6689986.mp4', 'Yes', 1, '2020-08-12 10:01:13', '2020-08-12 10:56:56'),
(2, 9, 'Second Class room', '419255.jpg', '9454018.mp4', 'Yes', 1, '2020-08-12 10:01:55', '2020-08-12 10:58:36'),
(3, 2, 'Third Class room', '371587.jpg', '', 'No', 1, '2020-08-12 10:02:22', '2020-08-12 10:02:22'),
(4, 2, 'Fourth Class room', '264192.jpg', '', 'Yes', 1, '2020-08-12 10:02:49', '2020-08-12 10:02:49'),
(5, 2, 'Fifth Class room', '766932.jpg', '', 'Yes', 1, '2020-08-12 10:03:26', '2020-08-12 10:03:26'),
(6, 9, 'Sixth Class room', '416537.jpg', '4913386.mp4', 'No', 1, '2020-08-12 10:04:34', '2020-08-12 10:58:19'),
(7, 9, 'First Library', '195485.jpg', '2773416.mp4', 'Yes', 1, '2020-08-12 10:50:33', '2020-08-12 10:58:06'),
(8, 9, 'Second Library', '942187.jpg', '139222.mp4', 'No', 1, '2020-08-12 10:51:22', '2020-08-12 10:57:44'),
(9, 9, 'Third Library', '748985.jpg', '8869769.mp4', 'Yes', 1, '2020-08-12 10:51:57', '2020-08-12 10:57:31'),
(10, 9, 'Fourth Library', '324050.jpg', '1227577.mp4', 'Yes', 1, '2020-08-12 10:52:21', '2020-08-12 10:56:44'),
(11, 4, 'First Auditorium', '841625.jpg', '', 'Yes', 1, '2020-08-12 11:07:43', '2020-08-12 11:07:43'),
(12, 4, 'Second Auditorium', '965444.jpg', '', 'No', 1, '2020-08-12 11:08:12', '2020-08-12 11:08:12'),
(13, 4, 'Third Auditorium', '488455.jpg', '', 'Yes', 1, '2020-08-12 11:08:39', '2020-08-12 11:08:39'),
(14, 4, 'Fourth Auditorium', '492736.jpg', '', 'Yes', 1, '2020-08-12 11:09:13', '2020-08-12 11:09:13'),
(15, 7, 'First Staff room', '783444.jpg', '', 'Yes', 1, '2020-08-12 11:12:23', '2020-08-12 11:12:23'),
(16, 7, 'Second Staff room', '254857.jpg', '', 'Yes', 1, '2020-08-12 11:12:54', '2020-08-12 11:12:54'),
(17, 7, 'Third Staff room', '738330.jpg', '', 'Yes', 1, '2020-08-12 11:13:27', '2020-08-12 11:13:27'),
(18, 6, 'Sports One', '563744.jpg', '', 'Yes', 1, '2020-08-12 11:14:04', '2020-08-12 11:14:04'),
(19, 6, 'Sports Two', '647850.jpg', '', 'Yes', 1, '2020-08-12 11:14:36', '2020-08-12 11:14:36'),
(20, 6, 'Sports Three', '303691.jpg', '4677775.mp4', 'Yes', 1, '2020-08-12 11:15:14', '2020-08-12 11:15:14');

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
(7, '2020_08_08_135738_add_column_to_events', 5),
(8, '2020_08_09_114858_create_newscategories_table', 6),
(9, '2020_08_09_121036_create_newses_table', 6),
(10, '2020_08_09_134723_remove_evnet_location_from_newses', 7),
(11, '2020_08_09_135612_remove_event_location_from_newses', 8),
(12, '2020_08_10_035744_create_subjectcategories_table', 9),
(13, '2020_08_10_084409_create_teacheres_table', 10),
(14, '2020_08_10_112357_update_mobile_from_teacheres', 11),
(15, '2020_08_10_115832_add_mobile_to_teacheres_table', 12),
(16, '2020_08_11_035855_add_description_to_subjectcategories_table', 13),
(17, '2020_08_12_092927_create_schoolcategories_table', 14),
(18, '2020_08_12_105733_create_gallaries_tables', 15);

-- --------------------------------------------------------

--
-- Table structure for table `newscategories`
--

CREATE TABLE `newscategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newscategories`
--

INSERT INTO `newscategories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Health and medicine', 1, '2020-08-07 18:30:00', '2020-08-07 18:30:00'),
(2, 'Humanities and history', 1, '2020-08-07 18:30:00', '2020-08-07 18:30:00'),
(3, 'Justice and poverty', 1, '2020-08-07 18:30:00', '2020-08-07 18:30:00'),
(4, 'Language and literature', 1, '2020-08-07 18:30:00', '2020-08-07 18:30:00'),
(5, 'News and politics', 1, '2020-08-07 18:30:00', '2020-08-07 18:30:00'),
(6, 'Science and technology', 1, '2020-08-07 18:30:00', '2020-08-07 18:30:00'),
(7, 'Society and culture', 1, '2020-08-07 18:30:00', '2020-08-07 18:30:00'),
(8, 'Teaching and education', 1, '2020-08-07 18:30:00', '2020-08-07 18:30:00'),
(9, 'Sports News', 1, '2020-08-07 18:30:00', '2020-08-07 18:30:00'),
(10, 'Business and Company News', 1, '2020-08-07 18:30:00', '2020-08-07 18:30:00'),
(11, 'News and methods of journalism', 1, '2020-08-07 18:30:00', '2020-08-07 18:30:00'),
(12, 'News Blog', 1, '2020-08-09 08:08:07', '2020-08-09 08:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `newses`
--

CREATE TABLE `newses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_category` int(11) NOT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_date` date DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upcoming_news` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newses`
--

INSERT INTO `newses` (`id`, `news_title`, `news_category`, `news_image`, `news_date`, `description`, `upcoming_news`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jacinda Ardern, prime minister of New Zealand, hugs a mosque-goer at the Kilbirnie mosque in Wellington', 3, '774181.jpg', '2020-08-04', 'Jacinda Ardern, prime minister of New Zealand, hugs a mosque-goer at the Kilbirnie mosque in Wellington, on March 17, 2019. Earlier that day, 51 people were killed and another 49 were injured in shooting attacks on two mosques in Christchurch—the worst mass shooting and terror attack in New Zealand\'s history. Jacinda Ardern, prime minister of New Zealand, hugs a mosque-goer at the Kilbirnie mosque in Wellington, on March 17, 2019. Earlier that day, 51 people were killed and another 49 were injured in shooting attacks on two mosques in Christchurch—the worst mass shooting and terror attack in New Zealand\'s history.', 'Yes', 1, '2020-08-09 09:51:23', '2020-08-09 09:51:23'),
(2, 'The spire of Notre-Dame collapses as the cathedral is engulfed in flames in central Paris on April 15, 2019', 2, '3779.jpg', '2020-04-15', 'The spire of Notre-Dame collapses as the cathedral is engulfed in flames in central Paris on April 15, 2019. Much of the roof collapsed in the fire, which ignited during renovations. President Emmanuel Macron immediately indicated that the cathedral would be rebuilt, but the method and form of the reconstruction became a political battle, with one side favoring modern redesigns, and the other advocating for an exact replica of the previous structure.\r\nThe spire of Notre-Dame collapses as the cathedral is engulfed in flames in central Paris on April 15, 2019. Much of the roof collapsed in the fire, which ignited during renovations. President Emmanuel Macron immediately indicated that the cathedral would be rebuilt, but the method and form of the reconstruction became a political battle, with one side favoring modern redesigns, and the other advocating for an exact replica of the previous structure.', 'No', 1, '2020-08-09 09:53:02', '2020-08-09 09:53:02'),
(3, 'Spike Lee, winner of the Best Adapted Screenplay award for BlacK Klansman, attends the 91st annual Academy Awards Governors Ball', 12, '44294.jpg', '2020-08-10', 'Spike Lee, winner of the Best Adapted Screenplay award for BlacK Klansman, attends the 91st annual Academy Awards Governors Ball at the Hollywood & Highland Center in Hollywood, California, on February 24, 2019. Although Lee had been awarded an honorary Oscar in 2015, this was his first competitive Academy Award.\r\nSpike Lee, winner of the Best Adapted Screenplay award for BlacK Klansman, attends the 91st annual Academy Awards Governors Ball at the Hollywood & Highland Center in Hollywood, California, on February 24, 2019. Although Lee had been awarded an honorary Oscar in 2015, this was his first competitive Academy Award.', 'Yes', 1, '2020-08-09 09:55:31', '2020-08-09 09:55:31'),
(4, 'People raise their hands during a mass opposition rally against President Nicolás Maduro', 4, '704734.jpg', '2020-08-11', 'People raise their hands during a mass opposition rally against President Nicolás Maduro, in which Venezuela\'s National Assembly head, Juan Guaidó, declared himself the country\'s \"acting president\" on the anniversary of a 1958 uprising that overthrew a military dictatorship, in Caracas, Venezuela, on January 23, 2019. The movement, sparked by disputed election results, led to a presidential crisis in Venezuela that continued throughout the year.\r\nPeople raise their hands during a mass opposition rally against President Nicolás Maduro, in which Venezuela\'s National Assembly head, Juan Guaidó, declared himself the country\'s \"acting president\" on the anniversary of a 1958 uprising that overthrew a military dictatorship, in Caracas, Venezuela, on January 23, 2019. The movement, sparked by disputed election results, led to a presidential crisis in Venezuela that continued throughout the year.', 'No', 1, '2020-08-09 09:56:51', '2020-08-09 09:56:51'),
(5, 'President Donald Trump turns to House Speaker Nancy Pelosi of California as he delivers', 3, '234558.jpg', '2020-07-07', 'President Donald Trump turns to House Speaker Nancy Pelosi of California as he delivers his State of the Union address to a Joint Session of Congress on Capitol Hill in Washington, D.C., as Vice President Mike Pence watches, on February 5, 2019.\r\nPresident Donald Trump turns to House Speaker Nancy Pelosi of California as he delivers his State of the Union address to a Joint Session of Congress on Capitol Hill in Washington, D.C., as Vice President Mike Pence watches, on February 5, 2019.', 'Yes', 1, '2020-08-09 09:58:14', '2020-08-09 09:58:14'),
(6, 'People are evacuated by a member of security forces at the scene of a terror attack at the Dusit Hotel compound in Nairobi', 11, '743177.jpg', '2020-08-10', 'People are evacuated by a member of security forces at the scene of a terror attack at the Dusit Hotel compound in Nairobi, Kenya, on January 15, 2019. The attack, carried out by members of the jihadist militant group Al-Shabaab, left 21 civilians dead.\r\nPeople are evacuated by a member of security forces at the scene of a terror attack at the Dusit Hotel compound in Nairobi, Kenya, on January 15, 2019. The attack, carried out by members of the jihadist militant group Al-Shabaab, left 21 civilians dead.', 'Yes', 1, '2020-08-09 10:00:13', '2020-08-12 01:24:31'),
(7, 'U.S. President Donald Trump shakes hands with North Korean leader Kim Jong Un as they meet at the demilitarized zone', 5, '17433.jpg', '2020-08-03', 'U.S. President Donald Trump shakes hands with North Korean leader Kim Jong Un as they meet at the demilitarized zone separating the two Koreas, in Panmunjom, South Korea, on June 30, 2019, in this image provided by North Korea\'s Korean Central News Agency (KCNA). During the meeting, Trump became the first sitting U.S. president to cross the border and enter North Korea.\r\nU.S. President Donald Trump shakes hands with North Korean leader Kim Jong Un as they meet at the demilitarized zone separating the two Koreas, in Panmunjom, South Korea, on June 30, 2019, in this image provided by North Korea\'s Korean Central News Agency (KCNA). During the meeting, Trump became the first sitting U.S. president to cross the border and enter North Korea', 'No', 1, '2020-08-09 10:03:06', '2020-08-12 01:24:30'),
(8, 'Students take part in a march for the environment and the climate in Brussels, Belgium, on February 21, 2019', 8, '394840.jpg', '2020-05-31', 'Students take part in a march for the environment and the climate in Brussels, Belgium, on February 21, 2019. Environmental protests and strikes, most led by students, took place around the world multiple times throughout the year.\r\nStudents take part in a march for the environment and the climate in Brussels, Belgium, on February 21, 2019. Environmental protests and strikes, most led by students, took place around the world multiple times throughout the year.', 'Yes', 1, '2020-08-09 10:04:51', '2020-08-12 01:24:29');

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
-- Table structure for table `schoolcategories`
--

CREATE TABLE `schoolcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolcategories`
--

INSERT INTO `schoolcategories` (`id`, `school_category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Library', 1, '2020-08-12 05:03:20', '2020-08-12 05:03:20'),
(2, 'Class', 1, '2020-08-12 05:03:37', '2020-08-12 05:03:37'),
(3, 'Room', 1, '2020-08-12 05:03:44', '2020-08-12 05:03:44'),
(4, 'Auditorium', 1, '2020-08-12 05:04:08', '2020-08-12 05:04:08'),
(5, 'Campus', 1, '2020-08-12 05:04:25', '2020-08-12 05:04:25'),
(6, 'Sports Ground', 1, '2020-08-12 05:04:43', '2020-08-12 05:04:43'),
(7, 'Staff Room', 1, '2020-08-12 05:05:07', '2020-08-12 05:05:07'),
(8, 'Principal Room', 1, '2020-08-12 05:06:14', '2020-08-12 05:06:27'),
(9, 'School Garden', 1, '2020-08-12 05:07:39', '2020-08-12 05:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `subjectcategories`
--

CREATE TABLE `subjectcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjectcategories`
--

INSERT INTO `subjectcategories` (`id`, `subject_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Maths', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:11:01', '2020-08-10 02:11:01'),
(2, 'Science', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:11:29', '2020-08-10 02:11:29'),
(3, 'Biology', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:11:56', '2020-08-10 02:11:56'),
(4, 'Physics', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:12:07', '2020-08-10 02:12:07'),
(5, 'Chemistry', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:12:18', '2020-08-10 02:12:18'),
(6, 'Geography', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:12:29', '2020-08-10 02:16:16'),
(7, 'History', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:12:44', '2020-08-10 02:12:44'),
(8, 'Citizenship', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:12:57', '2020-08-10 02:12:57'),
(9, 'Physical Education', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:13:17', '2020-08-10 02:13:17'),
(10, 'Business Studies', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:14:30', '2020-08-10 02:14:30'),
(11, 'Home Economics', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:14:42', '2020-08-10 02:14:42'),
(12, 'Art', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:14:54', '2020-08-10 03:09:38'),
(13, 'Music', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:15:14', '2020-08-10 03:09:34'),
(14, 'English', 'A subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:15:23', '2020-08-10 02:15:23'),
(15, 'Hindi', 'A  subject that by its scope and nature is more likely to help learners develop certain knowledge, skills and attitudes that are not the domain of a single subject', 1, '2020-08-10 02:15:30', '2020-08-10 22:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `teacheres`
--

CREATE TABLE `teacheres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_category` int(11) NOT NULL,
  `teacher_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_me` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_teacher` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacheres`
--

INSERT INTO `teacheres` (`id`, `teacher_name`, `teacher_email`, `subject_category`, `teacher_image`, `mobile`, `about_me`, `qualification`, `best_teacher`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Joual Khan', 'joualkhan@gmail.com', 1, '266047.jpg', '9876543210', 'Myself Joual Khan , am from mumbai \r\nSince time immemorial, teaching has been considered one of the noblest professions you can take up. Teachers have always played the role of catalyst for social changes in our society. Mankind has always regarded teachers as a boon to the society because it’s only a teacher who by making use of his/ her intelligence, patience, and wisdom attempts to not only polish the learner\'s intellect and aptitude but also takes steps to shape a multi-faceted  personality.', 'Msc , Maths \r\nExperience 10 years from Intermediate school teacher\r\nBsc also done with maths', 'Yes', 1, '2020-08-10 07:18:49', '2020-08-12 01:26:14'),
(2, 'Mira Panday', 'mirapanday@gmail.com', 4, '736045.jpg', '9876543212', 'My name Is Mira Pandey am from Noida\r\nSince time immemorial, teaching has been considered one of the noblest professions you can take up. Teachers have always played the role of catalyst for social changes in our society. Mankind has always regarded teachers as a boon to the society because it’s only a teacher who by making use of his/ her intelligence, patience, and wisdom attempts to not only polish the learner\'s intellect and aptitude but also takes steps to shape a multi-faceted  personality.', 'BTC in 2014 \r\nwith Bsc and Bed.\r\nexperience in Physics at 6 years', 'No', 1, '2020-08-10 07:29:18', '2020-08-12 01:26:13'),
(3, 'Ravina Kumari', 'ravinakumari@gmail.com', 11, '789821.jpg', '9876543213', 'My name Is Ravina am from kolkata\r\nSince time immemorial, teaching has been considered one of the noblest professions you can take up. Teachers have always played the role of catalyst for social changes in our society. Mankind has always regarded teachers as a boon to the society because it’s only a teacher who by making use of his/ her intelligence, patience, and wisdom attempts to not only polish the learner\'s intellect and aptitude but also takes steps to shape a multi-faceted  personality.', 'Msc , Phd in Home Economics\r\nTeacher in Kolkata at 2010\r\nExperience 10 year with this subject', 'Yes', 1, '2020-08-10 07:31:44', '2020-08-12 01:26:12'),
(4, 'Suman Bhatiya', 'sumanbha@gmail.com', 3, '822945.jpg', '9876543214', 'My name Is suman am from west bengal\r\nSince time immemorial, teaching has been considered one of the noblest professions you can take up. Teachers have always played the role of catalyst for social changes in our society. Mankind has always regarded teachers as a boon to the society because it’s only a teacher who by making use of his/ her intelligence, patience, and wisdom attempts to not only polish the learner\'s intellect and aptitude but also takes steps to shape a multi-faceted  personality.', 'Msc , Biology\r\nTeacher in Intermediate school in west bengal\r\nExperience of   8 Years', 'No', 1, '2020-08-10 08:19:39', '2020-08-10 09:02:57'),
(5, 'Mudhu Bisla', 'mudhubisla202@gmail.com', 10, '507906.jpg', '9876543215', 'My name Is Madhu Bisla am from Rajasthan\r\nSince time immemorial, teaching has been considered one of the noblest professions you can take up. Teachers have always played the role of catalyst for social changes in our society. Mankind has always regarded teachers as a boon to the society because it’s only a teacher who by making use of his/ her intelligence, patience, and wisdom attempts to not only polish the learner\'s intellect and aptitude but also takes steps to shape a multi-faceted  personality.', 'Bsc , Bed at 2015\r\nExperience in Business Studies in 4 years\r\nfrom rajasthan higher school', 'Yes', 1, '2020-08-10 08:22:29', '2020-08-10 09:02:41'),
(6, 'Sapna Mishra', 'mishra.sapna@gmail.com', 5, '267159.jpg', '9876543216', 'My name Is Sapna am from Kanpur\r\nSince time immemorial, teaching has been considered one of the noblest professions you can take up. Teachers have always played the role of catalyst for social changes in our society. Mankind has always regarded teachers as a boon to the society because it’s only a teacher who by making use of his/ her intelligence, patience, and wisdom attempts to not only polish the learner\'s intellect and aptitude but also takes steps to shape a multi-faceted  personality.', 'Msc , Chemistry from CSJMU kanpur at 2010\r\nExperience 8 years \r\nDAV college In kanpur', 'Yes', 1, '2020-08-10 08:24:47', '2020-08-10 09:00:51'),
(7, 'Samira Khan', 'khan.samira21@gmail.com', 12, '649192.jpg', '9876543217', 'My name Is Samira am from Unnao\r\nSince time immemorial, teaching has been considered one of the noblest professions you can take up. Teachers have always played the role of catalyst for social changes in our society. Mankind has always regarded teachers as a boon to the society because it’s only a teacher who by making use of his/ her intelligence, patience, and wisdom attempts to not only polish the learner\'s intellect and aptitude but also takes steps to shape a multi-faceted  personality.', 'MA , Art from Unnao University\r\nexperience 10 years\r\nfrom teaching VKL Collage in Unnao', 'No', 1, '2020-08-10 08:27:12', '2020-08-10 08:59:43'),
(8, 'Sarita kumari', 'saritakumari@gmail.com', 1, '171404.jpg', '9876543218', 'My name Is Sarita am from Dehli\r\nSince time immemorial, teaching has been considered one of the noblest professions you can take up. Teachers have always played the role of catalyst for social changes in our society. Mankind has always regarded teachers as a boon to the society because it’s only a teacher who by making use of his/ her intelligence, patience, and wisdom attempts to not only polish the learner\'s intellect and aptitude but also takes steps to shape a multi-faceted  personality.', 'Msc , Maths In DU\r\nExperience of 10 more + years \r\nTeaching with SM Collage in Delhi', 'Yes', 1, '2020-08-10 08:29:33', '2020-08-10 08:58:44'),
(9, 'Shubha Kumari parmar', 'skparmar@gmail.com', 15, '670333.jpg', '9876543219', 'My name Is Shubha am from Noida\r\nSince time immemorial, teaching has been considered one of the noblest professions you can take up. Teachers have always played the role of catalyst for social changes in our society. Mankind has always regarded teachers as a boon to the society because it’s only a teacher who by making use of his/ her intelligence, patience, and wisdom attempts to not only polish the learner\'s intellect and aptitude but also takes steps to shape a multi-faceted  personality.', 'MA , In hindi in Vishwa mahavidyalaya in Gp\r\nGp Noida \r\nExperience  9+ Years', 'Yes', 1, '2020-08-10 08:32:21', '2020-08-10 08:58:03'),
(10, 'Roli Kholi', 'kholiroli123@gmail.com', 6, '519868.jpg', '9876543220', 'My name Is Roli am from Kanpur\r\nSince time immemorial, teaching has been considered one of the noblest professions you can take up. Teachers have always played the role of catalyst for social changes in our society. Mankind has always regarded teachers as a boon to the society because it’s only a teacher who by making use of his/ her intelligence, patience, and wisdom attempts to not only polish the learner\'s intellect and aptitude but also takes steps to shape a multi-faceted  personality.', 'MA , Geography\r\nExperience 8 + years\r\nShubh ratna collage in kanpur', 'Yes', 1, '2020-08-10 08:35:02', '2020-08-10 08:57:04'),
(11, 'Vira kumari', 'kuamrivira@gmail.com', 14, '631298.jpg', '9876543221', 'My name Is Vira Kumari am from Lucknow\r\nSince time immemorial, teaching has been considered one of the noblest professions you can take up. Teachers have always played the role of catalyst for social changes in our society. Mankind has always regarded teachers as a boon to the society because it’s only a teacher who by making use of his/ her intelligence, patience, and wisdom attempts to not only polish the learner\'s intellect and aptitude but also takes steps to shape a multi-faceted  personality.', 'Ma , English litrecher\r\nexperience in 15 + more years\r\nLucknow University Got ( president award in 2011)', 'Yes', 1, '2020-08-10 08:38:21', '2020-08-12 01:26:15'),
(12, 'Vira Khan', 'khanvira@gmail.com', 2, '230942.jpeg', '9876543276', 'My self Vira khan Science Teacher at 2012\r\nYou’ve heard of thinking outside the box, right? Well, these educators teach outside of the box, using their own backgrounds and experiences to give their lessons a new, appealing breath of life. Office Depot helps celebrate special teachers that make a difference with their digital campaign #TeachersChangeLives. So Can You. Office Depot hopes to help raise awareness and funds for classroom supplies for teachers by highlighting a few of the teachers that make a difference. Here are three teachers they profiled for the campaign — you can see exactly how special they are.', 'Msc , Physics in Kanpur\r\nCSJM Kanpur University Topper at 2012\r\nExperience 8 Years +', 'Yes', 1, '2020-08-10 09:06:38', '2020-08-12 01:26:11');

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
-- Indexes for table `gallaries_tables`
--
ALTER TABLE `gallaries_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newscategories`
--
ALTER TABLE `newscategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newses`
--
ALTER TABLE `newses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `schoolcategories`
--
ALTER TABLE `schoolcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectcategories`
--
ALTER TABLE `subjectcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacheres`
--
ALTER TABLE `teacheres`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- AUTO_INCREMENT for table `gallaries_tables`
--
ALTER TABLE `gallaries_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `newscategories`
--
ALTER TABLE `newscategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newses`
--
ALTER TABLE `newses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schoolcategories`
--
ALTER TABLE `schoolcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subjectcategories`
--
ALTER TABLE `subjectcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teacheres`
--
ALTER TABLE `teacheres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
