-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 02:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `prediction`
--

CREATE TABLE `prediction` (
  `reg_no` varchar(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `area_1` varchar(70) NOT NULL,
  `score_1` float NOT NULL,
  `area_2` varchar(70) NOT NULL,
  `score_2` float NOT NULL,
  `area_3` varchar(70) NOT NULL,
  `score_3` int(7) NOT NULL,
  `cos101` int(4) NOT NULL,
  `cos102` int(4) NOT NULL,
  `cos104` int(4) NOT NULL,
  `cos201` int(4) NOT NULL,
  `cos251` int(4) NOT NULL,
  `cos202` int(4) NOT NULL,
  `cos222` int(4) NOT NULL,
  `cos301` int(4) NOT NULL,
  `cos303` int(4) NOT NULL,
  `cos311` int(4) NOT NULL,
  `cos331` int(4) NOT NULL,
  `cos333` int(4) NOT NULL,
  `cos341` int(4) NOT NULL,
  `cos313` int(4) DEFAULT NULL,
  `cos315` int(4) NOT NULL,
  `cos321` int(4) DEFAULT NULL,
  `cos335` int(4) DEFAULT NULL,
  `cos352` int(4) NOT NULL,
  `cos372` int(4) NOT NULL,
  `cos314` int(4) DEFAULT NULL,
  `cos316` int(4) DEFAULT NULL,
  `cos322` int(4) DEFAULT NULL,
  `cos334` int(4) DEFAULT NULL,
  `cos342` int(4) DEFAULT NULL,
  `cos451` int(4) NOT NULL,
  `cos461` int(4) NOT NULL,
  `cos415` int(4) DEFAULT NULL,
  `cos411` int(4) DEFAULT NULL,
  `cos413` int(4) DEFAULT NULL,
  `cos431` int(4) DEFAULT NULL,
  `cos453` int(4) DEFAULT NULL,
  `cos455` int(4) DEFAULT NULL,
  `cos457` int(4) DEFAULT NULL,
  `cos452` int(4) NOT NULL,
  `cos462` int(4) NOT NULL,
  `cos432` int(4) DEFAULT NULL,
  `cos454` int(4) DEFAULT NULL,
  `cos414` int(4) DEFAULT NULL,
  `cos412` int(4) DEFAULT NULL,
  `cos458` int(4) DEFAULT NULL,
  `cos464` int(4) DEFAULT NULL,
  `cos472` int(4) DEFAULT NULL,
  `cos456` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prediction`
--

INSERT INTO `prediction` (`reg_no`, `name`, `area_1`, `score_1`, `area_2`, `score_2`, `area_3`, `score_3`, `cos101`, `cos102`, `cos104`, `cos201`, `cos251`, `cos202`, `cos222`, `cos301`, `cos303`, `cos311`, `cos331`, `cos333`, `cos341`, `cos313`, `cos315`, `cos321`, `cos335`, `cos352`, `cos372`, `cos314`, `cos316`, `cos322`, `cos334`, `cos342`, `cos451`, `cos461`, `cos415`, `cos411`, `cos413`, `cos431`, `cos453`, `cos455`, `cos457`, `cos452`, `cos462`, `cos432`, `cos454`, `cos414`, `cos412`, `cos458`, `cos464`, `cos472`, `cos456`) VALUES
('1967/000190', 'biafra', 'Computer Networks', 80.5, 'Theoretical Computer Science', 69.5556, 'Software Engineering', 68, 87, 98, 98, 46, 49, 47, 52, 47, 61, 56, 57, 73, 76, 59, 0, 0, 0, 61, 59, 82, 0, 0, 0, 0, 57, 67, 0, 0, 0, 0, 0, 100, 0, 67, 61, 0, 0, 0, 0, 0, 0, 0, 100),
('2009/271672', 'KOBE', 'Software Engineering', 66.4545, 'Artificial Intelligence', 66.2727, 'Theoretical Computer Science', 65, 54, 63, 68, 76, 79, 87, 63, 63, 76, 78, 65, 87, 67, 77, 0, 0, 58, 73, 70, 73, 0, 49, 53, 50, 62, 67, 52, 0, 0, 53, 0, 53, 0, 78, 98, 52, 55, 51, 53, 60, 0, 0, 53),
('2017/898989', 'aioki', 'Software Engineering', 66.4545, 'Artificial Intelligence', 65.7273, 'Theoretical Computer Science', 65, 54, 63, 68, 76, 79, 87, 63, 63, 76, 78, 65, 87, 67, 77, 0, 0, 58, 73, 70, 73, 0, 49, 53, 50, 62, 67, 52, 0, 0, 53, 0, 53, 0, 78, 98, 52, 55, 51, 53, 54, 0, 0, 53),
('2020/123456', 'kosi', 'Theoretical Computer Science', 81.0909, 'Computer Networks', 79.75, 'Artificial Intelligence', 75, 89, 87, 78, 65, 75, 86, 54, 67, 46, 86, 95, 46, 86, 46, 0, 0, 85, 78, 87, 87, 0, 77, 87, 78, 56, 67, 65, 0, 0, 71, 0, 99, 0, 70, 72, 80, 98, 98, 75, 45, 0, 0, 96),
('2900/909090', 'john', 'Artificial Intelligence', 87, 'Software Engineering', 85.875, 'Theoretical Computer Science', 81, 98, 90, 99, 90, 99, 99, 99, 56, 67, 99, 77, 87, 87, 56, 0, 0, 0, 76, 67, 67, 0, 0, 0, 0, 45, 57, 0, 99, 0, 0, 0, 100, 0, 78, 67, 0, 0, 0, 0, 0, 0, 0, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prediction`
--
ALTER TABLE `prediction`
  ADD PRIMARY KEY (`reg_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
