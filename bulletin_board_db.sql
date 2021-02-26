-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 08:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulletin_board_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `article_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`article_id`, `article_title`, `article_content`, `article_created_at`) VALUES
(5, 'tdgkdghjdghjdghjfghkf ghjfghj fgyhj fghj fghj ', 'fd gdfg dfg df', '2021-02-26 07:24:47'),
(6, 'sgfdagdfg', 'asdasdasd', '2021-02-26 07:34:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`article_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
