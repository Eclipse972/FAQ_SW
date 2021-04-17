-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Dim 18 Avril 2021 à 00:22
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
-- Structure de la table `Connexes`
--

CREATE TABLE IF NOT EXISTS `Connexes` (
  `squelette_ID` int(11) NOT NULL,
  `texte` varchar(99) collate latin1_general_ci NOT NULL,
  `URL` varchar(99) collate latin1_general_ci NOT NULL,
  `type` tinyint(1) NOT NULL default '1' COMMENT '0: interne, 1: SW, 2:autre',
  UNIQUE KEY `articles_connexes` (`texte`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `Connexes`
--

INSERT INTO `Connexes` (`squelette_ID`, `texte`, `URL`, `type`) VALUES
(39, 'barre d&apos;outils', 'sldworks/r_sketch_toolbar.htm', 1),
(15, 'Barre d''outils Fonctions', 'sldworks/r_features_toolbar.htm', 1),
(54, 'ligne de construction', 'sldworks/c_centerlines.htm', 1),
(53, 'Icônes des relations d''esquisse', 'sldworks/c_sketch_relations_icons.htm', 1),
(44, 'Extrusions', 'sldworks/Hidd_dve_end_spec_dlg.htm', 1),
(45, 'Révolutions', 'sldworks/c_Revolves_Folder.htm', 1),
(46, 'Balayages', 'sldworks/c_Sweeps_Folder.htm', 1),
(47, 'Fonction de symétrie', 'sldworks/c_Mirror_Feature_Overview.htm', 1),
(48, 'Le PropertyManager Répétition linéaire', 'sldworks/HIDD_LPATTERN.htm', 1),
(49, 'Le PropertyManager Répétition circulaire', 'sldworks/HIDD_CPATTERN.htm', 1),
(50, 'Présentation de l''Assistance pour le perçage', 'sldworks/c_Hole_Wizard_Overview.htm', 1),
(51, 'Vue d''ensemble des congés', 'sldworks/c_Fillet_Overview.htm', 1),
(51, 'Création d''une fonction de chanfrein', 'sldworks/HIDD_DVE_FEAT_CHAMFER.htm', 1),
(57, 'Vues en coupe dans les modèles', 'sldworks/t_section_views_models.htm', 1),
(63, 'Créer un cylindre par révolution', '?alpha=1&beta=5&gamma=3', 0),
(67, 'Créer un cylindre par extrusion', '?alpha=1&beta=5&gamma=2', 0),
(65, 'Créer un tronc de cône par extrusion', '?alpha=1&beta=5&gamma=6', 0),
(68, 'Créer un tronc de cône par r&eacute;volution', '?alpha=1&beta=5&gamma=5', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
