-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 06 Février 2019 à 11:40
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chouette_immo`
--

-- --------------------------------------------------------

--
-- Structure de la table `biens`
--

CREATE TABLE `biens` (
  `id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `nb_pieces` int(7) NOT NULL,
  `surface` int(20) DEFAULT NULL,
  `prix` int(20) DEFAULT NULL,
  `ville` varchar(24) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `perf_nrj` int(4) DEFAULT NULL,
  `ges` int(4) DEFAULT NULL,
  `flashcode` varchar(255) DEFAULT NULL,
  `adresse` varchar(1000) DEFAULT NULL,
  `prestation` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `biens`
--

INSERT INTO `biens` (`id`, `type`, `nb_pieces`, `surface`, `prix`, `ville`, `description`, `perf_nrj`, `ges`, `flashcode`, `adresse`, `prestation`) VALUES
(29, 'Appartement', 4, 350, 200000, 'lyon', 'j\'aime les choux', 22, 18, NULL, '18 rue de la baguette', 'vente'),
(30, 'Appartement', 4, 350, 200000, 'lyon', 'j\'aime les choux', 22, 18, NULL, '18 rue de la baguette', 'vente'),
(31, 'Appartement', 4, 350, 200000, 'lyon', 'j\'aime les choux', 22, 18, NULL, '18 rue de la baguette', 'vente'),
(32, 'Appartement', 4, 21, 15, 'arcy sur cure', 'j\'aime les choux', 12, 13, NULL, '46 impasse du faite de l\'orme', 'vente'),
(37, 'Maison', 5, 300, 2000, 'dijon', 'j\'aime les chouxfleurs', 20, 28, NULL, '69 rue condorcet', 'location'),
(38, 'Maison', 5, 300, 2000, 'dijon', 'j\'aime les chouxfleurs', 20, 28, NULL, '69 rue condorcet', 'location'),
(41, 'Appartement', 5, 456, 486218, 'dijon', 'j\'aime les chouxfleurs papillons', 49, 32, NULL, '17 rue des perriere', 'vente'),
(42, 'Maison', 5, 300, 300000, 'brest', 'il pleut', 6000, 1, NULL, 'ici il pleut moins', 'vente'),
(43, 'Appartement', 2, 30, 200, 'marseille', 'c\'est petit', 9, 12, NULL, 'rue de padre', 'location'),
(47, 'Maison', 287, 28732587, 2857257, 'dijon', '257257', 257257, 57257, NULL, '17 rue des perriere', 'vente'),
(48, 'Maison', 287, 28732587, 2857257, 'dijon', '257257', 257257, 57257, NULL, '17 rue des perriere', 'vente'),
(49, 'Maison', 6, 456, 456, 'avallon', 'c\'est perdu', 17, 17, NULL, 'sur un rond point', 'location'),
(50, 'Appartement', 3, 48646, 48612318, 'dijon', 'j\'aime les chouxfleurs', 5, 7, NULL, '17 rue des perriere', 'vente'),
(51, 'Appartement', 5, 600, 2000, 'avallon', 'hytjyrdjhfx,hfx', 22, 19, NULL, '69 rue condorcet', 'location');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `biens`
--
ALTER TABLE `biens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `biens`
--
ALTER TABLE `biens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
