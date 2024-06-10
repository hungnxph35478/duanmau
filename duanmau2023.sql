-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 11:13 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `bill_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bill_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1,
  `ngaydathang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0. Đơn hàng mới\r\n\r\n1. Đang xử lý\r\n\r\n2. Đang vận chuyển\r\n\r\n3. Hoàn thành',
  `receive_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receive_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receive_tel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(12, 'xịn', 1, 12, '08:24:21pm 09/09/23');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(255) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(2, 'Đồng hồ'),
(3, 'Laptop'),
(4, 'Điện thoại'),
(5, 'ipad'),
(6, 'Iphone'),
(7, 'SamSung'),
(8, 'Android');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(16, 'Iphone 14', 2000, 'ip14.jpg', 'The iPhone 14 Pro and 14 Pro Max may be the only models in the upcoming lineup to carry a new A16 chip, according to reliable Apple analyst Ming-Chi Kuo (via 9to5Mac). In a tweet, Kuo indicates that the standard iPhone 14 and 14 Max will be left with the A15 chipset that comes in all models of the iPhone 13.', 0, 6),
(17, 'Samsung s23 ', 14000, 'samsung.jpg', 'Samsung’s S-series phones actually look like they belong together this year. The S23 and S23 Plus have adopted the floating camera design of the Ultra, making for a much more cohesive trio this time around. They’re even all available in the same colors.', 0, 8),
(18, 'Ipad Pro 2022', 2300, 'ipad.jpg', 'There are a lot of iPad keyboard cases out there that aim to turn Apple’s tablet into a laptop, but the Kensington StudioDock is something altogether different: it turns your iPad Pro into the world’s tiniest iMac.', 0, 5),
(19, 'Apple Watch SE 2023', 1100, 'wacth se.jfif', 'Apple has announced a new Apple Watch SE. An upgrade to the original SE, the new smartwatch is the second generation of the company’s entry-level, cellular-capable model. The new SE will cost $249 for the GPS model and $299 for the cellular model, a $30 price drop from the original SE. The Apple Watch SE is available starting September 16th and can be pre-ordered today.', 0, 2),
(20, 'Surface', 35000, 'Surface.jpg', 'Microsoft is refreshing its Surface Laptop lineup today with new Surface Laptop 5 models. While the company has offered AMD and Intel chip options for the Surface in the past, this year’s models are pure Intel with the addition of Thunderbolt 4 support.', 0, 3),
(21, 'Samsung Galaxy S22', 32100, 'glxs22.jpg', 'Samsung’s new Galaxy S22 Ultra is getting a lot of buzz since it’s the reincarnation of the Note. By comparison, the regular S22 and S22 Plus are much more iterative with a design that’s similar to last year’s S21 lineup. It’s been reported that Samsung was disappointed with the sales performance of its flagship phones in 2021, and at first glance, there’s little about the S22 and S22 Plus that make them feel like must-have upgrades. They’ve got the standard mix of camera and performance enhancements, but no big wow factor.', 0, 7),
(22, 'Iphone SE', 12200, 'ipse.jpg', 'That’s a shame because, otherwise, the SE is a fantastic midrange phone. With a starting price of $429, it will give you an excellent return on your investment since it will almost certainly get software updates for years to come. This year’s model also includes 5G and, naturally, Apple’s latest and greatest processor, both of which future-proof the phone for wireless advancements to come in the near future. ', 0, 6),
(23, 'iMac M1 2021', 145200, 'imacm12021.jpg', 'This is an iMac unlike any other iMac we’ve seen before, and it all comes down to the M1 chip. \r\n\r\nSure, there are some other differences between this 24-inch iMac and the 21.5-inch model from 2019 that it’s replacing. There are better microphones and better speakers. There are fewer ports, and some of them have moved around. The screen is bigger and better. The keyboard now has TouchID. But the M1 is the star of the show. ', 0, 5),
(24, 'Redmi 2022', 6503, 'xaomi.jpg', 'The Redmi Note 10 Pro is the main attraction here, with several variants including the Note 10S, Note 10, and Note 10 5G adjusting various specs to meet different price points. The Note 10 Pro’s standout feature is its 6.67-inch 1080p OLED display with a 120Hz refresh rate.', 0, 8),
(25, 'Iphone 6', 1254, 'ip6.jpg', 'So you bought the new iPhone. Whether you’re jumping to Apple for the first time or upgrading from an iPhone 5S, you could probably benefit from learning the features, tips, and tricks that will help you get the most out the iPhone 6S and 6S Plus. The arrival of the new phones also brings with it a handful of must-try apps that take advantage of the new hardware and software improvements.', 0, 6),
(26, 'Apple iPad Pro (2022)', 2145, 'ipad2022.jpg', 'It’s a weird year for the iPad Pro. Apple’s top-of-the-line tablet computer has gotten one of its smallest upgrades in recent memory, while the new 10th-gen iPad received things Pro owners have been longing for on their devices for years. And the midtier iPad Air continues to get better with each generation, which just encroaches more on the Pro’s territory. Owners of existing iPad Pro models can happily hang on to what they have and not miss much; if you’re considering buying a Pro this year, I encourage you to look for a sale on last year’s models before committing to the cost of a brand new one.', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'nguyenxuanhung', '123456', 'hungnxph35478@fpt.edu.vn', 'Hà Nội', '0387732069', 1),
(2, 'nxhhph35478', '123456', 'hungnguyenxuan@gmail.com', NULL, NULL, 0),
(3, 'nguyenhungnxh', '123456', 'hungdayne@gmail.com', NULL, '0387732069', 1),
(4, 'demotest1', '123456', 'ahihi@gmail.com', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_bill` (`idbill`),
  ADD KEY `cart_sanpham` (`idpro`),
  ADD KEY `cart_user` (`iduser`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_iddm_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_iddm_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
