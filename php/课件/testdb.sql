-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2024-05-07 08:41:33
-- 服务器版本： 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

CREATE TABLE `class` (
  `classNo` int(11) NOT NULL,
  `className` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`classNo`, `className`) VALUES
(1, '10计信1班'),
(2, '10计信2班'),
(3, '10计信3班'),
(4, '10计信4班');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `studentId` varchar(5) NOT NULL,
  `studentName` varchar(20) NOT NULL,
  `age` int(11) NOT NULL DEFAULT '18',
  `class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`studentId`, `studentName`, `age`, `class`) VALUES
('S0101', 'TOM', 18, 1),
('S0102', 'JACK', 19, 1),
('S0103', 'MARY', 20, 1),
('S0104', 'JOHN', 20, 1),
('S0201', 'Lily', 18, 2),
('S0202', 'Merry', 19, 2),
('S0203', 'Jane', 22, 2),
('S0301', '张三', 20, 3),
('S0302', '李四', 18, 3),
('S0303', '王五', 19, 3),
('S0304', '刘丽', 19, 3),
('S0401', '陈小二', 19, 4),
('S0402', '王小虎', 21, 4),
('S0403', '李明', 20, 4);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `userName` varchar(20) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `role` varchar(10) DEFAULT 'guest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userName`, `password`, `role`) VALUES
('admin', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classNo`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentId`),
  ADD KEY `fk1` (`class`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userName`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `class`
--
ALTER TABLE `class`
  MODIFY `classNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 限制导出的表
--

--
-- 限制表 `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`class`) REFERENCES `class` (`classNo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
