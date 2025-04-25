-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 08:01 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organ`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `psw`) VALUES
('admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `hid` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `ocup` varchar(50) NOT NULL,
  `rtype` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `rphone` varchar(50) NOT NULL,
  `remail` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(15) NOT NULL,
  `organ` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `uid`, `hid`, `dob`, `blood`, `ocup`, `rtype`, `rname`, `rphone`, `remail`, `status`, `date`, `organ`) VALUES
(11, '1', '1', '2023-02-16', 'a+ve', 'developer', 'test', 'sala', '8248119413', 'fantasyphpproject@gmail.com', '1', '2023-02-28', 'Kidney');

-- --------------------------------------------------------

--
-- Table structure for table `hregist`
--

CREATE TABLE `hregist` (
  `id` int(50) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `license` varchar(200) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hregist`
--

INSERT INTO `hregist` (`id`, `hname`, `location`, `address`, `email`, `phone`, `admin_name`, `license`, `psw`) VALUES
(1, 'marudhi', 'trichy', 'Trichy Contonment', 'marudhi.hospital@gmail.com', '9087408476', 'Sidhambaram', '1.jpg', '111'),
(2, 'appolo', 'trichy', 'trichy', 'vinothk1216@gmail.com', '9087408476', 'shekar', '1.jpg', '111'),
(3, 'kmc', 'trichy', 'thennur', 'test@gmail.com', '9087408476', 'shekar', '1.jpg', '123'),
(4, 'AVC hospital', 'kumbakonam', 'no2, kumbakonam', 'avchospital@mail.com', '9087654321', 'Kalai', '1.jpg', '123'),
(5, 'sala', 'trichy', 'ertert', 'sala@gmail.com', '6723823824', 'iob atm', '1.jpg', '3434'),
(10, 'sala', 'trichy', 'ertert', 'sala@gmail.com', '6723823824', 'iob atm', '1.jpg', '3434');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `gender`, `age`, `email`, `phone`, `loc`, `address`, `uname`, `psw`) VALUES
(1, 'admin', 'male', '30', 'vinotht1216@gmail.com', '9087408476', 'trichy', 'trichy', 'admin', '111'),
(2, 'admin1', 'male', '30', 'test@gmail.com', '9087408476', 'trichy', 'trichy', 'admin1', '111'),
(4, 'jona', 'female', '22', 'jo151197@gmail.com', '9087408476', 'trichy', 'trichy', 'jona', '123'),
(5, 'kannan', 'male', '23', 'kumar@gmail.com', '9887675645', 'trichy', '620001', 'kannan', '123'),
(6, 'sam', 'male', '21', 'sam@gmail.com', '9887675645', 'trichy', '620001', 'sam', '123'),
(7, 'sana', 'male', '21', 'sam@gmail.com', '9887675645', 'trichy', '620001', 'sana', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hregist`
--
ALTER TABLE `hregist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hregist`
--
ALTER TABLE `hregist`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
