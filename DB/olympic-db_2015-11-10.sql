-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Mar 10 Novembre 2015 à 14:53
-- Version du serveur :  5.5.44
-- Version de PHP :  5.4.43

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `olympic`
--

-- --------------------------------------------------------

--
-- Structure de la table `athletes`
--

CREATE TABLE `athletes` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `versus` varchar(35) NOT NULL,
  `athlete_image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `athletes`
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
-- Structure de la table `athletes_events`
--

CREATE TABLE `athletes_events` (
  `id` int(11) NOT NULL,
  `athlete_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `athletes_events`
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
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'books'),
(2, 'music'),
(3, 'electronics');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `title`, `score`) VALUES
(1, 'Championship', 15),
(3, 'Semi-Finals', 166),
(4, 'QuarterFinals', 89);

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `athlete_id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `reviews`
--

INSERT INTO `reviews` (`id`, `athlete_id`, `name`, `email`, `text`) VALUES
(1, 1, 'The War ', 'MM@gmail.com', 'This was a tough one');

-- --------------------------------------------------------

--
-- Structure de la table `sportchoices`
--

CREATE TABLE `sportchoices` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `sportchoices`
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
-- Structure de la table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `sport` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sports`
--

INSERT INTO `sports` (`id`, `sport`) VALUES
(1, 'Football'),
(2, 'BaseBall'),
(3, 'a');

-- --------------------------------------------------------

--
-- Structure de la table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `subcategories`
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
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`) VALUES
(6, 'user', '$2a$10$n7c8uvn3RleqvlPqw2H26.K/iVOWHOXjUbQnN34kEhymjtrTJU7Ey', 'user', 'MMalikMo@gmail.com'),
(8, 'admin', '$2a$10$EscvhRQ0vqEww1dJTIiaZO8nor0sfEowNbuTMo4Dwysfa.7eGRohe', 'admin', 'Admin@gmail.com'),
(9, 'Malik', '$2a$10$Pib3kkZQNoRjeNMiK9Nqk.kkPKNirMKnsGJ11/K/JajrgLrQsDJpm', 'user', 'MM@g.com'),
(16, 'bruh', '$2a$10$veOBaLObkxwNS7YmZy7b7.Z5alkMTa9oY99fEPvTrUe6tdwwx.Oou', 'visitor', 'MMalikMo@gmail.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `athletes`
--
ALTER TABLE `athletes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `athletes_events`
--
ALTER TABLE `athletes_events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sportchoices`
--
ALTER TABLE `sportchoices`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `athletes`
--
ALTER TABLE `athletes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `athletes_events`
--
ALTER TABLE `athletes_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `sportchoices`
--
ALTER TABLE `sportchoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
