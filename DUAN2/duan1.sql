-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 06, 2025 lúc 10:19 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `stt` int(5) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `stt`, `name`, `link`, `img`) VALUES
(7, 3, 'banner 3', 'index.php?act=sanpham', 'banner nhỏ 1.png'),
(8, 4, 'banner 3', 'index.php?act=sanpham', 'banner nhỏ 2.png'),
(10, 5, 'banner 4', '#', 'banner_three_1.webp'),
(11, 6, 'banner 6', '#', 'banner_three_2.webp'),
(12, 7, 'banner 7', '#', 'banner_three_3.webp'),
(13, 8, 'banner 8', '#', 'banner.webp'),
(14, 9, 'banner 9', '#', 'banner2.webp'),
(15, 1, 'banner chính', 'index.php?act=sanpham', 'Banner gt.png'),
(16, 2, 'banner chính', 'index.php?act=sanpham', 'banner-chinh4.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idvoucher` int(10) NOT NULL,
  `bill_name` varchar(100) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_backupaddress` varchar(255) DEFAULT NULL,
  `bill_tel` int(20) NOT NULL,
  `bill_ghichu` varchar(255) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1,
  `ngaydathang` varchar(50) NOT NULL,
  `tamtinh` int(10) DEFAULT NULL,
  `giamgia` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0,
  `realdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `idvoucher`, `bill_name`, `bill_email`, `bill_address`, `bill_backupaddress`, `bill_tel`, `bill_ghichu`, `bill_pttt`, `ngaydathang`, `tamtinh`, `giamgia`, `total`, `bill_status`, `realdate`) VALUES
(12, 3, 0, 'tinlovekieu', 'tin29102005@gmail.com', '31/ 8 Đường số 41, Hiệp Bình Chánh, Thủ Đức, Hồ Chí Minh, Việt Nam', '', 906986565, '', 1, '10:00:16am 15/04/2025', 254000, 0, 254000, 0, '2025-04-21'),
(17, 3, 3, 'tinlovekieu', 'tin29102005@gmail.com', '31/ 8 Đường số 41, Hiệp Bình Chánh, Thủ Đức, Hồ Chí Minh, Việt Nam', 'dsfsdfsdfsd', 906986565, 'csdfsdfsd', 3, '07:53:24pm 16/04/2025', 838700, 20000, 818700, 0, '2025-04-21'),
(18, 3, 0, 'tinlovekieu', 'tin29102005@gmail.com', '31/ 8 Đường số 41, Hiệp Bình Chánh, Thủ Đức, Hồ Chí Minh, Việt Nam', '', 906986565, '', 1, '07:53:44pm 16/04/2025', 59000, 0, 18000, 1, '2025-04-21'),
(51, 3, 0, 'tinlovekieu', 'tin29102005@gmail.com', '31/ 8 Đường số 41, Hiệp Bình Chánh, Thủ Đức, Hồ Chí Minh, Việt Nam', '', 2147483647, '', 1, '04:26:43am 17/04/2025', 129200, 0, 129200, 4, '2025-04-21'),
(52, 11, 0, 'bé na', 'Buib55221@gmail.com', '31/ 8 Đường số 41, Hiệp Bình Chánh, Thủ Đức, Hồ Chí Minh, Việt Nam', 'dsfsdfsdfsd', 906986565, 'dsafdsfsd', 1, '03:10:47am 21/04/2025', 12416300, 0, 12138000, 0, '2025-04-21'),
(54, 3, 0, 'tinlovekieu', 'tin29102005@gmail.com', '31/ 8 Đường số 41, Hiệp Bình Chánh, Thủ Đức, Hồ Chí Minh, Việt Nam', '', 2147483647, '', 1, '06:39:46pm 22/04/2025', 129200, 0, 129200, 0, '2025-04-22'),
(55, 3, 0, 'tinlovekieu', 'tin29102005@gmail.com', '31/ 8 Đường số 41, Hiệp Bình Chánh, Thủ Đức, Hồ Chí Minh, Việt Nam', '', 2147483647, '', 3, '06:55:58pm 23/04/2025', 1483100, 0, 1483100, 0, '2025-04-23'),
(56, 3, 2, 'tinlovekieu', 'tin29102005@gmail.com', '31/ 8 Đường số 41, Hiệp Bình Chánh, Thủ Đức, Hồ Chí Minh, Việt Nam', '', 2147483647, '', 2, '07:28:51pm 23/04/2025', 2111000, 100000, 2011000, 0, '2025-04-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `tieude` varchar(100) NOT NULL,
  `tomtat` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `noidung` text NOT NULL,
  `ngaydang` date NOT NULL DEFAULT current_timestamp(),
  `iduser` int(10) NOT NULL,
  `iddmblog` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `tieude`, `tomtat`, `img`, `view`, `noidung`, `ngaydang`, `iduser`, `iddmblog`) VALUES
