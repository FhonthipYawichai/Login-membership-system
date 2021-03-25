-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2021 at 06:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_member`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbmember`
--

CREATE TABLE `tbmember` (
  `mem_id` int(10) NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbmember`
--

INSERT INTO `tbmember` (`mem_id`, `fname`, `lname`, `username`, `password`, `email`, `tel`, `address`) VALUES
(1, 'Sola ', 'Sell', 'sola_s', 'sola123', 'sola@gmail.com', '092748136', '455/19room305'),
(2, 'Zac', 'Helo', 'zac', 'zac123', 'zac123@abd.com', '052640234', '3610 Layong Thailand'),
(5, 'Lily', 'Walk', 'Lily_w', 'lily123', 'lyli_walk@hotmail.com', '0236459123', '980 road 8 Chiangrai Thailand'),
(10, 'bb', 'san', 'bb_san', 'bbsan123', 'bb@abc,com', '0153708376', 'Thailand'),
(44, 'Hirochi', 'Kawa', 'hirochi_k', 'hirochi123', 'hirochi_k@gmail.com', '0203040506', '167 Fuji Japan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbmember`
--
ALTER TABLE `tbmember`
  ADD PRIMARY KEY (`mem_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
