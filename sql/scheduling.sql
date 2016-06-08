-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2016 at 03:13 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheduling`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(10) NOT NULL,
  `course_yrSec` varchar(20) NOT NULL,
  `dept_id` tinyint(4) NOT NULL,
  `major` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_yrSec`, `dept_id`, `major`) VALUES
(1, 'BTech_CSE', 5, 'Computers'),
(2, 'BTech_IT', 5, 'Computers'),
(3, 'MTech_CSE', 5, 'Computer Science'),
(4, 'MTech_SE', 5, 'Software Engineering'),
(5, 'MTech_IS', 5, 'Information Security'),
(6, 'MCA_CS', 5, 'Computers');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE IF NOT EXISTS `day` (
  `day_id` int(10) NOT NULL,
  `day_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`day_id`, `day_name`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `dept_id` tinyint(5) NOT NULL,
  `department` varchar(70) NOT NULL,
  `dept_person` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `department`, `dept_person`, `title`) VALUES
(1, 'Applied Mechanics', 'Dr. R.P. Tewari', 'HOD'),
(2, 'Biotechnology', 'Dr. Anjana Pandey', 'HOD'),
(3, 'Chemical Engineering', 'Dr. Sadhana Sachan', 'HOD'),
(4, 'Civil Engineering', 'Dr. A.K. Singh', 'HOD'),
(5, 'Computer Science and Engineering', 'Prof. R.S. Yadav', 'HOD'),
(6, 'Electrical Engineering', 'Dr. Shubhi Purwar', 'HOD'),
(7, 'Electronics and Communication Engineering', 'Dr. V.K. Srivastava', 'HOD'),
(8, 'Mechanical Engineering', 'Prof. Rakesh Narain', 'HOD'),
(9, 'Chemistry', 'Dr. S.S. Narvi', 'HOD'),
(10, 'Mathematics', 'Dr. Pankaj Srivastav', 'HOD'),
(11, 'Physics', 'Dr. S.N. Pandey', 'HOD'),
(12, 'School of Management Studies', 'Dr. Tanuj Nandan', 'HOD'),
(13, 'Humanities and Social Science', 'Dr. Ambika Sinha', 'HOD');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `req_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `day_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `time_s_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`req_id`, `teacher_id`, `day_id`, `room_id`, `time_s_id`) VALUES
(33, 1, 2, 3, 1),
(32, 1, 2, 3, 1),
(44, 7, 2, 3, 2),
(17, 7, 3, 3, 2),
(19, 7, 2, 4, 4),
(22, 2, 2, 3, 4),
(23, 3, 2, 3, 4),
(24, 2, 2, 3, 5),
(42, 1, 2, 1, 5),
(47, 2, 2, 3, 2),
(4, 3, 3, 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `teacher_id` int(5) NOT NULL,
  `teacher_name` text NOT NULL,
  `acad_rank` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `dept_id` tinyint(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`teacher_id`, `teacher_name`, `acad_rank`, `designation`, `dept_id`) VALUES
(1, 'Dr. D.S. Kushwaha', '2', 'Associate Professor', 5),
(2, 'Dr. Krishna K. Mishra', '3', 'Assistant Professor', 5),
(3, 'Mr. Dushyant Kumar Singh', '3', 'Assistant Professor', 5),
(4, 'Mrs. Rajitha B.', '3', 'Assistant Professor', 5),
(5, 'Mr. Manoj Mishra', '4', 'Guest Faculty', 5),
(6, 'Ms. Supriya Dubey', '4', 'Guest Faculty', 5),
(7, 'Mr. Dinesh Singh', '4', 'Assistant Professor', 5);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `req_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `time_s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `teacher_id`, `room_id`, `day_id`, `time_s_id`) VALUES
(10, 3, 3, 3, 5),
(11, 2, 1, 3, 3),
(12, 6, 2, 3, 4),
(13, 3, 4, 3, 6),
(14, 6, 4, 3, 8),
(15, 2, 3, 3, 3),
(18, 2, 3, 3, 5),
(21, 7, 4, 3, 1),
(34, 7, 3, 3, 4),
(35, 2, 3, 3, 2),
(36, 2, 3, 3, 2),
(37, 2, 4, 4, 3),
(38, 2, 4, 4, 3),
(39, 2, 4, 4, 3),
(43, 7, 1, 3, 3),
(46, 7, 4, 4, 4),
(0, 1, 3, 3, 2);

--
-- Triggers `request`
--
DELIMITER $$
CREATE TRIGGER `update_history` AFTER DELETE ON `request`
 FOR EACH ROW begin

insert into history (req_id,teacher_id,day_id,room_id,time_s_id) values (OLD.req_id,OLD.teacher_id,OLD.day_id,OLD.room_id,OLD.time_s_id); 
 
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(10) NOT NULL,
  `room_name` varchar(20) NOT NULL,
  `room_desc` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `room_desc`) VALUES