(4, 'nhưng loại rau ăn để có được gái ngonabc', 'rau này ăn vô  auto có gáisads', 'pngtree-blue-tech-minimalist-banner-background-picture-image_1050406.jpg', 2000, '<p>Rau an to&agrave;n&nbsp;4KFarm&nbsp;với ti&ecirc;u ch&iacute;&nbsp;4 KH&Ocirc;NG, lu&ocirc;n ưu ti&ecirc;n bảo vệ sức khỏe người ti&ecirc;u d&ugrave;ng. Vị ngọt m&aacute;t, th&agrave;nh phần dinh dưỡng cao đặc biệt l&agrave; h&agrave;m lượng sắt dồi d&agrave;o, Rau Dền&nbsp;4KFarm&nbsp;sẽ l&agrave; m&oacute;n canh bổ dưỡng hỗ trợ điều trị nhiều loại bệnh như t&aacute;o b&oacute;n, tiểu đường, thiếu m&aacute;u...</p>\r\n\r\n<h2>4KFarm l&agrave; ai?</h2>\r\n\r\n<p>Rau dền&nbsp;4KFarm&nbsp;l&agrave; một loại rau xanh được c&aacute;c b&agrave; nội trợ bổ sung trong thực đơn mỗi ng&agrave;y. Ngo&agrave;i vị ngọt m&aacute;t v&agrave; th&agrave;nh phần dinh dưỡng cao, rau dền c&ograve;n mang đến nhiều lợi &iacute;ch như: Chống t&aacute;o b&oacute;n, điều trị tăng huyết &aacute;p, tốt cho bệnh nh&acirc;n tiểu đường, ngừa ung thư...</p>\r\n\r\n<h2>Điểm kh&aacute;c biệt rau 4KFarm</h2>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/DUAN3/DUAN2/view/asset/images/product-detail/product-desc/bv1.jpg\" /></p>\r\n\r\n<h2>H&igrave;nh ảnh canh t&aacute;c tại nh&agrave; m&agrave;ng</h2>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/DUAN3/DUAN2/view/asset/images/product-detail/product-desc/bv2.jpg\" />&nbsp;<img alt=\"\" src=\"http://localhost/DUAN3/DUAN2/view/asset/images/product-detail/product-desc/bv3.jpg\" />&nbsp;<img alt=\"\" src=\"http://localhost/DUAN3/DUAN2/view/asset/images/product-detail/product-desc/bv4.jpg\" /></p>\r\n', '2025-04-23', 3, 2),
(5, 'Văn Thị Mười', 'bài viết này rất hay và ngon', 'Ngay-xua-co-mot-con-bo.jpg', 100, '<p>dsdfsdfsd</p>\r\n', '2025-04-23', 3, 4),
(6, 'Văn Thị Mười', 'bài viết này rất hay và ngon', 'anime-re-zero-starting-life-in-another-world-emilia-re-zero-re-zero-starting-life-in-another-world-ova-memory-snow-wallpaper-preview.jpg', 800, '<p>sdfsdfsd</p>\r\n', '2025-04-23', 3, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idsp` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idsp`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(23, 3, 10, 'chuoi-cau-nai-tu-1kg-tro-len-giao-ngau-nhien-song-hoac-chin-202205111959296276.webp', 'Chuối cau nải 800g trở lên (Giao ngẫu nhiên sống hoặc chín)', 30000, 21, 630000, 17),
(24, 3, 11, 'xa-lach-xoong-da-lat-300g-202304070914101670.webp', 'Xà lách xoong Đà Lạt', 5100, 17, 86700, 17),
(25, 3, 8, 'xa-lach-bup-mo-thuy-canh-tui-300g-202010051645203830.webp', 'Xà lách búp mỡ thuỷ canh bó 300g', 9000, 8, 72000, 17),
(26, 3, 8, 'xa-lach-bup-mo-thuy-canh-tui-300g-202010051645203830.webp', 'Xà lách búp mỡ thuỷ canh bó 300g', 9000, 1, 9000, 18),
(40, 3, 16, 'buoi-da-xanh-trai-tu-17kg-tro-len-202205111921599930.webp', 'Bưởi da xanh trái 1.6kg trở lên', 79200, 1, 79200, 51),
(41, 11, 11, 'xa-lach-xoong-da-lat-300g-202304070914101670.webp', 'Xà lách xoong Đà Lạt', 5100, 43, 219300, 52),
(42, 11, 8, 'xa-lach-bup-mo-thuy-canh-tui-300g-202010051645203830.webp', 'Xà lách búp mỡ thuỷ canh bó 300g', 9000, 1, 9000, 52),
(43, 11, 19, '6-hop-nuoc-ep-trai-vai-malee-1-lit-201904191129060515.webp', '6 hộp nước ép trái vải Malee 1 lít', 357000, 34, 12138000, 52),
(47, 3, 16, 'buoi-da-xanh-trai-tu-17kg-tro-len-202205111921599930.webp', 'Bưởi da xanh trái 1.6kg trở lên', 79200, 1, 79200, 54),
(48, 3, 11, 'xa-lach-xoong-da-lat-300g-202304070914101670.webp', 'Xà lách xoong Đà Lạt', 5100, 1, 5100, 55),
(49, 3, 19, '6-hop-nuoc-ep-trai-vai-malee-1-lit-201904191129060515.webp', '6 hộp nước ép trái vải Malee 1 lít', 357000, 4, 1428000, 55),
(50, 3, 18, '6-hop-nuoc-dua-xiem-xanh-cocoxim-1-lit-202104081023172228.webp', '6 hộp nước dừa xiêm xanh Cocoxim 1 lít', 229000, 9, 2061000, 56);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idsp` int(10) NOT NULL,
  `noidung` varchar(255) DEFAULT NULL,
  `sosao` tinyint(1) NOT NULL DEFAULT 1,
  `ngaydanhgia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`id`, `iduser`, `idsp`, `noidung`, `sosao`, `ngaydanhgia`) VALUES
