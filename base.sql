-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Dim 27 Janvier 2019 à 12:16
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
  `titre` text collate latin1_general_ci NOT NULL,
  `lien` text collate latin1_general_ci NOT NULL COMMENT 'aide SW en ligne',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=29 ;

--
-- Contenu de la table `Articles`
--

INSERT INTO `Articles` (`id`, `dossier`, `titre`, `lien`) VALUES
(1, 'accueil', 'Bienvenue sur mon site!', ''),
(2, 'piece', 'Le module pi&egrave;ce', ''),
(3, 'MEP', 'Le module mise en plan', ''),
(4, 'assemblage', 'Le module assemblage', ''),
(5, 'divers', 'Les inclassables', ''),
(6, 'moi', 'Qui suis-je?', ''),
(7, 'trouver_article', 'Retrouver un article', ''),
(8, 'esquisse2D', 'esquisse 2D', ''),
(9, 'fonctions', 'Fonctions pour cr&eacute;er des volumes', ''),
(10, 'manipuler_piece', 'Manipuler la pi&egrave;ce', ''),
(11, 'arbre_piece', 'Arbre de cr&eacute;ation', ''),
(12, 'fond2plan', 'Choisir un fond de plan', ''),
(13, 'inserer_vues', 'Ins&eacute;rer des vues', ''),
(14, 'ajouter_cotation', 'Ajouter la cotation', ''),
(15, 'mise_en_page', 'Modifier la mise en page', ''),
(16, 'remplir_cartouche', 'Remplir le cartouche', ''),
(17, 'exportPDF', 'Exporter en PDF', ''),
(18, 'arbre_MEP', 'L''arbre de création d''&apos;une mise en plan', ''),
(19, 'lien_MEP_fichier', 'Lien entre la mise en plan et son ficher pi&egrave;ce/assemblage', ''),
(20, 'contrainte_assemblage', 'Ajouter des contraintes d&apos;assemblage', ''),
(21, 'arbre_assemblage', 'Exploiter l&apos;arbre de cr&eacute;ation de l''assemblage', ''),
(22, 'config_assemblage', 'les configurations d&apos;assemblage', ''),
(23, 'eclater_assemblage', 'Cr&eacute;er un &eacute;clat&eacute;', ''),
(24, 'ecorcher_assemblage', 'Cr&eacute;er un &eacute;corch&eacute;', ''),
(25, 'zoom', 'Les diff&eacute;rentes mani&eagrave;re de zoomer', ''),
(26, 'ouvrir_fichier', 'Ouvrir un fichier efficacement', ''),
(27, 'meca_graphique', 'faire de la m&eacute;canique graphique dans une mise en plan', ''),
(28, 'casier_numerique', 'Mettre un fichier dans mon casier num&eacute;rique', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
