-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 21, 2023 at 07:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pg2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookid` int(9) NOT NULL,
  `name` varchar(225) NOT NULL,
  `number` int(10) NOT NULL,
  `email` varchar(225) NOT NULL,
  `method` varchar(225) NOT NULL,
  `street` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `pin_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookid`, `name`, `number`, `email`, `method`, `street`, `city`, `state`, `country`, `pin_code`) VALUES
(6, 'rahul', 929292929, '1@gmail.com', 'cash on delivery', '13131', 'mangalore', 'dk', 'India', 575001);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `c_id` int(22) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `msg` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `name`, `email`, `subject`, `msg`) VALUES
(1, 'rovin', 'rovin@gmail.com', 'jdfdf', 'asjajs');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_requests`
--

CREATE TABLE `maintenance_requests` (
  `mid` int(11) NOT NULL,
  `pg_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `request_date` date NOT NULL,
  `status` enum('Pending','In Progress','Complete') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paying_guests`
--

CREATE TABLE `paying_guests` (
  `pg_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paying_guests`
--

INSERT INTO `paying_guests` (`pg_id`, `name`, `contact_no`, `email`, `address`, `gender`, `date_of_birth`, `occupation`, `nationality`) VALUES
(1, 'rahul', '787876668', 'rahul@gmail.com', 'mangalore', 'Male', '2001-02-27', 'Coder', 'Indian'),
(2, 'rahul', '', '5@gmail.com', 'ewrtdyfu', '', '0000-00-00', 'aada', 'asasas'),
(3, 'jack', '', '1@gmail.com', 'ewrtdyfu', '', '0000-00-00', 'asadad', 'jajdajda'),
(4, 'rovin', '', 'rovin@gmail.com', 'hdhhsjjds', '', '0000-00-00', 'jsdjsjd', 'msds');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pid` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_no` varchar(225) NOT NULL,
  `room_type` enum('Single','Double','Triple','Quad') DEFAULT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `rent` decimal(10,2) NOT NULL,
  `request` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rid` int(11) NOT NULL,
  `pg_id` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `room_type` enum('Single','Double','Triple','Quad') DEFAULT NULL,
  `status` enum('Available','Occupied') DEFAULT NULL,
  `rent` decimal(10,2) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_no`, `room_type`, `status`, `rent`, `image`) VALUES
(1, '101', 'Single', 'Available', '5000.00', 'pic2.jpg'),
(2, '102', 'Double', 'Occupied', '6000.00', 'pic3.jpg'),
(3, '103', 'Double', 'Available', '7000.00', 'pic1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `uid` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `user_type` varchar(225) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`uid`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'rahul', 'p@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'user'),
(4, 'mike', '1@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'user'),
(7, 'Goutham', 'gouthampr54@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(13, 'gouthampr', 'vidyapr45@gmail.com', '13bf4ea046a62d53df8743ef259aebd6', 'user'),
(14, 'admin', 'admin@gmail.com', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `maintenance_requests`
--
ALTER TABLE `maintenance_requests`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `pg_id` (`pg_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `paying_guests`
--
ALTER TABLE `paying_guests`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `pg_fk` (`pg_id`),
  ADD KEY `a_fk` (`aid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `c_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `maintenance_requests`
--
ALTER TABLE `maintenance_requests`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paying_guests`
--
ALTER TABLE `paying_guests`
  MODIFY `pg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `uid` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `maintenance_requests`
--
ALTER TABLE `maintenance_requests`
  ADD CONSTRAINT `maintenance_requests_ibfk_1` FOREIGN KEY (`pg_id`) REFERENCES `paying_guests` (`pg_id`),
  ADD CONSTRAINT `maintenance_requests_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `a_fk` FOREIGN KEY (`aid`) REFERENCES `admin` (`aid`),
  ADD CONSTRAINT `pg_fk` FOREIGN KEY (`pg_id`) REFERENCES `paying_guests` (`pg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
