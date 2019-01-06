-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 04:21 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auditorium`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `RefNo` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `manager_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `web_url` text NOT NULL,
  `fb_url` text NOT NULL,
  `twitter_url` text NOT NULL,
  `google_url` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `ticket1` int(10) NOT NULL,
  `ticket2` int(10) NOT NULL,
  `ticket3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `RefNo`, `name`, `manager_id`, `date`, `time`, `web_url`, `fb_url`, `twitter_url`, `google_url`, `description`, `image`, `ticket1`, `ticket2`, `ticket3`) VALUES
(1, 0, 'Ninnada', 1, '2018-09-20', '08:00:00', 'https://www.facebook.com/ninnada.ucsc/', '', '', '', 'Ninnada 2018 Organized by the students union of University of Colombo School of Computing in aim of aiding rural schools of Sri lanka', '', 100, 1500, 2000),
(3, 0, 'dddd', 7, '2011-11-16', '17:45:00', '', '', '', '', 'ihuh', 'saas', 11, 22, 29),
(4, 0, 'A', 2, '2018-11-22', '23:45:00', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/https://codingwithsara.com/a-calendar-with-php-mysql/', 'saas', 100, 200, 296),
(5, 0, 'Chrsdi', 11, '2018-11-28', '01:45:00', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'sadsda', 'sss', 1111, 111, 123),
(6, 0, 'CCCC', 11, '2018-11-29', '13:45:00', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'asldasld', 'sss', 111, 212, 211),
(7, 0, 'aaaa', 12, '2016-08-19', '16:45:00', 'https://www.w3schools.com/php/php_file_upload.asp', 'https://www.w3schools.com/php/php_file_upload.asp', 'https://www.w3schools.com/php/php_file_upload.asp', 'https://www.w3schools.com/php/php_file_upload.asp', 'asdasd', 'saas', 111, 111, 1111);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `dayStart` int(11) NOT NULL,
  `eventday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `title`, `dayStart`, `eventday`) VALUES
(1, 'asdasd', 11, '2018-11-30'),
(1, 'asdasd', 11, '2018-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `Record` int(200) NOT NULL,
  `userID` int(10) NOT NULL,
  `Date` date NOT NULL,
  `eventRef` text NOT NULL,
  `seatID` int(10) NOT NULL,
  `ticketValue` int(10) NOT NULL,
  `Catagory` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`Record`, `userID`, `Date`, `eventRef`, `seatID`, `ticketValue`, `Catagory`) VALUES
(1, 1, '0000-00-00', '181231134745', 1, 1000, 0),
(2, 1, '0000-00-00', '181231134745', 2, 3000, 1),
(3, 2, '0000-00-00', '181231134745', 5, 2000, 2),
(4, 6, '0000-00-00', '181231134745', 9, 1000, 3),
(5, 8, '0000-00-00', '181231134745', 21, 3000, 1),
(6, 20, '2019-01-06', '181231163048', 1, 0, 2),
(7, 20, '2019-01-06', '181231163048', 1, 0, 2),
(8, 20, '2019-01-06', '181231163048', 1, 0, 2),
(9, 20, '2019-01-06', '181231163048', 1, 0, 2),
(10, 20, '2019-01-06', '181231163048', 1, 0, 2),
(11, 20, '2019-01-06', '181231163048', 1, 0, 2),
(12, 20, '2019-01-06', '181231163048', 1, 0, 2),
(13, 20, '2019-01-06', '181231163048', 1, 0, 2),
(14, 20, '2019-01-06', '181231163048', 1, 0, 2),
(15, 20, '2019-01-06', '181231163048', 1, 0, 2),
(16, 20, '2019-01-06', '181231163048', 1, 0, 2),
(17, 20, '2019-01-06', '181231163048', 1, 0, 2),
(18, 20, '2019-01-06', '181231163048', 1, 0, 2),
(19, 20, '2019-01-06', '181231163048', 1, 0, 2),
(20, 20, '2019-01-06', '181231163048', 1, 0, 2),
(21, 20, '2019-01-06', '181231163048', 1, 0, 2),
(22, 20, '2019-01-06', '181231163048', 1, 0, 2),
(23, 20, '2019-01-06', '181231163048', 1, 0, 2),
(24, 20, '2019-01-06', '181231163048', 1, 0, 2),
(25, 20, '2019-01-06', '181231163048', 1, 0, 2),
(26, 20, '2019-01-06', '181231163048', 1, 0, 2),
(27, 20, '2019-01-06', '181231163048', 1, 0, 2),
(28, 20, '2019-01-06', '181231163048', 1, 0, 2),
(29, 20, '2019-01-06', '181231163048', 1, 0, 2),
(30, 20, '2019-01-06', '181231163048', 1, 0, 2),
(31, 20, '2019-01-06', '181231163048', 1, 0, 2),
(32, 20, '2019-01-06', '181231163048', 1, 0, 2),
(33, 20, '2019-01-06', '181231163048', 1, 0, 2),
(34, 20, '2019-01-06', '181231163048', 1, 0, 2),
(35, 20, '2019-01-06', '181231163048', 1, 0, 2),
(36, 20, '2019-01-06', '181231163048', 1, 0, 2),
(37, 20, '2019-01-06', '181231163048', 1, 0, 2),
(38, 20, '2019-01-06', '181231163048', 1, 0, 2),
(39, 20, '2019-01-06', '181231163048', 1, 0, 2),
(40, 20, '2019-01-06', '181231163048', 1, 0, 2),
(41, 20, '2019-01-06', '181231163048', 1, 0, 2),
(42, 20, '2019-01-06', '181231163048', 1, 0, 3),
(43, 20, '2019-01-06', '181231163048', 1, 0, 3),
(44, 20, '2019-01-06', '181231163048', 1, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `name` int(50) NOT NULL,
  `vip` int(5) NOT NULL,
  `fc` int(5) NOT NULL,
  `sc` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`name`, `vip`, `fc`, `sc`) VALUES
