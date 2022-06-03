-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 07:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lims`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` varchar(200) NOT NULL,
  `client_password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `agent_id` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `child1_name` text NOT NULL,
  `child1_gender` text NOT NULL,
  `child1_birth_date` text NOT NULL,
  `child1_national_id` text NOT NULL,
  `child1_relationship` text NOT NULL,
  `child1_priority` text NOT NULL,
  `child1_phone` int(255) NOT NULL,
  `child2_name` text NOT NULL,
  `child2_gender` text NOT NULL,
  `child2_birth_date` text NOT NULL,
  `child2_national_id` text NOT NULL,
  `child2_relationship` text NOT NULL,
  `child2_priority` text NOT NULL,
  `child2_phone` int(255) NOT NULL,
  `father_name` text NOT NULL,
  `father_gender` text NOT NULL,
  `father_birth_date` text NOT NULL,
  `father_national_id` text NOT NULL,
  `father_relationship` text NOT NULL,
  `father_priority` text NOT NULL,
  `father_phone` int(255) NOT NULL,
  `mother_name` text NOT NULL,
  `mother_gender` text NOT NULL,
  `mother_birth_date` text NOT NULL,
  `mother_national_id` text NOT NULL,
  `mother_relationship` text NOT NULL,
  `mother_priority` text NOT NULL,
  `mother_phone` int(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `due_date` varchar(255) NOT NULL,
  `policy_id` varchar(255) NOT NULL,
  `due_amount` varchar(255) NOT NULL,
  `shared_location` varchar(255) NOT NULL,
  `adhar_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_password`, `name`, `sex`, `birth_date`, `marital_status`, `nid`, `phone`, `address`, `agent_id`, `image`, `child1_name`, `child1_gender`, `child1_birth_date`, `child1_national_id`, `child1_relationship`, `child1_priority`, `child1_phone`, `child2_name`, `child2_gender`, `child2_birth_date`, `child2_national_id`, `child2_relationship`, `child2_priority`, `child2_phone`, `father_name`, `father_gender`, `father_birth_date`, `father_national_id`, `father_relationship`, `father_priority`, `father_phone`, `mother_name`, `mother_gender`, `mother_birth_date`, `mother_national_id`, `mother_relationship`, `mother_priority`, `mother_phone`, `start_date`, `end_date`, `due_date`, `policy_id`, `due_amount`, `shared_location`, `adhar_number`) VALUES
('1653278819', '123', 'Gabriel Ford', 'Voluptatem Odit deb', '1991-01-26', 'maried', '41', '+1 (509) 896-2889', 'Hyderabad', '555', 'blueprism-TestImage.png', '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1200', '', ''),
('1653371102', '123', 'Deborah Cline', 'Incidunt quia offic', '1979-06-09', 'Simply Single', '64', '12345', 'Hyderabad, Telangana, India', '555', 'blueprism-TestImage.png', '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1200', '', ''),
('1653562027', '123', 'Dalton Alford', 'Placeat qui nulla e', '1994-04-16', 'RTM', '49', '+1 (266) 417-6617', 'Repudiandae voluptat', '555', 'blueprism-TestImage.png', '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1000', '', ''),
('1653565014', '123', 'Vance Burt', 'Veritatis hic et sun', '1977-04-27', 'Single', '58', '+1 (844) 659-3372', 'Laborum dolor tenetu', '555', 'blueprism-TestImage.png', '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '950', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `client_id` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
