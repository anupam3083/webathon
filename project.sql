-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 11:21 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10000) NOT NULL,
  `password` varchar(10000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'anupam3083', 'hello', 1),
(2, 'anupam', 'hello', 1),
(3, 'ritesh', 'pandey', 1),
(4, 'ritesh', 'pandey', 1),
(5, 'ritesh', 'hello', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int(11) NOT NULL,
  `blockname` varchar(1000) NOT NULL,
  `floor` varchar(1000) NOT NULL,
  `rooms` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `blockname`, `floor`, `rooms`, `status`) VALUES
(31, 'A', '1', '12', 1),
(32, 'A', '2', '32', 1),
(33, 'A', '3', '26', 1),
(34, 'B', '1', '25', 1),
(35, 'B', '2', '24', 1),
(36, 'B', '3', '53', 1),
(37, 'B', '4', '12', 1),
(41, 'C', '1', '21', 1),
(42, 'C', '2', '23', 1),
(43, 'D', '1', '22', 1),
(44, 'D', '2', '21', 1),
(45, 'E', '1', '21', 1),
(46, 'E', '2', '21', 1),
(47, 'E', '1', '20', 1),
(48, 'E', '2', '23', 1),
(49, 'E', '3', '25', 1),
(50, 'A', '1', '21', 1),
(51, 'A', '2', '12', 1),
(52, 'A', '3', '55', 1),
(53, 'A', '4', '55', 1),
(54, 'A', '5', '56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `roll` varchar(10000) NOT NULL,
  `room` varchar(1000) NOT NULL,
  `block` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `region` varchar(1000) NOT NULL,
  `floor` varchar(1000) NOT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `room`, `block`, `phone`, `region`, `floor`, `status`) VALUES
(1, '17P31A23GR', 'radha', '112', 'A', '9134354632', 'south', '1', 1),
(2, '16PMH123', 'praneeth', '120', 'C', '8278659431', 'north', '1', 1),
(3, '18MHPQ06G4', 'niradha', '201', 'D', '7201245834', 'south', '2', 1),
(4, '132WE1214', 'naga', '250', 'E', '6204322173', 'south', '2', 1),
(5, '17P31A132', 'bhavani', '302', 'A', '9324340212', 'north', '3', 1),
(6, '12SWX1321', 'srividya', '102', 'B', '9231021142', 'south', '1', 1),
(7, '121FGHT12', 'praneetha', '217', 'E', '9323127892', 'south', '2', 1),
(8, '17P31A23GR', 'sita', '102', 'A', '9442434923', 'north', '1', 1),
(9, '17P31aA126', 'Rakesh', '113', 'C', '9343545242', 'south', '1', 1),
(10, '17P31A231', 'Raju', '415', 'E', '9342415755', 'south', '4', 1),
(11, '17P31A243', 'Shyam', '310', 'D', '9858534248', 'north', '3', 1),
(12, '17P31A1288', 'Ramesh', '313', 'B', '9236478268', 'north', '3', 1),
(13, '17P31A1288', 'Siva', '423', 'A', '9875823562', 'south', '4', 1),
(14, '17P31A1299', 'Pankaj', '201', 'C', '9232302575', 'south', '2', 1),
(15, '17P31A1244', 'Raja', '222', 'A', '9072523562', 'south', '2', 1),
(16, '12MH1A1254', 'srinu', '420', 'A', '9574067364', 'north', '1', 1),
(17, '19SD1AW21', 'meghana', '302', 'C', '9075025723', 'north', '3', 1),
(18, '18P31A12de', 'susmitha', '108', 'B', '9572350572', 'south', '1', 1),
(19, '17P31A1270', 'nandini', '417', 'A', '9705275236', 'north', '4', 1),
(20, '74', '', '100', 'A', '', '', '1', 1),
(21, 'jhgjhj', '4774786566', '101', 'A', '85421', 'Bihar', '1', 1),
(22, '5621850868653', 'kj', '105', 'A', '6852213', 'kjjk', '1', 1),
(23, '52', '3', '103', 'A', '896520', 'Bihar', '1', 1),
(24, '865', '9896532', '104', 'A', '989521', 'Bihar', '1', 1),
(25, '8754785454', '754', '107', 'A', '656754', '54', '1', 1),
(26, 'uij', '65565', '109', 'A', '542', '54', '1', 1),
(27, 'egrsdv', '4154521541', '110', 'A', '5486521652', '6528652', '1', 1),
(28, '525632', '52562', '106', 'A', '65326532', '65325632', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
