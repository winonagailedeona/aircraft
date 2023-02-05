-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 05, 2023 at 11:42 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `continentea`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `menuid` int NOT NULL,
  `bilang` int NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`cartid`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `menuid` (`menuid`)
) ENGINE=MyISAM AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `user_id`, `menuid`, `bilang`, `total`) VALUES
(239, 14, 25, 1, 70),
(240, 14, 22, 1, 140);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE IF NOT EXISTS `checkout` (
  `user_id` int NOT NULL,
  `menuid` int NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `menu_id` (`menuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `nf`
--

DROP TABLE IF EXISTS `nf`;
CREATE TABLE IF NOT EXISTS `nf` (
  `nf_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `nf_content` varchar(500) DEFAULT NULL,
  `nf_rating` varchar(20) NOT NULL,
  `nf_status` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'To Review',
  `nf_createdon` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`nf_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `nf`
--

INSERT INTO `nf` (`nf_id`, `user_id`, `nf_content`, `nf_rating`, `nf_status`, `nf_createdon`) VALUES
(1, 3, 'hi', '5', 'To Review', '2023-02-05 12:12:32'),
(2, 3, 'ygg', '3', 'Approved', '2023-02-05 13:14:01'),
(3, 3, 'eewfewf', '5', 'To Review', '2023-02-05 13:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `user_id` int NOT NULL,
  `menuid` int NOT NULL,
  `cartid` int NOT NULL,
  `orquantity` int NOT NULL,
  `total` int NOT NULL,
  `type` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Order Placed',
  `createdd_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedd_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`user_id`, `menuid`, `cartid`, `orquantity`, `total`, `type`, `status`, `createdd_at`, `updatedd_at`) VALUES
(6, 26, 0, 0, 95, '', 'Ready To Serve', '2023-02-03 20:39:25', '2023-02-03 22:48:38'),
(3, 23, 0, 0, 100, '', 'Cancelled by User', '2023-02-03 20:40:58', '2023-02-03 20:41:01'),
(3, 19, 0, 0, 160, '', 'Receive', '2023-02-03 20:46:16', '2023-02-03 20:46:56'),
(3, 22, 0, 0, 140, '', 'Order Placed', '2023-02-03 20:48:45', '2023-02-03 20:48:45'),
(6, 26, 0, 0, 95, '', 'Order Placed', '2023-02-04 01:59:42', '2023-02-04 01:59:42'),
(14, 14, 0, 0, 80, '', 'Cancelled by User', '2023-02-05 04:14:16', '2023-02-05 04:41:37'),
(14, 19, 0, 0, 160, '', 'Cancelled by User', '2023-02-05 04:14:45', '2023-02-05 04:42:48'),
(14, 22, 0, 0, 140, '', 'Cancelled by User', '2023-02-05 04:19:13', '2023-02-05 04:29:36'),
(14, 19, 0, 0, 160, '', 'Cancelled by User', '2023-02-05 04:29:28', '2023-02-05 04:42:48'),
(14, 14, 0, 0, 80, '', 'Cancelled by User', '2023-02-05 04:29:53', '2023-02-05 04:41:37'),
(14, 14, 0, 1, 80, '', 'Cancelled by User', '2023-02-05 04:39:27', '2023-02-05 04:41:37'),
(14, 24, 0, 1, 160, '', 'Cancelled by User', '2023-02-05 04:42:40', '2023-02-05 04:42:44'),
(14, 19, 0, 1, 160, '', 'Cancelled by User', '2023-02-05 04:42:40', '2023-02-05 04:42:48'),
(14, 14, 0, 1, 80, 'P', 'Order Placed', '2023-02-05 05:20:24', '2023-02-05 05:20:24'),
(14, 19, 0, 1, 160, 'D', 'Order Placed', '2023-02-05 05:21:38', '2023-02-05 05:21:38'),
(14, 21, 0, 1, 160, 'P', 'Order Placed', '2023-02-05 05:22:32', '2023-02-05 05:22:32'),
(14, 12, 0, 1, 150, 'D', 'Order Placed', '2023-02-05 05:23:35', '2023-02-05 05:23:35'),
(14, 24, 0, 1, 160, 'D', 'Order Placed', '2023-02-05 05:25:29', '2023-02-05 05:25:29'),
(14, 25, 0, 1, 70, 'D', 'Order Placed', '2023-02-05 05:41:27', '2023-02-05 05:41:27');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `productname` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `quantity` int NOT NULL,
  `size` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `description`, `price`, `quantity`, `size`, `image`, `category`, `created_at`, `updated_at`) VALUES
