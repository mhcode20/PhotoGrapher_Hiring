-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 04:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `role`, `pass`) VALUES
(0, 'MH Hridoy', 'admin@test.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `demoimg`
--

CREATE TABLE `demoimg` (
  `id` int(10) NOT NULL,
  `pg` varchar(100) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demoimg`
--

INSERT INTO `demoimg` (`id`, `pg`, `img`) VALUES
(1, 'mhcdfdode20@gmail.com', 'fd0bc3624d86259a395539a015622febmichael-pointner-9B0r-IHVTfg-unsplash.jpg'),
(2, 'mhcdfdode20@gmail.com', 'cfdd85a9394624f938cd29b55728e50amailchimp-Vc2dD4l57og-unsplash.jpg'),
(3, 'mhcdfdode20@gmail.com', '53f5a14f36bd697e863f9ecfc1435baejantine-doornbos-xt9tb6oa42o-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `photographer` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user`, `photographer`, `status`) VALUES
(1, 'mhcode20@gmail.com', 'mhcode20@gmail.com', 'not paid'),
(2, 'mhcode20@gmail.com', 'sdkjflskd@dlkjf.com', 'not paid');

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

CREATE TABLE `photographers` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `img` varchar(500) NOT NULL,
  `price` int(10) NOT NULL,
  `vr` varchar(500) NOT NULL,
  `cv` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographers`
--

INSERT INTO `photographers` (`id`, `name`, `email`, `address`, `phone`, `type`, `pass`, `img`, `price`, `vr`, `cv`) VALUES
(15, 'MH Hridoy', 'mhcode20@gmail.com', 'Hapunia, sherpur, bogra', '+8801710826032', 'Wedding Photographer', '45643564', '7f3a7ab3eebf252607454be4c54cd3d2gg.jpg', 2000, '', ''),
(16, 'Ok Test', 'sdkjflskd@dlkjf.com', 'adasd, aslf, lksdfjslsdlfk', '01010101010', 'journalistic Photographer', '11223456', '4a145947fcfadb757f2cff7138b2ab10cota.png', 2500, '', ''),
(17, 'MH Hridoy', 'test@test.com', 'Hapunia, sherpur, bogra', '+8801710826032', 'artistic Photographer', '123456', '5840b89aa2cb45520d17a49cf3d66240michael-pointner-9B0r-IHVTfg-unsplash.jpg', 12121, '', ''),
(18, 'MH Hridoy', 'mhcdfdode20@gmail.com', 'Hapunia, sherpur, bogra', '+8801710826032', 'Wedding Photographer', '123456', 'dc0c8805d8ca177b2e7b4634798cd58frr.jpg', 2000, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `pass`) VALUES
(1, '', '', 0, 0),
(2, 'MH Hridoy', 'mhcode20@gmail.com', 1710826032, 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demoimg`
--
ALTER TABLE `demoimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographers`
--
ALTER TABLE `photographers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demoimg`
--
ALTER TABLE `demoimg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photographers`
--
ALTER TABLE `photographers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
