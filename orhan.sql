-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 21 juil. 2022 à 18:08
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `orhan`
--
CREATE DATABASE IF NOT EXISTS `orhan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `orhan`;

-- --------------------------------------------------------

--
-- Structure de la table `machine`
--

CREATE TABLE `machine` (
  `reference_interne` varchar(50) NOT NULL,
  `date2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `opérateur`
--

CREATE TABLE `opérateur` (
  `nom` varchar(256) NOT NULL,
  `matrecule` varchar(50) NOT NULL,
  `motDePass` varchar(256) NOT NULL,
  `ligne` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `opérateur`
--

INSERT INTO `opérateur` (`nom`, `matrecule`, `motDePass`, `ligne`) VALUES
('yasser', '123456', 'yasser123', 'travaille'),
('bourada', '654654612', 'yasser1234', 'sdf');

-- --------------------------------------------------------

--
-- Structure de la table `pallets`
--

CREATE TABLE `pallets` (
  `ReferenceClient` varchar(50) NOT NULL,
  `ref_int` varchar(50) NOT NULL,
  `quantity` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pallets`
--

INSERT INTO `pallets` (`ReferenceClient`, `ref_int`, `quantity`, `date`) VALUES
('FSDS65416', '5464DGZW', 1125, '2022-07-01');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`date2`),
  ADD UNIQUE KEY `date2` (`date2`);

--
-- Index pour la table `opérateur`
--
ALTER TABLE `opérateur`
  ADD PRIMARY KEY (`matrecule`);

--
-- Index pour la table `pallets`
--
ALTER TABLE `pallets`
  ADD PRIMARY KEY (`ref_int`),
  ADD UNIQUE KEY `date` (`date`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
