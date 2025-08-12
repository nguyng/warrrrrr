-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 12, 2025 lúc 06:59 PM
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
-- Cơ sở dữ liệu: `sport`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `card`
--

CREATE TABLE `card` (
  `idCard` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idUserGuest` varchar(255) DEFAULT NULL,
  `idChiTietCart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietcart`
--

CREATE TABLE `chitietcart` (
  `idChiTietCart` int(11) NOT NULL,
  `idSP` char(5) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `idColor` varchar(20) NOT NULL,
  `idSize` varchar(5) NOT NULL,
  `giaDonHang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `idcolor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`idcolor`) VALUES
('blue'),
('green'),
('red');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `colorsp`
--

CREATE TABLE `colorsp` (
  `idColor` varchar(50) NOT NULL,
  `idSP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` char(5) NOT NULL,
  `tenSP` varchar(255) NOT NULL,
  `giaSP` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `idSize` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`idSize`) VALUES
('L'),
('M'),
('S');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizesp`
--

CREATE TABLE `sizesp` (
  `idSize` varchar(50) NOT NULL,
  `idSP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `tenUser` varchar(50) NOT NULL,
  `type` char(2) NOT NULL DEFAULT 'us',
  `tenDangNhap` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` char(10) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `tenUser`, `type`, `tenDangNhap`, `password`, `phone`, `address`) VALUES
(1, 'ho nguyen khoi', 'ad', 'admin', '1', '', ''),
(2, 'nguyen van nguyen', 'us', 'usernguyen', '1', '0867699263', 'hoa xuan da nang');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`idCard`),
  ADD KEY `fk_card_user` (`idUser`),
  ADD KEY `fk_card_ctcart` (`idChiTietCart`);

--
-- Chỉ mục cho bảng `chitietcart`
--
ALTER TABLE `chitietcart`
  ADD PRIMARY KEY (`idChiTietCart`),
  ADD KEY `fk_ctcart_sp` (`idSP`),
  ADD KEY `fk_ctcart_color` (`idColor`),
  ADD KEY `fk_ctcart_size` (`idSize`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`idcolor`);

--
-- Chỉ mục cho bảng `colorsp`
--
ALTER TABLE `colorsp`
  ADD PRIMARY KEY (`idColor`,`idSP`),
  ADD KEY `fk_colorsp_sp` (`idSP`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`idSize`);

--
-- Chỉ mục cho bảng `sizesp`
--
ALTER TABLE `sizesp`
  ADD PRIMARY KEY (`idSize`,`idSP`),
  ADD KEY `fk_sizesp_sp` (`idSP`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `card`
--
ALTER TABLE `card`
  MODIFY `idCard` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietcart`
--
ALTER TABLE `chitietcart`
  MODIFY `idChiTietCart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `fk_card_ctcart` FOREIGN KEY (`idChiTietCart`) REFERENCES `chitietcart` (`idChiTietCart`),
  ADD CONSTRAINT `fk_card_user` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Các ràng buộc cho bảng `chitietcart`
--
ALTER TABLE `chitietcart`
  ADD CONSTRAINT `fk_ctcart_color` FOREIGN KEY (`idColor`) REFERENCES `color` (`idcolor`),
  ADD CONSTRAINT `fk_ctcart_size` FOREIGN KEY (`idSize`) REFERENCES `size` (`idSize`),
  ADD CONSTRAINT `fk_ctcart_sp` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`idSP`);

--
-- Các ràng buộc cho bảng `colorsp`
--
ALTER TABLE `colorsp`
  ADD CONSTRAINT `fk_colorsp_color` FOREIGN KEY (`idColor`) REFERENCES `color` (`idcolor`),
  ADD CONSTRAINT `fk_colorsp_sp` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`idSP`);

--
-- Các ràng buộc cho bảng `sizesp`
--
ALTER TABLE `sizesp`
  ADD CONSTRAINT `fk_sizesp_size` FOREIGN KEY (`idSize`) REFERENCES `size` (`idSize`),
  ADD CONSTRAINT `fk_sizesp_sp` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`idSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
