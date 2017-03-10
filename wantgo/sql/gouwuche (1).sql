-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-03-09 02:15:15
-- 服务器版本： 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xiangqu`
--

-- --------------------------------------------------------

--
-- 表的结构 `gouwuche`
--

CREATE TABLE `gouwuche` (
  `id` int(11) NOT NULL COMMENT '主键id',
  `size` varchar(255) DEFAULT NULL COMMENT '尺寸',
  `color` varchar(255) DEFAULT NULL COMMENT '颜色',
  `imgurl` varchar(255) DEFAULT NULL COMMENT '图片地址',
  `name` varchar(255) DEFAULT NULL COMMENT '图片名字',
  `nums` int(11) DEFAULT NULL COMMENT '数量',
  `who` varchar(255) DEFAULT NULL COMMENT '商户',
  `price` int(11) DEFAULT NULL COMMENT '价格',
  `num` int(11) DEFAULT NULL COMMENT '库存'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `gouwuche`
--

INSERT INTO `gouwuche` (`id`, `size`, `color`, `imgurl`, `name`, `nums`, `who`, `price`, `num`) VALUES
(3, 'MM', 'green', 'img/50.jpg', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', 1, '外套', 128, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gouwuche`
--
ALTER TABLE `gouwuche`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gouwuche`
--
ALTER TABLE `gouwuche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
