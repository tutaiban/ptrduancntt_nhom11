-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2024 lúc 05:47 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ptrduancntt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id` int(4) NOT NULL,
  `tendm` varchar(50) NOT NULL,
  `uutien` tinyint(4) NOT NULL DEFAULT 0,
  `hienthi` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `tendm`, `uutien`, `hienthi`) VALUES
(1, 'vivo', 0, 1),
(2, 'Samsung', 0, 1),
(3, 'Iphone', 0, 1),
(4, 'xiaomi', 0, 1),
(20, 'OPPO', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id` int(15) NOT NULL,
  `iduser` int(15) NOT NULL,
  `trangthai` varchar(50) NOT NULL DEFAULT 'Chờ xác nhận đơn hàng',
  `thanhtien` int(100) NOT NULL,
  `sdtuser` varchar(15) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `nameuser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`id`, `iduser`, `trangthai`, `thanhtien`, `sdtuser`, `diachi`, `nameuser`) VALUES
(43, 6, 'Giao hàng thành công', 359350000, '0348454626', 'Yên Lạc', 'Trần Trọng Tú'),
(44, 2, 'Chờ xác nhận đơn hàng', 164850000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(45, 2, 'Giao hàng thành công', 69800000, '0348454627', 'tudeptrai2', 'Trần Trọng Tú'),
(47, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'tudeptrai2', 'Trần Trọng Tú'),
(48, 2, 'Chờ xác nhận đơn hàng', 29990000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(49, 2, 'Chờ xác nhận đơn hàng', 29990000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(50, 2, 'Chờ xác nhận đơn hàng', 29990000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(51, 2, 'Chờ xác nhận đơn hàng', 29990000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(52, 2, 'Chờ xác nhận đơn hàng', 149950000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(53, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(54, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(55, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(56, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(57, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(58, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(59, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(60, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(61, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(62, 2, 'Chờ xác nhận đơn hàng', 34900000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(63, 6, 'Đơn hàng đã bị hủy', 29990000, '0348454626', 'Yên Lạc', 'Trần Trọng Tú'),
(64, 2, 'Chờ xác nhận đơn hàng', 69800000, '0348454627', 'Yên Lạc', 'Trần Trọng Tú'),
(65, 11, 'Chờ xác nhận đơn hàng', 69800000, '0343516899', 'phu xuyen', 'Kỳ Hoàng Quang'),
(66, 11, 'Chờ xác nhận đơn hàng', 131050000, '0343516899', 'phu xuyen', 'Kỳ Hoàng Quang'),
(67, 11, 'Chờ xác nhận đơn hàng', 101060000, '0343516899', 'phu xuyen', 'Kỳ Hoàng Quang'),
(68, 11, 'Chờ xác nhận đơn hàng', 29990000, '0343516899', 'phu xuyen', 'Kỳ Hoàng Quang'),
(69, 11, 'Chờ xác nhận đơn hàng', 41080000, '0343516899', 'phu xuyen', 'Kỳ Hoàng Quang'),
(70, 11, 'Chờ xác nhận đơn hàng', 32980000, '0343516899', 'phu xuyen', 'Kỳ Hoàng Quang'),
(71, 11, 'Chờ xác nhận đơn hàng', 59980000, '0343516899', 'phu xuyen', 'Kỳ Hoàng Quang'),
(72, 11, 'Đơn hàng đã bị hủy', 29990000, '0343516899', 'phu xuyen', 'Kỳ Hoàng Quang'),
(73, 11, 'Đơn hàng đã bị hủy', 39990000, '0343516899', 'phu xuyen', 'Kỳ Hoàng Quang'),
(74, 11, 'Đơn hàng đã bị hủy', 59980000, '0343516899', 'phu xuyen', 'Kỳ Hoàng Quang'),
(75, 11, 'Giao hàng thành công', 29990000, '0343516899', 'phu xuyen', 'Kỳ Hoàng Quang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang_sanpham`
--

