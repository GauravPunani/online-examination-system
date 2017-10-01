-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2017 at 08:35 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'gouravpunani', '$2y$10$cqK7PyN7kbPHD7L9x48YA.wa607K/HY60vWuc4OtovAFOABE0IqOu');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `que_id` int(11) NOT NULL,
  `que` varchar(2000) NOT NULL,
  `opt1` varchar(200) NOT NULL,
  `opt2` varchar(200) NOT NULL,
  `opt3` varchar(200) NOT NULL,
  `opt4` varchar(200) NOT NULL,
  `ans` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`que_id`, `que`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(0, 'Q1)\nWhich international organisation has granted $175,000 for healthcare of Rohingya refugees in Cox''s Bazar of Bangladesh?', 'FAO', 'UNICEf', 'WHO', 'UNISDR', 3),
(1, 'Q2)\nWhich state has become the India’s first state to set up family welfare committees?', 'maharashtra', 'Rajsthan', 'West Bangal', 'tripura', 4),
(2, 'Q3)\r\nWho of the following has won the 2017 Akkineni Nageswara Rao (ANR) National Award?', 'Shabana Azmi', 'Amitabh Bachan', 's.s. rajmoli', 'lata mangeshkar', 3),
(3, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(4, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(5, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(6, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(7, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(8, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(9, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(10, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(11, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(12, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(13, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(14, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(15, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(16, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(17, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(18, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(19, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(20, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(21, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(22, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(23, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(24, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(25, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(26, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(27, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(28, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(29, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(30, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(31, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(32, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(33, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(34, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(35, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(36, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(37, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(38, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(39, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(40, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(41, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(42, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(43, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(44, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(45, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(46, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(47, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(48, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(49, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(50, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(51, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(52, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(53, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(54, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(55, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(56, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(57, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(58, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(59, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(60, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(61, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(62, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(63, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(64, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(65, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(66, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(67, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(68, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(69, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(70, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(71, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(72, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(73, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(74, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(75, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(76, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(77, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(78, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(79, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(80, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(81, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(82, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(83, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(84, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(85, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(86, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(87, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(88, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(89, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(90, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(91, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(92, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(93, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(94, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(95, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(96, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(97, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(98, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1),
(99, '3.\r\nPurnima Hembram has won gold at the 5th Asian Indoor and Martial Arts Games. She hails from which Indian state?', 'kerla', 'kochin', 'mumbai', 'delhi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'gouravpunani', '$2y$10$x0y5l412PRH5BDlsjhCUie959c3JsdXV7aipD.uoEAD/L6OITH1RO'),
(2, 'vikas', '$2y$10$uCbH9eQnvIVWpzwUDpnFQ.l1j.g3kT3soilTRBJvSgzjdeJ9Yax6C'),
(3, 'rahul', '$2y$10$20IR9hLMLZc5lKemzA6qqOhZTFwRtwzvGJWnRfOmEhiYYE8AOeWP6');

-- --------------------------------------------------------

--
-- Table structure for table `user_ans`
--

CREATE TABLE `user_ans` (
  `id` int(11) NOT NULL,
  `can_name` varchar(60) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `ans` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ans`
--

INSERT INTO `user_ans` (`id`, `can_name`, `admin_id`, `ans`) VALUES
(1, 'gouravpunani', 3, '2,,,,,,,,,,,,,2,,,,,,,,,2,,,,,,,,2,,,,,,,,,,,,,,,,,,,,,,,,,,,,3,,,,,,,,3,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,'),
(3, 'rahul', 3, ',2,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,2,,,,,,,,,,,,2,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,4,,,,,,,,,,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_ans`
--
ALTER TABLE `user_ans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `que_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
