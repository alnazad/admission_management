-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 07:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_circulars`
--

CREATE TABLE `admission_circulars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `circular_name` varchar(255) NOT NULL,
  `organization_id` bigint(20) UNSIGNED NOT NULL,
  `institute_types_id` int(11) NOT NULL,
  `institute_id` int(11) NOT NULL,
  `upload_circular` varchar(255) NOT NULL,
  `circular_discription` longtext NOT NULL,
  `circular_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admission_fees`
--

CREATE TABLE `admission_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organization_id` bigint(20) UNSIGNED NOT NULL,
  `institute_type_id` int(11) NOT NULL,
  `institute_id` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `fee` decimal(10,2) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_assesments`
--

CREATE TABLE `applicant_assesments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organization_id` bigint(20) UNSIGNED NOT NULL,
  `institute_type_id` int(11) NOT NULL,
  `institute_id` int(11) NOT NULL,
  `assesment_tools_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `assesment_markes` decimal(10,2) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assesment_tools`
--

CREATE TABLE `assesment_tools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `institute_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assesment_tools`
--

INSERT INTO `assesment_tools` (`id`, `name`, `institute_id`, `created_at`, `updated_at`) VALUES
(2, 'Dyslexia Screening Test', 1, '2024-05-05 08:44:57', '2024-05-05 08:44:57'),
(3, 'Diagonostic Test Of Learning  Disablities', 1, '2024-05-05 08:45:52', '2024-05-05 08:45:52'),
(4, 'Intelligence Test', 1, '2024-05-05 08:46:36', '2024-05-05 08:46:36'),
(5, 'Development Sheduels Test', 1, '2024-05-05 08:47:10', '2024-05-05 08:47:10'),
(6, 'Dyslexia Screening Test', 2, NULL, NULL),
(7, 'Dyslexia Screening Test', 3, NULL, NULL),
(8, 'Dyslexia Screening Test', 4, NULL, NULL),
(9, 'Dyslexia Screening Test', 5, NULL, NULL),
(10, 'Dyslexia Screening Test', 6, NULL, NULL),
(11, 'Dyslexia Screening Test', 7, NULL, NULL),
(12, 'Dyslexia Screening Test', 8, NULL, NULL),
(13, 'Intelligence Test', 3, NULL, NULL),
(14, 'Intelligence Test', 5, NULL, NULL),
(15, 'Intelligence Test', 7, NULL, NULL),
(16, 'Development Sheduels Test', 2, NULL, NULL),
(17, 'Development Sheduels Test', 4, NULL, NULL),
(18, 'Development Sheduels Test', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_names`
--

CREATE TABLE `class_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `institutes_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_names`
--

INSERT INTO `class_names` (`id`, `name`, `institutes_id`, `created_at`, `updated_at`) VALUES
(1, 'One', 1, NULL, NULL),
(2, 'Two', 1, NULL, NULL),
(3, 'One', 2, NULL, NULL),
(4, 'Two', 2, NULL, NULL),
(5, 'One', 3, NULL, NULL),
(6, 'Two', 3, NULL, NULL),
(7, 'One', 4, NULL, NULL),
(8, 'Two', 4, NULL, NULL),
(9, 'One', 5, NULL, NULL),
(10, 'Two', 5, NULL, NULL),
(11, 'One', 6, NULL, NULL),
(12, 'Two', 6, NULL, NULL),
(13, 'One', 7, NULL, NULL),
(14, 'Two', 7, NULL, NULL),
(15, 'One', 8, NULL, NULL),
(16, 'Two', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
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
-- Table structure for table `gardians`
--

CREATE TABLE `gardians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `institute_type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `name`, `institute_type_id`, `created_at`, `updated_at`) VALUES
(1, 'Pigna High School', 1, NULL, NULL),
(2, 'pogaldigha High School', 1, NULL, NULL),
(3, 'Motiur Rahman High School', 2, NULL, NULL),
(4, 'Rudhro BoiraHigh School', 2, NULL, NULL),
(5, 'Isreal Ahammed High School', 3, NULL, NULL),
(6, 'Batikamari High School ', 3, NULL, NULL),
(7, 'Panchasi High School', 4, NULL, NULL),
(8, 'BaroiPotol High School', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `institute_types`
--

CREATE TABLE `institute_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `organization_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institute_types`
--

INSERT INTO `institute_types` (`id`, `name`, `organization_id`, `created_at`, `updated_at`) VALUES
(1, 'Blind School', 1, NULL, NULL),
(2, 'Dumb School', 1, NULL, NULL),
(3, 'Mental School', 2, NULL, NULL),
(4, 'Physical school', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_21_130451_create_years_table', 1),
(5, '2024_04_21_130733_create_admission_circulars_table', 1),
(6, '2024_04_21_130813_create_applicant_assesments_table', 1),
(7, '2024_04_21_130941_create_assesment_tools_table', 1),
(8, '2024_04_21_131023_create_online_admissions_table', 1),
(9, '2024_04_21_131048_create_admission_fees_table', 1),
(10, '2024_04_21_131126_create_organizations_table', 1),
(11, '2024_04_21_131228_create_institutes_table', 1),
(12, '2024_04_21_131237_create_institute_types_table', 1),
(13, '2024_04_21_131336_create_class_names_table', 1),
(14, '2024_04_21_131404_create_divisions_table', 1),
(15, '2024_04_21_131421_create_districts_table', 1),
(16, '2024_04_21_131433_create_areas_table', 1),
(17, '2024_04_21_131505_create_siblings_table', 1),
(18, '2024_04_21_131530_create_gardians_table', 1),
(19, '2024_04_21_131542_create_students_table', 1),
(20, '2024_04_23_121042_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `online_admissions`
--

CREATE TABLE `online_admissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organization_id` int(11) NOT NULL,
  `institute_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `online_admissions`
--

INSERT INTO `online_admissions` (`id`, `organization_id`, `institute_id`, `student_id`, `created_at`, `updated_at`) VALUES
(6, 2, 5, 1, '2024-05-08 10:26:24', '2024-05-08 10:26:24'),
(7, 1, 3, 2, '2024-05-08 12:22:12', '2024-05-08 12:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Aesthetic Welfare', NULL, NULL),
(2, 'Cultural Services', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'Abdullah-AuthToken', 'e96f6c5eb693f82242705ab80b5e3f95908d2f9a8d2be6554e87d0c6ee70a9d2', '[\"*\"]', NULL, NULL, '2024-04-23 09:05:42', '2024-04-23 09:05:42'),
(2, 'App\\Models\\User', 1, 'prantik', 'dac0ef3f7c6064ca7bc8c8546ef091fe5ba265e4e5e6a24344d92de252f8948d', '[\"*\"]', NULL, NULL, '2024-04-23 09:11:01', '2024-04-23 09:11:01'),
(3, 'App\\Models\\User', 1, 'prantik', '80cd13de2c1ba232361ee3371515863e5fdadebeb1d5558e4361665c4162500a', '[\"*\"]', NULL, NULL, '2024-04-23 09:33:14', '2024-04-23 09:33:14'),
(4, 'App\\Models\\User', 1, 'prantik', 'c4361f969af9a55700829e752b51e4e879fe1880e3358a8ca1e99b87520415f0', '[\"*\"]', NULL, NULL, '2024-04-23 09:41:04', '2024-04-23 09:41:04'),
(5, 'App\\Models\\User', 1, 'prantik', 'c274cffacfd0d3c922968e898986a189c8e432501c48fd45475d75607128585d', '[\"*\"]', NULL, NULL, '2024-04-23 09:50:14', '2024-04-23 09:50:14'),
(6, 'App\\Models\\User', 1, 'prantik', 'da0b9b10f20bebdbb1270431e266b3e0540fc638221040cc658c817109801e1a', '[\"*\"]', NULL, NULL, '2024-04-23 09:54:52', '2024-04-23 09:54:52'),
(7, 'App\\Models\\User', 1, 'prantik', '7df7bb479585ccc86ee87f1e17d800e559f74cb21d4181771cb8287c044eb086', '[\"*\"]', NULL, NULL, '2024-05-02 05:12:14', '2024-05-02 05:12:14'),
(8, 'App\\Models\\User', 1, 'prantik', '2f0dfcbb3924a0d09dbb038715a70f451a2b727a891680c6f6c730175c85e34e', '[\"*\"]', NULL, NULL, '2024-05-03 11:53:21', '2024-05-03 11:53:21'),
(9, 'App\\Models\\User', 1, 'prantik', '8bc70b6021cb65ccedc2d70483ad7153f3dd72382f971d03bdb2ddd63c747d3c', '[\"*\"]', NULL, NULL, '2024-05-05 02:54:26', '2024-05-05 02:54:26'),
(10, 'App\\Models\\User', 1, 'prantik', 'b0b485a3516da4e2932e24fdf3de14db7ae9bdc7812cb31937bb961802f30e4f', '[\"*\"]', NULL, NULL, '2024-05-05 11:01:05', '2024-05-05 11:01:05'),
(11, 'App\\Models\\User', 1, 'prantik', 'da9349961465d1094c7c0282142e43664c1d0ce32d4a3632627d2cae818d8276', '[\"*\"]', NULL, NULL, '2024-05-05 11:49:58', '2024-05-05 11:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1FLjqSwCmSX6T5lm3WwkA8Bv0pBCWzhOy1adVTkt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSFdYNDMwY2tTSDV1NWlTemFtdTdSU3VTdVQwSEdYNmFFYnQ4ejlZTyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1714708152),
('awx8wLyZeQ0TwLLtFdGMYSvE3tXGUkq2tIwnNPJe', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSWZLS25DYVBreWJwemhqbjY1d242TkJyNzNYaEZwUU1hU2ZFQW51RCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1714671683),
('bQ2SyVERcKmsanVIDe0BiO1aTpoNd5ESVqZdatHd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOG9QeDcxVWlEcEI3R0pmNFNBbDRXbE5xWnVTcjNPNGpiZ2JXbU50RCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715345804),
('hAF7eRKMlaBpCzwfm9adNxMH2oLS2jS2bRfjMMCy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ1E1aDVYV1JzWXJ2a1hiM0JLYUE1QkJxcjRDRlJFdUw3R0w0NVBoayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1714899227),
('ndSLfyy9iNZ8qeXdaarKEOfEcuEBdoYrWHG4izqV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUVdidmNIZDIyaFh2UnNEQkRlZFdwSjhndlJsVXNwWThadFd6OEdJSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1713886843),
('uGzl6RYMs1fI8HhaljtQ4mQrlCjumQsCN7s5blWq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaEl5T2dha2RJa2pkamVUQXRBSjd5YkQ5eDdSREhXUkdJQzJyY01tRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715178095);

-- --------------------------------------------------------

--
-- Table structure for table `siblings`
--

CREATE TABLE `siblings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `gander` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `blood_group` varchar(20) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `disability_discription` text DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) NOT NULL,
  `religion` varchar(30) DEFAULT NULL,
  `assesment_tool_id` int(11) DEFAULT NULL,
  `contract_no` varchar(30) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `birth_certificate_no` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `class_name_id` int(11) DEFAULT NULL,
  `siblings_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `gender`, `blood_group`, `nationality`, `disability_discription`, `father_name`, `mother_name`, `email`, `mobile`, `religion`, `assesment_tool_id`, `contract_no`, `birth_date`, `birth_certificate_no`, `address`, `class_name_id`, `siblings_id`, `created_at`, `updated_at`) VALUES
(1, 'Helal', 'male', NULL, NULL, NULL, 'Lal', 'Nill', NULL, '10698547', NULL, NULL, NULL, '2024-05-08', '015698', 'dhaka', 9, NULL, '2024-05-08 10:26:24', '2024-05-08 10:26:24'),
(2, 'fazle', 'male', NULL, NULL, NULL, 'le', 'faz', NULL, '12364789', NULL, NULL, NULL, '2024-05-10', '12654798', 'mugda', 6, NULL, '2024-05-08 12:22:12', '2024-05-08 12:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah', 'abdullah@gmail.com', '2024-04-23 08:36:47', '$2y$12$e8sYCnJkmcX9NIrrgrze.uyVAysyjrp1wtHeI.B1ox2eC5VRcqwYe', 'admin', 'OM9sXl4hlb', '2024-04-23 08:36:47', '2024-04-23 08:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_circulars`
--
ALTER TABLE `admission_circulars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_fees`
--
ALTER TABLE `admission_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant_assesments`
--
ALTER TABLE `applicant_assesments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assesment_tools`
--
ALTER TABLE `assesment_tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `class_names`
--
ALTER TABLE `class_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gardians`
--
ALTER TABLE `gardians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute_types`
--
ALTER TABLE `institute_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_admissions`
--
ALTER TABLE `online_admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `siblings`
--
ALTER TABLE `siblings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_circulars`
--
ALTER TABLE `admission_circulars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admission_fees`
--
ALTER TABLE `admission_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_assesments`
--
ALTER TABLE `applicant_assesments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assesment_tools`
--
ALTER TABLE `assesment_tools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `class_names`
--
ALTER TABLE `class_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gardians`
--
ALTER TABLE `gardians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `institute_types`
--
ALTER TABLE `institute_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `online_admissions`
--
ALTER TABLE `online_admissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `siblings`
--
ALTER TABLE `siblings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
