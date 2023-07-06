-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2022 lúc 10:52 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `link_page` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `link_page`, `photo`, `title`) VALUES
(4, 'phia-sau-nghi-can.php', 'phia-sau-nghi-can.jpg', 'Phía sau nghi can'),
(5, 'rung-taiga.php', 'rung-taiga.jpg', 'Rừng Taiga'),
(6, 'sherlock-holmes.php', 'sherlock-holmes.jpg', 'Sherlock Holmes'),
(7, 'soi-gia-pho-wall.php', 'soi-gia-pho-wall.jpg', 'Sói già phố Wall'),
(8, 'song-dong-em-dem.php', 'song-dong-em-dem.jpg', 'Sống động êm đềm'),
(9, 'tanya-chien-ky-2.php', 'tanya-chien-ky-2.jpg', 'Tanya chiến ký 2'),
(10, 'thuat-doc-tam.php', 'thuat-doc-tam.jpg', 'Thuật đọc tâm'),
(11, 'toi-la-ke-ac.php', 'toi-la-ke-ac.jpg', 'Tôi là kẻ ác'),
(12, 'toi-tu-hoc.php', 'toi-tu-hoc.jpg', 'Tôi tự học'),
(13, 'tren-duong-bang.php', 'tren-duong-bang.jpg', 'Trên đường băng'),
(14, 'tu-duy-phan-bien.php', 'tu-duy-phan-bien.jpg', 'Tư duy phản biện'),
(15, 'tuoi-20-yeu-dau.php', 'tuoi-20-yeu-dau.jpg', 'Tuổi 20 yêu dấu'),
(16, 'tu-tot-den-vi-dai.php', 'tu-tot-den-vi-dai.jpg', 'Từ tốt đến vĩ đại'),
(17, 'ty-phu-ban-giay.php', 'ty-phu-ban-giay.jpg', 'Tỷ phú bán giày'),
(18, 'wolf-children.php', 'wolf-children.jpg', 'Wolf Children');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ID` int(50) NOT NULL,
  `Hovaten` varchar(150) NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Quequan` varchar(150) NOT NULL,
  `Tendangnhap` varchar(50) NOT NULL,
  `Matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`ID`, `Hovaten`, `Ngaysinh`, `Quequan`, `Tendangnhap`, `Matkhau`) VALUES
(1, 'sdggd', '2022-04-06', 'gfhfg', 'hh', '1'),
(2, 'dfs', '2022-03-29', 'dfg', 'fdg', '``'),
(3, 'dsfsf', '2022-04-21', 'gfđ', 'fgdfd', 'rtrgfd'),
(4, 'dsfsf', '2022-04-21', 'gfđ', 'fgdfd', 'rtrgfd'),
(5, 'Bao', '0000-00-00', '', 'bao', '1'),
(6, 'eadgsg', '0000-00-00', '', 'hjg', 'dchhdhf'),
(7, 'fgdg', '0000-00-00', 'gfgg', 'hieu', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sachcu`
--

