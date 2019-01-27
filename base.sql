-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Dim 27 Janvier 2019 à 06:51
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
-- Structure de la table `Articles`
--
-- Création: Dim 27 Janvier 2019 à 02:48
-- Dernière modification: Dim 27 Janvier 2019 à 06:10
--

CREATE TABLE IF NOT EXISTS `Articles` (
  `id` int(11) NOT NULL auto_increment,
  `dossier` text collate latin1_general_ci NOT NULL,
  `titre` text collate latin1_general_ci NOT NULL,
  `lien` text collate latin1_general_ci NOT NULL COMMENT 'aide SW en ligne',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `Articles`
--

INSERT INTO `Articles` (`id`, `dossier`, `titre`, `lien`) VALUES
(1, 'accueil', 'Bienvenue sur mon site!', ''),
(2, 'piece', 'Le module pi&egrave;ce', ''),
(3, 'MEP', 'Le module mise en plan', ''),
(4, 'assemblage', 'Le module assemblage', ''),
(5, 'divers', 'Divers', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
