-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2024 lúc 10:33 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_kinh_doanh_do_uong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `tendanhmuc`, `thutu`) VALUES
(1, 'Nước ngọt', 0),
(2, 'Nước trái cây', 0),
(3, 'Nước suối', 0),
(4, 'Trà, cà phê', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahoadon` int(11) NOT NULL,
  `id_nd` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahoadon`, `id_nd`, `tensanpham`, `soluong`, `tongtien`, `phone`, `tinhtrang`) VALUES
(1, 1, 'Nước ép kiwi', 1, 20000, '421334', 'Đã đặt hàng'),
(2, 1, 'Trà 0 độ', 1, 10000, '421334', 'Đã đặt hàng'),
(3, 1, 'Nước TH', 1, 10000, '421334', 'Đã đặt hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id_nd` int(11) NOT NULL,
  `phanhoi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id_nd`, `phanhoi`) VALUES
(1, 'sadsadsdas'),
(1, 'ádsadsds'),
(1, 'fdsaefdfasdfas'),
(2, ''),
(2, ''),
(2, ''),
(2, 'Array'),
(2, 'Array'),
(2, 'ád'),
(6, 't'),
(1, 'sản phẩm tốt'),
(1, 'sản phẩm tốt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `noidung` text NOT NULL,
  `id_dm` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `tensanpham`, `gia`, `soluong`, `hinhanh`, `noidung`, `id_dm`, `tinhtrang`) VALUES
(1, 'Nước C2', '8000', 1, '1715965540_c2.png', '', 1, 1),
(3, 'Coca Cola', '8000', 3, '1715965534_coca.png', '', 1, 1),
(4, 'Nước ép dứa', '20000', 3, '1715965526_dua.png', '', 2, 1),
(5, 'Nước ép táo', '20000', 3, '1715965521_tao.png', '', 2, 1),
(6, 'Nước suối Lavie', '10000', 5, '1715965512_lavie.png', '', 3, 1),
(7, '247', '8000', 1, '1715965503_247.png', '', 1, 1),
(8, 'Fanta cam', '8000', 1, '1715965499_fanta.png', '', 1, 1),
(9, 'Juco thạch dừa', '8000', 2, '1715965493_juco.jpg', '', 1, 1),
(10, 'Mirinda kem', '10000', 5, '1715965487_mirinda.png', '', 1, 1),
(11, 'Number 1', '10000', 3, '1715965481_numberone.png', '', 1, 1),
(12, 'Pessi', '8000', 5, '1715965475_pessi.png', '', 1, 1),
(13, 'Sting', '10000', 5, '1715965469_sting.png', '', 1, 1),
(14, 'Trà 0 độ', '10000', 3, '1715965464_tra0do.png', '', 1, 1),
(15, 'Aquafina', '15000', 3, '1715965453_aquafina.jpg', '', 3, 1),
(16, 'Number 1', '10000', 3, '1715965446_number1.jpg', '', 3, 1),
(17, 'Nước TH', '10000', 3, '1715965440_th.jpg', '', 3, 1),
(18, 'Nước ép cà rốt', '20000', 3, '1715965430_carot.png', '', 2, 1),
(19, 'Nước ép dưa hấu', '20000', 3, '1715965424_duahau.png', '', 2, 1),
(20, 'Nước ép kiwi', '20000', 5, '1715965418_kiwi.jpg', '', 2, 1),
(21, 'Cà phê đen', '20000', 3, '1715965406_caphe.png', '', 4, 1),
(22, 'Cà phê sữa', '20000', 1, '1715965400_caphesua.jpg', '', 4, 1),
(23, 'Capuchino', '20000', 5, '1715965394_caphuchino.jpg', '', 4, 1),
(24, 'Trà matcha', '20000', 1, '1715965389_matcha.jpg', '', 4, 1),
(25, 'Trà chanh', '10000', 1, '1715965384_trachanh.jpg', '', 4, 1),
(26, 'Trà lựu', '20000', 1, '1715965379_traluu.jpg', '', 4, 1),
(27, 'Trà mận', '20000', 3, '1715965373_traman.jpg', '', 4, 1),
(28, 'Trà mãn cầu', '20000', 3, '1715965367_tramangcau.jpg', '', 4, 1),
(29, 'Trà sữa', '20000', 1, '1715965360_trasua.jpg', '', 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_nd` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_nd`, `username`, `password`, `fullname`, `phone`, `address`, `role`) VALUES
(1, 'thieu', '123', 'nxt', '421334', '2132', 'admin'),
(2, 'thieu1', '123', 'nxt', '4213342', '2132', 'user'),
(6, 'thieu12', '123', 'Nguyễn Xuân Thiều', '099887666', 'Thái bình', 'user'),
(9, 'viet', 'viet', 'Nguyễn Tuấn Việt', '0395498825', 'Vu lang', 'user'),
(10, 'thien', 'thien', 'Nguyễn Ngọc Thiện', '0395498825', 'Hà nội', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahoadon`),
  ADD KEY `hoadon_ibfk_1` (`id_nd`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD KEY `lienhe_ibfk_1` (`id_nd`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `sanpham_ibfk_1` (`id_dm`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_nd`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_nd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_nd`) REFERENCES `users` (`id_nd`);

--
-- Các ràng buộc cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD CONSTRAINT `lienhe_ibfk_1` FOREIGN KEY (`id_nd`) REFERENCES `users` (`id_nd`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
