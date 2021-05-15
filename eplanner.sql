-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 04:45 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eplanner`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `rowID` int(11) NOT NULL,
  `adminID` varchar(55) NOT NULL,
  `Fname` varchar(55) NOT NULL,
  `Lname` varchar(55) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Pass` varchar(55) NOT NULL,
  `Contact` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`rowID`, `adminID`, `Fname`, `Lname`, `Email`, `Pass`, `Contact`) VALUES
(1, 'DFJEW923FSKD', 'event', 'planner', 'eventplannercvsu@gmail.com', 'admin', '0923 223 2342');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod`
--

CREATE TABLE `tbl_prod` (
  `rowID` int(11) NOT NULL,
  `prodID` varchar(111) NOT NULL,
  `prodOwner` varchar(55) NOT NULL,
  `vendorID` varchar(55) NOT NULL,
  `prodName` varchar(111) NOT NULL,
  `prodUnit` varchar(55) NOT NULL,
  `prodPrice` varchar(55) NOT NULL,
  `prodDesc` varchar(111) NOT NULL,
  `prodLoc` varchar(111) NOT NULL,
  `prodDays` varchar(555) NOT NULL,
  `prodImg` varchar(555) NOT NULL,
  `prodType` varchar(11) NOT NULL,
  `uploadedDate` varchar(111) NOT NULL,
  `prodRatings` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod`
--

