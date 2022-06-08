-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 08:31 AM
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
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` varchar(50) NOT NULL,
  `agent_password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `agent_password`, `name`, `branch`, `phone`) VALUES
('111', '222', 'Pantho Sorkar', 'Mirpur', '01598745682'),
('1610', '1610', 'Shovon', 'Dhanmondi', '01698484654'),
('222', '333', 'Sultan', 'Mohakhali', '01521302251'),
('555', '666', 'Amit Dutta', 'Mohakhali', '00111'),
('agent007', '111', 'Rafiq Bond', 'Raipur', '654654654645'),
('ahmed', '12345', 'Master User', 'null', 'null');

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
  `aadhar_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_password`, `name`, `sex`, `birth_date`, `marital_status`, `nid`, `phone`, `address`, `agent_id`, `image`, `child1_name`, `child1_gender`, `child1_birth_date`, `child1_national_id`, `child1_relationship`, `child1_priority`, `child1_phone`, `child2_name`, `child2_gender`, `child2_birth_date`, `child2_national_id`, `child2_relationship`, `child2_priority`, `child2_phone`, `father_name`, `father_gender`, `father_birth_date`, `father_national_id`, `father_relationship`, `father_priority`, `father_phone`, `mother_name`, `mother_gender`, `mother_birth_date`, `mother_national_id`, `mother_relationship`, `mother_priority`, `mother_phone`, `start_date`, `end_date`, `due_date`, `policy_id`, `due_amount`, `shared_location`, `aadhar_number`) VALUES
