-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2023 at 02:28 PM
-- Server version: 5.7.41
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thamesoptic_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'Thamesoptic', 'ee2fdc45a89c12133cdade02185ae27a', '2017-01-24 16:21:18', '02-04-2023 10:46:40 PM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(10, 'BroadBand', 'Here gose to all the catagory of Bradband \r\n', '2023-03-27 08:49:16', NULL),
(12, 'Router', 'High Quality Wireless Routers available at Best Price in United Kingdom', '2023-03-28 06:03:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(1, 1, '3', 1, '2017-03-07 19:32:57', 'COD', NULL),
(3, 1, '4', 1, '2017-03-10 19:43:04', 'Debit / Credit card', 'Delivered'),
(4, 1, '17', 1, '2017-03-08 16:14:17', 'COD', 'in Process'),
(5, 1, '3', 1, '2017-03-08 19:21:38', 'COD', NULL),
(6, 1, '4', 1, '2017-03-08 19:21:38', 'COD', NULL),
(7, 4, '30', 1, '2023-03-28 10:33:24', 'COD', 'in Process'),
(8, 4, '33', 1, '2023-03-28 10:33:24', 'COD', NULL),
(9, 4, '33', 1, '2023-03-28 10:39:58', 'COD', NULL),
(10, 5, '29', 1, '2023-03-29 17:46:55', 'COD', NULL),
(11, 5, '29', 1, '2023-03-29 22:26:30', 'COD', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(1, 3, 'in Process', 'Order has been Shipped.', '2017-03-10 19:36:45'),
(2, 1, 'Delivered', 'Order Has been delivered', '2017-03-10 19:37:31'),
(3, 3, 'Delivered', 'Product delivered successfully', '2017-03-10 19:43:04'),
(4, 4, 'in Process', 'Product ready for Shipping', '2017-03-10 19:50:36'),
(5, 7, 'in Process', 'ghthtghg', '2023-03-29 13:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `review` longtext,
  `reviewDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productreviews`
--

INSERT INTO `productreviews` (`id`, `productId`, `quality`, `price`, `value`, `name`, `summary`, `review`, `reviewDate`) VALUES
(2, 3, 4, 5, 5, 'Anuj Kumar', 'BEST PRODUCT FOR ME :)', 'BEST PRODUCT FOR ME :)', '2017-02-26 20:43:57'),
(3, 3, 3, 4, 3, 'Sarita pandey', 'Nice Product', 'Value for money', '2017-02-26 20:52:46'),
(4, 3, 3, 4, 3, 'Sarita pandey', 'Nice Product', 'Value for money', '2017-02-26 20:59:19'),
(5, 29, 5, 5, 5, 'Belal', 'It is Nice product ', 'I got this product , really excelent Product . i am happy with this product', '2023-03-29 16:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(31, 12, 21, 'ASUS AX6000 WiFi 6 Gaming Router', 'ASUS', 245, 260, '<h1 class=\"a-size-base-plus a-text-bold\" style=\"box-sizing: border-box; padding: 0px 0px 4px; margin-bottom: 0px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 16px !important; line-height: 24px !important;\">About this item<br></h1><h1 id=\"title\" class=\"a-size-large a-spacing-none\" style=\"text-align: justify; box-sizing: border-box; padding: 0px; color: rgb(15, 17, 17); margin-bottom: 0px !important; line-height: 32px !important;\"><span id=\"productTitle\" class=\"a-size-large product-title-word-break\" style=\"box-sizing: border-box; text-rendering: optimizelegibility; word-break: break-word; line-height: 32px !important;\"><font style=\"\" face=\"georgia\" size=\"4\">ASUS AX6000 WiFi 6 Gaming Router (RT-AX88U) - Dual Band Gigabit Wireless Router, 8 GB Ports, Gaming &amp; Streaming, AiMesh Compatible, Included Lifetime Internet Security, Adaptive QoS, MU-MIMO</font></span></h1><ul class=\"a-unordered-list a-vertical a-spacing-mini\" style=\"box-sizing: border-box; margin-bottom: 0px; margin-left: 18px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 14px;\"><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">Next gen Wi-Fi standard 802.11Ax Wi-Fi standard for better efficiency and throughput; ultrafast Wi-Fi speed 6000 Mbps Wi-Fi speed to handle even the busiest network with ease</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">Certified for Humans – Smart home made easy for non-experts. Setup with Alexa is simple.</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">Wider usage and more convenience 4 antennas plus 8 LAN ports to support more clients at the same time</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">Commercial-grade security – AiProtection powered by Trend Micro blocks internet security threats for all your connected smart devices</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">Better partner with mesh system; compatible with ASUS AiMesh Wi-Fi system for seamless whole home coverage’s support: Windows 10, Windows 8, Windows 7, Mac OS X 10.6, Mac OS X 10.7, Mac OS X 10.8</span></li></ul>', 'ASUS AX6000 WiFi 6 Gaming Router.jpg', 'ASUS AX6000 WiFi 6 Gaming Router 2.jpg', 'ASUS AX6000 WiFi 6 Gaming Router 3.jpg', 2, 'In Stock', '2023-03-28 09:11:57', NULL),
(33, 10, 22, '3 Months  Free 50 MB', 'Thamesoptic', 25, 29, '<ul style=\"box-sizing: border-box; margin-bottom: 30px; margin-left: 0px; color: rgb(225, 41, 41); font-family: Roboto, sans-serif; font-size: 16px; text-align: center;\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">£29 activation fee</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">for 3 months, then £25 a month for 9 months.</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">Average download speed 57Mbps.</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">Average upload speed 5.7Mbps.</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">Minimum speed 50Mbps.</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">£25 per month after the end</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">12-month minimum commitment.</li></ul>', 'datapack 1.jpg', 'fiber.jpg', 'The role of optical fiber in bringing you an incredibly fast broadband connection.png', 0, 'In Stock', '2023-03-28 09:47:33', NULL),
(34, 10, 23, '3 Months Free 150 Mb', 'Thamesoptic', 32, 35, '<ul style=\"box-sizing: border-box; margin-bottom: 30px; margin-left: 0px; color: rgb(225, 41, 41); font-family: Roboto, sans-serif; font-size: 16px; text-align: center;\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">£29 activation fee</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">for 3 months, then £32 a month for 9 months.</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">Average download speed 158Mbps</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">Average upload speed 158Mbps</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">Minimum speed 150Mbps</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">£35 per month after the end</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">12-month minimum commitment</li></ul>', 'datapack 2.jpg', 'fiber.jpg', 'The role of optical fiber in bringing you an incredibly fast broadband connection.png', 1, 'In Stock', '2023-03-28 09:54:01', NULL),
(35, 10, 24, '3 Months Free 500 Mb', 'Thamesoptic', 38, 40, '<ul style=\"box-sizing: border-box; margin-bottom: 30px; margin-left: 0px; color: rgb(225, 41, 41); font-family: Roboto, sans-serif; font-size: 16px; text-align: center;\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">£19 activation fee</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">for 3 months, then £38 a month for 9 months.</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">Average download speed 512Mbps</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">Average upload speed 528Mbps</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">Minimum speed 500Mbps</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">£50 per month after the end</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">12-month minimum commitment.</li></ul>', 'datapack 3.jpg', 'The role of optical fiber in bringing you an incredibly fast broadband connection.png', 'fiber.jpg', 0, 'In Stock', '2023-03-28 10:06:58', NULL),
(36, 10, 25, '3 Months Free 1 GB', 'Thamesoptic', 45, 48, '<ul style=\"box-sizing: border-box; margin-bottom: 30px; margin-left: 0px; color: rgb(225, 41, 41); font-family: Roboto, sans-serif; font-size: 16px; text-align: center;\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">£19 activation fee</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">for 3 months, then £32 a month for 9 months.</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">Average download speed 900Mbps</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">Average upload speed 900Mbps</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">Minimum speed 900Mbps</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">£60 per month after the end</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; color: rgb(49, 59, 88); line-height: 36px;\">12-month minimum commitment.</li></ul>', 'datapack 4.jpg', 'fiber.jpg', 'slider-bg2.jpg', 1, 'In Stock', '2023-03-28 10:10:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(18, 12, 'TP-Link Router', '2023-03-28 06:08:27', NULL),
(19, 12, 'Cellular Routers', '2023-03-28 06:09:22', NULL),
(20, 12, 'Tenda Router', '2023-03-28 06:09:52', NULL),
(21, 12, 'ASUS Router', '2023-03-28 06:10:04', NULL),
(22, 10, 'Data Pack 1', '2023-03-28 09:01:15', '09-04-2023 08:27:05 PM'),
(23, 10, 'Data Pack 2', '2023-03-28 09:01:34', NULL),
(24, 10, 'Data Pack 3', '2023-03-28 09:01:45', NULL),
(25, 10, 'Data Pack 4', '2023-03-28 09:01:53', NULL),
(26, 13, 'test1', '2023-03-30 06:37:23', NULL),
(27, 14, 'test  sub', '2023-03-31 16:18:23', NULL),
(28, 14, 'sub cata 2', '2023-03-31 16:18:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(23, 'hgfhgf@gmass.com', 0x3a3a3100000000000000000000000000, '2018-04-29 09:30:40', '', 1),
(24, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2023-03-28 10:33:10', NULL, 1),
(25, 'belal@gmail.com', 0x3130332e3130322e3133322e32353400, '2023-03-29 17:45:30', NULL, 1),
(26, 'belal@gmail.com', 0x3130332e3130322e3133322e32353400, '2023-03-29 22:25:59', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext,
  `shippingState` varchar(255) DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext,
  `billingState` varchar(255) DEFAULT NULL,
  `billingCity` varchar(255) DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(4, 'testing', 'test@gmail.com', 171048745, '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-28 10:32:54', NULL),
(5, 'Belal', 'belal@gmail.com', 171048745, '20ffa4aa7c30fd3481d420b66b17f92b', 'Uk', '23565', 'Dhaka Uttara', 1210, 'Uj', '23565', 'Dhaka Uttara', 1210, '2023-03-29 17:45:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `productId`, `postingDate`) VALUES
(1, 1, 0, '2017-02-27 18:53:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
