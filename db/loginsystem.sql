-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 12:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `name`, `code`, `image`, `price`) VALUES
(5, 'Mouse s55', '5D56h', 'images\\product-images\\sub product\\accessories\\mouse2.jpg', 500.00),
(6, 'Mouse impact fk2 ', '23DGH', 'images\\product-images\\sub product\\accessories\\mouse1.jpg', 350.00),
(8, 'Monitor LED', '3DcAk54', 'images\\product-images\\sub product\\accessories\\monitor1.jpg', 1500.00),
(9, 'EXP Portable Hard Drive', 'USB02', 'images\\product-images\\sub product\\accessories\\external-hard-drive.jpg', 800.00),
(10, 'Headset Asus G56', 'USB04', 'images\\product-images\\sub product\\accessories\\headset1.jpg', 300.00),
(11, 'Headset JBL', 'LPN45', 'images\\product-images\\sub product\\accessories\\headset2.jpg	\r\n', 800.00),
(13, 'Keyboard Gaming', 'KFH-556', 'images\\product-images\\sub product\\accessories\\keyboard1.jpg', 150.00),
(14, 'Keyboard ', 'HSK2', 'images\\product-images\\sub product\\accessories\\keyboard2.jpg', 100.00),
(16, 'Monitor LCD', 'HWK-2', 'images\\product-images\\sub product\\accessories\\monitor2.jpg', 190.00);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `bname` varchar(45) NOT NULL,
  `baddress` varchar(45) NOT NULL,
  `bphone` varchar(45) NOT NULL,
  `lat` varchar(45) NOT NULL,
  `lng` varchar(45) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`bname`, `baddress`, `bphone`, `lat`, `lng`, `id`) VALUES
('sky', 'sky', 'skyt', '6.785277702704765', '80.11392854687506', 7),
('sky', 'sky', 'skyt', '8.74183774138595', '80.51774784398161', 8),
('kalpitiya ', 'kalpitiya  no40/3456', '07328435', '7.956527388382986', '80.03153108593754', 9),
('baddulla', 'baddulla 40/24/456', '072934234', '6.997737462615678', '81.06843837822971', 10),
('kalpitiya ', 'kalpitiya  no40/3456', '07328435', '6.785277702704765', '80.11392854687506', 11),
('dbulla', 'dabbulla', '072445423', '7.704122577200238', '80.52346643924885', 12),
('negombo', 'neggombo/87569/355', '073364243', '6.785277702704765', '80.11392854687506', 13),
('matara', 'matara/35465/5', '072745563', '5.92816147523135', '80.57535432812504', 14),
('eshopmain ', 'eshopmain  dbana', '07443234', '7.797348518748375', '80.26697909576116', 15),
('plonnaruwa', 'plonanruwa/4468/5', '07328435', '7.959138454224139', '80.80388537772191', 16),
('tinco', 'trinco/3467', '07328435', '6.785277702704765', '80.11392854687506', 17),
('trinco', 'trinco/3467', '07328435', '8.560212725423202', '81.18271673902343', 18),
('kandy', 'kandy/578', '07328435', '7.328670991012746', '80.56248189518203', 19);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `unique` varchar(41) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`unique`, `data`) VALUES
('::1', 'YTozOntzOjY6InRvcGljcyI7YToyOntpOjA7czo0OiJkZW1vIjtpOjE7czo0OiJkZW1vIjt9czo0OiJ0aGF0IjthOjEwOntpOjA7czowOiIiO2k6MTtzOjE3OiJXaGF0IGRvIHlvdSB3bmF0PyI7aToyO3M6MzU6IgogICAgICAgICAgICAgICAgaGVsbG8KICAgICAgICAgICAgIjtpOjM7czo0ODoiCiAgICAgICAgICAgICAgICB3aGF0J3MgIHlvdXIgb2Rlcj8KICAgICAgICAgICAgIjtpOjQ7czo5NjoiCiAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgd2VsbCAsIGhlbGxvIDEgMSAuLi4KICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgIjtpOjU7czo0ODoiCiAgICAgICAgICAgICAgICB3aGF0J3MgIHlvdXIgb2Rlcj8KICAgICAgICAgICAgIjtpOjY7czowOiIiO2k6NztzOjE3OiJXaGF0IGRvIHlvdSB3bmF0PyI7aTo4O3M6OTA6IgogICAgICAgICAgICAgICAgeW91IG9ubHkgY2FuIGlucHQgJ2FiYzEyMycgLCBhbmQgJ2FiYycgaXMgdW5hYmxlIHRvIG1hdGNoIGl0CiAgICAgICAgICAgICI7aTo5O3M6NDg6IgogICAgICAgICAgICAgICAgd2hhdCdzICB5b3VyIG9kZXI/CiAgICAgICAgICAgICI7fXM6NToiaW5wdXQiO2E6MTA6e2k6MDtzOjM6ImhpICI7aToxO3M6NzoiREVGQVVMVCI7aToyO3M6MjoiaGkiO2k6MztzOjI6ImhpIjtpOjQ7czoyOiJoMSI7aTo1O3M6MjoiaGkiO2k6NjtzOjc6ImthdmluZHUiO2k6NztzOjc6IkRFRkFVTFQiO2k6ODtzOjE6ImEiO2k6OTtzOjI6ImhpIjt9fQ==');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Asus ROG', 'Strix', 'images\\product-images\\sub product\\laptop\\laptop4.jpg', 1500.00),
(2, 'Acer Nitro 5', 'Nitro 5', 'images\\product-images\\sub product\\laptop\\laptop5.jpg', 800.00),
(3, 'Samsung GR15', 'wristWear03', 'images\\product-images\\sub product\\laptop\\laptop12.jpg', 300.00),
(4, 'XP 1155 Intel Core Laptop', 'LPN45', '	\r\nimages/product-images/laptop.jpg', 800.00);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `user` varchar(255) NOT NULL,
  `bot` varchar(255) NOT NULL,
  `input` text NOT NULL,
  `response` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`user`, `bot`, `input`, `response`, `date`) VALUES
