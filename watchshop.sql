-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 07:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watchshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'asad', 'asad12345'),
(2, 'waleed', 'waleed12345');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float(24,2) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `productInStock` tinyint(1) NOT NULL,
  `product_discount` float(3,2) DEFAULT NULL,
  `product_sizes` varchar(255) DEFAULT NULL,
  `product_detail` mediumtext DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_quantity` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_code`, `productInStock`, `product_discount`, `product_sizes`, `product_detail`, `product_image`, `product_quantity`) VALUES
(11, 'CASIO G-Shock 200G', 360.00, 'GSTB200G-2A', 10, 5.00, '30 34 36', 'New G-STEEL model that feature Carbon Core Guard structure. The case is made of fine resin that incorporates carbon fiber for light weight along with rigidity that is superior to that of resin alone.\r\n\r\nIn addition to features that prevent damage and deformation due to impact, G-STEEL Series models also boast compact* configurations. Even though these models have dynamic wide faces, they are also designed to provide a comfortable fit on the wrist. The light-on-dark LCD contributes to both functionality and face design.\r\n\r\nAll of this and more adds up to a powerful and tough-looking design.\r\n\r\n*Compared to the GST-B100 Series, the 12-6H is 4.8 mm thinner, while the 3-9H is 4.6 mm thinner.', 'CASIO G-Shock 200G.png', 10),
(12, 'CASIO G-Shock 300SD', 400.00, 'GSTB300SD-1A', 20, 7.00, '30 34 36', 'Introducing the new rugged style of G-STEEL models that feature Carbon Core Guard structures. These new models adopt tough G-SHOCK styling with a disk indicator at 6 o’clock that shows the current mode and charge level, and a front button that completes the overall rugged look. The disk, a round graphic digital display between 1 and 2 oclock, and a digital display as 12 oclock add to both functionality and looks. The GSTB300S model comes with a resin band.', 'CASIO G-Shock 300SD.png', 20),
(13, 'CASIO 5600G', 180.00, 'GMS5600G-7', 13, 0.00, '30 34', 'Introducing the new compact G-SHOCK models that are great choice for women who prefer the active G-SHOCK styling. This iconic square design of the 5600 Series is now equipped with a metal-covered bezel. All the shock resistance of the GM5600 in a smaller size for a lightweight and comfortable fit to the wrist. These designs blends elegance and casualness in ways that make them go great with street fashions. The case and bezel have mirror finishes that enhance the texture of the metal. This lineup provides a choice of four colors, including two pink gold models, a champagne gold model and, a silver model.', 'CASIO 5600G.png', 13),
(14, 'CASIO G-Shock 1000XD', 1000.00, 'MTGB1000XB-1A', 16, 9.99, '36 40 44', 'The MTG-B1000XBD and B1000XB are based on the MTG-B1000, which has a mid-sized case for enhanced wearability while delivering advanced functionality, including smartphone connectivity and solar-powered radio control. \r\nThe red-accented MTG-B1000XBD comes with a layered composite band made with durable fine resin parts', 'CASIO G-Shock 1000XD.png', 16),
(15, 'CASIO 100H', 400.00, 'MWD100H-1AV', 35, 2.00, '36 40 44 46', 'Introducing the new metal bezel MWD100H series. These new heavy duty digital timepieces come equipped with a 10 year battery, large digital display and on a black resin band.', 'CASIO 100H.png', 35),
(16, 'CASIO 305', 45.00, 'EF305-1AV', 50, 0.00, '30 34 36', 'The timeless style of a 3-hand analog, combined with the sophisticated look of a multi-dial watch. The 3 dials display day, date and hour so there’s no need to search for a calendar. Black Watch with a Resin Band.', 'CASIO 305.png', 50),
(17, 'CASIO 168WE', 71.00, 'A168WEGB-1BVT', 44, 9.99, '30 34', 'Casio true style vintage digital watch, water resistant, alarm, 1/100-second stopwatch and Electro-luminescent backlight.\r\nStraight from the Casio Vintage Collection comes a timepiece that never goes out of style. The B640 combines style with features Casio is known for such as an EL backlight and a 1/100th second stopwatch. This timepiece is the perfect complement to any outfit.', 'CASIO 168WE.png', 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_name` (`admin_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
