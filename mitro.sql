-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 05:19 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(20) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `adminaddr` varchar(50) NOT NULL,
  `adminmob` varchar(20) NOT NULL,
  `adminmail` varchar(50) NOT NULL,
  `adminpsswrd` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `billid` int(20) NOT NULL,
  `adminid` varchar(20) NOT NULL,
  `custid` varchar(20) NOT NULL,
  `busid` varchar(20) NOT NULL,
  `busfrom` varchar(50) NOT NULL,
  `busto` varchar(50) NOT NULL,
  `ondate` date NOT NULL,
  `timestart` time NOT NULL,
  `bustype` varchar(50) NOT NULL,
  `seatno` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `billdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `driverid` varchar(50) NOT NULL,
  `drivername` varchar(50) NOT NULL,
  `drivermob` varchar(20) NOT NULL,
  `drivermail` varchar(50) NOT NULL,
  `driversalary` varchar(50) NOT NULL,
  `busid` varchar(50) NOT NULL,
  `busfrom` varchar(50) NOT NULL,
  `busto` varchar(50) NOT NULL,
  `timestart` time NOT NULL,
  `bustype` varchar(50) NOT NULL,
  `priceprst` varchar(20) NOT NULL,
  `seat` varchar(20) NOT NULL,
  `date` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custid` varchar(20) NOT NULL,
  `custname` varchar(50) NOT NULL,
  `custaddr` varchar(50) NOT NULL,
  `custmob` varchar(20) NOT NULL,
  `custmail` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `busid` varchar(20) NOT NULL,
  `busfrom` varchar(50) NOT NULL,
  `busto` varchar(50) NOT NULL,
  `bustype` varchar(50) NOT NULL,
  `priceprst` int(20) NOT NULL,
  `timestart` time NOT NULL,
  `date` date NOT NULL,
  `seat` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billid`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `billid` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
