-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 04:54 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinicmanamentsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ACC_ID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Age` int(20) NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ACC_ID`, `FirstName`, `LastName`, `Age`, `Sex`, `Role`, `UserName`, `Password`, `PhoneNumber`, `Nationality`, `City`, `status`) VALUES
(123, 'alemitu', 'alex', 44, 'M', 'Doctor', 'doctor', 'b59c67bf196a4758191e42f76670ceba', 987654321, 'Europe', 'Gondar', 0),
(244, 'asmamaw', 'mena', 44, 'Female', 'Admin', 'admin', '934b535800b1cba8f96a', 987654321, 'Europe', 'Gondar', 0),
(666, 'asmamaw', 'kebede', 33, 'M', 'Pharmacist', 'pharmacist', 'b59c67bf196a4758191e42f76670ceba', 924501958, 'Europe', 'BB', 0),
(985, 'asmamaw', 'chaklu', 21, 'M', 'Nurse', 'nurse', 'b59c67bf196a4758191e42f76670ceba', 987654327, 'Ethiopia', 'Gondar', 0),
(1234, 'alemu', 'lema', 66, 'm', 'Admin', 'admin', 'b59c67bf196a4758191e42f76670ceba', 998765432, 'Ethipain', 'Gonder', 0),
(6543, 'asmamaw', 'chaklu', 22, 'Female', 'Receptionist', 'receptionist', 'b59c67bf196a4758191e42f76670ceba', 987654321, 'S.Africa', 'AA', 0),
(12342, 'asmamaw', 'chaklu', 22, 'Male', 'LabTech', 'labtech', 'b59c67bf196a4758191e42f76670ceba', 987654321, 'Europe', 'BB', 0);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `AppointmentID` int(11) NOT NULL,
  `CardNumber` int(11) NOT NULL,
  `ACC_ID` int(11) NOT NULL,
  `AppointmentGivenDate` date NOT NULL,
  `AppointmentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`AppointmentID`, `CardNumber`, `ACC_ID`, `AppointmentGivenDate`, `AppointmentDate`) VALUES
(1, 4, 123, '2018-05-23', '2018-05-23'),
(2, 28, 123, '2018-05-19', '0000-00-00'),
(4, 34, 123, '2018-05-19', '2018-05-25'),
(5, 30, 123, '2018-05-24', '2018-05-23'),
(6, 29, 123, '2018-05-24', '2018-05-24'),
(7, 34, 123, '2018-05-24', '2018-05-23'),
(8, 27, 123, '2018-05-24', '2018-05-24'),
(11, 31, 123, '2018-05-24', '2018-05-15'),
(12, 27, 123, '2018-05-30', '2018-05-29'),
(13, 36, 123, '2018-06-01', '2018-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `BID` int(11) NOT NULL,
  `CardNumber` int(11) NOT NULL,
  `ACC_ID` int(11) NOT NULL,
  `PaymentCost` float NOT NULL,
  `TotalCost` float NOT NULL,
  `PayedDate` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`BID`, `CardNumber`, `ACC_ID`, `PaymentCost`, `TotalCost`, `PayedDate`, `status`) VALUES
(104, 30, 7777, 2344, 0, '2018-05-30', 'Lab Test payment'),
(105, 37, 7777, 33.5, 2345, '2018-05-30', 'Lab Test payment'),
(106, 34, 7777, 12.89, 2379.5, '2018-05-30', 'Lab Test payment'),
(107, 29, 7777, 34.98, 2393.39, '2018-05-31', 'Lab Test payment'),
(108, 30, 7777, 34, 2429.37, '2018-05-31', 'Drug Payment'),
(109, 34, 7777, 29.89, 2464.37, '2018-05-31', 'Drug Payment');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `DID` int(11) NOT NULL,
  `CardNumber` int(11) NOT NULL,
  `ACC_ID` int(11) NOT NULL,
  `TreatmentResult` varchar(40) NOT NULL,
  `Reason` varchar(20) NOT NULL,
  `DateOfReg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`DID`, `CardNumber`, `ACC_ID`, `TreatmentResult`, `Reason`, `DateOfReg`) VALUES
