-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 13 avr. 2023 à 13:28
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projets2023`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `Id` int(11) NOT NULL,
  `Titre` varchar(255) DEFAULT NULL,
  `DatDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`Id`, `Titre`, `DatDebut`, `DateFin`, `Description`) VALUES
(1, 'Gestion de bibliotheque', '2022-11-01', '2023-06-15', 'Projet de gestion de la bibliothèque scollaire du BTS de kénitra'),
(2, 'Gestion des évaluations', '2022-11-10', '2023-06-15', 'Projet de gestion des évaluation au sein du BTS de kénitra'),
(15, '', '0000-00-00', '0000-00-00', ''),
(13, '', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `ID` int(11) NOT NULL,
  `ProjetId` int(11) NOT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Debut` varchar(255) DEFAULT NULL,
  `Fin` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `task`
--

INSERT INTO `task` (`ID`, `ProjetId`, `Nom`, `Debut`, `Fin`) VALUES
(1, 1, 'analyse', '2023-12-12', '2023-02-12'),
(2, 1, 'conception', '2023-02-20', '2023-04-12'),
(7, 1, 'Test', '2023-03-23', '2023-05-29'),
(8, 1, 'oubia', '2023-03-24', '2023-04-21'),
(9, 9, 'conception', '2023-03-17', '2023-03-31'),
(10, 10, 'oubia', '2023-03-26', '2023-04-08');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKTask590830` (`ProjetId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
