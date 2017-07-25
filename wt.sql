-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 12:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `regno` int(11) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`name`, `city`, `regno`, `pwd`) VALUES
('Tata', 'Mumbai', 1, 'c4ca4238a0b923820dcc509a6f75849b'),
('Reliance', 'Mumbai', 2, 'c81e728d9d4c2f636f067f89cc14862c'),
('L&T', 'Agra', 3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `regno` int(11) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `city`, `regno`, `pwd`) VALUES
('Anshul Agarwal', 'Mumbai', 1, 'c4ca4238a0b923820dcc509a6f75849b'),
('Nimesh Doolani', 'Mumbai', 2, 'c81e728d9d4c2f636f067f89cc14862c'),
('Virat Kohli', 'Agra', 3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3'),
('Cristiano Ronaldo', 'Delhi', 4, 'a87ff679a2f3e71d9181a67b7542122c');

-- --------------------------------------------------------

--
-- Table structure for table `labour`
--

CREATE TABLE `labour` (
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `regno` int(11) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `req` int(10) NOT NULL DEFAULT '1',
  `status` int(10) NOT NULL DEFAULT '1',
  `start` datetime DEFAULT NULL,
  `stop` datetime DEFAULT NULL,
  `cregno` int(11) DEFAULT NULL,
  `coregno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labour`
--

INSERT INTO `labour` (`name`, `email`, `city`, `type`, `regno`, `pwd`, `req`, `status`, `start`, `stop`, `cregno`, `coregno`) VALUES
('Akash Patil', 'akash.patil@ves.ac.in', 'Mumbai', 'Carpentry', 1, 'c4ca4238a0b923820dcc509a6f75849b', 1, 1, NULL, NULL, NULL, NULL),
('Juhi Bhagtani', 'juhi.bhagtani@ves.ac.in', 'Mumbai', 'Painter', 2, 'c81e728d9d4c2f636f067f89cc14862c', 1, 1, NULL, NULL, NULL, NULL),
('Neeraj Jethnani', 'neeraj.jethnani@ves.ac.in', 'Agra', 'Electrician', 3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 1, 1, NULL, NULL, NULL, NULL),
('Sanket Mhatre', 'sanket.mhatre@ves.ac.in', 'Mumbai', 'Plumber', 4, 'a87ff679a2f3e71d9181a67b7542122c', 1, 1, NULL, NULL, NULL, NULL),
('Kantaben Devi', 'kantaben@gmail.com', 'Mumbai', 'Maid', 5, 'e4da3b7fbbce2345d7772b0674a318d5', 1, 1, NULL, NULL, NULL, NULL),
('Tanvi Kulkarni', 'tanvi.kulkarni@ves.ac.in', 'Mumbai', 'Maid', 6, '1679091c5a880faf6fb5e6087eb1b2dc', 1, 1, NULL, NULL, NULL, NULL),
('Madhu Raut', 'madhu.raut@ves.ac.in', 'Mumbai', 'Maid', 7, '8f14e45fceea167a5a36dedd4bea2543', 1, 1, NULL, NULL, NULL, NULL),
('Hardik Patil', 'hardik.patil@ves.ac.in', 'Agra', 'Electrician', 8, 'c9f0f895fb98ab9159f51fd0297e236d', 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `cregno` int(11) NOT NULL,
  `qry` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `wregno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`cregno`, `qry`, `rating`, `wregno`) VALUES
(1, 'Good Worker.', 9, 1),
(2, 'Nice', 7, 2),
(3, 'Very Disobedient. Take away his account.', 2, 3),
(1, 'Hard Working.', 8, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `labour`
--
ALTER TABLE `labour`
  ADD PRIMARY KEY (`regno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
