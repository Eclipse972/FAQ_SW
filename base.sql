-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Sam 16 Février 2019 à 22:37
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

CREATE TABLE IF NOT EXISTS `Articles` (
  `id` int(11) NOT NULL auto_increment,
  `dossier` text collate latin1_general_ci NOT NULL,
  `resume` varchar(99) collate latin1_general_ci NOT NULL COMMENT 'résumé de l''article',
  `lien` text collate latin1_general_ci NOT NULL COMMENT 'aide SW en ligne',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=35 ;

--
-- Contenu de la table `Articles`
--

INSERT INTO `Articles` (`id`, `dossier`, `resume`, `lien`) VALUES
(1, 'accueil', 'comment s&apos;y retrouver sur le site', ''),
(2, 'piece', 'pr&eacute;sentation du module pi&egrave;ce', ''),
(3, 'MEP', 'pr&eacute;sentation du module mise en plan', ''),
(4, 'assemblage', 'pr&eacute;sentation du module assemblage', ''),
(5, 'divers', 'les articles inclassables', ''),
(6, 'moi', '&agrave; propos de moi', ''),
(7, 'trouver_article', 'Comment trouver un article sans moteur de recherche', ''),
(8, 'esquisse2D', 'tout ou presque sur les esquisses 2D', ''),
(9, 'fonctions', 'tout sur les fonctions de base', ''),
(10, 'manipuler_piece', 'faites ce que vous voulez de la pi&egrave;ce', ''),
(11, 'arbre_piece', 'l&apos;arbre de cr&eacute;ation, un outil m&eacute;connu', ''),
(12, 'fond2plan', 'une feuille mais pas seulement.', ''),
(13, 'inserer_vues', 'plein de sorte de vues', ''),
(14, 'ajouter_cotation', 'coter dans une mise en plan', ''),
(15, 'mise_en_page', 'mettre en page en quelques minutes', ''),
(16, 'cartouche', 'la fiche d''identit&eacute; du dessin', ''),
(17, 'exportPDF', 'Exporter une mise en plan en PDF', ''),
(18, 'arbre_MEP', 'L&apos;arbre de cr&eacute;ation, cet outil m&eacute;connu', ''),
(19, 'lien_MEP_fichier', 'le lien entre une mise en plan et son fichier pi&egrave;ce/assemblage', ''),
(20, 'contrainte_assemblage', 'assembler des pi&egrave;ce comme un pro', ''),
(21, 'arbre_assemblage', 'l&arbre de cr&eacute;ation de l&apos;ssemblage, comment l&apos;exploiter', ''),
(22, 'config_assemblage', 'exploiter au mieux les configurations', ''),
(23, 'eclater_assemblage', 'cr&eacute;er des &eacute;clat&eacute;s', ''),
(24, 'ecorcher_assemblage', 'Cr&eacute;er un &eacute;corch&eacute; facilement', ''),
(25, 'zoom', 'choisissez le zoom le plus adapt&acute;', ''),
(26, 'ouvrir_fichier', 'filtrer les fichiers avant d&apos;ouvrir', ''),
(27, 'meca_graphique', 'la m&eacute;canique graphique sans papier ni crayon', ''),
(28, 'casier_numerique', 'd&eacute;poser correctement un fichier dans mon casier nu&eacute;rique', ''),
(29, 'ajuster_zoom', 'modifier l&eacute;g&egrav;rement le zoom', ''),
(30, 'deplacer_objet', '', ''),
(31, 'zoom_au_mieux', '', ''),
(32, 'zoom_fenetre', '', ''),
(33, 'outilsDesquisse', 'pr&eacute;sente la barre d&apos;outils d&apos;esquisse', ''),
(34, 'planDesquisse', 'les diff&eacute;rents type de plan d&apos;esquisse', '');

-- --------------------------------------------------------

--
-- Structure de la table `Connexes`
--

CREATE TABLE IF NOT EXISTS `Connexes` (
  `article_ID` int(11) NOT NULL,
  `vers` int(11) NOT NULL,
  UNIQUE KEY `articles_connexes` (`article_ID`,`vers`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `Connexes`
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
(3, 0, 0, 'le module assemblage', 4),
(2, 0, 0, 'le module mise en plan', 3),
(4, 0, 0, 'les inclassables', 5),
(0, 0, 0, 'page d''accueil', 1),
(1, 0, 0, 'Le module pièce', 2),
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
(1, 1, 1, 'outils d&apos;esquisse', 33),
(1, 1, 2, 'plan d&apos;esquisse', 34);

-- --------------------------------------------------------

--
-- Structure de la table `Pages`
--

CREATE TABLE IF NOT EXISTS `Pages` (
  `numéro` int(11) NOT NULL,
  `contenu` int(11) NOT NULL,
  `article_ID` int(11) NOT NULL,
  `lien` text collate latin1_general_ci NOT NULL COMMENT 'aide SW en ligne',
  UNIQUE KEY `page_unique` (`article_ID`,`numéro`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `Pages`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
