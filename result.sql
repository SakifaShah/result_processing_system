-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2019 at 03:57 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `course_code` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `semester` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_name`, `course_code`, `credit`, `semester`) VALUES
('Data Structure', 310, 3, '2-1'),
('Java', 311, 3, '2-1'),
('Database', 312, 3, '2-1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `id` varchar(11) COLLATE utf8_bin NOT NULL,
  `semester` varchar(20) COLLATE utf8_bin NOT NULL,
  `course_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `course_code` varchar(11) COLLATE utf8_bin NOT NULL,
  `credit` int(11) NOT NULL,
  `grade` varchar(20) COLLATE utf8_bin NOT NULL,
  `gradepoint` float NOT NULL,
  `obtained_marks` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `id`, `semester`, `course_name`, `course_code`, `credit`, `grade`, `gradepoint`, `obtained_marks`, `uid`) VALUES
('Progga', '16701038', '2-1', 'DATA STRUCTURE', '310', 3, 'A+', 3, 3, 47),
('Progga', '16701038', '2-1', 'JAVA', '311', 3, 'A+', 3, 3, 48),
('Progga', '16701038', '2-1', 'DATABASE', '312', 3, 'A+', 3, 3, 49),
('Progka', '16701078', '2-1', 'DATA STRUCTURE', '310', 3, 'A+', 3, 90, 56),
('Progka', '16701078', '2-1', 'JAVA', '311', 3, 'B+', 3, 59, 57),
('Progka', '16701078', '2-1', 'DATABASE', '312', 3, 'B+', 3, 50, 58),
('Prova', '16701078', '2-1', 'DATA STRUCTURE', '310', 3, 'A-', 3.5, 65, 59),
('Prova', '16701078', '2-1', 'JAVA', '311', 3, 'B+', 3.25, 59, 60),
('Prova', '16701078', '2-1', 'DATABASE', '312', 3, 'A+', 4, 89, 61),
('Proova', '16701078', '2-1', 'DATA STRUCTURE', '310', 3, 'A+', 4, 88, 62),
('Proova', '16701078', '2-1', 'JAVA', '311', 3, 'A+', 4, 88, 63),
('Proova', '16701078', '2-1', 'DATABASE', '312', 3, 'A', 3.75, 78, 64),
('Sakifa', '16701078', '2-1', 'DATA STRUCTURE', '310', 3, 'A+', 4, 80, 71),
('Sakifa', '16701078', '2-1', 'JAVA', '311', 3, 'A+', 4, 90, 72),
('Sakifa', '16701078', '2-1', 'DATABASE', '312', 3, 'A', 3.75, 70, 73);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD UNIQUE KEY `code` (`course_code`),
  ADD UNIQUE KEY `name` (`course_name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `name` (`name`,`id`,`course_name`),
  ADD KEY `name_2` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
