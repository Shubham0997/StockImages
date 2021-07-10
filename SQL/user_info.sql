-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 02:39 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `loc` varchar(200) NOT NULL,
  `type` varchar(250) NOT NULL,
  `size` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`F_name`, `L_name`, `Username`, `Email`, `Password`, `name`, `loc`, `type`, `size`) VALUES
('Shubham', 'Sharma', 'Shubham0997', 'Shubham49412@gmail.com', 'Shubham0997', 'DSC_0069.jpg', 'C:xampp	mpphp71E6.tmp', 'image/jpeg', '29573601');

-- --------------------------------------------------------

--
-- Table structure for table `user_image`
--

CREATE TABLE `user_image` (
  `Username` varchar(2000) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `ImageDescription` varchar(2000) NOT NULL,
  `ImageCategory` varchar(2000) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `loc` varchar(2000) NOT NULL,
  `type` varchar(2000) NOT NULL,
  `size` varchar(2000) NOT NULL,
  `indexNo` int(255) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_image`
--
ALTER TABLE `user_image`
  ADD PRIMARY KEY (`indexNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_image`
--
ALTER TABLE `user_image`
  MODIFY `indexNo` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
