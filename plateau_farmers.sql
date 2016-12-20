-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2016 at 12:20 PM
-- Server version: 5.6.28-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `plateau_farmers`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE IF NOT EXISTS `farmers` (
`id` int(10) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `othernames` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `number_of_hectares` varchar(200) NOT NULL,
  `land_texture` varchar(200) NOT NULL,
  `number_of_acres` varchar(200) NOT NULL,
  `product_yield` varchar(200) NOT NULL,
  `geolocation` varchar(200) NOT NULL,
  `earning` varchar(200) NOT NULL,
  `challenges` varchar(200) NOT NULL,
  `farming_method` varchar(200) NOT NULL,
  `LGA_id` int(10) NOT NULL,
  `ward_id` int(10) NOT NULL,
  `farmcat_id` int(10) NOT NULL,
  `farmtype_id` int(10) NOT NULL,
  `barcode` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `surname`, `othernames`, `picture`, `address`, `phone_number`, `number_of_hectares`, `land_texture`, `number_of_acres`, `product_yield`, `geolocation`, `earning`, `challenges`, `farming_method`, `LGA_id`, `ward_id`, `farmcat_id`, `farmtype_id`, `barcode`) VALUES
(1, 'mad', 'kill', 'ab.jpg', 'jos', '099876543', '20', 'Sandy', '4', '100 bags', 'bassa', '2mil', 'inadaquate man', 'mechanized', 2, 4, 1, 5, '017202857837'),
(2, 'sly', 'dung', 'dc.jpg', 'mangu', '0989876666667', '45', 'sandy', '10', '70', 'mangu', '7809876', 'insufficient funds', 'local', 3, 1, 2, 1, '226439456045'),
(3, 'Shekina', 'Deldy', '1461008745_shekinah smile.jpg', 'Lamingo', '0875435', '132435647', 'loamy', '34557', '600', 'lamingo', '800000', 'insufficient fertilizer', 'mechanized', 4, 8, 1, 5, '123456789012');

-- --------------------------------------------------------

--
-- Table structure for table `farming_category`
--

CREATE TABLE IF NOT EXISTS `farming_category` (
`id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farming_category`
--

INSERT INTO `farming_category` (`id`, `name`) VALUES
(1, 'Cash Crops'),
(2, 'Animal');

-- --------------------------------------------------------

--
-- Table structure for table `farm_type`
--

CREATE TABLE IF NOT EXISTS `farm_type` (
`id` int(10) NOT NULL,
  `description` varchar(200) NOT NULL,
  `farmcat_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farm_type`
--

INSERT INTO `farm_type` (`id`, `description`, `farmcat_id`) VALUES
(1, 'cattle', 2),
(2, 'rice', 1),
(3, 'rabbit', 2),
(4, 'maize', 1),
(5, 'potato', 1),
(6, 'tomato', 1),
(7, 'poultry', 2);

-- --------------------------------------------------------

--
-- Table structure for table `localgov`
--

CREATE TABLE IF NOT EXISTS `localgov` (
`id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `localgov`
--

INSERT INTO `localgov` (`id`, `name`) VALUES
(1, 'Barkin Ladi'),
(2, 'Bassa'),
(3, 'Bokkos'),
(4, 'Jos East'),
(5, 'Jos North'),
(6, 'Jos South'),
(7, 'Kanam'),
(8, 'Kanke'),
(9, 'Langtang North'),
(10, 'Langtang South'),
(11, 'Mangu'),
(12, 'Mikang'),
(13, 'Pankshin'),
(14, 'Quaan Pan'),
(15, 'Riyom'),
(16, 'Shendam'),
(17, 'Wase');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE IF NOT EXISTS `ward` (
`id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `LGA_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`id`, `name`, `LGA_id`) VALUES
(1, 'A', 1),
(2, 'B', 1),
(3, 'C', 2),
(4, 'D', 2),
(5, 'E', 2),
(6, 'F', 3),
(7, 'G', 3),
(8, 'H', 4),
(9, 'fdgh', 4),
(10, 'Fgfhj', 5),
(11, 'rtyu', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farming_category`
--
ALTER TABLE `farming_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farm_type`
--
ALTER TABLE `farm_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `localgov`
--
ALTER TABLE `localgov`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `farming_category`
--
ALTER TABLE `farming_category`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `farm_type`
--
ALTER TABLE `farm_type`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `localgov`
--
ALTER TABLE `localgov`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
