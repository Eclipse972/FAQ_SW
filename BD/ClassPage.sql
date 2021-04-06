-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Mer 07 Avril 2021 à 01:15
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
-- Structure de la table `ClassPage`
--

CREATE TABLE IF NOT EXISTS `ClassPage` (
  `ID` int(11) NOT NULL auto_increment,
  `nom` varchar(99) collate latin1_general_ci NOT NULL,
  `description` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `ClassPage`
--

INSERT INTO `ClassPage` (`ID`, `nom`, `description`) VALUES
(0, 'PageAccueil', 'Page sur laquelle on arive lorque aucun paramètre n''est défini'),
(1, 'PageArticle', 'Page de type article d''une page'),
(2, 'PageVE', 'Création des volumes élémentaires');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
