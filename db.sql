-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 06:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Profession` varchar(255) NOT NULL,
  `Contact_number` varchar(10) NOT NULL,
  `Profile_photo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `Name`, `email`, `Profession`, `Contact_number`, `Profile_photo`) VALUES
(38, 'Ruskin Bond', 'ruskinbond@gmail.com', 'Author', '6623543672', ' upload/Ruskin Bond.jpg'),
(37, 'Preeti Shenoy', 'preetishenoy@gmail.com', 'Author', '2147483647', ' upload/Preeti Shenoy.jpg'),
(36, 'Durjoy Datta', 'durjoyd@gmail.com', 'Author', '2147483647', ' upload/Durjoy Datta.jpg'),
(35, 'Arundhati Roy', 'arundhiroy@gmail.com', 'Author', '2147483647', ' upload/Arundhati_Roy.jpg'),
(34, 'Chetan Bhagat', 'chetanbhagat@gmail.com', 'Actor', '2147483647', ' upload/Chetan Bhagat.jpg'),
(33, 'Shraddha Kapoor', 'shraddhakapoor@gmail.com', 'Actor', '2147483647', ' upload/Shraddha Kapoor.jpg'),
(32, 'Akshay Kumar', 'akkikumar@gmail.com', 'Actor', '2147483647', ' upload/Akshay Kumar.jpg'),
(31, 'Alia Bhatt', 'aliabht@gmail.com', 'Actor', '2147483647', ' upload/Alia Bhatt.jpg'),
(30, 'Salman Khan', 'sallubhai@gmail.com', 'Actor', '2147483647', ' upload/Salman Khan.jpg'),
(29, 'Shah Rukh Khan', 'srk@gmail.com', 'Actor', '2147483647', ' upload/Shah Rukh Khan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(255) NOT NULL,
  `U_Password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
