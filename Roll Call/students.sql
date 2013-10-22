-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2013 at 07:20 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `datewise_entry`
--

CREATE TABLE IF NOT EXISTS `datewise_entry` (
  `DATE` date NOT NULL,
  `ROOM NO.S` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datewise entry of absentese...';

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE IF NOT EXISTS `entry` (
  `Roll_Number` text NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='roll call entry';

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`Roll_Number`, `Date`, `Time`) VALUES
('205112014', '2013-10-20', '23:56:00'),
('205112015', '2013-10-20', '00:02:06'),
('205112015', '2013-10-20', '00:09:33'),
('205112015', '2013-10-20', '00:18:30'),
('205112015', '2013-10-20', '00:27:23'),
('205112015', '2013-10-20', '01:50:29'),
('205112015', '2013-10-21', '12:17:30'),
('205112001', '2013-10-21', '19:23:17'),
('205112002', '2013-10-21', '19:23:47'),
('205112003', '2013-10-21', '19:24:01'),
('205112013', '2013-10-21', '21:26:29'),
('205112005', '2013-10-21', '21:51:20'),
('205112012', '2013-10-21', '21:55:03'),
('205112008', '2013-10-21', '22:13:08'),
('205112008', '2013-10-21', '22:17:19'),
('205112010', '2013-10-21', '22:18:46'),
('205112008', '2013-10-21', '22:23:21'),
('205112010', '2013-10-21', '22:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `first_check`
--

CREATE TABLE IF NOT EXISTS `first_check` (
  `ID` text CHARACTER SET hp8 NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='first entry and verification of ID and password';

--
-- Dumping data for table `first_check`
--

INSERT INTO `first_check` (`ID`, `Password`) VALUES
('205112001', 'abcd'),
('205112002', 'abcd'),
('205112003', 'abcd'),
('205112004', 'abcd'),
('205112005', 'abcd'),
('205112006', 'abcd'),
('205112007', 'abcd'),
('205112008', 'abcd'),
('205112009', 'abcd'),
('205112010', 'abcd'),
('205112011', 'abcd'),
('205112012', 'abcd'),
('205112013', 'abcd'),
('205112014', 'abcd'),
('205112015', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `rollnumber`
--

CREATE TABLE IF NOT EXISTS `rollnumber` (
  `Roll_Number` text NOT NULL,
  `Password` text NOT NULL,
  `Branch` text NOT NULL,
  `Room_no` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='It should be connected with page2.php';

--
-- Dumping data for table `rollnumber`
--

INSERT INTO `rollnumber` (`Roll_Number`, `Password`, `Branch`, `Room_no`) VALUES
('205112001', 'abcd', 'MCA', 45),
('205112002', 'abcd', 'MCA', 46),
('205112003', 'abcd', 'MCA', 47),
('205112004', 'abcd', 'Btech', 48),
('205112005', 'abcd', 'Btech', 49),
('205112006', 'abcd', 'Btech', 50),
('205112007', 'abcd', 'MSC', 51),
('205112008', 'abcd', 'MSC', 52),
('205112009', 'abcd', 'MSC', 53),
('205112010', 'abcd', 'MCA', 54),
('205112011', 'abcd', 'MCA', 55),
('205112012', 'abcd', 'MCA', 56),
('205112013', 'abcd', 'MCA', 57),
('205112014', 'abcd', 'MCA', 58),
('205112015', 'abcd', 'MCA', 59);

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE IF NOT EXISTS `student_detail` (
  `Roll_Number` text NOT NULL,
  `Name` text NOT NULL,
  `Department` text NOT NULL,
  `Room_no` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Detail of student with Roll_num and room';

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`Roll_Number`, `Name`, `Department`, `Room_no`) VALUES
('205112001', 'Shachi Goyal', 'MCA', 45),
('205112002', 'Nikita Khandelwal', 'MCA', 46),
('205112003', 'Ashita Barjatia', 'MCA', 47),
('205112004', 'Pooja Dangi', 'Btech', 48),
('205112005', 'Akansha Satyarthi', 'Btech', 49),
('205112006', 'Rahul Sharma', 'Btech', 50),
('205112007', 'Akshat Maheshwari', 'MSC', 51),
('205112008', 'Jayhree Likhar', 'MSC', 52),
('205112009', 'Mayura Bakshi', 'MSC', 53),
('205112010', 'Mayuri Jain', 'MCA', 54),
('205112011', 'Vikas Meghwani', 'MCA', 55),
('205112012', 'Kalyani Gupta', 'MCA', 56),
('205112013', 'Arun Kumar', 'MCA', 57),
('205112014', 'Sukhmeet Kaur Bhatia', 'MCA', 58),
('205112015', 'Ankita Sule', 'MCA', 59);

-- --------------------------------------------------------

--
-- Table structure for table `warden_list`
--

CREATE TABLE IF NOT EXISTS `warden_list` (
  `Warden_Name` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='name and password of wardens';

--
-- Dumping data for table `warden_list`
--

INSERT INTO `warden_list` (`Warden_Name`, `Password`) VALUES
('SHIKHA', '2014'),
('ROSHNI', '2014');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
