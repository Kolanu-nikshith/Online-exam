-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2018 at 06:22 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `iname` varchar(255) NOT NULL,
  `iid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`iname`, `iid`, `email`, `phno`, `department`, `status`, `description`, `password`) VALUES
('veereshalingam', '30000', 'veereshalingam@gmail.com', 'number', 'cse', 'Active', 'Faculty Hod', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('laxmi', '30001', 'laxmi@gmail.com', 'number', 'cse', 'Active', 'hello', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('samatha', '30002', 'samatha@gmail.com', 'number', 'cse', 'Active', 'faculty samatha description', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('shyam', '30004', 'shyam@gmail.com', '56565656', 'cse', 'Active', 'Shyam', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `testid` varchar(255) NOT NULL,
  `question` varchar(1024) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `answer` int(10) NOT NULL,
  PRIMARY KEY (`testid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `testid` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`testid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `sid` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `email`, `batch`, `department`, `password`) VALUES
('123', 'qw', 'qw@gmail.com', '2015-2019', 'cse', 'qwerty'),
('160815733002', 'praneeth123', 'praneeth@gmail.com', '', 'cse', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `subname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subname`) VALUES
('programming in C'),
('java'),
('Computer Networks'),
('Theory of Computation');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `testid` varchar(255) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `duration` time NOT NULL,
  `markforque` int(255) NOT NULL,
  `negmarks` int(255) NOT NULL,
  `conduct` varchar(255) NOT NULL,
  `totalques` int(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  PRIMARY KEY (`testid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`testid`, `testname`, `subject`, `start`, `end`, `duration`, `markforque`, `negmarks`, `conduct`, `totalques`, `batch`, `department`) VALUES
('1', 'a', 'programming in C', '2018-04-21 00:00:00', '2018-04-22 00:00:00', '02:00:00', 1, 0, 'name', 2, '2015-2019', 'cse'),
('2', 'Basics', 'programming in C', '2018-04-22 00:19:00', '2018-04-23 00:00:00', '02:00:00', 1, 0, 'QQQ', 1, 'Q', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `username`, `email`, `password`) VALUES
('rama', 'rama', 'rama@gmail.com', '40ca1a1312de6dd8f7aac551185027d9'),
('q', 'q', 'qq@q.com', '437599f1ea3514f8969f161a6606ce18'),
('student', '160815733000', 'student@demo.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('qq', 'qq', 'qq@qq.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('gg', 'gg', 'ggg@g.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('gg', 'gg', 'ggg@g.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('gg', 'gg', 'ggg@g.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
('aa', 'asa', 'asa@a.c', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('a', 'dff', 'as@g.c', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('hello', 'hello', 'hello@demo.com', 'a152e841783914146e4bcd4f39100686'),
('hello', 'hello', 'hello@demo.com', 'a152e841783914146e4bcd4f39100686'),
('f', 'f', 'f@f.c', '0b4e7a0e5fe84ad35fb5f95b9ceeac79'),
('b', 'b', 'bbb@b.com', '594f803b380a41396ed63dca39503542'),
('faculty1', '123456', 'faculty@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('s', 's', 's@s.c', 'd9308f32f8c6cf370ca5aaaeafc0d49b'),
('fac', '30020', 'fac@mecs.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('veereshalingam', '30000', 'veereshalingam@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('laxmi', '30001', 'laxmi@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('samatha', '30002', 'samatha@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('shyam', '30004', 'shyam@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('aaa', '23000', 'aa@aa.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('student', '160815733001', 'aa@aa.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('praneeth', '160815733002', 'praneeth@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
