-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 07:53 AM
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
  `mother_phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_password`, `name`, `sex`, `birth_date`, `marital_status`, `nid`, `phone`, `address`, `agent_id`, `image`, `child1_name`, `child1_gender`, `child1_birth_date`, `child1_national_id`, `child1_relationship`, `child1_priority`, `child1_phone`, `child2_name`, `child2_gender`, `child2_birth_date`, `child2_national_id`, `child2_relationship`, `child2_priority`, `child2_phone`, `father_name`, `father_gender`, `father_birth_date`, `father_national_id`, `father_relationship`, `father_priority`, `father_phone`, `mother_name`, `mother_gender`, `mother_birth_date`, `mother_national_id`, `mother_relationship`, `mother_priority`, `mother_phone`) VALUES
('1653278819', 'Incidunt impedit l', 'Rooney Dawson', 'Esse aut odit provi', '1991-10-22', 'Possimus asperiores', '3', '+1 (596) 365-1066', 'Non ut non amet vel', '555', '2_ans.PNG', '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0),
('1653371102', 'Quia velit ut labore', 'Upton Keller', 'Eum occaecat sit ne', '1996-03-07', 'Commodi aliqua Labo', '63', '+1 (121) 542-5604', 'Atque excepteur do f', '555', 'Capture7-Final.PNG', '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0);

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
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`nominee_id`, `client_id`, `name`, `sex`, `birth_date`, `nid`, `relationship`, `priority`, `phone`) VALUES
('', '', '', '', '', '', '', '', ''),
('1511986023-414821017', '1511986023', 'Martha Green', 'Female', '15-08-1990', '321684798321', 'Wife', '2nd', '01502816848'),
('1511986409-1583368932', '1511986409', 'Chelsea Clinton', 'Female', '26-10-1996', '408705185494', 'Daughter', '1st', '41854548408'),
('1511986570-225462542', '1511986409', 'Bill Clinton', 'Male', '14-11-1970', '19648151613222', 'Husband', '2nd', '6546513258451'),
('1511986641-1504036491', '1511986641', 'Salma Khatun', 'Female', '05-06-1975', '544414456498', 'Mother', '1st', '541984516518'),
('1511986754-53418428', '1511986754', 'Ratul BIn Tajul', 'Male', '12-09-1992', '10254845616585', 'Brother', '1st', '025884596844'),
('1511986912-1024403548', '1511986912', 'Faruki Khan', 'Male', '10-09-1989', '564156122225', 'Husband', '1st', '5841561651465'),
('1511987011-183007296', '1511987011', 'Salman Mohammad', 'Male', '15-04-1989', '8929122249', 'Brother', '1st', '01744237435'),
('1511987599-513216278', '1511987599', 'Kiran Rao', 'Female', '07-11-1973', '73777477756', 'Wife', '1st', '01239924475'),
('1511987920-2105200552', '1511987920', 'Who Can', 'Female', '16-01-1968', '5641515611', 'Mother', '1st', '4984468151320'),
('1511987932-1318641913', '1511987932', 'Shamim Ahmed', 'Male', '19-09-1989', '8922247586', 'Husband', '1st', '01732663337'),
('1511988146-114572519', '1511988146', 'C.R. Junior', 'Male', '12-09-2005', '4846513518', 'Son', '1st', '65498153189'),
('1511988147-1556364815', '1511988147', 'Foisal Ahmed Sovon', 'Male', '16-12-1971', '713855677487', 'Father', '1st', '01883774472'),
('1511988275-674553550', '1511988275', 'Tiago Messi', 'Male', '25-07-2008', '465415184651', 'Son', '1st', '6489465164189'),
('1511988421-516349587', '1511988421', 'Eialid Ahmed Joy', 'Male', '19-03-1991', '9122277745', 'Husband', '1st', '01822737445'),
('1511988604-484205419', '1511988604', 'Salman Muktadir', 'Male', '13-09-1995', '654165151', 'Brother', '1st', '518614614684681'),
('1511988659-361572415', '1511988659', 'Thomas Gibson', 'Male', '12-01-1988', '8899928334', 'Nephew', '1st', '01822733645'),
('1511988918-1027705582', '1511988918', 'Shafkat Kabir', 'Male', '10-08-1975', '654615184', 'Father', '1st', '01586423365'),
('1511989029-1466194256', '1511989029', 'Ginny Weasley', 'Female', '15-09-1994', '9477755564', 'Wife', '1st', '01988273364'),
('1511989124-257126087', '1511989124', 'Jarvis', 'Male', '20-09-2005', '541515165', 'Son', '1st', '01956494651'),
('1511989196-1383443438', '1511989196', 'Hinata Hyuga', 'Female', '12-11-1980', '8022293345', 'Wife', '1st', '01222833844'),
('1511989270-522970848', '1511989270', 'Shovon', 'Male', '11-05-1997', '65484691641', 'Brother', '1st', '584165116'),
('1511989353-1465676744', '1511989270', 'Syed Adi', 'Male', '07-03-1996', '16515151651', 'Brother', '2nd', '511616516541'),
('1511989508-1852375428', '1511989508', 'Claire Underwood', 'Female', '17-05-1990', '65465646', 'Wife', '1st', '01689895416'),
('1511989560-1833013957', '1511987599', 'Jamius Siam', 'Male', '15-08-1998', '9945586678', 'Son', '2nd', '01521556678'),
('1511989629-1412083486', '1511988147', 'Adnan Azmee', 'Male', '21-07-1992', '9223448855', 'Brother', '2nd', '01223774456'),
('1511989682-1891269900', '1511989196', 'Susuke Uchiha', 'Male', '19-09-1925', '7555443345', 'Brother', '2nd', '01982283345'),
('1605853689-491904229', '1605853689', 'krishna', 'male', '01-07-1975', 'indian', 'father', 'high', '987643515'),
('1652676091-1698389108', '1652676091', 'gigigigi', 'giigiigi', 'igigigi', 'gigigi', 'igigig', 'igigii', 'igigig'),
('1652762090-1725515478', '1652762090', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
('1652763955-1104596827', '1652763955', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
('1652765881-271752015', '1652765881', 'd', 'dd', 'd', 'd', 'd', 'd', 'd'),
('1652767454-998252877', '1652767454', 'd', 'dd', 'd', 'd', 'd', 'd', 'dd'),
('1652767582-1025085969', '1652767582', 'd', 'dd', 'd', 'd', 'd', 'd', 'dd'),
('1652769002-1695282993', '1652769002', 'd', 'dd', 'd', 'd', 'd', 'd', 'dd'),
('1652950444-1017043865', '1652950444', 'Eliana Morrison', 'Aliquid consequuntur', '1979-03-02', '4', 'Voluptate corrupti ', 'Voluptates quasi sap', '43'),
('1652957505-1146652421', '1652957505', 'tdtd', 'female', '1998-04-24', '123', 'wife', '1', '123456'),
('1652957644-2050881265', '1652957644', 'tdtd', 'female', '1998-04-24', '123', 'wife', '1', '123456'),
('1652957668-715246836', '1652957668', 'tdtd', 'female', '1998-04-24', '123', 'wife', '1', '123456'),
('1652957743-286298380', '1652957743', 'a', 'a', '1998-04-24', '124566', 'hgj', 'hfh', '1345'),
('1652958043-468084544', '1652958043', 'a', 'a', '1998-04-24', '124566', 'hgj', 'hfh', '1345'),
('<br /><b>Notice</b>:  Undefined variable: uniqueId6 in <b>C:xampphtdocslimsaddClient.php</b> on line <b>136</b><br />', '1652771706', 'd', 'dd', 'd', 'd', 'd', 'd', 'dd'),
('Ab reprehenderit do', 'Fugiat adipisci inve', 'Yoshio Cote', 'Sed amet quasi natu', '1978-02-01', '24', 'Quis mollitia ex com', 'Magni sed ex neque v', '74'),
('Accusamus nihil vita', 'Aute qui consequatur', 'Berk Burke', 'Autem dolores nulla ', '1992-11-06', '61', 'Autem sapiente provi', 'Qui minima corrupti', '75'),
('Accusantium molestia', '1652870692', 'Carson Bond', 'Sit eu veniam vita', '03-Feb-1981', 'Delectus sunt labor', 'Atque ex ullamco eu ', 'Id dolor rem totam e', '+1 (342) 838-9535'),
('Alias sequi in exped', 'In ipsa recusandae', 'Declan West', 'Sint ut officia magn', '01-Feb-1970', 'Dolorem dolor nisi r', 'Est ut recusandae ', 'Rem mollit provident', '+1 (627) 721-6599'),
('Aliquid sunt sint in', 'Porro debitis quibus', 'Colette Myers', 'Aspernatur in quis o', '05-May-1997', 'Earum laudantium fu', 'In repudiandae quasi', 'Eaque numquam et rer', '+1 (364) 845-4841'),
('Aut architecto non n', '1652957698', 'Preston White', 'At modi consequatur ', '1970-10-24', '6', 'Aut sed cupiditate e', 'Rerum facilis molest', '19'),
('Aute aut nostrum ita', 'Quis facilis delenit', 'Steel Stokes', 'Ullamco aperiam maio', '22-Sep-1981', 'Laboris ad pariatur', 'Tempora voluptas num', 'Explicabo Voluptate', '+1 (379) 681-3077'),
('Beatae sapiente et n', '1652940924', 'Cathleen Ferguson', 'Aperiam laboris aspe', '1994-07-18', '3', 'Ut impedit doloremq', 'Aliquid voluptatem ', '25'),
('Cumque nihil sunt qu', 'Pariatur Animi dol', 'Dora Johnston', 'Quia aut tempore it', '07-Feb-1986', 'Consequatur adipisi', 'Quia totam sed dolor', 'Lorem ad eaque aperi', '+1 (196) 133-2527'),
('Cumque omnis dolore ', '1652787392', 'Nicole Matthews', 'Voluptates deleniti ', '19-May-2000', 'Porro numquam aut pe', 'Amet sed reiciendis', 'Pariatur Quis est f', '+1 (505) 781-8242'),
('Deserunt veniam ali', '1652951423', 'Chaim Sheppard', 'Eos officiis ea id ', '1989-12-28', '82', 'Omnis duis error sap', 'Distinctio Aut eos', '6'),
('Dolor quos voluptatu', 'Aliquam eos quod as', 'Fulton Ratliff', 'Aut nesciunt ex acc', '2021-09-08', '56', 'Consectetur qui assu', 'Modi rem qui suscipi', '5'),
('Dolores aspernatur m', 'Officiis qui non eu ', 'Sydnee Joseph', 'Velit nemo commodo ', '28-Jun-1978', 'Aliquam commodi face', 'Totam cupiditate est', 'Quasi ex et consecte', '+1 (427) 377-6901'),
('Ea aliquid eveniet ', '1652866802', 'Brian Phillips', 'Voluptatem tempor eo', '07-Sep-2018', 'Nobis laboriosam la', 'Corporis cupiditate ', 'Earum at perspiciati', '+1 (963) 281-5017'),
('Eveniet quaerat exe', 'Impedit vel possimu', 'Sigourney Webster', 'Qui dicta commodo pa', '2020-08-03', '46', 'Aut voluptatibus vol', 'Quae esse corporis ', '67'),
('Fugiat non quos sed', '1652778995', 'Baker Avila', 'Soluta amet qui mod', '25-Mar-1982', 'Autem nostrud numqua', 'Quis inventore ex ir', 'Perferendis aliquam ', '+1 (795) 913-7618'),
('Illum ex quia volup', '1652783608', 'Veronica Oconnor', 'Sed ratione blanditi', '08-Jan-1974', 'Exercitation vel har', 'Consectetur molestia', 'Est laboris neque s', '+1 (309) 952-3713'),
('Impedit laboris ex ', 'Sequi reprehenderit', 'Steven Bond', 'Anim repellendus No', '1989-06-03', '96', 'Sit porro dolor tot', 'Tempor reprehenderit', '82'),
('Ipsum totam aperiam ', '1652852596', 'Cullen Santos', 'Tenetur laboris illu', '20-Oct-2001', 'Odit dolor eveniet ', 'Doloribus minima qui', 'Aut mollit ut qui ip', '+1 (883) 242-5904'),
('LIG 236 HOUSING BOARD COLONY UMDA BHILAI', '1606114669', 'kisan', 'male', '10-11-1995', 'indian', 'friends', 'high', '070 0083 0947'),
('Minim qui excepturi ', '234222342', 'Lane Watts', 'Sed praesentium nesc', '01-Sep-1998', 'Blanditiis aute ipsa', 'Aut expedita facilis', 'Sequi irure ex cillu', '+1 (964) 829-7528'),
('Modi cum maiores qui', 'Facere libero deseru', 'Paul Dotson', 'Ea eligendi at volup', '17-Jan-2014', 'Vero ducimus quasi ', 'Dolores enim unde vo', 'Aut dolore pariatur', '+1 (345) 396-9544'),
('Molestiae sint faci', '1653371102', 'Ifeoma Flores', 'Sint laboriosam ips', '2012-12-17', '24', 'Facilis ut in aliqui', 'Laboris eum numquam ', '77'),
('Necessitatibus aut d', 'Ducimus laborum Fa', 'Lee Johns', 'Rerum aspernatur dol', '06-Dec-1974', 'Facere aspernatur no', 'Dolores ipsum invent', 'Sed id itaque repreh', '+1 (348) 692-7444'),
('Obcaecati impedit a', '1653278819', 'Gabriel Lucas', 'Eos perspiciatis e', '2015-01-29', '74', 'Autem cumque culpa s', 'Dolore qui sint ut e', '99'),
('Obcaecati nisi delec', 'Non dolor et dolorum', 'Hilel Ferrell', 'Vel laborum suscipit', '2016-05-02', '50', 'Ipsum id aliquam qu', 'Exercitation commodo', '61'),
('Perferendis necessit', 'Mollitia ut exercita', 'Brandon Tyson', 'Commodi consequuntur', '31-Aug-2013', 'Facere aut ea in mol', 'Sed sed dolore tempo', 'Vel et occaecat et i', '+1 (762) 816-2911'),
('Perspiciatis fugiat', '1652869238', 'Jena Wright', 'Et excepteur beatae ', '15-Mar-2017', 'Consectetur volupta', 'Autem rerum facere d', 'Modi unde omnis est ', '+1 (483) 574-1646'),
('Qui aut repudiandae ', 'Anim ex ea corporis ', 'Mufutau Wiley', 'Culpa itaque sint re', '11-Nov-1989', 'Tenetur ipsum minus ', 'Alias reprehenderit ', 'Recusandae Unde tem', '+1 (514) 686-3036'),
('Qui id sequi maiore', 'Unde aspernatur volu', 'Raven Hurst', 'Nesciunt ab vero si', '2011-09-25', '20', 'Id tenetur suscipit ', 'Qui consequatur bea', '33'),
('Quia eu veniam culp', 'Laborum Aperiam tot', 'Caesar Martin', 'Minus rerum et delec', '05-Jun-1982', 'Eum voluptatem iust', 'Eveniet distinctio', 'Consequuntur volupta', '+1 (932) 115-2968'),
('Quis dolorem aute si', 'Eum labore consequat', 'Nathan Glenn', 'Sunt dolor minim et ', '1972-11-09', '12', 'Officiis porro exerc', 'Beatae deserunt temp', '55'),
('Quos consequatur et ', 'Rerum aliquip et eu ', 'Imani Rivers', 'Labore praesentium c', '2006-07-17', '85', 'Fugiat qui rerum si', 'Odio voluptatibus vo', '80'),
('Reprehenderit commod', 'Ex exercitationem nu', 'Charity Davenport', 'Quos dignissimos nes', '1986-04-12', '21', 'Quis obcaecati ex ad', 'Perspiciatis modi e', '99'),
('Rerum tempore ut cu', '1652869094', 'Ashely Pickett', 'Assumenda duis persp', '06-May-1989', 'Deserunt exercitatio', 'At aut sint et volu', 'Sequi pariatur Iste', '+1 (797) 819-3545'),
('Sed incididunt sapie', 'Ut voluptas necessit', 'Jakeem Morgan', 'Vero consequatur off', '18-Jun-2008', 'Eum id porro et repr', 'Modi mollitia velit ', 'Qui distinctio Quis', '+1 (469) 277-1312'),
('Sint illo omnis ut ', 'Do est labore et sun', 'Cain Walsh', 'Aut unde repudiandae', '20-Feb-1988', 'Iure incididunt mini', 'Quia quibusdam provi', 'Dolor dolor reprehen', '+1 (204) 662-1919'),
('Sunt deleniti accusa', 'Voluptates tempor ip', 'Ignatius Morales', 'Quo enim quos aliqua', '25-Mar-1978', 'Enim magna magni dig', 'Numquam error molest', 'Est veniam cupidata', '+1 (743) 809-4088'),
('Suscipit recusandae', 'Ea sint commodi eiu', 'Jana Tillman', 'Veritatis consequatu', '29-Jul-2014', 'Sapiente unde porro ', 'Non et tempora maior', 'Tempora rem mollit i', '+1 (557) 879-5299'),
('Tempor dolorum earum', 'Ipsum natus id sit', 'Lacey Delaney', 'Et eum quam quidem m', '2022-05-20', '55', 'Esse maiores aut qua', 'Iste consectetur dol', '82'),
('Tenetur velit aspern', 'Consequuntur laborum', 'Clarke Guzman', 'Similique a corporis', '09-Apr-2005', 'Exercitationem non p', 'Id ut eligendi conse', 'Recusandae Aliqua ', '+1 (454) 656-7896'),
('Ullamco id necessita', 'Sunt dolore volupta', 'Hedda Hebert', 'Accusamus et aut dol', '15-Jul-2012', 'Ut blanditiis except', 'Quos maiores quae do', 'Hic fugiat repudian', '+1 (859) 836-5639'),
('Ut consequuntur aut ', '1652951090', 'Maxwell Durham', 'Commodo nesciunt mo', '2019-02-28', '58', 'Dolorem id aute omn', 'Qui in sunt quia dol', '10'),
('Ut voluptas deserunt', 'Anim quisquam sit Na', 'Gail Winters', 'Ullam ipsum neque i', '02-Oct-1978', 'Ea mollit vitae cons', 'Quisquam ut modi quo', 'Officia qui laborum ', '+1 (888) 261-1635'),
('Voluptatem iusto min', 'Ut ipsum incididunt ', 'Buffy Kaufman', 'Sunt voluptatem aper', '2008-05-30', '26', 'Quaerat facilis cupi', 'Est suscipit ut poss', '69');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `recipt_no` varchar(20) NOT NULL,
  `client_id` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `amount` double NOT NULL,
  `expiry_date` date NOT NULL,
  `fine` varchar(50) NOT NULL,
  `agent_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`recipt_no`, `client_id`, `start_date`, `amount`, `expiry_date`, `fine`, `agent_id`) VALUES
('1511987179_452089622', '1511986023', '0000-00-00', 6500, '0000-00-00', '0', '555'),
('1511987211_190085256', '1511986023', '0000-00-00', 6500, '0000-00-00', '0', '555'),
('1511987230_390658416', '1511986023', '0000-00-00', 6000, '0000-00-00', '500', '555'),
('1511987407_616696691', '1511986409', '0000-00-00', 3000, '0000-00-00', '0', '555'),
('1511987433_196711163', '1511986409', '0000-00-00', 3000, '0000-00-00', '0', '555'),
('1511987516_243604186', '1511986641', '0000-00-00', 6500, '0000-00-00', '0', '555'),
('1511987592_140845877', '1511987011', '0000-00-00', 13000, '0000-00-00', '0', '555'),
('1511987614_130742935', '1511987011', '0000-00-00', 13000, '0000-00-00', '0', '555'),
('1511987665_189868060', '1511986912', '0000-00-00', 13000, '0000-00-00', '0', '555'),
('1511987683_122084269', '1511986912', '0000-00-00', 10000, '0000-00-00', '3000', '555'),
('1511987717_198373690', '1511986912', '0000-00-00', 13000, '0000-00-00', '0', '555'),
('1511988103_361528786', '1511987920', '0000-00-00', 6500, '0000-00-00', '0', '111'),
('1511988119_162172016', '1511987920', '0000-00-00', 6500, '0000-00-00', '0', '111'),
('1511988132_734204095', '1511987920', '0000-00-00', 5000, '0000-00-00', '1500', '111'),
('1511988410_340758810', '1511988146', '0000-00-00', 13000, '0000-00-00', '0', '111'),
('1511988425_663527012', '1511988146', '0000-00-00', 9000, '0000-00-00', '4000', '111'),
('1511988449_500783305', '1511988146', '0000-00-00', 13000, '0000-00-00', '0', '111'),
('1511988497_126275506', '1511988275', '0000-00-00', 13000, '0000-00-00', '0', '111'),
('1511988535_990905192', '1511988275', '0000-00-00', 13000, '0000-00-00', '0', '111'),
('1511988556_123908469', '1511988275', '0000-00-00', 10000, '0000-00-00', '3000', '111'),
('1511988737_327582747', '1511988604', '0000-00-00', 6500, '0000-00-00', '0', '111'),
('1511988751_359818495', '1511988604', '0000-00-00', 6000, '0000-00-00', '500', '111'),
('1511988766_127505142', '1511988604', '0000-00-00', 6500, '0000-00-00', '0', '111'),
('1511988780_170076555', '1511988604', '0000-00-00', 6500, '0000-00-00', '0', '111'),
('1511989102_683990954', '1511988918', '0000-00-00', 6500, '0000-00-00', '0', '1610'),
('1511989392_84501314', '1511989270', '0000-00-00', 3000, '0000-00-00', '0', '1610'),
('1511989409_123979267', '1511989270', '0000-00-00', 2000, '0000-00-00', '1000', '1610'),
('1511989429_583095229', '1511989124', '0000-00-00', 13000, '0000-00-00', '0', '1610'),
('1511989444_189806601', '1511989124', '0000-00-00', 10000, '0000-00-00', '3000', '1610'),
('1511989466_212456917', '1511989124', '0000-00-00', 13000, '0000-00-00', '0', '1610'),
('1511989636_340353445', '1511989508', '0000-00-00', 13000, '0000-00-00', '0', '1610'),
('1511989652_157014714', '1511989508', '0000-00-00', 13000, '0000-00-00', '0', '1610'),
('1511989666_170298934', '1511989508', '0000-00-00', 13000, '0000-00-00', '0', '1610'),
('1511989675_131262819', '1511989508', '0000-00-00', 10000, '0000-00-00', '3000', '1610'),
('1511989810_798994343', '1511987011', '0000-00-00', 13000, '0000-00-00', '0', '222'),
('1511989871_127982362', '1511987011', '0000-00-00', 12000, '0000-00-00', '1000', '222'),
('1511989898_333265655', '1511987011', '0000-00-00', 13500, '0000-00-00', '0', '222'),
('1511989998_117407536', '1511987599', '0000-00-00', 6500, '0000-00-00', '0', '222'),
('1511990035_160826062', '1511987599', '0000-00-00', 6500, '0000-00-00', '0', '222'),
('1511990048_422427668', '1511987599', '0000-00-00', 6200, '0000-00-00', '300', '222'),
('1511990085_87306440', '1511987932', '0000-00-00', 3000, '0000-00-00', '0', '222'),
('1511990125_551933465', '1511987932', '0000-00-00', 3000, '0000-00-00', '0', '222'),
('1511990134_120884202', '1511987932', '0000-00-00', 3000, '0000-00-00', '0', '222'),
('1511990144_176620861', '1511987932', '0000-00-00', 2700, '0000-00-00', '300', '222'),
('1511990187_187405393', '1511988147', '0000-00-00', 6500, '0000-00-00', '0', '222'),
('1511990199_959205473', '1511988147', '0000-00-00', 6200, '0000-00-00', '300', '222'),
('1511990208_118604619', '1511988147', '0000-00-00', 6800, '0000-00-00', '0', '222'),
('1511990256_119833492', '1511988421', '0000-00-00', 13000, '0000-00-00', '0', '222'),
('1511990272_28498432', '1511988421', '0000-00-00', 11000, '0000-00-00', '2000', '222'),
('1511990285_110428955', '1511988421', '0000-00-00', 15000, '0000-00-00', '0', '222'),
('1511990349_127882369', '1511988659', '0000-00-00', 6500, '0000-00-00', '0', '222'),
('1511990363_130124137', '1511988659', '0000-00-00', 6000, '0000-00-00', '500', '222'),
('1511990377_109303020', '1511988659', '0000-00-00', 6500, '0000-00-00', '500', '222'),
('1511990406_193995825', '1511989029', '0000-00-00', 6000, '0000-00-00', '500', '222'),
('1511990421_728097194', '1511989029', '0000-00-00', 6500, '0000-00-00', '500', '222'),
('1511990448_253707727', '1511989029', '0000-00-00', 7000, '0000-00-00', '0', '222'),
('1511990478_53908577', '1511989196', '0000-00-00', 13000, '0000-00-00', '0', '222'),
('1511990488_140201370', '1511989196', '0000-00-00', 13000, '0000-00-00', '0', '222'),
('1511990498_126571266', '1511989196', '0000-00-00', 13000, '0000-00-00', '0', '222'),
('1511990510_111608856', '1511989196', '0000-00-00', 12000, '0000-00-00', '1000', '222'),
('1652762190_150441187', 'a', '0000-00-00', 0, '0000-00-00', 'a', '555'),
('1652866492_134766758', 'S', '0000-00-00', 0, '0000-00-00', 'DD6', '555'),
('1652868823_147739320', '1652866802', '0000-00-00', 0, '0000-00-00', 'DSS', '555'),
('1652869145_692517460', '1652869094', '0000-00-00', 0, '0000-00-00', 'AA', '555'),
('1652869394_212438994', '1652869238', '0000-00-00', 0, '0000-00-00', 'YA', '555'),
('1652870859_6810337', '1652870692', '0000-00-00', 0, '0000-00-00', 'A', '555'),
('1652870954_512134525', '1652870692', '0000-00-00', 0, '0000-00-00', 'A', '555'),
('1652950965_181895260', '1652950791', '2022-05-08', 55, '0000-00-00', '2022-05-05', '555'),
('1652951090', 'SS', '2022-05-06', 55, '0000-00-00', '2022-05-14', '555'),
('1652951144_211229060', '1652951090', '2022-04-27', 55, '0000-00-00', '2022-05-21', '555'),
('1652951488_140936854', '1652951423', '2022-04-28', 55, '0000-00-00', '2022-05-20', '555'),
('1652958850_417061392', 'Aute qui consequatur', '2022-05-11', 4564, '0000-00-00', '2022-05-21', '555'),
('1653278864_124151572', '1653278819', '2022-05-03', 15555, '0000-00-00', '2022-05-26', '555'),
('1653371284_397484042', '1653371102', '2022-05-06', 555, '0000-00-00', '2022-05-22', '6969');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
