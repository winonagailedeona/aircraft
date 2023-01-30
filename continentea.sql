-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2023 at 11:36 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `menuid` int(11) NOT NULL,
  `bilang` int(11) NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `menuid` (`menuid`)
) ENGINE=MyISAM AUTO_INCREMENT=194 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `menuid`, `bilang`, `total`) VALUES
(190, 6, 23, 1, 100),
(191, 6, 27, 1, 105),
(192, 6, 16, 1, 120);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE IF NOT EXISTS `checkout` (
  `user_id` int(11) NOT NULL,
  `menuid` int(11) NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `menu_id` (`menuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `user_id` int(11) NOT NULL,
  `menuid` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Order Placed',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`user_id`, `menuid`, `total`, `status`, `created_at`, `updated_at`) VALUES
(6, 25, 70, '', '2023-01-28 00:16:08', '2023-01-28 00:16:08'),
(6, 12, 150, 'Order Confirmed', '2023-01-28 00:40:17', '2023-01-28 05:35:32'),
(6, 23, 100, 'Ready To Serve', '2023-01-28 00:43:40', '2023-01-28 05:50:31'),
(6, 27, 315, 'CANCELLED', '2023-01-28 04:11:39', '2023-01-28 04:52:18'),
(6, 10, 120, 'To Be Pick Up', '2023-01-28 05:29:37', '2023-01-28 05:29:46'),
(6, 26, 95, 'PENDING', '2023-01-28 05:29:37', '2023-01-28 05:29:37'),
(6, 19, 160, 'PENDING', '2023-01-28 05:29:37', '2023-01-28 05:29:37'),
(6, 9, 100, 'PENDING', '2023-01-28 05:29:37', '2023-01-28 05:29:37'),
(6, 21, 160, 'Order Cancelled', '2023-01-28 05:34:09', '2023-01-28 06:01:15'),
(6, 12, 150, 'Order Confirmed', '2023-01-28 05:34:09', '2023-01-28 05:35:32'),
(9, 23, 100, 'Order Placed', '2023-01-28 08:34:35', '2023-01-28 08:34:35'),
(6, 26, 380, 'Order Placed', '2023-01-28 08:46:42', '2023-01-28 08:46:42'),
(6, 19, 160, 'Order Placed', '2023-01-28 09:07:08', '2023-01-28 09:07:08'),
(3, 16, 360, 'Order Placed', '2023-01-28 19:13:07', '2023-01-28 19:13:07'),
(3, 21, 160, 'Order Placed', '2023-01-28 19:13:34', '2023-01-28 19:13:34'),
(6, 27, 525, 'Order Placed', '2023-01-29 04:45:00', '2023-01-29 04:45:00'),
(6, 27, 105, 'Order Placed', '2023-01-29 04:49:08', '2023-01-29 04:49:08'),
(10, 14, 80, 'Cancelled by User', '2023-01-29 17:14:14', '2023-01-29 17:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productname` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
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
(9, 'Baked Macaroni', 'Mac and cheese is a rich and creamy dish consisting of macaroni pasta mixed with a cheesy sauce.', 100, 8, '', 'img/menu/baked macaroni.jpg', 'pasta', '2022-12-07 20:55:45', '2023-01-28 17:41:27'),
(12, 'Chicken Burger', 'A sandwich consisting of a patty made from ground chicken, served in a bun, typically hot and often with other ingredients.', 150, 3, '', 'img/menu/chicken burger.jpg', 'sandwich', '2022-12-07 20:59:19', '2023-01-28 15:18:45'),
(14, 'Lumpiang Shanghai', 'Filipino-style spring rolls made of ground pork, chicken, or beef filling wrapped in thin crepes called lumpia wrappers.', 80, 8, '0', 'img/menu/lumpiang shanghai.jpg', 'pica', '2022-12-07 21:13:07', '2023-01-30 07:13:02'),
(15, 'Nachos', 'A tortilla chip topped with melted cheese and often additional savory toppings', 120, 0, '', 'img/menu/nachos.jpg', 'pica', '2022-12-07 21:18:59', '2023-01-23 17:23:15'),
(16, 'Chili Roll', 'It is a type of lumpia and it is commonly eaten as an appetizer or as a companion to beer.', 120, 0, '', 'img/menu/chili roll.jpg', 'pica', '2022-12-07 21:21:22', '2023-01-29 18:59:24'),
(17, 'Chicken Cordon Bleu Bites', 'French-inspired poultry dish, although evidence suggests that it was actually developed in the United States by chefs imitating other stuffed meat dishes from Europe.', 120, 2, '', 'img/menu/menu/chicken cordon bleu.jpg\r\n', 'pica', '2022-12-07 21:27:33', '2022-12-18 02:49:02'),
(18, 'with fried Chicken', 'A dish consisting of chicken pieces that have been coated with seasoned flour or batter and pan-fried, deep fried, pressure fried, or air fried.', 160, 0, '', 'img/menu/friedch.jpg', 'meals', '2022-12-07 21:36:00', '2023-01-28 13:35:19'),
(19, 'with Pork Adobo', 'It is a dish composed of pork slices cooked in soy sauce, vinegar, and garlic. ', 160, 5, '', 'img/menu/pork adobo.jpg', 'meals', '2022-12-07 21:39:19', '2023-01-28 23:06:59'),
(22, 'San Rival Cake', 'A popular Filipino layer cake consisting of cashew meringue and French buttercream.', 140, 10, '', 'img/menu/sans rival cake.jpg', 'dessert', '2022-12-07 21:57:48', '0000-00-00 00:00:00'),
(23, 'Crinkles', 'A variation of the chocolate cookies where its texture and appearance are its main characteristics, its soft fudge-like chocolate cake in texture and have that distinctive powdered sugar coating.', 100, 3, '', 'img/menu/crinkles.jpg', 'dessert', '2022-12-07 22:04:43', '2023-01-29 18:51:31'),
(21, 'with Cordon Bleu Bites', 'A dish of meat wrapped around cheese (or with cheese filling), then breaded and pan-fried or deep-fried.', 160, 8, '', 'img/menu/menu/chicken cordon bleu.jpg', 'meals', '2022-12-07 21:53:35', '2023-01-29 09:12:47'),
(24, 'Carbonara', 'An Italian sauce for pasta which appears to have emerged at some point after the Second World War.', 160, 10, '', 'img/menu/carbonara.jpg', 'pasta', '2022-12-07 22:26:43', '0000-00-00 00:00:00'),
(25, 'Hotdog Sandwich', 'A food consisting of a grilled or steamed sausage served in the slit of a partially sliced bun. ', 70, 8, '', 'img/menu/hotdog sandwich.jpg', 'sandwich', '2022-12-07 22:29:24', '2023-01-28 14:16:02'),
(26, 'Wintermelon Milk Tea', 'Wintermelon Milk Tea has a very light and fresh flavour that\'s almost a bit grassy. The closest flavour match would be fresh cucumber.', 95, 20, '', 'img/menu/winter.jpg', 'milktea', '2022-12-18 17:42:52', '2023-01-29 19:27:51'),
(27, 'Hokkaido Milk Tea', 'Hokkaido milk tea is earthy and sweet, but its authentic flavours depend on specific tea and sweetener ingredients. ', 105, 0, '', 'img/menu/hokkaido.jpg', 'milktea', '2022-12-18 17:49:06', '2023-01-29 18:57:16'),
(28, 'Matcha Milk Tea', 'Matcha has a bright, vegetal, and slightly bitter taste, with notes of sweetness and umami. High quality ceremonial grade matcha is suitable to drink on its own, while culinary grade matcha can be added to lattes, smoothies, and more.', 105, 4, '', 'img/menu/matcha.jpg', 'milktea', '2022-12-18 17:49:57', '2023-01-28 12:29:42'),
(29, 'Americano Coffee', 'An Americano is made by pouring hot water over one or two espresso shots, resulting in a drink of similar volume and strength to regular coffee.', 115, 20, '', 'img/menu/americano.jpg', 'milktea', '2022-12-18 18:00:16', '2023-01-29 20:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `state` varchar(50) NOT NULL DEFAULT 'ACTIVE',
  `password` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `address`, `state`, `password`, `created_at`) VALUES
(2, 'Paulyn Familara', 'paulynpiegofamilara@gmail.com', '', NULL, 'ACTIVE', '$2y$10$9oc3ehHerz8gci9YwuA9f.jaqNpWczgMGOR51183W3VEOt3p8UTaC', '2022-11-22 10:28:55'),
(3, 'Arizza De Guzman', 'arizza@gmail.com', '', NULL, 'ACTIVE', '$2y$10$499u5g7YIpDnPzAWFPdIguve.vJDWQESYU0ef2gzDw2W3sCbTGeCm', '2022-11-22 12:21:20'),
(4, 'winonadeona@gmail.com', 'winona@gmail.com', '', NULL, 'ACTIVE', '$2y$10$ZaVFaBTx62NtH7Ugm0IA5OJMGXSj86DsrmvbRgh.y9arfPhpdVcM.', '2022-11-22 12:30:05'),
(5, 'Administrator', 'admin@gmail.com', '', NULL, 'ACTIVE', '$2y$10$ZsuOWpNT2XvmsUir4NYoDOaNAjQBaIcY0aqjGw3RGI2ZbpfRKZl6a', '2022-11-22 12:35:11'),
(6, 'Juan Dela Cruz', 'juan@gmail.com', '', NULL, 'BLOCKED', '$2y$10$sE6TSU9OymlAUI9y.7gSb.XaGmud1iFCaHFCT4nG9t7qyU15dBsw6', '2023-01-28 05:41:56'),
(9, 'Wintermelon', 'jjjj@gmail.com', NULL, NULL, 'ACTIVE', '$2y$10$xNciobUCljUfBNiYKd/Hb.ldd/zCOHRJTaPzEJodtpQHJp.63KPnq', '2023-01-28 14:20:34'),
(10, 'Lionah Castillo', 'lionah@gmail.com', NULL, NULL, 'ACTIVE', '$2y$10$KVCSMuMvKB6pnNBc8olxGOLyQCBY9EQBXaQDkISLlMU0LgbCaDYI2', '2023-01-29 13:41:16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
