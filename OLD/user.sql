-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 02:18 PM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` varchar(15) NOT NULL,
  `passwd` varchar(15) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(40) NOT NULL,
  `add1` varchar(50) NOT NULL,
  `add2` varchar(50) DEFAULT NULL,
  `town/city` varchar(20) NOT NULL,
  `county/state` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL DEFAULT 'anyname@any.ie',
  `phone` int(20) NOT NULL,
  `DOB` date NOT NULL DEFAULT '1911-02-24',
  `Image` varchar(50) NOT NULL,
  `CourseID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `passwd`, `Fname`, `Lname`, `add1`, `add2`, `town/city`, `county/state`, `email`, `phone`, `DOB`, `Image`, `CourseID`) VALUES
('L00123456', 'firstone', 'Sam', 'Brown', 'Canan', 'Templeogue', 'Dysart', 'Leitrim', 'sam@yahoo.ie', 83756431, '1996-05-08', '', ''),
('L00234567', 'secondone', 'Jack', 'Jones', 'Lisansda', 'Balla', 'Letterkenny', 'Donegal', 'jack@gmail.com', 854579874, '0000-00-00', '', ''),
('L00345678', 'thirdone', 'Brian', 'Gavaghan', '43 Rosswid St.', NULL, 'Ballybofey', 'Donegal', 'brian@hotmail.ie', 86987456, '2011-02-24', '', ''),
('L00456789', 'fourthone', 'Nora', 'Meeke', 'Carramore', 'Lakeview', 'Sligo', 'Sligo', 'nora@yahoo.ie', 878765432, '1998-02-24', '', ''),
('L00567891', 'fifthone', 'Fidelma', 'Mannion', 'Stonetown', 'Rathbawn', 'Donloge', 'Donegal', 'fidelma@gmail.com', 873876543, '2000-08-27', '', ''),
('L00678912', 'sixthone', 'Helen', 'Gaberial', 'Oorid', 'Dunmore', 'Ballyshannon', 'Donegal', 'helen@gmail.com', 84765432, '1990-07-20', '', ''),
('L00789123', 'seventhone', 'Margaret', 'Towey', '12 Street Lane', NULL, 'Tuam', 'Galway', 'marg@yahoo.ie', 89561239, '2011-02-24', '', ''),
('L00891234', 'eightone', 'Jas', 'Loftus', '5 Lows Lane', NULL, 'Tullaghan', 'Leitrim', 'jas@eir.ie', 98357951, '1988-12-01', '', ''),
('L00912345', 'ninethone', 'Melvyn', 'Wickes', '98 Hyde Road', NULL, 'Buncrana', 'Donegal', 'melvyn@hotmail.ie', 85146328, '1992-06-14', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `password` (`passwd`),
  ADD UNIQUE KEY `userID` (`userID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
