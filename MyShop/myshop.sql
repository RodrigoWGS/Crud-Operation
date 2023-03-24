-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 10:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `myshoptbl`
--

CREATE TABLE `myshoptbl` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myshoptbl`
--

INSERT INTO `myshoptbl` (`id`, `first_name`, `last_name`, `email`, `gender`) VALUES
(32, 'Sanjaya ', 'Rodrigo ', 'sanjaya@weblook.com', 'male'),
(33, 'Tharaka', 'Kodithuwakku ', 'tharaka@weblook.com', 'male'),
(34, 'Ranshika', 'Hettiarachchi', 'ranshika@weblook.com', 'male'),
(35, 'Himaru', 'Brow', 'himaru@weblook.com', 'male'),
(36, 'Chandi', 'Anjali', 'chandi@weblook.com', 'female'),
(37, 'himaru ', 'brow', 'viraj@weblook.com', 'male'),
(38, 'Azam', 'Azher', 'azam@weblook.com', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myshoptbl`
--
ALTER TABLE `myshoptbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myshoptbl`
--
ALTER TABLE `myshoptbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
