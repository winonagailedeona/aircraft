-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 26, 2022 at 03:13 AM
-- Server version: 5.7.36
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `position` text NOT NULL,
  `password` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `image`, `name`, `email`, `position`, `password`, `created_at`, `updated_at`) VALUES
(2, 'img/logo.jpg', 'Gaile Deona', 'winonagailedeona@gmail.com', 'Staff', 'wenonadeona', '2022-12-25 09:11:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `menuid` int(11) NOT NULL,
  `bilang` int(11) NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`cartid`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `user_id`, `menuid`, `bilang`, `total`) VALUES
(115, 1, 23, 1, 100),
(114, 1, 12, 1, 150),
(113, 1, 19, 1, 160),
(112, 1, 9, 1, 100),
(111, 1, 15, 1, 120),
(110, 1, 15, 1, 120),
(109, 1, 22, 1, 140),
(108, 1, 26, 1, 95),
(123, 3, 19, 4, 640);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `quantity`, `size`, `image`, `category`, `created_at`, `updated_at`) VALUES
(11, 'Cheese Burger', 'A cheeseburger is a hamburger topped with cheese.', 140, 10, '', 'img/menu/cheese burger.jpg', 'sandwich', '2022-12-07 20:58:20', '0000-00-00 00:00:00'),
(10, 'Spaghetti', 'It is a staple food of traditional Italian cuisine.', 120, 10, '', 'img/menu/spagetti.jpg', 'pasta', '2022-12-07 20:57:05', '0000-00-00 00:00:00'),
(9, 'Baked Macaroni', 'Mac and cheese is a rich and creamy dish consisting of macaroni pasta mixed with a cheesy sauce.', 100, 10, '', 'img/menu/baked macaroni.jpg', 'pasta', '2022-12-07 20:55:45', '0000-00-00 00:00:00'),
(12, 'Chicken Burger', 'A sandwich consisting of a patty made from ground chicken, served in a bun, typically hot and often with other ingredients.', 150, 10, '', 'img/menu/chicken burger.jpg', 'sandwich', '2022-12-07 20:59:19', '0000-00-00 00:00:00'),
(14, 'Lumpiang Shanghai', 'Filipino-style spring rolls made of ground pork, chicken, or beef filling wrapped in thin crepes called lumpia wrappers.', 80, 10, '0', 'img/menu/lumpiang shanghai.jpg', 'pica', '2022-12-07 21:13:07', '2022-12-07 21:14:31'),
(15, 'Nachos', 'A tortilla chip topped with melted cheese and often additional savory toppings', 120, 5, '', 'img/menu/nachos.jpg', 'pica', '2022-12-07 21:18:59', '2022-12-08 16:18:09'),
(16, 'Chili Roll', 'It is a type of lumpia and it is commonly eaten as an appetizer or as a companion to beer.', 120, 4, '', 'img/menu/chili roll.jpg', 'pica', '2022-12-07 21:21:22', '2022-12-08 16:18:22'),
(17, 'Chicken Cordon Bleu Bites', 'French-inspired poultry dish, although evidence suggests that it was actually developed in the United States by chefs imitating other stuffed meat dishes from Europe.', 120, 2, '', 'img/menu/menu/chicken cordon bleu.jpg\r\n', 'pica', '2022-12-07 21:27:33', '2022-12-18 02:49:02'),
(18, 'with fried Chicken', 'A dish consisting of chicken pieces that have been coated with seasoned flour or batter and pan-fried, deep fried, pressure fried, or air fried.', 160, 10, '', 'img/menu/friedch.jpg', 'meals', '2022-12-07 21:36:00', '2022-12-18 02:49:25'),
(19, 'with Pork Adobo', 'It is a dish composed of pork slices cooked in soy sauce, vinegar, and garlic. ', 160, 10, '', 'img/menu/pork adobo.jpg', 'meals', '2022-12-07 21:39:19', '0000-00-00 00:00:00'),
(22, 'San Rival Cake', 'A popular Filipino layer cake consisting of cashew meringue and French buttercream.', 140, 10, '', 'img/menu/sans rival cake.jpg', 'dessert', '2022-12-07 21:57:48', '0000-00-00 00:00:00'),
(23, 'Crinkles', 'A variation of the chocolate cookies where its texture and appearance are its main characteristics, its soft fudge-like chocolate cake in texture and have that distinctive powdered sugar coating.', 100, 10, '', 'img/menu/crinkles.jpg', 'dessert', '2022-12-07 22:04:43', '2022-12-07 22:05:59'),
(21, 'with Cordon Bleu Bites', 'A dish of meat wrapped around cheese (or with cheese filling), then breaded and pan-fried or deep-fried.', 160, 10, '', 'img/menu/menu/chicken cordon bleu.jpg', 'meals', '2022-12-07 21:53:35', '0000-00-00 00:00:00'),
(24, 'Carbonara', 'An Italian sauce for pasta which appears to have emerged at some point after the Second World War.', 160, 10, '', 'img/menu/carbonara.jpg', 'pasta', '2022-12-07 22:26:43', '0000-00-00 00:00:00'),
(25, 'Hotdog Sandwich', 'A food consisting of a grilled or steamed sausage served in the slit of a partially sliced bun. ', 70, 10, '', 'img/menu/hotdog sandwich.jpg', 'sandwich', '2022-12-07 22:29:24', '0000-00-00 00:00:00'),
(26, 'Wintermelon Milk Tea', 'Wintermelon Milk Tea has a very light and fresh flavour that\'s almost a bit grassy. The closest flavour match would be fresh cucumber.', 95, 10, '', 'img/menu/winter.jpg', 'milktea', '2022-12-18 17:42:52', '2022-12-18 17:46:35'),
(27, 'Hokkaido Milk Tea', 'Hokkaido milk tea is earthy and sweet, but its authentic flavours depend on specific tea and sweetener ingredients. ', 105, 10, '', 'img/menu/hokkaido.jpg', 'milktea', '2022-12-18 17:49:06', '0000-00-00 00:00:00'),
(28, 'Matcha Milk Tea', 'Matcha has a bright, vegetal, and slightly bitter taste, with notes of sweetness and umami. High quality ceremonial grade matcha is suitable to drink on its own, while culinary grade matcha can be added to lattes, smoothies, and more.', 105, 5, '', 'img/menu/matcha.jpg', 'milktea', '2022-12-18 17:49:57', '2022-12-18 05:49:09'),
(29, 'Americano Coffee', 'An Americano is made by pouring hot water over one or two espresso shots, resulting in a drink of similar volume and strength to regular coffee.', 115, 10, '', 'img/menu/americano.jpg', 'milktea', '2022-12-18 18:00:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Paulyn Familara', 'paulynfamilara@gmail.com', '$2y$10$nrkpBLzslpXhvqhlWdvq2O7MtxF7nWZWfFomjCL0u9Yex5ugGxnz6', '2022-11-22 10:22:36'),
(2, 'Paulyn Familara', 'paulynpiegofamilara@gmail.com', '$2y$10$9oc3ehHerz8gci9YwuA9f.jaqNpWczgMGOR51183W3VEOt3p8UTaC', '2022-11-22 10:28:55'),
(3, 'Arizza De Guzman', 'arizza@gmail.com', '$2y$10$499u5g7YIpDnPzAWFPdIguve.vJDWQESYU0ef2gzDw2W3sCbTGeCm', '2022-11-22 12:21:20'),
(4, 'winonadeona@gmail.com', 'winona@gmail.com', '$2y$10$ZaVFaBTx62NtH7Ugm0IA5OJMGXSj86DsrmvbRgh.y9arfPhpdVcM.', '2022-11-22 12:30:05'),
(5, 'Administrator', 'admin@gmail.com', '$2y$10$ZsuOWpNT2XvmsUir4NYoDOaNAjQBaIcY0aqjGw3RGI2ZbpfRKZl6a', '2022-11-22 12:35:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