('1653278819', 'Incidunt impedit l', 'Rooney Dawson', 'Esse aut odit provi', '1991-10-22', 'Possimus asperiores', '3', '+1 (596) 365-1066', 'Non ut non amet vel', '555', '2_ans.PNG', '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', ''),
('1653371102', 'Quia velit ut labore', 'Upton Keller', 'Eum occaecat sit ne', '1996-03-07', 'Commodi aliqua Labo', '63', '+1 (121) 542-5604', 'Atque excepteur do f', '555', 'Capture7-Final.PNG', '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `nominee_id` varchar(200) NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `aadharr_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`nominee_id`, `client_id`, `name`, `sex`, `birth_date`, `nid`, `relationship`, `priority`, `phone`, `aadharr_number`) VALUES
('1511986129-562418685', '1511986129', 'Aegon Task', 'Male', '10-08-2000', '84894089405', 'Son', '1st', '0152487632', '432839414634'),
('1511986256-1001633290', '1511986256', 'Edmond Walker', 'Male', '12-07-2001', '548405872141', 'Son', '1st', '0187455214854', '9021423654155'),
('1511986409-1583368932', '1511986409', 'Chelsea Clinton', 'Female', '26-10-1996', '408705185494', 'Daughter', '1st', '41854548408', '90892313243'),
('1511986570-225462542', '1511986409', 'Bill Clinton', 'Male', '14-11-1970', '19648151613222', 'Husband', '2nd', '6546513258451', '0971121435460'),
('1511986641-1504036491', '1511986641', 'Salma Khatun', 'Female', '05-06-1975', '544414456498', 'Mother', '1st', '541984516518', '98743984687'),
('1511986754-53418428', '1511986754', 'Ratul BIn Tajul', 'Male', '12-09-1992', '10254845616585', 'Brother', '1st', '025884596844', '123794384654'),
('1511986912-1024403548', '1511986912', 'Faruki Khan', 'Male', '10-09-1989', '564156122225', 'Husband', '1st', '5841561651465', '701389654135'),
('1511987011-183007296', '1511987011', 'Salman Mohammad', 'Male', '15-04-1989', '8929122249', 'Brother', '1st', '01744237435', '1274903657'),
('1511987599-513216278', '1511987599', 'Kiran Rao', 'Female', '07-11-1973', '73777477756', 'Wife', '1st', '01239924475', '54308546758'),
('1511987920-2105200552', '1511987920', 'Who Can', 'Female', '16-01-1968', '5641515611', 'Mother', '1st', '1212121212', '782035465465'),
('1511987932-1318641913', '1511987932', 'Shamim Ahmed', 'Male', '19-09-1989', '8922247586', 'Husband', '1st', '01732663337', '718320546757'),
('1511988146-114572519', '1511988146', 'C.R. Junior', 'Male', '12-09-2005', '4846513518', 'Son', '1st', '65498153189', '2463820547385'),
('1511988147-1556364815', '1511988147', 'Foisal Ahmed Sovon', 'Male', '16-12-1971', '713855677487', 'Father', '1st', '01883774472', '543853243547'),
('1511988275-674553550', '1511988275', 'Tiago Messi', 'Male', '25-07-2008', '465415184651', 'Son', '1st', '6489465164189', '47156075478'),
('1511988421-516349587', '1511988421', 'Eialid Ahmed Joy', 'Male', '19-03-1991', '9122277745', 'Husband', '1st', '01822737445', '645574638954'),
('1511988604-484205419', '1511988604', 'Salman Muktadir', 'Male', '13-09-1995', '654165151', 'Brother', '1st', '518614614684681', '8943670568'),
('1511988659-361572415', '1511988659', 'Thomas Gibson', 'Male', '12-01-1988', '8899928334', 'Nephew', '1st', '01822733645', '924078365'),
('1511988918-1027705582', '1511988918', 'Shafkat Kabir', 'Male', '10-08-1975', '654615184', 'Father', '1st', '01586423365', '574836547'),
('1511989029-1466194256', '1511989029', 'Ginny Weasley', 'Female', '15-09-1994', '9477755564', 'Wife', '1st', '01988273364', '9634856987'),
('1511989124-257126087', '1511989124', 'Jarvis', 'Male', '20-09-2005', '541515165', 'Son', '1st', '01956494651', '78905646567'),
('1511989196-1383443438', '1511989196', 'Hinata Hyuga', 'Female', '12-11-1980', '8022293345', 'Wife', '1st', '01222833844', '96505367568'),
('1511989270-522970848', '1511989270', 'Shovon', 'Male', '11-05-1997', '65484691641', 'Brother', '1st', '584165116', '437547355'),
('1511989353-1465676744', '1511989270', 'Syed Adi', 'Male', '07-03-1996', '16515151651', 'Brother', '2nd', '511616516541', '56589794123'),
('1511989508-1852375428', '1511989508', 'Claire Underwood', 'Female', '17-05-1990', '65465646', 'Wife', '1st', '01689895416', ''),
('1511989560-1833013957', '1511987599', 'Jamius Siam', 'Male', '15-08-1998', '9945586678', 'Son', '2nd', '01521556678', ''),
('1511989629-1412083486', '1511988147', 'Adnan Azmee', 'Male', '21-07-1992', '9223448855', 'Brother', '2nd', '01223774456', ''),
('1511989682-1891269900', '1511989196', 'Susuke Uchiha', 'Male', '19-09-1925', '7555443345', 'Brother', '2nd', '01982283345', ''),
('1605853689-491904229', '1605853689', 'krishna', 'male', '01-07-1975', 'indian', 'father', 'high', '987643515', ''),
('1652681826-1749547373', '1652681826', 'dfg', 'df', '12', '12', 'af', 'waf', '123', ''),
('1652682368-127751190', '1652682368', 'gfhfgh', 'gd', '12', '457', 'fh', '1', '34567890', ''),
('LIG 236 HOUSING BOARD COLONY UMDA BHILAI', '1606114669', 'kisan', 'male', '10-11-1995', 'indian', 'friends', 'high', '070 0083 0947', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `recipt_no` varchar(20) NOT NULL,
  `client_id` varchar(50) NOT NULL,
  `start date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `due` varchar(255) NOT NULL,
  `expiry date` varchar(50) NOT NULL,
  `fine` varchar(50) NOT NULL,
  `agent_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`recipt_no`, `client_id`, `start date`, `month`, `amount`, `due`, `expiry date`, `fine`, `agent_id`) VALUES
('1511987272_936407539', '1511986129', '2021-11-12', '', '3000', '', '2023-11-27', '0', '555'),
('1511987294_157536829', '1511986129', '2021-04-03', '', '3000', '', '2024-04-28', '0', '555'),
('1511987356_228689839', '1511986256', '2021-04-03', '', '13000', '', '2024-02-04', '0', '555'),
('1511987375_208594029', '1511986256', '2021-09-23', '', '13000', '', '2023-02-28', '0', '555'),
('1511987407_616696691', '1511986409', '2022-04-03', '', '3000', '', '2024-01-22', '0', '555'),
('1511987433_196711163', '1511986409', '2022-03-10', '', '3000', '', '2024-06-09', '0', '555'),
('1511987516_243604186', '1511986641', '2022-04-20', '', '6500', '', '2023-12-08', '0', '555'),
('1511987592_140845877', '1511987011', '2021-03-05', '', '13000', '', '2024-06-01', '0', '555'),
('1511987614_130742935', '1511987011', '2021-12-06', '', '13000', '', '2023-03-22', '0', '555'),
('1511987665_189868060', '1511986912', '2021-10-02', '', '13000', '', '2023-11-19', '0', '555'),
('1511987683_122084269', '1511986912', '2021-06-12', '', '10000', '', '2023-05-03', '3000', '555'),
('1511987717_198373690', '1511986912', '2022-02-05', '', '13000', '', '2024-01-23', '0', '555'),
('1511987778_123379304', '1511986256', '2021-07-23', '', '13000', '', '2024-12-04', '0', '555'),
('1511988103_361528786', '1511987920', '2021-05-06', '', '6500', '', '2024-12-01', '0', '111'),
('1511988119_162172016', '1511987920', '2021-11-07', '', '6500', '', '2024-04-09', '0', '111'),
('1511988132_734204095', '1511987920', '2022-03-05', '', '5000', '', '2024-03-29', '1500', '111'),
('1511988410_340758810', '1511988146', '2021-09-28', '', '13000', '', '2023-11-13', '0', '111'),
('1511988425_663527012', '1511988146', '2022-04-04', '', '9000', '', '2024-07-28', '4000', '111'),
('1511988449_500783305', '1511988146', '2022-02-20', '', '13000', '', '2024-10-26', '0', '111'),
('1511988497_126275506', '1511988275', '2021-07-05', '', '13000', '', '2023-10-04', '0', '111'),
('1511988535_990905192', '1511988275', '2022-03-14', '', '13000', '', '2024-02-05', '0', '111'),
('1511988556_123908469', '1511988275', '2022-03-07', '', '10000', '', '2023-02-23', '3000', '111'),
('1511988737_327582747', '1511988604', '0000-00-00', '', '6500', '', '0', '0', '111'),
('1511988751_359818495', '1511988604', '0000-00-00', '', '6000', '', '0', '500', '111'),
('1511988766_127505142', '1511988604', '0000-00-00', '', '6500', '', '0', '0', '111'),
('1511988780_170076555', '1511988604', '0000-00-00', '', '6500', '', '0', '0', '111'),
('1511989102_683990954', '1511988918', '0000-00-00', '', '6500', '', '0', '0', '1610'),
('1511989392_84501314', '1511989270', '0000-00-00', '', '3000', '', '0', '0', '1610'),
('1511989409_123979267', '1511989270', '0000-00-00', '', '2000', '', '0', '1000', '1610'),
('1511989429_583095229', '1511989124', '0000-00-00', '', '13000', '', '0', '0', '1610'),
('1511989444_189806601', '1511989124', '0000-00-00', '', '10000', '', '500', '3000', '1610'),
('1511989466_212456917', '1511989124', '0000-00-00', '', '13000', '', '200', '0', '1610'),
('1511989636_340353445', '1511989508', '0000-00-00', '', '13000', '', '0', '0', '1610'),
('1511989652_157014714', '1511989508', '0000-00-00', '', '13000', '', '0', '0', '1610'),
('1511989666_170298934', '1511989508', '0000-00-00', '', '13000', '', '0', '0', '1610'),
('1511989675_131262819', '1511989508', '0000-00-00', '', '10000', '', '200', '3000', '1610'),
('1511989810_798994343', '1511987011', '0000-00-00', '', '13000', '', '0', '0', '222'),
('1511989871_127982362', '1511987011', '0000-00-00', '', '12000', '', '0', '1000', '222'),
('1511989898_333265655', '1511987011', '0000-00-00', '', '13500', '', '0', '0', '222'),
('1511989998_117407536', '1511987599', '0000-00-00', '', '6500', '', '0', '0', '222'),
('1511990035_160826062', '1511987599', '0000-00-00', '', '6500', '', '0', '0', '222'),
('1511990048_422427668', '1511987599', '0000-00-00', '', '6200', '', '0', '300', '222'),
('1511990085_87306440', '1511987932', '0000-00-00', '', '3000', '', '0', '0', '222'),
('1511990125_551933465', '1511987932', '0000-00-00', '', '3000', '', '0', '0', '222'),
('1511990134_120884202', '1511987932', '0000-00-00', '', '3000', '', '0', '0', '222'),
('1511990144_176620861', '1511987932', '0000-00-00', '', '2700', '', '0', '300', '222'),
('1511990187_187405393', '1511988147', '0000-00-00', '', '6500', '', '0', '0', '222'),
('1511990199_959205473', '1511988147', '0000-00-00', '', '6200', '', '0', '300', '222'),
('1511990208_118604619', '1511988147', '0000-00-00', '', '6800', '', '0', '0', '222'),
('1511990256_119833492', '1511988421', '0000-00-00', '', '13000', '', '0', '0', '222'),
('1511990272_28498432', '1511988421', '0000-00-00', '', '11000', '', '0', '2000', '222'),
('1511990285_110428955', '1511988421', '0000-00-00', '', '15000', '', '0', '0', '222'),
('1511990349_127882369', '1511988659', '0000-00-00', '', '6500', '', '0', '0', '222'),
('1511990363_130124137', '1511988659', '0000-00-00', '', '6000', '', '0', '500', '222'),
('1511990377_109303020', '1511988659', '0000-00-00', '', '6500', '', '0', '500', '222'),
('1511990406_193995825', '1511989029', '0000-00-00', '', '6000', '', '0', '500', '222'),
('1511990421_728097194', '1511989029', '0000-00-00', '', '6500', '', '0', '500', '222'),
('1511990448_253707727', '1511989029', '0000-00-00', '', '7000', '', '0', '0', '222'),
('1511990478_53908577', '1511989196', '0000-00-00', '', '13000', '', '0', '0', '222'),
('1511990488_140201370', '1511989196', '0000-00-00', '', '13000', '', '0', '0', '222'),
('1511990498_126571266', '1511989196', '0000-00-00', '', '13000', '', '0', '0', '222'),
('1511990510_111608856', '1511989196', '0000-00-00', '', '12000', '', '0', '1000', '222');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `policy_id` int(11) NOT NULL,
  `sum_insured` int(11) NOT NULL,
  `plan_type` varchar(255) NOT NULL,
  `plan_amount` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `compassion_visit` int(11) NOT NULL,
  `ambulance_cover` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`policy_id`, `sum_insured`, `plan_type`, `plan_amount`, `adults`, `children`, `compassion_visit`, `ambulance_cover`, `total_amount`, `created_at`, `id`) VALUES
