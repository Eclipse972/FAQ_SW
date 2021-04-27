-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Mar 27 Avril 2021 à 16:15
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
  `classePageID` int(11) NOT NULL default '1' COMMENT 'identifiant de la classe page',
  `titrePage` varchar(99) collate latin1_general_ci NOT NULL default 'La Foire Aux Questions sur SolidWorks de ChristopHe',
  `logoPage` varchar(99) collate latin1_general_ci NOT NULL default 'Vue/images/logo.png',
  `entetePage` varchar(99) collate latin1_general_ci NOT NULL default '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>',
  `scriptSection` varchar(99) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`ID`),
  UNIQUE KEY `navigation` (`alpha`,`beta`,`gamma`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=77 ;

--
-- Contenu de la table `Squelette`
--

INSERT INTO `Squelette` (`ID`, `alpha`, `beta`, `gamma`, `texteMenu`, `imageMenu`, `ptiNom`, `classePageID`, `titrePage`, `logoPage`, `entetePage`, `scriptSection`) VALUES
(1, -1, 500, 0, 'Serveur satur&eacute;, essayez de recharger la page', '', 'Serveur_sature', -1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', ''),
(2, -1, 404, 0, 'Cette page n&apos;existe pas', '', 'Page_inexistante', -1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', ''),
(3, -1, 403, 0, 'Acc&egrave;s interdit', '', 'Acces_interdit', -1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', ''),
(4, -2, 0, 0, 'Formulaire de contact', '', 'Contact', -2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', ''),
(5, -1, 1, 0, 'Article inexistant ou disparu', '', 'Article_inexistant', -1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', ''),
(6, -1, 0, 0, 'Erreur inconnue', '', 'Erreur', -1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', ''),
(7, 0, 0, 0, 'Accueil', 'images/accueil.png', 'Accueil', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Accueil/accueil.html'),
(8, 1, 0, 0, 'Pi&egrave;ce', 'images/piece.png', 'Piece', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/module_piece.html'),
(9, 2, 0, 0, 'Mise en plan', 'images/MEP.png', 'Mise_en_plan', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/mise_en_plan.html'),
(10, 3, 0, 0, 'Assemblage', 'images/assemblage.png', 'Assemblage', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Assemblage/module_assemblage.html'),
(11, 4, 0, 0, 'Autre', 'images/autre.png', 'Autre', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Autre/Autre.html'),
(12, 0, 1, 0, 'Qui suis-je?', '', 'moi', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Accueil/moi.html'),
(13, 0, 2, 0, 'Retrouver un article', '', 'rechercher', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Accueil/trouver_article.html'),
(14, 1, 1, 0, 'Esquisse 2D', 'images/esquisse.png', 'esquisse', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/esquisse2D/esquisse.html'),
(15, 1, 2, 0, 'Les fonctions', '', 'fonctions', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/Les_fonctions.html'),
(16, 1, 3, 0, 'Manipuler la pi&egrave;ce', '', 'manipuler_piece', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/manipuler_piece/manipuler_piece.html'),
(17, 1, 4, 0, 'Arbre de cr&eacute;ation', '', 'arbre', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/arbre_piece.html'),
(18, 2, 1, 0, 'Les fonds de plan', '', 'fond2plan', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/fond2plan.html'),
(19, 2, 2, 0, 'Ins&eacute;rer des vues', 'images/3vues.png', 'vues', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/inserer_vues.html'),
(20, 2, 3, 0, 'Ajouter la cotation', '', 'cotation', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/coter.html'),
(21, 2, 4, 0, 'Mise en page', 'images/deplacement_vue.png', 'MEP', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/mise_en_page.html'),
(22, 2, 5, 0, 'Remplir le Cartouche', '', 'cartouche', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/cartouche.html'),
(23, 2, 6, 0, 'Export en PDF', 'images/Pdf.png', 'PDF', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/exportPDF.html'),
(24, 2, 7, 0, 'Arbre de cr&eacute;ation', '', 'arbre', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/arbre_MEP.html'),
(25, 2, 8, 0, 'Liaison mise en plan-fichier', '', 'MEP_fichier', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/lien_MEP_fichier.html'),
(26, 3, 1, 0, 'Les contraintes', '', 'contraintes', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Assemblage/contraintes.html'),
(27, 3, 2, 0, 'Arbre de cr&eacute;ation', '', 'arbre', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Assemblage/arbre_assemblage.html'),
(28, 3, 3, 0, 'Les configurations', '', 'configurations', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Assemblage/configurations.html'),
(29, 3, 4, 0, 'Cr&eacute;er un &eacute;clat&eacute;', 'images/icone_eclater_rassembler.png', 'eclater', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Assemblage/eclater.html'),
(30, 3, 5, 0, 'Cr&eacute;er un &eacute;corch&eacute;', '', 'ecorcher', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Assemblage/ecorcher.html'),
(31, 4, 1, 0, 'Les zooms', '', 'zoom', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Autre/les_zooms.html'),
(32, 4, 2, 0, 'Ouvrir un fichier', 'images/icone_ouvrir.png', 'ouvrir_fichier', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Autre/ouvrir_fichier.html'),
(33, 4, 3, 0, 'M&eacute;canique graphique', '', 'meca', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Autre/meca_graphique.html'),
(34, 4, 4, 0, 'Mon casier nm&eacute;rique', 'images/casier.png', 'Casier_numerique', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Autre/casier_numerique.html'),
(35, 4, 1, 2, 'ajuster le zoom', '', 'ajuster', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Autre/ajuster.html'),
(37, 4, 1, 3, 'zoom au mieux', 'images/zoomOmieux.png', 'au_mieux', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Autre/zoomOmieux.html'),
(38, 4, 1, 1, 'zoom fen&ecirc;tre', 'images/zoomFenetre.png', 'Fenetre', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Autre/zoom_fenetre.html'),
(39, 1, 1, 1, 'outils d&apos;esquisse', '', 'outilDesquisse', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/esquisse2D/outilsDesquisse.html'),
(40, 1, 1, 2, 'plan d&apos;esquisse', '', 'planDesuisse', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/esquisse2D/planDesquisse.html'),
(41, 2, 2, 1, 'les vues standards', '', 'vue_standard', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/vues_std.html'),
(42, 2, 2, 2, 'vue en coupe', '', 'coupe', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/coupe.html'),
(43, 2, 2, 3, 'perspective personnalis&eacute;e', '', '3Dperso', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/3Dperso.html'),
(44, 1, 2, 1, 'Extrusion', 'images/extrusion.png', 'extrusion', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/extrusion.html'),
(45, 1, 2, 2, 'R&eacute;volution', 'images/revolution.png', 'revolution', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/revolution.html'),
(46, 1, 2, 3, 'Balayage', 'images/balayage.png', 'balayage', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/balayage.html'),
(47, 1, 2, 4, 'Symétrie', 'images/symetrie.png', 'symetrie', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/symetrie.html'),
(48, 1, 2, 5, 'R&eacute;p&eacute;tition lin&eacute;aire', 'images/repetition_lineaire.png', 'repetition_lineaire', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/repetition_lineaire.html'),
(49, 1, 2, 6, 'R&eacute;p&eacute;tition circulaire', 'images/repetition_circulaire.png', 'repetition_circulaire', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/repetition_circulaire.html'),
(50, 1, 2, 7, 'Assistance pour le per&ccedil;age', 'images/percage.png', 'percage', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/assistance_percage.html'),
(51, 1, 2, 8, 'Cong&eacute et chanfrein', 'images/conge.png', 'conge_chanfrein', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/conge_chanfrein.html'),
(52, 1, 1, 3, 'cotation intelligente', 'images/cotation.png', 'cotation_intelligente', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/esquisse2D/cotation_intelligente.html'),
(53, 1, 1, 4, 'contrainte d&apos;esquisse', '', 'contrainteDesquisse', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/esquisse2D/contrainteDesquisse.html'),
(54, 1, 1, 5, 'ligne de construction', 'images/ligne2construction.png', 'ligne2construction', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/esquisse2D/ligne2construction.html'),
(55, 1, 1, 6, 'code couleur', '', 'code_couleur', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/esquisse2D/code_couleur.html'),
(56, 1, 3, 1, 'tourner et d&eacute;placer', '', 'tourner_deplacer', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/manipuler_piece/tourner_deplacer.html'),
(57, 1, 3, 2, 'couper une pi&egrave;ce', 'images/couper_piece.png', 'couper_piece', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/manipuler_piece/couper.html'),
(58, 1, 3, 3, 'transparence ou couleur', '', 'transparence_couleur', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/manipuler_piece/transparence_couleur.html'),
(59, 1, 4, 1, 'arbre -> ZG', '', 'arbre_ZG', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/liaison_arbre-piece.html'),
(60, 1, 4, 2, 'ZG -> arbre', '', 'ZG_arbre', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/liaison_piece-arbre.html'),
(61, 1, 5, 0, 'Volumes &eacute;l&eacute;mentaires', '', 'VE', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/volumes_elementaires.html'),
(62, 1, 5, 1, 'prisme droit', 'images/prisme.png', 'prisme', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/prisme/page.html'),
(63, 1, 5, 2, 'cylindre par extrusion', 'images/cylindre.png', 'cylindre_extrusion', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/cylindre/page.html'),
(64, 1, 5, 4, 'sph&egrave;re', 'images/sphere.png', 'sphere', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/sphere/page.html'),
(65, 1, 5, 5, 'tronc de c&ocirc;ne par r&eacute;volution', 'images/tronc2cone.png', 'tronc2cone_revolution', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/tronc2cone/page.html'),
(66, 1, 5, 7, 'tore', 'images/tore.png', 'tore', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/tore/page.html'),
(67, 1, 5, 3, 'cylindre par r&eacute;volution', 'images/cylindre.png', 'cylindre_revolution', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/cylindre2/page.html'),
(68, 1, 5, 6, 'tronc de c&ocirc;ne par extrusion', 'images/tronc2cone.png', 'tronc2cone_extrusion', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Piece/tronc2cone2/page.html'),
(69, 2, 7, 1, 'arbre -> ZG', '', 'arbre-ZG', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/liaison_arbre-MEP.html'),
(70, 2, 7, 2, 'ZG -> arbre', '', 'ZG-arbre', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'MEP/liaison_MEP-arbre.html'),
(71, 3, 2, 1, 'arbre -> ZG', '', 'arbre-ZG', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Assemblage/liaison_arbre-assemblage.html'),
(72, 3, 2, 2, 'ZG -> arbre', '', 'ZG-arbre', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Assemblage/liaison_assemblage-arbre.html'),
(73, -3, 0, 0, 'Page administrateur', '', 'Administrateur', -4, 'Page d&apos;adminitration de ma FAQ SW', 'images/logo.png', '<p class="font-effect-outline">Page d&apos;adminitration de ma FAQ SW</p>', 'PEUNC/scripts/accueilAdmin.php'),
(74, -3, 1, 0, 'Table squelette', '', 'squelette', -4, 'Page d&apos;adminitration de ma FAQ SW', 'images/logo.png', '<p class="font-effect-outline">Page d&apos;adminitration de ma FAQ SW</p>', 'PEUNC/scripts/squeletteAdmin.php'),
(75, -3, 2, 0, 'Table des pages', '', 'pages', -4, 'Page d&apos;adminitration de ma FAQ SW', 'images/logo.png', '<p class="font-effect-outline">Page d&apos;adminitration de ma FAQ SW</p>', 'PEUNC/scripts/pagesAdmin.php'),
(76, -3, 3, 0, 'Table des pages connexes', '', 'pages_connexe', -4, 'Page d&apos;adminitration de ma FAQ SW', 'images/logo.png', '<p class="font-effect-outline">Page d&apos;adminitration de ma FAQ SW</p>', 'PEUNC/scripts/connexesAdmin.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
