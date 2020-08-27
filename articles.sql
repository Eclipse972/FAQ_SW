-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Jeu 27 Août 2020 à 02:30
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=53 ;

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
(30, 'deplacer_objet', 'déplacer un objet sur l&apos;&eacute;cran', ''),
(31, 'zoom_au_mieux', '', ''),
(32, 'zoom_fenetre', '', ''),
(33, 'outilsDesquisse', 'pr&eacute;sente la barre d&apos;outils d&apos;esquisse', ''),
(34, 'planDesquisse', 'les diff&eacute;rents type de plan d&apos;esquisse', ''),
(35, 'vues_std', 'ins&eacute;rer les vues standards', ''),
(36, 'vue_coupe', 'ins&eacute;rer  une vue en coupe', ''),
(37, 'perspective_perso', 'ins&eacute;rer  une perspective personnalis&eacute;e', ''),
(38, 'extrusion', 'Cr&eacute;er un volume  par extrusion', ''),
(39, 'revolution', 'Cr&eacute;er un volume  par r&eacute;volution', ''),
(40, 'balayage', 'Cr&eacute;er un volume  par balayage', ''),
(41, 'symetrie', 'Copier un volume par sym&eacute;trie', ''),
(42, 'rep_lineaire', 'Copier un volume avec une r&eacute;p&eacute;tition lin&eacute;aire', ''),
(43, 'rep_circulaire', 'Copier un volume avec une r&eacute;p&eacute;tition circulaire', ''),
(44, 'percage', 'Utiliser l&apos;assistance pour le per&ccedil;ge', ''),
(45, 'chanfrein', 'Cong&eacute;s et chanfreins', ''),
(46, 'cotation_intelligente', 'Cotation intelligente', ''),
(47, 'contrainteDesquisse', 'contrainte d&apos;esquisse', ''),
(48, 'ligne2construction', 'ligne de construction', ''),
(49, 'code_couleur', 'code couleur', ''),
(50, 'tourner_deplacer', 'tourner et d&eacute;placer une pi&eacute;ce ou un assemblage', ''),
(51, 'couper', 'couper une pi&egrave;ce ou un assemblage', ''),
(52, 'transparence_couleur', 'changer transparence ou couleur d&apos;une pi&egrave;ce', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
