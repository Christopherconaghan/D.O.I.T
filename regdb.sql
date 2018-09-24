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
(3, '', 'fgsgfgs', '', '', '', '', '', 0, '0000-00-00', '', ''),
(4, 'fdea', 'fgsgfgs', '', '', '', '', '', 0, '0000-00-00', '', ''),
(5, 'Helen', 'Magoo', '', '', '', '', '', 0, '0000-00-00', '', ''),
(6, 'Helen', 'Magoo', '', '', '', '', '', 0, '0000-00-00', '', ''),
(7, 'Helen', 'Magoo', '', '', '', '', '', 0, '0000-00-00', '', ''),
(8, 'Helen', 'Magoo', '', '', '', '', '', 0, '0000-00-00', '', ''),
(9, 'Helen', 'Magoo', '', '', '', '', '', 0, '0000-00-00', '', ''),
(10, 'Helen', 'Magoo', '', '', '', '', '', 0, '0000-00-00', '', ''),
(11, 'Helen', 'Magoo', '', '', '', '', '', 0, '0000-00-00', '', ''),
(30, 'kubjbj', 'ljolhi', 'Lone Lanw', '', 'Letterkenny', '', '', 0, '0000-00-00', '', ''),
(31, 'Helen', 'lejodn', 'Port Rd', 'Woreong', 'Letterkenny', '', '', 0, '0000-00-00', '', ''),
(32, 'Helen', 'lejodn', 'Port Rd', 'Woreong', 'Letterkenny', '', '', 0, '0000-00-00', '', ''),
(33, 'dferfh', 'tcyjujh', 'South', '', 'Letterkenny', 'Donegal', '', 0, '0000-00-00', '', ''),
(34, 'huifhauy', 'ygyuk', 'Mainn', '', 'Letterkenny', 'Donegal', 'eoanr@net.ie', 0, '0000-00-00', '', ''),
(35, 'huifhauy', 'ygyuk', 'Mainn', '', 'Letterkenny', 'Donegal', 'eoanr@net.ie', 0, '0000-00-00', '', ''),
(36, 'Jack', 'Rueeond', 'Port', '', 'Letterkenny', 'Donegal', 'werb@ime.ie', 2147483647, '0000-00-00', '', ''),
(37, 'Jack', 'Rueeond', 'Port', '', 'Letterkenny', 'Donegal', 'werb@ime.ie', 2147483647, '0000-00-00', '', ''),
(38, 'djfeoaj', 'khkku', 'Mainn', '', 'Letterkenny', 'Donegal', 'aed@iev.ie', 1648433348, '0000-00-00', '', ''),
(39, 'djfeoaj', 'khkku', 'Mainn', '', 'Letterkenny', 'Donegal', 'aed@iev.ie', 1648433348, '0000-00-00', '', ''),
(40, 'ddtyg', 'kjml;', 'Port', '', 'Letterkenny', 'Donegal', 'werb@ime.ie', 2147483647, '1990-05-24', '', ''),
(41, 'ddtyg', 'kjml;', 'Port', '', 'Letterkenny', 'Donegal', 'werb@ime.ie', 2147483647, '1990-05-24', '', ''),
(42, 'djfeoaj', 'khkku', 'Mainn', '', 'Letterkenny', 'Donegal', 'jdef@ner.ie', 56889632, '1992-10-21', 'images/team_2.j', ''),
(43, 'djfeoaj', 'khkku', 'Mainn', '', 'Letterkenny', 'Donegal', 'jdef@ner.ie', 56889632, '1992-10-21', 'images/team_2.j', ''),
(44, 'rafdfdf', 'khkku', 'Every', 'Place', 'Letterkenny', 'Donegal', 'werb@net.ie', 256936147, '1992-10-21', 'images/team_4.j', ''),
(45, 'rafdfdf', 'khkku', 'Every', 'Place', 'Letterkenny', 'Donegal', 'werb@net.ie', 256936147, '1992-10-21', 'images/team_4.j', ''),
(46, 'rafdfdf', 'khkku', 'Every', 'Place', 'Letterkenny', 'Donegal', 'werb@net.ie', 256936147, '1992-10-21', 'images/team_4.j', ''),
(47, 'rafdfdf', 'khkku', 'Every', 'Place', 'Letterkenny', 'Donegal', 'werb@net.ie', 256936147, '1992-10-21', 'images/team_4.j', ''),
(48, 'rafdfdf', 'khkku', 'Every', 'Place', 'Letterkenny', 'Donegal', 'werb@net.ie', 256936147, '1992-10-21', 'images/team_4.j', ''),
(49, 'rafdfdf', 'khkku', 'Every', 'Place', 'Letterkenny', 'Donegal', 'werb@net.ie', 256936147, '1992-10-21', 'images/team_4.j', ''),
(50, 'rafdfdf', 'khkku', 'Every', 'Place', 'Letterkenny', 'Donegal', 'werb@net.ie', 256936147, '1992-10-21', 'images/team_4.j', ''),
(51, 'Eacen', 'Rueeond', 'Mainn', '', 'Letterkenny', 'Donegal', 'werb@ime.ie', 2147483647, '1992-10-21', 'images/team_3.j', ''),
(52, 'Sue', 'Brown', 'Lost', 'Cause', 'Letterkenny', 'Donegal', 'brown@net.ie', 2147483647, '1999-03-04', 'images/comment_', ''),
(53, 'Sue', 'Jones', 'Port', '', 'Letterkenny', 'Donegal', 'werb@ime.ie', 513646846, '1999-03-04', 'images/team_1.j', ''),
(54, 'dferfh', 'tcyjujh', 'Now', 'Done', 'Letterkenny', 'Donegal', 'werb@ime.ie', 2147483647, '1992-10-21', 'images/team_4.j', ''),
(55, 'Test', 'ing', 'this', 'again', 'Letterkenny', 'Donegal', 'werb@ime.ie', 51348856, '1990-05-24', 'images/team_2.j', '');

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
(1, '1111', 'work', 'aply1'),
(2, 'L002222', 'work', 'cloud1'),
(3, 'L003333', 'work', 'dev3'),
(4, 'L004444', 'work', 'aply3'),
(5, 'L005555', 'work', 'aply3'),
(6, 'L006666', 'work', 'cloud1'),
(7, 'L007777', 'work', 'NULL'),
(8, 'L008888', 'finally', 'NULL'),
(9, 'L009999', 'next', 'NULL'),
(1000, 'L001000100', 'got', 'NULL'),
(100100, 'L001001001', 'done', 'NULL'),
(100101, 'L00100101', 'see', 'NULL'),
(100102, 'L00', '', 'dev1');

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
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100103;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
