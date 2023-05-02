-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 07:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal-portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_areas`
--

CREATE TABLE `about_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `simple_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `experiance_number` int(11) NOT NULL,
  `month_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_areas`
--

INSERT INTO `about_areas` (`id`, `simple_text`, `name`, `description`, `experiance_number`, `month_year`, `created_at`, `updated_at`) VALUES
(1, 'Hi,I\'m', 'Ahosan Habib', 'I am full stack developer with a passion for website. I enjoy developing simple, enthusiastic web developer eager to contribute to team success through hard work, attention to detail and excellent organizational skills.Through PHP, Laravel framework any website dynamic.Especially, I personally think, it is very easy to make website dynamic with Laravel.', 6, 'Month', NULL, '2023-04-05 21:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `banner_areas`
--

CREATE TABLE `banner_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `background_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `self_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `self_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_areas`
--

INSERT INTO `banner_areas` (`id`, `background_photo`, `profile_photo`, `self_description`, `self_location`, `created_at`, `updated_at`) VALUES
(1, 'wxGoJKy.jpg', 'i0kI9AO.jpg', 'HELLO! I\'M AHOSAN HABIB  Full-stack Developer.', 'Titas,Comilla, Bangladesh.', NULL, '2023-04-05 21:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Project Photo', '2022-10-24 00:43:35', '2022-10-24 01:02:47', NULL),
(2, 'Development', '2022-10-24 01:02:32', '2022-10-24 01:03:09', NULL),
(4, 'Web', '2022-10-29 12:52:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Habib', 'habib@gmail.com', 'Hi,', '2022-10-23 16:04:26', '2022-10-23 16:05:41', NULL),
(6, 'Shakib', 'rahimmia@gmail.com', 'SAFASDF', '2023-04-06 16:37:58', '2023-04-06 16:38:22', '2023-04-06 16:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `contact_descriptions`
--

CREATE TABLE `contact_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_descriptions`
--

INSERT INTO `contact_descriptions` (`id`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 'I enjoy discussing new projects and design challenges. Please share as much info, as possible so we can get the most out of our first catch-up.', NULL, '2022-10-23 05:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `cvdownloads`
--

CREATE TABLE `cvdownloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cvdownloads`
--

INSERT INTO `cvdownloads` (`id`, `cv`, `created_at`, `updated_at`) VALUES
(1, 'rTLaifu.png', NULL, '2023-04-10 04:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `design_skills`
--

CREATE TABLE `design_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_percentage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `design_skills`
--

INSERT INTO `design_skills` (`id`, `skill_name`, `skill_percentage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'HTML/CSS', 85, '2022-10-25 11:26:15', '2022-10-25 12:47:56', NULL),
(3, 'CSS', 50, '2022-10-25 12:36:07', '2022-10-25 12:48:05', '2022-10-25 12:48:05'),
(4, 'Bootstrap', 80, '2022-10-25 12:36:20', '2022-10-25 12:40:14', NULL),
(5, 'Javascript Basic', 40, '2022-10-25 12:36:45', '2023-04-06 16:32:31', NULL),
(6, 'Jquery', 85, '2023-04-06 16:30:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `develop_skills`
--

CREATE TABLE `develop_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_percentage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `develop_skills`
--

INSERT INTO `develop_skills` (`id`, `skill_name`, `skill_percentage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'PHP', 64, '2022-10-25 12:29:11', '2023-04-06 16:28:26', NULL),
(4, 'Laravel Framework', 80, '2022-10-25 12:37:21', '2023-04-06 16:33:56', NULL),
(5, 'Laravel Framework', 85, '2022-10-25 12:37:32', '2023-04-05 21:27:42', '2023-04-05 21:27:42'),
(6, 'Vue js', 70, '2023-04-06 16:32:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education_parts`
--

CREATE TABLE `education_parts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_of_degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collage_university_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_parts`
--

INSERT INTO `education_parts` (`id`, `name_of_degree`, `collage_university_name`, `duration`, `short_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'SSC', 'Union Technical High School', '2019', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text.', '2022-10-21 04:49:32', '2022-10-29 12:48:39', NULL),
(2, 'Diploma', 'MIST', '01,08,2019 - 01,12,2023', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text.', '2022-10-29 12:49:13', '2022-10-29 12:49:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experiance_parts`
--

CREATE TABLE `experiance_parts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiance_parts`
--

INSERT INTO `experiance_parts` (`id`, `designation`, `company_name`, `duration`, `short_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Back End Developer', 'Apple Inc', '2018 - 2020', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text.', '2022-10-21 04:59:46', '2023-04-05 21:12:46', '2023-04-05 21:12:46');

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
-- Table structure for table `hire_texts`
--

CREATE TABLE `hire_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hire_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hire_texts`
--

INSERT INTO `hire_texts` (`id`, `hire_text`, `bg_photo`, `created_at`, `updated_at`) VALUES
(1, 'Interested in working with me?', 'VtfI45W.jpg', NULL, '2022-10-25 07:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `logo_and_favicons`
--

CREATE TABLE `logo_and_favicons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo_and_favicons`
--

INSERT INTO `logo_and_favicons` (`id`, `logo_image`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'GXnbBcX.png', '4g5yx7W.png', NULL, '2022-10-29 07:01:53');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_19_122755_create_banner_areas_table', 2),
(6, '2022_10_20_000421_create_about_areas_table', 3),
(13, '2022_10_20_013225_create_education_parts_table', 5),
(14, '2022_10_21_014556_create_experiance_parts_table', 6),
(15, '2022_10_21_120755_create_logo_and_favicons_table', 7),
(17, '2022_10_21_124703_create_social_icons_table', 8),
(18, '2022_10_22_000240_create_services_areas_table', 9),
(21, '2022_10_22_033809_create_testimonial_areas_table', 12),
(22, '2022_10_23_105332_create_contact_descriptions_table', 13),
(23, '2022_10_23_115052_create_contacts_table', 14),
(24, '2022_10_24_061232_create_categories_table', 15),
(26, '2022_10_24_070520_create_portfolio_areas_table', 16),
(27, '2022_10_20_010129_create_self_informations_table', 17),
(29, '2022_10_22_021808_create_hire_texts_table', 18),
(30, '2022_10_25_164939_create_design_skills_table', 19),
(31, '2022_10_25_180720_create_develop_skills_table', 20),
(32, '2022_10_28_210249_create_cvdownloads_table', 21),
(33, '2022_10_29_070256_add_file_at_user_table', 22),
(34, '2023_05_02_063822_create_someprojectlinks_table', 23);

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
-- Table structure for table `portfolio_areas`
--

CREATE TABLE `portfolio_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_areas`
--

INSERT INTO `portfolio_areas` (`id`, `category_id`, `title`, `subtitle`, `icon`, `thumbnail_photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'project 1', 'category', 'fas fa-adjust', 'oFVkpUV.jpg', '2022-10-24 02:13:11', '2022-10-29 12:58:20', NULL),
(2, 2, 'Dynaimc Part', 'Category', 'fas fa-arrow-alt-circle-down', 'xOhbIC5.jpg', '2022-10-24 02:27:26', '2022-10-24 03:20:32', NULL),
(3, 4, 'Web photo', 'Development', 'fas fa-barcode', 'kCxNMEE.jpg', '2022-10-29 12:54:17', '2022-10-29 12:57:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `self_informations`
--

CREATE TABLE `self_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `self_informations`
--

INSERT INTO `self_informations` (`id`, `name`, `date_of_birth`, `email`, `email_link`, `address`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'Ahosan Habib', '1 February 2000', 'ahosanhabib21021@gmail.com', 'https://mail.google.com/mail/u/0/#inbox', 'Titas,Comill,Bangladesh', '01969440721', NULL, '2022-10-29 12:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `services_areas`
--

CREATE TABLE `services_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_areas`
--

INSERT INTO `services_areas` (`id`, `icon`, `title`, `short_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'fas fa-adjust', 'Web development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy.', '2022-10-21 18:26:17', '2023-04-05 21:17:29', '2023-04-05 21:17:29'),
(2, 'fas fa-chart-pie', 'Laravel Framework', 'Laravel is a free and open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.', '2022-10-25 05:36:20', '2023-04-05 21:27:05', NULL),
(3, 'fas fa-columns', 'PHP', 'PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by The PHP Group.', '2022-10-25 05:37:43', '2023-04-05 21:26:43', NULL),
(4, 'far fa-futbol', 'Vue js', 'Vue.js is an open-source model–view–viewmodel front end JavaScript framework for building user interfaces and single-page applications. It was created by Evan You, and is maintained by him and the rest of the active core team members.', '2023-04-05 21:14:09', '2023-04-05 21:15:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_icons`
--

INSERT INTO `social_icons` (`id`, `social_icon`, `social_link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'fab fa-facebook-f', 'https://www.facebook.com/', '2022-10-21 09:19:44', '2022-10-29 12:39:53', NULL),
(5, 'fab fa-whatsapp-square', 'https://www.whatsapp.com/', '2022-10-29 12:26:44', '2022-10-29 12:28:36', NULL),
(6, 'fab fa-twitter', 'https://twitter.com/', '2022-10-29 12:41:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `someprojectlinks`
--

CREATE TABLE `someprojectlinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `someprojectlinks`
--

INSERT INTO `someprojectlinks` (`id`, `project_name`, `project_link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Google Translate', 'https://translate.google.com/?sl=en&tl=bn&text=Some%20of%20project%20link&op=translate', '2023-05-02 04:37:23', '2023-05-02 05:05:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_areas`
--

CREATE TABLE `testimonial_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial_areas`
--

INSERT INTO `testimonial_areas` (`id`, `name`, `title`, `photo`, `short_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Rafsan Rahoman', 'Developer', 'XJhrhxH.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborumnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentiumoptio,', '2022-10-21 22:13:37', '2022-10-21 22:49:13', NULL),
(2, 'Kamal', 'Designer', '45VC3Pt.png', 'Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium', '2022-10-25 06:47:14', NULL, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_profile_photo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone_number`, `address`, `profile_photo`) VALUES
(1, 'Sajid', 'sajid@gmail.com', NULL, '$2y$10$DS76C1BHHWv6CftCGdXJneOlG5noGY60oHKjwXMHYF7Pu023NN8zO', NULL, '2022-10-18 05:30:52', '2022-10-29 01:36:52', '01965874215', 'Gazipur,Bangladesh', 'vp6TO5J.jpg'),
(2, 'Hridoy', 'hridoy@gmail.com', NULL, '$2y$10$WigLJCu0B.oaIQwwsS30Deas6PyMlYGkvJzy8yEoNf2C8AwOUy9K2', NULL, '2022-10-26 04:14:37', '2022-10-26 04:14:37', NULL, NULL, 'default_profile_photo.jpg'),
(4, 'Habib', 'habib@gmail.com', NULL, '$2y$10$Sf8pr8YS3rYna/BzchAOLOfvqB/Li0VD/2y9LPDVw1HsZqXjT5zPG', NULL, '2023-04-05 21:02:35', '2023-04-05 21:02:35', NULL, NULL, 'default_profile_photo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_areas`
--
ALTER TABLE `about_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_areas`
--
ALTER TABLE `banner_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_descriptions`
--
ALTER TABLE `contact_descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvdownloads`
--
ALTER TABLE `cvdownloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_skills`
--
ALTER TABLE `design_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `develop_skills`
--
ALTER TABLE `develop_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_parts`
--
ALTER TABLE `education_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiance_parts`
--
ALTER TABLE `experiance_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hire_texts`
--
ALTER TABLE `hire_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo_and_favicons`
--
ALTER TABLE `logo_and_favicons`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolio_areas`
--
ALTER TABLE `portfolio_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `self_informations`
--
ALTER TABLE `self_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_areas`
--
ALTER TABLE `services_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `someprojectlinks`
--
ALTER TABLE `someprojectlinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_areas`
--
ALTER TABLE `testimonial_areas`
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
-- AUTO_INCREMENT for table `about_areas`
--
ALTER TABLE `about_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_areas`
--
ALTER TABLE `banner_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_descriptions`
--
ALTER TABLE `contact_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cvdownloads`
--
ALTER TABLE `cvdownloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `design_skills`
--
ALTER TABLE `design_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `develop_skills`
--
ALTER TABLE `develop_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `education_parts`
--
ALTER TABLE `education_parts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experiance_parts`
--
ALTER TABLE `experiance_parts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hire_texts`
--
ALTER TABLE `hire_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo_and_favicons`
--
ALTER TABLE `logo_and_favicons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio_areas`
--
ALTER TABLE `portfolio_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `self_informations`
--
ALTER TABLE `self_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services_areas`
--
ALTER TABLE `services_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `someprojectlinks`
--
ALTER TABLE `someprojectlinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial_areas`
--
ALTER TABLE `testimonial_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
