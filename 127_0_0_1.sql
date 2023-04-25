-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 08:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vysoxnyu_sql`
--
CREATE DATABASE IF NOT EXISTS `vysoxnyu_sql` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vysoxnyu_sql`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `name` varchar(600) NOT NULL,
  `password` varchar(666) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin@gmail.com', '123'),
(2, 'harshit@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `sno` int(200) NOT NULL,
  `image` varchar(600) NOT NULL,
  `title` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`sno`, `image`, `title`) VALUES
(1, '150168.jpg', 'Dummy'),
(2, 'b3.jpg', 'Dummy 1'),
(3, 'mountain-landscape-lake-photography-335.jpg', 'Dummy'),
(4, 'wp8738935.jpg', 'Dummy');

-- --------------------------------------------------------

--
-- Table structure for table `categeory`
--

CREATE TABLE `categeory` (
  `sno` int(200) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categeory`
--

INSERT INTO `categeory` (`sno`, `name`, `image`, `code`) VALUES
(1, 'Dummy', '900993.jpg', 'HJ299557'),
(2, 'Dummy', 'asset-3.jpg', 'HJ6801841'),
(3, 'Dummy2022', 'b4.jpg', 'HJ6453632'),
(5, 'Dummy2022', 'DSC_0795.JPG', 'HJ2098144');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(200) NOT NULL,
  `name` varchar(600) NOT NULL,
  `email` varchar(666) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `subject` varchar(400) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `mobile`, `subject`, `message`, `date`) VALUES
(1, 'jhgh', 'gfgf@ghgh.c', '9897744444', 'hjjj', 'lllllllllllll', '23-10-2022'),
(3, 'admin@gmail.com', 'abc@gmail.com', '555555555542', 'gfg', 'ty', '13-11-2022'),
(4, 'admin@gmail.com', 'abc@gmail.com', '555555555542', 'gfg', 'ty', '13-11-2022'),
(5, 'admin@gmail.com', 'abc@gmail.com', '555555555542', 'gfg', 'ty', '13-11-2022'),
(6, 'harshit', 'abc@gmail.com', '4424566666', 'contact', 'hello', '13-11-2022'),
(7, 'harshit', 'abc@gmail.com', '4424566666', 'contact', 'hello', '13-11-2022'),
(8, 'harshit', 'abc@gmail.com', '4424566666', 'contact', 'hello', '13-11-2022');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `sno` int(200) NOT NULL,
  `c_code` varchar(600) NOT NULL,
  `c_name` varchar(600) NOT NULL,
  `name` varchar(600) NOT NULL,
  `image` varchar(666) NOT NULL,
  `detail` varchar(2000) NOT NULL,
  `video` varchar(666) NOT NULL,
  `video1` varchar(600) NOT NULL,
  `video2` varchar(600) NOT NULL,
  `video3` varchar(666) NOT NULL,
  `video4` varchar(666) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`sno`, `c_code`, `c_name`, `name`, `image`, `detail`, `video`, `video1`, `video2`, `video3`, `video4`) VALUES
(1, 'HJ2098144', 'Dummy2022', 'Dummy2022', '1.jpg', 'detail', 'GL41qPQJ5N4', 'GL41qPQJ5N4', 'txXXRMfp12w', 'txXXRMfp12w', 'txXXRMfp12w'),
(2, 'HJ299557', 'Dummy2022', 'Dummy2022', '1.jpg', 'detail', 'GL41qPQJ5N4', 'GL41qPQJ5N4', 'txXXRMfp12w', 'txXXRMfp12w', 'txXXRMfp12w'),
(3, 'HJ6453632', 'Dummy2022', 'Dummy2022', '1.jpg', 'detail', 'GL41qPQJ5N4', 'GL41qPQJ5N4', 'txXXRMfp12w', 'txXXRMfp12w', 'txXXRMfp12w');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sno` int(200) NOT NULL,
  `name` varchar(600) NOT NULL,
  `rno` varchar(600) NOT NULL,
  `email` varchar(600) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `name`, `rno`, `email`, `mobile`, `message`) VALUES
(1, 'harshit jangid', '2551114544', 'harshit@gmail.com', '8278698501', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `categeory`
--
ALTER TABLE `categeory`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categeory`
--
ALTER TABLE `categeory`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