(38, 3, 11, 'sdfsd', 5, '2025-04-16 21:40:09'),
(39, 3, 11, 'sdfsd', 5, '2025-04-16 21:40:09'),
(40, 3, 11, 'sdfsdfsd', 5, '2025-04-16 21:42:35'),
(41, 3, 11, 'sssssssssssssssssssssssssss', 1, '2025-04-16 21:42:42'),
(42, 3, 11, 'dsfsd', 3, '2025-04-16 21:50:37'),
(43, 3, 11, 'dfsdfdsfsd', 1, '2025-04-16 21:50:43'),
(44, 3, 11, 'sdfsdfsd', 5, '2025-04-16 21:50:48'),
(45, 3, 11, 'fsdfds', 5, '2025-04-16 21:50:55'),
(46, 3, 11, 'sdfsdfsd', 3, '2025-04-16 21:51:07'),
(48, 3, 11, 'sdfsd', 5, '2025-04-16 21:52:22'),
(49, 3, 11, 'sdfsdfsd', 5, '2025-04-16 21:52:38'),
(50, 3, 11, 'dfsdf', 5, '2025-04-16 21:55:40'),
(58, 3, 11, 'dsdfsd', 2, '2025-04-16 23:29:51'),
(59, 3, 10, 'ssssssssssssss', 2, '2025-04-16 23:30:41'),
(60, 3, 10, 'fdddd', 5, '2025-04-17 03:58:46'),
(62, 1, 11, 'sdfsd', 2, '2025-04-22 13:26:05'),
(63, 1, 10, 'fsdfs', 5, '2025-04-22 13:26:54'),
(64, 1, 16, '', 5, '2025-04-22 13:27:53'),
(65, 3, 10, 'fsdfsd', 2, '2025-04-22 13:34:14'),
(66, 3, 11, 'sdfs', 5, '2025-04-22 13:35:48'),
(67, 3, 16, 'dfsd', 5, '2025-04-22 13:37:53'),
(68, 3, 16, 'dsfds', 5, '2025-04-22 13:39:55'),
(69, 1, 16, 'ffdfgdf', 3, '2025-04-22 22:12:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `stt` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `img`, `stt`) VALUES
(1, 'Rau quả', 'image_product2.jpg', 1),
(12, 'Trái cây', 'image_product1.webp', 2),
(14, 'Đồ khô', 'image_product3.webp', 3),
(15, 'Salad', 'xa-lach-xoong-da-lat-300g-202304070914105620.webp', 5),
(25, 'Đồ chạy các loại', '', 7),
(26, 'Nước ép', '', 4),
(28, 'Thực phẩm Organic khác', '', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucblog`
--

CREATE TABLE `danhmucblog` (
  `id` int(10) NOT NULL,
  `stt` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucblog`
--

INSERT INTO `danhmucblog` (`id`, `stt`, `name`) VALUES
(2, 1, 'tin tức về rau'),
(4, 2, 'Khuyến mãi'),
(5, 3, 'các loại rau hot nhất');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img`
--

CREATE TABLE `img` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `idsp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `img`
--

INSERT INTO `img` (`id`, `img`, `idsp`) VALUES
(127, 'buoi-da-xanh-trai-tu-17kg-tro-len-202205111921599930.webp', 16),
(128, 'buoi-da-xanh-trai-tu-17kg-tro-len-202205111922006315.webp', 16),
(129, 'buoi-da-xanh-trai-tu-17kg-tro-len-202211030916158049.webp', 16),
(130, 'bot-mi-da-dung-meizan-cao-cap-tui-1kg-202202121122399059.webp', 12),
(131, 'bot-mi-da-dung-meizan-goi-1kg-201903221403085142.webp', 12),
(132, 'bot-mi-da-dung-meizan-goi-1kg-201903221403086643.webp', 12),
(133, 'bot-mi-da-dung-meizan-goi-1kg-201903221403092427.webp', 12),
(134, 'xa-lach-xoong-da-lat-300g-202304070914101670.webp', 11),
(135, 'xa-lach-xoong-da-lat-300g-202304070914103953.webp', 11),
(136, 'xa-lach-xoong-da-lat-300g-202304070914105620.webp', 11),
(137, 'chuoi-cau-nai-tu-1kg-tro-len-giao-ngau-nhien-song-hoac-chin-202205111959296276.webp', 10),
(138, 'chuoi-cau-nai-tu-1kg-tro-len-giao-ngau-nhien-song-hoac-chin-202205111959300761.webp', 10),
(139, 'chuoi-cau-nai-tu-1kg-tro-len-giao-ngau-nhien-song-hoac-chin-202205111959303856.jpg', 10),
(140, 'chuoi-cau-nai-tu-1kg-tro-len-giao-ngau-nhien-song-hoac-chin-202211030858551894.webp', 10),
(141, 'chao-khoai-mon-mikiri-hu-180g-202102200958175921.webp', 9),
(142, 'chao-khoai-mon-mikiri-hu-180g-202102200958183306.webp', 9),
(143, 'chao-khoai-mon-mikiri-hu-180g-202102200958188049.webp', 9),
(144, 'chao-khoai-mon-mikiri-hu-180g-202102200958196434.webp', 9),
(145, 'chao-khoai-mon-mikiri-hu-180g-202203181448366956.webp', 9),
(146, 'xa-lach-bup-mo-thuy-canh-tui-300g-202010051645203830.webp', 8),
(147, 'xa-lach-bup-mo-thuy-canh-tui-300g-202010051645209664.webp', 8),
(148, 'xa-lach-bup-mo-thuy-canh-tui-300g-202010051645213476.webp', 8),
(149, 'xa-lach-bup-mo-thuy-canh-tui-300g-202010051645216778.webp', 8),
(155, '6-hop-nuoc-dua-xiem-xanh-cocoxim-1-lit-202104081023172228.webp', 18),
(156, '6-hop-nuoc-dua-xiem-xanh-cocoxim-1-lit-202104081023175218.webp', 18),
(157, '6-hop-nuoc-dua-xiem-xanh-cocoxim-1-lit-202104081023177718.webp', 18),
(158, '6-hop-nuoc-dua-xiem-xanh-cocoxim-1-lit-202104081023180628.webp', 18),
(159, '6-hop-nuoc-dua-xiem-xanh-cocoxim-1-lit-202202251638575483.webp', 18),
(172, '6-hop-nuoc-ep-trai-vai-malee-1-lit-201904191129060515.webp', 19),
(173, '6-hop-nuoc-ep-trai-vai-malee-1-lit-201904191129061335.webp', 19),
(174, '6-hop-nuoc-ep-trai-vai-malee-1-lit-201904191129062126.webp', 19),
(175, '6-hop-nuoc-ep-trai-vai-malee-1-lit-202103312250477164.webp', 19),
(182, 'dua-luoi-huynh-long-trai-14-16kg-202304060829170566.jpg', 31),
(183, 'dua-luoi-huynh-long-trai-14-16kg-202304060829173772.jpg', 31),
(184, 'dua-luoi-huynh-long-trai-14-16kg-202304060829176507.webp', 31),
(185, 'dua-luoi-huynh-long-trai-14-16kg-202304060829180042.jpg', 31),
(221, 'xoai0.webp', 32),
(222, 'xoai1.webp', 32),
(223, 'xoai-dai-loan-trai-tu-600g-202301090850093916.webp', 32),
(224, 'xoai-dai-loan-trai-tu-600g-202301090850100156.webp', 32),
(225, 'xoai-dai-loan-trai-tu-600g-202301090850104059.webp', 32),
(226, 'tao1.webp', 33),
(227, 'tao2.webp', 33),
(228, 'tao3.webp', 33),
(229, 'tao4.webp', 33),
(230, 'carot1.webp', 34),
(231, 'carot2.webp', 34),
(232, 'carot3.jpg', 34),
(233, 'carot4.webp', 34),
(234, 'raumuong1.webp', 35),
(235, 'raumuong2.webp', 35),
(236, 'raumuong3.webp', 35),
(237, 'raumuong4.webp', 35);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `priceold` double(10,0) NOT NULL,
  `sale` int(10) NOT NULL,
  `view` int(30) NOT NULL,
  `sold` int(30) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `stock` int(30) NOT NULL,
  `dvt` varchar(50) NOT NULL,
  `dacbiet` tinyint(10) NOT NULL DEFAULT 0,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `priceold`, `sale`, `view`, `sold`, `slug`, `stock`, `dvt`, `dacbiet`, `mota`) VALUES
(8, 'Xà lách búp mỡ thuỷ canh bó 300g', 9000, 0, 499, 612, 'xa-lach-buo-mo-thuy-canh', 687, '300g', 0, 'Xà lách búp mỡ thủy canh của Bách Hóa Xanh có lá cây rất mềm, có vị ngọt thanh, rất thơm ngon khi ăn sống. Chứa nhiều chất xơ có lợi cho tiêu hóa, giàu giá trị dinh dưỡng, chứa nhiều vitamin và khoáng chất, có công dụng bồi bổ sức khỏe, chống oxy hóa, ngă'),
(9, 'Chao khoai môn Mikiri hũ 180g', 21000, 20, 19, 9, 'chao-khoai-mon-mikiri-hu-180g', 100, 'Hủ', 0, 'Được chế biến với sự kết hợp của đậu nành truyền thống và khoai môn tạo nên một món chao thơm ngon hấp dẫn hơn. Chao khoai môn Mikiri 380g phổ biến bởi độ béo, ngọt và bùi của khoai môn cũng như những lợi ích về mặt sức khỏe mà chao khoai môn đem lại.'),
(10, 'Chuối cau nải 800g trở lên (Giao ngẫu nhiên sống hoặc chín)', 30000, 0, 289, 442, 'chuoi-cao-nai-800g-tro-len-giao-ngau-nhien-song-hoac-chin', 457, 'quần', 0, '<p>Chuối cau l&agrave; tr&aacute;i c&acirc;y th&acirc;n thuộc, được trồng nhiều tại Việt Nam. Tr&aacute;i nhỏ, tr&ograve;n khi ch&iacute;n c&oacute; m&agrave;u v&agrave;ng ươm đẹp mắt, hương thơm nhẹ đặc trưng, vị ngọi thanh. Chuối cau chứa nhiều chất xơ, vitamin, kho&aacute;ng chất v&agrave; &iacute;t tinh bột c&oacute; t&aacute;c dụng l&agrave;m đẹp da, chống l&atilde;o</p>\r\n'),
(11, 'Xà lách xoong Đà Lạt', 10000, 49, 99, 46, 'Xa-lach-xoong-Da-Lat', 132, 'Bó', 0, '<p>Với hương vị tươi m&aacute;t, ngon ngọt v&agrave; vị đặc biệt m&agrave; X&agrave; l&aacute;ch xoong Đ&agrave; Lạt của B&aacute;ch H&oacute;a Xanh lu&ocirc;n được người ti&ecirc;u d&ugrave;ng ưa chuộng. H&agrave;m lượng chất xơ cao, gi&agrave;u dinh dưỡng gi&uacute;p tăng cường sức khỏe cho người ti&ecirc;u d&ugrave;ng, khả năng chống oxi h&oacute;a cao hỗ trợ l&agrave;m đẹp.</p>\r\n'),
(12, 'Bột mì đa dụng Meizan cao cấp gói 1kg', 27000, 39, 56, 29, 'Bot-mi-da-dung-Meizan-cao-cap-goi-1kg', 159, 'Ký', 0, 'Bột dùng để làm bánh mì, bánh bông lan, bánh ngọt, bánh rán, bánh pizza, mì sợi, bánh bao hoặc dùng làm các món chiên giòn, tẩm bột. Bột mì đa dụng Meizan gói 1kg tiện lợi, phù hợp cho gia đình bạn. Bột mì Meizan được nhiều người chọn lựa và tin dùng'),
(16, 'Bưởi da xanh trái 1.6kg trở lên', 90000, 12, 101, 45, 'Buoi-da-xanh-trai-1.6kg-tro-len', 83, 'Trái', 1, '<p>Bưởi Da xanh l&agrave; tr&aacute;i c&acirc;y đặc sản nổi tiếng của Việt Nam. Bưởi da xanh c&oacute; đặc điểm vỏ c&oacute; m&agrave;u xanh đến xanh hơi v&agrave;ng khi ch&iacute;n.T&eacute;p bưởi m&agrave;u hồng đỏ, vị ngọt thanh, m&agrave;u sắc đẹp mắt, l&agrave; một trong những loại tr&aacute;i c&acirc;y cực tốt cho sức khoẻ với nhiều c&ocirc;ng dụng thầ</p>\r\n'),
(18, '6 hộp nước dừa xiêm xanh Cocoxim 1 lít', 229000, 0, 52, 19, '6-hop-nuoc-dua-xiem-xanh-cocoxim-1-lit', 90, 'Lốc', 0, '<p>Rau an to&agrave;n&nbsp;4KFarm&nbsp;với ti&ecirc;u ch&iacute;&nbsp;4 KH&Ocirc;NG, lu&ocirc;n ưu ti&ecirc;n bảo vệ sức khỏe người ti&ecirc;u d&ugrave;ng. Vị ngọt m&aacute;t, th&agrave;nh phần dinh dưỡng cao đặc biệt l&agrave; h&agrave;m lượng sắt dồi d&agrave;o, Rau Dền&nbsp;4KFarm&nbsp;sẽ l&agrave; m&oacute;n canh bổ dưỡng hỗ trợ điều trị nhiều loại bệnh như t&aacute;o b&oacute;n, tiểu đường, thiếu m&aacute;u...</p>\r\n\r\n<h2>4KFarm l&agrave; ai?</h2>\r\n\r\n<p>Rau dền&nbsp;4KFarm&nbsp;l&agrave; một loại rau xanh được c&aacute;c b&agrave; nội trợ bổ sung trong thực đơn mỗi ng&agrave;y. Ngo&agrave;i vị ngọt m&aacute;t v&agrave; th&agrave;nh phần dinh dưỡng cao, rau dền c&ograve;n mang đến nhiều lợi &iacute;ch như: Chống t&aacute;o b&oacute;n, điều trị tăng huyết &aacute;p, tốt cho bệnh nh&acirc;n tiểu đường, ngừa ung thư...</p>\r\n\r\n<h2>Điểm kh&aacute;c biệt rau 4KFarm</h2>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/DUAN3/DUAN2/view/asset/images/product-detail/product-desc/bv1.jpg\" /></p>\r\n\r\n<h2>H&igrave;nh ảnh canh t&aacute;c tại nh&agrave; m&agrave;ng</h2>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/DUAN3/DUAN2/view/asset/images/product-detail/product-desc/bv2.jpg\" />&nbsp;<img alt=\"\" src=\"http://localhost/DUAN3/DUAN2/view/asset/images/product-detail/product-desc/bv3.jpg\" />&nbsp;<img alt=\"\" src=\"http://localhost/DUAN3/DUAN2/view/asset/images/product-detail/product-desc/bv4.jpg\" /></p>\r\n'),
(19, '6 hộp nước ép trái vải Malee 1 lít', 357000, 0, 9, 45, '6-hop-nuoc-ep-trai-vai-malee-1-lit', 11, 'Lốc', 0, '<p>Rau an to&agrave;n&nbsp;4KFarm&nbsp;với ti&ecirc;u ch&iacute;&nbsp;4 KH&Ocirc;NG, lu&ocirc;n ưu ti&ecirc;n bảo vệ sức khỏe người ti&ecirc;u d&ugrave;ng. Vị ngọt m&aacute;t, th&agrave;nh phần dinh dưỡng cao đặc biệt l&agrave; h&agrave;m lượng sắt dồi d&agrave;o, Rau Dền&nbsp;4KFarm&nbsp;sẽ l&agrave; m&oacute;n canh bổ dưỡng hỗ trợ điều trị nhiều loại bệnh như t&aacute;o b&oacute;n, tiểu đường, thiếu m&aacute;u...</p>\r\n\r\n<h2>4KFarm l&agrave; ai?</h2>\r\n\r\n<p>Rau dền&nbsp;4KFarm&nbsp;l&agrave; một loại rau xanh được c&aacute;c b&agrave; nội trợ bổ sung trong thực đơn mỗi ng&agrave;y. Ngo&agrave;i vị ngọt m&aacute;t v&agrave; th&agrave;nh phần dinh dưỡng cao, rau dền c&ograve;n mang đến nhiều lợi &iacute;ch như: Chống t&aacute;o b&oacute;n, điều trị tăng huyết &aacute;p, tốt cho bệnh nh&acirc;n tiểu đường, ngừa ung thư...</p>\r\n\r\n<h2>Điểm kh&aacute;c biệt rau 4KFarm</h2>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/DUAN3/DUAN2/view/asset/images/product-detail/product-desc/bv1.jpg\" /></p>\r\n\r\n<h2>H&igrave;nh ảnh canh t&aacute;c tại nh&agrave; m&agrave;ng</h2>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/DUAN3/DUAN2/view/asset/images/product-detail/product-desc/bv2.jpg\" />&nbsp;<img alt=\"\" src=\"http://localhost/DUAN3/DUAN2/view/asset/images/product-detail/product-desc/bv3.jpg\" />&nbsp;<img alt=\"\" src=\"http://localhost/DUAN3/DUAN2/view/asset/images/product-detail/product-desc/bv4.jpg\" /></p>\r\n'),
(31, 'Dưa lưới Huỳnh Long trái 1.4kg-1.6kg', 119000, 5, 200, 300, 'dua-luoi-huynh-long', 1000, 'trái', 0, '<p>Dưa lưới Huỳnh Long&nbsp;l&agrave; loại&nbsp;tr&aacute;i c&acirc;y&nbsp;c&oacute; lớp vỏ m&agrave;u v&agrave;ng, v&acirc;n lưới mỏng nhẹ, h&igrave;nh bầu dục. Thịt dưa lưới Huỳnh Long kh&aacute; gi&ograve;n, ngọt, m&aacute;t v&agrave; kh&aacute; thơm. Ruột dưa c&oacute; m&agrave;u cam nhạt, nhiều nước so với c&aacute;c loại dưa lưới kh&aacute;c, đ&acirc;y l&agrave; loại tr&aacute;i c&acirc;y thơm ngon, được nhiều người y&ecirc;u th&iacute;ch.</p>\r\n'),
(32, 'Xoài Đài Loan trái 600g trở lên', 9000, 0, 125, 320, 'xoai-dai-loan', 500, 'trái', 1, '<p>Nguồn gốc nhập khẩu, chất lượng, uy t&iacute;n. Xo&agrave;i Đ&agrave;i Loan b&aacute;n tại B&aacute;ch H&oacute;a XANH c&oacute; ngoại h&igrave;nh đẹp, b&oacute;ng bẩy, thịt quả chứa nhiều vitamin.&nbsp;<strong>Xo&agrave;i Đ&agrave;i Loan ngon khi ch&iacute;n m&agrave;u hồng đỏ, mềm nhưng kh&ocirc;ng nhũn</strong>. Cam kết đ&uacute;ng khối lượng v&agrave; chất lượng, bao b&igrave; k&iacute;n đ&aacute;o hợp vệ sinh</p>\r\n\r\n<h3><strong>Gi&aacute; trị dinh dưỡng của xo&agrave;i Đ&agrave;i Loan</strong></h3>\r\n\r\n<ul>\r\n	<li>Xo&agrave;i c&oacute; t&aacute;c dụng v&agrave;ng cho cơ thể c&oacute; thể kế đến như chứa h&agrave;m lượng dinh dưỡng v&agrave; vitamin dồi d&agrave;o như: Kali, Carbohydrate, chất xơ, Đường, Protein, Vitamin A, Canxi, Sắt, Vitamin B1, Vitamin B6, Magie,...</li>\r\n	<li>Trong 100g xo&agrave;i Đ&agrave;i Loan c&oacute; khoảng&nbsp;<strong>59 Kcal</strong></li>\r\n</ul>\r\n\r\n<h3><img alt=\"Xoài Đài Loan trái 600g trở lên 1\" src=\"https://cdn.tgdd.vn/Products/Images/8788/275291/bhx/xoai-dai-loan-tui-15kg-2-trai-202211041017287020.jpg\" /></h3>\r\n\r\n<h3><strong>T&aacute;c dụng của xo&agrave;i Đ&agrave;i Loan đối với sức khỏe</strong></h3>\r\n\r\n<ul>\r\n	<li>Xo&agrave;i c&oacute; chứa nhiều chất xơ, tốt cho hệ ti&ecirc;u h&oacute;a của ch&uacute;ng ta.</li>\r\n	<li>Xo&agrave;i c&ograve;n chứa c&aacute;c vitamin gi&uacute;p cơ thể ph&ograve;ng ngừa v&agrave; chống lại bệnh tim</li>\r\n	<li>C&aacute;c enzyme c&oacute; trong Xo&agrave;i d&ugrave;ng chữa kiết ly hay ngăn ngừa nhiễm tr&ugrave;ng đường tiết niệu</li>\r\n</ul>\r\n\r\n<h3><strong>C&aacute;c m&oacute;n ăn ngon từ xo&agrave;i Đ&agrave;i Loan</strong></h3>\r\n\r\n<p>Khi mua về th&igrave; bạn c&oacute; thể gọt vỏ v&agrave; ăn ngay hoặc chế biến th&agrave;nh một số m&oacute;n ngon kh&aacute;c như:&nbsp;xo&agrave;i dầm sữa chua,&nbsp;panna cotta xo&agrave;i,&nbsp;nước &eacute;p xo&agrave;i,&nbsp;ch&egrave; xo&agrave;i bột b&aacute;ng,...</p>\r\n\r\n<h3><strong>C&aacute;ch bảo quản xo&agrave;i Đ&agrave;i Loan tươi ngon</strong></h3>\r\n\r\n<p>Xo&agrave;i mua về rửa sạch, lau kh&ocirc; nước v&agrave; cho v&agrave;o t&uacute;i nilon hoặc hộp đựng thực phẩm, bảo quản trong ngăn m&aacute;t tủ lạnh.&nbsp;<br />\r\n<strong>Lưu &yacute;:&nbsp;</strong>Sản phẩm nhận được c&oacute; thể kh&aacute;c với h&igrave;nh ảnh về m&agrave;u sắc v&agrave; số lượng nhưng vẫn đảm bảo về mặt khối lượng v&agrave; chất lượng.</p>\r\n'),
(33, 'Táo Gala mini nhập khẩu New Zealand 1kg (8-11 trái)', 49000, 20, 150, 70, 'tao-gala-mini', 200, 'kg', 0, '<p>T&aacute;o gala mini&nbsp;l&agrave;&nbsp;tr&aacute;i c&acirc;y&nbsp;nhập khẩu New Zealand, chất lượng an to&agrave;n c&ugrave;ng lượng dưỡng chất dồi d&agrave;o, c&oacute; vị gi&ograve;n ngọt v&agrave; thanh m&aacute;t. Ngo&agrave;i ra, nhiều nghi&ecirc;n cứu cho rằng ăn 2 quả t&aacute;o mỗi ng&agrave;y c&oacute; thể giảm nguy cơ đột quỵ hoặc đau tim nếu nguy&ecirc;n nh&acirc;n xuất ph&aacute;t từ cholesterol l&agrave;m cứng động mạch.</p>\r\n\r\n<h3><strong>Gi&aacute; trị dinh dưỡng của t&aacute;o gala</strong></h3>\r\n\r\n<ul>\r\n	<li>T&aacute;o gala c&oacute;&nbsp;<strong>lớp vỏ gi&agrave;u chất xơ</strong>, thịt t&aacute;o gi&agrave;u&nbsp;<strong>vitamin A, vitamin C, vitamin B1, vitamin B2,</strong>...tốt cho sức khỏe.</li>\r\n	<li>Trong 100g t&aacute;o gala c&oacute; khoảng&nbsp;<strong>52 calo.</strong></li>\r\n</ul>\r\n\r\n<h3><strong>T&aacute;c dụng của t&aacute;o gala đối với sức khỏe</strong></h3>\r\n\r\n<ul>\r\n	<li>Chứa chất chống oxy h&oacute;a gi&uacute;p đẹp da, đẹp d&aacute;ng</li>\r\n	<li>Chứa nhiều kho&aacute;ng chất thiết yếu tốt cho tr&iacute; n&atilde;o v&agrave; hệ miễn dịch</li>\r\n	<li>Kh&ocirc;ng cholesterol gi&uacute;p tăng cường tuần ho&agrave;n m&aacute;u</li>\r\n	<li>Gi&agrave;u chất xơ c&oacute; lợi cho hệ ti&ecirc;u h&oacute;a</li>\r\n	<li>&Iacute;t chất b&eacute;o hỗ trợ giảm c&acirc;n hiệu quả</li>\r\n</ul>\r\n\r\n<h3><strong>C&aacute;c m&oacute;n ăn ngon từ t&aacute;o gala</strong></h3>\r\n\r\n<p>T&aacute;o gala c&oacute; thể chế biến th&agrave;nh nhiều m&oacute;n ăn, thức uống hấp dẫn như salad t&aacute;o, nước &eacute;p t&aacute;o, b&aacute;nh ngọt, thạch t&aacute;o,...</p>\r\n\r\n<p><img alt=\"Táo Gala mini nhập khẩu New Zealand 1kg (8-11 trái) 1\" src=\"https://cdn.tgdd.vn/Products/Images/8788/233534/bhx/tao-gala-mini-nhap-khau-new-zealand-hop-1kg-8-11-trai-202205111944159724.jpg\" /></p>\r\n\r\n<h3><strong>C&aacute;ch bảo quản t&aacute;o gala tươi ngon</strong></h3>\r\n\r\n<ul>\r\n	<li>N&ecirc;n bảo quản t&aacute;o trong ngăn m&aacute;t tủ lạnh</li>\r\n	<li>Tr&aacute;nh để t&aacute;o bị va đập hoặc cấn dập do t&aacute;c dụng lực</li>\r\n	<li>T&aacute;o gọt sẵn n&ecirc;n bọc k&iacute;n v&agrave; cho v&agrave;o ngăn m&aacute;t, để t&aacute;o&nbsp;giữ được m&agrave;u sắc tươi ngon, kh&ocirc;ng th&acirc;m sau khi cắt ra v&agrave; tr&aacute;nh để gần c&aacute;c loại thức ăn c&oacute; m&ugrave;i nồng</li>\r\n	<li>N&ecirc;n ng&acirc;m t&aacute;o bằng nước muối v&agrave; rửa thật kỹ</li>\r\n</ul>\r\n\r\n<p><strong>Lưu &yacute;:</strong>&nbsp;Sản phẩm nhận được c&oacute; thể kh&aacute;c với h&igrave;nh ảnh về m&agrave;u sắc v&agrave; số lượng nhưng vẫn đảm bảo về mặt khối lượng v&agrave; chất lượng.</p>\r\n'),
(34, 'Cà rốt Đà Lạt', 16900, 41, 300, 128, 'ca-rot-da-lat', 333, 'kg', 1, '<p>C&agrave; rốt Đ&agrave; Lạt l&agrave; một loại&nbsp;củ&nbsp;rất quen thuộc trong c&aacute;c m&oacute;n ăn của người Việt.&nbsp;C&agrave; rốt&nbsp;c&oacute; h&agrave;m lượng chất dinh dưỡng v&agrave; vitamin A cao, được xem l&agrave; nguy&ecirc;n liệu cần thiết cho c&aacute;c m&oacute;n ăn dặm của trẻ nhỏ, gi&uacute;p trẻ s&aacute;ng mắt v&agrave; cung cấp nguồn chất xơ dồi d&agrave;o.</p>\r\n\r\n<h3><img src=\"https://cdn.tgdd.vn/Products/Images//8785/271572/bhx/files/sl%203.jpg\" /><br />\r\n<strong>Ưu điểm khi mua c&agrave; rốt tại B&aacute;ch ho&aacute; XANH</strong></h3>\r\n\r\n<ul>\r\n	<li>C&agrave; rốt tươi ngon, m&agrave;u cam tươi, vỏ trơn l&aacute;ng, c&oacute; m&agrave;u s&aacute;ng. C&agrave; rốt kh&ocirc;ng bị mềm, dập hay bị h&eacute;o.&nbsp;<strong>C&agrave; rốt gi&ograve;n ngọt</strong>, được lựa chọn cho nhiều m&oacute;n ngon.</li>\r\n	<li><strong>C&agrave; rốt được trồng tại Đ&agrave; Lạt</strong>, đảm bảo nguồn gốc xuất xứ r&otilde; r&agrave;ng,&nbsp;<strong>b&aacute;n t&uacute;i 500g từ 2-5 củ.</strong></li>\r\n	<li>Đặt giao h&agrave;ng nhanh</li>\r\n</ul>\r\n\r\n<h3><img alt=\"Cà rốt Đà Lạt 500g (2 - 5 củ) 1\" src=\"https://cdn.tgdd.vn/Products/Images/8785/271572/bhx/ca-rot-da-lat-tui-500g-2-5-cu-202205201603299392.jpg\" /><br />\r\n<strong>Gi&aacute; trị dinh dưỡng của c&agrave; rốt</strong></h3>\r\n\r\n<ul>\r\n	<li>Trong c&agrave; rốt chứa nhiều chất xơ, đặc biệt l&agrave; vitamin A, vitamin K, vitamin C,... ngo&agrave;i ra c&ograve;n chứa những kho&aacute;ng chất tốt cho cơ thể như canxi, sắt, kali,...</li>\r\n	<li>Trong 100g c&agrave; rốt c&oacute;&nbsp;<strong>41.3 kcal.</strong></li>\r\n</ul>\r\n\r\n<h3><strong>T&aacute;c dụng của c&agrave; rốt đối với sức khỏe</strong></h3>\r\n\r\n<ul>\r\n	<li>Cải thiện sức khỏe mắt</li>\r\n	<li>Giảm nguy cơ ung thư</li>\r\n	<li>Giảm cholesterol trong m&aacute;u</li>\r\n	<li>Hỗ trợ giảm c&acirc;n</li>\r\n	<li>&hellip;</li>\r\n</ul>\r\n\r\n<h3><img alt=\"Cà rốt Đà Lạt 500g (2 - 5 củ) 2\" src=\"https://cdn.tgdd.vn/Products/Images/8785/271572/bhx/ca-rot-da-lat-tui-500g-2-5-cu-202205201603295625.jpg\" /><br />\r\n<strong>C&aacute;c m&oacute;n ăn ngon từ c&agrave; rốt</strong></h3>\r\n\r\n<p>C&agrave; rốt c&oacute; thể chế biến th&agrave;nh&nbsp;nước &eacute;p c&agrave; rốt cam&nbsp;v&agrave; củ dền,&nbsp;nước &eacute;p c&agrave; rốt v&agrave; c&agrave; chua, sinh tố c&agrave; rốt. Ngo&agrave;i ra, c&agrave; rốt cũng c&oacute; thể l&agrave;m c&agrave; rốt, củ cải chua ăn k&egrave;m với thịt nguội, chả lụa cho c&aacute;c bữa tiệc. Một số m&oacute;n ăn từ c&agrave; rốt như sau:</p>\r\n\r\n<ul>\r\n	<li>C&aacute;c loại ch&aacute;o bổ dưỡng cho trẻ như ch&aacute;o tim heo c&agrave; rốt, ch&aacute;o lươn c&agrave; rốt, ch&aacute;o thịt b&ograve; c&agrave; rốt,...</li>\r\n	<li>C&agrave; rốt d&ugrave;ng cho c&aacute;c m&oacute;n nộm gỏi như&nbsp;nộm su h&agrave;o c&agrave; rốt&nbsp;hoặc l&agrave;m ra m&oacute;n kim chi cải thảo truyền thống của H&agrave;n Quốc,...</li>\r\n	<li>C&agrave; rốt x&agrave;o với m&igrave;, nui,... c&ugrave;ng với c&aacute;c nguy&ecirc;n liệu thịt heo, thịt b&ograve;, trứng,...</li>\r\n	<li>Đặc biệt, c&agrave; rốt c&ograve;n được xem l&agrave; m&oacute;n ăn vặt an to&agrave;n khi được chế biến th&agrave;nh mứt c&agrave; rốt, th&iacute;ch hợp cho việc nh&acirc;m nhi của cả gia đ&igrave;nh.</li>\r\n</ul>\r\n\r\n<h3><strong>C&aacute;ch bảo quản c&agrave; rốt tươi ngon</strong></h3>\r\n\r\n<p>C&aacute;c bước bảo quản c&agrave; rốt để giữ được độ tươi, gi&ograve;n nhất định</p>\r\n\r\n<ul>\r\n	<li>Cắt bỏ phần ngọn củ c&agrave; rốt, sau đ&oacute; bọc củ c&agrave; rốt trong m&agrave;ng xốp hơi (bọc bong b&oacute;ng) rồi cho v&agrave;o ngăn m&aacute;t tủ lạnh trong khoảng 2 tuần.</li>\r\n	<li>Khi bảo quản lưu &yacute; kh&ocirc;ng rửa qua nước v&agrave; cắt nhỏ c&agrave; rốt trước khi bỏ v&agrave;o tủ lạnh.</li>\r\n	<li>Bảo quản c&agrave; rốt ở nơi tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng mặt trời c&oacute; thể giữ trong 3 tuần.</li>\r\n</ul>\r\n\r\n<p><strong>Lưu &yacute;:&nbsp;</strong>Sản phẩm nhận được c&oacute; thể kh&aacute;c với h&igrave;nh ảnh về m&agrave;u sắc v&agrave; số lượng nhưng vẫn đảm bảo về mặt khối lượng v&agrave; chất lượng.</p>\r\n'),
(35, 'Rau muống 4KFarm', 14000, 29, 320, 530, 'rau-muong', 780, 'bó', 1, '<p>Rau an to&agrave;n 4KFarm với ti&ecirc;u ch&iacute; 4 KH&Ocirc;NG, lu&ocirc;n ưu ti&ecirc;n bảo vệ sức khỏe người ti&ecirc;u d&ugrave;ng. Với vị ngọt, t&iacute;nh m&aacute;t, h&agrave;m lượng dinh dưỡng cao đặc biệt l&agrave; sắt, vitamin A,c, Rau muống 4KFarm lu&ocirc;n l&agrave; loại rau được ưa chuộng chọn lựa cho bữa cơm ngon mỗi ng&agrave;y.</p>\r\n\r\n<h2><strong>4KFarm l&agrave;&nbsp;ai?</strong></h2>\r\n\r\n<p><strong>4KFarm</strong>&nbsp;l&agrave; TH&Agrave;NH VI&Ecirc;N MỚI của tập đo&agrave;n Thế Giới Di Động, tiền th&acirc;n l&agrave; Vifarm. Đội ngũ chuy&ecirc;n gia về n&ocirc;ng nghiệp của 4KFarm chuyển giao c&ocirc;ng nghệ v&agrave; hỗ trợ n&ocirc;ng d&acirc;n trồng rau an to&agrave;n 4 KH&Ocirc;NG v&agrave; thu mua 100% sản lượng rau an to&agrave;n n&agrave;y cung cấp độc quyền cho chuỗi B&aacute;ch H&oacute;a Xanh.</p>\r\n\r\n<p><strong>Rau muống&nbsp;4KFarm</strong>&nbsp;l&agrave;&nbsp;loại&nbsp;rau&nbsp;phổ biến v&agrave; ưa chuộng trong bữa ăn gia đ&igrave;nh v&igrave; c&oacute;&nbsp;<strong>vị ngọt, t&iacute;nh m&aacute;t v&agrave; chứa một lượng lớn vitamin A, C, c&aacute;c chất dinh dưỡng v&agrave; đặc biệt l&agrave; h&agrave;m lượng chất sắt dồi d&agrave;o</strong>.</p>\r\n\r\n<h2><strong>Điểm kh&aacute;c biệt rau 4KFarm</strong></h2>\r\n\r\n<p><img alt=\"Rau muống 4KFarm 500gr 0\" src=\"https://cdn.tgdd.vn/Products/Images//8784/267916/bhx/files/bv1.jpg\" /></p>\r\n\r\n<h2><strong>H&igrave;nh ảnh canh t&aacute;c tại nh&agrave; m&agrave;ng</strong></h2>\r\n\r\n<p><strong><img alt=\"Rau muống 4KFarm 500gr 1\" src=\"https://cdn.tgdd.vn/Products/Images//8784/267916/bhx/files/bv2.jpg\" /><br />\r\n<img alt=\"Rau muống 4KFarm 500gr 2\" src=\"https://cdn.tgdd.vn/Products/Images//8784/267916/bhx/files/bv3.jpg\" /><br />\r\n<img alt=\"Rau muống 4KFarm 500gr 3\" src=\"https://cdn.tgdd.vn/Products/Images//8784/267916/bhx/files/bv4.jpg\" /></strong><br />\r\n<img alt=\"Rau muống 4KFarm 500gr 4\" src=\"https://cdn.tgdd.vn/Products/Images//8784/267916/bhx/files/bv5.jpg\" /></p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamdanhmuc`
--

CREATE TABLE `sanphamdanhmuc` (
  `idsp` int(10) NOT NULL,
  `iddm` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphamdanhmuc`
--

INSERT INTO `sanphamdanhmuc` (`idsp`, `iddm`) VALUES
(8, 1),
(9, 25),
(10, 12),
(11, 1),
(12, 14),
(12, 15),
(16, 12),
(18, 26),
(19, 26),
(31, 12),
(32, 12),
(33, 12),
(34, 1),
(34, 12),
(35, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'tindeptrai', '123456', 'tin29102003@gmail.com', '31/ 8 Đường số 41, Hiệp Bình Chánh, Thủ Đức, Hồ Chí Minh, Việt Nam', '0903138400', 1),
(3, 'tinlovekieu', '29102000', 'tin29102005@gmail.com', '31/ 8 Đường số 41, Hiệp Bình Chánh, Thủ Đức, Hồ Chí Minh, Việt Nam', '11321321321321', 1),
(11, 'bé na', '1234', 'Buib55221@gmail.com', 'sddsf', '041212312', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(255) NOT NULL,
  `giamgia` int(10) NOT NULL,
  `ngayhethan` date NOT NULL,
  `chitiet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`id`, `name`, `code`, `giamgia`, `ngayhethan`, `chitiet`) VALUES
(2, 'Giảm 100k', 'organic100', 100000, '2025-04-30', 'Áp dụng cho đơn hàng trị giá trị giá trên 399k'),
(3, 'Mã giảm 30/4', 'organic20', 20000, '2025-04-21', 'Áp dụng cho các đơn hàng trị giá trên 99k');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeuthich`
--

CREATE TABLE `yeuthich` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `yeuthich`
--

INSERT INTO `yeuthich` (`id`, `iduser`, `idsp`) VALUES
(32, 3, 10),
(35, 3, 8),
(36, 3, 11);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_blog_taikhoan` (`iduser`),
  ADD KEY `fk_blog_blogdm` (`iddmblog`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_giohang_hoadon` (`idbill`),
  ADD KEY `fk_giohang_sanpham` (`idsp`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_danhgia_sanpham` (`idsp`),
  ADD KEY `fk_danhgia_taikhoan` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmucblog`
--
ALTER TABLE `danhmucblog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_img_sanpham` (`idsp`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanphamdanhmuc`
--
ALTER TABLE `sanphamdanhmuc`
  ADD PRIMARY KEY (`idsp`,`iddm`),
  ADD KEY `fk_spdm_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_yeuthich_sanpham` (`idsp`),
  ADD KEY `fk_yeuthich_taikhoan` (`iduser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `danhmucblog`
--
ALTER TABLE `danhmucblog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `img`
--
ALTER TABLE `img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fk_blog_blogdm` FOREIGN KEY (`iddmblog`) REFERENCES `danhmucblog` (`id`),
  ADD CONSTRAINT `fk_blog_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_giohang_hoadon` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `fk_giohang_sanpham` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `fk_danhgia_sanpham` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `fk_danhgia_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `img`
--
ALTER TABLE `img`
  ADD CONSTRAINT `fk_img_sanpham` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanphamdanhmuc`
--
ALTER TABLE `sanphamdanhmuc`
  ADD CONSTRAINT `fk_spdm_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`),
  ADD CONSTRAINT `fk_spdm_sanpham` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD CONSTRAINT `fk_yeuthich_sanpham` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `fk_yeuthich_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
