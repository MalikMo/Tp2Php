-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2015 at 08:53 PM
-- Server version: 5.5.46
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `athletes`
--

CREATE TABLE IF NOT EXISTS `athletes` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `versus` varchar(35) NOT NULL,
  `athlete_image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `athletes`
--

INSERT INTO `athletes` (`id`, `name`, `versus`, `athlete_image`, `user_id`, `sport_id`, `subcategory_id`) VALUES
(1, 'Malik', 'Canada', 'uploads/gael.jpg', 8, 1, 0),
(2, 'Tristan', 'USA', 'uploads/big_boss.jpg', 8, 1, 0),
(11, 'Malik', 'China', '', 6, 1, 0),
(13, 'Tristan', 'Russia', '', 6, 2, 0),
(14, 'Tristan', 'Tristan', 'uploads/gael.jpg', 8, 1, 0),
(15, 'Ma', 'Ma', 'uploads/gael.jpg', 8, 1, 0),
(16, 'Mathieu', 'Ma', '', 6, 2, 2),
(17, 'Bruno', 'sa', '', 8, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `athletes_events`
--

CREATE TABLE IF NOT EXISTS `athletes_events` (
  `id` int(11) NOT NULL,
  `athlete_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `athletes_events`
--

INSERT INTO `athletes_events` (`id`, `athlete_id`, `event_id`) VALUES
(1, 1, 1),
(3, 1, 3),
(4, 9, 1),
(6, 10, 1),
(9, 13, 1),
(10, 1, 4),
(11, 2, 4),
(12, 11, 4),
(13, 14, 1),
(14, 15, 1),
(15, 16, 3),
(16, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'books'),
(2, 'music'),
(3, 'electronics');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `score`) VALUES
(1, 'Championship', 15),
(3, 'Semi-Finals', 166),
(4, 'QuarterFinals', 89);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL,
  `athlete_id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `athlete_id`, `name`, `email`, `text`) VALUES
(1, 1, 'The War ', 'MM@gmail.com', 'This was a tough one');

-- --------------------------------------------------------

--
-- Table structure for table `sportchoices`
--

CREATE TABLE IF NOT EXISTS `sportchoices` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sportchoices`
--

