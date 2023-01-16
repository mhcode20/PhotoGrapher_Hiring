-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 07:08 PM
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
(3, 'mhcdfdode20@gmail.com', '53f5a14f36bd697e863f9ecfc1435baejantine-doornbos-xt9tb6oa42o-unsplash.jpg'),
(4, 'adminsdf@test.com', 'd201ff2b27f6012b0729e54e69c56871michael-pointner-9B0r-IHVTfg-unsplash.jpg'),
(5, 'adminsdf@test.com', 'ed52dccaf10b495118870926aa9adbf1mailchimp-Vc2dD4l57og-unsplash.jpg'),
(6, 'adminsdf@test.com', '54b5851802c7d667d54506baecb61f3cjantine-doornbos-xt9tb6oa42o-unsplash.jpg'),
(7, 'admin@test.com', '28ce8fa477e646a0e5ac46e0be487629mailchimp-Vc2dD4l57og-unsplash.jpg'),
(8, 'admin@test.com', '24ffffd3d81571f29df319fb160a5e47jantine-doornbos-xt9tb6oa42o-unsplash.jpg'),
(9, 'admin@test.com', '6596fe3efe25114bb1ad309311324bf2michael-pointner-9B0r-IHVTfg-unsplash.jpg'),
(10, 'admin@test.com', 'c1842d36e7d73c6aba34ef8a128f1513mailchimp-Vc2dD4l57og-unsplash.jpg'),
(11, 'admin@test.com', '0b9e1d4bb128830844e5be90d9e8bfb1jantine-doornbos-xt9tb6oa42o-unsplash.jpg'),
(12, 'admin@test.com', '0bb86ff32ae36f24846cdb7c272f5cdfmichael-pointner-9B0r-IHVTfg-unsplash.jpg'),
(13, 'admsdfsdfin@test.com', '6eb521e0f5db099e02c16b38cff11e7cmailchimp-Vc2dD4l57og-unsplash.jpg'),
(14, 'admsdfsdfin@test.com', 'c825bb086bb4ba14edcb11fb41afa12fjantine-doornbos-xt9tb6oa42o-unsplash.jpg'),
(15, 'admsdfsdfin@test.com', 'da24f8ff4da65487c82e382060fc6a44michael-pointner-9B0r-IHVTfg-unsplash.jpg');

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
(18, 'MH Hridoy', 'mhcdfdode20@gmail.com', 'Hapunia, sherpur, bogra', '+8801710826032', 'Wedding Photographer', '123456', 'dc0c8805d8ca177b2e7b4634798cd58frr.jpg', 2000, 'https://www.youtube.com/embed/v6CC6c7YqCQ', 'testvc'),
(19, 'MH Hridoy', 'adminsdf@test.com', 'Hapunia, sherpur, bogra', '+8801710826032', 'artistic Photographer', 'admin', '680f362c7115835c0f1e7bab36b8ab59mailchimp-Vc2dD4l57og-unsplash.jpg', 2000, '', ''),
(20, 'MH Hridoy', 'admin@test.com', 'Hapunia, sherpur, bogra', '+8801710826032', 'Wedding Photographer', '1234', 'e0bbc7fabdac8021779a9a564517c92501710826032.0.jpg', 2000, '', 'https://www.youtube.com/embed/E1twOs3qa9s'),
(21, 'MH Hridoy', 'admsdfsdfin@test.com', 'Hapunia, sherpur, bogra', '+8801710826032', 'Wedding Photographer', 'admin', '57dac4828e6c4ac78ad60a52e9bd3eea01710826032.0.jpg', 2000, 'https://www.youtube.com/embed/E1twOs3qa9s', 'https://www.youtube.com/embed/E1twOs3qa9s');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(100) NOT NULL,
  `pg_email` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `pg_email`, `u_email`, `rating`) VALUES
(1, 'admsdfsdfin@test.com', 'mhcode20@gmail.com', 4),
(2, 'admsdfsdfin@test.com', 'mhcode20@gmail.com', 5),
(3, 'admsdfsdfin@test.com', 'mhcode20@gmail.com', 3),
(4, 'admsdfsdfin@test.com', 'mhcode20@gmail.com', 3),
(5, 'admsdfsdfin@test.com', 'mhcode20@gmail.com', 1),
(6, 'admsdfsdfin@test.com', 'mhcode20@gmail.com', 3),
(7, 'admsdfsdfin@test.com', 'mhcode20@gmail.com', 5),
(8, 'admsdfsdfin@test.com', 'mhcode20@gmail.com', 5),
(9, 'admsdfsdfin@test.com', 'mhcode20@gmail.com', 5);

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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photographers`
--
ALTER TABLE `photographers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