(1652866802, 500000, 'Silver plan', 2000, 1, 0, 188, 0, 2188, '2022-05-18', 1),
(1652866802, 500000, 'Silver plan', 2000, 1, 0, 188, 0, 2188, '2022-05-18', 2),
(1652866802, 500000, 'Silver plan', 2000, 0, 0, 188, 0, 2188, '2022-05-18', 3),
(1652866802, 500000, '', 0, 0, 0, 0, 0, 0, '2022-05-18', 4),
(1652866802, 500000, 'Silver plan', 2000, 0, 0, 188, 0, 2188, '2022-05-18', 5),
(1652866802, 500000, '', 0, 0, 0, 0, 0, 0, '2022-05-18', 6),
(1652869094, 550000, 'Silver plan', 2200, 2, 1, 0, 149, 2849, '2022-05-18', 7),
(1652869238, 600000, 'gold plan', 3667, 2, 1, 188, 149, 4504, '2022-05-18', 8),
(1652870692, 400000, 'diamond plan', 4000, 2, 2, 188, 149, 4937, '2022-05-18', 9),
(1652787392, 500000, 'Silver plan', 0, 0, 2, 0, 0, 0, '2022-05-18', 10),
(0, 500000, 'diamond plan', 5000, 1, 2, 188, 149, 5737, '2022-05-18', 11),
(0, 500000, 'diamond plan', 5000, 1, 2, 188, 149, 5337, '2022-05-18', 12),
(0, 500000, 'diamond plan', 0, 1, 2, 188, 149, 0, '2022-05-18', 13),
(0, 500000, 'diamond plan', 5000, 0, 0, 0, 149, 5149, '2022-05-18', 14),
(1652940924, 500000, 'Silver plan', 2000, 0, 0, 0, 149, 2149, '2022-05-19', 15),
(0, 550000, 'gold plan', 3667, 2, 1, 0, 149, 4316, '2022-05-19', 16),
(0, 500000, 'diamond plan', 5000, 2, 1, 188, 149, 5837, '2022-05-19', 17),
(0, 500000, 'diamond plan', 5000, 0, 1, 188, 0, 5288, '2022-05-19', 18),
(1652951090, 550000, 'gold plan', 3667, 1, 1, 188, 149, 4304, '2022-05-19', 19),
(1652951423, 500000, 'Silver plan', 2000, 1, 2, 188, 149, 2737, '2022-05-19', 20),
(0, 500000, 'Silver plan', 2000, 1, 1, 0, 149, 2149, '2022-05-19', 21),
(1653278819, 500000, 'gold plan', 3333, 0, 0, 188, 149, 3670, '2022-05-23', 22),
(1653371102, 600000, 'gold plan', 4000, 1, 2, 188, 149, 4737, '2022-05-24', 23),
(1653371102, 500000, 'gold plan', 0, 1, 2, 188, 149, 0, '2022-05-24', 24);

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_id` varchar(50) NOT NULL,
  `term` varchar(50) NOT NULL,
  `health_status` varchar(50) NOT NULL,
  `system` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `coverage` varchar(50) NOT NULL,
  `age_limit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `term`, `health_status`, `system`, `payment_method`, `coverage`, `age_limit`) VALUES
('1', '10 year', '500000', '3000', 'Cash/Check', '100%', '50'),
('2', '10 Years', '1000000', '6500', 'Cash/Check', '100%', '50'),
('3', '10 Years', '2000000', '13000', 'Cash/Check', '100%', '50');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` bigint(20) NOT NULL,
  `request_type` varchar(255) NOT NULL,
  `request_data` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `policy_no` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `update` varchar(255) NOT NULL,
  `client_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `request_type`, `request_data`, `status`, `policy_no`, `image`, `update`, `client_status`) VALUES
(60, 'policy extension', '2', 'pending', '1511986912', '', '', ''),
(61, 'policy extension', '2', 'pending', '1511986912', 'C:xampphtdocslims\neciptes/payment-receipt-template-04.jpg', '', ''),
(62, 'marital status', 'maried', 'pending', '1511986912', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `agent_id` (`agent_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `client_id` (`client_id`);

--
-- Indexes for table `nominee`
--
ALTER TABLE `nominee`
  ADD PRIMARY KEY (`nominee_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`recipt_no`),
  ADD UNIQUE KEY `recipt_no` (`recipt_no`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`policy_id`),
  ADD UNIQUE KEY `policy_id` (`policy_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