(1, 'NB1', 'Lecture Room'),
(2, 'NB2', 'Lecture Room'),
(3, 'LH1', 'Lecture Room'),
(4, 'LH2', 'Lecture Room'),
(5, 'UG LAB', 'Computer Lab'),
(6, 'CC3F', 'Computer Lab');

-- --------------------------------------------------------

--
-- Table structure for table `sched`
--

CREATE TABLE IF NOT EXISTS `sched` (
  `sched_id` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `sub_id` int(10) NOT NULL,
  `teacher_id` int(5) NOT NULL,
  `time_s_id` int(10) NOT NULL,
  `time_e_id` int(10) NOT NULL,
  `day_id` int(10) NOT NULL,
  `sem_id` int(2) NOT NULL,
  `year_id` int(10) NOT NULL,
  `dept_id` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=233 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sched`
--

INSERT INTO `sched` (`sched_id`, `room_id`, `course_id`, `sub_id`, `teacher_id`, `time_s_id`, `time_e_id`, `day_id`, `sem_id`, `year_id`, `dept_id`) VALUES
(1, 6, 1, 7, 7, 1, 2, 1, 6, 2, 5),
(2, 6, 1, 7, 7, 2, 3, 1, 6, 2, 5),
(3, 6, 1, 7, 7, 3, 4, 1, 6, 2, 5),
(4, 2, 1, 5, 4, 4, 5, 1, 6, 2, 5),
(5, 2, 1, 5, 4, 5, 6, 1, 6, 2, 5),
(6, 2, 1, 3, 2, 7, 8, 1, 6, 2, 5),
(7, 2, 1, 3, 2, 8, 9, 1, 6, 2, 5),
(8, 2, 1, 2, 5, 1, 2, 2, 6, 2, 5),
(9, 5, 1, 8, 3, 2, 3, 2, 6, 2, 5),
(10, 5, 1, 8, 3, 3, 4, 2, 6, 2, 5),
(11, 5, 1, 8, 3, 4, 5, 2, 6, 2, 5),
(13, 1, 1, 1, 3, 8, 9, 2, 6, 2, 5),
(14, 1, 1, 6, 1, 9, 10, 2, 6, 2, 5),
(15, 1, 1, 6, 1, 10, 11, 2, 6, 2, 5),
(16, 2, 1, 2, 5, 1, 2, 3, 6, 2, 5),
(17, 2, 1, 2, 5, 2, 3, 3, 6, 2, 5),
(18, 4, 1, 5, 4, 3, 4, 3, 6, 2, 5),
(19, 4, 1, 5, 4, 4, 5, 3, 6, 2, 5),
(20, 2, 1, 1, 3, 5, 6, 3, 6, 2, 5),
(21, 1, 1, 6, 1, 1, 2, 4, 6, 2, 5),
(22, 4, 1, 4, 6, 3, 4, 4, 6, 2, 5),
(23, 4, 1, 3, 2, 4, 5, 4, 6, 2, 5),
(24, 2, 1, 4, 6, 9, 10, 4, 6, 2, 5),
(25, 5, 1, 9, 4, 2, 3, 5, 6, 2, 5),
(26, 5, 1, 9, 4, 3, 4, 5, 6, 2, 5),
(27, 5, 1, 9, 4, 4, 5, 5, 6, 2, 5),
(28, 1, 1, 10, 2, 7, 8, 5, 6, 2, 5),
(29, 1, 1, 10, 2, 8, 9, 5, 6, 2, 5),
(30, 1, 1, 10, 2, 9, 10, 5, 6, 2, 5),
(31, 2, 1, 4, 6, 10, 11, 5, 6, 2, 5),
(232, 1, 1, 1, 3, 7, 0, 2, 6, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `school_yr`
--

CREATE TABLE IF NOT EXISTS `school_yr` (
  `year_id` int(10) NOT NULL,
  `school_year` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_yr`
--

INSERT INTO `school_yr` (`year_id`, `school_year`) VALUES
(1, '2013'),
(2, '2016'),
(3, '2014'),
(4, '2015');

-- --------------------------------------------------------

--
-- Table structure for table `sem`
--

CREATE TABLE IF NOT EXISTS `sem` (
  `sem_id` int(2) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem`
--

INSERT INTO `sem` (`sem_id`, `semester`) VALUES
(1, 'First Semester'),
(2, 'Second Semester'),
(3, 'Third Semester'),
(4, 'Fourth Semester'),
(5, 'Fifth Semester'),
(6, 'Sixth Semester'),
(7, 'Seventh Semester'),
(8, 'Eigth Semester');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `sub_id` int(10) NOT NULL,
  `sub_code` varchar(20) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sub_labhrsprday` tinyint(2) NOT NULL,
  `sub_lechrsprday` tinyint(2) NOT NULL,
  `subcat_id` tinyint(2) NOT NULL,
  `cys` varchar(50) NOT NULL,
  `prereq` varchar(20) NOT NULL,
  `sem_id` int(2) NOT NULL,
  `dept_id` tinyint(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `sub_code`, `sub_name`, `sub_labhrsprday`, `sub_lechrsprday`, `subcat_id`, `cys`, `prereq`, `sem_id`, `dept_id`) VALUES
(1, 'CS-1601', 'Embedded Systems', 0, 3, 2, '3', 'Microprocessor', 6, 5),
(2, 'CS-1602', 'Scientific Computing', 0, 3, 2, '3', '-', 6, 5),
(3, 'CS-1603', 'Computer Architecture', 0, 3, 1, '3', 'Computer Organisatio', 6, 5),
(4, 'CS-1604', 'Wireless Network Security', 0, 3, 1, '3', 'Networking, Cryptogr', 6, 5),
(5, 'CS-1605', 'Database Management System', 0, 4, 1, '4', '-', 6, 5),
(6, 'CS-1606', 'Software Engineering', 0, 3, 1, '3', '-', 6, 5),
(7, 'CS-1652', 'Network Security Lab', 3, 0, 1, '2', 'Networking, Cryptogr', 6, 5),
(8, 'CS-1653', 'Embedded Systems Lab', 3, 0, 2, '2', 'Microprocessor', 6, 5),
(9, 'CS-1654', 'Database Management System Lab', 3, 0, 1, '2', '-', 6, 5),
(10, 'CS-1651', 'Mini Project', 3, 0, 2, '2', '-', 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `subcat_id` tinyint(2) NOT NULL,
  `sub_cat` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`subcat_id`, `sub_cat`) VALUES
(1, 'Major'),
(2, 'Minor');

-- --------------------------------------------------------

--
-- Table structure for table `timestart`
--

CREATE TABLE IF NOT EXISTS `timestart` (
  `time_s_id` int(10) NOT NULL,
  `time_s` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timestart`
--

INSERT INTO `timestart` (`time_s_id`, `time_s`) VALUES
(1, '08:00 am'),
(2, '09:00 am'),
(3, '10:00 am'),
(4, '11:00 am'),
(5, '12:00 am'),
(6, '01:00 pm'),
(7, '02:00 pm'),
(8, '03:00 pm'),
(9, '04:00 pm'),
(10, '05:00 pm'),
(11, '06:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `userpass` varchar(20) NOT NULL,
  `dept_id` tinyint(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `userpass`, `dept_id`) VALUES
(1, 'admin', 'a', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `sched`
--
ALTER TABLE `sched`
  ADD PRIMARY KEY (`sched_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `time_s_id` (`time_s_id`),
  ADD KEY `time_e_id` (`time_e_id`),
  ADD KEY `day_id` (`day_id`),
  ADD KEY `sem_id` (`sem_id`),
  ADD KEY `year_id` (`year_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `school_yr`
--
ALTER TABLE `school_yr`
  ADD PRIMARY KEY (`year_id`);

--
-- Indexes for table `sem`
--
ALTER TABLE `sem`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `sem_id` (`sem_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `subcat_id` (`subcat_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `timestart`
--
ALTER TABLE `timestart`
  ADD PRIMARY KEY (`time_s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `day_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `dept_id` tinyint(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `teacher_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sched`
--
ALTER TABLE `sched`
  MODIFY `sched_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=233;
--
-- AUTO_INCREMENT for table `school_yr`
--
ALTER TABLE `school_yr`
  MODIFY `year_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sem`
--
ALTER TABLE `sem`
  MODIFY `sem_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `subcat_id` tinyint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `timestart`
--
ALTER TABLE `timestart`
  MODIFY `time_s_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `dept` (`dept_id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `dept` (`dept_id`);

--
-- Constraints for table `sched`
--
ALTER TABLE `sched`
  ADD CONSTRAINT `sched_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`),
  ADD CONSTRAINT `sched_ibfk_10` FOREIGN KEY (`dept_id`) REFERENCES `dept` (`dept_id`),
  ADD CONSTRAINT `sched_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `sched_ibfk_3` FOREIGN KEY (`sub_id`) REFERENCES `subjects` (`sub_id`),
  ADD CONSTRAINT `sched_ibfk_4` FOREIGN KEY (`teacher_id`) REFERENCES `profile` (`teacher_id`),
  ADD CONSTRAINT `sched_ibfk_5` FOREIGN KEY (`time_s_id`) REFERENCES `timestart` (`time_s_id`),
  ADD CONSTRAINT `sched_ibfk_7` FOREIGN KEY (`day_id`) REFERENCES `day` (`day_id`),
  ADD CONSTRAINT `sched_ibfk_8` FOREIGN KEY (`sem_id`) REFERENCES `sem` (`sem_id`),
  ADD CONSTRAINT `sched_ibfk_9` FOREIGN KEY (`year_id`) REFERENCES `school_yr` (`year_id`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`sem_id`) REFERENCES `sem` (`sem_id`),
  ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `dept` (`dept_id`),
  ADD CONSTRAINT `subjects_ibfk_3` FOREIGN KEY (`subcat_id`) REFERENCES `sub_category` (`subcat_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `dept` (`dept_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
