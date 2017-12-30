-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 06:39 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ag-pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_members`
--

CREATE TABLE `add_members` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `useremail` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userrole` varchar(50) NOT NULL,
  `active` int(11) NOT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_members`
--

INSERT INTO `add_members` (`id`, `username`, `useremail`, `password`, `userrole`, `active`, `updated`, `created`) VALUES
(1, 'pankaj', 'pankxfgfju@gmail.com', '123456', 'Developer', 1, '2017-05-22 13:31:30', '2017-05-22 13:31:30'),
(2, 'ert', 'pankxfgdsfgfju@gmail.com', '123456', 'Bidder', 1, '2017-05-23 06:03:04', '2017-05-23 06:03:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_members`
--
ALTER TABLE `add_members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_members`
--
ALTER TABLE `add_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
