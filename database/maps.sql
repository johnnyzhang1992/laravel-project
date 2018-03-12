-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2018 at 11:54 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meetcool`
--

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` int(11) NOT NULL,
  `site_copy` varchar(256) DEFAULT NULL,
  `site_beian` varchar(256) DEFAULT NULL,
  `site_title` varchar(256) DEFAULT NULL,
  `site_author` varchar(256) DEFAULT NULL,
  `site_keywords` varchar(256) DEFAULT NULL,
  `site_description` text,
  `site_logo` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `site_copy`, `site_beian`, `site_title`, `site_author`, `site_keywords`, `site_description`, `site_logo`) VALUES
(1, '© MeetCool 2017. All Rights Reserved.', '粤ICP备17011677号-1', '米酷-遇见更好的你', '米酷科技', '米酷,电子产品,移动电源,早教产品,耳机,钢化膜,米酷科技', 'Meetcool.Vip 品牌由深圳米酷科技注册成立，公司专注高品质的数码产品的研发与生产， 为广大中小商家及消费者提供质优价良的产品服务', '/assets/images/home/logo-1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
