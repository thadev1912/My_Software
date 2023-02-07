-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2022 lúc 03:01 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhansu_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baohiem`
--

CREATE TABLE `baohiem` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_bhxh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_nv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_bhxh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaycap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayhethan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noicap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiendong_bhxh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baohiem`
--

INSERT INTO `baohiem` (`id`, `ma_bhxh`, `ma_nv`, `loai_bhxh`, `ngaycap`, `ngayhethan`, `noicap`, `tiendong_bhxh`, `created_at`, `updated_at`) VALUES
(1, 'BHMFVN01', 'MFNV01', 'BHXH Tự Nguyện', '20/12/2021', '20/12/2022', 'Cần Thơ', '450000', NULL, NULL),
(2, 'BHMFVN02', 'MFNV02', 'BHXH Tự Nguyện', '15/02/2021', '15/02/2022', 'Cầu Kè-Trà Vinh', '500000', NULL, NULL),
(4, 'BHMFNV03', 'MFNV03', 'BHXH Tự Nguyện', '18/08/2020', '18/09/2021', 'Cai Lậy-Bến Tre', '450000', NULL, NULL),
(5, 'BHMFNV04', 'MFNV04', 'BHXH Tự Nguyện\r\n', '08/08/2020', '18/10/2021', 'Cai Lậy-Bến Tre', '500000', NULL, NULL),
(6, 'BHMFNV05', 'MFNV05', 'BHXH Tự Nguyện', '05/08/2020', '10/02/2021', 'Cai Lậy-Bến Tre', '450000', NULL, NULL),
(7, 'BHMFNV06', 'MFNV06', 'BHXH Tự Nguyện', '05/08/2020', '10/02/2021', 'Cai Lậy-Bến Tre', '450000', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`id`, `ma_cv`, `ten_cv`, `created_at`, `updated_at`) VALUES
(1, 'GĐ', 'Giám Đốc\r\n', NULL, NULL),
(2, 'NV', 'Nhân Viên', NULL, NULL),
(4, 'TP', 'Trưởng Phòng', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_dh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_sp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `ma_dh`, `ma_user`, `hoten_user`, `sdt_user`, `diachi_user`, `anh_sp`, `ten_sp`, `gia`, `sl`, `created_at`, `updated_at`) VALUES
(13, 'DHL_SIEUGA_2022-11-11', 'sieuga', 'Thạch Chanh Tha', '0908 346 989', '134-Nguyễn Đệ-Quận Ninh Kiều-TP. Cần Thơ', 'laptop_asus.jpg', 'Laptop Asus', '20000000', '5', '2022-11-11 02:37:51', '2022-11-11 02:37:51'),
(14, 'DHL_SIEUGA_2022-11-11', 'sieuga', 'Thạch Chanh Tha', '0908 346 989', '134-Nguyễn Đệ-Quận Ninh Kiều-TP. Cần Thơ', 'laptop_dell.jpg', 'Laptop Dell', '19000000', '2', '2022-11-11 02:37:51', '2022-11-11 02:37:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dulieuchamcong`
--

CREATE TABLE `dulieuchamcong` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_nv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_pb` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_chamcong` date NOT NULL,
  `gio_vao` time NOT NULL,
  `gio_ra` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dulieuchamcong`
--

INSERT INTO `dulieuchamcong` (`id`, `ma_nv`, `ma_cv`, `ma_pb`, `ngay_chamcong`, `gio_vao`, `gio_ra`, `created_at`, `updated_at`) VALUES
(709, 'MFNV01', 'GĐ', 'HCNS', '2022-01-01', '07:50:00', '17:32:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(710, 'MFNV01', 'GĐ', 'HCNS', '2022-01-02', '07:52:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(711, 'MFNV01', 'GĐ', 'HCNS', '2022-01-03', '07:54:00', '17:31:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(712, 'MFNV01', 'GĐ', 'HCNS', '2022-01-04', '07:55:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(713, 'MFNV01', 'GĐ', 'HCNS', '2022-01-05', '07:56:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(714, 'MFNV01', 'GĐ', 'HCNS', '2022-01-06', '07:58:00', '17:32:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(715, 'MFNV01', 'GĐ', 'HCNS', '2022-01-07', '07:50:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(716, 'MFNV01', 'GĐ', 'HCNS', '2022-01-08', '07:50:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(717, 'MFNV01', 'GĐ', 'HCNS', '2022-01-09', '07:50:00', '17:32:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(718, 'MFNV01', 'GĐ', 'HCNS', '2022-01-10', '08:00:00', '17:31:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(719, 'MFNV01', 'GĐ', 'HCNS', '2022-01-11', '07:50:00', '17:31:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(720, 'MFNV01', 'GĐ', 'HCNS', '2022-01-12', '07:50:00', '17:31:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(721, 'MFNV02', 'GĐ', 'KT', '2022-01-01', '08:01:00', '17:32:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(722, 'MFNV02', 'GĐ', 'KT', '2022-01-02', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(723, 'MFNV02', 'GĐ', 'KT', '2022-01-03', '08:05:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(724, 'MFNV02', 'GĐ', 'KT', '2022-01-04', '08:00:00', '17:29:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(725, 'MFNV02', 'GĐ', 'KT', '2022-01-05', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(726, 'MFNV02', 'GĐ', 'KT', '2022-01-06', '08:05:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(727, 'MFNV02', 'GĐ', 'KT', '2022-01-07', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(728, 'MFNV02', 'GĐ', 'KT', '2022-01-08', '08:00:00', '17:28:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(729, 'MFNV02', 'GĐ', 'KT', '2022-01-09', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(730, 'MFNV02', 'GĐ', 'KT', '2022-01-10', '08:01:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(731, 'MFNV02', 'GĐ', 'KT', '2022-01-11', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(732, 'MFNV02', 'GĐ', 'KT', '2022-01-12', '08:05:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(733, 'MFNV03', 'NV', 'KT', '2022-01-01', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(734, 'MFNV03', 'NV', 'KT', '2022-01-02', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(735, 'MFNV03', 'NV', 'KT', '2022-01-03', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(736, 'MFNV03', 'NV', 'KT', '2022-01-04', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(737, 'MFNV03', 'NV', 'KT', '2022-01-05', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(738, 'MFNV03', 'NV', 'KT', '2022-01-06', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(739, 'MFNV03', 'NV', 'KT', '2022-01-07', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(740, 'MFNV03', 'NV', 'KT', '2022-01-08', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(741, 'MFNV03', 'NV', 'KT', '2022-01-09', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(742, 'MFNV03', 'NV', 'KT', '2022-01-10', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(743, 'MFNV03', 'NV', 'KT', '2022-01-11', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(744, 'MFNV03', 'NV', 'KT', '2022-01-12', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(745, 'MFNV04', 'GĐ', 'CNTT', '2022-01-01', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(746, 'MFNV04', 'GĐ', 'CNTT', '2022-01-02', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(747, 'MFNV04', 'GĐ', 'CNTT', '2022-01-03', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(748, 'MFNV04', 'GĐ', 'CNTT', '2022-01-04', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(749, 'MFNV04', 'GĐ', 'CNTT', '2022-01-05', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(750, 'MFNV04', 'GĐ', 'CNTT', '2022-01-06', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(751, 'MFNV04', 'GĐ', 'CNTT', '2022-01-07', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(752, 'MFNV04', 'GĐ', 'CNTT', '2022-01-08', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(753, 'MFNV04', 'GĐ', 'CNTT', '2022-01-09', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(754, 'MFNV04', 'GĐ', 'CNTT', '2022-01-10', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(755, 'MFNV04', 'GĐ', 'CNTT', '2022-01-11', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(756, 'MFNV04', 'GĐ', 'CNTT', '2022-01-12', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(757, 'MFNV05', 'NV', 'HCNS', '2022-01-01', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(758, 'MFNV05', 'NV', 'HCNS', '2022-01-02', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(759, 'MFNV05', 'NV', 'HCNS', '2022-01-03', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(760, 'MFNV05', 'NV', 'HCNS', '2022-01-04', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(761, 'MFNV05', 'NV', 'HCNS', '2022-01-05', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(762, 'MFNV05', 'NV', 'HCNS', '2022-01-06', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(763, 'MFNV05', 'NV', 'HCNS', '2022-01-07', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(764, 'MFNV05', 'NV', 'HCNS', '2022-01-08', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(765, 'MFNV05', 'NV', 'HCNS', '2022-01-09', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(766, 'MFNV05', 'NV', 'HCNS', '2022-01-10', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(767, 'MFNV05', 'NV', 'HCNS', '2022-01-11', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(768, 'MFNV05', 'NV', 'HCNS', '2022-01-12', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(769, 'MFNV06', 'NV', 'HCNS', '2022-01-01', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(770, 'MFNV06', 'NV', 'HCNS', '2022-01-02', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(771, 'MFNV06', 'NV', 'HCNS', '2022-01-03', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(772, 'MFNV06', 'NV', 'HCNS', '2022-01-04', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(773, 'MFNV06', 'NV', 'HCNS', '2022-01-05', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(774, 'MFNV06', 'NV', 'HCNS', '2022-01-06', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(775, 'MFNV06', 'NV', 'HCNS', '2022-01-07', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(776, 'MFNV06', 'NV', 'HCNS', '2022-01-08', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(777, 'MFNV06', 'NV', 'HCNS', '2022-01-09', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(778, 'MFNV06', 'NV', 'HCNS', '2022-01-10', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(779, 'MFNV06', 'NV', 'HCNS', '2022-01-11', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(780, 'MFNV06', 'NV', 'HCNS', '2022-01-12', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40'),
(781, 'MFNV06', 'NV', 'HCNS', '2022-01-13', '08:00:00', '17:30:00', '2022-10-25 21:24:40', '2022-10-25 21:24:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `excel`
--

CREATE TABLE `excel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `excel`
--

INSERT INTO `excel` (`id`, `name`, `email`, `age`, `created_at`, `updated_at`) VALUES
(1, 'kimluyen', 'kimluyen@gmail.com', '21', '2022-10-20 18:12:46', '2022-10-20 18:12:46'),
(2, 'vuhai', 'vuhai@gmail.com', '23', '2022-10-20 18:12:46', '2022-10-20 18:12:46'),
(3, 'myhanh', 'myhanh@gmail.com', '30', '2022-10-20 18:12:46', '2022-10-20 18:12:46'),
(4, 'manhtoan', 'manhtoan@gmail.com', '23', '2022-10-20 18:12:46', '2022-10-20 18:12:46'),
(5, 'ngoctrinh', 'ngoctrinh@gmail.com', '40', '2022-10-20 18:12:46', '2022-10-20 18:12:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_sp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `ma_sp`, `ma_user`, `created_at`, `updated_at`) VALUES
(161278, '3', 'tha', '2022-11-11 03:08:34', '2022-11-11 03:08:34'),
(161279, '4', 'tha', '2022-11-11 03:08:37', '2022-11-11 03:08:37'),
(161280, '4', 'tha', '2022-11-11 03:08:40', '2022-11-11 03:08:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hopdong`
--

CREATE TABLE `hopdong` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_hd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_nv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heso_luong` int(255) NOT NULL,
  `ngayvao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_hd` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phu_cap` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_macdinh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_nghiviec` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hopdong`
--

INSERT INTO `hopdong` (`id`, `ma_hd`, `ma_nv`, `heso_luong`, `ngayvao`, `tinhtrang`, `loai_hd`, `phu_cap`, `ngay_macdinh`, `ngay_nghiviec`, `created_at`, `updated_at`) VALUES
(1, 'HD0610MFVN01', 'MFNV01', 8000000, '12/05/2022', 'Nhân Viên Chính Thức', 'Hợp Đồng 12 Tháng', '500000', '', '', NULL, NULL),
(2, 'HD0610MFVN02', 'MFNV02', 8000000, '25/02/2021', 'Nhân Viên Chính Thức', 'Hợp Đồng 12 Tháng', '500000', '', '', NULL, NULL),
(8, 'HD0710MFVN03', 'MFNV03', 6000000, '18/01/2020', 'Nhân Viên Thử Việc', 'Đang thử việc!!!', '300000', '', '', NULL, NULL),
(9, 'HD0810MFVN04', 'MFNV04', 6000000, '14/08/2019', 'Nhân Viên Thử Việc', 'Đang thử việc!!!', '300000', '', '', NULL, NULL),
(11, 'HD0710MFVN05', 'MFNV05', 6000000, '18/01/2020', 'Nhân Viên Thử Việc', 'Đang thử việc!!!', '300000', '', '', NULL, NULL),
(12, 'HD0710MFVN06', 'MFNV06', 6000000, '28/01/2020', 'Nhân Viên Thử Việc', 'Đang thử việc!!!', '300000', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khenthuong`
--

CREATE TABLE `khenthuong` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_nv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotien` int(11) NOT NULL,
  `ngay_khenthuong` date NOT NULL,
  `lydo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khenthuong`
--

INSERT INTO `khenthuong` (`id`, `ma_nv`, `sotien`, `ngay_khenthuong`, `lydo`, `created_at`, `updated_at`) VALUES
(1, 'MFNV01', 500000, '2022-10-10', 'Đạt thành tích xuất sắc', NULL, NULL),
(2, 'MFNV03', 300000, '2022-10-05', 'Đạt thành tích xuất sắc', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kyluat`
--

CREATE TABLE `kyluat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_nv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotien` int(11) NOT NULL,
  `ngay_kyluat` date NOT NULL,
  `lydo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kyluat`
--

INSERT INTO `kyluat` (`id`, `ma_nv`, `sotien`, `ngay_kyluat`, `lydo`, `created_at`, `updated_at`) VALUES
(1, 'MFNV02', 200000, '2022-10-12', 'Đi trễ', NULL, NULL),
(2, 'MFNV04', 100000, '2022-10-10', 'Đi trễ', NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_04_044334_create_nhanvien_table', 1),
(6, '2022_10_05_071621_create_phongban_table', 2),
(7, '2022_10_06_010943_create_hopdong_table', 3),
(8, '2022_10_06_032107_create_baohiem_table', 4),
(9, '2022_10_07_025039_create_chucvu_table', 5),
(10, '2022_10_12_044326_create_khenthuong_table', 6),
(11, '2022_10_12_074914_create_kyluat_table', 6),
(12, '2022_10_17_012823_create_phepnam_table', 6),
(13, '2022_10_20_090526_create_excel_table', 7),
(14, '2022_10_21_011057_create_excel_table', 8),
(15, '2022_10_21_025338_create_dulieuchamcong_table', 9),
(16, '2022_10_21_030828_create_dulieuchamcong_table', 10),
(17, '2022_11_01_032358_create_product_table', 11),
(19, '2022_11_08_083824_create_giohang_table', 13),
(20, '2022_11_08_042348_create_donhang_table', 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_nv` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten_nv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi_nv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh_nv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_nv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhdaidien` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_pb` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_cv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `ma_nv`, `hoten_nv`, `diachi_nv`, `gioitinh_nv`, `sdt_nv`, `anhdaidien`, `ma_pb`, `ma_cv`, `updated_at`, `created_at`) VALUES
(1, 'MFNV01', 'Nguyễn Hoàng Đức', 'Trà Vinh', 'Nam', '0908 346 989', '1.jpg', 'HCNS', 'GĐ', '2022-10-17 03:56:17', NULL),
(2, 'MFNV02', 'Lý Mộng Tuyền', 'Bến Tre', 'Nữ', '0908 468 787', '2.jpg', 'KT', 'GĐ', '2022-10-17 03:56:29', NULL),
(3, 'MFNV03', 'Trần Văn Liêm', 'Kiên Giang', 'Nam', '0908 346 989', '4.jpg', 'KT', 'NV', '2022-10-17 02:30:29', NULL),
(4, 'MFNV04', 'Đỗ Kim Ái ', 'Cà Mau', 'Nữ', '0908 468 755', '1.jpg', 'CNTT', 'GĐ', '2022-10-17 02:29:50', NULL),
(6, 'MFNV05', 'Lê Thị Mỹ Tiên', 'Long An', 'Nữ', '0764854577', '6.jpg', 'HCNS', 'NV', '2022-10-17 04:07:19', '2022-10-04 21:28:36'),
(7, 'MFNV06', 'Trần Hoài Nam', 'Hậu Giang', 'Nam', '124879779', '5.jpg', 'CNTT', 'NV', '2022-10-26 09:01:44', '2022-10-04 21:29:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `phepnam`
--

CREATE TABLE `phepnam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_nv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_batdau` date NOT NULL,
  `phepnam_dadung` int(10) NOT NULL,
  `ngay_ketthuc` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phepnam`
--

INSERT INTO `phepnam` (`id`, `ma_nv`, `ngay_batdau`, `phepnam_dadung`, `ngay_ketthuc`, `created_at`, `updated_at`) VALUES
(2, 'MFNV02', '2022-08-11', 1, NULL, NULL, NULL),
(3, 'MFNV03', '2022-09-14', 1, '2022-10-14', NULL, NULL),
(4, 'MFNV04', '2022-05-17', 3, '2022-10-14', NULL, NULL),
(5, 'MFNV06', '2022-10-05', 0, '2022-10-19', NULL, NULL),
(6, 'MFNV01', '2022-04-03', 2, '2022-08-18', NULL, NULL),
(7, 'MFNV05', '2022-02-27', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_pb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_pb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`id`, `ma_pb`, `ten_pb`, `created_at`, `updated_at`) VALUES
(1, 'HCNS', 'Hành Chánh Nhân Sự', NULL, NULL),
(2, 'KT', 'Kế Toán', NULL, NULL),
(3, 'CNTT', 'Công Nghệ Thông Tin', NULL, NULL),
(6, 'MKT', 'Marketting', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhmuc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `danhmuc`, `created_at`, `updated_at`) VALUES
(1, 'Laptop HP', '18000000', 'laptop_hp.jpg', 'laptop', NULL, NULL),
(2, 'Laptop Dell', '19000000', 'laptop_dell.jpg', 'laptop', NULL, NULL),
(3, 'Laptop Asus', '20000000', 'laptop_asus.jpg', 'laptop', NULL, NULL),
(4, 'Laptop Lenovo', '15000000', 'laptop_lenovo.png', 'laptop', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test`
--

CREATE TABLE `test` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_kh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_sp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dongia_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tonggia_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `test`
--

INSERT INTO `test` (`id`, `ma_kh`, `hoten`, `diachi`, `sdt`, `ten_sp`, `dongia_sp`, `soluong_sp`, `tonggia_sp`, `created_at`, `updated_at`) VALUES
(3, 'tha', 'Lâm Nhật Huy', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', '038 778 1268', '', '172000000', '10', '171460000', '2022-11-08 00:25:24', '2022-11-08 00:25:24'),
(5, 'tha', 'Lâm Nhật Huy', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', '038 778 1268', '', '56000000', '3', '55460000', '2022-11-08 00:48:51', '2022-11-08 00:48:51'),
(6, 'sieuga', 'Thạch Chanh Tha(Sieuga)', '134-Nguyễn Đệ-Quận Ninh Kiều-TP. Cần Thơ', '0908 346 989', '', '59000000', '3', '58460000', '2022-11-08 00:51:42', '2022-11-08 00:51:42'),
(7, 'sieuga', 'Thạch Chanh Tha', '134-Nguyễn Đệ-Quận Ninh Kiều-TP. Cần Thơ', '0908 346 989', '', '88000000', '5', '87460000', '2022-11-08 02:47:32', '2022-11-08 02:47:32'),
(8, 'sieuga', 'Thạch Chanh Tha', '134-Nguyễn Đệ-Quận Ninh Kiều-TP. Cần Thơ', '0908 346 989', '', '114000000', '6', '113460000', '2022-11-10 19:03:36', '2022-11-10 19:03:36'),
(9, 'sieuga', 'Thạch Chanh Tha', '134-Nguyễn Đệ-Quận Ninh Kiều-TP. Cần Thơ', '0908 346 989', '', '65000000', '4', '64460000', '2022-11-10 20:07:59', '2022-11-10 20:07:59'),
(10, 'sieuga', 'Thạch Chanh Tha', '134-Nguyễn Đệ-Quận Ninh Kiều-TP. Cần Thơ', '0908 346 989', '', '78000000', '4', '77460000', '2022-11-10 20:36:07', '2022-11-10 20:36:07'),
(11, 'tha', 'Lâm Nhật Huy', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', '038 778 1268', '', '54000000', '3', '53460000', '2022-11-10 20:37:32', '2022-11-10 20:37:32'),
(12, 'tha', 'Lâm Nhật Huy', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', '038 778 1268', 'Laptop Asus', '149000000', '8', '148460000', '2022-11-10 21:17:38', '2022-11-10 21:17:38'),
(13, 'tha', 'Lâm Nhật Huy', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', '038 778 1268', 'Laptop HP', '36000000', '2', '35460000', '2022-11-10 21:19:07', '2022-11-10 21:19:07'),
(14, 'tha', 'Lâm Nhật Huy', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', '038 778 1268', 'Laptop Asus', '39000000', '2', '38460000', '2022-11-10 21:19:45', '2022-11-10 21:19:45'),
(15, 'tha', 'Lâm Nhật Huy', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', '038 778 1268', 'Laptop HP', '57000000', '3', '56460000', '2022-11-10 21:20:55', '2022-11-10 21:20:55'),
(16, 'tha', 'Lâm Nhật Huy', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', '038 778 1268', 'Laptop Asus', '38000000', '2', '37460000', '2022-11-10 21:25:57', '2022-11-10 21:25:57'),
(17, 'tha', 'Lâm Nhật Huy', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', '038 778 1268', 'Laptop Asus', '39000000', '2', '0', '2022-11-10 21:42:08', '2022-11-10 21:42:08'),
(18, 'tha', 'Lâm Nhật Huy', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', '038 778 1268', 'Laptop Lenovo', '34000000', '2', '0', '2022-11-10 21:43:59', '2022-11-10 21:43:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permision` int(10) NOT NULL,
  `avatar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `hoten`, `email`, `sdt`, `diachi`, `email_verified_at`, `password`, `remember_token`, `permision`, `avatar`, `created_at`, `updated_at`) VALUES
(4, 'sieuga', 'Thạch Chanh Tha', 'sieuga@gmail.com', '0908 346 989', '134-Nguyễn Đệ-Quận Ninh Kiều-TP. Cần Thơ', NULL, '$2y$10$gDKXD/nQg3IQ/qUjylFa4e2JmWuVC5RzTfBMdDWtK0b79Tayg/VoS', NULL, 1, 'sieuga.jpg', '2022-10-26 18:58:32', '2022-10-26 18:58:32'),
(6, 'tha', 'Lâm Nhật Huy', 'tha@gmail.com', '038 778 1268', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', NULL, '$2y$10$5.YVN9G4ES7PWL.ZsFHgy.0DAX1.15Matt3my6QT4Q15BGa9hAjb.', NULL, 2, 'tha.jpg', '2022-10-26 21:45:12', '2022-10-26 21:45:12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baohiem`
--
ALTER TABLE `baohiem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dulieuchamcong`
--
ALTER TABLE `dulieuchamcong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `excel`
--
ALTER TABLE `excel`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khenthuong`
--
ALTER TABLE `khenthuong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kyluat`
--
ALTER TABLE `kyluat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `phepnam`
--
ALTER TABLE `phepnam`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baohiem`
--
ALTER TABLE `baohiem`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `dulieuchamcong`
--
ALTER TABLE `dulieuchamcong`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=782;

--
-- AUTO_INCREMENT cho bảng `excel`
--
ALTER TABLE `excel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161281;

--
-- AUTO_INCREMENT cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `khenthuong`
--
ALTER TABLE `khenthuong`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `kyluat`
--
ALTER TABLE `kyluat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phepnam`
--
ALTER TABLE `phepnam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `phongban`
--
ALTER TABLE `phongban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
