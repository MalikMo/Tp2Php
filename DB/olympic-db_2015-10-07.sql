-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Mer 07 Octobre 2015 à 17:42
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
  `user_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `athletes`
--

INSERT INTO `athletes` (`id`, `name`, `versus`, `user_id`, `sport_id`) VALUES
(1, 'Malik', 'Canada', 8, 1),
(2, 'Tristan', 'USA', 8, 1),
(11, 'Malik', 'China', 6, 1),
(13, 'Tristan', 'Russia', 6, 2);

-- --------------------------------------------------------

--
-- Structure de la table `athletes_events`
--

CREATE TABLE `athletes_events` (
  `id` int(11) NOT NULL,
  `athlete_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

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
(12, 11, 4);

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
-- Structure de la table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `sport` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sports`
--

INSERT INTO `sports` (`id`, `sport`) VALUES
(1, 'Football'),
(2, 'BaseBall');

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`) VALUES
(6, 'user', '$2a$10$n7c8uvn3RleqvlPqw2H26.K/iVOWHOXjUbQnN34kEhymjtrTJU7Ey', 'user', 'MMalikMo@gmail.com'),
(8, 'admin', '$2a$10$EscvhRQ0vqEww1dJTIiaZO8nor0sfEowNbuTMo4Dwysfa.7eGRohe', 'admin', 'Admin@gmail.com'),
(9, 'Malik', '$2a$10$Pib3kkZQNoRjeNMiK9Nqk.kkPKNirMKnsGJ11/K/JajrgLrQsDJpm', 'user', 'MM@g.com'),
(16, 'bruh', '$2a$10$veOBaLObkxwNS7YmZy7b7.Z5alkMTa9oY99fEPvTrUe6tdwwx.Oou', NULL, 'MMalikMo@gmail.com'),
(17, 'bruh2', '$2a$10$zp7YUPJUQZaDE4VRRA/rN.qnZX1Xp.dE7vA7mwfxeapEQqbv.S42C', 'visitor', 'MMalikMo@gmail.com');

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
-- Index pour la table `sports`
--
ALTER TABLE `sports`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `athletes_events`
--
ALTER TABLE `athletes_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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
-- AUTO_INCREMENT pour la table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
