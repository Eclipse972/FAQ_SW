-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Lun 19 Avril 2021 à 21:33
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
  `URL` varchar(255) collate latin1_general_ci NOT NULL,
  UNIQUE KEY `articles_connexes` (`texte`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `Connexes`
--

INSERT INTO `Connexes` (`squelette_ID`, `texte`, `URL`) VALUES
(39, 'barre d&apos;outils', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/r_sketch_toolbar.htm'),
(15, 'Barre d''outils Fonctions', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/r_features_toolbar.htm'),
(54, 'ligne de construction', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/c_centerlines.htm'),
(53, 'Icônes des relations d''esquisse', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/c_sketch_relations_icons.htm'),
(44, 'Extrusions', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/Hidd_dve_end_spec_dlg.htm'),
(45, 'Révolutions', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/c_Revolves_Folder.htm'),
(46, 'Balayages', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/c_Sweeps_Folder.htm'),
(47, 'Fonction de symétrie', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/c_Mirror_Feature_Overview.htm'),
(48, 'Le PropertyManager Répétition linéaire', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/HIDD_LPATTERN.htm'),
(49, 'Le PropertyManager Répétition circulaire', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/HIDD_CPATTERN.htm'),
(50, 'Présentation de l''Assistance pour le perçage', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/c_Hole_Wizard_Overview.htm'),
(51, 'Vue d''ensemble des congés', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/c_Fillet_Overview.htm'),
(51, 'Création d''une fonction de chanfrein', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/HIDD_DVE_FEAT_CHAMFER.htm'),
(57, 'Vues en coupe dans les modèles', 'http://help.solidworks.com/2015/french/SolidWorks/sldworks/t_section_views_models.htm'),
(63, 'Créer un cylindre par révolution', '/Piece-VE-cylindre_revolution'),
(67, 'Créer un cylindre par extrusion', '/Piece-VE-cylindre_extrusion'),
(65, 'Créer un tronc de cône par extrusion', '/Piece-VE-tronc2cone_extrusion'),
(68, 'Créer un tronc de cône par r&eacute;volution', '/Piece-VE-tronc2cone_revolution');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
