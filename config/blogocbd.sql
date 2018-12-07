-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 07 déc. 2018 à 06:13
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogocbd`
--
CREATE DATABASE IF NOT EXISTS `blogocbd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blogocbd`;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `confirm_tkn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `passwd`, `confirm_tkn`) VALUES
(1, 'drigos', 'drigos1ere@yahoo.fr', '', ''),
(2, 'shehe', '', '', ''),
(3, 'bani', 'rodrigue.ngorian@esatic.ci', '$2y$10$BF75kbrxc.NlQc7jab6ro.zIohOxU8YViPlRsqdk5FtTka4jjZ4se', 'Qm64wMsaAr3ohi3C3zSUN9YvHUJZCOgbMPxX9FBmo1GGDiv1Pf'),
(5, 'drigos1er', 'drigos1er@yahoo.fr', '$2y$10$2sKrT.ju6jo9ZaL4COtz6uxK1Fp3GRYsi4mtj4/5ma7K/O/DMYWi2', 'a5NgcEDOFghq6d6Fhgjo0MIod5gfQnZrjVyQOkfm7UHA0OHsie'),
(6, 'r17ngora', 'rodrigue.ngoran@esatic.ci', '$2y$10$n3cJOBWcfoxn4ud5rZx16OAqiKKjYwp1jYZeQdO4aiqUk4RAVxWsO', 'QkKM5gG3k9YWzSO6IYkkZARAJc9EgwPIxdItuZOy36ttZ7bzHa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