(0, 200, 200, 200),
(1, 0, 200, 200);

-- --------------------------------------------------------

--
-- Table structure for table `tempevents`
--

CREATE TABLE `tempevents` (
  `refNo` text NOT NULL,
  `name` varchar(191) NOT NULL,
  `h1` varchar(200) NOT NULL,
  `manager_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `web_url` text NOT NULL,
  `fb_url` text NOT NULL,
  `twitter_url` text NOT NULL,
  `google_url` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `image2` varchar(191) NOT NULL,
  `ticket1` int(10) NOT NULL,
  `ticket2` int(10) NOT NULL,
  `ticket3` int(10) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempevents`
--

INSERT INTO `tempevents` (`refNo`, `name`, `h1`, `manager_id`, `date`, `time`, `web_url`, `fb_url`, `twitter_url`, `google_url`, `description`, `image`, `image2`, `ticket1`, `ticket2`, `ticket3`, `status`) VALUES
('0', 'Ninnada', '', 1, '2018-09-20', '08:00:00', 'https://www.facebook.com/ninnada.ucsc/', '', '', '', 'Ninnada 2018 Organized by the students union of University of Colombo School of Computing in aim of aiding rural schools of Sri lanka', '', '', 100, 1500, 2000, ''),
('0', 'Image2', '', 2, '2018-12-30', '13:45:00', 'https://www.youtube.com/watch?v=tbNlMtqrYS0', 'https://www.youtube.com/watch?v=tbNlMtqrYS0', '', 'https://www.youtube.com/watch?v=tbNlMtqrYS0', 'SOME DISCRIPTION', 'SSSS', '', 1000, 1000, 1000, ''),
('0', 'NECTXAA', '', 2, '2013-08-19', '13:45:00', 'https://www.youtube.com/watch?v=6Ejga4kJUts', 'https://www.youtube.com/watch?v=6Ejga4kJUts', 'https://www.youtube.com/watch?v=6Ejga4kJUts', 'https://www.youtube.com/watch?v=6Ejga4kJUts', 'SSs', 'hadi3.jpg', '', 2132, 121, 21312, ''),
('0', 'A', '', 2, '2018-11-22', '23:45:00', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/https://codingwithsara.com/a-calendar-with-php-mysql/', 'saas', '', 100, 200, 296, ''),
('0', 'Chrsdi', '', 11, '2018-11-28', '01:45:00', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'sadsda', 'sss', '', 1111, 111, 123, ''),
('0', 'CCCC', '', 11, '2018-11-29', '13:45:00', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'asldasld', 'sss', '', 111, 212, 211, ''),
('0', 'Imagesdas', '', 2, '2011-10-19', '13:45:00', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'ald;asl', 'brainandheart.jpg', '', 11211, 121, 1231, ''),
('0', 'Netx', '', 2, '2013-10-21', '15:45:00', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'salmlsdm', 'cantthinkofanew1.png', '', 12212, 12212, 1212, ''),
('0', 'Netx', '', 2, '2013-10-21', '15:45:00', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'salmlsdm', 'hasi.jpg', '', 12212, 12212, 123123, ''),
('123', 'asad', '', 1, '2018-11-15', '07:19:00', 'adcdc', 'sdf', 'sd', 'ds', 'wdsfsdf', 'sdac', '', 23, 123, 123, ''),
('123', 'asad', '', 1, '2018-11-15', '07:19:00', 'adcdc', 'sdf', 'sd', 'ds', 'wdsfsdf', 'sdac', '', 23, 123, 123, ''),
('111111', 'TESTING!@#', '', 2, '2016-11-19', '13:45:00', 'https://www.youtube.com/watch?v=DdMcAUlxh1M', 'https://www.youtube.com/watch?v=DdMcAUlxh1M', 'https://www.youtube.com/watch?v=DdMcAUlxh1M', 'https://www.youtube.com/watch?v=DdMcAUlxh1M', 'asdasd', 'UCSC-5-1.jpg', '', 1221, 1212, 121, ''),
('181130093912', 'ABC', '', 2, '2011-08-19', '13:45:00', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'wsadawd', 'hasi.jpg', '', 7, 8, 5, ''),
('181130094208', 'final', '', 2, '2011-08-19', '13:45:00', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'wsadawd', 'sarama.jpg', '', 7, 8, 9, ''),
('181231134745', 'ABC', '', 2, '2019-01-01', '13:46:00', 'http://localhost/auditorium/adminfunctions/admin.php', 'http://localhost/auditorium/adminfunctions/admin.php', 'http://localhost/auditorium/adminfunctions/admin.php', 'http://localhost/auditorium/adminfunctions/admin.php', 'aaadasda', 'PEO-hear_no_evil_monkey.svg_-1030x1030.png', '', 1000, 122, 212, 'confirmed'),
('181231163048', 'TEst 3', '', 2, '2019-01-22', '15:45:00', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'ADASLAKSLKAKLSMA', 'Rajeeva-Bandaranaike.jpg', '', 1000, 1111, 2132, 'confirmed'),
('190101100922', 'AAA', '', 2, '2019-01-02', '13:45:00', 'http://localhost/auditorium/Admin/lite/create_event.php', 'http://localhost/auditorium/Admin/lite/create_event.php', 'http://localhost/auditorium/Admin/lite/create_event.php', 'http://localhost/auditorium/Admin/lite/create_event.php', 'AAAAAA', 'brainandheart.jpg', '', 1111, 1111, 1111, 'confirmed'),
('2147483647', 'testing 4', 'Event hedding', 19, '2019-01-22', '12:45:00', 'http://localhost/AMS/audi/html/Admin/lite/create_event.php', 'https://facebook.com', 'https:twieter.com', 'https://google.com', 'discribe', '46492965_1445769938888105_6136040546809937920_o.jpg', '46458717_1445767398888359_4968483588954652672_o.jpg', 1000, 2000, 3000, 'confirmed'),
('2147483647', 'EVENT TWO', 'EVENT TWO', 19, '2019-01-10', '12:45:00', 'http://localhost/AMS/audi/html/Admin/lite/create_event.php', 'https://facebook.com', 'https:twieter.com', 'https://google.com', 'AAAAAAAAAAAAAAAAAAAAAAAAAA', '46362812_1444254675706298_5182224955722432512_o.jpg', '46370521_1444252999039799_6711682510843019264_o.jpg', 998, 1111, 1111, 'confirmed'),
('2147483647', 'ADMIN MAKE EVENT', 'ADMIN MAKE EVENT', 23, '2019-06-13', '21:45:00', 'http://localhost/AMS/audi/html/Admin/lite/create_event.php', 'https://facebook.com', 'https:twieter.com', 'https://google.com', '!!!!', '46381366_1445786642219768_182596965471617024_o.jpg', '46396544_1445786092219823_6145724237773537280_o.jpg', 11111, 1111, 1111, 'confirmed'),
('2147483647', 'ADMIN MAKING EVENT', 'ADMIN MAKING EVENT', 23, '2019-06-11', '14:45:00', 'http://localhost/AMS/audi/html/Admin/lite/create_event.php', 'https://facebook.com', 'https:twieter.com', 'https://google.com', 'AAAAAAAAAAAAA', 'download (1).jpg', 'download (2).jpg', 1111, 1111, 110, 'confirmed'),
('2147483647', 'nimna', 'Event hedding', 22, '2019-01-26', '23:45:00', 'http://localhost/AMS/audi/html/Admin/lite/create_event.php', 'https://facebook.com', 'https:twieter.com', 'https://google.com', 'FFFFFFFFFFF', 'logo2.png', 'mudu_muhune.png', 11111, 1111, 1110, 'confirmed'),
('2147483647', 'NEW', 'Event hedding', 22, '2019-01-23', '13:45:00', 'http://localhost/AMS/audi/html/Admin/lite/create_event.php', 'https://facebook.com', 'https:twieter.com', 'https://google.com', 'AAA', 'bwea.jpg', 'A.J.P..png', 111, 111, 111, 'not confirmed'),
('190106202926', 'Last Test', 'Event hedding', 22, '2019-03-05', '14:45:00', 'http://localhost/AMS/audi/html/Admin/lite/create_event.php', 'https://facebook.com', 'https:twieter.com', 'https://google.com', 'hmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', 'pic2.jpg', 'pic.jpg', 11111, 11111, 11111, 'not confirmed'),
('190106203050', 'eventrrrrrrr', 'Event hedding', 22, '2019-01-30', '13:45:00', 'http://localhost/AMS/audi/html/Admin/lite/create_event.php', 'https://facebook.com', 'https:twieter.com', 'https://google.com', 'hhhhhhhhhhhhhhhhhhhhhmmmmmmmmmmmmmmmmmm', '46453200_1445771472221285_6923780438439755776_o.jpg', '39213564_2120966558117812_4794219255174266880_o.jpg', 1111, 1111, 111, 'not confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_count`
--

CREATE TABLE `ticket_count` (
  `event_id` int(11) NOT NULL,
  `ticket1` int(11) NOT NULL,
  `ticket2` int(11) NOT NULL,
  `ticket3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_count`
--

INSERT INTO `ticket_count` (`event_id`, `ticket1`, `ticket2`, `ticket3`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `usertype`, `email`, `password`, `mobile`) VALUES
(1, 'Rajitha', 'Fernando', 'm', 'rajithaf@gmail.com', 'Raji@123', 111),
(2, 'Event', 'Manager', 'e', 'em@em.com', 'Raji@123', 123456789),
(3, 'r', 'a', 'c', 'a@a.com', '1', 1),
(7, 'event', 'manager_2', 'e', 'event@manager.com', 'event', 123),
(8, 'Himath', 'Harshajith', 'e', 'himath@gmail.com', 'himath', 111),
(9, 'sathira', 'Ranaweera', 'e', 'sathira@gmail.com', '111', 111),
(10, 'Nawoda', 'Lakshani', 'e', 'navoda@gmail.com', 'navoda', 12345),
(12, 'Vimal', 'Kamal', 'e', 'nimal@gmail.com', '111', 111),
(13, 'nimal Nimal', 'kamal', 'e', 'kamal@gmail.com', '111', 111),
(14, 'Himansaaaa', 'samarakoon', 'e', 'himansa@gmail.com', '111', 111),
(15, 'Nimal 2', 'Fernando', 'e', 'fernando@gmail.com', '111', 111),
(16, 'Gatta', 'Chanuka', 'e', 'dinith@gmail.com', '111', 1111),
(17, 'assad', 'asdasdas', 'e', 'A@asdas.ca', '111', 111),
(18, 'Rajitha', 'Fernando', 'c', 'rajith@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', 1),
(19, 'don', 'don', 'e', 'don@don.com', '356a192b7913b04c54574d18c28d46e6395428ab', 1),
(20, 'cus', 'tomer', 'c', 'c@c.com', '356a192b7913b04c54574d18c28d46e6395428ab', 111),
(21, 'Admin', 'Admin', 'm', 'admin@a.com', '356a192b7913b04c54574d18c28d46e6395428ab', 1),
(22, 'Event', 'Manager', 'e', 'e@e.com', '356a192b7913b04c54574d18c28d46e6395428ab', 1),
(23, 'Admin', '2', 'm', 'a2@a.com', '356a192b7913b04c54574d18c28d46e6395428ab', 1),
(24, 'navoda', 'lakshani', 'c', 'jkwhdjskfhsdkjg@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`Record`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `Record` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