('::1', '::1', 'hi', '??????? ? ????????????  ...', '2021-04-01 13:13:38'),
('::1', '::1', 'ho', '??????? ? ????????????  ...', '2021-04-01 13:16:52'),
('::1', '::1', 'hi', 'thank you', '2021-04-01 13:19:20'),
('::1', '::1', 'hi', 'What do you wnat', '2021-04-01 13:19:45'),
('::1', '::1', 'hello', 'hello ...', '2021-04-01 13:20:04'),
('::1', '::1', 'xyz', 'you can input \'xyz\' or \'xyz123\'', '2021-04-01 13:20:42'),
('::1', '::1', 'hi', 'What do you wnat?', '2021-04-01 13:21:16'),
('::1', '::1', 'hi', 'hello', '2021-04-01 13:24:41'),
('::1', '::1', 'hi', 'what\'s  your oder?', '2021-04-01 13:26:44'),
('::1', '::1', 'h1', 'well , hello 1 1 ...', '2021-04-01 13:27:49'),
('::1', '::1', 'hi', 'what\'s  your oder?', '2021-04-01 13:28:14'),
('::1', '::1', 'kavindu', 'What do you wnat?', '2021-04-01 13:28:19'),
('::1', '::1', 'a', 'you only can inpt \'abc123\' , and \'abc\' is unable to match it', '2021-04-01 13:29:06'),
('::1', '::1', 'hi', 'what\'s  your oder?', '2021-04-01 13:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `mobilephone`
--

CREATE TABLE `mobilephone` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobilephone`
--

INSERT INTO `mobilephone` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Samsung Galaxy S7', '3DcAM01', 'images\\product-images\\sub product\\mobile phones\\mobile1.jpg', 1500.00),
(2, 'Apple Iphone 5s', 'USB02', 'images\\product-images\\sub product\\mobile phones\\mobile2.jpg', 800.00),
(3, 'Oppo A7', 'wristWear03', 'images\\product-images\\sub product\\mobile phones\\mobile3.jpg', 300.00),
(4, 'Nokia 3310', 'LPN45', 'images\\product-images\\sub product\\mobile phones\\mobile4.jpg', 800.00);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `unique` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'FinePix Pro2 3D Camera', '3DcAM01', 'images/product-images/camera.jpg', 1500.00),
(2, 'EXP Portable Hard Drive', 'USB02', 'images/product-images/external-hard-drive.jpg', 800.00),
(3, 'Luxury Ultra thin Wrist Watch', 'wristWear03', '	\r\nimages/product-images/watch.jpg', 300.00),
(4, 'XP 1155 Intel Core Laptop', 'LPN45', '	\r\nimages/product-images/laptop.jpg', 800.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`) VALUES
(13, 'evantha', 'dissanayake', 'eva@gmail.com', 'e0aad55174e1bf1fe6a65f62698fac71', '0713525929', '2020-01-07 05:24:40'),
(20, 'hiru', 'jinadasa', 'hiru@gmail.com', '4ba0c0ae2cc41fd1b1cea3a4cd2cad80', '0713882429', '2020-01-16 06:22:27'),
(21, 'hiru', 'jinadasa', 'hiru@gmail.com', '4ba0c0ae2cc41fd1b1cea3a4cd2cad80', '0713882429', '2020-01-16 06:46:10'),
(22, 'ayo', 'rathnayake', 'ayo@gmail.com', '80388a64634281662a983c22106e0de4', '0713425647', '2020-01-18 17:13:23'),
(23, 'asasd', 'asdasd', 'asd@g.com', '28cf7f56356350f48559ad848635c7e5', '1212312321', '2020-01-18 20:47:53'),
(24, 'ayomal', 'praveen', 'ap@gmail.com', '4297f44b13955235245b2497399d7a93', '0713425647', '2020-01-18 20:48:59'),
(26, 'ayo', 'rat', 'at@g.com', '4297f44b13955235245b2497399d7a93', '0713425647', '2020-01-18 20:52:29'),
(27, 'jack', '1', 'ja@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '12345698', '2020-01-18 20:57:10'),
(28, 'hiru', 'jinadasa', 'hiru@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '0713882429', '2020-01-21 08:07:00'),
(29, 'kavindu yasintha', 'sky', 'sky@gmail.com', '794733e5b5805dbd33b577d610070d2d', '0717288494', '2021-04-01 05:24:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD UNIQUE KEY `unique` (`unique`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `mobilephone`
--
ALTER TABLE `mobilephone`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD KEY `unique` (`unique`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobilephone`
--
ALTER TABLE `mobilephone`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
