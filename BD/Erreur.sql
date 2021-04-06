-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Mer 07 Avril 2021 à 00:08
-- Version du serveur: 5.0.83
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `faq_sw`
--

-- --------------------------------------------------------

--
-- Structure de la table `Erreur`
--

CREATE TABLE IF NOT EXISTS `Erreur` (
  `code` int(11) NOT NULL,
  `texte` varchar(99) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `Erreur`
--

INSERT INTO `Erreur` (`code`, `texte`) VALUES
(0, 'Erreur inconnue'),
(1, 'L&apos;article a disparu'),
(2, 'Probl&egrave;me avec les paramètres de l&apos;article'),
(403, 'Acc&egrave;s interdit'),
(404, 'Cette page n&apos;existe pas'),
(500, 'Serveur satur&eacute;, essayez de recharger la page.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
