-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 10:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zippysusedautos`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `class` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class`) VALUES
(1, 'Utility'),
(2, 'Economy'),
(3, 'Luxury'),
(4, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `makes`
--

CREATE TABLE `makes` (
  `make_id` int(11) NOT NULL,
  `make` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makes`
--

INSERT INTO `makes` (`make_id`, `make`) VALUES
(1, 'Chevy'),
(2, 'Ford'),
(3, 'Cadillac'),
(4, 'Nissan'),
(5, 'Hyundai'),
(6, 'Dodge'),
(7, 'Infiniti'),
(8, 'Buick');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `type_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_id`, `type`) VALUES
(1, 'SUV'),
(2, 'Truck'),
(3, 'Sedan'),
(4, 'Coupe');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `model` varchar(45) NOT NULL,
  `price` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `make_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `year`, `model`, `price`, `type_id`, `class_id`, `make_id`) VALUES
(1, 2009, 'Suburban', 18999, 1, 1, 1),
(2, 2011, 'F150', 22999, 2, 1, 2),
(3, 2012, 'Escalade', 24999, 1, 3, 3),
(4, 2018, 'Rogue', 34999, 1, 2, 4),
(5, 2016, 'Sonata', 29999, 3, 2, 5),
(6, 2020, 'Challenger', 49999, 4, 4, 6),
(7, 2015, 'Tahoe', 26999, 1, 1, 1),
(8, 2017, 'QX80', 54999, 1, 3, 7),
(9, 2015, 'Fusion', 19999, 3, 2, 2),
(10, 2014, 'XTS', 19999, 3, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `makes`
--
ALTER TABLE `makes`
  ADD PRIMARY KEY (`make_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `make_id` (`make_id`),
  ADD KEY `type_id` (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `makes`
--
ALTER TABLE `makes`
  MODIFY `make_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  ADD CONSTRAINT `vehicles_ibfk_2` FOREIGN KEY (`make_id`) REFERENCES `makes` (`make_id`),
  ADD CONSTRAINT `vehicles_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `types` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