(11, 'Cheese Burger', 'A cheeseburger is a hamburger topped with cheese.', 140, 0, '', 'img/menu/cheese burger.jpg', 'sandwich', '2022-12-07 20:58:20', '2022-12-26 21:41:42'),
(10, 'Spaghetti', 'It is a staple food of traditional Italian cuisine.', 120, 8, '', 'img/menu/spagetti.jpg', 'pasta', '2022-12-07 20:57:05', '2023-01-28 18:21:40'),
(9, 'Baked Macaroni', 'Mac and cheese is a rich and creamy dish consisting of macaroni pasta mixed with a cheesy sauce.', 100, 6, '', 'img/menu/baked macaroni.jpg', 'pasta', '2022-12-07 20:55:45', '2023-02-05 18:50:35'),
(12, 'Chicken Burger', 'A sandwich consisting of a patty made from ground chicken, served in a bun, typically hot and often with other ingredients.', 150, 0, '', 'img/menu/chicken burger.jpg', 'sandwich', '2022-12-07 20:59:19', '2023-02-05 19:23:27'),
(14, 'Lumpiang Shanghai', 'Filipino-style spring rolls made of ground pork, chicken, or beef filling wrapped in thin crepes called lumpia wrappers.', 80, 0, '0', 'img/menu/lumpiang shanghai.jpg', 'pica', '2022-12-07 21:13:07', '2023-02-05 19:30:14'),
(15, 'Nachos', 'A tortilla chip topped with melted cheese and often additional savory toppings', 120, 0, '', 'img/menu/nachos.jpg', 'pica', '2022-12-07 21:18:59', '2023-01-23 17:23:15'),
(16, 'Chili Roll', 'It is a type of lumpia and it is commonly eaten as an appetizer or as a companion to beer.', 120, 0, '', 'img/menu/chili roll.jpg', 'pica', '2022-12-07 21:21:22', '2023-01-29 18:59:24'),
(17, 'Chicken Cordon Bleu Bites', 'French-inspired poultry dish, although evidence suggests that it was actually developed in the United States by chefs imitating other stuffed meat dishes from Europe.', 120, 1, '', 'img/menu/menu/chicken cordon bleu.jpg\r\n', 'pica', '2022-12-07 21:27:33', '2023-02-05 19:35:44'),
(18, 'with fried Chicken', 'A dish consisting of chicken pieces that have been coated with seasoned flour or batter and pan-fried, deep fried, pressure fried, or air fried.', 160, 0, '', 'img/menu/friedch.jpg', 'meals', '2022-12-07 21:36:00', '2023-01-28 13:35:19'),
(19, 'with Pork Adobo', 'It is a dish composed of pork slices cooked in soy sauce, vinegar, and garlic. ', 160, 0, '', 'img/menu/pork adobo.jpg', 'meals', '2022-12-07 21:39:19', '2023-02-05 19:21:30'),
(22, 'San Rival Cake', 'A popular Filipino layer cake consisting of cashew meringue and French buttercream.', 140, 5, '', 'img/menu/sans rival cake.jpg', 'dessert', '2022-12-07 21:57:48', '2023-02-05 19:42:15'),
(23, 'Crinkles', 'A variation of the chocolate cookies where its texture and appearance are its main characteristics, its soft fudge-like chocolate cake in texture and have that distinctive powdered sugar coating.', 100, 0, '', 'img/menu/crinkles.jpg', 'dessert', '2022-12-07 22:04:43', '2023-02-04 10:40:52'),
(21, 'with Cordon Bleu Bites', 'A dish of meat wrapped around cheese (or with cheese filling), then breaded and pan-fried or deep-fried.', 160, 5, '', 'img/menu/menu/chicken cordon bleu.jpg', 'meals', '2022-12-07 21:53:35', '2023-02-05 19:22:21'),
(24, 'Carbonara', 'An Italian sauce for pasta which appears to have emerged at some point after the Second World War.', 160, 8, '', 'img/menu/carbonara.jpg', 'pasta', '2022-12-07 22:26:43', '2023-02-05 19:25:21'),
(25, 'Hotdog Sandwich', 'A food consisting of a grilled or steamed sausage served in the slit of a partially sliced bun. ', 70, 1, '', 'img/menu/hotdog sandwich.jpg', 'sandwich', '2022-12-07 22:29:24', '2023-02-05 19:41:55'),
(26, 'Wintermelon Milk Tea', 'Wintermelon Milk Tea has a very light and fresh flavour that\'s almost a bit grassy. The closest flavour match would be fresh cucumber.', 95, 15, '', 'img/menu/winter.jpg', 'milktea', '2022-12-18 17:42:52', '2023-02-04 15:59:31'),
(27, 'Hokkaido Milk Tea', 'Hokkaido milk tea is earthy and sweet, but its authentic flavours depend on specific tea and sweetener ingredients. ', 105, 0, '', 'img/menu/hokkaido.jpg', 'milktea', '2022-12-18 17:49:06', '2023-01-29 18:57:16'),
(28, 'Matcha Milk Tea', 'Matcha has a bright, vegetal, and slightly bitter taste, with notes of sweetness and umami. High quality ceremonial grade matcha is suitable to drink on its own, while culinary grade matcha can be added to lattes, smoothies, and more.', 105, 0, '', 'img/menu/matcha.jpg', 'milktea', '2022-12-18 17:49:57', '2023-01-30 19:28:13'),
(29, 'Americano Coffee', 'An Americano is made by pouring hot water over one or two espresso shots, resulting in a drink of similar volume and strength to regular coffee.', 115, 19, '', 'img/menu/americano.jpg', 'milktea', '2022-12-18 18:00:16', '2023-01-30 20:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `state` varchar(50) NOT NULL DEFAULT 'ACTIVE',
  `usertype` varchar(11) NOT NULL DEFAULT 'USER',
  `password` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `address`, `state`, `usertype`, `password`, `created_at`) VALUES
