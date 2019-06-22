- phpMyAdmin SQL Dump

-- version 4.4.15.5

-- http://www.phpmyadmin.net

--

-- Host: localhost

-- Generation Time: 2016-07-06 20:42:33

-- 服务器版本： 5.7.12-log

-- PHP Version: 7.0.7

 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";

 

 

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

 

--

-- Database: `thinkphp5`

--

 

-- --------------------------------------------------------

 

--

-- 表的结构 `think_user`

--

 

CREATE TABLE IF NOT EXISTS `think_user` (

  `user_id` int(11) NOT NULL,

  `user_name` varchar(255) NOT NULL,

  `UserSex` int(11) DEFAULT NULL,

  `UserTel` varchar(255) DEFAULT NULL,

  `UserEmail` varchar(255) DEFAULT NULL,

  `UserAddress` varchar(255) DEFAULT NULL,

  `UserBirth` varchar(255) DEFAULT NULL,

  `UserJoinTime` varchar(255) DEFAULT NULL,

  `UserPasswd` varchar(255) DEFAULT NULL,

  `UserSignature` varchar(255) DEFAULT NULL,

  `UserHobby` varchar(255) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

 

--

-- 转存表中的数据 `think_user`

--

 

INSERT INTO `think_user` (`user_id`, `user_name`, `UserSex`, `UserTel`, `UserEmail`, `UserAddress`, `UserBirth`, `UserJoinTime`, `UserPasswd`, `UserSignature`, `UserHobby`) VALUES

(0, 'thinkphp', 1, '15700000000', 'emial@email.com', '山东省济南市****路', '1111111', '111111', 'qqq', NULL, NULL);

 

--

-- Indexes for dumped tables

--

 

--

-- Indexes for table `think_user`

--

ALTER TABLE `think_user`

  ADD PRIMARY KEY (`user_id`);

 

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;