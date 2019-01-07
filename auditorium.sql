-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 03:35 AM
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
(1, 20, '2019-01-07', '190107071909', 1, 3000, 1),
(48, 20, '2019-01-07', '190107071909', 1, 3000, 1),
(49, 20, '2019-01-07', '190107071909', 1, 2000, 2);

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
('190107071909', 'Happy New Year', 'Wishing you a happy new year full of happiness!', 22, '2019-01-07', '12:00:00', 'http://www.happynewyear.com', 'http://www.facebook.happy.com', 'http:/twieter.new.com', 'https://google.year.com', 'We hope your life will be full of surprise and joy in the new year thatâ€™s about to begin. May You be blessed with everything you want in life. May the new year bring all the good things in life you truly deserve !', 'hny.jpg', 'hny2.jpg', 3000, 2000, 1000, 'confirmed');

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
  MODIFY `Record` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
