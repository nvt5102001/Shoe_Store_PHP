-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3307
-- Thời gian đã tạo: Th10 14, 2022 lúc 03:45 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoes_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchitietdd`
--

CREATE TABLE `tblchitietdd` (
  `IdCTDD` int(11) NOT NULL,
  `IdSP` int(11) NOT NULL,
  `IdDD` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblchitietdd`
--

INSERT INTO `tblchitietdd` (`IdCTDD`, `IdSP`, `IdDD`, `SoLuong`) VALUES
(35, 30, 22, 1),
(36, 24, 22, 2),
(37, 6, 22, 2),
(38, 31, 25, 2),
(39, 7, 25, 1),
(40, 28, 26, 1),
(41, 24, 26, 2),
(42, 31, 27, 2),
(43, 23, 27, 1),
(44, 11, 27, 2),
(45, 30, 28, 1),
(46, 29, 29, 1),
(47, 26, 29, 2),
(48, 27, 30, 2),
(49, 11, 31, 2),
(50, 27, 32, 2),
(51, 24, 32, 1),
(52, 30, 33, 1),
(53, 25, 33, 1),
(54, 17, 34, 2),
(55, 7, 34, 1),
(56, 31, 34, 2),
(57, 28, 35, 3),
(58, 31, 36, 1),
(59, 13, 36, 2),
(60, 12, 36, 1),
(61, 26, 37, 2),
(62, 26, 38, 3),
(63, 31, 39, 1),
(64, 30, 39, 2),
(65, 31, 40, 1),
(66, 30, 40, 2),
(67, 31, 41, 1),
(68, 30, 41, 2),
(69, 31, 42, 1),
(70, 30, 42, 2),
(71, 12, 43, 2),
(72, 12, 44, 2),
(73, 12, 45, 1),
(74, 31, 46, 2),
(75, 30, 46, 1),
(76, 31, 47, 1),
(77, 30, 47, 2),
(78, 31, 48, 1),
(79, 30, 48, 2),
(80, 31, 49, 1),
(81, 30, 49, 2),
(82, 12, 50, 2),
(83, 24, 51, 1),
(84, 23, 51, 1),
(85, 18, 52, 2),
(86, 26, 52, 1),
(87, 28, 53, 1),
(88, 25, 53, 2),
(89, 29, 54, 2),
(90, 27, 54, 1),
(91, 28, 55, 1),
(92, 10, 55, 2),
(93, 30, 56, 2),
(94, 31, 57, 2),
(95, 24, 57, 1),
(96, 31, 58, 1),
(97, 26, 58, 2),
(98, 31, 60, 1),
(99, 25, 60, 1),
(100, 30, 61, 1),
(101, 28, 61, 1),
(102, 27, 62, 1),
(103, 23, 62, 1),
(104, 25, 62, 1),
(105, 20, 63, 1),
(106, 25, 63, 2),
(107, 11, 64, 1),
(108, 14, 64, 2),
(109, 25, 65, 2),
(110, 24, 65, 1),
(111, 16, 66, 1),
(112, 28, 66, 1),
(113, 23, 66, 2),
(114, 26, 67, 1),
(115, 7, 67, 2),
(116, 30, 68, 1),
(117, 27, 68, 2),
(118, 9, 69, 2),
(119, 24, 69, 1),
(120, 27, 70, 1),
(121, 25, 70, 2),
(122, 18, 71, 1),
(123, 25, 71, 2),
(124, 30, 72, 1),
(125, 26, 72, 2),
(126, 29, 73, 2),
(127, 23, 73, 2),
(128, 25, 74, 1),
(129, 14, 75, 1),
(130, 31, 76, 1),
(131, 28, 77, 1),
(132, 11, 78, 1),
(133, 7, 79, 1),
(134, 8, 80, 1),
(135, 9, 81, 1),
(136, 11, 82, 1),
(137, 23, 83, 1),
(138, 23, 84, 1),
(139, 31, 85, 2),
(140, 11, 85, 1),
(141, 26, 86, 1),
(142, 7, 86, 2),
(143, 25, 87, 2),
(144, 24, 87, 2),
(145, 24, 88, 2),
(146, 18, 88, 1),
(147, 25, 89, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchitietpnk`
--

CREATE TABLE `tblchitietpnk` (
  `IdCTPNK` int(11) NOT NULL,
  `IdSP` int(11) NOT NULL,
  `IdPNK` int(11) NOT NULL,
  `SoLuongNhap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblchitietpnk`
--

INSERT INTO `tblchitietpnk` (`IdCTPNK`, `IdSP`, `IdPNK`, `SoLuongNhap`) VALUES
(1, 7, 1, 2),
(2, 9, 1, 3),
(3, 16, 2, 5),
(4, 21, 2, 1),
(5, 28, 3, 8),
(6, 25, 3, 2),
(7, 7, 1, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldondat`
--

CREATE TABLE `tbldondat` (
  `IdDD` int(11) NOT NULL,
  `ThoiGian` datetime NOT NULL,
  `GmailNV` varchar(50) NOT NULL,
  `GmailKH` varchar(50) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `TongTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbldondat`
--

INSERT INTO `tbldondat` (`IdDD`, `ThoiGian`, `GmailNV`, `GmailKH`, `TrangThai`, `TongTien`) VALUES
(22, '2022-10-17 22:52:53', 'thuynguyen@gmail.com', 'hiep@gmail.com', 0, 27640000),
(25, '2022-10-18 21:02:37', 'thuynguyen@gmail.com', 'thinh@gmail.com', 0, 64550000),
(26, '2022-10-22 13:54:32', 'thuynguyen@gmail.com', 'thinh@gmail.com', 0, 17340000),
(27, '2022-10-22 14:07:05', 'thuynguyen@gmail.com', 'thinh@gmail.com', 0, 66110000),
(28, '2022-10-22 14:15:13', 'thuynguyen@gmail.com', 'thinh@gmail.com', 0, 25000000),
(29, '2022-10-26 16:59:10', 'thuynguyen@gmail.com', 'hiep@gmail.com', 0, 21300000),
(30, '2022-10-26 17:19:30', 'thuynguyen@gmail.com', 'hiep@gmail.com', 0, 31100000),
(31, '2022-10-27 21:12:11', 'thuynguyen@gmail.com', 'thuy@gmail.com', 0, 1240000),
(32, '2022-10-27 21:29:54', 'thuynguyen@gmail.com', 'thuy@gmail.com', 0, 31770000),
(33, '2022-10-27 21:32:51', 'thuynguyen@gmail.com', 'thuy@gmail.com', 0, 25620000),
(34, '2022-10-28 09:33:04', 'thuynguyen@gmail.com', 'thinh@gmail.com', 0, 65850000),
(35, '2022-10-28 09:37:46', 'thuynguyen@gmail.com', 'thinh@gmail.com', 0, 48000000),
(36, '2022-10-28 22:42:48', 'thuynguyen@gmail.com', 'thuy@gmail.com', 0, 33950000),
(37, '2022-10-28 22:48:23', 'thuynguyen@gmail.com', 'thuy@gmail.com', 0, 1300000),
(38, '2022-10-29 10:23:05', 'thuynguyen@gmail.com', 'thang@gmail.com', 0, 1950000),
(39, '2022-10-29 11:12:51', 'thuynguyen@gmail.com', 'thang@gmail.com', 0, 82000000),
(40, '2022-10-29 11:15:28', 'thuynguyen@gmail.com', 'hiep@gmail.com', 0, 82000000),
(41, '2022-10-29 11:18:19', 'thuynguyen@gmail.com', 'hiep@gmail.com', 0, 82000000),
(42, '2022-10-29 11:22:29', 'thuynguyen@gmail.com', 'thinh@gmail.com', 2, 82000000),
(43, '2022-10-29 11:34:53', 'thuynguyen@gmail.com', 'chi@gmail.com', 0, 1300000),
(44, '2022-10-29 11:36:35', 'thuynguyen@gmail.com', 'chi@gmail.com', 0, 1300000),
(45, '2022-10-29 11:36:48', 'thuynguyen@gmail.com', 'chi@gmail.com', 0, 650000),
(46, '2022-10-29 11:39:52', 'thuynguyen@gmail.com', 'chi@gmail.com', 0, 89000000),
(47, '2022-10-29 11:41:29', 'thuynguyen@gmail.com', 'chi@gmail.com', 0, 82000000),
(48, '2022-10-29 11:45:37', 'thuynguyen@gmail.com', 'chi@gmail.com', 0, 82000000),
(49, '2022-10-29 11:48:05', 'thuynguyen@gmail.com', 'thuy@gmail.com', 0, 82000000),
(50, '2022-10-29 11:49:02', 'thuynguyen@gmail.com', 'thuy@gmail.com', 0, 1300000),
(51, '2022-10-29 12:05:33', 'thuynguyen@gmail.com', 'thang@gmail.com', 0, 1540000),
(52, '2022-11-01 09:20:51', 'thuynguyen@gmail.com', 'thuy@gmail.com', 0, 2390000),
(53, '2022-11-01 09:43:16', 'thuynguyen@gmail.com', 'thuy@gmail.com', 0, 17240000),
(54, '2022-11-01 09:48:40', 'thuynguyen@gmail.com', 'thuy@gmail.com', 0, 55550000),
(55, '2022-11-01 09:54:39', 'thuynguyen@gmail.com', 'thuy@gmail.com', 0, 17740000),
(56, '2022-11-01 22:48:07', 'thuynguyen@gmail.com', 'thuy@gmail.com', 0, 50000000),
(57, '2022-11-04 17:01:18', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 64670000),
(58, '2022-11-04 17:06:18', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 33300000),
(59, '2022-11-04 17:06:22', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 33300000),
(60, '2022-11-04 17:10:09', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 32620000),
(61, '2022-11-05 21:33:21', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 41000000),
(62, '2022-11-05 21:35:01', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 17040000),
(63, '2022-11-05 21:36:58', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 1910000),
(64, '2022-11-05 21:40:51', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 2360000),
(65, '2022-11-05 21:48:03', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 1910000),
(66, '2022-11-05 21:51:28', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 18610000),
(67, '2022-11-05 21:53:20', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 1750000),
(68, '2022-11-05 21:56:17', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 56100000),
(69, '2022-11-05 22:01:20', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 2010000),
(70, '2022-11-05 22:06:25', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 16790000),
(71, '2022-11-05 22:09:15', 'thuynguyen@gmail.com', 'thuysieunhan2001@gmail.com', 0, 2110000),
(72, '2022-11-10 16:57:48', 'thuynguyen@gmail.com', 'chi@gmail.com', 2, 26300000),
(73, '2022-11-10 17:10:57', 'thuynguyen@gmail.com', 'chi@gmail.com', 2, 41740000),
(74, '2022-11-10 17:28:12', 'thuynguyen@gmail.com', 'chi@gmail.com', 2, 620000),
(75, '2022-11-10 17:30:09', 'thuynguyen@gmail.com', 'chi@gmail.com', 2, 870000),
(76, '2022-11-10 17:32:34', 'thuynguyen@gmail.com', 'chi@gmail.com', 2, 32000000),
(77, '2022-11-10 17:33:15', 'thuynguyen@gmail.com', 'chi@gmail.com', 2, 16000000),
(78, '2022-11-10 17:34:34', 'thuynguyen@gmail.com', 'chi@gmail.com', 2, 620000),
(79, '2022-11-10 17:35:14', 'thuynguyen@gmail.com', 'chi@gmail.com', 2, 550000),
(80, '2022-11-10 17:36:34', 'thuynguyen@gmail.com', 'chi@gmail.com', 2, 570000),
(81, '2022-11-10 17:38:04', 'thuynguyen@gmail.com', 'chi@gmail.com', 2, 670000),
(82, '2022-11-10 17:38:40', 'thuynguyen@gmail.com', 'chi@gmail.com', 2, 620000),
(83, '2022-11-10 17:39:53', 'thuynguyen@gmail.com', 'chi@gmail.com', 0, 870000),
(84, '2022-11-10 21:46:26', 'thuynguyen@gmail.com', 'thang@gmail.com', 2, 870000),
(85, '2022-11-11 10:44:49', 'thuynguyen@gmail.com', 'thinh@gmail.com', 2, 64620000),
(86, '2022-11-11 10:45:13', 'thuynguyen@gmail.com', 'thinh@gmail.com', 0, 1750000),
(87, '2022-11-12 12:27:13', 'thuynguyen@gmail.com', 'hiep@gmail.com', 0, 2580000),
(88, '2022-11-12 20:37:19', 'thuynguyen@gmail.com', 'thuy@gmail.com', 0, 2210000),
(89, '2022-11-12 20:39:03', 'thuynguyen@gmail.com', 'thuy@gmail.com', 2, 1240000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblloaisp`
--

CREATE TABLE `tblloaisp` (
  `IdLoaiSP` int(50) NOT NULL,
  `TenLoai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblloaisp`
--

INSERT INTO `tblloaisp` (`IdLoaiSP`, `TenLoai`) VALUES
(1, 'Giày da'),
(2, 'Giày thể thao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblphieunk`
--

CREATE TABLE `tblphieunk` (
  `IdPNK` int(11) NOT NULL,
  `ThoiGian` datetime NOT NULL,
  `GmailNV` varchar(50) NOT NULL,
  `GmailNCC` varchar(50) NOT NULL,
  `TongTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblphieunk`
--

INSERT INTO `tblphieunk` (`IdPNK`, `ThoiGian`, `GmailNV`, `GmailNCC`, `TongTien`) VALUES
(1, '2022-11-12 13:52:49', 'thuynguyen@gmail.com', 'ncc1@gmail.com', 5000000),
(2, '2022-11-12 19:53:52', 'thuynguyen@gmail.com', 'ncc1@gmail.com', 7500000),
(3, '2022-11-12 13:53:52', 'thuynguyen@gmail.com', 'ncc1@gmail.com', 2500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblsanpham`
--

CREATE TABLE `tblsanpham` (
  `IdSP` int(11) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `IdTH` int(11) NOT NULL,
  `IdLoaiSP` int(11) NOT NULL,
  `Mau` varchar(50) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `SoLuongSP` int(10) NOT NULL,
  `GiaMua` float NOT NULL,
  `GiaBan` float NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `Mota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblsanpham`
--

INSERT INTO `tblsanpham` (`IdSP`, `TenSP`, `IdTH`, `IdLoaiSP`, `Mau`, `Size`, `SoLuongSP`, `GiaMua`, `GiaBan`, `HinhAnh`, `Mota`) VALUES
(6, 'Giày Vans T01', 1, 2, 'Trắng', '43', 20, 520000, 650000, '1666779538_giayvansT01.jpg', 'Đẹp phù hợp với  sinh viên'),
(7, 'Giày da T01', 6, 1, 'nâu', '42', 11, 520000, 550000, '1665418090_giaydaT01.jpg', 'Giày da xịn '),
(8, 'Giày da T02', 6, 1, 'Đen', '42', 11, 520000, 570000, '1665492056_giaydaT02.jpg', 'Da xịn nhập khẩu từ Đức'),
(9, 'Giày da T03', 6, 1, 'Đen', '42', 7, 520000, 670000, '1665492137_giaydaT03.jpg', 'Da xịn'),
(10, 'Giày da T04', 6, 1, 'Đen', '42', 8, 520000, 870000, '1665492183_giaydaT04.jpg', 'Da xịn, giá rẻ'),
(11, 'Giày da T05', 6, 1, 'Đen', '43', 6, 520000, 620000, '1665492211_giaydaT05.jpg', 'Da xịn'),
(12, 'Giày Vans T02', 1, 2, 'Xanh Đỏ', '41', 2, 520000, 650000, '1665492267_giayvansT02.jpg', 'Giày xịn'),
(13, 'Giày Vans T03', 1, 2, 'Trắng Đen', '43', 30, 520000, 650000, '1665492322_giayvansT03.jpg', 'Giày xịn'),
(14, 'Giày Vans T04', 1, 2, 'Trắng', '42', 2, 520000, 870000, '1665492438_giayvansT04.jpg', 'Giày đẹp'),
(15, 'Giày Vans T05', 1, 2, 'Xanh Đỏ', '43', 10, 520000, 550000, '1665492470_giayvansT05.jpg', 'Giày rẻ'),
(16, 'Giày Adidas T01', 2, 2, 'Trắng', '43', 19, 520000, 870000, '1665492520_giayadidasT01.jpg', 'Xịn'),
(17, 'Giày Adidas T02', 2, 2, 'Trắng', '41', 40, 520000, 650000, '1665492548_giayadidasT02.jpg', 'Xịn'),
(18, 'Giày Adidas T03', 2, 2, 'Trắng', '40', 25, 550000, 870000, '1665492581_giayadidasT03.jpg', 'Giày cực đẹp'),
(19, 'Giày Adidas T04', 2, 2, 'Đen', '43', 28, 550000, 870000, '1665492603_giayadidasT04.jpg', 'Đẹp'),
(20, 'Giày Adidas T05', 2, 2, 'Đen', '41', 22, 520000, 670000, '1665492627_giayadidasT05.jpg', 'Giày xịn'),
(21, 'Giày Jordan T01', 3, 2, 'Đen Trắng', '43', 21, 520000, 550000, '1665492679_giayjordanT01.jpg', 'Xịn'),
(23, 'Giày Jordan T02', 3, 2, 'Nâu Trắng', '41', 20, 550000, 870000, '1665492717_giayjordanT02.jpg', 'Giày đẹp'),
(24, 'Giày Jordan T03', 3, 2, 'Xanh Trắng', '41', 26, 520000, 670000, '1665492750_giayjordanT03.jpg', 'Giày xịn'),
(25, 'Giày Jordan T04', 3, 2, 'Trắng Xám', '42', 1, 550000, 620000, '1665492780_giayjordanT04.jpg', 'Giày rẻ'),
(26, 'Giày Jordan T05', 3, 2, 'Xanh Trắng', '42', 10, 520000, 650000, '1665492819_giayjordanT05.jpg', 'Giày xịn'),
(27, 'Giày Dior T01', 4, 2, 'Trắng', '42', 20, 1250000, 15550000, '1665492885_giaydiorT01.jpg', 'Giày cực xịn'),
(28, 'Giày Dior T02', 4, 2, 'Đen', '41', 10, 1250000, 16000000, '1665492917_giaydiorT02.jpg', 'Giày cực xịn'),
(29, 'Giày Dior T03', 4, 2, 'Trắng', '41', 26, 1650000, 20000000, '1665492950_giaydiorT03.jpg', 'Giày cực xịn'),
(30, 'Giày Dior T04', 4, 2, 'Trắng', '43', 9, 1650000, 25000000, '1665492988_giaydiorT04.jpg', 'Giày cực xịn'),
(31, 'Giày Dior T05', 4, 2, 'Trắng', '43', 8, 2550000, 32000000, '1666779500_giaydiorT05.jpg', 'Giày chất liệu vải xịn, phù hợp với học sinh,sinh viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbltaikhoan`
--

CREATE TABLE `tbltaikhoan` (
  `Gmail` varchar(50) NOT NULL,
  `TenTK` varchar(100) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `LoaiTK` varchar(50) NOT NULL,
  `SDT` int(50) NOT NULL,
  `DiaChi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbltaikhoan`
--

INSERT INTO `tbltaikhoan` (`Gmail`, `TenTK`, `MatKhau`, `LoaiTK`, `SDT`, `DiaChi`) VALUES
('a@gmail.com', 'Nguyễn Văn A', '55587a910882016321201e6ebbc9f595', 'admin', 123131231, 'Hồ Chí Minh'),
('chi@gmail.com', 'Ngô Phương Chi', 'e10adc3949ba59abbe56e057f20f883e', 'user', 312414134, 'Bắc Giang'),
('hiep123@gmail.com', 'qeqwe', '55587a910882016321201e6ebbc9f595', 'user', 342141241, 'Bắc Giang'),
('hiep@gmail.com', 'HiepGa', 'e10adc3949ba59abbe56e057f20f883e', 'user', 123134114, 'Thái Bình'),
('ncc1@gmail.com', 'Công ty cổ phần A', 'e10adc3949ba59abbe56e057f20f883e', 'supplier', 123131231, 'Đống Đa, Hà Nội'),
('thang@gmail.com', 'Hà Văn Thắng', 'e10adc3949ba59abbe56e057f20f883e', 'user', 392144124, 'Nghệ An'),
('thinh@gmail.com', 'Đặng Hữu Thịnh', 'e10adc3949ba59abbe56e057f20f883e', 'user', 342147842, 'Số nhà 3, ngõ 59, Quan Hoa, Cầu Giấy, Hà Nội'),
('thuy5102001@gmail.com', 'ThuyNguyen', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 123124124, 'Số nhà 32, ngõ 9, Khâm Thiên, Đống Đa, Hà Nội'),
('thuy@gmail.com', 'Nguyễn Văn Thuỷ', 'e10adc3949ba59abbe56e057f20f883e', 'user', 342141241, 'Số nhà 332, Hoàng Văn Thụ, Dĩnh Kế, Bắc Giang'),
('thuynguyen@gmail.com', 'Nguyễn Thuỷ', 'e10adc3949ba59abbe56e057f20f883e', 'employee', 341214313, 'Thôn Dĩnh Cầu, Tân Dĩnh, Lạng Giang, Bắc Giang'),
('thuysieunhan2001@gmail.com', 'Nguyên Văn B', 'e10adc3949ba59abbe56e057f20f883e', 'user', 392144125, 'Thanh Xuân, Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblthongke`
--

CREATE TABLE `tblthongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblthongke`
--

INSERT INTO `tblthongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(1, '2022-10-21', 31, '360000000', 10),
(2, '2022-10-22', 33, '400000000', 20),
(3, '2022-10-23', 35, '250000000', 25),
(4, '2022-10-24', 40, '60000000', 2),
(5, '2022-10-27', 1, '25620000', 2),
(6, '2022-10-28', 2, '49200000', 5),
(7, '2022-10-29', 12, '379440000', 3),
(8, '2022-11-01', 5, '96430000', 6),
(9, '2022-11-04', 4, '130590000', 8),
(10, '2022-11-07', 14, '253190000', 40),
(11, '2022-11-10', 1, '870000', 1),
(12, '2022-11-11', 1, '1750000', 3),
(13, '2022-11-12', 2, '4790000', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblthuonghieu`
--

CREATE TABLE `tblthuonghieu` (
  `IdTH` int(50) NOT NULL,
  `TenTH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Bảng thương hiệu';

--
-- Đang đổ dữ liệu cho bảng `tblthuonghieu`
--

INSERT INTO `tblthuonghieu` (`IdTH`, `TenTH`) VALUES
(1, 'Vans'),
(2, 'Adidas'),
(3, 'Jordan'),
(4, 'Dior'),
(6, 'Khác');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tblchitietdd`
--
ALTER TABLE `tblchitietdd`
  ADD PRIMARY KEY (`IdCTDD`),
  ADD KEY `IdDD` (`IdDD`),
  ADD KEY `IdSP` (`IdSP`);

--
-- Chỉ mục cho bảng `tblchitietpnk`
--
ALTER TABLE `tblchitietpnk`
  ADD PRIMARY KEY (`IdCTPNK`),
  ADD KEY `IdPNK` (`IdPNK`),
  ADD KEY `IdSP` (`IdSP`);

--
-- Chỉ mục cho bảng `tbldondat`
--
ALTER TABLE `tbldondat`
  ADD PRIMARY KEY (`IdDD`),
  ADD KEY `GmailKH` (`GmailKH`),
  ADD KEY `GmailNV` (`GmailNV`);

--
-- Chỉ mục cho bảng `tblloaisp`
--
ALTER TABLE `tblloaisp`
  ADD PRIMARY KEY (`IdLoaiSP`);

--
-- Chỉ mục cho bảng `tblphieunk`
--
ALTER TABLE `tblphieunk`
  ADD PRIMARY KEY (`IdPNK`),
  ADD KEY `GmailNCC` (`GmailNCC`),
  ADD KEY `GmailNV` (`GmailNV`);

--
-- Chỉ mục cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  ADD PRIMARY KEY (`IdSP`),
  ADD KEY `IdTH` (`IdTH`),
  ADD KEY `IdLoaiSP` (`IdLoaiSP`);

--
-- Chỉ mục cho bảng `tbltaikhoan`
--
ALTER TABLE `tbltaikhoan`
  ADD PRIMARY KEY (`Gmail`);

--
-- Chỉ mục cho bảng `tblthongke`
--
ALTER TABLE `tblthongke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblthuonghieu`
--
ALTER TABLE `tblthuonghieu`
  ADD PRIMARY KEY (`IdTH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tblchitietdd`
--
ALTER TABLE `tblchitietdd`
  MODIFY `IdCTDD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT cho bảng `tblchitietpnk`
--
ALTER TABLE `tblchitietpnk`
  MODIFY `IdCTPNK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbldondat`
--
ALTER TABLE `tbldondat`
  MODIFY `IdDD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `tblloaisp`
--
ALTER TABLE `tblloaisp`
  MODIFY `IdLoaiSP` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tblphieunk`
--
ALTER TABLE `tblphieunk`
  MODIFY `IdPNK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  MODIFY `IdSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tblthongke`
--
ALTER TABLE `tblthongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tblthuonghieu`
--
ALTER TABLE `tblthuonghieu`
  MODIFY `IdTH` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tblchitietdd`
--
ALTER TABLE `tblchitietdd`
  ADD CONSTRAINT `tblchitietdd_ibfk_1` FOREIGN KEY (`IdDD`) REFERENCES `tbldondat` (`IdDD`),
  ADD CONSTRAINT `tblchitietdd_ibfk_2` FOREIGN KEY (`IdSP`) REFERENCES `tblsanpham` (`IdSP`);

--
-- Các ràng buộc cho bảng `tblchitietpnk`
--
ALTER TABLE `tblchitietpnk`
  ADD CONSTRAINT `tblchitietpnk_ibfk_1` FOREIGN KEY (`IdPNK`) REFERENCES `tblphieunk` (`IdPNK`),
  ADD CONSTRAINT `tblchitietpnk_ibfk_2` FOREIGN KEY (`IdSP`) REFERENCES `tblsanpham` (`IdSP`);

--
-- Các ràng buộc cho bảng `tbldondat`
--
ALTER TABLE `tbldondat`
  ADD CONSTRAINT `tbldondat_ibfk_1` FOREIGN KEY (`GmailKH`) REFERENCES `tbltaikhoan` (`Gmail`),
  ADD CONSTRAINT `tbldondat_ibfk_2` FOREIGN KEY (`GmailNV`) REFERENCES `tbltaikhoan` (`Gmail`);

--
-- Các ràng buộc cho bảng `tblphieunk`
--
ALTER TABLE `tblphieunk`
  ADD CONSTRAINT `tblphieunk_ibfk_1` FOREIGN KEY (`GmailNCC`) REFERENCES `tbltaikhoan` (`Gmail`),
  ADD CONSTRAINT `tblphieunk_ibfk_2` FOREIGN KEY (`GmailNV`) REFERENCES `tbltaikhoan` (`Gmail`);

--
-- Các ràng buộc cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  ADD CONSTRAINT `tblsanpham_ibfk_1` FOREIGN KEY (`IdTH`) REFERENCES `tblthuonghieu` (`IdTH`),
  ADD CONSTRAINT `tblsanpham_ibfk_2` FOREIGN KEY (`IdLoaiSP`) REFERENCES `tblloaisp` (`IdLoaiSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
