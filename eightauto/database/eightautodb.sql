-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2017 at 03:12 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eightautodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brandid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`brandid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandid`, `name`, `logo`, `created_date`, `modified_date`) VALUES
(1, 'Nissan', 'nisan.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Honda', 'Honda_logo.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Toyota', 'Toyota-logo.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'KIA', 'car_logo_PNG1649.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Mazda', 'car_logo_PNG1654.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Mercedes', 'car_logo_PNG1655.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'BMW', 'BMW_logo.png', '2017-03-08 14:28:00', '2017-03-08 14:28:00'),
(8, 'Chevrolet', 'car_logo_PNG1644.png', '2017-03-08 14:28:28', '2017-03-08 14:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `reply` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `reply`) VALUES
(1, 'test', 'test@gmail.com', '0955689444', 'test', 'Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', 'Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.'),
(2, 'soe soe', 'soe@gmail.com', '0955689444', 'something', 'Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur'),
(3, 'myint naing', 'myint@gmail.com', '09777777777', 'test', 'testing', 'Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. '),
(4, 'Tun Aung', 'tunaung@gmail.com', '0987567788', 'Toyota Price', 'Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', 'Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.                            '),
(5, 'Soe Naing', 'soenaing@gmail.com', '0977665432', 'testing', 'Want to me for a friendly chat and a cup of cofee? feel free to get in touch with us!', 'Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur.'),
(6, 'Moe Moe', 'moemoe@gmail.com', '0977665432', 'testing', 'Want to me for a friendly chat and a cup of cofee? feel free to get in touch with us!', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur.'),
(7, 'min min', 'minmin@gmail.com', '0977665432', 'Test', 'Want to me for a friendly chat and a cup of cofee? feel free to get in touch with us!', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. '),
(8, 'aye aye', 'aye@gmail.com', '0977665432', 'want buy', 'Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. ', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `name`, `email`, `password`, `phone`, `address`, `created_date`, `modified_date`) VALUES
(1, 'test', 'test@gmail.com', '1234', '09112233445', ' Hlaing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'zaw zaw', 'zawzaw@gmail.com', '1234', '0955689444', ' Tamwe', '2017-03-06 13:25:27', '2017-03-06 13:25:27'),
(3, 'myo myo', 'myo@gmail.com', '1234', '09777777777', 'Tamwe ', '2017-03-12 14:09:26', '2017-03-12 14:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `fueltype` varchar(255) NOT NULL,
  `enginepower` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `brandid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `name`, `transmission`, `fueltype`, `enginepower`, `color`, `price`, `brandid`, `photo`, `description`, `created_date`, `modified_date`) VALUES
(1, 'Nissan Leaf 2017', 'Manual', 'Petrol', '2400', 'Brown', 4800, 1, 'nissan-leaf.png', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi  ut aliquip exea commodo consequat.  ', '2017-02-27 15:51:31', '2017-03-09 17:58:58'),
(2, 'Honda Fit ', 'Auto', 'Petrol', '1300cc', 'Black', 6000, 2, 'Honda-Fit-2017.png', 'Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi  ut aliquip exea commodo consequat.', '2017-02-27 16:12:34', '2017-02-27 17:38:49'),
(3, 'Toyota Caldina', 'Auto', 'Petrol', '2000cc', 'White', 4600, 3, 'first-drive-toyota-auris-touring-sports-yahoo-cars_1.png', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.  ', '2017-03-06 10:26:36', '2017-03-09 17:58:25'),
(4, 'KIA', 'Manual', 'Petrol', '2400cc', 'Red', 6500, 4, 'PNGPIX-COM-Kia-Sportspace-White-Car-PNG-Image.png', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-06 10:31:41', '2017-03-06 10:31:41'),
(5, 'Mazda', 'Manual', 'Petrol', '4000', 'Grey', 6800, 5, 'PNGPIX-COM-Mazda-Club-Sport-6-Car-PNG-Image.png', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.   ', '2017-03-06 14:29:27', '2017-03-09 17:57:42'),
(6, 'BMW Turismo', 'Manual', 'Petrol', '4000cc', 'Red', 8000, 7, 'bmw_PNG1690.png', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.    ', '2017-03-08 15:17:24', '2017-03-12 00:40:48'),
(7, 'Chevrolet Spark', 'Manual', 'Petrol', '4000cc', 'Red', 8000, 8, 'chevrolet.png', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.     ', '2017-03-09 16:39:13', '2017-03-12 00:38:20'),
(8, 'Chevrolet Corvette', 'Auto', 'Petrol', '4000cc', 'Grey', 7000, 8, '7.2011-chevrolet-corvette-z06-rf-romeo-ferraris.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat. ', '2017-03-20 12:34:10', '2017-03-20 12:34:10'),
(9, 'Chevrolet Callaway', 'Auto', 'Petrol', '4000cc', 'Orange', 4500, 8, '4.2007-callaway-c16.jpg', 'Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-20 13:00:43', '2017-03-20 13:00:43'),
(10, 'Chevrolet Corvette Grand Sport', 'Auto', 'Petrol', '4500cc', 'White', 6000, 8, '1.1963-chevrolet-corvette-grand-sport-roadster-6.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.  ', '2017-03-20 13:41:37', '2017-03-20 16:12:36'),
(11, 'Chevrolet Camaro Geigercars', 'Auto', 'Diesel', '3000cc', 'Black', 3500, 8, '8.2010-chevrolet-camaro-geigercars-kompressor.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.\r\n\r\nDuis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.\r\n ', '2017-03-20 16:07:58', '2017-03-20 16:12:57'),
(12, 'Chevrolet Corvette Stingray', 'Auto', 'Diesel', '3500cc', 'Yellow', 4200, 8, '3.1969-chevrolet-corvette-stingray-zl-1-c3.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-20 16:11:38', '2017-03-20 16:11:38'),
(13, 'BMW X5 Le Mans', 'Auto', 'Diesel', '5000cc', 'Grey', 59000, 7, '2. BMW X5 Le Mans Concept $590,000.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat. ', '2017-03-20 16:23:53', '2017-03-21 09:32:14'),
(14, 'BMW M6 G-Power Hurricane ', 'Auto', 'Diesel', '5000cc', 'Green', 450000, 7, '3. BMW M6 G-Power Hurricane CS $450,000.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-20 16:39:11', '2017-03-20 16:39:11'),
(15, 'BMW X6 M G-Power Typhoon', 'Auto', 'Diesel', '4500cc', 'Black', 440000, 7, '4. BMW X6 M G-Power Typhoon WideBody $440,000.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat. ', '2017-03-20 16:42:29', '2017-03-20 16:49:48'),
(16, 'BMW X6 G-Power Typhoon S', 'Auto', 'Diesel', '4000cc', 'Red', 440000, 7, '5. BMW X6 G-Power Typhoon S $440,000.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat. ', '2017-03-21 09:23:33', '2017-03-21 09:31:30'),
(17, 'BMW M5 Touring G-Power ', 'Auto', 'Petrol', '4000cc', 'Brown', 410000, 7, '7. BMW M5 Touring G-Power Hurricane RS $410,000.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat. ', '2017-03-21 09:27:44', '2017-03-21 09:29:58'),
(18, 'Honda hsv gt500 Super gt', 'Auto', 'Petrol', '5000cc', 'Black', 60000, 2, '1.2010-honda-hsv-010-gt500-super-gt.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat. ', '2017-03-21 09:39:38', '2017-03-21 09:41:12'),
(19, 'Honda nsx', 'Auto', 'Petrol', '4000cc', 'Red', 300000, 2, '2.2016-honda-nsx.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 09:43:47', '2017-03-21 09:43:47'),
(20, 'Honda s2000', 'Auto', 'Diesel', '4000cc', 'White', 80000, 2, '4.2009-honda-s2000-ultimate-edition-2.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 09:51:21', '2017-03-21 09:51:21'),
(21, 'Honda Civic', 'Auto', 'Diesel', '4000cc', 'Grey', 90000, 2, '7.2007-honda-civic-type-r-fn2.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 09:55:50', '2017-03-21 09:55:50'),
(22, 'Honda s2000', 'Auto', 'Petrol', '4000cc', 'Yellow', 70000, 2, '5.1999-honda-s2000-10.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 09:59:04', '2017-03-21 09:59:04'),
(23, 'KIA Quoris', 'Auto', 'Diesel', '4500cc', 'Grey', 300000, 4, '2.2015-kia-quoris-9.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 10:04:49', '2017-03-21 10:04:49'),
(24, 'KIA Cadenza front three quarter', 'Auto', 'Diesel', '4500cc', 'White', 200000, 4, '7.2017-Kia-Cadenza-front-three-quarter-13-e1471470637542.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 10:12:41', '2017-03-21 10:12:41'),
(25, 'KIA Sedona Front View', 'Auto', 'Diesel', '4500cc', 'Grey', 400000, 4, '8.2015-Kia-Sedona-Front-View.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat. ', '2017-03-21 11:00:09', '2017-03-21 11:02:19'),
(26, 'KIA Cadenza', 'Auto', 'Petrol', '4500cc', 'Black', 300000, 4, '7.2017 Kia Cadenza.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 11:06:31', '2017-03-21 11:06:31'),
(27, 'KIA Stinger', 'Auto', 'Petrol', '4000cc', 'Silver', 90000, 4, '1.2017-kia-stinger-gt-3.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 11:13:40', '2017-03-21 11:13:40'),
(28, 'Mazda Furai Concept', 'Auto', 'Petrol', '6000cc', 'Black', 550000, 5, '1.2008-mazda-furai-concept-5.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 11:19:20', '2017-03-21 11:19:20'),
(29, 'Mazda mx5 superlight concept', 'Auto', 'Diesel', '4000cc', 'White', 59000, 5, '4.2009-mazda-mx-5-superlight-concept.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 11:23:04', '2017-03-21 11:23:04'),
(30, 'Mazda Cosmo Sport', 'Auto', 'Diesel', '3500cc', 'Blue', 200000, 5, '5.1967-mazda-cosmo-sport-l10a-8.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 11:25:39', '2017-03-21 11:25:39'),
(31, 'Mazda mx', 'Auto', 'Diesel', '3500cc', 'Red', 150000, 5, '8.2015-mazda-mx-5-4.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 11:28:52', '2017-03-21 11:28:52'),
(32, 'Mazda luce', 'Auto', 'Petrol', '3500cc', 'White', 300000, 5, '6.1969-mazda-luce-r130-coupe-3.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 11:34:59', '2017-03-21 11:34:59'),
(33, 'Mercedes Benz roadster mille ', 'Auto', 'Petrol', '5000cc', 'Silver', 550000, 6, '1.1955-mercedes-benz-300-slr-roadster-mille-miglia-w196s-2.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat. ', '2017-03-21 11:40:15', '2017-03-21 11:40:53'),
(34, 'Mercedes benz mclaren', 'Auto', 'Diesel', '5000cc', 'Red', 400000, 6, '2.2011-mercedes-benz-slr-mclaren-999-red-gold-dream-ueli-anliker.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 11:42:21', '2017-03-21 11:42:21'),
(35, 'Mercedes benz concept iaa', 'Auto', 'Diesel', '4000cc', 'Grey', 400000, 6, '3.2015-mercedes-benz-concept-iaa.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 12:07:24', '2017-03-21 12:07:24'),
(36, 'Mercedes benz roadster', 'Auto', 'Diesel', '4000cc', 'Grey', 440000, 6, '4.2002-mercedes-benz-clk-gtr-amg-roadster-2.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 12:14:35', '2017-03-21 12:14:35'),
(37, 'Mercedes benz Super sport', 'Auto', 'Diesel', '4000cc', 'White', 410000, 6, '5.2002-mercedes-benz-clk-gtr-amg-super-sport.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 12:31:48', '2017-03-21 12:31:48'),
(38, 'Mercedes benz vision slr', 'Auto', 'Petrol', '4500cc', 'Silver', 440000, 6, '8.1999-mercedes-benz-vision-slr-concept-7.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 12:35:11', '2017-03-21 12:35:11'),
(39, 'Nissan r390', 'Auto', 'Diesel', '4000cc', 'Blue', 300000, 1, '1.1997-nissan-r390-gt1-4.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 15:11:05', '2017-03-21 15:11:05'),
(40, 'Nissan gt r nismo', 'Auto', 'Petrol', '4500cc', 'White', 440000, 1, '3.2013-nissan-gt-r-nismo-gt3.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 15:14:03', '2017-03-21 15:14:03'),
(41, 'Nissan switzer red katana', 'Auto', 'Diesel', '3500cc', 'Red', 300000, 1, '5.2013-nissan-gt-r-switzer-r1k-x-red-katana.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 15:20:59', '2017-03-21 15:20:59'),
(42, 'Nissan alpha', 'Auto', 'Petrol', '3000cc', 'Black', 200000, 1, '6.2011-nissan-gt-r-ams-alpha-12.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 15:24:11', '2017-03-21 15:24:11'),
(43, 'Nissan juke', 'Auto', 'Diesel', '3500cc', 'Black', 200000, 1, '7.2011-nissan-juke-r.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 15:26:00', '2017-03-21 15:26:00'),
(44, 'Toyota alessandro volta', 'Auto', 'Diesel', '4000cc', 'Silver', 300000, 3, '1.2004-toyota-alessandro-volta-concept-7.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat. ', '2017-03-21 15:33:55', '2017-03-21 15:35:38'),
(45, 'Toyota road version', 'Auto', 'Diesel', '4500cc', 'Red', 440000, 3, '2.1998-toyota-gt-one-road-version-ts020.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 15:37:37', '2017-03-21 15:37:37'),
(46, 'Toyota crown majesta', 'Auto', 'Diesel', '4000CC', 'Silver', 410000, 3, '5.2013-toyota-crown-majesta.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 15:40:23', '2017-03-21 15:40:23'),
(47, 'Toyota century', 'Auto', 'Petrol', '3500cc', 'Black', 300000, 3, '4.1997-toyota-century.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '2017-03-21 15:42:52', '2017-03-21 15:42:52'),
(48, 'Toyota land cruiser', 'Auto', 'Diesel', '4500cc', 'Brown', 440000, 3, '8.2007-toyota-land-cruiser-v8-uzj200.jpg', ' Duis aute irure dolor inreprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', '2017-03-21 15:45:00', '2017-03-25 15:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `daddress` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `daddress`, `status`, `created_date`, `modified_date`) VALUES
(1, 'test', 'test@gmail.com', '09112233445', '  Hlaing ', '  Bago', 0, '2017-03-06 11:07:25', '2017-03-06 13:24:06'),
(2, 'zaw zaw', 'zawzaw@gmail.com', '0955689444', '  Tamwe ', '  Tamwe', 0, '2017-03-06 13:25:49', '2017-03-06 13:25:49'),
(3, 'test', 'test@gmail.com', '09112233445', '  Hlaing ', '  Bago', 0, '2017-03-07 11:14:35', '2017-03-07 11:14:35'),
(4, 'test', 'test@gmail.com', '09112233445', '  Hlaing ', '  ', 0, '2017-03-08 14:08:39', '2017-03-12 14:19:40'),
(5, 'myo myo', 'myo@gmail.com', '09777777777', ' Tamwe  ', '  Hlaing', 0, '2017-03-12 14:11:08', '2017-03-19 14:37:23'),
(6, 'test', 'test@gmail.com', '09112233445', '  Hlaing ', '  yangon', 0, '2017-03-24 20:41:40', '2017-03-25 12:50:16'),
(7, 'test', 'test@gmail.com', '09112233445', '  Hlaing ', '  Hlaing', 0, '2017-04-02 12:10:36', '2017-04-02 12:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `model_id`, `order_id`, `qty`) VALUES
(1, 2, 1, 2),
(2, 4, 1, 1),
(3, 1, 2, 1),
(4, 2, 2, 1),
(5, 4, 3, 2),
(6, 5, 4, 1),
(7, 6, 5, 1),
(8, 5, 5, 1),
(9, 13, 6, 1),
(10, 48, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `email`, `password`, `usertype`, `created_date`, `modified_date`) VALUES
(1, 'admin', 'admin@gmail.com', '1234', 'Administrator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'editor1', 'editor1@gmail.com', '1234', 'Editor', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
