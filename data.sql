-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2017 at 11:08 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.16-3+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tutorials_tbl`
--

CREATE TABLE `tutorials_tbl` (
  `tutorial_id` int(11) NOT NULL,
  `tutorial_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tutorial_author` varchar(40) CHARACTER SET utf8 NOT NULL,
  `submission_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorials_tbl`
--

INSERT INTO `tutorials_tbl` (`tutorial_id`, `tutorial_title`, `tutorial_author`, `submission_date`) VALUES
(1, 'Coroutine', 'swoole', '2017-02-27'),
(2, 'CoroutineClient', 'swoole', '2017-02-27'),
(3, '协程Coroutine', 'swoole', '2017-02-27'),
(4, 'Coroutine\\Client', 'swoole', '2017-02-27'),
(5, '协程Coroutine', 'swoole', '2017-02-27'),
(6, 'Coroutine\\Client', 'swoole', '2017-02-27'),
(7, '协程Coroutine', 'swoole', '2017-02-27'),
(8, 'Coroutine\\Client', 'swoole', '2017-02-27'),
(9, '协程Coroutine', 'swoole', '2017-02-27'),
(10, 'Coroutine\\Client', 'swoole', '2017-02-27'),
(11, '协程Coroutine', 'swoole', '2017-02-27'),
(12, 'Coroutine\\Client', 'swoole', '2017-02-27'),
(13, '协程Coroutine', 'swoole', '2017-02-27'),
(14, 'Coroutine\\Client', 'swoole', '2017-02-27'),
(15, '协程Coroutine', 'swoole', '2017-02-27'),
(16, 'Coroutine\\Client', 'swoole', '2017-02-27'),
(17, '协程Coroutine', 'swoole', '2017-02-27'),
(18, 'Coroutine\\Client', 'swoole', '2017-02-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tutorials_tbl`
--
ALTER TABLE `tutorials_tbl`
  ADD PRIMARY KEY (`tutorial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tutorials_tbl`
--
ALTER TABLE `tutorials_tbl`
  MODIFY `tutorial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
