-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 02:20 PM
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
-- Database: `student_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Username`, `Password`, `Email`, `Role`) VALUES
(1, 'admin', 'qwerty123', 'admin@yahoo.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` int(250) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `Course`, `Images`) VALUES
(1, 'Drafting', ''),
(2, 'Food', ''),
(3, 'Electrical', ''),
(4, 'Electronics', ''),
(5, 'Mechanical', ''),
(6, 'Automotive', ''),
(7, 'Computer', '');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `Org_ID` int(255) NOT NULL,
  `Org_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`Org_ID`, `Org_Name`) VALUES
(1, 'Acssociation of Automotive Technology Students'),
(2, 'College of Assosciation of Drafting Students'),
(3, 'CIT Gazette - Publications'),
(4, 'Collegiate Resources Auxillary of Technical Visionaries'),
(5, 'Federation of food technolgy Students '),
(6, 'Society of proficient, innovative and computer ethusiasts '),
(7, 'Technikous omada electrical');

-- --------------------------------------------------------

--
-- Table structure for table `pending_request`
--

CREATE TABLE `pending_request` (
  `PendingID` int(255) NOT NULL,
  `Student_Number` int(100) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Middle_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Date_of_Birth` varchar(100) NOT NULL,
  `Place_of_Birth` varchar(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `HomeNo` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Contact_Number` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `CourseID` int(250) NOT NULL,
  `Parents_Name` varchar(100) NOT NULL,
  `Relationship` varchar(100) NOT NULL,
  `Number` int(100) NOT NULL,
  `Occupation` varchar(100) NOT NULL,
  `images` varchar(255) NOT NULL,
  `Time_Registered` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `Student_ID` int(11) NOT NULL,
  `Student_Number` int(100) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Middle_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Date_of_Birth` varchar(100) NOT NULL,
  `Place_of_Birth` varchar(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `HomeNo` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Contact_Number` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `CourseID` int(250) NOT NULL,
  `Parents_Name` varchar(100) NOT NULL,
  `Relationship` varchar(100) NOT NULL,
  `Number` int(100) NOT NULL,
  `Occupation` varchar(100) NOT NULL,
  `images` varchar(255) NOT NULL,
  `Time_Registered` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`Student_ID`, `Student_Number`, `First_Name`, `Middle_Name`, `Last_Name`, `Age`, `Date_of_Birth`, `Place_of_Birth`, `Religion`, `Gender`, `HomeNo`, `Street`, `Barangay`, `City`, `Province`, `Contact_Number`, `Email`, `Section`, `CourseID`, `Parents_Name`, `Relationship`, `Number`, `Occupation`, `images`, `Time_Registered`) VALUES
(150, 2012101232, 'Tsumugi', 'buki', 'Kotobuki', '29', '1993-06-01', 'qwe', 'wqeqw', 'Female', 'qwe', 'qwe', 'qeqw', 'qwe', 'qweqwe', 1234567890, 'qweqwe@gmail.com', '', 1, 'qweqw', 'weqwe', 1234567890, 'qweq', 'upload/6404c030a625b.jpg', '03-06-2023 12:15:45'),
(151, 2012101212, 'Mashiro', 'S', 'Shiina', '29', '1993-10-06', 'qwe', 'qweqw', 'Female', 'eqw', 'eqw', 'qwe', 'qwe', 'qwe', 1234567890, 'qweqwe@gmail.com', '', 6, 'Shiro Shiina', 'Mother', 1234567890, 'Lawyer', 'upload/6405e19be2fd1.jpg', '03-06-2023 08:50:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`Org_ID`);

--
-- Indexes for table `pending_request`
--
ALTER TABLE `pending_request`
  ADD PRIMARY KEY (`PendingID`),
  ADD KEY `te` (`CourseID`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`Student_ID`),
  ADD KEY `te` (`CourseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `Org_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pending_request`
--
ALTER TABLE `pending_request`
  MODIFY `PendingID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `Student_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_table`
--
ALTER TABLE `student_table`
  ADD CONSTRAINT `te` FOREIGN KEY (`CourseID`) REFERENCES `course` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
