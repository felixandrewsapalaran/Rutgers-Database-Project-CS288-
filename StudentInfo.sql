-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 13, 2019 at 11:51 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `StudentInfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Starts` varchar(20) NOT NULL,
  `Ends` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Name`, `Email`, `Phone`, `Status`, `Starts`, `Ends`) VALUES
(1012, 'Eagle C.	', 'eagle@yahoo.com	', 999221363, 'Pending', '01-20-2020', '03-28-2025'),
(1111, 'Carlo Santiago', 'carlo@yahoomail.com', 8742132, 'Pending', '01-20-2020', '03-28-2025'),
(1234, 'LAURENZ', 'laurenze@hotmail.com', 54321, 'active', '01-20-2020', '01-20-2022'),
(1235, 'Andrew Labitoria	', 'andrew@gmail.com	', 9387132, 'Inactive', '02-20-2020', '03-28-2025'),
(1923, 'Kyle J.', 'kyle@hotmail.com', 1243321, 'active', '05-18-2019', '05-20-2020'),
(2222, 'Daquan W.', 'daquan@gmail.com', 832443321, 'Active', '09-03-2019', '05-25-2020'),
(3333, 'tobi Menendez', 'tobi.lulz@yahoo.com', 843123122, 'Inactive', '01-10-2016', '05-18-2017'),
(4444, 'Karlee Peters', 'Peters@gmail.com', 9082341, 'Active ', '01-23-2019', '12-23-2020'),
(5555, 'John Cane', 'johnCane@GMAIL.COM', 983212333, 'Inactive', '09-10-2017', '05-25-2018'),
(7777, 'Drew Guillen', 'drew@gmail.com', 546453422, 'active', '01-02-2020', '01-02-2021'),
(8888, 'Felix S.', 'felix@gmail.com', 88374234, 'active', '05-18-2019', '05-20-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1565;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
