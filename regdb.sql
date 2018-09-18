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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(8) NOT NULL,
  `userID` varchar(10) NOT NULL DEFAULT 'L00',
  `passwd` varchar(8) NOT NULL,
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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100103;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
