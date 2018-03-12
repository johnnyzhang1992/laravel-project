-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2018 at 11:53 AM
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
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `intro` text CHARACTER SET utf8,
  `intro_logo` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `m_phone` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(256) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `intro`, `intro_logo`, `phone`, `m_phone`, `address`, `email`) VALUES
(1, '<p class="text-muted text-indent" style="font-family: NotoSansHans-Regular, AvenirNext-Regular, arial, "Hiragino Sans GB", "Microsoft Yahei", "Hiragino Sans GB", "WenQuanYi Micro Hei", sans-serif; font-size: 15px;">Meetcool.Vip 品牌由深圳米酷科技注册成立，公司专注高品质的数码产品的研发与生产， 为广大中小商家及消费者提供质优价良的产品服务。目前，米酷科技与数十家工厂、品牌商 建立战略合作关系，共同研发、生产数码产品，现公司产品涵盖手机钢化膜（曲面膜）、蓝牙音箱（蓝牙）耳机、 键盘鼠标、数据线材、U盘、移动电源、智能手表（儿童/老人智能手表）、儿童早教产品等智能产品。</p><p class="text-muted m-b-0 text-indent" style="font-family: NotoSansHans-Regular, AvenirNext-Regular, arial, "Hiragino Sans GB", "Microsoft Yahei", "Hiragino Sans GB", "WenQuanYi Micro Hei", sans-serif; font-size: 15px;">米酷科技愿与国内外商家一道，共享优势产品与市场资源，将市场做大做强，也诚挚欢迎各区域商家 和我们建立合作关系，我们将为您提供良好的产品与服务。</p>', 'assets/images/home/logo.png', '0755-23917874', '159141060471', '深圳市福田区深南中路2032号爱华电脑大厦8楼A8058', 'depp@meetcool.vip , kongdepp@163.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
