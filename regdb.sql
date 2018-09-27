-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 09:13 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursedetails`
--

CREATE TABLE `coursedetails` (
  `courseID` varchar(10) NOT NULL,
  `courseName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursedetails`
--

INSERT INTO `coursedetails` (`courseID`, `courseName`) VALUES
('aply1', 'Applied Computing BSc Level 7'),
('aply2', 'Applied Computing BSc (HON) Level 8'),
('aply3', 'Applied Computing Masters'),
('cloud1', 'Cloud Technology BSc Level 7'),
('cloud2', 'Cloud Technology BSc (HON) Level 8'),
('cloud3', 'Cloud Technology Masters'),
('dev1', 'DevOps BSc Level 7'),
('dev2', 'DevOps BSc (HON) Level 8'),
('dev3', 'DevOps  Masters');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(2) NOT NULL,
  `Fname` varchar(15) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `street` varchar(40) NOT NULL,
  `village` varchar(30) NOT NULL,
  `town` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `dob` date NOT NULL,
  `pic` varchar(15) NOT NULL,
  `userID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Fname`, `Lname`, `street`, `village`, `town`, `county`, `email`, `phone`, `dob`, `pic`, `userID`) VALUES
(57, 'Frank', 'Ewowon', '23 Any Street', '', 'Letterkenny', 'Donegal', 'werb@ime.ie', 25634883, '1998-02-14', 'comment_2.jpg', 'L001001041'),
(58, 'Penopo', 'Brown', 'Cannan', 'Templogue', 'Dysart', 'Leitrim', 'sam@net.ie', 49436554, '1996-05-08', 'comment_2.jpg', 'L001001051'),
(59, 'Jack', 'Jones', 'Lisansda', 'Balla', 'Letterkenny', 'Donegal', 'jack@nie.ie', 543138443, '1990-02-14', 'gallery_1.jpg', 'L001001061'),
(60, 'Nora', 'Meeke', '12 Street Lane', '', 'Dunmore', 'Sligo', 'nora@eir.ie', 58813691, '1985-01-23', 'comment_1.jpg', 'L001001071'),
(61, 'Helen', 'Mannion', '43 Rosseid St', '', 'Ballybofey', 'Donegal', 'helen@eir.ie', 2147483647, '1998-06-15', 'comment_3.jpg', 'L001001081'),
(62, 'Jas', 'Loftus', '5 Rows Lane', '', 'Ballyshannon', 'Donegal', 'jas@gmail.com', 989151646, '1999-07-17', 'team_2.jpg', 'L001001091'),
(63, 'Jas', 'Loftus', '5 Rows Lane', '', 'Ballyshannon', 'Donegal', 'jas@gmail.com', 989151646, '1999-07-17', 'team_2.jpg', 'L00100110'),
(64, 'mary', 'kjhgjk', 'jhkj', 'jhgjkh', 'jhjhg', 'kjhgk', 'tom@gmail.com', 0, '2018-09-14', 'comment_2.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(8) NOT NULL,
  `userID` varchar(10) NOT NULL DEFAULT 'L00',
  `passwd` varchar(255) NOT NULL,
  `courseID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `userID`, `passwd`, `courseID`) VALUES
(100104, 'L001001041', '$2y$10$bwImmYThSLpXHdpDnM29q.Kf5f2tk9IHOb.LFwpbgoZsN3fYVCI4K', NULL),
(100105, 'L001001051', '$2y$10$1Y6dWMTn3a/U2xP.gRE6EeNCANO/AVCyMIckoX7Xu2/4mkIdcvUjq', NULL),
(100106, 'L001001061', '$2y$10$NAM3xOyfWQt4N1AzKA4V7.WAL9N3NacjtXaSc7aE0zeZhaTja3Gce', NULL),
(100107, 'L001001071', '$2y$10$gBX5L5c.6IdNDDtxmuVUHOFmKTSUUBKXB0PKOcBmp4mx8DVNPMgSq', NULL),
(100108, 'L001001081', '$2y$10$uh31f11OM10z/y0ALDqVAOAriIWHRVmiRFVD6kr.YYN7RppENF8I6', NULL),
(100109, 'L001001091', '$2y$10$TJ8s.aIjUUAbudjRUPXpK.GR2ALzjpPrKKR99K5PNFeO0MNlGaKi2', NULL),
(100110, 'L001001101', '$2y$10$kRf8SJGNn4KzjcrF9wbLauy7TnoaYN1IHYtVh1LzgzNoqbSLrCHaa', NULL),
(100111, 'L00100111', '$2y$10$P6Bncb6AT9lWfmiiw1LRo.qybZ53BDpvLpAnkocHqER7LuCR6Q9p.', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursedetails`
--
ALTER TABLE `coursedetails`
  ADD PRIMARY KEY (`courseID`),
  ADD KEY `courseID` (`courseID`) USING BTREE;

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`,`userID`),
  ADD UNIQUE KEY `userID` (`userID`),
  ADD KEY `courseID` (`courseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100112;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `coursedetails` (`courseID`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
