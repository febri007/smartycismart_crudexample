-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2022 pada 10.23
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cismart_v3_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `com_menu`
--

CREATE TABLE `com_menu` (
  `nav_id` int(11) UNSIGNED NOT NULL,
  `portal_id` int(11) UNSIGNED DEFAULT NULL,
  `parent_id` int(11) UNSIGNED DEFAULT NULL,
  `nav_title` varchar(50) DEFAULT NULL,
  `nav_desc` varchar(100) DEFAULT NULL,
  `nav_url` varchar(100) DEFAULT NULL,
  `nav_no` int(11) UNSIGNED DEFAULT NULL,
  `active_st` enum('1','0') DEFAULT '1',
  `display_st` enum('1','0') DEFAULT '1',
  `nav_icon` varchar(50) DEFAULT NULL,
  `nav_icon_color` char(6) DEFAULT NULL,
  `mdb` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `com_menu`
--

INSERT INTO `com_menu` (`nav_id`, `portal_id`, `parent_id`, `nav_title`, `nav_desc`, `nav_url`, `nav_no`, `active_st`, `display_st`, `nav_icon`, `nav_icon_color`, `mdb`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`) VALUES
(1, 1, 0, 'Home', 'Selamat Datang', 'home/adminwelcome', 1, '1', '1', '', '777777', 1, NULL, NULL, NULL, NULL, NULL),
(2, 1, 0, 'Settings', 'Pengaturan', 'settings/adminportal', 2, '1', '1', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(3, 1, 2, 'Application', 'Pengaturan aplikasi', '-', 21, '1', '1', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(4, 1, 3, 'Web Portal', 'Pengelolaan web portal', 'settings/adminportal', 211, '1', '1', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(5, 1, 3, 'Users', 'Pengelolaan pengguna', 'settings/adminuser', 212, '1', '1', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(6, 1, 3, 'Roles', 'Pengelolaan hak akses', 'settings/adminrole', 213, '1', '1', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(7, 1, 3, 'Navigation', 'Pengelolaan menu', 'settings/adminmenu', 214, '1', '1', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(8, 1, 3, 'Permissions', 'Pengelolaan hak akses pengguna', 'settings/adminpermissions', 215, '1', '1', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(9, 1, 3, 'Preferences', 'Pengelolaan preferences', 'settings/adminpreferences', 216, '1', '0', '', '777777', 1, NULL, NULL, NULL, NULL, NULL),
(199, 1, 1, 'Admin Profile', '-', 'settings/adminprofile', 1, '1', '0', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(574, 2, 0, 'Dashboard', 'Dashboard', 'operator/welcome', 1, '1', '1', 'fa-tachometer-alt', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(652, 2, 574, 'Profil', '-', 'operator/welcome', 1, '1', '1', '', '777', 1, NULL, NULL, NULL, NULL, NULL),
(653, 3, 0, 'Welcome page', 'halaman welcome', 'operator/belajar', 1, '1', '1', 'fab fa-acquisitions-incorporated', '777', 1, '2021-12-14 09:06:02', '2021-12-14 09:06:29', NULL, NULL, NULL),
(654, 3, 653, 'page 2', 'deskripsi', 'operator/belajar', 2, '1', '1', 'fab fa-accessible-icon', '777', 1, '2021-12-14 09:09:00', NULL, NULL, NULL, NULL),
(655, 2, 0, 'testt', 'testt', 'operator/test', 2, '1', '1', 'fab fa-500px', '777', 1, '2021-12-14 09:12:03', NULL, NULL, NULL, NULL),
(656, 4, 0, 'About', 'about', 'halaman2/about', 1, '1', '1', 'fab fa-amilia', '777', 1, '2021-12-14 09:50:45', NULL, NULL, NULL, NULL),
(657, 2, 0, 'upload', 'upload foto', 'operator/upload', 4, '1', '1', 'fas fa-upload', '777', 1, '2021-12-14 11:55:00', NULL, NULL, NULL, NULL),
(658, 2, 0, 'Export Excel', '-', 'operator/exportexcel', 4, '1', '1', 'fab fa-accessible-icon', '777', 1, '2021-12-14 16:12:59', NULL, NULL, NULL, NULL),
(659, 2, 0, 'LockPage', '-', 'operator/exportpdf', 5, '1', '1', 'fab fa-500px', '777', 1, '2021-12-14 16:13:28', '2021-12-16 10:28:50', NULL, NULL, NULL),
(660, 2, 0, 'Data Kampung', '-', 'operator/kampung', 1, '1', '1', 'fab fa-accusoft', '777', 1, '2021-12-15 11:21:42', '2021-12-15 13:02:42', NULL, NULL, NULL),
(661, 2, 0, 'invoice', '-', 'operator/invoice', 5, '1', '1', 'fas fa-address-card', '777', 1, '2021-12-17 09:12:59', '2021-12-17 09:13:48', NULL, NULL, NULL),
(662, 2, 661, 'Input Mail', '-', 'operator/invoice/inpmail', 1, '1', '1', 'far fa-address-book', '777', 1, '2021-12-17 09:28:00', NULL, NULL, NULL, NULL),
(663, 2, 661, 'Inv Example', '-', 'operator/invoice', 1, '1', '1', '', '777', 1, '2021-12-17 09:38:10', NULL, NULL, NULL, NULL),
(664, 2, 0, 'Maps', '-', 'operator/welcome/maps', 7, '1', '1', 'far fa-address-book', '777', 1, '2021-12-17 14:16:57', '2021-12-17 14:17:36', NULL, NULL, NULL),
(665, 2, 0, 'CRUD using Pagination', '-', 'operator/pagination', 2, '1', '1', 'far fa-address-book', '777', 1, '2022-01-05 14:35:14', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `com_portal`
--

CREATE TABLE `com_portal` (
  `portal_id` int(11) UNSIGNED NOT NULL,
  `portal_nm` varchar(50) DEFAULT NULL,
  `site_title` varchar(100) DEFAULT NULL,
  `site_desc` varchar(100) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `mdb` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `portal_session` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `com_portal`
--

INSERT INTO `com_portal` (`portal_id`, `portal_nm`, `site_title`, `site_desc`, `meta_desc`, `meta_keyword`, `mdb`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `portal_session`) VALUES
(1, 'Developer Area', 'CiSmart 3.1.11 Developer Site', '-', '-', '-', 1, NULL, '2021-06-15 11:25:19', NULL, NULL, NULL, NULL),
(2, 'CISMART 3.1.11 Operator Site', 'CISMART 3.1.11 Operator Site', 'CISMART 3.1.11 Operator Site', '-', '-', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Belajar', 'Percobaan Febri', 'belajar', 'deskripsi', 'keyword', 1, '2021-12-14 09:01:52', NULL, NULL, NULL, NULL, 'Z6FAM6J0tKuWgeF90j97'),
(4, 'halaman2', 'halaman2', '-', '-', '-', 1, '2021-12-14 09:47:26', NULL, NULL, NULL, NULL, 'QO8gmhbQIJ6L3esHuQOe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `com_preferences`
--

CREATE TABLE `com_preferences` (
  `pref_id` int(11) UNSIGNED NOT NULL,
  `pref_group` varchar(50) DEFAULT NULL,
  `pref_nm` varchar(50) DEFAULT NULL,
  `pref_value` varchar(255) DEFAULT NULL,
  `mdb` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `com_role`
--

CREATE TABLE `com_role` (
  `role_id` int(11) UNSIGNED NOT NULL,
  `portal_id` int(11) UNSIGNED DEFAULT NULL,
  `role_nm` varchar(50) DEFAULT NULL,
  `role_desc` varchar(100) DEFAULT NULL,
  `default_page` varchar(50) DEFAULT NULL,
  `mdb` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `com_role`
--

INSERT INTO `com_role` (`role_id`, `portal_id`, `role_nm`, `role_desc`, `default_page`, `mdb`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'Developer', '', 'home/adminwelcome', 1, NULL, NULL, NULL, NULL, NULL),
(18, 2, 'IT Support', '-', 'operator/welcome', 1, NULL, '2021-06-17 11:29:01', NULL, NULL, NULL),
(19, 2, 'Operator', 'Operator', 'operator/welcome', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 3, 'belajar role', 'belajar', 'operator/belajar', NULL, NULL, '2021-12-14 09:59:15', NULL, NULL, NULL),
(21, 4, 'rolehalaman2', 'des', 'halaman2/welcome', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `com_role_menu`
--

CREATE TABLE `com_role_menu` (
  `role_id` int(11) UNSIGNED NOT NULL,
  `nav_id` int(11) UNSIGNED NOT NULL,
  `role_tp` varchar(4) NOT NULL DEFAULT '1111'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `com_role_menu`
--

INSERT INTO `com_role_menu` (`role_id`, `nav_id`, `role_tp`) VALUES
(1, 1, '1111'),
(1, 2, '1111'),
(1, 3, '1111'),
(1, 4, '1111'),
(1, 5, '1111'),
(1, 6, '1111'),
(1, 7, '1111'),
(1, 8, '1111'),
(1, 9, '1111'),
(1, 199, '1111'),
(18, 574, '1111'),
(19, 574, '1111'),
(19, 652, '1111'),
(20, 653, '1111'),
(20, 654, '1111'),
(19, 655, '1111'),
(21, 656, '1111'),
(19, 657, '1111'),
(18, 658, '1111'),
(18, 659, '1111'),
(18, 660, '1111'),
(18, 661, '1111'),
(18, 662, '1111'),
(18, 663, '1111'),
(18, 664, '1111'),
(18, 665, '1111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `com_role_user`
--

CREATE TABLE `com_role_user` (
  `role_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `com_role_user`
--

INSERT INTO `com_role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(18, 2),
(19, 67),
(21, 68);

-- --------------------------------------------------------

--
-- Struktur dari tabel `com_user`
--

CREATE TABLE `com_user` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `user_key` varchar(50) DEFAULT NULL,
  `user_mail` varchar(50) DEFAULT NULL,
  `user_st` enum('admin','guru','siswa','staff') DEFAULT 'staff',
  `user_photo` varchar(255) DEFAULT NULL,
  `lock_st` enum('1','0') DEFAULT '0',
  `mdb` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `com_user`
--

INSERT INTO `com_user` (`user_id`, `user_name`, `user_pass`, `user_key`, `user_mail`, `user_st`, `user_photo`, `lock_st`, `mdb`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`) VALUES
(1, 'userdemo', '$2y$10$8jCg4DLERr2ERF6NA8kmN.5zNoaoucSQWr4GI..owNa97UTKWvFGa', '1883219921', 'yayong.dk@excelindo.co.id', 'admin', NULL, '0', 1, NULL, NULL, NULL, NULL, NULL),
(2, 'operator', '$2y$10$scYkQu0FcJ2NXf5F7DuwmOqto8h88yvoNEWR42L4PpRDXVo73LWm2', '3618023297', 'operator@excelindo.co.id', 'admin', NULL, '0', 1, NULL, NULL, NULL, NULL, NULL),
(67, 'operator2', '$2y$10$oVMIiLpCSeNlVHtr7Kk9P.pr0CqLVDaO/GwIWrrSnvt5FpZv..sMi', '2159913756', 'operator@gmail.com', 'staff', NULL, '0', 1, NULL, NULL, NULL, NULL, NULL),
(68, 'febri', '$2y$10$61pZ7pRnJBiLLkD17VfGnepamhWCkXwcZlR2BXUph.F9p4N5dGUxe', '3197939463', 'febrinugroho063@gmail.com', 'admin', NULL, '0', 1, '2021-12-14 09:02:52', '2021-12-14 03:52:31', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `com_user_login`
--

CREATE TABLE `com_user_login` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `login_date` datetime NOT NULL,
  `logout_date` datetime DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `com_user_login`
--

INSERT INTO `com_user_login` (`user_id`, `login_date`, `logout_date`, `ip_address`) VALUES
(1, '2015-08-10 12:20:07', NULL, '127.0.0.1'),
(1, '2015-08-11 08:40:05', NULL, '127.0.0.1'),
(1, '2015-08-12 12:39:37', NULL, '202.91.8.226'),
(1, '2015-08-13 08:34:07', NULL, '127.0.0.1'),
(1, '2015-08-18 08:42:37', NULL, '127.0.0.1'),
(1, '2015-08-26 09:26:54', NULL, '::1'),
(1, '2015-08-27 09:06:18', NULL, '127.0.0.1'),
(1, '2015-08-28 22:36:45', NULL, '127.0.0.1'),
(1, '2015-08-31 08:21:03', NULL, '::1'),
(1, '2015-09-01 08:46:03', NULL, '127.0.0.1'),
(1, '2015-09-02 08:17:50', NULL, '127.0.0.1'),
(1, '2015-09-03 13:55:59', NULL, '127.0.0.1'),
(1, '2015-09-05 08:12:16', NULL, '::1'),
(1, '2015-09-07 14:44:18', NULL, '127.0.0.1'),
(1, '2015-09-08 09:09:43', NULL, '::1'),
(1, '2015-09-10 09:18:01', NULL, '127.0.0.1'),
(1, '2015-09-14 13:38:33', NULL, '127.0.0.1'),
(1, '2015-09-15 10:53:14', NULL, '127.0.0.1'),
(1, '2015-09-16 10:45:15', NULL, '127.0.0.1'),
(1, '2015-09-18 08:23:38', NULL, '127.0.0.1'),
(1, '2015-09-19 13:32:10', NULL, '127.0.0.1'),
(1, '2015-09-21 14:18:29', NULL, '127.0.0.1'),
(1, '2015-09-22 11:29:08', NULL, '127.0.0.1'),
(1, '2015-09-23 12:30:30', NULL, '127.0.0.1'),
(1, '2015-09-30 13:34:07', NULL, '::1'),
(1, '2015-10-01 10:10:27', NULL, '::1'),
(1, '2015-10-07 14:32:16', NULL, '::1'),
(1, '2015-10-09 08:15:03', NULL, '::1'),
(1, '2015-10-11 15:22:30', NULL, '::1'),
(1, '2015-10-16 14:07:41', NULL, '127.0.0.1'),
(1, '2015-10-19 21:24:58', NULL, '::1'),
(1, '2015-10-21 08:16:12', NULL, '::1'),
(1, '2015-10-22 10:37:16', NULL, '::1'),
(1, '2015-10-24 09:35:36', NULL, '::1'),
(1, '2015-10-27 22:05:32', NULL, '::1'),
(1, '2015-10-29 11:44:15', NULL, '::1'),
(1, '2015-11-01 20:22:58', NULL, '::1'),
(1, '2015-11-02 09:51:42', NULL, '::1'),
(1, '2015-11-05 10:00:03', NULL, '::1'),
(1, '2015-11-06 08:26:29', NULL, '::1'),
(1, '2015-11-08 16:26:21', NULL, '::1'),
(1, '2015-11-09 08:42:27', NULL, '::1'),
(1, '2015-11-10 21:13:08', NULL, '::1'),
(1, '2015-11-12 09:32:50', NULL, '::1'),
(1, '2015-11-13 08:55:44', NULL, '::1'),
(1, '2015-11-16 09:10:45', NULL, '::1'),
(1, '2015-11-17 18:11:37', NULL, '::1'),
(1, '2015-11-19 22:06:39', '2015-11-19 22:17:02', '::1'),
(1, '2015-12-14 14:54:24', NULL, '::1'),
(1, '2015-12-19 08:33:44', NULL, '::1'),
(1, '2015-12-21 10:41:11', NULL, '::1'),
(1, '2016-02-19 20:27:25', '2016-02-19 21:28:19', '::1'),
(1, '2016-02-20 09:31:32', NULL, '::1'),
(1, '2016-02-21 10:04:17', NULL, '127.0.0.1'),
(1, '2016-02-22 10:12:01', NULL, '127.0.0.1'),
(1, '2016-02-24 20:34:16', NULL, '127.0.0.1'),
(1, '2016-02-27 08:51:08', NULL, '::1'),
(1, '2016-03-05 09:31:01', NULL, '::1'),
(1, '2016-03-12 10:12:25', NULL, '::1'),
(1, '2021-06-14 08:55:08', '2021-06-14 15:50:50', '127.0.0.1'),
(1, '2021-06-15 11:18:09', '2021-06-15 12:12:16', '127.0.0.1'),
(1, '2021-06-16 12:04:33', '2021-06-16 12:04:43', '127.0.0.1'),
(1, '2021-06-17 11:28:53', '2021-06-17 11:29:19', '127.0.0.1'),
(1, '2021-12-14 08:59:43', NULL, '::1'),
(1, '2021-12-15 08:27:20', NULL, '::1'),
(1, '2021-12-16 10:28:02', NULL, '::1'),
(1, '2021-12-17 08:19:34', NULL, '::1'),
(1, '2021-12-22 10:07:03', NULL, '::1'),
(1, '2022-01-05 14:34:07', NULL, '::1'),
(2, '2015-08-03 08:58:06', '2015-08-03 20:19:17', '::1'),
(2, '2015-08-05 17:40:22', NULL, '::1'),
(2, '2015-08-07 08:51:50', '2015-08-07 16:05:35', '192.168.200.21'),
(2, '2015-08-10 09:19:47', '2015-08-10 16:21:41', '::1'),
(2, '2015-08-11 08:11:31', '2015-08-11 15:59:57', '127.0.0.1'),
(2, '2015-08-12 08:17:05', '2015-08-12 13:26:46', '127.0.0.1'),
(2, '2015-08-13 08:17:54', '2015-08-13 13:07:53', '127.0.0.1'),
(2, '2015-08-18 08:06:59', '2015-08-18 08:42:21', '127.0.0.1'),
(2, '2015-08-19 14:46:47', NULL, '192.168.200.21'),
(2, '2015-08-20 11:58:00', '2015-08-20 16:23:21', '192.168.200.21'),
(2, '2015-08-22 09:15:31', NULL, '192.168.200.21'),
(2, '2015-08-26 09:33:26', NULL, '127.0.0.1'),
(2, '2015-08-27 08:07:20', '2015-08-27 19:36:46', '::1'),
(2, '2015-08-28 11:22:12', '2015-08-28 11:22:17', '::1'),
(2, '2015-08-30 15:52:27', '2015-08-30 16:23:18', '::1'),
(2, '2015-08-31 08:20:34', '2015-08-31 14:44:16', '::1'),
(2, '2015-09-01 08:32:49', '2015-09-01 11:22:57', '127.0.0.1'),
(2, '2015-09-02 08:16:52', '2015-09-02 14:20:33', '127.0.0.1'),
(2, '2015-09-03 09:27:21', '2015-09-03 15:13:02', '127.0.0.1'),
(2, '2015-09-04 08:56:07', '2015-09-04 10:24:51', '127.0.0.1'),
(2, '2015-09-05 08:11:48', '2015-09-05 08:29:24', '::1'),
(2, '2015-09-06 09:22:31', '2015-09-06 15:49:50', '127.0.0.1'),
(2, '2015-09-07 08:10:30', '2015-09-07 16:16:54', '127.0.0.1'),
(2, '2015-09-08 08:14:28', '2015-09-08 13:20:58', '127.0.0.1'),
(2, '2015-09-09 08:10:30', '2015-09-09 09:15:52', '127.0.0.1'),
(2, '2015-09-10 08:21:15', '2015-09-10 09:17:48', '127.0.0.1'),
(2, '2015-09-11 06:58:19', '2015-09-11 14:16:01', '::1'),
(2, '2015-09-12 08:10:21', '2015-09-12 10:58:20', '127.0.0.1'),
(2, '2015-09-13 06:56:27', '2015-09-13 14:36:37', '::1'),
(2, '2015-09-14 08:14:14', '2015-09-14 11:11:20', '127.0.0.1'),
(2, '2015-09-15 08:09:07', '2015-09-15 19:37:46', '127.0.0.1'),
(2, '2015-09-16 09:33:59', '2015-09-16 21:44:21', '127.0.0.1'),
(2, '2015-09-17 09:05:38', '2015-09-17 09:20:17', '127.0.0.1'),
(2, '2015-09-18 08:22:10', '2015-09-18 15:21:43', '127.0.0.1'),
(2, '2015-09-19 09:05:22', '2015-09-19 11:28:44', '127.0.0.1'),
(2, '2015-09-21 08:16:44', '2015-09-21 12:44:59', '127.0.0.1'),
(2, '2015-09-22 08:34:14', NULL, '127.0.0.1'),
(2, '2015-09-23 08:24:34', '2015-09-23 15:50:34', '127.0.0.1'),
(2, '2015-09-25 10:41:44', '2015-09-25 13:25:33', '::1'),
(2, '2015-09-26 08:17:49', '2015-09-26 12:46:59', '127.0.0.1'),
(2, '2015-09-28 08:48:40', '2015-09-28 12:23:20', '127.0.0.1'),
(2, '2015-09-29 08:34:39', NULL, '127.0.0.1'),
(2, '2015-09-30 08:29:12', '2015-09-30 13:36:37', '127.0.0.1'),
(2, '2015-10-01 09:22:21', '2015-10-01 16:20:20', '127.0.0.1'),
(2, '2015-10-02 08:29:12', NULL, '127.0.0.1'),
(2, '2015-10-03 08:36:06', '2015-10-03 22:20:25', '127.0.0.1'),
(2, '2015-10-04 20:24:34', '2015-10-04 20:28:14', '::1'),
(2, '2015-10-05 08:10:13', '2015-10-05 11:29:29', '::1'),
(2, '2015-10-06 02:34:35', '2015-10-06 15:56:44', '::1'),
(2, '2015-10-07 13:11:23', '2015-10-07 23:21:19', '::1'),
(2, '2015-10-09 08:14:44', NULL, '::1'),
(2, '2015-10-10 08:10:50', '2015-10-10 09:46:05', '::1'),
(2, '2015-10-11 13:46:35', '2015-10-11 15:52:00', '::1'),
(2, '2015-10-12 08:23:16', '2015-10-12 13:20:10', '127.0.0.1'),
(2, '2015-10-13 08:06:53', NULL, '::1'),
(2, '2015-10-14 11:04:41', NULL, '::1'),
(2, '2015-10-15 08:03:09', '2015-10-15 13:44:11', '::1'),
(2, '2015-10-16 08:16:40', NULL, '::1'),
(2, '2015-10-17 08:40:57', NULL, '127.0.0.1'),
(2, '2015-10-18 19:57:04', NULL, '127.0.0.1'),
(2, '2015-10-19 08:10:47', '2015-10-19 08:52:15', '::1'),
(2, '2015-10-20 08:08:21', NULL, '127.0.0.1'),
(2, '2015-10-21 08:10:43', '2015-10-21 09:03:03', '::1'),
(2, '2015-10-22 08:09:25', '2015-10-22 15:59:05', '::1'),
(2, '2015-10-23 08:03:28', '2015-10-23 16:23:37', '::1'),
(2, '2015-10-24 08:24:13', '2015-10-24 12:55:59', '::1'),
(2, '2015-10-25 10:15:58', NULL, '::1'),
(2, '2015-10-26 06:19:02', '2015-10-26 15:39:04', '::1'),
(2, '2015-10-27 08:30:00', '2015-10-27 13:55:40', '::1'),
(2, '2015-10-28 08:13:18', '2015-10-28 11:17:25', '::1'),
(2, '2015-10-29 10:47:10', '2015-10-29 11:29:23', '::1'),
(2, '2015-10-30 08:23:45', NULL, '::1'),
(2, '2015-10-31 09:18:22', NULL, '127.0.0.1'),
(2, '2015-11-01 13:33:57', '2015-11-01 20:23:51', '::1'),
(2, '2015-11-02 08:25:32', '2015-11-02 13:33:58', '::1'),
(2, '2015-11-03 08:44:11', '2015-11-03 08:44:30', '127.0.0.1'),
(2, '2015-11-04 08:07:18', NULL, '127.0.0.1'),
(2, '2015-11-05 08:06:38', '2015-11-05 16:20:12', '::1'),
(2, '2015-11-06 00:33:54', '2015-11-06 11:34:55', '::1'),
(2, '2015-11-07 08:30:05', '2015-11-07 11:17:29', '::1'),
(2, '2015-11-08 10:05:55', '2015-11-08 10:33:28', '::1'),
(2, '2015-11-09 08:23:40', '2015-11-09 21:17:52', '::1'),
(2, '2015-11-10 08:53:29', '2015-11-10 21:14:56', '192.168.200.19'),
(2, '2015-11-12 12:38:54', '2015-11-12 16:19:09', '::1'),
(2, '2015-11-13 08:02:47', '2015-11-13 15:51:01', '::1'),
(2, '2015-11-14 00:03:43', '2015-11-14 00:21:27', '::1'),
(2, '2015-11-15 20:10:18', '2015-11-15 20:55:54', '::1'),
(2, '2015-11-16 13:18:14', '2015-11-16 16:27:15', '::1'),
(2, '2015-11-17 08:49:31', '2015-11-17 16:32:50', '::1'),
(2, '2015-11-18 00:27:49', '2015-11-18 22:05:12', '::1'),
(2, '2015-11-19 11:28:07', '2015-11-19 22:16:53', '::1'),
(2, '2015-11-20 08:18:27', '2015-11-20 22:09:52', '::1'),
(2, '2015-11-21 08:42:56', '2015-11-21 12:40:20', '::1'),
(2, '2015-11-22 10:36:44', '2015-11-22 14:13:30', '::1'),
(2, '2015-11-23 13:42:26', '2015-11-23 13:52:26', '::1'),
(2, '2015-11-24 10:01:40', NULL, '::1'),
(2, '2015-11-25 08:31:28', '2015-11-25 15:37:50', '::1'),
(2, '2015-11-26 13:50:51', '2015-11-26 14:47:38', '127.0.0.1'),
(2, '2015-12-14 08:04:05', '2015-12-14 15:31:58', '::1'),
(2, '2015-12-15 08:39:28', '2015-12-15 08:41:24', '::1'),
(2, '2015-12-16 09:04:56', '2015-12-16 13:39:10', '::1'),
(2, '2015-12-17 09:07:05', '2015-12-17 09:09:08', '::1'),
(2, '2015-12-18 10:42:14', '2015-12-18 10:50:42', '::1'),
(2, '2015-12-19 08:37:59', NULL, '::1'),
(2, '2015-12-21 08:40:50', '2015-12-21 13:56:14', '::1'),
(2, '2016-02-23 09:11:36', NULL, '::1'),
(2, '2016-02-27 08:41:20', '2016-02-27 10:05:06', '::1'),
(2, '2016-02-29 08:07:57', NULL, '::1'),
(2, '2016-03-05 09:12:21', '2016-03-05 13:13:47', '::1'),
(2, '2016-03-12 10:11:53', '2016-03-12 10:31:24', '::1'),
(2, '2021-06-14 08:53:15', '2021-06-14 15:34:55', '127.0.0.1'),
(2, '2021-06-15 09:43:52', '2021-06-15 12:53:24', '127.0.0.1'),
(2, '2021-06-16 12:04:16', '2021-06-16 14:41:10', '127.0.0.1'),
(2, '2021-06-17 11:27:38', '2021-06-17 11:28:42', '127.0.0.1'),
(2, '2021-12-14 08:59:18', NULL, '::1'),
(2, '2021-12-15 08:10:35', NULL, '::1'),
(2, '2021-12-16 08:01:56', NULL, '::1'),
(2, '2021-12-17 08:05:11', NULL, '::1'),
(2, '2021-12-22 08:13:03', NULL, '::1'),
(2, '2022-01-03 10:14:04', NULL, '::1'),
(2, '2022-01-05 09:55:48', NULL, '::1'),
(67, '2021-06-14 09:38:15', '2021-06-14 15:21:52', '127.0.0.1'),
(68, '2021-12-14 09:07:36', NULL, '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `com_user_super`
--

CREATE TABLE `com_user_super` (
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `com_user_super`
--

INSERT INTO `com_user_super` (`user_id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kampung`
--

CREATE TABLE `kampung` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `jk` enum('l','p','','') NOT NULL,
  `keterangan` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kampung`
--

INSERT INTO `kampung` (`id`, `nama`, `jk`, `keterangan`, `foto`) VALUES
(28, '1', 'l', '                            333', 'FOT9933.jpg'),
(29, '2', 'l', '4444                            ', 'FOT7974.jpg'),
(30, '3', 'l', '                       1234     ', 'FOT614.jpg'),
(31, 'jkjk', 'l', '                    jkjk        ', 'FOT2470.jpg'),
(32, 'ok', 'p', '                            ok', 'FOT4158.png.jpg'),
(33, 'okaer', 'l', 'lsad                            ', 'FOT3375.png'),
(34, 'bujang', 'l', '123                            ', 'FOT3230.jpg'),
(35, 'f111', 'l', '111                            ', 'FOT2788.jpg'),
(37, 'f444', 'l', '4444                            ', 'FOT7974.jpg'),
(38, 'febri', 'l', '                       1234     ', 'FOT614.jpg'),
(39, 'jkjk', 'l', '                    jkjk        ', 'FOT2470.jpg'),
(40, 'ok', 'p', '                            ok', 'FOT4158.png.jpg'),
(41, 'okaer', 'l', 'lsad                            ', 'FOT3375.png'),
(42, 'bujang', 'l', '123                            ', 'FOT3230.jpg'),
(43, 'f111', 'l', '111                            ', 'FOT2788.jpg'),
(44, 'f333', 'l', '                            333', 'FOT9933.jpg'),
(45, 'f444', 'l', '4444                            ', 'FOT7974.jpg'),
(46, 'febri', 'l', '                       1234     ', 'FOT614.jpg'),
(47, 'jkjk', 'l', '                    jkjk        ', 'FOT2470.jpg'),
(48, 'ok', 'p', '                            ok', 'FOT4158.png.jpg'),
(49, 'okaer', 'l', 'lsad                            ', 'FOT3375.png'),
(50, 'bujang', 'l', '123                            ', 'FOT3230.jpg'),
(51, 'f111', 'l', '111                            ', 'FOT2788.jpg'),
(52, 'f333', 'l', '                            333', 'FOT9933.jpg'),
(53, 'f444', 'l', '4444                            ', 'FOT7974.jpg'),
(54, 'febri', 'l', '                       1234     ', 'FOT614.jpg'),
(55, 'jkjk', 'l', '                    jkjk        ', 'FOT2470.jpg'),
(56, 'ok', 'p', '                            ok', 'FOT4158.png.jpg'),
(57, 'okaer', 'l', 'lsad                            ', 'FOT3375.png'),
(58, 'bujang', 'l', '123                            ', 'FOT3230.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lock_page`
--

CREATE TABLE `lock_page` (
  `id` int(12) NOT NULL,
  `pass` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lock_page`
--

INSERT INTO `lock_page` (`id`, `pass`) VALUES
(1, '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendataan`
--

CREATE TABLE `pendataan` (
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendataan`
--

INSERT INTO `pendataan` (`name`) VALUES
('1234'),
('qqq'),
('tambah'),
('user1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `com_menu`
--
ALTER TABLE `com_menu`
  ADD PRIMARY KEY (`nav_id`),
  ADD KEY `FK_com_menu_p` (`portal_id`);

--
-- Indeks untuk tabel `com_portal`
--
ALTER TABLE `com_portal`
  ADD PRIMARY KEY (`portal_id`);

--
-- Indeks untuk tabel `com_preferences`
--
ALTER TABLE `com_preferences`
  ADD PRIMARY KEY (`pref_id`);

--
-- Indeks untuk tabel `com_role`
--
ALTER TABLE `com_role`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `FK_com_role_p` (`portal_id`);

--
-- Indeks untuk tabel `com_role_menu`
--
ALTER TABLE `com_role_menu`
  ADD PRIMARY KEY (`nav_id`,`role_id`),
  ADD KEY `FK_com_role_menu_r` (`role_id`);

--
-- Indeks untuk tabel `com_role_user`
--
ALTER TABLE `com_role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `FK_com_role_user_r` (`role_id`);

--
-- Indeks untuk tabel `com_user`
--
ALTER TABLE `com_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indeks untuk tabel `com_user_login`
--
ALTER TABLE `com_user_login`
  ADD PRIMARY KEY (`user_id`,`login_date`);

--
-- Indeks untuk tabel `com_user_super`
--
ALTER TABLE `com_user_super`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `kampung`
--
ALTER TABLE `kampung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lock_page`
--
ALTER TABLE `lock_page`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendataan`
--
ALTER TABLE `pendataan`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `com_menu`
--
ALTER TABLE `com_menu`
  MODIFY `nav_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=666;

--
-- AUTO_INCREMENT untuk tabel `com_portal`
--
ALTER TABLE `com_portal`
  MODIFY `portal_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `com_preferences`
--
ALTER TABLE `com_preferences`
  MODIFY `pref_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `com_role`
--
ALTER TABLE `com_role`
  MODIFY `role_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `com_user`
--
ALTER TABLE `com_user`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `kampung`
--
ALTER TABLE `kampung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `lock_page`
--
ALTER TABLE `lock_page`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `com_menu`
--
ALTER TABLE `com_menu`
  ADD CONSTRAINT `FK_com_menu_p` FOREIGN KEY (`portal_id`) REFERENCES `com_portal` (`portal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `com_role`
--
ALTER TABLE `com_role`
  ADD CONSTRAINT `FK_com_role_p` FOREIGN KEY (`portal_id`) REFERENCES `com_portal` (`portal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `com_role_menu`
--
ALTER TABLE `com_role_menu`
  ADD CONSTRAINT `FK_com_role_menu_m` FOREIGN KEY (`nav_id`) REFERENCES `com_menu` (`nav_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_com_role_menu_r` FOREIGN KEY (`role_id`) REFERENCES `com_role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `com_role_user`
--
ALTER TABLE `com_role_user`
  ADD CONSTRAINT `FK_com_role_user_r` FOREIGN KEY (`role_id`) REFERENCES `com_role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_com_role_user_u` FOREIGN KEY (`user_id`) REFERENCES `com_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `com_user_login`
--
ALTER TABLE `com_user_login`
  ADD CONSTRAINT `FK_com_user_login` FOREIGN KEY (`user_id`) REFERENCES `com_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `com_user_super`
--
ALTER TABLE `com_user_super`
  ADD CONSTRAINT `FK_com_user_super` FOREIGN KEY (`user_id`) REFERENCES `com_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
