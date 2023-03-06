-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20230304.e7bc504387
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 07:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(6, 1205479457, 1607962982, 'olaliza'),
(7, 557624730, 1607962982, 'hey'),
(8, 1607962982, 1607962982, 'hayee'),
(9, 1607962982, 1205479457, 'radaa'),
(10, 1205479457, 1607962982, 'biee'),
(11, 1607962982, 1205479457, 'fomm'),
(12, 1607962982, 1205479457, 'new mssge'),
(13, 1607962982, 1205479457, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjiiioooooooooooooooog'),
(14, 1205479457, 1607962982, 'Good Morning'),
(15, 1205479457, 1607962982, 'hjkdf'),
(16, 1205479457, 1607962982, 'jksdgc\\'),
(17, 1205479457, 1607962982, 'chvhj'),
(18, 1205479457, 1607962982, 'ozzah'),
(19, 557624730, 1205479457, 'heey'),
(20, 1607962982, 1205479457, 'ozah'),
(21, 920781839, 1205479457, 'hey'),
(22, 920781839, 1607962982, 'oza'),
(23, 1205479457, 1607962982, 'hayee'),
(24, 1607962982, 1205479457, 'radaa'),
(25, 1607962982, 1205479457, 'ozaahh'),
(26, 1205479457, 1607962982, 'nambiee'),
(27, 1607962982, 920781839, 'rada'),
(28, 1607962982, 336318077, 'ozaah'),
(29, 336318077, 1607962982, 'radaa'),
(30, 336318077, 920781839, 'We kombooo'),
(31, 920781839, 1607962982, 'dullaH NIAJE'),
(32, 1607962982, 920781839, 'POAA'),
(33, 1607962982, 1642806106, 'oeeee'),
(34, 1607962982, 1642806106, 'nambee'),
(35, 1642806106, 1607962982, 'poaa'),
(36, 1642806106, 1607962982, 'vp'),
(37, 1607962982, 1642806106, 'fityyy'),
(38, 1642806106, 1607962982, 'oeee'),
(39, 1607962982, 1642806106, 'vp'),
(40, 1642806106, 1607962982, 'shoga'),
(41, 531394115, 1607962982, 'olaaa'),
(42, 1607962982, 531394115, 'vp'),
(43, 531394115, 1607962982, 'poaaz'),
(44, 1607962982, 660542591, 'Oee Aliii'),
(45, 660542591, 1607962982, 'poa vp hamad'),
(46, 1607962982, 1205479457, 'heey'),
(47, 1205479457, 1607962982, 'vp'),
(48, 1607962982, 1205479457, 'poaaa'),
(49, 1205479457, 1607962982, 'jhsjkvbsdv');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `p_img` varchar(400) DEFAULT NULL,
  `unique_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `location`, `caption`, `p_img`, `unique_id`) VALUES
(4, 'Mombasa', 'hello guys', '1655285069basketball.jpg', 920781839),
(5, 'Kajiado', 'heey there', '1655285188std1.png', 920781839),
(6, 'Malaysia', 'Love life', '1655288502Sc3.jpg', 1607962982),
(7, 'Dubai', 'Sunsets in country side', '1655288553rules.jpg', 1607962982),
(8, 'mombasa', 'In The Trenches', '1655376776school.jpg', 336318077),
(10, 'mombasa', 'Good Evening to You All', '1657617301home-bg-slideshow2.jpg', 531394115);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(8, 1607962982, 'Ali', 'joto', 'Ali@gmail.com', 'ali123', '1654880474Sc2.jpg', 'Active now'),
(9, 1205479457, 'musika', 'fred', 'musika@gmail.com', 'musika123', '1654880513headt.jpg', 'Offline now'),
(10, 557624730, 'abdulrahman', 'jibril', 'abdura@gmail.com', 'abdura123', '1655048341std1.png', 'Offline now'),
(11, 920781839, 'dulla', 'captain', 'dulla@gmail.com', 'dulla123', '1655061433std2.jpg', 'Active now'),
(12, 29547219, 'test', 'subject', 'test@gmail.com', 'test123', '1655142492bg1.jpg', 'Active now'),
(13, 154165524, 'asad', 'azn', 'gjh@gmail.com', 'asad123', '1655223408bg1.jpg', 'Offline now'),
(14, 336318077, 'Abaad', 'Salim', 'abaad@gmail.com', 'abaad123', '1655376606secondaryadmission.jpg', 'Offline now'),
(16, 531394115, 'Madi', 'maiguire', 'madii@gmail.com', 'madii123', '1657617063home-bg-slideshow1.jpg', 'Offline now'),
(17, 660542591, 'hamad', 'radhi', 'hamad@gmail.com', 'hamad123', '1661525821bg1.jpg', 'Active now'),
(18, 683737183, 'nsdvjxc', 'mkjl', 'jkhjv@gmail.com', 'nc fh', '1662981376bg1.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
