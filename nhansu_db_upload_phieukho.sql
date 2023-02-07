-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 06, 2023 lúc 02:10 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

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
-- Cấu trúc bảng cho bảng `chitiet`
--

CREATE TABLE `chitiet` (
  `id` int(11) NOT NULL,
  `dac_tinh` varchar(50) NOT NULL,
  `chi_tiet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiet`
--

INSERT INTO `chitiet` (`id`, `dac_tinh`, `chi_tiet`) VALUES
(1, '1', 'xanh lá, xanh cam'),
(2, '2', 'rộng/hẹp'),
(3, '3', '68/92'),
(4, '4', '16/32/'),
(5, '5', 'Khuôn mặt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietnhapkho_banhang`
--

CREATE TABLE `chitietnhapkho_banhang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_phieunhap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_vattu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sl_vattu` int(20) NOT NULL,
  `id_kho` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietnhapkho_banhang`
--

INSERT INTO `chitietnhapkho_banhang` (`id`, `id_phieunhap`, `id_vattu`, `sl_vattu`, `id_kho`, `created_at`, `updated_at`) VALUES
(6, 'PNK_2023-02-05', 'VT01', 123, 'KH01', '2023-02-04 21:00:17', '2023-02-04 21:00:17'),
(7, 'PNK_2023-02-05', 'VT02', 999999, 'KH01', '2023-02-04 21:05:06', '2023-02-04 21:05:06'),
(8, 'PNK_2023-02-05', 'VT01', 33333, 'KH01', '2023-02-04 21:11:59', '2023-02-04 21:11:59'),
(9, 'PNK_2023-02-05', 'VT01', 888888, 'KH01', '2023-02-04 21:12:58', '2023-02-04 21:12:58'),
(10, 'PNK_2023-02-05', 'VT01', 123, 'KH01', '2023-02-04 21:26:56', '2023-02-04 21:26:56'),
(11, 'PNK_2023-02-05', 'VT01', 8888, 'KH01', '2023-02-04 21:29:20', '2023-02-04 21:29:20'),
(12, 'PNK_2023-02-05', 'VT01', 8888, 'KH01', '2023-02-04 21:30:51', '2023-02-04 21:30:51'),
(13, 'PNK_2023-02-05', 'VT02', 123, 'KH01', '2023-02-04 21:32:09', '2023-02-04 21:32:09'),
(14, 'PNK_2023-02-05', 'VT02', 123, 'KH01', '2023-02-04 21:33:07', '2023-02-04 21:33:07'),
(15, 'PNK_2023-02-05', 'VT01', 1111, 'KH01', '2023-02-04 21:38:33', '2023-02-04 21:38:33'),
(16, '123', '123', 123, 'KH01', '2023-02-04 21:40:56', '2023-02-04 21:40:56'),
(17, 'PNK_2023-02-05', 'VT01', 123, 'KH01', '2023-02-04 21:41:57', '2023-02-04 21:41:57'),
(18, 'PNK_2023-02-05', 'VT01', 23411, 'KH01', '2023-02-04 21:46:36', '2023-02-04 21:46:36'),
(19, 'PNK_2023-02-05', 'VT01', 123, 'KH01', '2023-02-04 21:46:57', '2023-02-04 21:46:57'),
(20, 'PNK_2023-02-05', 'VT01', 2324, 'KH01', '2023-02-04 21:47:48', '2023-02-04 21:47:48'),
(21, 'PNK_2023-02-05', 'VT02', 123, 'KH01', '2023-02-04 21:48:56', '2023-02-04 21:48:56'),
(22, 'PNK_2023-02-05', 'VT02', 123456, 'KH01', '2023-02-04 21:49:03', '2023-02-04 21:49:03'),
(23, 'PNK0012', 'VT01', 12, 'KH01', '2023-02-05 01:48:22', '2023-02-05 01:48:22'),
(24, 'PNK0012', 'VT02', 8, 'KH01', '2023-02-05 01:49:46', '2023-02-05 01:49:46'),
(39, 'PNK0015', 'VT01', 8888, 'KH01', '2023-02-05 04:50:53', '2023-02-05 04:50:53'),
(40, 'PNK0015', 'VT02', 888888, 'KH01', '2023-02-05 04:51:03', '2023-02-05 04:51:03'),
(41, 'PNK0016', 'VT01', 123, 'KH01', '2023-02-05 22:09:54', '2023-02-05 22:09:54'),
(42, 'PNK0016', 'VT02', 567, 'KH01', '2023-02-06 04:09:07', '2023-02-06 04:09:07');

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
-- Cấu trúc bảng cho bảng `dactinh`
--

CREATE TABLE `dactinh` (
  `id` int(11) NOT NULL,
  `dac_tinh` varchar(50) NOT NULL,
  `chi_tiet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dactinh`
--

INSERT INTO `dactinh` (`id`, `dac_tinh`, `chi_tiet`) VALUES
(1, 'màu ', 'xanh lá, xanh cam'),
(2, 'camera', 'rộng/hẹp'),
(3, 'IP', '68/92'),
(4, 'Ram', '16/32/'),
(5, 'Face ID', 'Khuôn mặt/Vân Tay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dactinh_chitiet`
--

CREATE TABLE `dactinh_chitiet` (
  `id` int(11) NOT NULL,
  `dac_tinh` varchar(50) NOT NULL,
  `chi_tiet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dactinh_chitiet`
--

INSERT INTO `dactinh_chitiet` (`id`, `dac_tinh`, `chi_tiet`) VALUES
(1, '1', '1'),
(2, '4', '4'),
(3, '3', '2'),
(4, '2', '4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dactinh_sanpham`
--

CREATE TABLE `dactinh_sanpham` (
  `id` int(11) NOT NULL,
  `san_pham` varchar(50) NOT NULL,
  `dac_tinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dactinh_sanpham`
--

INSERT INTO `dactinh_sanpham` (`id`, `san_pham`, `dac_tinh`) VALUES
(7, '1', '1'),
(8, '2', '2'),
(13, '3', '3'),
(14, '4', '1'),
(15, '1', '2'),
(16, '1', '3'),
(17, '5', '1'),
(18, '5', '2'),
(19, '5', '3'),
(20, '5', '4'),
(21, '5', '5');

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
(14, 'DHL_SIEUGA_2022-11-11', 'sieuga', 'Thạch Chanh Tha', '0908 346 989', '134-Nguyễn Đệ-Quận Ninh Kiều-TP. Cần Thơ', 'laptop_dell.jpg', 'Laptop Dell', '19000000', '2', '2022-11-11 02:37:51', '2022-11-11 02:37:51'),
(15, 'DHL_THA_2022-12-15', 'tha', 'Lâm Nhật Huy', '038 778 1268', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', 'laptop_asus.jpg', 'Laptop Asus', '20000000', '3', '2022-12-15 00:53:20', '2022-12-15 00:53:20'),
(16, 'DHL_THA_2022-12-15', 'tha', 'Lâm Nhật Huy', '038 778 1268', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', 'laptop_lenovo.png', 'Laptop Lenovo', '15000000', '2', '2022-12-15 00:53:20', '2022-12-15 00:53:20'),
(17, 'DHL_THA_2022-12-15', 'tha', 'Lâm Nhật Huy', '038 778 1268', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', 'dt_iphone.jpg', 'Điện thoại Iphone', '40000000', '1', '2022-12-15 02:11:15', '2022-12-15 02:11:15'),
(18, 'DHL_THA_2022-12-15', 'tha', 'Lâm Nhật Huy', '038 778 1268', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', 'dongho_1.jpg', 'Đồng Hồ Nam_Casio', '5000000', '3', '2022-12-15 02:11:15', '2022-12-15 02:11:15');

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
-- Cấu trúc bảng cho bảng `email`
--

CREATE TABLE `email` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `email`
--

INSERT INTO `email` (`id`, `ma_email`, `email`, `created_at`, `updated_at`) VALUES
(1, '1', 'tha@gmail.com', NULL, NULL),
(2, '2', 'sieuga@gmail.com', NULL, NULL),
(3, '3', 'munchau@gmail.com', NULL, NULL),
(4, '4', 'tha123@gmail.com', NULL, NULL),
(5, '5', 'sieuga123@gmail.com', NULL, NULL),
(6, '6', 'munchau123@gmail.com', NULL, NULL),
(8, '10', 'munchau123@gmail.com', NULL, NULL);

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
(161328, '6', 'tha', '2022-12-15 02:13:03', '2022-12-15 02:13:03'),
(161329, '10', 'tha', '2022-12-15 02:13:06', '2022-12-15 02:13:06'),
(161333, '10', 'tha', '2022-12-22 07:36:54', '2022-12-22 07:36:54'),
(161335, '1', 'sieuga', '2023-01-08 05:08:37', '2023-01-08 05:08:37'),
(161336, '2', 'sieuga', '2023-01-08 05:08:37', '2023-01-08 05:08:37'),
(161337, '11', 'sieuga', '2023-01-08 05:08:37', '2023-01-08 05:08:37'),
(161338, '5', 'sieuga', '2023-01-08 05:08:37', '2023-01-08 05:08:37'),
(161339, '5', 'sieuga', '2023-01-08 05:08:37', '2023-01-08 05:08:37');

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
-- Cấu trúc bảng cho bảng `invoice`
--

CREATE TABLE `invoice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_number`, `created_at`, `updated_at`) VALUES
(1, 'PNK0001', NULL, NULL),
(2, 'PNK0002', NULL, NULL),
(3, 'PNK0002', NULL, NULL),
(4, 'PNK0003', NULL, NULL),
(5, 'PNK0004', NULL, NULL),
(6, 'PNK0005', NULL, NULL),
(7, 'PNK0006', NULL, NULL),
(8, 'PNK0007', NULL, NULL),
(9, 'PNK0008', NULL, NULL),
(10, 'PNK0009', NULL, NULL),
(11, 'PNK0010', NULL, NULL),
(12, 'PNK0011', NULL, NULL),
(13, 'PNK0012', NULL, NULL),
(14, 'PNK0013', NULL, NULL),
(15, 'PNK0014', NULL, NULL),
(16, 'PNK0015', NULL, NULL);

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
-- Cấu trúc bảng cho bảng `kho_banhang`
--

CREATE TABLE `kho_banhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ma_kho` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten_kho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_dien_thoai` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghi_chu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kho_banhang`
--

INSERT INTO `kho_banhang` (`id`, `ma_kho`, `ten_kho`, `dia_chi`, `so_dien_thoai`, `ghi_chu`, `created_at`, `updated_at`) VALUES
(1, 'KH01', 'Kho Hồ Chí Minh', 'Quận 12- Thành Phố Hồ Chí Minh', '0907145118', NULL, NULL, NULL),
(2, 'KH02', 'Kho Cần Thơ', 'Quận Ninh Kiều- Thành Phố Cần Thơ', '0907145136', NULL, NULL, NULL);

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
(20, '2022_11_08_042348_create_donhang_table', 14),
(21, '2022_11_14_070202_create_email_table', 15),
(22, '2022_11_15_071557_create_roles_table', 16),
(23, '2022_11_15_072006_create_permissions_table', 16),
(24, '2022_11_15_074128_create_permission_role_table', 17),
(25, '2022_11_15_081637_create_post_table', 17),
(26, '2022_11_25_064433_create_post_table', 18),
(27, '2022_12_08_020324_create_table_mypost', 18),
(28, '2022_12_08_023019_create_mypost_table', 19),
(29, '2016_06_01_000001_create_oauth_auth_codes_table', 20),
(30, '2016_06_01_000002_create_oauth_access_tokens_table', 20),
(31, '2016_06_01_000003_create_oauth_refresh_tokens_table', 20),
(32, '2016_06_01_000004_create_oauth_clients_table', 20),
(33, '2016_06_01_000005_create_oauth_personal_access_clients_table', 20),
(34, '2023_02_04_030117_create_kho_table', 21),
(38, '2023_02_04_033753_create_vattu_banhang_table', 22),
(41, '2023_02_04_033814_create_nhanvien_banhang_table', 23),
(42, '2023_02_04_033836_create_nhacc_banhang_table', 23),
(46, '2023_02_04_062557_create_phieunhapkho_table', 24),
(47, '2023_02_04_122100_create_chitietnhapkho_banhang', 25),
(50, '2023_02_05_064416_create_invoice_table', 26);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mypost`
--

CREATE TABLE `mypost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_baiviet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude_baiviet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung_baiviet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhmuc_baiviet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacc_banhang`
--

CREATE TABLE `nhacc_banhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ma_nhacc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_nhacc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi_nhacc` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacc_banhang`
--

INSERT INTO `nhacc_banhang` (`id`, `ma_nhacc`, `ten_nhacc`, `diachi_nhacc`, `created_at`, `updated_at`) VALUES
(1, 'NCC_ĐT', 'Dịch Vụ Thương Mại Đồng Tâm', '121_Nguyễn Tri Phương-Quận 12', NULL, NULL),
(2, 'NCC_HH', 'Dịch Vụ Thương Mại Hiền Hồ', '141-Hồ Quang Hiếu-Quận 1', NULL, NULL);

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
  `ma_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `ma_nv`, `hoten_nv`, `diachi_nv`, `gioitinh_nv`, `sdt_nv`, `anhdaidien`, `ma_pb`, `ma_cv`, `ma_email`, `updated_at`, `created_at`) VALUES
(1, 'MFNV01', 'Nguyễn Hoàng Đức', 'Trà Vinh', 'Nam', '0908 346 989', '1.jpg', 'HCNS', 'GĐ', '1', '2022-11-14 07:14:53', NULL),
(2, 'MFNV02', 'Lý Mộng Tuyền', 'Bến Tre', 'Nữ', '0908 468 787', '2.jpg', 'KT', 'GĐ', '2', '2022-11-14 07:15:00', NULL),
(3, 'MFNV03', 'Trần Văn Liêm', 'Kiên Giang', 'Nam', '0908 346 989', '4.jpg', 'KT', 'NV', '3', '2022-11-14 07:15:11', NULL),
(4, 'MFNV04', 'Đỗ Kim Ái ', 'Cà Mau', 'Nữ', '0908 468 755', '1.jpg', 'CNTT', 'GĐ', '4', '2022-11-14 07:52:08', NULL),
(5, 'MFNV05', 'Lê Thị Mỹ Tiên', 'Long An', 'Nữ', '0764854577', '6.jpg', 'HCNS', 'NV', '5', '2022-11-14 08:01:40', '2022-10-04 21:28:36'),
(6, 'MFNV06', 'Trần Hoài Nam', 'Hậu Giang', 'Nam', '124879779', '5.jpg', 'CNTT', 'NV', '6', '2022-11-14 08:02:02', '2022-10-04 21:29:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien_banhang`
--

CREATE TABLE `nhanvien_banhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ma_nhanvien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_nhanvien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien_banhang`
--

INSERT INTO `nhanvien_banhang` (`id`, `ma_nhanvien`, `ten_nhanvien`, `tinhtrang`, `created_at`, `updated_at`) VALUES
(1, 'NV01', 'Lê Đức Thọ', 'Độc Thân', NULL, NULL),
(2, 'NV02', 'Lê Thị Tuyết Mai', 'Độc Thân', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('01d365cbd61ec5fa62a1428ce78fa1b1ebc844a9ee23a4352368dd825a98ce0155f4892e84320a3f', 6, 11, 'MyApp', '[]', 0, '2022-12-22 07:36:37', '2022-12-22 07:36:37', '2023-06-22 14:36:37'),
('14a4146ed626241d9a9d5a10e4c5792fa21e656bf9b8cfe74129837a53a09e40637326d78cc57797', 6, 11, 'MyApp', '[]', 0, '2022-12-15 02:15:44', '2022-12-15 02:15:44', '2023-06-15 09:15:44'),
('c2aaa641b8d8991483f142d6fd3c4fffda42455478b579005e981581feaca9b463ce0c755e3d85dc', 4, 11, 'MyApp', '[]', 0, '2023-02-04 05:49:21', '2023-02-04 05:49:21', '2023-08-04 12:49:21'),
('dd0a913ab701619d6e0318265deb570e11e4129268e54989cd28cc9edc671afd4a9c33a82803a94b', 6, 11, 'MyApp', '[]', 0, '2023-01-05 21:22:27', '2023-01-05 21:22:27', '2023-07-06 04:22:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'TaVBt9ohg2LhpHY4ti144rRTP0efEfEHgyJOlAVg', NULL, 'http://localhost', 1, 0, 0, '2022-12-08 01:00:34', '2022-12-08 01:00:34'),
(2, NULL, 'Laravel Password Grant Client', '1tnix4ixiwnZOZfZrY5Wye8gyvuCvQbt3eoVDimB', 'users', 'http://localhost', 0, 1, 0, '2022-12-08 01:00:34', '2022-12-08 01:00:34'),
(3, NULL, 'Laravel Personal Access Client', 'bidFkykd03pMxdIhYyO471gJdB7VbVv2X8qqwg30', NULL, 'http://localhost', 1, 0, 0, '2022-12-08 03:09:11', '2022-12-08 03:09:11'),
(4, NULL, 'Laravel Password Grant Client', 'uYOUDXkxCSaodG8WcoSWv8yRkZDgs1pV5a7xR6yM', 'users', 'http://localhost', 0, 1, 0, '2022-12-08 03:09:11', '2022-12-08 03:09:11'),
(5, NULL, 'Laravel Personal Access Client', 'sAlIYo6qvUI76PQDLaZIqZpvUUgk347pU70bWbeZ', NULL, 'http://localhost', 1, 0, 0, '2022-12-08 21:06:24', '2022-12-08 21:06:24'),
(6, NULL, 'Laravel Password Grant Client', 'CgRQmZXEfd7Jx90ALpv1J3N79dgHvSXtcA9uJFgX', 'users', 'http://localhost', 0, 1, 0, '2022-12-08 21:06:24', '2022-12-08 21:06:24'),
(7, NULL, 'Laravel Personal Access Client', '$2y$10$OmjiKxMx6byJvk12pDNTGeeDUQEx/PZJVNSb.Hp8s3Tng9KOyLS5O', NULL, 'http://localhost', 1, 0, 0, '2022-12-08 21:55:10', '2022-12-08 21:55:10'),
(8, NULL, 'Laravel Password Grant Client', '$2y$10$u5K4NOSj2igGGnhyxP2CdenwfjE.LMwbcqNEgISTWkQYgChbMJs/q', 'users', 'http://localhost', 0, 1, 0, '2022-12-08 21:55:10', '2022-12-08 21:55:10'),
(9, NULL, 'Laravel Personal Access Client', 'PUY7UJYUSQVoIqBPXWeOP1AmH0cpvPw8W8xCoipJ', NULL, 'http://localhost', 1, 0, 0, '2022-12-08 23:47:48', '2022-12-08 23:47:48'),
(10, NULL, 'Laravel Password Grant Client', 'fFPGy2VmH43gOm2J3V61WNJ8FV47xfbcIvep7y7X', 'users', 'http://localhost', 0, 1, 0, '2022-12-08 23:47:48', '2022-12-08 23:47:48'),
(11, NULL, 'Laravel Personal Access Client', 'aWab3TSoksEQTE6dUmuhzJx4bPpqw9hpFUS7mH5I', NULL, 'http://localhost', 1, 0, 0, '2022-12-08 23:59:52', '2022-12-08 23:59:52'),
(12, NULL, 'Laravel Password Grant Client', 'hgvV2RC1D2VNgSW1QthMmV7LZnOqEvVQjmVIjYdj', 'users', 'http://localhost', 0, 1, 0, '2022-12-08 23:59:52', '2022-12-08 23:59:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-12-08 01:00:34', '2022-12-08 01:00:34'),
(2, 3, '2022-12-08 03:09:11', '2022-12-08 03:09:11'),
(3, 5, '2022-12-08 21:06:24', '2022-12-08 21:06:24'),
(4, 7, '2022-12-08 21:55:10', '2022-12-08 21:55:10'),
(5, 9, '2022-12-08 23:47:48', '2022-12-08 23:47:48'),
(6, 11, '2022-12-08 23:59:52', '2022-12-08 23:59:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'review_post', NULL, NULL),
(2, 'update_post', NULL, NULL),
(3, 'delete_post', NULL, NULL),
(4, 'restore_post', NULL, NULL),
(5, 'force_delete_post', NULL, NULL),
(6, 'review_post', NULL, NULL),
(7, 'update_post', NULL, NULL),
(8, 'delete_post', NULL, NULL),
(9, 'restore_post', NULL, NULL),
(10, 'force_delete_post', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_name`, `permissions`, `updated_at`, `created_at`) VALUES
(8, 'demo', '[\"nhanvien\",\"phongban\",\"khenthuong\"]', '2022-11-23 23:56:59', '2022-11-17 03:00:40'),
(9, 'quantri', '[\"nhanvien.index\",\"nhanvien.create\",\"nhanvien.store\",\"nhanvien.show\",\"nhanvien.edit\",\"nhanvien.update\",\"nhanvien.destroy\",\"api.hopdong\",\"api.baohiem\",\"nhanvien\",\"timkiem\",\"ds_nhanvien\",\"timkiem_dsnhanvien\",\"chitiet_nhanvien\",\"them_nv\",\"luu_nv\",\"sua_nv\",\"capnhat_nv\",\"xoa_nv\",\"phongban\",\"luu_pb\",\"chucvu\",\"luu_cv\",\"khenthuong\",\"luu_kt\",\"kyluat\",\"luu_kl\",\"shop\",\"giohang\",\"buy\",\"remove\",\"payment\",\"chotdeal\",\"donhang\",\"ketnoiapi\",\"apilogin_form\",\"fetch_data\"]', '2022-12-13 21:39:07', '2022-11-17 03:04:09'),
(11, 'admin_api', '[\"nhanvien\",\"chucvu\",\"ketnoiapi\",\"mypost\"]', '2022-12-11 20:06:14', '2022-11-17 03:04:50'),
(15, 'thư ký', '[\"nhanvien\",\"phongban\"]', '2022-11-21 19:32:30', '2022-11-21 19:32:30'),
(20, 'Administrator', '[\"nhanvien\",\"timkiem\",\"ds_nhanvien\",\"timkiem_dsnhanvien\",\"chitiet_nhanvien\",\"them_nv\",\"luu_nv\",\"phongban\",\"them_pb\",\"luu_pb\",\"sua_pb\",\"capnhat_pb\",\"chucvu\",\"them_cv\",\"luu_cv\",\"sua_cv\",\"chitiet_bhxh\",\"phepnam\",\"them_pn\",\"ajax\",\"luu_pn\",\"shop\",\"giohang\",\"buy\",\"remove\",\"update\",\"payment\",\"chotdeal\",\"donhang\",\"ketnoiapi\"]', '2022-12-07 02:31:06', '2022-11-23 02:35:09');

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

--
-- Đang đổ dữ liệu cho bảng `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 6, 'Token Name', '3a54f1573a9f28391a8bdaee8895267d95eda63382fed09a8bb4cfd79f0b8b75', '[\"*\"]', NULL, NULL, '2022-12-08 23:39:45', '2022-12-08 23:39:45'),
(2, 'App\\Models\\User', 6, 'Token Name', 'c4602e9acdc0907c52d9cd26be75a9480946df1b88d10b217c6886d0fdf071b0', '[\"*\"]', NULL, NULL, '2022-12-08 23:41:27', '2022-12-08 23:41:27'),
(3, 'App\\Models\\User', 6, 'Token Name', 'bf92816626bf650aaa2dcdeffacec9a7922e117989c10ffd61ca1ec4768bd0f6', '[\"*\"]', NULL, NULL, '2022-12-08 23:41:41', '2022-12-08 23:41:41'),
(4, 'App\\Models\\User', 6, 'Token Name', 'de09d5ac8bbdfa131af2b92782b3fdf14db1deb9e026db1900c8107662862b51', '[\"*\"]', NULL, NULL, '2022-12-08 23:41:54', '2022-12-08 23:41:54'),
(5, 'App\\Models\\User', 6, 'Token Name', '2e9c862b0dbf4ad7996e0e48b5d56dfac69fc7d72778415db8c922e02d39e019', '[\"*\"]', NULL, NULL, '2022-12-08 23:43:01', '2022-12-08 23:43:01'),
(6, 'App\\Models\\User', 6, 'Token Name', '945c06a1bfa589c9fd4086a615fd454d6caa8947447cbec83f7ae355715f2f04', '[\"*\"]', NULL, NULL, '2022-12-08 23:43:44', '2022-12-08 23:43:44'),
(7, 'App\\Models\\User', 6, 'Token Name', 'b0883370835a68ce591c7d826eaeafcb551f8295a929bbed5900c9d7d70f0eb2', '[\"*\"]', NULL, NULL, '2022-12-08 23:47:08', '2022-12-08 23:47:08'),
(8, 'App\\Models\\User', 6, 'Token Name', 'f3f4afad16b3dec418eb6e08ebcd412230682c77e7a4761b18117a7eb1878166', '[\"*\"]', NULL, NULL, '2022-12-08 23:47:54', '2022-12-08 23:47:54'),
(9, 'App\\Models\\User', 6, 'Token Name', '9b8471f053806aa9f3d8e64f47e76b50f7b6548a36c599c00b9ab73a21954883', '[\"*\"]', NULL, NULL, '2022-12-08 23:47:58', '2022-12-08 23:47:58'),
(10, 'App\\Models\\User', 6, 'Token Name', '3abac7070bcc6e25a89ddd51d4f36bc186fee2e3df5acde73ab6d5c5f8c50f1d', '[\"*\"]', NULL, NULL, '2022-12-08 23:48:19', '2022-12-08 23:48:19'),
(11, 'App\\Models\\User', 6, 'Token Name', '11193bbe2b00a0d36bcdd6f432f7db364ce4fb000a339ce8b0402fae87e07e2b', '[\"*\"]', NULL, NULL, '2022-12-08 23:48:38', '2022-12-08 23:48:38'),
(12, 'App\\Models\\User', 6, 'Token Name', '789f303b884ce458cbce2f42142e8fc31bc93b707cbad11523abbebccc1c02b9', '[\"*\"]', NULL, NULL, '2022-12-08 23:58:45', '2022-12-08 23:58:45'),
(13, 'App\\Models\\User', 6, 'Token Name', 'a60f70228845c44b92e6258cd3c81b2f63091477d25c9ad180d51ef93dda4d1c', '[\"*\"]', NULL, NULL, '2022-12-09 00:00:08', '2022-12-09 00:00:08'),
(14, 'App\\Models\\User', 6, 'Token Name', '53f46e1ba350ff96c66c018129e79ac57f01d33429306fe8a38fbbca9071891a', '[\"*\"]', NULL, NULL, '2022-12-09 00:41:02', '2022-12-09 00:41:02');

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
-- Cấu trúc bảng cho bảng `phieunhapkho_banhang`
--

CREATE TABLE `phieunhapkho_banhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ma_phieu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaynhap` date NOT NULL,
  `id_nhanvien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kho` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_nhacc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieunhapkho_banhang`
--

INSERT INTO `phieunhapkho_banhang` (`id`, `ma_phieu`, `ngaynhap`, `id_nhanvien`, `id_kho`, `id_nhacc`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'PN01', '2023-02-04', 'NV01', 'KH01', 'NCC_HT', 'Nhập định kỳ', NULL, NULL),
(4, 'PN02', '2023-02-04', 'NV01', 'KH01', 'NCC_ĐT', NULL, '2023-02-04 01:12:56', '2023-02-04 01:12:56'),
(5, '1234', '2023-02-05', 'NV01', 'KH02', 'NCC_ĐT', NULL, '2023-02-04 20:11:44', '2023-02-04 20:11:44'),
(6, '12344566', '2023-02-05', 'NV01', 'KH02', 'NCC_ĐT', NULL, '2023-02-04 20:13:10', '2023-02-04 20:13:10'),
(7, 'PNK0011', '2023-02-05', 'NV01', 'KH01', 'NCC_ĐT', NULL, '2023-02-05 01:36:47', '2023-02-05 01:36:47'),
(8, 'PNK0012', '2023-02-05', 'NV02', 'KH02', 'NCC_HH', NULL, '2023-02-05 01:52:10', '2023-02-05 01:52:10'),
(9, 'PNK0013', '2023-02-04', 'NV01', 'KH02', 'NCC_ĐT', NULL, '2023-02-05 04:43:00', '2023-02-05 04:43:00'),
(10, 'PNK0014', '2023-02-05', 'NV01', 'KH01', 'NCC_ĐT', NULL, '2023-02-05 04:49:46', '2023-02-05 04:49:46'),
(11, 'PNK0015', '2023-02-05', 'NV01', 'KH01', 'NCC_ĐT', NULL, '2023-02-05 04:54:32', '2023-02-05 04:54:32');

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
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `ma_post` varchar(50) NOT NULL,
  `title_post` varchar(100) NOT NULL,
  `content_post` text NOT NULL,
  `danhmuc_post` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `ma_post`, `title_post`, `content_post`, `danhmuc_post`, `created_at`, `updated_at`) VALUES
(3, 'postvn_02', 'đổi mới trà vinh_cầu kè123', 'bất động sản trà vinh ngày càng đổi mới đó nha', 'Tin Tức Cộng Động', NULL, '2022-12-07 02:29:58'),
(5, 'postvn_06', 'dổi mới bến tre', 'thị trường tin tức bất động sản bến tre ngày càng được thể hiện', 'Tin Tức Đất Xanh', '2022-11-25 02:37:50', '2022-11-25 03:06:23'),
(185, '122', '123', '1213', '123', '2023-02-04 06:58:24', '2023-02-04 06:58:24');

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
(4, 'Laptop Lenovo', '15000000', 'laptop_lenovo.png', 'laptop', NULL, NULL),
(5, 'Điện thoại Iphone', '40000000', 'dt_iphone.jpg', 'dienthoai', NULL, NULL),
(6, 'Điện thoại SamSung', '23000000', 'dt_samsung.jpg', 'dienthoai', NULL, NULL),
(7, 'Điện thoại Huawei', '20000000', 'dt_huawei.jpg', 'dienthoai', NULL, NULL),
(8, 'Điện thoại Oppo', '18000000', 'dt_oppo.jpg', 'dienthoai', NULL, NULL),
(9, 'Đồng Hồ Nam_Casio', '5000000', 'dongho_1.jpg', 'dongho', NULL, NULL),
(10, 'Đồng Hồ Nam_Orient', '10000000', 'dongho_2.jpg', 'dongho', NULL, NULL),
(11, 'Đồng Hồ Nữ_Baby', '6000000', 'dongho_3.jpg', 'dongho', NULL, NULL),
(12, 'Đồng Hồ Nữ_Julia', '4000000', 'dongho_4.jpeg', 'dongho', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'demo', NULL, NULL),
(3, 'quantri', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `role_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`id`, `name`, `role_name`, `created_at`, `updated_at`) VALUES
(62, '4', '9', '2022-12-07 19:16:08', '2022-12-07 19:16:08'),
(63, '4', '20', '2022-12-07 19:16:08', '2022-12-07 19:16:08'),
(66, '6', '11', '2022-12-13 21:39:36', '2022-12-13 21:39:36'),
(67, '6', '20', '2022-12-13 21:39:36', '2022-12-13 21:39:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `san_pham` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `san_pham`) VALUES
(1, 'Iphone'),
(3, 'Nokia'),
(4, 'SamSung'),
(5, 'Hawue');

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
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permision` int(10) NOT NULL,
  `avatar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `hoten`, `email`, `sdt`, `diachi`, `email_verified_at`, `password`, `remember_token`, `api_token`, `permision`, `avatar`, `created_at`, `updated_at`) VALUES
(4, 'sieuga', 'Thạch Chanh Tha', 'sieuga@gmail.com', '0908 346 989', '134-Nguyễn Đệ-Quận Ninh Kiều-TP. Cần Thơ', NULL, '$2y$10$gDKXD/nQg3IQ/qUjylFa4e2JmWuVC5RzTfBMdDWtK0b79Tayg/VoS', NULL, '', 1, 'sieuga.jpg', '2022-10-26 18:58:32', '2022-10-26 18:58:32'),
(6, 'tha', 'Lâm Nhật Huy', 'tha@gmail.com', '038 778 1268', 'Phan Văn Hớn-Phường Tân Thới Nhất-Quận 12-TP HCM', NULL, '$2y$10$5.YVN9G4ES7PWL.ZsFHgy.0DAX1.15Matt3my6QT4Q15BGa9hAjb.', NULL, '', 1, 'tha.jpg', '2022-10-26 21:45:12', '2022-10-26 21:45:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` int(10) UNSIGNED NOT NULL,
  `role_name` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_role1`
--

CREATE TABLE `user_role1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vattu_banhang`
--

CREATE TABLE `vattu_banhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ma_vattu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_vattu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dvt_vattu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` tinyint(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vattu_banhang`
--

INSERT INTO `vattu_banhang` (`id`, `ma_vattu`, `ten_vattu`, `dvt_vattu`, `soluong`, `created_at`, `updated_at`) VALUES
(1, 'VT01', 'Băng Keo', 'Cuộn', NULL, NULL, NULL),
(2, 'VT02', 'Nhãn', 'Cái', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baohiem`
--
ALTER TABLE `baohiem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitiet`
--
ALTER TABLE `chitiet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietnhapkho_banhang`
--
ALTER TABLE `chitietnhapkho_banhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dactinh`
--
ALTER TABLE `dactinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dactinh_chitiet`
--
ALTER TABLE `dactinh_chitiet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dactinh_sanpham`
--
ALTER TABLE `dactinh_sanpham`
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
-- Chỉ mục cho bảng `email`
--
ALTER TABLE `email`
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
-- Chỉ mục cho bảng `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khenthuong`
--
ALTER TABLE `khenthuong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kho_banhang`
--
ALTER TABLE `kho_banhang`
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
-- Chỉ mục cho bảng `mypost`
--
ALTER TABLE `mypost`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacc_banhang`
--
ALTER TABLE `nhacc_banhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien_banhang`
--
ALTER TABLE `nhanvien_banhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `phieunhapkho_banhang`
--
ALTER TABLE `phieunhapkho_banhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
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
-- Chỉ mục cho bảng `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_role1`
--
ALTER TABLE `user_role1`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vattu_banhang`
--
ALTER TABLE `vattu_banhang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baohiem`
--
ALTER TABLE `baohiem`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `chitiet`
--
ALTER TABLE `chitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `chitietnhapkho_banhang`
--
ALTER TABLE `chitietnhapkho_banhang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `dactinh`
--
ALTER TABLE `dactinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `dactinh_chitiet`
--
ALTER TABLE `dactinh_chitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `dactinh_sanpham`
--
ALTER TABLE `dactinh_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `dulieuchamcong`
--
ALTER TABLE `dulieuchamcong`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=782;

--
-- AUTO_INCREMENT cho bảng `email`
--
ALTER TABLE `email`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161340;

--
-- AUTO_INCREMENT cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `khenthuong`
--
ALTER TABLE `khenthuong`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `kho_banhang`
--
ALTER TABLE `kho_banhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `kyluat`
--
ALTER TABLE `kyluat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `mypost`
--
ALTER TABLE `mypost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `nhacc_banhang`
--
ALTER TABLE `nhacc_banhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `nhanvien_banhang`
--
ALTER TABLE `nhanvien_banhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `phepnam`
--
ALTER TABLE `phepnam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `phieunhapkho_banhang`
--
ALTER TABLE `phieunhapkho_banhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `phongban`
--
ALTER TABLE `phongban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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

--
-- AUTO_INCREMENT cho bảng `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user_role1`
--
ALTER TABLE `user_role1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vattu_banhang`
--
ALTER TABLE `vattu_banhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