INSERT INTO `tbl_prod` (`rowID`, `prodID`, `prodOwner`, `vendorID`, `prodName`, `prodUnit`, `prodPrice`, `prodDesc`, `prodLoc`, `prodDays`, `prodImg`, `prodType`, `uploadedDate`, `prodRatings`) VALUES
(13, '7YKLGTEQM2OP8C3A5IF1BJ', 'Lezel Dress & Attire', 'H8CDX1MA0PBV', 'Debut Package Venue', 'Pax', '1000', '1-day rent', '\"  General Trias Cavite\"', '[\"Sunday - 21:54 ~ 21:54\",\"Monday - 08:00 AM ~ 08:00 AM\",\"Tuesday - 08:00 AM ~ 08:00 AM\",\"Wednesday - 08:00 AM ~ 08:00 AM\",\"Thursday - 08:00 AM ~ 08:00 AM\",\"Friday - 08:00 AM ~ 08:00 AM\",\"Saturday - 08:00 AM ~ 08:00 AM\"]', 'images/prod/DY6I87GFB5U3KCWMZA2T.jpg', '1', '1558014862', '2'),
(14, 'F1MHJZY72BIK6N3RU5P9L8', 'Lezel Dress & Attire', 'H8CDX1MA0PBV', 'Wedding Coverage Service Catering', 'Pax', '600', '1-day', '\"  Naic Cavite\"', '[\"Sunday -  ~ \",\"Monday - 08:00 AM ~ 08:00 AM\",\"Tuesday - 08:00 AM ~ 08:00 AM\",\"Wednesday - 08:00 AM ~ 08:00 AM\",\"Thursday - 08:00 AM ~ 08:00 AM\",\"Friday - 08:00 AM ~ 08:00 AM\",\"Saturday - 08:00 AM ~ 08:00 AM\"]', 'images/prod/H4JG2A0NWVDT9PB85OCQ.jpg', '4', '1558014982', '0'),
(15, 'NS10RYITD6PX975LHVJUZW', 'Lezel Dress & Attire', 'H8CDX1MA0PBV', 'Toxido', 'Piece', '500', '1-day rent', '\"  Kawit Cavite\"', '[\"Sunday - 21:59 ~ 21:59\",\"Monday - 08:00 AM ~ 08:00 AM\",\"Tuesday - 08:00 AM ~ 08:00 AM\",\"Wednesday - 08:00 AM ~ 08:00 AM\",\"Thursday - 08:00 AM ~ 08:00 AM\",\"Friday - 08:00 AM ~ 08:00 AM\",\"Saturday - 08:00 AM ~ 08:00 AM\"]', 'images/prod/C4PJXMGQ59UZTHLI37WF.jpg', '2', '1558015089', '0'),
(16, 'YSU5QDO3T719BNEP6VXRZL', 'Lezel Dress & Attire', 'H8CDX1MA0PBV', 'Birthday Coverage', 'Day', '10000', '1-day', '\"  Imus Cavite\"', '[\"Sunday -  ~ \",\"Monday - 08:00 AM ~ 08:00 AM\",\"Tuesday - 08:00 AM ~ 08:00 AM\",\"Wednesday - 08:00 AM ~ 08:00 AM\",\"Thursday - 08:00 AM ~ 08:00 AM\",\"Friday - 08:00 AM ~ 08:00 AM\",\"Saturday - 08:00 AM ~ 08:00 AM\"]', 'images/prod/JOVGMQKLXHB2Z1IFPEW7.jpg', '3', '1558015267', '1'),
(17, 'CUHF5WRGS72YBV1XJ8QMN6', 'Tea Garden Resort', 'OCG0H2PEN7RB', 'Outing Catering', 'Pax', '550', '1-day rent', '\"  San Gabriel La Union\"', '[\"Sunday -  ~ \",\"Monday - 08:00 AM ~ 08:00 AM\",\"Tuesday - 08:00 AM ~ 08:00 AM\",\"Wednesday - 08:00 AM ~ 08:00 AM\",\"Thursday - 08:00 AM ~ 08:00 AM\",\"Friday - 08:00 AM ~ 08:00 AM\",\"Saturday - 08:00 AM ~ 08:00 AM\"]', 'images/prod/2SBT70YQGDZOALRVXHMJ.jpg', '4', '1558015518', '1'),
(18, 'ZDTSG1L5RKJBNYM3VXF6UP', 'Tea Garden Resort', 'OCG0H2PEN7RB', 'Wedding Gown', 'Piece', '1500', '1-day', '\"  Luna La Union\"', '[\"Sunday -  ~ \",\"Monday - 08:00 AM ~ 08:00 AM\",\"Tuesday - 08:00 AM ~ 08:00 AM\",\"Wednesday - 08:00 AM ~ 08:00 AM\",\"Thursday - 08:00 AM ~ 08:00 AM\",\"Friday - 08:00 AM ~ 08:00 AM\",\"Saturday - 08:00 AM ~ 08:00 AM\"]', 'images/prod/I3P7AKLB8QG0UF6OH5Z9.jpg', '2', '1558015615', '0'),
(19, 'RSL280OCZJ5K36ITXEPHMV', 'Tea Garden Resort', 'OCG0H2PEN7RB', 'Wedding Venue Service', 'Pax', '600', '1-day rent', '\"  Bacnotan La Union\"', '[\"Sunday -  ~ \",\"Monday - 08:00 AM ~ 08:00 AM\",\"Tuesday - 08:00 AM ~ 08:00 AM\",\"Wednesday - 08:00 AM ~ 08:00 AM\",\"Thursday - 08:00 AM ~ 08:00 AM\",\"Friday - 08:00 AM ~ 08:00 AM\",\"Saturday - 08:00 AM ~ 08:00 AM\"]', 'images/prod/VJHM69ASZ0YLXDQ1RKW3.jpg', '1', '1558015714', '1'),
(20, 'Y52DH4IK1AXNCV9RB7M8EZ', 'Tea Garden Resort', 'OCG0H2PEN7RB', 'Graduation Pictorial', 'Pax', '1550', '1-day pictorial', '\"  San Fernando La Union\"', '[\"Sunday -  ~ \",\"Monday - 08:00 AM ~ 08:00 AM\",\"Tuesday - 08:00 AM ~ 08:00 AM\",\"Wednesday - 08:00 AM ~ 08:00 AM\",\"Thursday - 08:00 AM ~ 08:00 AM\",\"Friday - 08:00 AM ~ 08:00 AM\",\"Saturday - 08:00 AM ~ 08:00 AM\"]', 'images/prod/ZX2MAI9FYN8CQPEJGSBV.jpg', '3', '1558015860', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ratings`
--

CREATE TABLE `tbl_ratings` (
  `rowID` int(11) NOT NULL,
  `userID` varchar(55) NOT NULL,
  `prodID` varchar(55) NOT NULL,
  `starRate` varchar(11) NOT NULL,
  `RatedDate` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ratings`
--

INSERT INTO `tbl_ratings` (`rowID`, `userID`, `prodID`, `starRate`, `RatedDate`) VALUES
(1, 'QEP45DY2J0ZK', '7YKLGTEQM2OP8C3A5IF1BJ', '5', '1558058729'),
(2, 'WQYB375GHU0X', '7YKLGTEQM2OP8C3A5IF1BJ', '4', '1558059162'),
(3, 'WQYB375GHU0X', 'RSL280OCZJ5K36ITXEPHMV', '4', '1558059221'),
(4, 'WQYB375GHU0X', 'CUHF5WRGS72YBV1XJ8QMN6', '5', '1558059286'),
(5, 'WQYB375GHU0X', 'YSU5QDO3T719BNEP6VXRZL', '4', '1558059360'),
(6, 'WQYB375GHU0X', 'Y52DH4IK1AXNCV9RB7M8EZ', '3', '1558059374');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reports`
--

CREATE TABLE `tbl_reports` (
  `rowID` int(11) NOT NULL,
  `Reporter` varchar(55) NOT NULL,
  `Reported` varchar(55) NOT NULL,
  `Reason` varchar(555) NOT NULL,
  `ReportDate` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reserved`
--

CREATE TABLE `tbl_reserved` (
  `rowID` int(11) NOT NULL,
  `vendorID` varchar(111) NOT NULL,
  `TransID` varchar(111) NOT NULL,
  `prodID` varchar(222) NOT NULL,
  `EventDate` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reserved`
--

INSERT INTO `tbl_reserved` (`rowID`, `vendorID`, `TransID`, `prodID`, `EventDate`) VALUES
(1, 'H8CDX1MA0PBV', '3BUVHGNJEJZ', '7YKLGTEQM2OP8C3A5IF1BJ', 'Tue Jun 11 2019'),
(2, 'H8CDX1MA0PBV', '3BUVHGNJEJZ', '7YKLGTEQM2OP8C3A5IF1BJ', 'Wed Jun 12 2019'),
(3, 'OCG0H2PEN7RB', 'R5XPEV4SLGQ', 'RSL280OCZJ5K36ITXEPHMV', 'Sun Jul 07 2019'),
(4, 'OCG0H2PEN7RB', 'IHO35QXWRAY', 'CUHF5WRGS72YBV1XJ8QMN6', 'Sat Jul 06 2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `rowID` int(11) NOT NULL,
  `Venue` varchar(555) NOT NULL,
  `Catering` varchar(555) NOT NULL,
  `Photo` varchar(555) NOT NULL,
  `Couture` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`rowID`, `Venue`, `Catering`, `Photo`, `Couture`) VALUES
(1, 'images/index/5J21V73NAZPTHEFMLCQX.jpg', 'images/index/7Q3KL02GHP5ZOY1FRSBW.jpg', 'images/index/TW0ZFOSB3IN6KA41GV7Y.jpg', 'images/index/0XCVRPYS4E19DUQBOL7K.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `rowID` int(11) NOT NULL,
  `TransID` varchar(55) NOT NULL,
  `userID` varchar(55) NOT NULL,
  `vendorID` varchar(55) NOT NULL,
  `prodID` varchar(55) NOT NULL,
  `SchedDays` varchar(555) NOT NULL,
  `TransDate` varchar(55) NOT NULL,
  `TransStatus` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`rowID`, `TransID`, `userID`, `vendorID`, `prodID`, `SchedDays`, `TransDate`, `TransStatus`) VALUES
(1, '3BUVHGNJEJZ', 'QEP45DY2J0ZK', 'H8CDX1MA0PBV', '7YKLGTEQM2OP8C3A5IF1BJ', '[\"Tue Jun 11 2019\",\"Wed Jun 12 2019\"]', '1558059085', '2'),
(2, 'R5XPEV4SLGQ', 'WQYB375GHU0X', 'OCG0H2PEN7RB', 'RSL280OCZJ5K36ITXEPHMV', '[\"Sun Jul 07 2019\"]', '1558059474', '2'),
(3, 'IHO35QXWRAY', 'WQYB375GHU0X', 'OCG0H2PEN7RB', 'CUHF5WRGS72YBV1XJ8QMN6', '[\"Sat Jul 06 2019\"]', '1558059516', '2'),
(4, '73YEXLIYS4X', 'WQYB375GHU0X', 'OCG0H2PEN7RB', 'Y52DH4IK1AXNCV9RB7M8EZ', '[\"Sun Jul 07 2019\"]', '1558059390', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `rowID` int(11) NOT NULL,
  `userID` varchar(55) NOT NULL,
  `Fname` varchar(55) NOT NULL,
  `Lname` varchar(55) NOT NULL,
  `Contact` varchar(55) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Pass` varchar(55) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `imgProfile` varchar(555) NOT NULL,
  `Status` varchar(11) NOT NULL,
  `Reports` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`rowID`, `userID`, `Fname`, `Lname`, `Contact`, `Email`, `Pass`, `Address`, `imgProfile`, `Status`, `Reports`) VALUES
(2, 'QEP45DY2J0ZK', 'Jason', 'Matarong', '09162992551', 'panopodalphy@gmail.com', 'jason', 'cavite', '', '0', '0'),
(3, 'WQYB375GHU0X', 'Mikee', 'Toledo', '09558257791', 'matarongjason11@gmail.com', 'jason', 'la union', '', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor`
--

CREATE TABLE `tbl_vendor` (
  `rowID` int(11) NOT NULL,
  `vendorID` varchar(55) NOT NULL,
  `BusinessName` varchar(111) NOT NULL,
  `Fname` varchar(55) NOT NULL,
  `Lname` varchar(55) NOT NULL,
  `Contact` varchar(55) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Pass` varchar(55) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `imgProfile` varchar(111) NOT NULL,
  `Status` varchar(11) NOT NULL,
  `Reports` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vendor`
--

INSERT INTO `tbl_vendor` (`rowID`, `vendorID`, `BusinessName`, `Fname`, `Lname`, `Contact`, `Email`, `Pass`, `Address`, `imgProfile`, `Status`, `Reports`) VALUES
(5, 'H8CDX1MA0PBV', 'Lezel Dress & Attire', 'Lezel ', 'Villas', '09756689051', 'taeyoung123456789haha@gmail.com', 'jason', 'batangas', '', '0', '0'),
(6, 'OCG0H2PEN7RB', 'Tea Garden Resort', 'Joel', 'Carlos', '09162992551', 'kamakahepa321@gmail.com', 'jason', 'cebu', '', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`rowID`);

--
-- Indexes for table `tbl_prod`
--
ALTER TABLE `tbl_prod`
  ADD PRIMARY KEY (`rowID`);

--
-- Indexes for table `tbl_ratings`
--
ALTER TABLE `tbl_ratings`
  ADD PRIMARY KEY (`rowID`);

--
-- Indexes for table `tbl_reports`
--
ALTER TABLE `tbl_reports`
  ADD PRIMARY KEY (`rowID`);

--
-- Indexes for table `tbl_reserved`
--
ALTER TABLE `tbl_reserved`
  ADD PRIMARY KEY (`rowID`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`rowID`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`rowID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`rowID`);

--
-- Indexes for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  ADD PRIMARY KEY (`rowID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `rowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_prod`
--
ALTER TABLE `tbl_prod`
  MODIFY `rowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_ratings`
--
ALTER TABLE `tbl_ratings`
  MODIFY `rowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_reports`
--
ALTER TABLE `tbl_reports`
  MODIFY `rowID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reserved`
--
ALTER TABLE `tbl_reserved`
  MODIFY `rowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `rowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `rowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `rowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  MODIFY `rowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
