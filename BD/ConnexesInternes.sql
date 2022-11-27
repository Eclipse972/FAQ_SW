-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Dim 27 Novembre 2022 à 05:05
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
-- Structure de la table `ConnexesInternes`
--

CREATE TABLE IF NOT EXISTS `ConnexesInternes` (
  `squelette_ID` int(11) NOT NULL,
  `lien` int(11) NOT NULL,
  `texte` varchar(99) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `ConnexesInternes`
--

INSERT INTO `ConnexesInternes` (`squelette_ID`, `lien`, `texte`) VALUES
(63, 67, 'cylindre par r&eacute;volution'),
(67, 63, 'cylindre par extrusion'),
(65, 68, 'tronc de cone par extrusion'),
(68, 65, 'tronc de cone par r&eacute;volution'),
(17, 24, 'Arbre de cr&eacute;ation d&apos;une mise en plan'),
(17, 27, 'Arbre de cr&eacute;ation d&apos;un assemblage '),
(24, 17, 'Arbre de cr&eacute;ation d&apos;une pi&egrave;ce'),
(24, 27, 'Arbre de cr&eacute;ation d&apos;un assemblage'),
(27, 17, 'Arbre de cr&eacute;ation d&apos;une pi&egrave;ce'),
(27, 24, 'arbre de cr&eacute;ation d&apos;une mise en plan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
