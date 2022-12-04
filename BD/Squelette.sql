-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Dim 04 Décembre 2022 à 05:15
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
-- Structure de la table `Squelette`
--

CREATE TABLE IF NOT EXISTS `Squelette` (
  `ID` int(11) NOT NULL auto_increment,
  `alpha` int(11) NOT NULL,
  `beta` int(11) NOT NULL default '0',
  `gamma` int(11) NOT NULL default '0',
  `texteMenu` varchar(99) collate latin1_general_ci NOT NULL,
  `imageMenu` varchar(99) collate latin1_general_ci NOT NULL default 'Vue/images/nom_du_fichier.png' COMMENT 'associée à la page',
  `ptiNom` varchar(99) collate latin1_general_ci NOT NULL,
  `classePage` varchar(99) collate latin1_general_ci NOT NULL default 'Page',
  `controleur` varchar(99) collate latin1_general_ci NOT NULL,
  `methode` varchar(99) collate latin1_general_ci NOT NULL default 'GET',
  `paramAutorise` varchar(99) collate latin1_general_ci NOT NULL default '[]',
  PRIMARY KEY  (`ID`),
  UNIQUE KEY `navigation` (`alpha`,`beta`,`gamma`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=93 ;

--
-- Contenu de la table `Squelette`
--

INSERT INTO `Squelette` (`ID`, `alpha`, `beta`, `gamma`, `texteMenu`, `imageMenu`, `ptiNom`, `classePage`, `controleur`, `methode`, `paramAutorise`) VALUES
(77, 6, 0, 0, 'Les animations', '', 'Animations', 'PageArticle', 'listeAnimations.php', 'GET', '[]'),
(78, 6, 1, 0, 'Plan d&apos;esquisse', '', 'planDesquisse', 'PageAnimation', 'Piece/VE/planDesquisse.php', 'GET', '[]'),
(79, 6, 2, 0, 'Esquisse du prisme', '', 'esquissePrisme', 'PageAnimation', 'Piece/VE/esquissePrisme.php', 'GET', '[]'),
(4, 5, 0, 0, 'Formulaire de contact', '', 'Contact', 'PageContact', 'contact.php', 'GET', '[]'),
(80, 6, 3, 0, 'Esquisse de la sph&egrave;re', '', 'esquisseSphere', 'PageAnimation', 'Piece/VE/esquisseSphere.php', 'GET', '[]'),
(7, 0, 0, 0, 'Accueil', 'accueil.png', 'Accueil', 'PageArticle', 'accueil.php', 'GET', '[]'),
(8, 1, 0, 0, 'Pi&egrave;ce', 'piece.png', 'Piece', 'PageArticle', 'Piece/module_piece.php', 'GET', '[]'),
(9, 2, 0, 0, 'Mise en plan', 'MEP.png', 'Mise_en_plan', 'PageArticle', 'MEP/mise_en_plan.php', 'GET', '[]'),
(10, 3, 0, 0, 'Assemblage', 'assemblage.png', 'Assemblage', 'PageArticle', 'Assemblage/module_assemblage.php', 'GET', '[]'),
(11, 4, 0, 0, 'Autre', 'autre.png', 'Autre', 'PageArticle', 'Autre/Autre.php', 'GET', '[]'),
(12, 0, 1, 0, 'Qui suis-je?', '', 'moi', 'PageArticle', 'moi.php', 'GET', '[]'),
(13, 0, 2, 0, 'Retrouver un article', '', 'rechercher', 'PageArticle', 'trouver_article.php', 'GET', '[]'),
(14, 1, 1, 0, 'Esquisse 2D', 'esquisse.png', 'esquisse', 'PageArticle', 'Piece/esquisse.php', 'GET', '[]'),
(15, 1, 2, 0, 'Les fonctions', '', 'fonctions', 'PageArticle', 'Piece/Les_fonctions.php', 'GET', '[]'),
(16, 1, 3, 0, 'Manipuler la pi&egrave;ce', '', 'manipuler_piece', 'PageArticle', 'Piece/manipuler_piece.php', 'GET', '[]'),
(17, 1, 4, 0, 'Arbre de cr&eacute;ation', '', 'arbre', 'PageArticle', 'Piece/arbre_piece.php', 'GET', '[]'),
(18, 2, 1, 0, 'Les fonds de plan', '', 'fond2plan', 'PageArticle', 'MEP/fond2plan.php', 'GET', '[]'),
(19, 2, 2, 0, 'Ins&eacute;rer des vues', '3vues.png', 'vues', 'PageArticle', 'MEP/inserer_vues.php', 'GET', '[]'),
(20, 2, 3, 0, 'Ajouter la cotation', '', 'cotation', 'PageArticle', 'MEP/coter.php', 'GET', '[]'),
(21, 2, 4, 0, 'Mise en page', 'deplacement_vue.png', 'MEP', 'PageArticle', 'MEP/mise_en_page.php', 'GET', '[]'),
(22, 2, 5, 0, 'Remplir le Cartouche', '', 'cartouche', 'PageArticle', 'MEP/cartouche.php', 'GET', '[]'),
(23, 2, 6, 0, 'Export en PDF', 'Pdf.png', 'PDF', 'PageArticle', 'MEP/exportPDF.php', 'GET', '[]'),
(24, 2, 7, 0, 'Arbre de cr&eacute;ation', '', 'arbre', 'PageArticle', 'MEP/arbre_MEP.php', 'GET', '[]'),
(25, 2, 8, 0, 'Liaison mise en plan-fichier', '', 'MEP_fichier', 'PageArticle', 'MEP/lien_MEP_fichier.php', 'GET', '[]'),
(26, 3, 1, 0, 'Les contraintes', '', 'contraintes', 'PageArticle', 'Assemblage/contraintes.php', 'GET', '[]'),
(27, 3, 2, 0, 'Arbre de cr&eacute;ation', '', 'arbre', 'PageArticle', 'Assemblage/arbre_assemblage.php', 'GET', '[]'),
(28, 3, 3, 0, 'Les configurations', '', 'configurations', 'PageArticle', 'Assemblage/configurations.php', 'GET', '[]'),
(29, 3, 4, 0, 'Cr&eacute;er un &eacute;clat&eacute;', 'icone_eclater_rassembler.png', 'eclater', 'PageArticle', 'Assemblage/eclater.php', 'GET', '[]'),
(30, 3, 5, 0, 'Cr&eacute;er un &eacute;corch&eacute;', '', 'ecorcher', 'PageArticle', 'Assemblage/ecorcher.php', 'GET', '[]'),
(31, 4, 1, 0, 'Les zooms', '', 'zoom', 'PageArticle', 'Autre/les_zooms.php', 'GET', '[]'),
(32, 4, 2, 0, 'Ouvrir un fichier', 'icone_ouvrir.png', 'ouvrir_fichier', 'PageArticle', 'Autre/ouvrir_fichier.php', 'GET', '[]'),
(33, 4, 3, 0, 'M&eacute;canique graphique', '', 'meca', 'PageArticle', 'Autre/meca_graphique.php', 'GET', '[]'),
(34, 4, 4, 0, 'Mon casier nm&eacute;rique', 'casier.png', 'Casier_numerique', 'PageArticle', 'Autre/casier_numerique.php', 'GET', '[]'),
(35, 4, 1, 2, 'ajuster le zoom', '', 'ajuster', 'PageArticle', 'Autre/ajuster.php', 'GET', '[]'),
(37, 4, 1, 3, 'zoom au mieux', 'zoomOmieux.png', 'au_mieux', 'PageArticle', 'Autre/zoomOmieux.php', 'GET', '[]'),
(38, 4, 1, 1, 'zoom fen&ecirc;tre', 'zoomFenetre.png', 'Fenetre', 'PageArticle', 'Autre/zoom_fenetre.php', 'GET', '[]'),
(39, 1, 1, 1, 'outils d&apos;esquisse', '', 'outilDesquisse', 'PageArticle', 'Piece/outilsDesquisse.php', 'GET', '[]'),
(40, 1, 1, 2, 'plan d&apos;esquisse', '', 'planDesuisse', 'PageArticle', 'Piece/planDesquisse.php', 'GET', '[]'),
(41, 2, 2, 1, 'les vues standards', '', 'vue_standard', 'PageArticle', 'MEP/vues_std.php', 'GET', '[]'),
(42, 2, 2, 2, 'vue en coupe', '', 'coupe', 'PageArticle', 'MEP/coupe.php', 'GET', '[]'),
(43, 2, 2, 3, 'perspective personnalis&eacute;e', '', '3Dperso', 'PageArticle', 'MEP/3Dperso.php', 'GET', '[]'),
(44, 1, 2, 1, 'Extrusion', 'extrusion.png', 'extrusion', 'PageArticle', 'Piece/extrusion.php', 'GET', '[]'),
(45, 1, 2, 2, 'R&eacute;volution', 'revolution.png', 'revolution', 'PageArticle', 'Piece/revolution.php', 'GET', '[]'),
(46, 1, 2, 3, 'Balayage', 'balayage.png', 'balayage', 'PageArticle', 'Piece/balayage.php', 'GET', '[]'),
(47, 1, 2, 4, 'Symétrie', 'symetrie.png', 'symetrie', 'PageArticle', 'Piece/symetrie.php', 'GET', '[]'),
(48, 1, 2, 5, 'R&eacute;p&eacute;tition lin&eacute;aire', 'repetition_lineaire.png', 'repetition_lineaire', 'PageArticle', 'Piece/repetition_lineaire.php', 'GET', '[]'),
(49, 1, 2, 6, 'R&eacute;p&eacute;tition circulaire', 'repetition_circulaire.png', 'repetition_circulaire', 'PageArticle', 'Piece/repetition_circulaire.php', 'GET', '[]'),
(50, 1, 2, 7, 'Assistance pour le per&ccedil;age', 'percage.png', 'percage', 'PageArticle', 'Piece/assistance_percage.php', 'GET', '[]'),
(51, 1, 2, 8, 'Cong&eacute et chanfrein', 'conge.png', 'conge_chanfrein', 'PageArticle', 'Piece/conge_chanfrein.php', 'GET', '[]'),
(52, 1, 1, 3, 'cotation intelligente', 'cote.png', 'cotation_intelligente', 'PageArticle', 'Piece/cotation_intelligente.php', 'GET', '[]'),
(53, 1, 1, 4, 'contrainte d&apos;esquisse', '', 'contrainteDesquisse', 'PageArticle', 'Piece/contrainteDesquisse.php', 'GET', '[]'),
(54, 1, 1, 5, 'ligne de construction', 'ligne2construction.png', 'ligne2construction', 'PageArticle', 'Piece/ligne2construction.php', 'GET', '[]'),
(55, 1, 1, 6, 'code couleur', '', 'code_couleur', 'PageArticle', 'Piece/code_couleur.php', 'GET', '[]'),
(56, 1, 3, 1, 'tourner et d&eacute;placer', '', 'tourner_deplacer', 'PageArticle', 'Piece/tourner_deplacer.php', 'GET', '[]'),
(57, 1, 3, 2, 'couper une pi&egrave;ce', 'couper_piece.png', 'couper_piece', 'PageArticle', 'Piece/couper.php', 'GET', '[]'),
(58, 1, 3, 3, 'transparence ou couleur', '', 'transparence_couleur', 'PageArticle', 'Piece/transparence_couleur.php', 'GET', '[]'),
(59, 1, 4, 1, 'arbre -> ZG', '', 'arbre_ZG', 'PageArticle', 'Piece/liaison_arbre-piece.php', 'GET', '[]'),
(60, 1, 4, 2, 'ZG -> arbre', '', 'ZG_arbre', 'PageArticle', 'Piece/liaison_piece-arbre.php', 'GET', '[]'),
(61, 1, 5, 0, 'Volumes &eacute;l&eacute;mentaires', '', 'VE', 'PageArticle', 'Piece/volumes_elementaires.php', 'GET', '[]'),
(62, 1, 5, 1, 'prisme droit', 'prisme.png', 'prisme', 'PageVE', 'Piece/VE/prisme.php', 'GET', '[]'),
(63, 1, 5, 2, 'cylindre par extrusion', 'cylindre.png', 'cylindre_extrusion', 'PageVE', 'Piece/VE/cylindre.php', 'GET', '[]'),
(64, 1, 5, 4, 'sph&egrave;re', 'sphere.png', 'sphere', 'PageVE', 'Piece/VE/sphere.php', 'GET', '[]'),
(65, 1, 5, 5, 'tronc de c&ocirc;ne par r&eacute;volution', 'tronc2cone.png', 'tronc2cone_revolution', 'PageVE', 'Piece/VE/tronc2cone.php', 'GET', '[]'),
(66, 1, 5, 7, 'tore', 'tore.png', 'tore', 'PageVE', 'Piece/VE/tore.php', 'GET', '[]'),
(67, 1, 5, 3, 'cylindre par r&eacute;volution', 'cylindre.png', 'cylindre_revolution', 'PageVE', 'Piece/VE/cylindre2.php', 'GET', '[]'),
(68, 1, 5, 6, 'tronc de c&ocirc;ne par extrusion', 'tronc2cone.png', 'tronc2cone_extrusion', 'PageVE', 'Piece/VE/tronc2cone2.php', 'GET', '[]'),
(69, 2, 7, 1, 'arbre -> ZG', '', 'arbre-ZG', 'PageArticle', 'MEP/liaison_arbre-MEP.php', 'GET', '[]'),
(70, 2, 7, 2, 'ZG -> arbre', '', 'ZG-arbre', 'PageArticle', 'MEP/liaison_MEP-arbre.php', 'GET', '[]'),
(71, 3, 2, 1, 'arbre -> ZG', '', 'arbre-ZG', 'PageArticle', 'Assemblage/liaison_arbre-assemblage.php', 'GET', '[]'),
(72, 3, 2, 2, 'ZG -> arbre', '', 'ZG-arbre', 'PageArticle', 'Assemblage/liaison_assemblage-arbre.php', 'GET', '[]'),
(73, -3, 0, 0, 'Page administrateur', '', 'Administrateur', 'PageAdministrateur', 'PEUNC/scripts/accueilAdmin.php', 'GET', '[]'),
(74, -3, 1, 0, 'Table squelette', '', 'squelette', 'PageAdministrateur', 'PEUNC/scripts/squeletteAdmin.php', 'GET', '[]'),
(75, -3, 2, 0, 'Table des pages', '', 'pages', 'PageAdministrateur', 'PEUNC/scripts/pagesAdmin.php', 'GET', '[]'),
(76, -3, 3, 0, 'Table des pages connexes', '', 'pages_connexe', 'PageAdministrateur', 'PEUNC/scripts/connexesAdmin.php', 'GET', '[]'),
(81, 6, 4, 0, 'Esquisse du cylindre par extrusion', '', 'esquisseCylindreExtrusion', 'PageAnimation', 'Piece/VE/esquisseCylindreExtrusion.php', 'GET', '[]'),
(82, 6, 5, 0, 'Esquisse du cylindre par r&eacute;volution', '', 'esquisseCylindreRevolution', 'PageAnimation', 'Piece/VE/esquisseCylindreRevolution.php', 'GET', '[]'),
(83, 6, 6, 0, 'Esquisse du tronc de c&ocirc;ne par r&eacute;volution', '', 'esquisseConeRevolution', 'PageAnimation', 'Piece/VE/esquisseConeRevolution.php', 'GET', '[]'),
(84, 6, 7, 0, 'Esquisse du tronc de c&ocirc;ne par extrusion', '', 'esquisseConeExtrusion', 'PageAnimation', 'Piece/VE/esquisseConeExtrusion.php', 'GET', '[]'),
(85, 6, 8, 0, 'Fonction pour le prisme', '', 'fonctionPrisme', 'PageAnimation', 'Piece/VE/fonctionPrisme.php', 'GET', '[]'),
(86, 6, 9, 0, 'Fonction pour le cylindre par extrusion', '', 'fonctionCylindreExtrusion', 'PageAnimation', 'Piece/VE/fonctionCylindreExtrusion.php', 'GET', '[]'),
(87, 6, 10, 0, 'Fonction pour le cylindre par r&eacute;volution', '', 'fonctionCylindreRevolution', 'PageAnimation', 'Piece/VE/fonctionCylindreRevolution.php', 'GET', '[]'),
(88, 6, 11, 0, 'Fonction pour le tronc de c&ocirc;ne par r&eacute;volution', '', 'FonctionConeRevolution', 'PageAnimation', 'Piece/VE/fonctionConeRevolution.php', 'GET', '[]'),
(89, 6, 12, 0, 'Fonction pour le tronc de c&ocirc;ne par extrusion', '', 'FonctionConeExtrusion', 'PageAnimation', 'Piece/VE/fonctionConeExtrusion.php', 'GET', '[]'),
(90, 6, 13, 0, 'Fonction pour la sph&egrave;re', '', 'fonctionSphere', 'PageAnimation', 'Piece/VE/fonctionSphere.php', 'GET', '[]'),
(91, 6, 14, 0, 'Esquisse su tore', '', 'esquisseTore', 'PageAnimation', 'Piece/VE/esquisseTore.php', 'GET', '[]'),
(92, 6, 15, 0, 'Mise en volume du tore', '', 'fonctionTore', 'PageAnimation', 'Piece/VE/fonctionTore.php', 'GET', '[]');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
