-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 08:16 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streetlight`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `ADMINID` varchar(100) NOT NULL,
  `ADMINPASS` varchar(100) NOT NULL,
  `ADMINEMAIL` varchar(100) NOT NULL,
  `ADMINMOBILE` varchar(100) NOT NULL,
  `ADMINSTATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `ADMINID`, `ADMINPASS`, `ADMINEMAIL`, `ADMINMOBILE`, `ADMINSTATUS`) VALUES
(1, '0', 'pass123', 'pjena721@gmail.com', '9938083289', 2),
(3, 'somya', 'pass', 'somya@test.com', '789456123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `ID` int(11) NOT NULL,
  `area_name` varchar(100) NOT NULL,
  `Longitude` varchar(100) NOT NULL,
  `Latitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`ID`, `area_name`, `Longitude`, `Latitude`) VALUES
(1, 'marathali', '789879', '87979'),
(2, 'bengalur', '77.60136220217026', '12.933933049752007');

-- --------------------------------------------------------

--
-- Table structure for table `sl`
--

CREATE TABLE `sl` (
  `ID` int(11) NOT NULL,
  `SL_ID` int(11) NOT NULL,
  `SL_PASS` varchar(100) NOT NULL,
  `POWER` float NOT NULL,
  `CURRENT` float NOT NULL,
  `VOLT` float NOT NULL,
  `LOW_VOLT` float NOT NULL,
  `HIGH_VOLT` float NOT NULL,
  `D1` int(11) NOT NULL,
  `D2` int(11) NOT NULL,
  `D3` int(11) NOT NULL,
  `D4` int(11) NOT NULL,
  `ADC1` int(11) NOT NULL,
  `ADC2` int(11) NOT NULL,
  `ADC3` int(11) NOT NULL,
  `ADC4` int(11) NOT NULL,
  `LONGITUDE` varchar(200) NOT NULL,
  `LATITUDE` varchar(200) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` time NOT NULL,
  `Internetconnected` int(11) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Device_Status` int(11) NOT NULL,
  `VOLTR` varchar(100) NOT NULL,
  `VOLTB` varchar(100) NOT NULL,
  `VOLTY` varchar(100) NOT NULL,
  `HVR` varchar(100) NOT NULL,
  `HVB` varchar(100) NOT NULL,
  `HBY` varchar(100) NOT NULL,
  `LVR` varchar(100) NOT NULL,
  `LVB` varchar(100) NOT NULL,
  `LVY` varchar(100) NOT NULL,
  `CY` varchar(50) NOT NULL,
  `CR` varchar(50) NOT NULL,
  `CB` varchar(50) NOT NULL,
  `PHASE` int(11) NOT NULL,
  `SMODE` int(11) NOT NULL,
  `MMODE` int(11) NOT NULL,
  `FAULT` int(11) NOT NULL,
  `BRIGHTNESS` varchar(100) NOT NULL,
  `ENERGY` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sl`
--

INSERT INTO `sl` (`ID`, `SL_ID`, `SL_PASS`, `POWER`, `CURRENT`, `VOLT`, `LOW_VOLT`, `HIGH_VOLT`, `D1`, `D2`, `D3`, `D4`, `ADC1`, `ADC2`, `ADC3`, `ADC4`, `LONGITUDE`, `LATITUDE`, `DATE`, `TIME`, `Internetconnected`, `Area`, `Device_Status`, `VOLTR`, `VOLTB`, `VOLTY`, `HVR`, `HVB`, `HBY`, `LVR`, `LVB`, `LVY`, `CY`, `CR`, `CB`, `PHASE`, `SMODE`, `MMODE`, `FAULT`, `BRIGHTNESS`, `ENERGY`) VALUES
(22, 2114, 'pass', 0, 0, 220, 74, 43, 0, 0, 0, 0, 0, 0, 0, 0, '77.60813542010193', '12.933933049752007', '2022-03-18', '12:07:52', 1, 'bengalur', 1, '0', '0', '0', '20', '0', '0', '0', '0', '0', '0', '0', '0', 3, 0, 0, 1, '60', ''),
(24, 2116, 'pass', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '77.60136220217026', '12.933933049752007', '2022-03-18', '06:56:46', 0, 'bengalur', 1, '0', '0', '0', '98', '97', '99', '87', '28', '20', '0', '0', '0', 3, 1, 0, 0, '76', ''),
(25, 2117, 'pass', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '77.60136220217026', '12.6', '2022-03-19', '12:14:29', 0, 'bengalur', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 3, 0, 0, 0, '', ''),
(26, 2118, 'pass', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '77.60136220217026', '12.933933049752007', '2022-03-19', '12:32:56', 0, 'bengalur', 0, '0', '0', '0', '86', '96', '100', '30', '11', '14', '0', '0', '0', 3, 0, 0, 0, '69', '');

-- --------------------------------------------------------

--
-- Table structure for table `sl_status`
--

CREATE TABLE `sl_status` (
  `ID` int(11) NOT NULL,
  `SL_ID` int(11) NOT NULL,
  `SL_PASS` varchar(100) NOT NULL,
  `POWER` float NOT NULL,
  `CURRENT` float NOT NULL,
  `VOLT` float NOT NULL,
  `LOW_VOLT` float NOT NULL,
  `HIGH_VOLT` float NOT NULL,
  `D1` int(11) NOT NULL,
  `D2` int(11) NOT NULL,
  `D3` int(11) NOT NULL,
  `D4` int(11) NOT NULL,
  `ADC1` int(11) NOT NULL,
  `ADC2` int(11) NOT NULL,
  `ADC3` int(11) NOT NULL,
  `ADC4` int(11) NOT NULL,
  `LONGITUDE` varchar(200) NOT NULL,
  `LATITUDE` varchar(200) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` time NOT NULL,
  `Internetconnected` int(11) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Device_Status` int(11) NOT NULL,
  `VOLTR` varchar(100) NOT NULL,
  `VOLTB` varchar(100) NOT NULL,
  `VOLTY` varchar(100) NOT NULL,
  `HVR` varchar(100) NOT NULL,
  `HVB` varchar(100) NOT NULL,
  `HBY` varchar(100) NOT NULL,
  `LVR` varchar(100) NOT NULL,
  `LVB` varchar(100) NOT NULL,
  `LVY` varchar(100) NOT NULL,
  `CY` varchar(50) NOT NULL,
  `CR` varchar(50) NOT NULL,
  `CB` varchar(50) NOT NULL,
  `PHASE` int(11) NOT NULL,
  `SMODE` int(11) NOT NULL,
  `MMODE` int(11) NOT NULL,
  `FAULT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sl_status`
--

INSERT INTO `sl_status` (`ID`, `SL_ID`, `SL_PASS`, `POWER`, `CURRENT`, `VOLT`, `LOW_VOLT`, `HIGH_VOLT`, `D1`, `D2`, `D3`, `D4`, `ADC1`, `ADC2`, `ADC3`, `ADC4`, `LONGITUDE`, `LATITUDE`, `DATE`, `TIME`, `Internetconnected`, `Area`, `Device_Status`, `VOLTR`, `VOLTB`, `VOLTY`, `HVR`, `HVB`, `HBY`, `LVR`, `LVB`, `LVY`, `CY`, `CR`, `CB`, `PHASE`, `SMODE`, `MMODE`, `FAULT`) VALUES
(1, 1, '78', 100, 3, 220, 200, 230, 1, 1, 1, 1, 1, 1, 1, 1, '77.70136220217026', '12.960179278446587', '2022-03-16', '02:05:22', 0, 'marathali gjhgh jhg jhg jhgjh gj jgj', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0),
(2, 2101, '123', 120, 2, 220, 150, 230, 1, 1, 1, 1, 1, 1, 1, 1, '77.60136220217026', '12.860179278446587', '2022-03-16', '02:06:22', 0, 'marathali gjhgh jhg jhg jhgjh gj jgj', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0),
(10, 2102, 'pass', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '2022-03-17', '06:09:15', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0),
(11, 2103, 'pass', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '2022-03-17', '06:09:28', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0),
(12, 2104, 'pass', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '2022-03-17', '06:09:34', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0),
(13, 2105, 'pass', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '2022-03-17', '06:11:06', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0),
(14, 2106, 'pass', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '2022-03-17', '06:12:16', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0),
(15, 2107, 'pass', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '2022-03-17', '06:24:53', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0),
(16, 2108, 'pass', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '2022-03-17', '06:25:57', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `ID` int(11) NOT NULL,
  `SADMINUID` varchar(100) NOT NULL,
  `SADMINPASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`ID`, `SADMINUID`, `SADMINPASSWORD`) VALUES
(1, 'sadmin@email.com', 'sadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sl`
--
ALTER TABLE `sl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sl_status`
--
ALTER TABLE `sl_status`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sl`
--
ALTER TABLE `sl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sl_status`
--
ALTER TABLE `sl_status`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