CREATE TABLE `tbl_donhang_sanpham` (
  `id` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `iddh` int(15) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang_sanpham`
--

INSERT INTO `tbl_donhang_sanpham` (`id`, `idsp`, `iddh`, `soluong`, `gia`) VALUES
(34, 29, 43, 3, 29990000),
(35, 30, 43, 2, 34900000),
(36, 15, 43, 2, 29990000),
(37, 36, 43, 3, 34900000),
(38, 33, 43, 1, 34900000),
(39, 29, 44, 1, 29990000),
(40, 40, 44, 1, 34900000),
(41, 35, 44, 2, 29990000),
(42, 53, 44, 2, 19990000),
(43, 33, 45, 2, 34900000),
(45, 30, 47, 1, 34900000),
(46, 29, 48, 1, 29990000),
(48, 39, 50, 1, 29990000),
(50, 39, 52, 5, 29990000),
(51, 33, 53, 1, 34900000),
(52, 33, 54, 1, 34900000),
(53, 33, 55, 1, 34900000),
(54, 33, 56, 1, 34900000),
(55, 33, 57, 1, 34900000),
(56, 33, 58, 1, 34900000),
(57, 33, 59, 1, 34900000),
(58, 33, 60, 1, 34900000),
(59, 33, 61, 1, 34900000),
(60, 33, 62, 1, 34900000),
(61, 15, 63, 1, 29990000),
(62, 23, 65, 1, 34900000),
(63, 19, 65, 1, 34900000),
(64, 93, 66, 1, 11090000),
(65, 29, 66, 2, 29990000),
(66, 15, 66, 1, 29990000),
(67, 44, 66, 1, 29990000),
(68, 29, 67, 2, 29990000),
(69, 93, 67, 1, 11090000),
(70, 15, 67, 1, 29990000),
(71, 29, 69, 1, 29990000),
(72, 93, 69, 1, 11090000),
(73, 29, 70, 1, 29990000),
(74, 92, 70, 1, 2990000),
(75, 29, 71, 1, 29990000),
(76, 15, 71, 1, 29990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id`, `idsp`, `soluong`, `iduser`) VALUES
(50, 36, 2, 2),
(51, 39, 1, 2),
(62, 29, 3, 2),
(70, 44, 1, 2),
(71, 15, 2, 2),
(75, 30, 2, 2),
(76, 33, 1, 2),
(92, 44, 3, 11),
(93, 29, 3, 11),
(94, 32, 4, 11),
(104, 39, 1, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` int(11) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `mota` varchar(300) NOT NULL,
  `manhinh` varchar(50) NOT NULL,
  `camera` varchar(50) NOT NULL,
  `iddm` int(4) NOT NULL,
  `chipset` varchar(50) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `sac` varchar(50) NOT NULL,
  `operator` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `tensp`, `mota`, `manhinh`, `camera`, `iddm`, `chipset`, `pin`, `sac`, `operator`) VALUES
(8, 'Z-flip5', 'Zlip5.pdf', '6.67inch', '80mp', 2, 'napdragon 888', '3500 mA.h', '45W', 'Androi 13'),
(9, 'Iphone 16', 'iphone 16.pdf', '6.67inch', '12 MP', 3, 'Apple A18', '3500 mA.h', '25W', 'IOS 18'),
(10, 'Z-flip6', 'Zlip5.pdf', '6.67inch', '80mp', 2, ' Snapdragon 8 Gen 3 for Galaxy,', '4000 mA.h', '45W', 'Androi 13'),
(11, 'Iphone 16 Plus', 'iphone 16.pdf', '7.43 inch', '80mp', 3, 'Apple A18', '4800 mA.h', '25W', 'IOS 18'),
(12, 'Iphone 16 Pro', 'iphone 16.pdf', '6.67inch', '120 MP', 3, 'Apple A18', '3500 mA.h', '25W', 'IOS 18'),
(13, 'Iphone 16 Pro Max', 'iphone 16.pdf', '7.43 inch', '120 MP', 3, 'Apple A18 Pro', '4500 mA.h', '25W', 'IOS 18'),
(14, 'S24 Ultra', 'S24 Ultra.pdf', '7.43 inch', '120 MP', 2, ' Snapdragon 8 Gen 3 for Galaxy,', '5000 mA.h', '45W', 'Androi 13'),
(15, 'xiaomi note 12', 'note 12.pdf', '7.43 inch', '120 MP', 4, 'snapdragon 888', '5000 mA.h', '33 W', 'Androi 13'),
(18, 'Xiaomi Poco M6 Pro', 'Xiaomi.pdf', ' 161.1 x 74.95 x 7.98 mm', '16.0 MP', 4, 'MediaTek Helio G99-Ultra', '5000 mA.h', '67W', 'Androi 13'),
(20, 'Xiaomi Poco X6 Pro', 'Xiaomi Poco X6 Pro.pdf', ' 161.1 x 74.95 x 7.98 mm', '16.0 MP', 4, 'MediaTek Helio G99-Ultra', '5000 mA.h', '67W', 'Androi 13'),
(28, 'Xiaomi Redmi Note 13', 'Xiaomi note 13.pdf', '6.67 inch', '108 MP', 4, 'Snapdragon 685', '5000 mA.h', '67W', 'Androi 12'),
(29, 'Xiaomi Redmi 14C', 'Xiaomi Redmi 14C.pdf', ' 6.88 inch', '108 MP', 4, ' Helio G81-Ultra', '5000 mA.h', '67W', ' Android 14 (Hyper OS)'),
(30, 'iPhone 15 Pro Max', 'iphon15.pdf', ' 6.7 inch', ' 48.0 MP', 3, 'Apple A17 pro', '29 Giờ', '67W', 'IOS 17'),
(31, 'iPhone 15', 'iphon15.pdf', ' 6.7 inch', ' 48.0 MP', 3, 'Apple A17', ' 20 Giờ', '67W', 'IOS 17'),
(32, 'iPhone 15 Plus', 'iphon15.pdf', ' 6.7 inch', ' 48.0 MP', 3, 'Apple A16', ' 24 Giờ', '67W', 'IOS 17'),
(33, 'iPhone 15 Pro', 'iphon15.pdf', ' 6.1 inch', ' 48.0 MP', 3, 'Apple A16', '23 Giờ', '67W', 'IOS 17'),
(34, 'Vivo Y03', 'iphon15.pdf', ' 6.1 inch', ' 48.0 MP', 1, ' Helio G85', '5000 mAh', '15W', 'Androi 13'),
(35, 'OPPO Reno12 5G', 'OPPO Reno12 5G.pdf', ' 6.7 inch', '50.0 MP', 20, ' Arm Mali-G615', '5000 mAh', '65W', 'Androi 14'),
(36, 'OPPO Reno11 F ', 'OPPO Reno11 F_.pdf', ' 6.7 inch', '50.0 MP', 20, ' Dimensity 6300 5G', '5000 mAh', '45W', 'Androi 14'),
(39, 'OPPO Reno 8T', 'OPPO Reno 8T.pdf', ' 6.4 inch', '100.0 MP', 20, 'Snapdragon 685', '5000 mAh', '33W', 'Androi 13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanphamcase`
--

CREATE TABLE `tbl_sanphamcase` (
  `id` int(4) NOT NULL,
  `mau` varchar(50) NOT NULL,
  `dungluong` varchar(20) NOT NULL,
  `dungluong1` varchar(50) NOT NULL,
  `gia` float NOT NULL,
  `idsp` int(4) NOT NULL,
  `img` varchar(50) NOT NULL,
  `hot` tinyint(3) NOT NULL DEFAULT 0,
  `giacu` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanphamcase`
--

INSERT INTO `tbl_sanphamcase` (`id`, `mau`, `dungluong`, `dungluong1`, `gia`, `idsp`, `img`, `hot`, `giacu`) VALUES
(14, 'Trắng', '128 Gb', '12 Gb', 29990000, 9, '../upload/iphone-16-trang.webp', 0, 40000000),
(15, 'Xanh Lưu Ly', '128 Gb', '12 Gb', 29990000, 9, '../upload/iphone-16-xanh-luu-ly.webp', 1, 40000000),
(16, 'xanh Mồng kết', '128 Gb', '12 Gb', 29990000, 9, '../upload/iphone-16-xanh-mong-ket.webp', 0, 40000000),
(17, 'Trắng', '256 Gb', '12 Gb', 34900000, 9, '../upload/iphone-16-trang.webp', 0, 40000000),
(18, 'Xanh Lưu Ly', '256 Gb', '12 Gb', 34900000, 9, '../upload/iphone-16-xanh-luu-ly.webp', 0, 40000000),
(19, 'xanh Mồng kết', '256 Gb', '12 Gb', 34900000, 9, '../upload/iphone-16-xanh-mong-ket.webp', 0, 40000000),
(20, 'Đen', '128 Gb', '12 Gb', 29990000, 11, '../upload/iphone-16-plus-den.webp', 0, 40000000),
(21, 'Đen', '256 Gb', '12 Gb', 34900000, 9, '../upload/iphone-16-plus-den.webp', 0, 40000000),
(22, 'Xanh Lưu Ly', '128 Gb', '12 Gb', 29990000, 9, '../upload/iphone-16-plus-xanh-luu-ly.webp', 0, 40000000),
(23, 'Xanh Lưu Ly', '256 Gb', '12 Gb', 34900000, 11, '../upload/iphone-16-plus-xanh-luu-ly.webp', 0, 40000000),
(24, 'xanh Mồng kết', '128 Gb', '12 Gb', 29990000, 11, '../upload/iphone-16-plus-xanh-mong-ket.webp', 0, 40000000),
(25, 'xanh Mồng kết', '256 Gb', '12 Gb', 34900000, 11, '../upload/iphone-16-plus-xanh-mong-ket.webp', 0, 40000000),
(26, 'Trắng', '128 Gb', '12 Gb', 29990000, 12, '../upload/iphone-16-pro-titan-trang_1.webp', 0, 40000000),
(28, 'Trắng', '256 Gb', '12 Gb', 34900000, 12, '../upload/iphone-16-pro-titan-trang_1.webp', 0, 40000000),
(29, 'Sa Mạc', '256 Gb', '12 Gb', 29990000, 12, '../upload/iphone-16-pro-titan-sa-mac_1.webp', 1, 40000000),
(30, 'Sa Mạc', '256 Gb', '12 Gb', 34900000, 13, '../upload/iphone-16-pro-titan-sa-mac_1.webp', 1, 40000000),
(31, 'Đen', '256 Gb', '12 Gb', 34900000, 13, '../upload/iphone-16-pro-max-titan-den.webp', 0, 40000000),
(32, 'Đen', '512 Gb', '12 Gb', 39990000, 13, '../upload/iphone-16-pro-max-titan-den.webp', 1, 40000000),
(33, 'Tự nhiên ', '256 Gb', '12 Gb', 34900000, 12, '../upload/iphone-16-pro-max-titan-tu-nhien.webp', 1, 40000000),
(34, 'Tự nhiên ', '512 Gb', '12 Gb', 39990000, 13, '../upload/iphone-16-pro-max-titan-tu-nhien.webp', 0, 40000000),
(35, 'Đen', '128 Gb', '12 Gb', 29990000, 10, '../upload/flip-den.webp', 0, 40000000),
(36, 'Đen', '256 Gb', '12 Gb', 34900000, 8, '../upload/flip-den.webp', 1, 40000000),
(37, 'Vàng', '128 Gb', '12 Gb', 29990000, 10, '../upload/flip-vang.webp', 0, 40000000),
(38, 'Vàng', '256 Gb', '12 Gb', 34900000, 10, '../upload/flip-vang.webp', 0, 40000000),
(39, 'Đen', '128 Gb', '12 Gb', 29990000, 14, '../upload/image_1170.webp', 1, 40000000),
(40, 'Đen', '256 Gb', '12 Gb', 34900000, 14, '../upload/image_1170.webp', 0, 40000000),
(41, 'Xám', '256 Gb', '12 Gb', 34900000, 14, '../upload/image_1172.webp', 0, 40000000),
(42, 'Xám', '128 Gb', '12 Gb', 29990000, 14, '../upload/image_1172.webp', 0, 40000000),
(43, 'Đen', '128 Gb', '12 Gb', 29990000, 8, '../upload/flip-den.webp', 0, 40000000),
(44, 'Vàng', '128 Gb', '12 Gb', 29990000, 8, '../upload/flip-vang.webp', 1, 40000000),
(52, 'Đen', '128 Gb', '12 Gb', 19990000, 15, '../upload/download.jpg', 0, 29999000),
(53, 'xanh', '128 Gb', '12 Gb', 19990000, 15, '../upload/download (1).jpg', 0, 29999000),
(55, 'Xám', '512 Gb', '8 Gb', 19990000, 14, '../upload/2024_1_17_638410958611177440_sam.webp', 0, 2699000),
(56, 'Đen Onyx', '512 Gb', '8 Gb', 19990000, 14, '../upload/2024_1_17_638410791178640748_sam.webp', 0, 2699000),
(58, 'Vàng', '256 Gb', '8 Gb', 19.99, 14, '../upload/2024_1_17_638410791179108546_sam.webp', 0, 26900),
(59, 'Titan Xanh', '128 Gb', '8 Gb', 29290000, 30, '../upload/2023_9_20_638307989548944936_iph.webp', 0, 26900000),
(60, 'Titan tự nhiên', '128 Gb', '8 Gb', 29290000, 30, '../upload/2023_9_20_638307992305419305_iph.webp', 0, 26900000),
(61, 'Titan trắng', '128 Gb', '8 Gb', 29290000, 30, '../upload/2023_9_20_638307982103040290_iph.webp', 0, 26900000),
(63, 'Titan đen', '128 Gb', '8 Gb', 29490000, 30, '../upload/2023_9_20_638307980220145280_iph.webp', 0, 26900000),
(64, 'hồng', '128 Gb', '8 Gb', 19790000, 31, '../upload/2023_9_15_638303942321093007_iph.webp', 1, 22990000),
(65, 'xanh lá', '128 Gb', '8 Gb', 19790000, 31, '../upload/2023_9_15_638303950417112947_iph.webp', 0, 22990000),
(66, 'Đen ', '128 Gb', '8 Gb', 19790000, 31, '../upload/2023_9_15_638303947975273507_iph.webp', 0, 22990000),
(67, 'vàng', '128 Gb', '8 Gb', 19790000, 31, '../upload/2023_9_15_638303944832321476_iph.webp', 0, 22990000),
(68, 'vàng', '128 Gb', '8 Gb', 22990000, 32, '../upload/2023_9_15_638303944832321476_iph.webp', 0, 25990000),
(69, 'xanh lá', '128 Gb', '8 Gb', 22990000, 32, '../upload/2023_9_15_638303950417112947_iph.webp', 0, 25990000),
(70, 'hồng', '128 Gb', '8 Gb', 22990000, 32, '../upload/2023_9_15_638303942321093007_iph.webp', 0, 25990000),
(72, 'xanh dương', '128 Gb', '8 Gb', 22990000, 32, '../upload/2023_9_16_638304527009434472_iph.webp', 0, 25990000),
(73, 'Titan trắng', '128 Gb', '8 Gb', 26990000, 33, '../upload/2023_9_20_638307982103040290_iph.webp', 0, 28990000),
(74, 'Titan đen', '128 Gb', '8 Gb', 26990000, 33, '../upload/2023_9_20_638307980220145280_iph.webp', 0, 28990000),
(75, 'Đen ', '128 Gb', '4 Gb', 6990000, 18, '../upload/2024_1_24_638417142601727647_xia.webp', 0, 7990000),
(76, 'xanh dương', '128 Gb', '4 Gb', 6990000, 18, '../upload/2024_1_15_638409143576178417_xia.webp', 0, 7990000),
(78, 'tím', '128 Gb', '6 Gb', 6990000, 18, '../upload/2024_2_19_638439471936659990_xia.webp', 0, 7490000),
(80, 'đen', '128 Gb', '4 Gb', 6490000, 18, '../upload/2024_1_24_638417142601727647_xia.webp', 0, 7000000),
(81, 'xanh dương', '128 Gb', '4 Gb', 6490000, 18, '../upload/2024_1_15_638409143576178417_xia.webp', 0, 7000000),
(82, 'đen', '128 Gb', '4 Gb', 6490000, 20, '../upload/00909922_poco_x6_black_1205e4d2b.webp', 0, 7000000),
(83, 'đen', '128 Gb', '8 Gb', 7490000, 20, '../upload/00909922_poco_x6_black_1205e4d2b.webp', 0, 8000000),
(84, 'Trắng', '128 Gb', '8 Gb', 7490000, 20, '../upload/00909924_poco_x6_white_4df876748.webp', 0, 8000000),
(85, 'xanh', '128 Gb', '8 Gb', 7490000, 20, '../upload/00909923_poco_x6_blue_5e570f66db.webp', 0, 8000000),
(86, 'xanh', '128 Gb', '8 Gb', 4490000, 28, '../upload/2024_1_5_638400663079293145_xiao.webp', 0, 5000000),
(87, 'vàng', '128 Gb', '8 Gb', 4490000, 28, '../upload/2024_1_5_638400663078511962_xiao.webp', 0, 5000000),
(88, 'đen', '128 Gb', '8 Gb', 4490000, 28, '../upload/2024_1_5_638400663502297291_xiao.webp', 0, 5000000),
(89, 'đen', '128 Gb', '4 Gb', 2490000, 29, '../upload/xiaomi_redmi_14c_den_1_671192109.webp', 0, 3600000),
(90, 'xanh dương', '128 Gb', '4 Gb', 2490000, 29, '../upload/xiaomi_redmi_14c_xanh_2_4e061062.webp', 0, 3600000),
(91, 'đen', '64 Gb', '4 Gb', 2990000, 34, '../upload/2024_3_20_638465432005359540_viv.webp', 0, 3600000),
(92, 'xanh ', '64 Gb', '4 Gb', 2990000, 34, '../upload/2024_3_20_638465432002546836_viv.webp', 0, 3600000),
(93, 'bạc', '128 Gb', '4 Gb', 11090000, 35, '../upload/oppo_reno_12_trang_d776379731.webp', 1, 1300000),
(94, 'nâu', '128 Gb', '4 Gb', 11090000, 35, '../upload/oppo_reno_12_den_f4fa1cfa2a.webp', 1, 1300000),
(95, 'x', '128 Gb', '4 Gb', 8090000, 36, '../upload/2024_3_1_638449310772181204_oppo.webp', 0, 9000000),
(96, 'xanh đen', '128 Gb', '4 Gb', 8490000, 36, '../upload/2024_3_1_638449312178509644_oppo.webp', 0, 9990000),
(97, 'vàng', '128 Gb', '4 Gb', 6490000, 39, '../upload/2023_2_2_638109492842561801_oppo.webp', 1, 9990000),
(98, 'đen', '128 Gb', '4 Gb', 6490000, 39, '../upload/2023_2_2_638109492830254873_oppo.webp', 0, 9990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `sdt` varchar(15) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `email`, `user`, `pass`, `sdt`, `role`) VALUES
(1, 'admin', NULL, NULL, 'admin', '123', '', 1),
(2, NULL, NULL, NULL, 'user', '123', '', 0),
(3, NULL, NULL, 'tutran123@gmail.com', 'tutran', 'Tutran123@', '', 0),
(4, 'Trần Trọng Tú', 'Yên Lạc', 'tudeptrai@gmail.com', 'tudeptrai2', 'Tudeptraihon12@', '0348454627', 0),
(5, NULL, NULL, 'tu10diem@gmail.com', 'tu10diem', 'Tu10diem@', '', 0),
(6, 'Trần Trọng Tú', 'Yên Lạc', 'tungon@gmail.com', 'tungon', 'Tungon123@', '0348454626', 0),
(7, NULL, NULL, 'nhacnhoky@gmail.com', 'nhacnhoky', 'Nhacnhoky123@', '', 0),
(8, NULL, NULL, 'longdan@gmail.com', 'longdan', 'Longdan123@', '', 0),
(9, NULL, NULL, 'longngu@gmail.com', 'longngu', 'Longngu123@', '', 0),
(10, NULL, NULL, 'tungonhon@gmail.com', 'tungonhon', 'Tungonhon123@', '', 0),
(11, 'Kỳ Hoàng Quang', 'phu xuyen', '123@ggmail.com', 'hoangky', '12345678', '0343516899', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dh_user` (`iduser`);

--
-- Chỉ mục cho bảng `tbl_donhang_sanpham`
--
ALTER TABLE `tbl_donhang_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_ctdh` (`idsp`),
  ADD KEY `fk_ctdh_dh` (`iddh`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_giohang` (`idsp`),
  ADD KEY `fk_user_giohang` (`iduser`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_dm` (`iddm`);

--
-- Chỉ mục cho bảng `tbl_sanphamcase`
--
ALTER TABLE `tbl_sanphamcase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_case` (`idsp`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang_sanpham`
--
ALTER TABLE `tbl_donhang_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_sanphamcase`
--
ALTER TABLE `tbl_sanphamcase`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD CONSTRAINT `fk_dh_user` FOREIGN KEY (`iduser`) REFERENCES `tbl_user` (`id`);

--
-- Các ràng buộc cho bảng `tbl_donhang_sanpham`
--
ALTER TABLE `tbl_donhang_sanpham`
  ADD CONSTRAINT `fk_ctdh_dh` FOREIGN KEY (`iddh`) REFERENCES `tbl_donhang` (`id`),
  ADD CONSTRAINT `fk_sp_ctdh` FOREIGN KEY (`idsp`) REFERENCES `tbl_sanphamcase` (`id`);

--
-- Các ràng buộc cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD CONSTRAINT `fk_sp_giohang` FOREIGN KEY (`idsp`) REFERENCES `tbl_sanphamcase` (`id`),
  ADD CONSTRAINT `fk_user_giohang` FOREIGN KEY (`iduser`) REFERENCES `tbl_user` (`id`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_sp_dm` FOREIGN KEY (`iddm`) REFERENCES `tbl_danhmuc` (`id`);

--
-- Các ràng buộc cho bảng `tbl_sanphamcase`
--
ALTER TABLE `tbl_sanphamcase`
  ADD CONSTRAINT `fk_sp_case` FOREIGN KEY (`idsp`) REFERENCES `tbl_sanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
