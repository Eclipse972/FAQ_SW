-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Mer 30 Janvier 2019 à 00:45
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=29 ;

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
(12, 'fond2plan', 'une feuile mais pas seulement.', ''),
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
(28, 'casier_numerique', 'd&eacute;poser correctement un fichier dans mon casier nu&eacute;rique', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
