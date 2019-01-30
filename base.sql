-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Mer 30 Janvier 2019 à 01:20
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
-- Structure de la table `Items`
--

CREATE TABLE IF NOT EXISTS `Items` (
  `onglet` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `sous_item` int(11) NOT NULL,
  `texte` varchar(50) collate latin1_general_ci NOT NULL,
  `article_ID` int(11) NOT NULL,
  UNIQUE KEY `navigation` (`onglet`,`item`,`sous_item`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `Items`
--

INSERT INTO `Items` (`onglet`, `item`, `sous_item`, `texte`, `article_ID`) VALUES
(3, 0, 0, '', 4),
(2, 0, 0, '', 3),
(4, 0, 0, '', 5),
(0, 0, 0, '', 1),
(1, 0, 0, '', 2),
(0, 1, 0, 'Qui suis-je?', 6),
(0, 2, 0, 'Retrouver un article', 7),
(1, 1, 0, 'Esquisse 2D', 8),
(1, 2, 0, 'Les fonctions', 9),
(1, 3, 0, 'Manipuler le pi&egrave;ce', 10),
(1, 4, 0, 'Arbre de cr&eacute;ation', 11),
(2, 1, 0, 'Les fond de plan', 12),
(2, 2, 0, 'Ins&eacute;rer des vues', 13),
(2, 3, 0, 'Ajouter la cotation', 14),
(2, 4, 0, 'Mise en page', 15),
(2, 5, 0, 'Remplir le Cartouche', 16),
(2, 6, 0, 'Export en PDF', 17),
(2, 7, 0, 'Arbre de cr&eacute;ation', 18),
(2, 8, 0, 'Liaison mise en plan-fichier', 19),
(3, 1, 0, 'Les contraintes', 20),
(3, 2, 0, 'Arbre de cr&eacute;ation', 21),
(3, 3, 0, 'Les configurations', 22),
(3, 4, 0, 'Cr&eacute;er un &eacute;clat&eacute;', 23),
(3, 5, 0, 'Cr&eacute;er un &eacute;corch&eacute;', 24),
(4, 1, 0, 'Les zooms', 25),
(4, 2, 0, 'Ouvrir efficacement un fichier', 26),
(4, 3, 0, 'M&eacute;canique graphique', 27),
(4, 4, 0, 'Mon casier nm&eacute;rique', 28),
(4, 1, 1, 'zoom fen&ecirc;tre', 32),
(4, 1, 2, 'ajuster le zoom', 29),
(4, 1, 3, 'zoom au mieux', 31),
(4, 1, 4, 'd&eacute;placer la vue', 30);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