(3, 'Arizza De Guzman', 'arizza@gmail.com', '', NULL, 'ACTIVE', 'USER', '$2y$10$499u5g7YIpDnPzAWFPdIguve.vJDWQESYU0ef2gzDw2W3sCbTGeCm', '2022-11-22 12:21:20'),
(6, 'Juan Dela Cruz', 'juan@gmail.com', '5444', 'aaa', 'BLOCKED', '', '$2y$10$sE6TSU9OymlAUI9y.7gSb.XaGmud1iFCaHFCT4nG9t7qyU15dBsw6', '2023-01-28 05:41:56'),
(12, 'Administrator', 'cafe@gmail.com', NULL, NULL, 'ACTIVE', 'ADMIN', '$2y$10$jofsCavupZoiPByP827AQuZg0/Xz4QE35iEdN5a0Ysu669kk2Oj02', '2023-02-04 09:51:12'),
(13, 'Paulyn Familara', 'paulynfamilara@gmail.com', NULL, NULL, 'ACTIVE', 'USER', '$2y$10$UllBXfEKttWkRf8aRPKNguH6MW.3YgDX1HGAi/rSsLZC12/7e1i1K', '2023-02-04 09:56:22'),
(14, 'Winona Gaile Deona', 'winonagailedeona@gmail.com', NULL, NULL, 'ACTIVE', 'ADMIN', '$2y$10$caFh9XYso3DbzlB/FxL1AO/nwaE6wHBFK0Wjx237ucTf453T0EFiK', '2023-02-05 09:02:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
