-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 10:53 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
('1', 'men'),
('2', 'women'),
('3', 'kids');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `pass`) VALUES
('AzizAhmad', 'sadeqi147');

-- --------------------------------------------------------

--
-- Table structure for table `fdbk`
--

CREATE TABLE `fdbk` (
  `name` varchar(30) NOT NULL,
  `phone no` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subj` varchar(30) NOT NULL,
  `mesg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fdbk`
--

INSERT INTO `fdbk` (`name`, `phone no`, `email`, `subj`, `mesg`) VALUES
('AzizAhmad', '799076140', 'azizahmadsadeqi125@gmail.com', 'service', 'Try to improve your service'),
('AzizAhmad', '799076140', 'azizahmadsadeqi125@gmail.com', 'service', 'Try to improve your service'),
('AzizAhmad', '799076140', 'azizahmadsadeqi125@gmail.com', 'service', 'Try to improve your service');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `catg` varchar(40) NOT NULL,
  `subcatg` varchar(40) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `itemno` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `description` varchar(300) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `info` varchar(500) DEFAULT NULL,
  `dat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `catg`, `subcatg`, `img`, `itemno`, `price`, `description`, `info`, `dat`) VALUES
(2, '2', 'Dresses', 'c:/wamp/tmpphp1EF.tmp', 'd6', '1799', 'Formal dress', 'Pin Striped Incut Dress Polyester Fabric Sleeveless  ', '05-07-11 04-50-17'),
(3, '2', 'Dresses', 'c:/wamp/tmpphp1F0.tmp', 'd7', '1649', 'Formal Dress', 'Buttoned Down Front Linen Fabric Sleeveless', '05-07-11 04-51-14'),
(4, '1', 'Casual Shirts', 'c:/wamp/tmpphp20F.tmp', 'cs2', '1999', 'United Colors of Benetton Mens Full Sleeves Checks Shirt', '100% Cotton Full Sleeves Smart Checks Earthy Foliage Combination', '05-07-11 05-29-05'),
(5, '1', 'Casual Shirts', 'c:/wamp/tmpphp210.tmp', 'cs3', '1999', 'United Colors of Benetton Mens Full Sleeves Checks Shirt', '100% Cotton Full Sleeves Stripe Shirt Light Weight Fabric', '05-07-11 05-29-41'),
(6, '1', 'Casual Shirts', 'c:/wamp/tmpphp211.tmp', 'cs4', '1999', 'United Colors of Benetton Mens Full Sleeves Checks Shirt\r\n', '', '05-07-11 05-30-36'),
(7, '1', 'Casual Shirts', 'c:/wamp/tmpphp212.tmp', 'cs5', '1499', 'Allen Solly Mens Full Sleeves Checks Sport Shirt', 'Bias Yoke Patch Pockets Slim Fit Half Sleeves', '05-07-11 05-31-47'),
(8, '1', 'Casual Shirts', 'c:/wamp/tmpphp213.tmp', 'cs6', '1999', 'Levis Mens Roll Up Sleeves Workers Shirt', 'Light Age Theme 100% Cotton Full Sleeves Checks Shirt White Base', '05-07-11 05-32-26'),
(9, '2', 'Churidar Suits', 'c:/wamp/tmpphp980C.tmp', 's5', '1699', 'BIBA Churidar - Kurta-Dupatta Set', 'Printed kurta Round neck Full sleeves Kurta length -40 inches Contrast churidar and shaded crushed Duppatta', '05-07-11 05-02-05'),
(10, '2', 'Churidar Suits', 'c:/wamp/tmpphp6588.tmp', 's1', '2599', 'Kashish Churidar - Kurta-Dupatta Set', 'Floral print Embelished Yoke Puff sleeves Kurta length -40 inches Contrast churidar and Duppatta', '05-07-11 05-05-09'),
(11, '2', 'Churidar Suits', 'c:/wamp/tmpphp1BFC.tmp', 's3', '2899', 'Kashish Churidar - Kurta-Dupatta Set', 'Textured Fabric V-neck 3/4th sleeves Kurta length -40 inches Contrast churidar and Duppatta', '05-07-11 05-05-56'),
(12, '2', 'Churidar Suits', 'c:/wamp/tmpphpFE60.tmp', 's6', '2799', 'Seven East Churidar - Kurta-Dupatta Set', 'Textured Fabric Embelished Yoke Sleeveless Kurta length -38 inches Contrast churidar and Duppatta', '05-07-11 05-06-54'),
(13, '2', 'Churidar Suits', 'c:/wamp/tmpphp877D.tmp', 's4', '2799', 'Kashish Churidar - Kurta-Dupatta Set', 'Printed kurta Round neck Half sleeves Kurta length -38 inches Contrast churidar and Printed Duppatta', '05-07-11 05-07-29'),
(14, '2', 'Churidar Suits', 'c:/wamp/tmpphp5B2.tmp', 's2', '2299', 'BIBA Churidar - Kurta-Dupatta Set', 'Regular fit Round neck Full sleeves Kurta length -40 inches Contrast churidar and shaded crushed Duppatta   ', '05-07-11 05-08-01'),
(15, '2', 'Sandals', 'c:/wamp/tmpphpEAAC.tmp', 'foot1', '1690', 'Tresmode Ladies Peep toes', '', '06-07-11 01-51-03'),
(16, '2', 'Sandals', 'c:/wamp/tmpphp8EE7.tmp', 'foot2', '1690', 'Tresmode Ladies Pump Shoes', '', '06-07-11 01-51-45'),
(17, '2', 'Sandals', 'c:/wamp/tmpphp2FD8.tmp', 'foot4', '4990', 'Tresmode Ladies Sandals', '', '06-07-11 01-52-27'),
(18, '2', 'Sandals', 'c:/wamp/tmpphp1894.tmp', 'nf2', '1299', 'Haute Curry - Ladies Footwear\r\n', '', '06-07-11 01-56-43'),
(19, '2', 'Sandals', 'c:/wamp/tmpphp9A9F.tmp', 'nf3', '1399', 'Lemon Pepper - Ladies Footwear\r\n', '', '06-07-11 01-57-16'),
(20, '2', 'Sandals', 'c:/wamp/tmpphp52F7.tmp', 'nf1', '1499', 'Lemon Pepper - Ladies Footwear\r\n', '', '06-07-11 02-02-25'),
(21, '2', 'Kurtas', 'c:/wamp/tmpphp8B17.tmp', 'k3', '1399', 'Haute curry Mix and Match Kurta', 'Tie up 5/8th sleeves Kurta Length - 38 inches Tribal printed 100% cotton  ', '06-07-11 02-03-45'),
(22, '2', 'Kurtas', 'c:/wamp/tmpphp2AEF.tmp', 'k4', '1079', 'W Mix and match kurta\r\n', 'Sleeveless Regular Wear Regular Fit Length- 38 inches Fabric- Cotton Cambric', '06-07-11 02-05-32'),
(23, '2', 'Kurtas', 'c:/wamp/tmpphp9095.tmp', 'k2', '1599', 'Kashish Mix and Match Kurta', '3/4th sleeves Kurta Length - 38 inches sequine highlighted printed 100% cotton', '06-07-11 02-05-58'),
(24, '2', 'Kurtas', 'c:/wamp/tmpphp9299.tmp', 'k7', '799', 'W Mix and Match Kurta', 'V Neck Kurta Printed Short Sleeves Mauve printed non embellished Kurta Kurta length -38 inches 60 s Cambric', '06-07-11 02-07-04'),
(25, '2', 'Kurtas', 'c:/wamp/tmpphp3713.tmp', 'k8', '1199', 'Stop Classic Mix and Match Short Kurta\r\n', 'Dobby kurta with embroidery on the yoke and sleeve Kurta length- 36 inches 3/4th sleeves Officewear', '06-07-11 02-08-51'),
(26, '2', 'Kurtas', 'c:/wamp/tmpphpDC29.tmp', 'k9', '1299', 'Stop Classic Mix and Match Short Kurta\r\n', 'Printed Highlighted placket and sleeve hem 3/4th sleeves', '06-07-11 02-09-34'),
(27, '2', 'Dresses', 'c:/wamp/tmpphp8332.tmp', 'd5', '1799', 'Life Ladies Rara Dress\r\n', '', '06-07-11 02-19-01'),
(28, '2', 'Dresses', 'c:/wamp/tmpphp3FEC.tmp', 'd3', '1599', 'Mustang Ladies Mia Denim dress\r\n', '', '06-07-11 02-19-49'),
(29, '2', 'Office Wear', 'c:/wamp/tmpphp8832.tmp', 'of2', '799', 'Austin Reed Office Wear T shirt', '', '07-07-11 10-23-12'),
(30, '2', 'Office Wear', 'c:/wamp/tmpphp770.tmp', 'of1', '1999', 'Austin Reed Office Wear waist coat', '', '07-07-11 10-23-45'),
(31, '2', 'Office Wear', 'c:/wamp/tmpphpDDD2.tmp', 'of5', '799', 'Austin Reed Office Wear Top', '', '07-07-11 10-24-40'),
(32, '2', 'Office Wear', 'c:/wamp/tmpphpC9F6.tmp', 'of3', '899', 'Austin Reed Office Wear T shirt', '', '07-07-11 10-25-40'),
(33, '2', 'Office Wear', 'c:/wamp/tmpphpAA95.tmp', 'of4', '1199', 'Austin Reed Office Wear T shirt', '', '07-07-11 10-26-38'),
(35, '2', 'Artificial Jewellery', 'c:/wamp/tmpphpBCC0.tmp', 'j7', '20,865', 'Haute Curry Earring HCSE1012', '', '07-07-11 10-33-15'),
(36, '2', 'Artificial Jewellery', 'c:/wamp/tmpphpE824.tmp', 'j3', '10,999', 'Lucera Rhodium plated Sterling Silver Diamond tops ', '', '07-07-11 10-34-32'),
(37, '2', 'Artificial Jewellery', 'c:/wamp/tmpphp328D.tmp', 'j4', '20,345', 'Pretty Women Peacock theme Set ', '', '07-07-11 10-35-57'),
(39, '2', 'Artificial Jewellery', 'c:/wamp/tmpphp97E6.tmp', 'j6', '22,780', 'DITI Flower theme Diamond Ring ', '', '07-07-11 10-38-34'),
(40, '2', 'Artificial Jewellery', 'c:/wamp/tmpphp3A5.tmp', 'j5', '24,890', 'Pretty Women Modern theme set ', '', '07-07-11 10-51-02'),
(41, '3', 'Baby Apparel', 'c:/wamp/tmpphpEFD8.tmp', 'bb1', '899', 'Girls Spot and Stripe Jersey Romper Dress', 'Floral print Sleeveless Round neck Along with belt Prices of the items may be different from those displayed on the product details page, where the price varies by size', '07-07-11 10-53-08'),
(42, '3', 'Baby Apparel', 'c:/wamp/tmpphp67B6.tmp', 'bb2', '1,299', 'Girls Denim Pinny', 'Floral print denim dress Sleeveless Round neck Along with a belt Prices of the items may be different from those displayed on the product details page, where the price varies by size', '07-07-11 10-53-39'),
(43, '3', 'Baby Apparel', 'c:/wamp/tmpphpDFC3.tmp', 'bb7', '1,299', 'Girls frill and pompy short Dress', 'Polka dot Strappy Square neck Double layered dress Prices of the items may be different from those displayed on the product details page, where the price varies by size', '07-07-11 10-55-15'),
(44, '3', 'Baby Apparel', 'c:/wamp/tmpphp5BB.tmp', 'bb3', '1,799', 'Girls Layette Snowsuit', '', '07-07-11 10-56-30'),
(45, '3', 'Baby Apparel', 'c:/wamp/tmpphp9722.tmp', 'bb5', '899', 'Unisex Duck Pyjamas', 'Round Neck Half Sleeves Stripes With Print Button Styling Prices of the items may be different from those displayed on the product details page, where the price varies by size.', '07-07-11 10-57-08'),
(46, '3', 'Baby Apparel', 'c:/wamp/tmpphpA621.tmp', 'bb4', '1,299', 'Boys Truck Bodysuits - 7pk', 'Round Neck Half Sleeves Stripes Button Styling Prices of the items may be different from those displayed on the product details page, where the price varies by size.', '07-07-11 10-58-17'),
(47, '3', 'Girls Apparel', 'c:/wamp/tmpphp6DB4.tmp', 'g1', '999', 'Gini and Jony girls dress (Infant)', ' Sleeveless Balloon dress Striped at the waist Prices of the items may be different from those displayed on the product details page, where the price varies by size.', '07-07-11 11-06-47'),
(48, '3', 'Girls Apparel', 'c:/wamp/tmpphpBC8.tmp', 'g2', '445', '612 Ivy League girls dress', ' Floral print, Strappy, Elasticised at the hem, Prices of the items may be different from those displayed on the product details page, where the price varies by size.', '07-07-11 11-07-27'),
(49, '3', 'Girls Apparel', 'c:/wamp/tmpphpF962.tmp', 'g6', '699', 'Girls floral dress', 'Floral print Strappy Elasticized body Frills at the hem Prices of the items may be different from those displayed on the product details page, where the price varies by size.', '07-07-11 11-08-28'),
(50, '3', 'Girls Apparel', 'c:/wamp/tmpphp95FF.tmp', 'g3', '499', 'Shop girls top', 'Stop girls top Product Details Floral print Halter Bow at the side Prices of the items may be different from those displayed on the product details page, where the price varies by size.', '07-07-11 11-09-08'),
(51, '3', 'Girls Apparel', 'c:/wamp/tmpphp2C94.tmp', 'g5', '549', 'Shop girls skirt', ' Floral print Halter neck V-neck Bow at the front Frills at the bottom Prices of the items may be different from those displayed on the product details page, where the price varies by size', '07-07-11 11-09-47'),
(52, '3', 'Girls Apparel', 'c:/wamp/tmpphpA76F.tmp', 'g4', '549', 'Shop girls casual top', 'Polka dot Puff sleeves Collar Polka dot print belt Front pleat Prices of the items may be different from those displayed on the product details page, where the price varies by size', '07-07-11 11-10-18'),
(53, '3', 'Boys Apparel', 'c:/wamp/tmpphp6557.tmp', 'b1', '499', 'United Colors of Benetton boys t-shirt', 'Half sleeves Printed message &#39;St.Kilda surfer&#39; Round neck Regular fit Prices of the items may be different from those displayed on the product details page, where the price varies by size.  ', '07-07-11 04-10-53'),
(54, '3', 'Boys Apparel', 'c:/wamp/tmpphp1EB7.tmp', 'b2', '399', 'United Colors of Benetton boys t-shirt', 'Half sleeves Printed message &#39;Art village 2&#39; Round neck Regular fit Prices of the items may be different from those displayed on the product details page, where the price varies by size.', '07-07-11 04-11-40'),
(57, '3', 'Boys Apparel', 'c:/wamp/tmpphpE18C.tmp', 'b5', '745', '612 Ivy League boys T-shirt', 'Striped shirt Half sleeves Patch on the front Contrast collar and sleeve hem Prices of the items may be different from those displayed on the product details page, where the price varies by size.', '07-07-11 04-13-36'),
(58, '3', 'Boys Apparel', 'c:/wamp/tmpphp86A2.tmp', 'b6', '879', 'Nike boys t-shirt', 'Solid color tee Sleeveless Round neck Printed logo \'64\' Prices of the items may be different from those displayed on the product details page, where the price varies by size', '07-07-11 04-14-18'),
(59, '3', 'Kids Toys', 'c:/wamp/tmpphp109.tmp', 'e2', '525', 'Wild Republic Rascals Dolphin 20 inch soft toy', 'Simple Cute fluffy and adorable Non Toxic Quality Fabric Ultra Squishy Stuffing 20 inches Hand Crafted', '08-07-11 06-00-04'),
(60, '3', 'Kids Toys', 'c:/wamp/tmpphp4C9D.tmp', 'e3', '2499', 'Little Mommy Play All Day', 'Doll', '09-07-11 06-58-08'),
(61, '3', 'Kids Toys', 'c:/wamp/tmpphpBD3B.tmp', 'e4', '1649', 'Road Storage Mat R', 'A fantastic backdrop for road adventures and a practical storage case in one Race your toy cars on the playmat then fold the playmat into a storage box and place your favourite toys in it Water resistant wipe-clean surface Age Range: From 3 years Social skills-This toy helps your child learn how to make friends and enjoy company. Imagination-This toy encourages your child to enjoy using their imagination.', '09-07-11 06-58-37'),
(62, '3', 'Kids Toys', 'c:/wamp/tmpphp3A19.tmp', 'e5', '549', 'Paper Straw Pets', 'Use your imagination to create your very own straw pets and a house for them too Age Range: From 3 years Creativity-This toy enables your child to express themselves artistically. Imagination-This toy encourages your child to enjoy using their imagination.', '09-07-11 06-59-09'),
(63, '3', 'Kids Toys', 'c:/wamp/tmpphpAA1.tmp', 'e6', '1999', 'Disney Rapunzel hair braider', 'Manually operated Rapunzel doll', '09-07-11 07-00-02'),
(65, '1', 'T-shirts', 'c:/wamp/tmpphpAC30.tmp', 'ts5', '1699.00 ', 'United Colors of Benetton Mens Half Sleeves Polo Striper T-Shirt', '', '09-07-11 07-06-11'),
(66, '1', 'T-shirts', 'c:/wamp/tmpphp4870.tmp', 'ts4', '1099', 'United Colors of Benetton Mens Half Sleeves Polo T-Shirt1', '', '09-07-11 07-07-57'),
(67, '1', 'T-shirts', 'c:/wamp/tmpphpBCF4.tmp', 'ts1', '1299', 'United Colors of Benetton Mens Half Sleeves Polo T-Shirt', '', '09-07-11 07-17-11'),
(68, '1', 'T-shirts', 'c:/wamp/tmpphp71C3.tmp', 'ts3', '1099', 'Spykar Mens Half Sleeve Collar Neck Flat Knit T-Shirt', '', '09-07-11 07-17-57'),
(69, '1', 'T-shirts', 'c:/wamp/tmpphpEC50.tmp', 'ts6', '749', 'Spykar Mens Half Sleeve Round Neck Printed T-Shirt', '', '09-07-11 07-18-29'),
(70, '1', 'T-shirts', 'c:/wamp/tmpphp643E.tmp', 'ts2', '999', 'Mustang Mens Circular Knit Prinetd Short Sleeves T-Shirt', '', '09-07-11 07-18-59'),
(74, '1', 'jeans', 'c:/wamp/tmpphpE5A1.tmp', 'jeans2', '2199', 'Mustang Mens Michigan Fit Denim', '', '09-07-11 07-23-55'),
(75, '1', 'jeans', 'c:/wamp/tmpphp74B7.tmp', 'jeans3', '1599', 'Flying Machine Mens Slim Fit Eddie Denim', '', '09-07-11 07-24-31'),
(76, '1', 'jeans', 'c:/wamp/tmpphp4188.tmp', 'jeans6', '2599', 'Levis Mens 504 Fit Tapered Denim', '', '09-07-11 07-25-24'),
(78, '1', 'Footwear', 'c:/wamp/tmpphp659D.tmp', 'shoe2', '4499', 'Enroute Men\'s Footwear', '', '09-07-11 07-29-55'),
(80, '1', 'Footwear', 'c:/wamp/tmpphp4515.tmp', 'shoe4', '3999', 'Enroute Men\'s Footwear', '', '09-07-11 07-30-52'),
(81, '1', 'Footwear', 'c:/wamp/tmpphpF4A5.tmp', 'shoe3', '1676', 'Franco Leone - Men\'s Shoes', '', '09-07-11 07-31-37'),
(82, '1', 'Footwear', 'c:/wamp/tmpphp6F9F.tmp', 'shoe5', '2195', 'Franco Leone - Men\'s Shoes', '', '09-07-11 07-32-09'),
(84, '1', 'watches', 'c:/wamp/tmpphpE3F6.tmp', 'w1', '3650', 'Polo Club Men\'s Watch', '', '09-07-11 07-37-01'),
(85, '1', 'watches', 'c:/wamp/tmpphp862F.tmp', 'w3', '1750', 'Polo Club Men\'s Watch', '', '09-07-11 07-56-16'),
(86, '1', 'watches', 'c:/wamp/tmpphp31E9.tmp', 'w4', '1750', 'Polo Club Men\'s Watch', '', '09-07-11 07-57-00'),
(87, '1', 'watches', 'c:/wamp/tmpphpE447.tmp', 'w5', '1569', 'Polo Club Men\'s Watch', '', '09-07-11 07-57-46'),
(88, '1', 'watches', 'c:/wamp/tmpphp5FCE.tmp', 'w6', '1999', 'Polo Club Men\'s Watch', '', '09-07-11 07-58-17'),
(89, '1', 'watches', 'c:/wamp/tmpphp26C5.tmp', 'w2', '1349', 'Polo Club Men\'s Watch', '', '09-07-11 07-59-08'),
(90, '1', 'Shorts', 'c:/wamp/tmpphp2F3F.tmp', 'sh1', '1799', 'Mustang Mens Casual Shorts', '', '09-07-11 08-02-27'),
(91, '1', 'Shorts', 'c:/wamp/tmpphp82D.tmp', 'sh3', '1299', 'Killer Mens 8 Pocket Checks Shorts', '', '10-07-11 11-16-33'),
(92, '1', 'Shorts', 'c:/wamp/tmpphp78FA.tmp', 'sh4', '1295', 'Wrangler Mens Spencer Denim Shorts', '', '10-07-11 11-17-02'),
(93, '1', 'Shorts', 'c:/wamp/tmpphpE4E7.tmp', 'sh6', '1299', 'Killer Mens 8 Pocket Checks Shorts', '', '10-07-11 11-17-30'),
(94, '1', 'Shorts', 'c:/wamp/tmpphp6EA0.tmp', 'sh5', '2195', 'Wrangler Mens Cargo Fit Checks Shorts', '', '10-07-11 11-18-05'),
(95, '1', 'Shorts', 'c:/wamp/tmpphpD6B6.tmp', 'sh2', '1699', 'Indian Terrain Mens Regular Fit Cargo Shorts', '', '10-07-11 11-18-32'),
(96, '2', 'Kurtas', 'C:wamp64	mpphpDC3.tmp', '4566', '48', 'gfg', '01-05-18 03-59-38', ''),
(97, '2', 'Kurtas', 'C:wamp64	mpphp9D5A.tmp', '4566', '48', 'gfg', '01-05-18 04-05-42', ''),
(98, '2', 'Kurtas', 'C:wamp64	mpphpAE1A.tmp', '4566', '48', 'gfg', '01-05-18 04-07-58', ''),
(99, '3', 'Girls Apparel', '', '45345', '545', 'saifulalh inserted !', '01-05-18 04-08-24', ''),
(100, '3', 'Girls Apparel', '16839476_382580742121928_1739431219_n_Perfect365.jpg', '877', '100', 'this is new one', NULL, '01-05-18 04-29-38'),
(101, '2', 'Kurtas', '16839476_382580742121928_1739431219_n_Perfect365.jpg', '5446', '5667', 'this is neew wooooo', NULL, '01-05-18 04-31-35'),
(102, '2', 'Churidar Suits', '16839476_382580742121928_1739431219_n_Perfect365.jpg', '546', '566', 'this is new aon ', NULL, '01-05-18 04-32-53'),
(109, '2', 'Churidar Suits', '16839476_382580742121928_1739431219_n_Perfect365.jpg', '778', '8776', 'hhh', NULL, '01-05-18 04-41-21'),
(110, '2', 'Churidar Suits', '16839476_382580742121928_1739431219_n_Perfect365.jpg', '502', '400', 'this is very new and will be', NULL, '01-05-18 04-43-12'),
(128, '3', 'Baby Apparel', '', '', '', '', NULL, '01-05-18 07-52-26'),
(129, '3', 'Baby Apparel', '', '', '', '', NULL, '01-05-18 07-55-26'),
(141, '3', 'Baby Apparel', '', '', '', '', NULL, '01-05-18 08-26-32'),
(143, '1', 'watches', '', '', '', '', NULL, '01-05-18 08-48-03'),
(144, '1', 'watches', '', '', '', '', NULL, '01-05-18 08-48-55'),
(145, '1', 'watches', '', '', '', '', NULL, '01-05-18 08-49-58'),
(146, '1', 'watches', '', '', '', '', NULL, '01-05-18 08-50-56'),
(147, '1', 'watches', '', '', '', '', NULL, '01-05-18 08-51-24'),
(148, '1', 'watches', '', '', '', '', NULL, '01-05-18 09-19-10'),
(166, '3', 'Baby Apparel', '', '', '', '', NULL, '01-05-18 11-15-02'),
(167, '3', 'Baby Apparel', '', '', '', '', NULL, '01-05-18 11-15-20'),
(168, '3', 'Baby Apparel', '', '', '', '', NULL, '01-05-18 11-40-36'),
(206, '3', 'Girls Apparel', 'Û²Û°Û±ÛµÛ°Û±Û°Û¸_Û±Û·ÛµÛ²Û°Û¶.jpg', '1578', '233333', '44444', NULL, '01-05-18 09-03-51');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `pname` varchar(30) NOT NULL,
  `itemno` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `ac_no` varchar(30) NOT NULL,
  `mob_no` varchar(30) NOT NULL,
  `add` varchar(300) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `order_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`pname`, `itemno`, `price`, `size`, `uname`, `ac_no`, `mob_no`, `add`, `bank`, `city`, `order_no`) VALUES
('Tresmode Ladies Pump Shoes', 'foot2', 'Rs1690', 'Medium', 'AzizAhma Sadeqi', 'ac234', '0799076140', 'Herat Afghanistan', 'AziziBank', 'Herat', 'ord228'),
('W Mix and match kurta ', 'k4', 'Rs1079', 'Medium', 'AzizAhma Sadeqi', 'ac345', '0799076140', 'Herat Afghanistan', 'AziziBank', 'Herat', 'ord326');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `title` varchar(6) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gen` varchar(30) NOT NULL,
  `id` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `add` varchar(300) NOT NULL,
  `city` varchar(30) NOT NULL,
  `coun` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`title`, `fname`, `lname`, `gen`, `id`, `pass`, `phone`, `add`, `city`, `coun`, `dob`) VALUES
('Mr.', 'Ankur', 'gupta', 'male', 'ankur@gmail.com', 'ankur123', '9414279845', 'Shanti Path Tilak Nagar', 'Jaipur', 'India', '13-11-89'),
('Ms.', 'Priya', 'gupta', 'female', 'priya@gmail.com', 'priya123', '9460380893', 'Patrakar Colany Jawahar Nagar', 'Delhi', 'India', '30-03-91');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `cat_id` varchar(30) NOT NULL,
  `subcategory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`cat_id`, `subcategory`) VALUES
('1', 'Casual Shirts'),
('1', 'jeans'),
('1', 'T-shirts'),
('1', 'Footwear'),
('1', 'Shorts'),
('1', 'watches'),
('2', 'Dresses'),
('2', 'Churidar Suits'),
('2', 'Kurtas'),
('2', 'Sandals'),
('2', 'Office Wear'),
('2', 'Artificial Jewellery'),
('3', 'Baby Apparel'),
('3', 'Girls Apparel'),
('3', 'Boys Apparel'),
('3', 'Kids Toys');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