CREATE TABLE `sachcu` (
  `id` int(11) NOT NULL,
  `link_page` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sachcu`
--

INSERT INTO `sachcu` (`id`, `link_page`, `photo`, `title`) VALUES
(6, 'hack-nao-ngu-phap.php', 'hack-nao-ngu-phap.jpg', 'Hack não ngữ pháp'),
(7, 'hannibal.php', 'hannibal.jpg', 'Hannibal'),
(8, 'khong-gia-đinh.php', 'khong-gia-dinh.jpg', 'Không gia đình'),
(9, 'khu-vuon-ngon-tu.php', 'khu-vuon-ngon-tu.jpg', 'Khu vườn ngôn từ'),
(10, 'Lolita.php', 'Lolita.jpg', 'Lolita'),
(11, 'luat-tam-thuc.php', 'luat-tam-thuc.jpg', 'Luật tâm thức'),
(12, 'luoc_su_doi_toi.php', 'luoc_su_doi_toi.jpg', 'Lược sử đời tôi'),
(13, 'mat-biec.php', 'mat-biec.jpg', 'Mắt biếc'),
(14, 'mot-doi-quan-tri.php', 'mot-doi-quan-tri.jpg', 'Một đời quản trị'),
(15, 'mot-lit-nuoc-mat.php', 'mot-lit-nuoc-mat.jpg', 'Một lít nước mắt'),
(16, 'napoleon.php', 'napoleon.jpg', 'Napoleon '),
(17, 'nguoi-hoa-tien.php', 'nguoi-hoa-tien.jpg', 'Người hỏa tiễn'),
(18, 'nguoi-tim-xac.php', 'nguoi-tim-xac.jpg', 'Người tìm xác'),
(19, 'nha-gia-kim.php', 'nha-gia-kim.jpg', 'Nhà giả kim '),
(20, 'nhat-ky-ane-frank.php', 'nhat-ky-ane-frank.jpg', 'Nhật ký Ane Frank');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sachhot`
--

CREATE TABLE `sachhot` (
  `id` int(11) NOT NULL,
  `link_page` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sachhot`
--

INSERT INTO `sachhot` (`id`, `link_page`, `photo`, `title`) VALUES
(4, 'phia-sau-nghi-can.php', 'phia-sau-nghi-can.jpg', 'Phía sau nghi can'),
(5, 'rung-taiga.php', 'rung-taiga.jpg', 'Rừng Taiga'),
(6, 'sherlock-holmes.php', 'sherlock-holmes.jpg', 'Sherlock Holmes'),
(7, 'soi-gia-pho-wall.php', 'soi-gia-pho-wall.jpg', 'Sói già phố Wall'),
(8, 'song-dong-em-dem.php', 'song-dong-em-dem.jpg', 'Sống động êm đềm'),
(9, 'tanya-chien-ky-2.php', 'tanya-chien-ky-2.jpg', 'Tanya chiến ký 2'),
(10, 'thuat-doc-tam.php', 'thuat-doc-tam.jpg', 'Thuật đọc tâm'),
(11, 'toi-la-ke-ac.php', 'toi-la-ke-ac.jpg', 'Tôi là kẻ ác'),
(12, 'toi-tu-hoc.php', 'toi-tu-hoc.jpg', 'Tôi tự học'),
(13, 'tren-duong-bang.php', 'tren-duong-bang.jpg', 'Trên đường băng'),
(14, 'tu-duy-phan-bien.php', 'tu-duy-phan-bien.jpg', 'Tư duy phản biện'),
(15, 'tuoi-20-yeu-dau.php', 'tuoi-20-yeu-dau.jpg', 'Tuổi 20 yêu dấu'),
(16, 'tu-tot-den-vi-dai.php', 'tu-tot-den-vi-dai.jpg', 'Từ tốt đến vĩ đại'),
(17, 'ty-phu-ban-giay.php', 'ty-phu-ban-giay.jpg', 'Tỷ phú bán giày'),
(18, 'wolf-children.php', 'wolf-children.jpg', 'Wolf Children');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sachmoi`
--

CREATE TABLE `sachmoi` (
  `id` int(11) NOT NULL,
  `link_page` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sachmoi`
--

INSERT INTO `sachmoi` (`id`, `link_page`, `photo`, `title`) VALUES
(63, '5cm-tren-giay.php', '5cm-tren-giay.jpg', '5cm trên giây'),
(64, '86-eighty-six.php', '86-eighty-six.jpg', '86 Eighty Six'),
(65, 'another.php', 'another.jpg', 'Another'),
(66, 'bi-mat-ty-do.php', 'bi-mat-ty-do.jpg', 'Bí mật tỉ đô'),
(67, 'bo-gia.php', 'bo-gia.jpg', 'Bố già'),
(68, 'calling-you.php', 'calling-you.jpg', 'Calling you'),
(69, 'dai-viet-su-ky.php', 'dai-viet-su-ky.jpg', 'Đại việt sử ký '),
(70, 'dam-bi-ghet.php', 'dam-bi-ghet.jpg', 'Dám bị ghét'),
(71, 'day-con-lam-giau.php', 'day-con-lam-giau.jpg', 'Dạy con làm giàu'),
(72, 'dem-nguoc.php', 'dem-nguoc.jpg', 'Đếm ngược'),
(73, 'dung-cam-tien-len.php', 'dung-cam-tien-len.jpg', 'Dũng cảm tiến lên'),
(74, 'dung-chon-an-nhan.php', 'dung-chon-an-nhan.jpg', 'Đừng chọn an nhàn'),
(75, 'gatsby-vi-dai.php', 'gatsby-vi-dai.jpg', 'Gasby vĩ đại'),
(76, 'grimgar.php', 'grimgar.jpg', 'Grimgar'),
(80, '5cm-tren-giay.php', '5cm-tren-giay.jpg', '5 cm trên giây');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sachmoi_page2`
--

CREATE TABLE `sachmoi_page2` (
  `id` int(11) NOT NULL,
  `link_page` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sachmoi_page2`
--

INSERT INTO `sachmoi_page2` (`id`, `link_page`, `photo`, `title`) VALUES
(6, 'hack-nao-ngu-phap.php', 'hack-nao-ngu-phap.jpg', 'Hack não ngữ pháp'),
(7, 'hannibal.php', 'hannibal.jpg', 'Hannibal'),
(8, 'khong-gia-đinh.php', 'khong-gia-dinh.jpg', 'Không gia đình'),
(9, 'khu-vuon-ngon-tu.php', 'khu-vuon-ngon-tu.jpg', 'Khu vườn ngôn từ'),
(10, 'Lolita.php', 'Lolita.jpg', 'Lolita'),
(11, 'luat-tam-thuc.php', 'luat-tam-thuc.jpg', 'Luật tâm thức'),
(12, 'luoc_su_doi_toi.php', 'luoc_su_doi_toi.jpg', 'Lược sử đời tôi'),
(13, 'mat-biec.php', 'mat-biec.jpg', 'Mắt biếc'),
(14, 'mot-doi-quan-tri.php', 'mot-doi-quan-tri.jpg', 'Một đời quản trị'),
(15, 'mot-lit-nuoc-mat.php', 'mot-lit-nuoc-mat.jpg', 'Một lít nước mắt'),
(16, 'napoleon.php', 'napoleon.jpg', 'Napoleon '),
(17, 'nguoi-hoa-tien.php', 'nguoi-hoa-tien.jpg', 'Người hỏa tiễn'),
(18, 'nguoi-tim-xac.php', 'nguoi-tim-xac.jpg', 'Người tìm xác'),
(19, 'nha-gia-kim.php', 'nha-gia-kim.jpg', 'Nhà giả kim '),
(20, 'nhat-ky-ane-frank.php', 'nhat-ky-ane-frank.jpg', 'Nhật ký Ane Frank');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sachmoi_page3`
--

CREATE TABLE `sachmoi_page3` (
  `id` int(11) NOT NULL,
  `link_page` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sachmoi_page3`
--

INSERT INTO `sachmoi_page3` (`id`, `link_page`, `photo`, `title`) VALUES
(4, 'phia-sau-nghi-can.php', 'phia-sau-nghi-can.jpg', 'Phía sau nghi can'),
(5, 'rung-taiga.php', 'rung-taiga.jpg', 'Rừng Taiga'),
(6, 'sherlock-holmes.php', 'sherlock-holmes.jpg', 'Sherlock Holmes'),
(7, 'soi-gia-pho-wall.php', 'soi-gia-pho-wall.jpg', 'Sói già phố Wall'),
(8, 'song-dong-em-dem.php', 'song-dong-em-dem.jpg', 'Sống động êm đềm'),
(9, 'tanya-chien-ky-2.php', 'tanya-chien-ky-2.jpg', 'Tanya chiến ký 2'),
(10, 'thuat-doc-tam.php', 'thuat-doc-tam.jpg', 'Thuật đọc tâm'),
(11, 'toi-la-ke-ac.php', 'toi-la-ke-ac.jpg', 'Tôi là kẻ ác'),
(12, 'toi-tu-hoc.php', 'toi-tu-hoc.jpg', 'Tôi tự học'),
(13, 'tren-duong-bang.php', 'tren-duong-bang.jpg', 'Trên đường băng'),
(14, 'tu-duy-phan-bien.php', 'tu-duy-phan-bien.jpg', 'Tư duy phản biện'),
(15, 'tuoi-20-yeu-dau.php', 'tuoi-20-yeu-dau.jpg', 'Tuổi 20 yêu dấu'),
(16, 'tu-tot-den-vi-dai.php', 'tu-tot-den-vi-dai.jpg', 'Từ tốt đến vĩ đại'),
(17, 'ty-phu-ban-giay.php', 'ty-phu-ban-giay.jpg', 'Tỷ phú bán giày'),
(18, 'wolf-children.php', 'wolf-children.jpg', 'Wolf Children');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sachcu`
--
ALTER TABLE `sachcu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sachhot`
--
ALTER TABLE `sachhot`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sachmoi`
--
ALTER TABLE `sachmoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sachmoi_page2`
--
ALTER TABLE `sachmoi_page2`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sachmoi_page3`
--
ALTER TABLE `sachmoi_page3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sachcu`
--
ALTER TABLE `sachcu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `sachhot`
--
ALTER TABLE `sachhot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `sachmoi`
--
ALTER TABLE `sachmoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `sachmoi_page2`
--
ALTER TABLE `sachmoi_page2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `sachmoi_page3`
--
ALTER TABLE `sachmoi_page3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
