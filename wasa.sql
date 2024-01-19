-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 11:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applicationinfo`
--

CREATE TABLE `applicationinfo` (
  `id` int(11) NOT NULL,
  `empID` int(11) DEFAULT NULL,
  `examination` varchar(255) DEFAULT 'NULL',
  `demo` varchar(255) DEFAULT '',
  `contractSigning` varchar(255) DEFAULT 'NULL',
  `startDate` varchar(255) DEFAULT 'NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicationinfo`
--

INSERT INTO `applicationinfo` (`id`, `empID`, `examination`, `demo`, `contractSigning`, `startDate`) VALUES
(1, 8, '', '', '', '2023-01-09'),
(2, 9, '', '', 'Passed', '2023-01-01'),
(3, 10, 'Passed', 'Passed', 'Passed', '2023-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `id` int(11) NOT NULL,
  `empID` int(11) DEFAULT NULL,
  `certName` varchar(255) DEFAULT NULL,
  `dateStart` varchar(255) DEFAULT NULL,
  `dateEnd` varchar(255) DEFAULT NULL,
  `qualification` varchar(500) DEFAULT NULL,
  `venue` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`id`, `empID`, `certName`, `dateStart`, `dateEnd`, `qualification`, `venue`) VALUES
(5, 3, 'wasdf', '2023-01-01', '2023-02-04', ' saldkf ', 'venue 1 update1'),
(6, 17, 'Microsoft', '2023-07-13', '2023-07-12', 'Information Technology ', 'CEBU');

-- --------------------------------------------------------

--
-- Table structure for table `educattain`
--

CREATE TABLE `educattain` (
  `id` int(11) NOT NULL,
  `empID` int(255) DEFAULT NULL,
  `typeDegree` varchar(255) DEFAULT NULL,
  `dateFinished` varchar(255) DEFAULT NULL,
  `schoolAttended` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educattain`
--

INSERT INTO `educattain` (`id`, `empID`, `typeDegree`, `dateFinished`, `schoolAttended`) VALUES
(7, 1, 'master of jamesqweqwe', '2020-02-04', 'cr ml qweqwe'),
(8, 3, 'Master', '1997-08-22', 'wfasdf'),
(10, 17, 'BSIT', '2023-07-13', 'CRMC');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `civilstat` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthplace` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `fathername` varchar(255) DEFAULT NULL,
  `mothername` varchar(255) DEFAULT NULL,
  `idnum` varchar(255) DEFAULT NULL,
  `hireddate` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `emername` varchar(255) DEFAULT NULL,
  `emercontact` varchar(255) DEFAULT NULL,
  `emerrelation` varchar(255) DEFAULT NULL,
  `emeraddress` varchar(255) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `image_url` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `position` int(11) NOT NULL,
  `empstatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `middlename`, `lastname`, `age`, `gender`, `civilstat`, `citizenship`, `religion`, `contact`, `email`, `address`, `birthplace`, `birthdate`, `fathername`, `mothername`, `idnum`, `hireddate`, `department`, `emername`, `emercontact`, `emerrelation`, `emeraddress`, `status`, `image_url`, `position`, `empstatus`) VALUES
(5, 'af', 'am', 'al', '25', 'Female', 'Married', 'Filipino', 'None', '123', 'email@email.com', 'la pax', 'siocon', '1991-10-10', 'ap name', 'am name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'applicant', '', 0, NULL),
(8, 'sample', 'sample', 'sample', '24', 'Female', 'Married', 'Filipino', 'None', 'sample', 'sample@email.com', 'sample', 'sample', '2023-01-01', 'sample father', 'sample mother', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'applicant', '', 0, NULL),
(17, 'johnzslow', 'catamco', 'alburo', '34', 'Male', 'Single', 'dfadsf', 'dsafsdfsadf', 'bogo city gairan', 'johnzslow@yahoo.com', 'asdfasdf', 'asdfasdf', '2023-05-16', 'asdfdsa', 'fasdfsad', '43535', '2023-05-18', 'asdfdasfd', '2023-05-11', 'asdfdsaf', 'safdsaf', 'dsfsd', 'active', 'IMG-646dd6c53473b5.87018206.jpg', 0, NULL),
(19, 'SAFASD', 'SDAFSDAFASDFASDF', 'SDAFSADF', '23', 'Male', 'ASDFSDAFSADF', 'FASDF', 'SADFSAD', 'SADFSADF', 'SADFASD@YAHOO.COM', 'AFAS', 'ASDFASDFSAD', '2023-07-26', 'SAFSADF', 'SDAFSADFAS', '23', '2023-07-06', 'ASFDSAD', '2023-07-20', 'ASDF', 'ASDFSAD', 'FSADF', 'active', 'IMG-64b4e1d5e5f778.57910634.jpg', 0, NULL),
(21, 'joseph ', 'alburo', 'cwapo', '334', 'Male', 'asd', 'wasd', 'sdafdsf', '324324', 'sadf@yahoo.com', 'asdfasd', 'sdfsdaf', '2023-07-19', 'sdafsd', 'fasdfasdf', '23432', '2023-07-13', 'sadfsadf', '2023-07-05', '234324', 'sdfdsaf', 'sdafsa', 'active', 'IMG-64b8faa30b8d03.56669413.jpg', 0, 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_url` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `offense`
--

CREATE TABLE `offense` (
  `id` int(11) NOT NULL,
  `empID` int(11) DEFAULT NULL,
  `offenseType` varchar(255) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `sanction` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offense`
--

INSERT INTO `offense` (`id`, `empID`, `offenseType`, `descr`, `sanction`) VALUES
(2, 3, 'AWOL', 'absence without leave', '1 month suspension'),
(4, 17, 'None', 'None', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `salarystructure`
--

CREATE TABLE `salarystructure` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `residency` int(11) DEFAULT NULL,
  `license` varchar(255) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salarystructure`
--

INSERT INTO `salarystructure` (`id`, `category`, `name`, `residency`, `license`, `salary`) VALUES
(2, 'Masteral', 'with license qqq', 0, 'Without License', 3500111),
(4, '', '', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicationinfo`
--
ALTER TABLE `applicationinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educattain`
--
ALTER TABLE `educattain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offense`
--
ALTER TABLE `offense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salarystructure`
--
ALTER TABLE `salarystructure`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicationinfo`
--
ALTER TABLE `applicationinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `educattain`
--
ALTER TABLE `educattain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offense`
--
ALTER TABLE `offense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `salarystructure`
--
ALTER TABLE `salarystructure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
