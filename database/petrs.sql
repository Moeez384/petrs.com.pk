-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 05:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `last_date` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `attachment` text DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `last_date`, `status`, `attachment`, `created_date`, `updated_date`) VALUES
(1, 'name', '2121-12-11', 0, '', '2020-10-23', NULL),
(2, 'name2', '2020-10-31', 1, '', '2020-10-23', NULL),
(3, 'name', '2121-12-11', 0, '', NULL, '2020-10-24'),
(4, 'name', '2121-12-11', 0, '', NULL, '2020-10-24'),
(5, 'name', '2121-12-11', 0, '', NULL, '2020-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `cnic_no` varchar(400) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `ph_number` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `father_occupation` varchar(255) DEFAULT NULL,
  `husband_name` varchar(255) DEFAULT NULL,
  `husband_occupation` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `domicile` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `per_address` text DEFAULT NULL,
  `postal_address` text DEFAULT NULL,
  `res_phone` varchar(255) DEFAULT NULL,
  `office_phone` varchar(255) DEFAULT NULL,
  `govt_service` int(11) NOT NULL DEFAULT 0,
  `disability` int(11) NOT NULL DEFAULT 0,
  `armed_force` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `father_name`, `cnic_no`, `email`, `ph_number`, `password`, `father_occupation`, `husband_name`, `husband_occupation`, `date_of_birth`, `gender`, `religion`, `domicile`, `district`, `per_address`, `postal_address`, `res_phone`, `office_phone`, `govt_service`, `disability`, `armed_force`) VALUES
(1, 'sana', 'nadeem', '1234567890', 'sana@gmail.com', '03331234567', '$2y$10$Cet8gdAKp7ZhdD/hPFsdoeXinO8pVSOhsFCosZRhsa77mZ8wC5bS.', 'banker', '', '', NULL, 'Female', 'Islam', 'Local', 'QUETTA (CITY)', 'address', '', '020123819', '1112345', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_education`
--

CREATE TABLE `user_education` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `degree_name` varchar(255) DEFAULT NULL,
  `institute` varchar(500) DEFAULT NULL,
  `degree_type` varchar(255) DEFAULT NULL,
  `board_name` int(11) DEFAULT NULL,
  `passing_date` date DEFAULT NULL,
  `total_marks` int(11) DEFAULT NULL,
  `obtained_marks` int(11) DEFAULT NULL,
  `exam_system` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `cgpa` varchar(255) DEFAULT NULL,
  `optional_subjects` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_education`
--

INSERT INTO `user_education` (`id`, `user_id`, `degree_name`, `institute`, `degree_type`, `board_name`, `passing_date`, `total_marks`, `obtained_marks`, `exam_system`, `division`, `cgpa`, `optional_subjects`) VALUES
(1, 1, 'BSSE', 'BUITEMS', 'C-Graduation', 0, '2019-10-19', 0, 0, 'Semaster', '1st', '3.83', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_experience`
--

CREATE TABLE `user_experience` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `post_name` varchar(255) DEFAULT NULL,
  `dept_name` varchar(255) DEFAULT NULL,
  `dept_type` varchar(255) DEFAULT NULL,
  `bps` varchar(255) DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `duties` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_experience`
--

INSERT INTO `user_experience` (`id`, `user_id`, `from_date`, `to_date`, `post_name`, `dept_name`, `dept_type`, `bps`, `salary`, `duties`) VALUES
(1, 1, '2020-10-22', '2020-10-30', 'post', 'dept', 'Private', '23', '50000', 'duties');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ad_no` varchar(400) DEFAULT NULL,
  `post_name` varchar(255) DEFAULT NULL,
  `challan_no` varchar(300) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `challan_date` date DEFAULT NULL,
  `date_applied` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`id`, `user_id`, `ad_no`, `post_name`, `challan_no`, `bank_name`, `challan_date`, `date_applied`) VALUES
(1, 1, 'Govt', 'Medical Officer (Male)', '3456789', 'bank', '2020-10-16', '2020-10-23 12:09:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_education`
--
ALTER TABLE `user_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_experience`
--
ALTER TABLE `user_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_education`
--
ALTER TABLE `user_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_experience`
--
ALTER TABLE `user_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
