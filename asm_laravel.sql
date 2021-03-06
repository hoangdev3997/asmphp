-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2019 lúc 06:26 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `product_type_id` int(10) UNSIGNED NOT NULL,
  `product_type_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_show` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`product_type_id`, `product_type_name`, `is_show`, `created_at`, `updated_at`) VALUES
(1, 'VietNam Wine', 1, '2019-10-11 02:42:00', '2019-10-11 02:46:07'),
(2, 'France Wine', 1, '2019-10-11 02:45:00', '2019-10-11 04:11:07'),
(3, 'Italy Wine', 1, '2019-10-11 02:45:46', '2019-10-11 02:45:46'),
(4, 'Germany Wine', 1, '2019-10-11 02:45:54', '2019-10-11 02:45:54'),
(5, 'US Wine', 1, '2019-10-11 02:46:03', '2019-10-11 02:46:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 0, 0, 0, '{}', 7),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 8),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 9),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 0, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 14),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 5),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 12),
(22, 6, 'product_type_id', 'text', 'Product Type Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 6, 'product_type_name', 'text', 'Product Type Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(24, 6, 'is_show', 'checkbox', 'Is Show', 1, 1, 1, 1, 1, 1, '{\"on\":\"Showing\",\"off\":\"Hidden\",\"checked\":\"true\"}', 3),
(25, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(26, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(27, 7, 'product_id', 'number', 'Product Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(28, 7, 'product_name', 'text', 'Product Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(29, 7, 'product_price', 'number', 'Product Price', 1, 1, 1, 1, 1, 1, '{}', 3),
(30, 7, 'product_sale', 'number', 'Product Sale', 0, 1, 1, 1, 1, 1, '{}', 4),
(31, 7, 'full_detail', 'rich_text_box', 'Full Detail', 0, 1, 1, 1, 1, 1, '{}', 5),
(32, 7, 'amount', 'number', 'Amount', 0, 1, 1, 1, 1, 1, '{}', 6),
(33, 7, 'check_new', 'checkbox', 'Check New', 0, 1, 1, 1, 1, 1, '{\"on\":\"New\",\"off\":\"Off\",\"checked\":\"true\"}', 7),
(34, 7, 'check_hot', 'checkbox', 'Check Hot', 0, 1, 1, 1, 1, 1, '{\"on\":\"Hot\",\"off\":\"Off\",\"checked\":\"true\"}', 8),
(35, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 11),
(36, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 12),
(37, 7, 'product_type_id', 'number', 'Product Type Id', 0, 1, 1, 1, 1, 1, '{}', 9),
(38, 7, 'img', 'multiple_images', 'Img', 0, 1, 1, 1, 1, 1, '{}', 10),
(39, 7, 'product_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"product_type_id\",\"key\":\"product_type_id\",\"label\":\"product_type_name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13),
(40, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 0, 0, 0, 0, 0, '{}', 10),
(41, 1, 'address', 'text', 'Address', 0, 0, 0, 0, 0, 0, '{}', 4),
(42, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(43, 8, 'id_user', 'text', 'Id User', 0, 1, 1, 1, 1, 1, '{}', 2),
(44, 8, 'id_delivery', 'text', 'Id Delivery', 0, 1, 1, 1, 1, 1, '{}', 3),
(45, 8, 'status', 'text', 'Status', 0, 1, 1, 1, 1, 1, '{}', 4),
(46, 8, 'total_order', 'text', 'Total Order', 0, 1, 1, 1, 1, 1, '{}', 5),
(47, 8, 'created_at', 'timestamp', 'Order Time', 0, 1, 1, 1, 0, 1, '{}', 6),
(48, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(49, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(50, 11, 'address_1', 'text', 'Address 1', 1, 1, 1, 1, 1, 1, '{}', 2),
(51, 11, 'address_2', 'text', 'Address 2', 0, 1, 1, 1, 1, 1, '{}', 3),
(52, 11, 'city', 'text', 'City', 1, 1, 1, 1, 1, 1, '{}', 4),
(53, 11, 'zipcode', 'text', 'Zipcode', 1, 1, 1, 1, 1, 1, '{}', 5),
(54, 11, 'phone', 'text', 'Phone', 1, 1, 1, 1, 1, 1, '{}', 6),
(55, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(56, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2019-09-28 04:33:57', '2019-10-24 19:39:39'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-09-28 04:33:57', '2019-09-28 04:33:57'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-09-28 04:33:57', '2019-09-28 04:33:57'),
(6, 'categories', 'categories', 'Category', 'Categories', 'voyager-paw', 'App\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"product_type_id\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-11 02:16:37', '2019-10-11 02:45:06'),
(7, 'products', 'products', 'Product', 'Products', 'voyager-leaf', 'App\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"product_id\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-11 02:20:18', '2019-10-11 04:32:48'),
(8, 'orders', 'orders', 'Order', 'Orders', 'voyager-window-list', 'App\\Order', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-27 08:15:50', '2019-10-27 08:16:56'),
(9, 'order_item', 'order-item', 'Order Item', 'Order Items', 'voyager-bag', 'App\\OrderItem', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-10-27 08:22:00', '2019-10-27 08:22:00'),
(10, 'delivery', 'delivery', 'Delivery', 'Deliveries', 'voyager-tag', 'App\\Delivery', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-10-27 08:36:29', '2019-10-27 08:36:29'),
(11, 'deliveries', 'deliveries', 'Delivery', 'Deliveries', 'voyager-tag', 'App\\Delivery', NULL, 'Delivery', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-27 08:42:16', '2019-10-27 08:42:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-09-28 04:33:58', '2019-09-28 04:33:58'),
(2, 'site', '2019-10-11 04:02:38', '2019-10-11 04:02:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-09-28 04:33:58', '2019-09-28 04:33:58', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 9, '2019-09-28 04:33:58', '2019-10-27 08:43:01', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 7, '2019-09-28 04:33:58', '2019-10-27 08:43:01', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 8, '2019-09-28 04:33:58', '2019-10-27 08:43:01', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 10, '2019-09-28 04:33:58', '2019-10-27 08:43:01', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2019-09-28 04:33:58', '2019-10-11 02:24:00', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2019-09-28 04:33:58', '2019-10-11 02:24:00', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2019-09-28 04:33:58', '2019-10-11 02:24:00', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2019-09-28 04:33:58', '2019-10-11 02:24:00', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 11, '2019-09-28 04:33:58', '2019-10-27 08:43:01', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2019-09-28 04:34:01', '2019-10-11 02:24:00', 'voyager.hooks', NULL),
(12, 1, 'Categories', '', '_self', 'voyager-paw', '#000000', NULL, 2, '2019-10-11 02:16:37', '2019-10-11 02:24:27', 'voyager.categories.index', 'null'),
(13, 1, 'Products', '', '_self', 'voyager-leaf', NULL, NULL, 3, '2019-10-11 02:20:19', '2019-10-11 02:24:04', 'voyager.products.index', NULL),
(14, 2, 'Home', '/', '_self', NULL, '#00ff40', NULL, 1, '2019-10-11 04:03:16', '2019-10-11 04:04:37', NULL, ''),
(15, 2, 'World Of Wine', '', '_self', NULL, '#000000', NULL, 2, '2019-10-11 04:04:12', '2019-10-11 04:04:37', NULL, ''),
(16, 2, 'VietNam Wine', '', '_self', NULL, '#000000', 15, 1, '2019-10-11 04:04:35', '2019-10-11 04:04:37', NULL, ''),
(17, 2, 'Contact', '', '_self', NULL, '#000000', NULL, 3, '2019-10-11 04:04:42', '2019-10-11 04:05:58', NULL, ''),
(18, 2, 'About', '', '_self', NULL, '#000000', NULL, 4, '2019-10-11 04:04:55', '2019-10-11 04:05:58', NULL, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(64, '2019_08_19_000000_create_failed_jobs_table', 2),
(65, '2019_10_27_155718_create_orders_table', 2),
(66, '2019_10_27_161017_create_order_items_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `address_1`, `address_2`, `city`, `zipcode`, `phone`, `status`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nguyen Huy Hoang', 'Thu Duc', NULL, 'Ho Chi Minh', '65081', '0965960207', 0, '2,256', '2019-10-27 11:27:34', '2019-10-27 11:27:34'),
(2, 1, 'Fingle Man', '232 Dong Nai Street', NULL, 'Ha Noi', '730000', '0965960207', 0, '122', '2019-10-27 18:50:50', '2019-10-27 18:50:50'),
(3, 4, 'Nguyen Huy Hoang', 'Thu Duc', NULL, 'Ho Chi Minh', '7658678', '0965960207', 0, '632', '2019-10-31 22:24:32', '2019-10-31 22:24:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 4, '2019-10-27 11:27:34', '2019-10-27 11:27:34'),
(2, 2, 5, 1, '2019-10-27 18:50:50', '2019-10-27 18:50:50'),
(3, 3, 9, 6, '2019-10-31 22:24:32', '2019-10-31 22:24:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('assassin031097@gmail.com', '$2y$10$XPFRR.2AjUZfKM5xC7njLOi/qyVqr96dxOEUlqosHQAIGDU8OzQWe', '2019-10-24 18:42:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-09-28 04:33:58', '2019-09-28 04:33:58'),
(2, 'browse_bread', NULL, '2019-09-28 04:33:58', '2019-09-28 04:33:58'),
(3, 'browse_database', NULL, '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(4, 'browse_media', NULL, '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(5, 'browse_compass', NULL, '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(6, 'browse_menus', 'menus', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(7, 'read_menus', 'menus', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(8, 'edit_menus', 'menus', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(9, 'add_menus', 'menus', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(10, 'delete_menus', 'menus', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(11, 'browse_roles', 'roles', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(12, 'read_roles', 'roles', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(13, 'edit_roles', 'roles', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(14, 'add_roles', 'roles', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(15, 'delete_roles', 'roles', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(16, 'browse_users', 'users', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(17, 'read_users', 'users', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(18, 'edit_users', 'users', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(19, 'add_users', 'users', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(20, 'delete_users', 'users', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(21, 'browse_settings', 'settings', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(22, 'read_settings', 'settings', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(23, 'edit_settings', 'settings', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(24, 'add_settings', 'settings', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(25, 'delete_settings', 'settings', '2019-09-28 04:33:59', '2019-09-28 04:33:59'),
(26, 'browse_hooks', NULL, '2019-09-28 04:34:01', '2019-09-28 04:34:01'),
(27, 'browse_categories', 'categories', '2019-10-11 02:16:37', '2019-10-11 02:16:37'),
(28, 'read_categories', 'categories', '2019-10-11 02:16:37', '2019-10-11 02:16:37'),
(29, 'edit_categories', 'categories', '2019-10-11 02:16:37', '2019-10-11 02:16:37'),
(30, 'add_categories', 'categories', '2019-10-11 02:16:37', '2019-10-11 02:16:37'),
(31, 'delete_categories', 'categories', '2019-10-11 02:16:37', '2019-10-11 02:16:37'),
(32, 'browse_products', 'products', '2019-10-11 02:20:19', '2019-10-11 02:20:19'),
(33, 'read_products', 'products', '2019-10-11 02:20:19', '2019-10-11 02:20:19'),
(34, 'edit_products', 'products', '2019-10-11 02:20:19', '2019-10-11 02:20:19'),
(35, 'add_products', 'products', '2019-10-11 02:20:19', '2019-10-11 02:20:19'),
(36, 'delete_products', 'products', '2019-10-11 02:20:19', '2019-10-11 02:20:19'),
(37, 'browse_orders', 'orders', '2019-10-27 08:15:50', '2019-10-27 08:15:50'),
(38, 'read_orders', 'orders', '2019-10-27 08:15:50', '2019-10-27 08:15:50'),
(39, 'edit_orders', 'orders', '2019-10-27 08:15:50', '2019-10-27 08:15:50'),
(40, 'add_orders', 'orders', '2019-10-27 08:15:50', '2019-10-27 08:15:50'),
(41, 'delete_orders', 'orders', '2019-10-27 08:15:50', '2019-10-27 08:15:50'),
(42, 'browse_order_item', 'order_item', '2019-10-27 08:22:00', '2019-10-27 08:22:00'),
(43, 'read_order_item', 'order_item', '2019-10-27 08:22:00', '2019-10-27 08:22:00'),
(44, 'edit_order_item', 'order_item', '2019-10-27 08:22:00', '2019-10-27 08:22:00'),
(45, 'add_order_item', 'order_item', '2019-10-27 08:22:00', '2019-10-27 08:22:00'),
(46, 'delete_order_item', 'order_item', '2019-10-27 08:22:00', '2019-10-27 08:22:00'),
(47, 'browse_delivery', 'delivery', '2019-10-27 08:36:29', '2019-10-27 08:36:29'),
(48, 'read_delivery', 'delivery', '2019-10-27 08:36:29', '2019-10-27 08:36:29'),
(49, 'edit_delivery', 'delivery', '2019-10-27 08:36:29', '2019-10-27 08:36:29'),
(50, 'add_delivery', 'delivery', '2019-10-27 08:36:29', '2019-10-27 08:36:29'),
(51, 'delete_delivery', 'delivery', '2019-10-27 08:36:29', '2019-10-27 08:36:29'),
(52, 'browse_deliveries', 'deliveries', '2019-10-27 08:42:16', '2019-10-27 08:42:16'),
(53, 'read_deliveries', 'deliveries', '2019-10-27 08:42:16', '2019-10-27 08:42:16'),
(54, 'edit_deliveries', 'deliveries', '2019-10-27 08:42:16', '2019-10-27 08:42:16'),
(55, 'add_deliveries', 'deliveries', '2019-10-27 08:42:16', '2019-10-27 08:42:16'),
(56, 'delete_deliveries', 'deliveries', '2019-10-27 08:42:16', '2019-10-27 08:42:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_sale` int(11) DEFAULT NULL,
  `full_detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `check_new` tinyint(4) DEFAULT 0,
  `check_hot` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_type_id` int(10) DEFAULT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_sale`, `full_detail`, `amount`, `check_new`, `check_hot`, `created_at`, `updated_at`, `product_type_id`, `img`) VALUES
(1, 'Demo', 20, 20, '<p>asdasdasd</p>', 120, 1, 1, '2019-10-11 04:33:38', '2019-10-11 04:33:38', 1, '[\"products\\\\October2019\\\\qonEKbH5fSV3INJeh79W.jpg\"]'),
(2, 'Demo Multi Image', 52, 12, '<p>Nothing here</p>', 5000, 1, 0, '2019-10-15 04:49:55', '2019-10-27 10:19:07', 2, '[\"products\\\\October2019\\\\HooMKJVaeaWfr4rghyss.jpg\",\"products\\\\October2019\\\\zpNxGHDsjn7T1HugFE3X.jpg\",\"products\\\\October2019\\\\Bj3OURzrzFP7fAycTflk.jpg\"]'),
(3, 'PAUL MASSION 20 YEAR', 564, 12, '<p>Nothing Here</p>', 40404, 1, 0, '2019-10-15 06:28:44', '2019-10-27 11:19:18', 4, '[\"products\\\\October2019\\\\qDZqB9zQUzRoWRJTfFbW.jpg\"]'),
(4, 'Tam Dao Wine', 345, 33, '<p>Nothing</p>', 45, 0, 0, '2019-10-15 06:29:39', '2019-10-15 06:29:39', 3, '[\"products\\\\October2019\\\\qMqr3sV87o6l4NzKNDAU.jpg\"]'),
(5, 'Da Lat Wine 3 Year', 221, 45, '<p>Something</p>', 4000, 1, 0, '2019-10-15 06:30:12', '2019-10-27 18:50:50', 5, '[\"products\\\\October2019\\\\Rz8tAwpRsm9FW9vbeYeW.jpg\"]'),
(6, 'Tam Dao Wine 6 Year', 564, NULL, '<p>Something</p>', 9999, 1, 1, '2019-10-15 06:30:55', '2019-10-27 11:20:13', 3, '[\"products\\\\October2019\\\\ZLXkwhdBNAw8NYVCSe3q.jpg\"]'),
(7, 'PaPaLe 6 Year', 124, 43, '<p>Something</p>', 24, 1, 1, '2019-10-15 06:31:31', '2019-10-15 06:31:31', 2, '[\"products\\\\October2019\\\\GrAwjRbyIJtvxSMHsndt.jpg\"]'),
(8, 'Passion 5 Year', 342, 23, '<p>Something here</p>', 1, 0, 0, '2019-10-15 06:32:03', '2019-10-15 06:32:03', 2, '[\"products\\\\October2019\\\\jZhxwWmsfQh08tkPPWgy.jpg\"]'),
(9, 'Napa Valley 9 Year', 234, 55, '<p>Something</p>', 0, 0, 0, '2019-10-15 06:35:22', '2019-10-31 22:24:33', 3, '[\"products\\\\October2019\\\\4CGyBnnGt70vXxFfQxZd.jpg\"]'),
(10, 'Gahors 14 Year', 1233, 12, '<p>Something</p>', 99999, 1, 1, '2019-10-15 06:37:24', '2019-10-27 11:21:19', 4, '[\"products\\\\October2019\\\\Si4m9iMRc7P55WKPUs5m.jpg\"]'),
(11, 'Finger 17 Year', 233, 44, '<p>Something</p>', 234, 0, 0, '2019-10-15 06:37:57', '2019-10-15 06:37:57', 5, '[\"products\\\\October2019\\\\8xEtwyD8PhWa4Q7WJTqq.jpg\"]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-09-28 04:33:58', '2019-09-28 04:33:58'),
(2, 'user', 'Normal User', '2019-09-28 04:33:58', '2019-09-28 04:33:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\October2019\\vdUiWfJCAka0SxP3OPmh.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\October2019\\b18S07UyYNZnf0bhx7Xb.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Admin Yolo Shop', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Admin Page.', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\October2019\\8pZM76KU6UOTj2mtdqgq.gif', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rin Admin', 'admin@email.com', 'users\\October2019\\vCkJipM2tQW5OClOyaTy.jpg', NULL, '$2y$10$xEvZg31YxXaQoaleijlIiO9FKGwkjsBX02d6Vg64ZtxCDofepcyPK', 'U1KnpBTzpHyRNtWrI285vgZ7mF7RqdULRRaeaOL0AXsuKqyDsSqSK754JYHi', '{\"locale\":\"en\"}', '2019-09-28 04:35:44', '2019-10-24 19:32:28'),
(2, 2, 'Nguyen Huy Hoang', 'assassin031097@gmail.com', 'users/default.png', NULL, '$2y$10$mLetJjGyTn/KG4hfhfToH.vuxlmTlbzNzNDpw3YPPNEzqbGvfih8K', NULL, '{\"locale\":\"en\"}', '2019-09-28 04:54:25', '2019-09-28 04:54:25'),
(3, 2, 'Rin Smith', 'rinnguyen@gmail.com', 'users/default.png', NULL, '$2y$10$xtMN/UgG.W6hxuNfO.8.4OFKcy7nRQ1om6vqVw6qlc5vXBn678sfS', NULL, NULL, '2019-10-18 20:46:35', '2019-10-18 20:46:35'),
(4, 2, 'Rin Smith', 'hoangdz3997@gmail.com', 'users/default.png', NULL, '$2y$10$UFi.TgOg3yfD04Y7fUJH6eK2ayZ5MgHfT9rsbAziOOkRtdqqvSCJO', NULL, NULL, '2019-10-24 19:16:29', '2019-10-24 19:16:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`product_type_id`);

--
-- Chỉ mục cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Chỉ mục cho bảng `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Chỉ mục cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_index` (`order_id`),
  ADD KEY `order_items_product_id_index` (`product_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_type_id` (`product_type_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Chỉ mục cho bảng `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `product_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
