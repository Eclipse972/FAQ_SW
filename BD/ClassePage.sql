-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
<<<<<<< HEAD
-- Généré le : Lun 19 Avril 2021 à 22:39
=======
-- Généré le : Ven 30 Avril 2021 à 02:06
>>>>>>> convergencePEUNC
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
-- Structure de la table `ClassePage`
--

CREATE TABLE IF NOT EXISTS `ClassePage` (
  `ID` int(11) NOT NULL auto_increment,
  `nom` varchar(99) collate latin1_general_ci NOT NULL,
  `description` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `ClassePage`
--

INSERT INTO `ClassePage` (`ID`, `nom`, `description`) VALUES
(1, 'PageArticle', 'Article d''une page'),
(2, 'PageVE', 'article sur les volumes élémentaires'),
(-1, 'PageErreur', 'Page d''erreur du site'),
(-2, 'PageContact', 'Formulaire de contact'),
(-3, 'PageMembre', 'gestion des membres'),
(-4, 'PageAdministrateur', 'Page de l''administrateur du site');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
