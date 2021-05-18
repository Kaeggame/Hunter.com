-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 18 mai 2021 à 13:04
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hunter`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

DROP TABLE IF EXISTS `jeux`;
CREATE TABLE IF NOT EXISTS `jeux` (
  `idj` int(11) NOT NULL AUTO_INCREMENT,
  `nomj` varchar(100) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idj`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`idj`, `nomj`, `prix`, `img`) VALUES
(1, 'The Elder Pong', 159.99, ''),
(2, 'TrackMania', 9.99, ''),
(3, 'Metroid Prime', 59.99, '');

-- --------------------------------------------------------

--
-- Structure de la table `jeuxtag`
--

DROP TABLE IF EXISTS `jeuxtag`;
CREATE TABLE IF NOT EXISTS `jeuxtag` (
  `idj` int(11) NOT NULL,
  `idt` int(11) NOT NULL,
  KEY `idj` (`idj`),
  KEY `idt` (`idt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeuxtag`
--

INSERT INTO `jeuxtag` (`idj`, `idt`) VALUES
(1, 1),
(1, 2),
(1, 7),
(1, 18),
(1, 19),
(1, 24),
(1, 27),
(1, 8),
(2, 6),
(2, 13),
(2, 25),
(3, 2),
(3, 12),
(3, 5);

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `idt` int(11) NOT NULL,
  `nomt` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tag`
--

INSERT INTO `tag` (`idt`, `nomt`) VALUES
(1, 'Action'),
(2, 'Aventure'),
(3, 'Bac à sable'),
(4, 'Beat them all'),
(5, 'Tir'),
(6, 'Course'),
(7, 'Combat'),
(8, 'Fantasy'),
(9, 'Gestion'),
(10, 'Horreur'),
(11, 'Infiltration'),
(12, 'Metroidvania'),
(13, 'Multijoueur'),
(14, 'Party Game'),
(15, 'Platforme'),
(16, 'Puzzle'),
(17, 'Rogue like'),
(18, 'Romance'),
(19, 'RPG'),
(20, 'Rythme'),
(21, 'Science fiction'),
(22, 'Shoot them up'),
(23, 'Simulation'),
(24, 'Solo'),
(25, 'Sport'),
(26, 'Stratégie'),
(27, '18+');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `daten` date DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