INSERT INTO `sportchoices` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Football', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(2, 'Basketball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(3, 'Soccer', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(4, 'Rugby', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(5, 'Badminton', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(6, 'Fistball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(7, 'Tennis', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(8, 'Cadillac', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(9, 'Volleyball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(10, 'Archery', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(11, 'Karate', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(12, 'Netball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(13, 'Baseball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(14, 'Slamball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(15, 'Softball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(16, 'Bat-and-Trap', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(17, 'Cricket', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(18, 'Punchball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(19, 'Stickball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(20, 'T-ball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(21, 'Quidditch', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(22, 'Skateboarding', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(23, 'Skysurfing', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(24, 'Surfing', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(25, 'Wakeboarding', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(26, 'Curving', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(27, 'Rock Climbing', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(28, 'Kin-Ball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(29, 'Yukigassen', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(30, 'Ice climbing', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(31, 'Air Climbing', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(32, 'Hiking', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(33, 'Mountaineering', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(34, 'Cycling', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(35, 'Coasteering', '2015-11-09 17:42:47', '2015-11-09 17:42:47');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `id` int(11) NOT NULL,
  `sport` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `sport`) VALUES
(1, 'Football'),
(2, 'BaseBall'),
(3, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`) VALUES
(1, 1, 'fiction'),
(2, 1, 'biography'),
(3, 1, 'children'),
(4, 2, 'classical'),
(5, 2, 'rock'),
(6, 2, 'jazz'),
(7, 3, 'camera'),
(8, 3, 'audio'),
(9, 3, 'tv');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `active`) VALUES
(6, 'user', '$2a$10$n7c8uvn3RleqvlPqw2H26.K/iVOWHOXjUbQnN34kEhymjtrTJU7Ey', 'user', 'MMalikMo@gmail.com', 1),
(8, 'admin', '$2a$10$EscvhRQ0vqEww1dJTIiaZO8nor0sfEowNbuTMo4Dwysfa.7eGRohe', 'admin', 'Admin@gmail.com', 1),
(9, 'Malik', '$2a$10$Pib3kkZQNoRjeNMiK9Nqk.kkPKNirMKnsGJ11/K/JajrgLrQsDJpm', 'user', 'MM@g.com', 0),
(16, 'bruh', '$2a$10$veOBaLObkxwNS7YmZy7b7.Z5alkMTa9oY99fEPvTrUe6tdwwx.Oou', 'visitor', 'MMalikMo@gmail.com', 0),
(17, 'lol', '$2a$10$vPaU1tYduikoPVNBmCSG7uHpph9xO63VhI2f0fhxvaUO21xS8ShVS', 'user', 'MMalikMo@gmail.com', 1),
(18, 'lol', '$2a$10$XTv5CDxW7k/.jqAtAXXEJucsvgdZodA9jiZqfvQbXXbIuREtnUEQ6', 'user', 'MMalikMo@gmail.com', 0),
(19, 'lol', '$2a$10$7YJ9LwG8CElo9lgBcu85duffI7cP/7xjQjfGX5FAQBIgipOaoftlC', 'user', 'MMalikMo@gmail.com', 0),
(20, 'lol', '$2a$10$nEyzk4b3qg8h3kAt66ezuuBtMwsz9RSHqd8xGc1lgFexSuzVi7UmC', 'user', 'MMalikMo@gmail.com', 0),
(21, 'lol', '$2a$10$zZy2JrMmBlgFQDFQHM8ehezRKz/kBA6wrW75aTBoEqjh5iS6I5IQq', 'user', 'MMalikMo@gmail.com', 0),
(22, 'lol', '$2a$10$my84KLsZcWcBiY04BN0nZeAWS4RT7LF9OqplaIB67wShXOILIqGsi', 'user', 'MMalikMo@gmail.com', 0),
(23, 'lol', '$2a$10$s.feSDh7mIyMRqnrQhncYu/sGrj3lezbhpcYgAcTxv2zAUj5vTMAm', 'user', 'MMalikMo@gmail.com', 1),
(24, 'lol', '$2a$10$N9uzwvjNSs17pWu/NiQ/4eA.LKfmox0g8OApHJnXuvYnFkSomCffS', 'user', 'MMalikMo@gmail.com', 0),
(25, 'lol', '$2a$10$/qlqXqJW9de1PZS3oBkt5.axbTijvSxusB3ovdnZgvmSlGlGVrdM2', 'user', 'MMalikMo@gmail.com', 0),
(26, 'lol', '$2a$10$lTzDEPUmtZiHpAmdu66BuumuOZcsA.LlXbQWPxv5mgqgyRJdu3W2u', 'user', 'MMalikMo@gmail.com', 0),
(27, 'lol', '$2a$10$kcOGXTbujjDbqR3LtemCL.9z/9c1Reu3J9TK2/e1GABG08qJabcR2', 'user', 'MMalikMo@gmail.com', 0),
(28, 'lol', '$2a$10$KCVC7cxGbZ2STS1zYSX/meEfTN3Y3YUO8msxNcZhSeACgbwclEIvy', 'user', 'MMalikMo@gmail.com', 0),
(29, 'lol', '$2a$10$k3YgyfWFI9O90dFqDF2sm.o4cdHS9JnrIEQvQxdHD.hLaneZgGX8.', 'user', 'MMalikMo@gmail.com', 0),
(30, 'lol', '$2a$10$WVZEbFli9NRrYuGRcGr1deQJg2QaDQa.ShvUDqbRz9N25MXg/dedG', 'user', 'malik.mottawi@gmail.com', 0),
(31, 'lol', '$2a$10$okKuisKFR6uBXhthU/p19e16YcN822p56uIfwvjSyzlq6KJqUxUT2', 'user', 'malik.mottawi@gmail.com', 0),
(32, 'lol2', '$2a$10$C8FZJHJz75sKm3vQ8aaiJuTB1fEXdFhWGyvAHBRmWzl.eSVXqhvQG', 'user', 'malik.mottawi@gmail.com', 1),
(33, 'lol3', '$2a$10$ygcD7IznI6Tj2HVJjq47dO/kvIE06pirTjm7ubGz0y3oCxqM2KQVK', 'user', 'malik.mottawi@gmail.com', 0),
(34, 'lol4', '$2a$10$TKLmAuLINtM.d/S0pjWTxuiyMbnhWQyF.RkyIlAmfecs2aUNPkAwe', 'user', 'malik.mottawi@gmail.com', 0),
(35, 'lol5', '$2a$10$f4O/NxU3Lr3DsFoLeR2s4u9KDtku6wl05.blwH3x8TlE/snU9Ko3W', 'user', 'malik.mottawi@gmail.com', 0),
(36, 'lil', '$2a$10$0idtPtgRBB39Upi4HYuopeX0LfFd/uRHr5annpsjbEwQ6AMCvZbAy', 'user', 'malik.mottawi@gmail.com', 0),
(39, 'lol6', '$2a$10$3O7UnRwJsnacJVyysL1iUe54LkemJZSf/XVSHSKG2gFnMg3/t7vYO', 'user', 'malik.mottawi@gmail.com', 0),
(40, 'lk', '$2a$10$4VtJX.PuME1hJD0hmdcO2O7CAEsv4Z3QiZlhP.oSm51hoA2DBm5b2', 'admin', 'malik.mottawi@gmail.com', 1),
(41, 'ma', '$2a$10$EiPMPD4NbYFQI52j/pDeuOfYJwyUipMpeVrRiQ5sdJZZ798R7avVm', 'visitor', 'malik.mottawi@gmail.com', 1),
(42, 'exemple', '$2a$10$kiZ7X8KUx6Q.nfqPIoNu0O/.jfa1QO66hFnHL2WTrJXsItGHyhkkC', 'visitor', 'malik.mottawi@gmail.com', 0),
(43, 'bruh', '$2a$10$O4fKVDU9XLlEAzKacJF07OWiC6tpGtk4caHGVHRjm.sRIHyVEcE7K', 'user', 'MMalikMo@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athletes`
--
ALTER TABLE `athletes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `athletes_events`
--
ALTER TABLE `athletes_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sportchoices`
--
ALTER TABLE `sportchoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athletes`
--
ALTER TABLE `athletes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `athletes_events`
--
ALTER TABLE `athletes_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sportchoices`
--
ALTER TABLE `sportchoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