(1, 33, 23232, 'wwefw', 'xxx', '2018-05-15'),
(14, 33, 123, 'gjhk', 'vbbvb', '2018-05-30'),
(15, 30, 123, '                hkkklj', 'uyggjy', '2018-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `DrugId` int(11) NOT NULL,
  `ACC_ID` int(11) DEFAULT NULL,
  `CardNumber` int(11) DEFAULT NULL,
  `DrugName` varchar(25) NOT NULL,
  `DrugCampany` varchar(20) DEFAULT NULL,
  `DrugAmount` int(11) DEFAULT NULL,
  `DrugMadeIn` varchar(20) DEFAULT NULL,
  `DateOfReg` date DEFAULT NULL,
  `ManufactureDate` date DEFAULT NULL,
  `ExpiredDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`DrugId`, `ACC_ID`, `CardNumber`, `DrugName`, `DrugCampany`, `DrugAmount`, `DrugMadeIn`, `DateOfReg`, `ManufactureDate`, `ExpiredDate`) VALUES
(1, 666, 29, 'www', 'Ethiopia', 345, 'India', '2018-05-28', '2018-05-28', '2018-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `drugorder`
--

CREATE TABLE `drugorder` (
  `DrugOrderId` int(11) NOT NULL,
  `CardNumber` int(11) NOT NULL,
  `ACC_ID` int(11) DEFAULT NULL,
  `DrugName` varchar(150) NOT NULL,
  `DrugAmount` int(11) DEFAULT NULL,
  `DrugAccessIn` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `PrescribedBy` varchar(25) NOT NULL,
  `OrderDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drugorder`
--

INSERT INTO `drugorder` (`DrugOrderId`, `CardNumber`, `ACC_ID`, `DrugName`, `DrugAmount`, `DrugAccessIn`, `PrescribedBy`, `OrderDate`) VALUES
(14, 4, 123, 'ddd', 345, 'Month', 'abebe', '2018-05-29'),
(15, 1, 123, 'ddd', 23, 'Month', 'ashu', '2018-05-28'),
(16, 9, 123, 'cc', 14, 'Year', 'ashu', '2018-05-28'),
(17, 33, 123, 'ddd', 23, 'Month', 'ashu', '2018-05-19'),
(25, 28, 123, 'ddd', 23, 'Day', 'ashu', '2018-05-26'),
(26, 32, 123, 'wewe', 123, 'Month', 'ddfg', '2018-05-26'),
(27, 27, 123, '3333', 345, 'Day', 'jj', '2018-05-30'),
(28, 30, 123, 'ccv', 345, 'Day', 'ashu', '2018-05-31'),
(29, 34, 123, 'dd', 24, 'Year', 'ashu', '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `UserID` int(15) NOT NULL,
  `ACC_ID` int(11) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `Age` int(11) NOT NULL,
  `Sex` varchar(4) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Nationality` varchar(15) NOT NULL,
  `Kebele` varchar(15) NOT NULL,
  `Woreda` varchar(15) NOT NULL,
  `Zone` varchar(15) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Specialization` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`UserID`, `ACC_ID`, `FirstName`, `LastName`, `Age`, `Sex`, `PhoneNumber`, `Nationality`, `Kebele`, `Woreda`, `Zone`, `City`, `Specialization`) VALUES
(1, 123, 'belete', 'mena', 33, 'M', '0987654321', 'Ethiopia', '4444', 'nnn', 'yyyy', 'Gondar', 'nnnn'),
(2, 123, 'belete', 'mena', 33, 'M', '0987654321', 'Ethiopia', '4444', 'nnn', 'yyyy', 'Gondar', 'nnnn'),
(3, 1234, 'mulu', 'chaklu', 23, 'Male', '0987654321', 'Ethiopia', '4444', 'eeee', 'ddd', 'Gondar', 'nnnn'),
(4, 1234, 'mulu', 'chaklu', 23, 'Male', '0987654321', 'Ethiopia', '4444', 'eeee', 'ddd', 'Gondar', 'nnnn');

-- --------------------------------------------------------

--
-- Table structure for table `labrequist`
--

CREATE TABLE `labrequist` (
  `LabRequist_ID` int(11) NOT NULL,
  `CardNumber` int(11) NOT NULL,
  `ACC_ID` int(11) NOT NULL,
  `BloodTest` varchar(40) NOT NULL,
  `UrinTest` varchar(20) NOT NULL,
  `FacesTest` varchar(20) NOT NULL,
  `RequistDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labrequist`
--

INSERT INTO `labrequist` (`LabRequist_ID`, `CardNumber`, `ACC_ID`, `BloodTest`, `UrinTest`, `FacesTest`, `RequistDate`) VALUES
(3, 27, 123, 'Yes', 'Yes', 'Yes', '2018-05-19'),
(4, 37, 123, 'Yes', 'Yes', 'Yes', '2018-05-28'),
(5, 30, 123, 'No', 'Yes', 'Yes', '2018-05-29'),
(6, 34, 123, 'Yes', 'Yes', 'Yes', '2018-05-30'),
(7, 29, 123, 'No', 'No', 'No', '2018-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `labresult`
--

CREATE TABLE `labresult` (
  `LabID` int(11) NOT NULL,
  `CardNumber` int(11) NOT NULL,
  `ACC_ID` int(11) DEFAULT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `Sex` varchar(8) DEFAULT NULL,
  `Age` varchar(20) DEFAULT NULL,
  `TreatmentResult` varchar(20) NOT NULL,
  `TreatmentDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labresult`
--

INSERT INTO `labresult` (`LabID`, `CardNumber`, `ACC_ID`, `FirstName`, `LastName`, `Sex`, `Age`, `TreatmentResult`, `TreatmentDate`) VALUES
(3, 234, 7777, 'asmamaw', 'mena', 'male', '22', 'asdd', '2018-05-14'),
(4, 234, 7777, NULL, NULL, NULL, NULL, 'werewr\r\ngrgrgr', '2018-05-15'),
(5, 333, 7777, NULL, NULL, NULL, NULL, '444465', '2018-05-22'),
(6, 33, 7777, NULL, NULL, NULL, NULL, 'rerr', '2018-05-29'),
(7, 27, 12341, NULL, NULL, NULL, NULL, 'fsfsfsf\r\ngdbgdfbgf\r\n', '2018-05-19'),
(8, 37, 12341, NULL, NULL, NULL, NULL, 'ur ma\r\nbt o\r\n', '2018-05-28'),
(9, 37, 12341, NULL, NULL, NULL, NULL, 'GDFGDF\r\nBVCB', '2018-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `nurcingservice`
--

CREATE TABLE `nurcingservice` (
  `TreatID` int(11) NOT NULL,
  `CardNumber` int(11) NOT NULL,
  `ACC_ID` int(11) NOT NULL,
  `Temprature` double NOT NULL,
  `Weight` float DEFAULT NULL,
  `BloodType` varchar(32) NOT NULL,
  `DateOfTreatment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurcingservice`
--

INSERT INTO `nurcingservice` (`TreatID`, `CardNumber`, `ACC_ID`, `Temprature`, `Weight`, `BloodType`, `DateOfTreatment`) VALUES
(12, 28, 985, 0.5, 55.88, 'AB', '2018-05-25'),
(13, 28, 985, 0.5, 55.88, 'AB', '2018-05-25'),
(14, 28, 985, 0.5, 55.88, 'AB', '2018-05-25'),
(15, 28, 985, 0.5, 55.88, 'AB', '2018-05-25'),
(16, 28, 985, 0.5, 55.88, 'AB', '2018-05-25'),
(17, 28, 985, 0.5, 55.88, 'AB', '2018-05-25'),
(18, 28, 985, 0.5, 55.88, 'AB', '2018-05-25'),
(19, 28, 985, 0.5, 55.88, 'AB', '2018-05-25'),
(20, 28, 985, 0.5, 55.88, 'AB', '2018-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `patientregistration`
--

CREATE TABLE `patientregistration` (
  `CardNumber` int(11) NOT NULL,
  `ACC_ID` int(11) NOT NULL,
  `FirstName` varchar(23) NOT NULL,
  `MiddleName` varchar(21) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Sex` varchar(7) NOT NULL,
  `Zone` varchar(20) DEFAULT NULL,
  `Woreda` varchar(20) DEFAULT NULL,
  `Kebele` varchar(20) DEFAULT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `BirthDate` date NOT NULL,
  `RegistrationDate` date NOT NULL,
  `status` varchar(22) NOT NULL,
  `Photo` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientregistration`
--

INSERT INTO `patientregistration` (`CardNumber`, `ACC_ID`, `FirstName`, `MiddleName`, `LastName`, `Sex`, `Zone`, `Woreda`, `Kebele`, `PhoneNumber`, `Nationality`, `BirthDate`, `RegistrationDate`, `status`, `Photo`) VALUES
(27, 7777, 'alemitu', 'alemu', 'chaklu', 'Male', 's/G', 'dd', 'kuku', 987654321, 'Corea', '2018-05-08', '1970-01-01', 'treated', '2.jpg'),
(28, 7777, 'asmamaw', 'alemu', 'mena', 'Male', 's/G', 'dd', 'kuku', 987654321, 'Corea', '2018-05-28', '1970-01-01', 'treated', '2.jpg'),
(29, 7777, 'asmamaw', 'alemu', 'mena', 'Male', 's/G', 'dd', 'kuku', 987654321, 'Corea', '2018-05-28', '1970-01-01', 'treated', '2.jpg'),
(30, 7777, 'asmamaw', 'alemu', 'mena', 'Male', 's/G', 'dd', 'kuku', 987654321, 'Corea', '2018-05-28', '1970-01-01', 'treated', '2.jpg'),
(31, 7777, 'asmamaw', 'alemu', 'mena', 'Male', 's/G', 'dd', 'kuku', 987654321, 'Corea', '2018-05-28', '1970-01-01', 'treated', '2.jpg'),
(32, 7777, 'asmamaw', 'alemu', 'mena', 'Male', 's/G', 'dd', 'kuku', 987654321, 'Corea', '2018-05-28', '2018-05-19', 'treated', '2.jpg'),
(33, 7777, 'asmamaw', 'alemu', 'mena', 'Male', 's/G', 'dd', 'kuku', 987654321, 'Corea', '2018-05-28', '2018-05-19', 'treated', '2.jpg'),
(34, 7777, 'abebe', 'alemu', 'mena', 'Male', 's/G', 'dd', 'kuku', 987654321, 'Australia', '2018-05-15', '2018-05-19', 'treated', '1.jpg'),
(35, 7777, 'asmamaw', 'alemu', 'mena', 'select', 'qwwer', 'gghgh', 'kuku', 987654321, 'Corea', '2018-05-20', '2018-05-24', 'treated', 'App-share-manager-icon.pn'),
(36, 7777, 'asmamaw', 'alemu', 'mena', 'Male', 's/G', 'dd', 'kuku', 987654321, 'Egypt', '2018-05-22', '2018-05-24', 'waiting', 'download.jpg'),
(37, 7777, 'lemlemu', 'zemene', 'gashu', 'Male', 'N/G', 'gghgh', 'kuku', 987654321, 'Ethiopian', '2018-05-23', '2018-05-28', 'treated', 'b.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ACC_ID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`AppointmentID`),
  ADD KEY `CardNumber` (`CardNumber`),
  ADD KEY `ACC_ID` (`ACC_ID`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`BID`),
  ADD KEY `CardNumber` (`CardNumber`),
  ADD KEY `ACC_ID` (`ACC_ID`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`DID`),
  ADD KEY `CardNumber` (`CardNumber`),
  ADD KEY `ACC_ID` (`ACC_ID`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`DrugId`),
  ADD KEY `CardNumber` (`CardNumber`),
  ADD KEY `DrugId` (`DrugId`),
  ADD KEY `ACC_ID` (`ACC_ID`);

--
-- Indexes for table `drugorder`
--
ALTER TABLE `drugorder`
  ADD PRIMARY KEY (`DrugOrderId`),
  ADD KEY `CardNumber` (`CardNumber`),
  ADD KEY `ACC_ID` (`ACC_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `ACC_ID` (`ACC_ID`);

--
-- Indexes for table `labrequist`
--
ALTER TABLE `labrequist`
  ADD PRIMARY KEY (`LabRequist_ID`),
  ADD KEY `CardNumber` (`CardNumber`),
  ADD KEY `ACC_ID` (`ACC_ID`);

--
-- Indexes for table `labresult`
--
ALTER TABLE `labresult`
  ADD PRIMARY KEY (`LabID`),
  ADD KEY `CardNumber` (`CardNumber`),
  ADD KEY `ACC_ID` (`ACC_ID`);

--
-- Indexes for table `nurcingservice`
--
ALTER TABLE `nurcingservice`
  ADD PRIMARY KEY (`TreatID`),
  ADD KEY `CardNumber` (`CardNumber`),
  ADD KEY `ACC_ID` (`ACC_ID`);

--
-- Indexes for table `patientregistration`
--
ALTER TABLE `patientregistration`
  ADD PRIMARY KEY (`CardNumber`),
  ADD KEY `ACC_ID` (`ACC_ID`),
  ADD KEY `ACC_ID_2` (`ACC_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ACC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12343;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `AppointmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `DrugId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `drugorder`
--
ALTER TABLE `drugorder`
  MODIFY `DrugOrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `UserID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `labrequist`
--
ALTER TABLE `labrequist`
  MODIFY `LabRequist_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `labresult`
--
ALTER TABLE `labresult`
  MODIFY `LabID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `nurcingservice`
--
ALTER TABLE `nurcingservice`
  MODIFY `TreatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `patientregistration`
--
ALTER TABLE `patientregistration`
  MODIFY `CardNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
