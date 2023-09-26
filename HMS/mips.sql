-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 05:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mips`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` varchar(50) NOT NULL,
  `agent_password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `agent_password`, `name`, `branch`, `phone`) VALUES
('007', '123', 'Oblu', 'Khilgaon', '01611122222'),
('010', '123', 'Golam', 'Basabo', '23435'),
('555', '666', 'Akib', 'Rampura', '018294754'),
('admin', '12345', 'Master User', 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `aprove`
--

CREATE TABLE `aprove` (
  `id` int(100) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aprove`
--

INSERT INTO `aprove` (`id`, `cid`, `msg`) VALUES
(5, '1511986024', 'Your Request has been aproved'),
(6, '1511986129', 'Your Request has been aproved');

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE `claim` (
  `agent_id` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Client_id` varchar(100) NOT NULL,
  `Hname` varchar(100) NOT NULL,
  `Health` varchar(100) NOT NULL,
  `Camount` varchar(20) NOT NULL,
  `Cdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `claim`
--

INSERT INTO `claim` (`agent_id`, `Name`, `Client_id`, `Hname`, `Health`, `Camount`, `Cdate`) VALUES
('555', 'Hakim', '1511986023', 'Mirpur', '2', '2000', '27-12-2022');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` varchar(200) NOT NULL,
  `client_password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `policy_id` varchar(50) NOT NULL,
  `agent_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_password`, `name`, `sex`, `birth_date`, `marital_status`, `nid`, `phone`, `address`, `policy_id`, `agent_id`) VALUES
('1511986023', '', 'John Green', 'Male', '11-05-1985', 'Divorced', '0121567952', '013548743688', 'Uttara', '1', ''),
('1511986129', '', 'Aemon Task', 'Male', '10-09-1970', 'Divorced', '46814518451', '54189465100', 'Dhaka', '1', ''),
('1511986256', '123', 'Gareth Walker', 'Male', '05-09-1987', 'Divorced', '5216541656', '0169780980', 'Noakhali', '3', '555'),
('1670593473', '123', 'zan', 'f', '12-8-00', 'e', '12', '123', 'tv', '1', 'admin'),
('221', '123', 'Maria', '', '', '', '', '0179123456', 'Dhanmondi', '', ''),
('222', '123', 'Habu', '', '', '', '', '+880177777777', 'Gulshan', '', ''),
('223', '123', 'Kabu', '', '', '', '', '01777777777', 'Basabo', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Name` varchar(20) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `Against` varchar(20) NOT NULL,
  `Comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Name`, `ID`, `Against`, `Comments`) VALUES
('Munia', '1511986023', 'Akib', 'Matha nosto'),
('Raihan Alam Rahat', '1511986129', 'Akib', 'Matha nosto');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `recipt_no` varchar(20) NOT NULL,
  `client_id` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `due` varchar(50) NOT NULL,
  `fine` varchar(50) NOT NULL,
  `agent_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`recipt_no`, `client_id`, `month`, `amount`, `due`, `fine`, `agent_id`) VALUES
('1', '1511986023', 'November', '150', '0', '0', '555'),
('1670861454_606879785', '1511986129', 'August', '2000', '0', '0', '010');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_id` varchar(50) NOT NULL,
  `term` varchar(50) NOT NULL,
  `health_status` varchar(50) NOT NULL,
  `system` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `coverage` varchar(50) NOT NULL,
  `age_limit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `term`, `health_status`, `system`, `payment_method`, `coverage`, `age_limit`) VALUES
('1', 'Cleaning/Dusting', 'Per Hour', '150', 'Cash/Check', '100%', '60'),
('2', 'Cooking', 'Per Hour', '200', 'Cash/Check', '100%', '70'),
('3', 'Baby Sitter', 'Per Hour', '100', 'Cash/Check', '100%', '60'),
('4', 'Gardner', 'Per Hour', '150', 'Cash/Check', '100%', '60'),
('5', 'Elderly Care', 'Per Hour', '100', 'Cash/Check', '100%', '60'),
('6', 'Car Washing', 'Per Car', '1500', 'Cash/Check', '100%', '50');

-- --------------------------------------------------------

--
-- Table structure for table `ratee`
--

CREATE TABLE `ratee` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `rate` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratee`
--

INSERT INTO `ratee` (`id`, `name`, `rate`) VALUES
(9, '555', 0),
(8, '555', 0),
(10, '555', 0),
(11, '', 0),
(12, '', 2.4),
(13, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `agent_id` (`agent_id`);

--
-- Indexes for table `aprove`
--
ALTER TABLE `aprove`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claim`
--
ALTER TABLE `claim`
  ADD PRIMARY KEY (`Client_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `client_id` (`client_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`recipt_no`),
  ADD UNIQUE KEY `recipt_no` (`recipt_no`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`policy_id`),
  ADD UNIQUE KEY `policy_id` (`policy_id`);

--
-- Indexes for table `ratee`
--
ALTER TABLE `ratee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aprove`
--
ALTER TABLE `aprove`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ratee`
--
ALTER TABLE `ratee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
