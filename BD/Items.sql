-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Mer 07 Avril 2021 à 01:14
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
  `image` varchar(99) collate latin1_general_ci NOT NULL,
  `ptiNom` varchar(99) collate latin1_general_ci NOT NULL,
  `classePageID` varchar(99) collate latin1_general_ci NOT NULL default '1' COMMENT 'identifiant de la classe page',
  `article_ID` int(11) NOT NULL,
  UNIQUE KEY `navigation` (`onglet`,`item`,`sous_item`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `Items`
--

INSERT INTO `Items` (`onglet`, `item`, `sous_item`, `texte`, `image`, `ptiNom`, `classePageID`, `article_ID`) VALUES
(3, 0, 0, 'Assemblage', 'Vue/images/assemblage.png', 'Assemblage', '1', 4),
(2, 0, 0, 'Mise en plan', 'Vue/images/MEP.png', 'MEP', '1', 3),
(4, 0, 0, 'Autre', 'Vue/images/autre.png', 'Autre', '1', 5),
(0, 0, 0, 'Accueil', 'Vue/images/accueil.png', 'Accueil', '0', 1),
(1, 0, 0, 'Pi&egrave;ce', 'Vue/images/piece.png', 'Piece', '1', 2),
(0, 1, 0, 'Qui suis-je?', '', 'moi', '1', 6),
(0, 2, 0, 'Retrouver un article', '', 'rechercher', '1', 7),
(1, 1, 0, 'Esquisse 2D', 'Vue/images/esquisse.png', '', '1', 8),
(1, 2, 0, 'Les fonctions', '', '', '1', 9),
(1, 3, 0, 'Manipuler la pi&egrave;ce', '', '', '1', 10),
(1, 4, 0, 'Arbre de cr&eacute;ation', '', '', '1', 11),
(2, 1, 0, 'Les fonds de plan', '', '', '1', 12),
(2, 2, 0, 'Ins&eacute;rer des vues', 'Vue/images/3vues.png', '', '1', 13),
(2, 3, 0, 'Ajouter la cotation', '', '', '1', 14),
(2, 4, 0, 'Mise en page', 'Vue/images/deplacement_vue.png', '', '1', 15),
(2, 5, 0, 'Remplir le Cartouche', '', '', '1', 16),
(2, 6, 0, 'Export en PDF', 'Vue/images/Pdf.png', '', '1', 17),
(2, 7, 0, 'Arbre de cr&eacute;ation', '', '', '1', 18),
(2, 8, 0, 'Liaison mise en plan-fichier', '', '', '1', 19),
(3, 1, 0, 'Les contraintes', '', '', '1', 20),
(3, 2, 0, 'Arbre de cr&eacute;ation', '', '', '1', 21),
(3, 3, 0, 'Les configurations', '', '', '1', 22),
(3, 4, 0, 'Cr&eacute;er un &eacute;clat&eacute;', 'Vue/images/icone_eclater_rassembler.png', '', '1', 23),
(3, 5, 0, 'Cr&eacute;er un &eacute;corch&eacute;', '', '', '1', 24),
(4, 1, 0, 'Les zooms', '', '', '1', 25),
(4, 2, 0, 'Ouvrir un fichier', 'Vue/images/icone_ouvrir.png', '', '1', 26),
(4, 3, 0, 'M&eacute;canique graphique', '', '', '1', 27),
(4, 4, 0, 'Mon casier nm&eacute;rique', '', '', '1', 28),
(4, 1, 1, 'zoom fen&ecirc;tre', '', '', '1', 32),
(4, 1, 2, 'ajuster le zoom', '', '', '1', 29),
(4, 1, 3, 'zoom au mieux', '', '', '1', 31),
(1, 1, 1, 'outils d&apos;esquisse', '', '', '1', 33),
(1, 1, 2, 'plan d&apos;esquisse', '', '', '1', 34),
(2, 2, 1, 'les vues standards', '', '', '1', 35),
(2, 2, 2, 'vue en coupe', '', '', '1', 36),
(2, 2, 3, 'perspective personnalis&eacute;e', '', '', '1', 37),
(1, 2, 1, 'Extrusion', 'Vue/images/extrusion.png', '', '1', 38),
(1, 2, 2, 'R&eacute;volution', 'Vue/images/revolution.png', '', '1', 39),
(1, 2, 3, 'Balayage', '', '', '1', 40),
(1, 2, 4, 'Symétrie', '', '', '1', 41),
(1, 2, 7, 'Assistance pour le per&ccedil;age', '', '', '1', 44),
(1, 2, 8, 'Cong&eacute et chanfrein', '', '', '1', 45),
(1, 2, 5, 'R&eacute;p&eacute;tition lin&eacute;aire', '', '', '1', 42),
(1, 2, 6, 'R&eacute;p&eacute;tition circulaire', 'Vue/images/repetition_circulaire.png', '', '1', 43),
(1, 1, 3, 'cotation intelligente', 'Vue/images/cotation.png', '', '1', 46),
(1, 1, 4, 'contrainte d&apos;esquisse', '', '', '1', 47),
(1, 1, 5, 'ligne de construction', 'Vue/images/ligne2construction.png', '', '1', 48),
(1, 1, 6, 'code couleur', '', '', '1', 49),
(1, 3, 1, 'tourner et d&eacute;placer', '', '', '1', 50),
(1, 3, 2, 'couper une pi&egrave;ce', 'Vue/images/couper_piece.png', '', '1', 51),
(1, 3, 3, 'transparence ou couleur', '', '', '1', 52),
(1, 4, 1, 'arbre de cr&eacute;ation -> zone graphique', '', '', '1', 53),
(1, 4, 2, 'zone graphique  -> arbre de cr&eacute;ation', '', '', '1', 54),
(1, 5, 0, 'Volumes &eacute;l&eacute;mentaires', '', '', '1', 55),
(1, 5, 1, 'prisme droit', 'Vue/images/prisme.png', '', '1', 56),
(1, 5, 2, 'cylindre par extrusion', 'Vue/images/cylindre.png', '', '1', 57),
(1, 5, 4, 'sph&egrave;re', 'Vue/images/sphere.png', '', '1', 58),
(1, 5, 5, 'tronc de c&ocirc;ne par r&eacute;volution', 'Vue/images/tronc2cone.png', '', '1', 59),
(1, 5, 7, 'tore', 'Vue/images/tore.png', '', '1', 60),
(1, 5, 3, 'cylindre par r&eacute;volution', 'Vue/images/cylindre.png', '', '1', 61),
(1, 5, 6, 'tronc de c&ocirc;ne par extrusion', 'Vue/images/tronc2cone.png', '', '1', 62);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
