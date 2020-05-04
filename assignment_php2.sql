-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 04, 2020 lúc 07:04 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `assignment_php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `created_at`, `updated_at`) VALUES
(1, 'HP', '0000-00-00', '2020-05-04'),
(2, 'ASUS', '0000-00-00', NULL),
(3, 'Dell', '0000-00-00', NULL),
(6, 'Acer', '2020-05-04', '2020-05-04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `p_description` varchar(255) NOT NULL,
  `p_detail` varchar(255) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `p_name`, `p_price`, `image`, `p_description`, `p_detail`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 'Laptop HP HP 15s-du0126TU', 20000000, 'public/uploads/5ead8eddb1384-27332_32225_laptop_dell_latitude_7490_2.jpg', 'Lap top văn phòng', 'i3-8130U/4GB/256GB SSD/WIN10', 1, '0000-00-00', '2020-05-02'),
(5, 'Dell Inspiron 7590', 20000000, 'public/uploads/5ead8ef045e38-95366267_2847724348678817_2525441440062898176_o.jpg', 'Laptop Gaming', '(i5 / Ram 8GB / SSD 256GB / GTX 1050)', 3, '2020-05-01', '2020-05-02'),
(6, 'Asus TUF Gaming A15 FA506IU-AL010T', 30000000, 'public/uploads/5ead8efe7d3e4-172969.jpg', 'Laptop Gaming', 'CPU: AMD Ryzen™ 7-4800H (2.90GHz up to 4.20GHz, 8MB Cache)', 3, '2020-05-01', '2020-05-02'),
(7, 'Laptop HP Pavilion 15 cs3061TX', 18000000, 'public/uploads/5ead8f09eaf54-hp-pavilion-15-cs3061tx-i5-8re83pa1-600x600.jpg', 'Laptop văn phòng', 'i5 1035G1/8GB/512GB/2G MX250/Win10 (8RE83PA)', 1, '2020-05-02', '2020-05-02');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
