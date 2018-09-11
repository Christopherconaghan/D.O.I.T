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
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `studID` int(10) NOT NULL,
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
  `userID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`studID`, `Fname`, `Lname`, `add1`, `add2`, `town/city`, `county/state`, `email`, `phone`, `DOB`, `Image`, `userID`) VALUES
(1, 'Sam', 'Brown', 'Canan', 'Templeogue', 'Dysart', 'Leitrim', 'sam@yahoo.ie', 83756431, '1996-05-08', '', 'L00123456'),
(2, 'Jack', 'Jones', 'Lisansda', 'Balla', 'Letterkenny', 'Donegal', 'jack@gmail.com', 854579874, '1990-04-13', '', 'L00234567'),
(3, 'Brian', 'Gavaghan', '43 Rosswid St.', NULL, 'Ballybofey', 'Donegal', 'brian@hotmail.ie', 86987456, '2011-02-24', '', 'L00345678'),
(4, 'Nora', 'Meeke', 'Carramore', 'Lakeview', 'Sligo', 'Sligo', 'nora@yahoo.ie', 878765432, '1998-02-24', '', 'L00456789'),
(5, 'Fidelma', 'Mannion', 'Stonetown', 'Rathbawn', 'Donloge', 'Donegal', 'fidelma@gmail.com', 873876543, '2000-08-27', '', 'L00567891'),
(6, 'Helen', 'Gaberial', 'Oorid', 'Dunmore', 'Ballyshannon', 'Donegal', 'helen@gmail.com', 84765432, '1990-07-20', '', 'L00678912'),
(7, 'Margaret', 'Towey', '12 Street Lane', NULL, 'Tuam', 'Galway', 'marg@yahoo.ie', 89561239, '2011-02-24', '', 'L00789123'),
(8, 'Jas', 'Loftus', '5 Lows Lane', NULL, 'Tullaghan', 'Leitrim', 'jas@eir.ie', 98357951, '1988-12-01', '', 'L00891234'),
(9, 'Melvyn', 'Wickes', '98 Hyde Road', NULL, 'Buncrana', 'Donegal', 'melvyn@hotmail.ie', 85146328, '1992-06-14', '', 'L00912345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` varchar(10) NOT NULL,
  `passwd` varchar(10) NOT NULL,
  `courseID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `passwd`, `courseID`) VALUES
('L00123456', 'firstone', 'dev1'),
('L00234567', 'secondone', 'aply1'),
('L00345678', 'thirdone', 'cloud1'),
('L00456789', 'fourthone', 'dev3'),
('L00567891', 'fifthone', 'cloud2'),
('L00678912', 'sixthone', 'aply3'),
('L00789123', 'seventhone', 'dev2'),
('L00891234', 'eightone', 'cloud3'),
('L00912345', 'ninethone', 'aply2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursedetails`
--
ALTER TABLE `coursedetails`
  ADD PRIMARY KEY (`courseID`),
  ADD UNIQUE KEY `courseID` (`courseID`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`studID`),
  ADD UNIQUE KEY `userID` (`userID`),
  ADD KEY `userID_2` (`userID`),
  ADD KEY `studID` (`studID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `courseID` (`courseID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD CONSTRAINT `studentdetails_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `coursedetails` (`courseID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
