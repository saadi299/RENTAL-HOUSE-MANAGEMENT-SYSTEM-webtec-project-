-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 09:11 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalflat`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `flat_id` int(10) NOT NULL,
  `flatname` varchar(30) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `unit` int(5) NOT NULL,
  `description` varchar(50) NOT NULL,
  `size` int(5) NOT NULL,
  `bed` int(5) NOT NULL,
  `bath` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `phone` int(15) NOT NULL,
  `emailid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`flat_id`, `flatname`, `adress`, `unit`, `description`, `size`, `bed`, `bath`, `price`, `phone`, `emailid`) VALUES
(1, 'Anwara Villa', 'D block,Bashundhara,Dhaka', 4, 'parking facilities.', 1600, 1, 1, 45000, 1689610688, 'tarif@gmail.com'),
(2, 'Tajbiul Villa', 'Bloc C,Road 12,Bashundhara Residential Area.Dhaka', 2, 'parking facilities.', 1600, 3, 3, 50000, 1400994964, 'taz@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` int(15) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `confirmpass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `dob`, `gender`, `phone`, `emailid`, `pass`, `confirmpass`) VALUES
(1, 'Saadu', 'Mohammed', '2019-12-01', 'Male', 1689610688, 'saadi@gmail.com', '1234', '1234'),
(2, 'ishiaq', '', '0000-00-00', '', 0, '', '', ''),
(3, 'saadi', 'mohammed', '2019-12-30', 'male', 1689610688, 'saadimohammed@gmail.com', 'ed2b1f46', 'ed2b1f46'),
(4, 'neaz', 'mohammed', '2019-12-30', 'male', 1689610688, 'saadimohammed@gmail.com', 'ed2b1f46', 'ed2b1f46'),
(5, 'ishtiaq', 'mohammed', '2019-12-30', 'male', 1689610688, 'saadimohammed@gmail.com', 'ed2b1f46', 'ed2b1f46'),
(6, 'sabbir', 'mohammed', '2019-12-30', 'male', 1689610688, 'saadimohammed@gmail.com', 'ed2b1f46', 'ed2b1f46'),
(7, 'Miraz', 'mohammed', '2019-12-30', 'male', 1689610688, 'saadimohammed@gmail.com', 'ed2b1f46', 'ed2b1f46'),
(8, 'tajbiul', 'rawal', '2019-12-30', 'male', 1689610688, 'saadimohammed@gmail.com', 'ed2b1f46', 'ed2b1f46'),
(9, 'tarif', 'jamil', '2019-12-30', 'male', 1689610688, 'tarif@gmail.com', 'ed2b1f46', 'ed2b1f46'),
(10, 'tarif', 'jamil', '2019-12-30', 'male', 1689610688, 'tarif@gmail.com', 'ed2b1f46', 'ed2b1f46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`flat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `flat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
