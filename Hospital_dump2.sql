-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2017 at 09:53 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hopital`
--
CREATE DATABASE IF NOT EXISTS `hopital` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hopital`;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE `doctors` (
  `Did` int(3) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Patients Pending` int(2) DEFAULT NULL,
  `Available` varchar(5) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`Did`, `Name`, `Email`, `Type`, `Patients Pending`, `Available`) VALUES
(101, 'Nitibha Kaul', 'nitibhakaul12@gmail.com', 'Physician', NULL, 'Yes'),
(102, 'Gaurav Chopra', 'gaurav.chopra@yahoo.in', 'Physician', NULL, 'Yes'),
(103, 'Mohit Narang', 'mohit66rang@gmail.com', 'Cardiologist', NULL, 'Yes'),
(104, 'Naman Aggarwal', 'namanaggar321@gmail.com', 'Cardiologist', NULL, 'Yes'),
(105, 'Kanika Gupta', 'kannugupta@gmail.com', 'Gynaecologist', NULL, 'Yes'),
(106, 'Varun Malhotra', 'varunmalhotra4536@gmail.com', 'Gynaecologist', NULL, 'Yes'),
(107, 'Raj Mehta', 'Neurologist', 'raj.mehta@gmail.com', NULL, 'Yes'),
(108, 'Sachin Bhatnagar', 'bhatnagarsachin@yahoo.in', 'Neurologist', NULL, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE `patients` (
  `pid` varchar(3) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Age` int(3) NOT NULL,
  `Address` longtext NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `Admission` varchar(10) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL DEFAULT 'No',
  `Bed Allotted` varchar(10) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL DEFAULT 'No',
  `Category` varchar(15) NOT NULL,
  `Type` varchar(40) NOT NULL,
  `Doctor Alloted` varchar(3) NOT NULL,
  `Prescription` longtext COMMENT 'To Be Filled by the Doctor'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`Name`) VALUES
('Physician'),
('Cardiologist'),
('Gynaecologist'),
('neurologist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`pid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
