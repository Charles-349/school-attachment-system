-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2021 at 04:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `uniqueid` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `uniqueid`, `lastname`, `firstname`, `email`, `password`) VALUES
(1, '1306605553', 'Martin', 'Admin', 'admin@gmail.com', 'c93ccd78b2076528346216b3b2f701e6'),
(3, '915101905', 'Kimathi', 'Alex', 'alexkimathi@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `company_supervisors`
--

CREATE TABLE `company_supervisors` (
  `id` int(11) NOT NULL,
  `uniqueid` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_supervisors`
--

INSERT INTO `company_supervisors` (`id`, `uniqueid`, `firstname`, `lastname`, `company`, `email`, `password`) VALUES
(1, '372882092', 'John', 'Doe', 'Tech Hub', 'johndoe@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(2, '505077056', 'Patricia', 'Wangui', 'Tech World', 'patriciawangui@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `school_supervisors`
--

CREATE TABLE `school_supervisors` (
  `id` int(11) NOT NULL,
  `uniqueid` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_supervisors`
--

INSERT INTO `school_supervisors` (`id`, `uniqueid`, `firstname`, `lastname`, `department`, `email`, `password`) VALUES
(1, '801666280', 'Alan', 'Jackson', 'cs', 'alanjackson@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(2, '329275700', 'Jane', 'Mbele', 'it', 'janembele@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(3, '381586187', 'Kelvin', 'Kanyua', 'bbit', 'kelvinkanyua@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `uniqueid` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `supervisor` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `uniqueid`, `fname`, `lname`, `regno`, `password`, `supervisor`, `course`, `year`) VALUES
(1, '780697576', 'John', 'Maina', 'C027-01-0333/2018', '25d55ad283aa400af464c76d713c07ad', 'alanjackson@gmail.com', 'IT', 3),
(2, '780696465', 'Martin', 'Mwangi', 'C026-01-0314/2018', '25d55ad283aa400af464c76d713c07ad', '', 'BBIT', 3),
(3, '485523257', 'Isaac', 'Kinyili', 'C025-01-1029/2018', '25d55ad283aa400af464c76d713c07ad', '', 'BBIT', 3),
(4, '344242951', 'Murimi', 'Allan', 'C027-01-1029/2019', '25d55ad283aa400af464c76d713c07ad', 'janembele@gmail.com', 'IT', 3),
(5, '633681579', 'James', 'Maina', 'C025-01-1000/2018', '25d55ad283aa400af464c76d713c07ad', 'kelvinkanyua@gmail.com', 'IT', 3),
(6, '953319685', 'Allaxander', 'Kamau', 'C055-03-3434/2019', '25d55ad283aa400af464c76d713c07ad', '', 'IT', 2),
(7, '1617611936', 'Ann', 'Njeri', 'C025-01-0023/2019', '25d55ad283aa400af464c76d713c07ad', '', 'BBIT', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answers`
--

CREATE TABLE `tbl_answers` (
  `id` int(11) NOT NULL,
  `quizno` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `test` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_answers`
--

INSERT INTO `tbl_answers` (`id`, `quizno`, `correct`, `answer`, `test`) VALUES
(1, 1, 0, 'Node', 'networking'),
(2, 1, 1, 'Network', 'networking'),
(3, 1, 0, 'Computers', 'networking'),
(4, 1, 0, 'Electronis', 'networking'),
(5, 2, 1, 'Is a device connected to a network', 'networking'),
(6, 2, 0, 'Is a computer point', 'networking'),
(7, 2, 0, 'Is a computer network', 'networking'),
(8, 2, 0, 'Is a system of computers', 'networking'),
(9, 3, 0, 'Cable', 'networking'),
(10, 3, 0, 'Node', 'networking'),
(11, 3, 0, 'Organization', 'networking'),
(12, 3, 1, 'Link', 'networking'),
(13, 4, 0, 'Application layer', 'networking'),
(14, 4, 1, 'Interface layer', 'networking'),
(15, 4, 0, 'Data link layer', 'networking'),
(16, 4, 0, 'Physical layer', 'networking'),
(17, 5, 0, 'Inheritance', 'networking'),
(18, 5, 0, 'Polymorphism', 'networking'),
(19, 5, 1, 'Encapsulation', 'networking'),
(20, 5, 0, 'Compression', 'networking'),
(21, 6, 0, 'HTTP', 'networking'),
(22, 6, 0, 'VPN', 'networking'),
(23, 6, 0, 'Tunnel', 'networking'),
(24, 6, 1, 'HTTPs', 'networking'),
(25, 7, 0, '1', 'networking'),
(26, 7, 0, '7', 'networking'),
(27, 7, 0, '9', 'networking'),
(28, 7, 1, '4', 'networking'),
(29, 8, 1, 'Communication', 'networking'),
(30, 8, 0, 'Transmission', 'networking'),
(31, 8, 0, 'Connection', 'networking'),
(32, 8, 0, 'Inter process', 'networking'),
(33, 9, 0, 'Netstat', 'networking'),
(34, 9, 1, 'Ping', 'networking'),
(35, 9, 0, 'Tracert', 'networking'),
(36, 9, 0, 'IpConfig', 'networking'),
(37, 10, 0, 'Ip address', 'networking'),
(38, 10, 1, 'MAC address', 'networking'),
(39, 10, 0, 'Port address', 'networking'),
(40, 10, 0, 'Unicast address', 'networking'),
(41, 1, 0, 'Coding language', 'software'),
(42, 1, 0, 'Computer language', 'software'),
(43, 1, 1, 'Programming language', 'software'),
(44, 1, 0, 'Binary language', 'software'),
(45, 2, 0, 'Object', 'software'),
(46, 2, 0, 'Variable', 'software'),
(47, 2, 0, 'Method', 'software'),
(48, 2, 1, 'Class', 'software'),
(49, 3, 1, 'Constructor', 'software'),
(50, 3, 0, 'Interface', 'software'),
(51, 3, 0, 'Abstract', 'software'),
(52, 3, 0, 'Function', 'software'),
(53, 4, 0, 'Function', 'software'),
(54, 4, 1, 'Array', 'software'),
(55, 4, 0, 'Variable', 'software'),
(56, 4, 0, 'Data store', 'software'),
(57, 5, 0, 'Machine learning', 'software'),
(58, 5, 0, 'Deep learning', 'software'),
(59, 5, 0, 'OOP', 'software'),
(60, 5, 1, 'Artificial intelligence', 'software'),
(61, 6, 1, 'True', 'software'),
(62, 6, 0, 'False', 'software'),
(63, 7, 0, 'Data flow', 'software'),
(64, 7, 0, 'Flow chart', 'software'),
(65, 7, 1, 'Algorithm', 'software'),
(66, 7, 0, 'Guntt chart', 'software'),
(67, 8, 0, 'Logical', 'software'),
(68, 8, 1, 'Random', 'software'),
(69, 8, 0, 'Runtime', 'software'),
(70, 8, 0, 'Syntax', 'software'),
(71, 9, 0, 'Variable', 'software'),
(72, 9, 0, 'Proposed', 'software'),
(73, 9, 0, 'Basic', 'software'),
(74, 9, 1, 'Reserved', 'software'),
(75, 10, 0, 'For loop', 'software'),
(76, 10, 1, 'If else loop', 'software'),
(77, 10, 0, 'Do-while loop', 'software'),
(78, 10, 0, 'While', 'software'),
(79, 1, 1, 'Hybrid computer', 'hardware'),
(80, 1, 0, 'Digital computer', 'hardware'),
(81, 1, 0, 'Analog computer', 'hardware'),
(82, 1, 0, 'Super computer', 'hardware'),
(83, 2, 0, 'Wanted Once Read Memory', 'hardware'),
(84, 2, 0, 'Wanted Original Read Memory', 'hardware'),
(85, 2, 0, 'Write Original Read Memory', 'hardware'),
(86, 2, 1, 'Write Once Read Many', 'hardware'),
(87, 3, 0, 'Input device', 'hardware'),
(88, 3, 0, 'Control unit', 'hardware'),
(89, 3, 1, 'Central processing unit', 'hardware'),
(90, 3, 0, 'Output device', 'hardware'),
(91, 4, 1, 'Virtual storage', 'hardware'),
(92, 4, 0, 'Multiprocessing', 'hardware'),
(93, 4, 0, 'Multiprogramming', 'hardware'),
(94, 4, 0, 'Switching', 'hardware'),
(95, 5, 0, 'Address bus', 'hardware'),
(96, 5, 1, 'Data bus', 'hardware'),
(97, 5, 0, 'Address bus and data bus', 'hardware'),
(98, 5, 0, 'None of the above', 'hardware'),
(99, 6, 0, 'Keyboard', 'hardware'),
(100, 6, 0, 'Optical drive', 'hardware'),
(101, 6, 0, 'Printer', 'hardware'),
(102, 6, 1, 'HDD', 'hardware'),
(103, 7, 0, 'Power supply box', 'hardware'),
(104, 7, 0, 'Video card', 'hardware'),
(105, 7, 1, 'Video display unit', 'hardware'),
(106, 7, 0, 'Graphics processor', 'hardware'),
(107, 8, 0, 'Standard keys', 'hardware'),
(108, 8, 0, 'Function keys', 'hardware'),
(109, 8, 0, 'Navigation keys', 'hardware'),
(110, 8, 1, 'Special purpose keys', 'hardware'),
(111, 9, 0, 'Output/input devices', 'hardware'),
(112, 9, 1, 'Output devices', 'hardware'),
(113, 9, 0, 'Signaled devices', 'hardware'),
(114, 9, 0, 'Digital devices', 'hardware'),
(115, 10, 1, 'BIOS', 'hardware'),
(116, 10, 0, 'CPU', 'hardware'),
(117, 10, 0, 'ROM', 'hardware'),
(118, 10, 0, 'RAM', 'hardware');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attachments`
--

CREATE TABLE `tbl_attachments` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `startdate` date NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_attachments`
--

INSERT INTO `tbl_attachments` (`id`, `title`, `category`, `location`, `startdate`, `description`) VALUES
(1, 'Web Developer Role', 'software', 'mweiga', '2021-07-01', 'We need a web developer for 2 months'),
(2, 'Network Engineer Intern', 'networking', 'Nyeri Town', '2021-07-07', 'Network engineer needed for july to september'),
(3, 'Networking Admin', 'networking', 'Nyeri', '2021-07-01', 'It will start in July '),
(4, 'Hardware Assembly', 'hardware', 'Nairobi', '2021-07-05', 'We need several interns for a paid hardware tasks'),
(5, 'Hardware Internship', 'hardware', 'Muranga', '2021-07-10', 'We need interns on our company for 3 months');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logbook`
--

CREATE TABLE `tbl_logbook` (
  `id` int(11) NOT NULL,
  `uniqueid` varchar(200) NOT NULL,
  `week` varchar(500) NOT NULL,
  `mondayjob` varchar(500) NOT NULL,
  `mondayskill` varchar(500) NOT NULL,
  `tuesdayjob` varchar(500) NOT NULL,
  `tuesdayskill` varchar(500) NOT NULL,
  `wednesdayjob` varchar(500) NOT NULL,
  `wednesdayskill` varchar(500) NOT NULL,
  `thursdayjob` varchar(500) NOT NULL,
  `thursdayskill` varchar(500) NOT NULL,
  `fridayjob` varchar(500) NOT NULL,
  `fridayskill` varchar(500) NOT NULL,
  `studentid` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_logbook`
--

INSERT INTO `tbl_logbook` (`id`, `uniqueid`, `week`, `mondayjob`, `mondayskill`, `tuesdayjob`, `tuesdayskill`, `wednesdayjob`, `wednesdayskill`, `thursdayjob`, `thursdayskill`, `fridayjob`, `fridayskill`, `studentid`) VALUES
(1, '1310549269', '1', 'Designing interface', 'Monday SKill', 'Tuesday job', 'Web development skills one', 'Job Three', 'Skill Three', 'Job FOur', 'Skill Four', 'Job Five', 'Skill Five', '780697576'),
(2, '435193926', '2', 'Job Task 2', '', '', '', '', 'Wednesday 2 Skill', '', '', '', '', '780697576'),
(3, '228157020', '5', 'Set of Jobs', 'Set of Skills', '', '', '', '', '', '', '', '', '780697576'),
(4, '452027212', '1', 'James Monday 1 Job', '', '', '', '', '', '', '', '', '', '633681579');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `id` int(11) NOT NULL,
  `test` varchar(200) NOT NULL,
  `quizno` int(11) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`id`, `test`, `quizno`, `question`) VALUES
(3, 'networking', 1, 'A set of devices connected to each other using a physical transmission medium'),
(4, 'networking', 2, 'What is a node'),
(5, 'networking', 3, 'What is connectivity between two devices'),
(6, 'networking', 4, 'Which is not a layer of the OSI reference model'),
(7, 'networking', 5, 'What is the process of breaking down information into smaller, manageable chunks before it is transmitted across the network'),
(8, 'networking', 6, 'What is used for secure communication over a computer network'),
(9, 'networking', 7, 'How many layers are there under TCP/IP'),
(10, 'networking', 8, 'What is the process of sending and receiving data between two media'),
(11, 'networking', 9, 'Which command allows you to check connectivity between network devices on the network'),
(12, 'networking', 10, 'Which address is a unique identifier that is assigned to a Network Interface Card'),
(13, 'software', 1, 'What is a collection of grammar rules for giving instructions to computer or computing devices in order to perform a given task'),
(14, 'software', 2, '__________is a blueprint for creating objects'),
(15, 'software', 3, '_________is a method that is used to create a class object.'),
(16, 'software', 4, '__________ is a container that keeps a specific number of similar data types'),
(17, 'software', 5, 'What is used to build smart machines capable of performing tasks'),
(18, 'software', 6, 'True or False compiled code run faster than interpreted code.'),
(19, 'software', 7, '________ is a rule or step-by-step process that must be followed in order to solve a particular problem'),
(20, 'software', 8, 'Which one is NOT a type of error that can occur during the execution of a computer program?'),
(21, 'software', 9, '________words have predefined meanings in a particular programming language'),
(22, 'software', 10, 'Which one is NOT a type of loops?'),
(23, 'hardware', 1, 'A computer that combines the characteristic of analog and digital computers_________'),
(24, 'hardware', 2, 'WORM stands for?'),
(25, 'hardware', 3, 'Memory unit is a part of ______'),
(26, 'hardware', 4, 'The technique that extends storage capacities of main memory beyond the actual size of the main memory is called _______'),
(27, 'hardware', 5, 'Which bus is a bidirectional bus?'),
(28, 'hardware', 6, 'Which among the following is not a peripheral hardware device in a computer system?'),
(29, 'hardware', 7, 'Which among the following hardware you usually can’t find inside a CPU Casing?'),
(30, 'hardware', 8, 'In a computer keyboard the Alt, Ctrl, Shift, Del & Insert keys are known as ?'),
(31, 'hardware', 9, 'Devices which are used to receive data from central processing unit are classified as ?'),
(32, 'hardware', 10, 'All Operating Systems get their total memory initialized from?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registered_attachments`
--

CREATE TABLE `tbl_registered_attachments` (
  `id` int(11) NOT NULL,
  `studentid` varchar(200) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `companylocation` varchar(200) NOT NULL,
  `companyaddress` varchar(200) NOT NULL,
  `companycontact` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `startdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_registered_attachments`
--

INSERT INTO `tbl_registered_attachments` (`id`, `studentid`, `companyname`, `companylocation`, `companyaddress`, `companycontact`, `role`, `duration`, `startdate`) VALUES
(1, '344242951', 'We Hack It', 'Nyeri Town', '2334-1000,Nyeri', '+25745563443', 'Web Developer', '10', '2021-07-03'),
(2, '780697576', 'Ajax Limited', 'Mweiga', '234-10200 Nyeri', '0110230220', 'Web Developer', '13', '2021-07-01'),
(3, '633681579', 'kwetu developers', 'Meru', '234-60200', '0717275502', 'Android developer', '12', '2021-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_responses`
--

CREATE TABLE `tbl_responses` (
  `id` int(11) NOT NULL,
  `test` varchar(200) NOT NULL,
  `quizno` int(11) NOT NULL,
  `response` varchar(200) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_responses`
--

INSERT INTO `tbl_responses` (`id`, `test`, `quizno`, `response`, `student_id`) VALUES
(11, 'hardware', 1, 'Super computer', 780697576),
(12, 'hardware', 2, 'Write Once Read Many', 780697576),
(13, 'hardware', 3, 'Central processing unit', 780697576),
(14, 'hardware', 4, 'Multiprogramming', 780697576),
(15, 'hardware', 5, 'None of the above', 780697576),
(16, 'hardware', 6, 'Optical drive', 780697576),
(17, 'hardware', 7, 'Video display unit', 780697576),
(18, 'hardware', 8, 'Special purpose keys', 780697576),
(19, 'hardware', 9, 'Signaled devices', 780697576),
(20, 'hardware', 10, 'ROM', 780697576),
(21, 'software', 1, 'Programming language', 780697576),
(22, 'software', 2, 'Class', 780697576),
(23, 'software', 3, 'Abstract', 780697576),
(24, 'software', 4, 'Variable', 780697576),
(25, 'software', 5, 'Artificial intelligence', 780697576),
(26, 'software', 6, 'False', 780697576),
(27, 'software', 7, 'Flow chart', 780697576),
(28, 'software', 8, 'Runtime', 780697576),
(29, 'software', 9, 'Basic', 780697576),
(30, 'software', 10, 'While', 780697576),
(31, 'networking', 1, 'Network', 780697576),
(32, 'networking', 2, 'Is a system of computers', 780697576),
(33, 'networking', 3, 'Organization', 780697576),
(34, 'networking', 4, 'Data link layer', 780697576),
(35, 'networking', 5, 'Encapsulation', 780697576),
(36, 'networking', 6, 'HTTPs', 780697576),
(37, 'networking', 7, '9', 780697576),
(38, 'networking', 8, 'Transmission', 780697576),
(39, 'networking', 9, 'Tracert', 780697576),
(40, 'networking', 10, 'Unicast address', 780697576),
(41, 'hardware', 1, 'Digital computer', 485523257),
(42, 'hardware', 2, 'Wanted Original Read Memory', 485523257),
(43, 'hardware', 3, 'Control unit', 485523257),
(44, 'hardware', 4, 'Multiprocessing', 485523257),
(45, 'hardware', 5, 'Address bus and data bus', 485523257),
(46, 'hardware', 6, 'Optical drive', 485523257),
(47, 'hardware', 7, 'Video card', 485523257),
(48, 'hardware', 8, 'Navigation keys', 485523257),
(49, 'hardware', 9, 'Signaled devices', 485523257),
(50, 'hardware', 10, 'ROM', 485523257),
(51, 'software', 1, 'Binary language', 485523257),
(52, 'software', 2, 'Class', 485523257),
(53, 'software', 3, 'Abstract', 485523257),
(54, 'software', 4, 'Array', 485523257),
(55, 'networking', 1, 'Network', 344242951),
(56, 'networking', 2, 'Is a device connected to a network', 344242951),
(57, 'networking', 3, 'Link', 344242951),
(58, 'networking', 4, 'Interface layer', 344242951),
(59, 'networking', 5, 'Encapsulation', 344242951),
(60, 'networking', 6, 'HTTPs', 344242951),
(61, 'networking', 7, '4', 344242951),
(62, 'networking', 8, 'Communication', 344242951),
(63, 'networking', 9, 'Ping', 344242951),
(64, 'networking', 10, 'Unicast address', 344242951),
(65, 'software', 1, 'Programming language', 344242951),
(66, 'software', 2, 'Class', 344242951),
(67, 'software', 3, 'Constructor', 344242951),
(68, 'software', 4, 'Array', 344242951),
(69, 'software', 5, 'Artificial intelligence', 344242951),
(70, 'software', 6, 'True', 344242951),
(71, 'software', 7, 'Algorithm', 344242951),
(72, 'software', 8, 'Random', 344242951),
(73, 'software', 9, 'Proposed', 344242951),
(74, 'software', 10, 'For loop', 344242951),
(75, 'hardware', 1, 'Digital computer', 344242951),
(76, 'hardware', 2, 'Wanted Original Read Memory', 344242951),
(77, 'hardware', 3, 'Input device', 344242951),
(78, 'hardware', 4, 'Virtual storage', 344242951),
(79, 'hardware', 5, 'Data bus', 344242951),
(80, 'hardware', 6, 'HDD', 344242951),
(81, 'hardware', 7, 'Video display unit', 344242951),
(82, 'hardware', 8, 'Special purpose keys', 344242951),
(83, 'hardware', 9, 'Output devices', 344242951),
(84, 'hardware', 10, 'BIOS', 344242951),
(85, 'hardware', 1, 'Digital computer', 633681579),
(86, 'hardware', 2, 'Wanted Once Read Memory', 633681579),
(87, 'hardware', 3, 'Control unit', 633681579),
(88, 'hardware', 4, 'Virtual storage', 633681579),
(89, 'hardware', 5, 'Data bus', 633681579),
(90, 'hardware', 6, 'HDD', 633681579),
(91, 'hardware', 7, 'Power supply box', 633681579),
(92, 'hardware', 8, 'Standard keys', 633681579),
(93, 'hardware', 9, 'Output/input devices', 633681579),
(94, 'hardware', 10, 'CPU', 633681579),
(95, 'software', 1, 'Coding language', 633681579),
(96, 'software', 2, 'Method', 633681579),
(97, 'software', 3, 'Constructor', 633681579),
(98, 'software', 4, 'Array', 633681579),
(99, 'software', 5, 'OOP', 633681579),
(100, 'software', 6, 'True', 633681579),
(101, 'software', 7, 'Data flow', 633681579),
(102, 'software', 8, 'Random', 633681579),
(103, 'software', 9, 'Variable', 633681579),
(104, 'software', 10, 'Do-while loop', 633681579),
(105, 'networking', 1, 'Node', 633681579),
(106, 'networking', 2, 'Is a computer network', 633681579),
(107, 'networking', 3, 'Cable', 633681579),
(108, 'networking', 4, 'Data link layer', 633681579),
(109, 'networking', 5, 'Inheritance', 633681579),
(110, 'networking', 6, 'VPN', 633681579),
(111, 'networking', 7, '1', 633681579),
(112, 'networking', 8, 'Communication', 633681579),
(113, 'networking', 9, 'Ping', 633681579),
(114, 'networking', 10, 'Ip address', 633681579);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_supervisors`
--
ALTER TABLE `company_supervisors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_supervisors`
--
ALTER TABLE `school_supervisors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_answers`
--
ALTER TABLE `tbl_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attachments`
--
ALTER TABLE `tbl_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logbook`
--
ALTER TABLE `tbl_logbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registered_attachments`
--
ALTER TABLE `tbl_registered_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_responses`
--
ALTER TABLE `tbl_responses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_supervisors`
--
ALTER TABLE `company_supervisors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_supervisors`
--
ALTER TABLE `school_supervisors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_answers`
--
ALTER TABLE `tbl_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tbl_attachments`
--
ALTER TABLE `tbl_attachments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_logbook`
--
ALTER TABLE `tbl_logbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_registered_attachments`
--
ALTER TABLE `tbl_registered_attachments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_responses`
--
ALTER TABLE `tbl_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
