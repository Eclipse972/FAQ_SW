-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Sam 17 Avril 2021 à 22:21
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
  `alpha` int(11) NOT NULL,
  `beta` int(11) NOT NULL default '0',
  `gamma` int(11) NOT NULL default '0',
  `texteMenu` varchar(99) collate latin1_general_ci NOT NULL,
  `imageMenu` varchar(99) collate latin1_general_ci NOT NULL COMMENT 'associée à la page',
  `ptiNom` varchar(99) collate latin1_general_ci NOT NULL,
  `classePageID` int(11) NOT NULL default '1' COMMENT 'identifiant de la classe page',
  `titrePage` varchar(99) collate latin1_general_ci NOT NULL,
  `logoPage` varchar(99) collate latin1_general_ci NOT NULL,
  `entetePage` varchar(99) collate latin1_general_ci NOT NULL,
  `scriptSection` varchar(99) collate latin1_general_ci NOT NULL,
  `article_ID` int(11) default NULL,
  UNIQUE KEY `navigation` (`alpha`,`beta`,`gamma`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `Squelette`
--

INSERT INTO `Squelette` (`alpha`, `beta`, `gamma`, `texteMenu`, `imageMenu`, `ptiNom`, `classePageID`, `titrePage`, `logoPage`, `entetePage`, `scriptSection`, `article_ID`) VALUES
(3, 0, 0, 'Assemblage', 'Vue/images/assemblage.png', 'Assemblage', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/assemblage/page.html', 4),
(2, 0, 0, 'Mise en plan', 'Vue/images/MEP.png', 'MEP', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/MEP/page.html', 3),
(4, 0, 0, 'Autre', 'Vue/images/autre.png', 'Autre', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/divers/page.html', 5),
(0, 0, 0, 'Accueil', 'Vue/images/accueil.png', 'Accueil', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/accueil/page.html', 1),
(1, 0, 0, 'Pi&egrave;ce', 'Vue/images/piece.png', 'Piece', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/piece/page.html', 2),
(0, 1, 0, 'Qui suis-je?', '', 'moi', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/moi/page.html', 6),
(0, 2, 0, 'Retrouver un article', '', 'rechercher', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/trouver_article/page.html', 7),
(1, 1, 0, 'Esquisse 2D', 'Vue/images/esquisse.png', 'esquisse', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/esquisse2D/page.html', 8),
(1, 2, 0, 'Les fonctions', '', 'fonctions', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/fonctions/page.html', 9),
(1, 3, 0, 'Manipuler la pi&egrave;ce', '', 'manipuler_piece', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/manipuler_piece/page.html', 10),
(1, 4, 0, 'Arbre de cr&eacute;ation', '', 'arbre2creation', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/arbre_piece/page.html', 11),
(2, 1, 0, 'Les fonds de plan', '', 'fond2plan', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/fond2plan/page.html', 12),
(2, 2, 0, 'Ins&eacute;rer des vues', 'Vue/images/3vues.png', 'vues', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/inserer_vues/page.html', 13),
(2, 3, 0, 'Ajouter la cotation', '', 'cotation', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/ajouter_cotation/page.html', 14),
(2, 4, 0, 'Mise en page', 'Vue/images/deplacement_vue.png', 'MEP', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/mise_en_page/page.html', 15),
(2, 5, 0, 'Remplir le Cartouche', '', 'cartouche', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/cartouche/page.html', 16),
(2, 6, 0, 'Export en PDF', 'Vue/images/Pdf.png', 'PDF', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/exportPDF/page.html', 17),
(2, 7, 0, 'Arbre de cr&eacute;ation', '', 'arbre', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/arbre_MEP/page.html', 18),
(2, 8, 0, 'Liaison mise en plan-fichier', '', 'MEP_fichier', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/lien_MEP_fichier/page.html', 19),
(3, 1, 0, 'Les contraintes', '', 'contraintes', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/contrainte_assemblage/page.html', 20),
(3, 2, 0, 'Arbre de cr&eacute;ation', '', 'arbre', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/arbre_assemblage/page.html', 21),
(3, 3, 0, 'Les configurations', '', 'configurations', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/config_assemblage/page.html', 22),
(3, 4, 0, 'Cr&eacute;er un &eacute;clat&eacute;', 'Vue/images/icone_eclater_rassembler.png', 'eclater', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/eclater_assemblage/page.html', 23),
(3, 5, 0, 'Cr&eacute;er un &eacute;corch&eacute;', '', 'ecorcher', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/ecorcher_assemblage/page.html', 24),
(4, 1, 0, 'Les zooms', '', 'zoom', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/zoom/page.html', 25),
(4, 2, 0, 'Ouvrir un fichier', 'Vue/images/icone_ouvrir.png', 'ouvrir_fichier', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/ouvrir_fichier/page.html', 26),
(4, 3, 0, 'M&eacute;canique graphique', '', 'meca', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/meca_graphique/page.html', 27),
(4, 4, 0, 'Mon casier nm&eacute;rique', 'Vue/images/casier.png', 'Casier_numerique', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/casier_numerique/page.html', 28),
(4, 1, 1, 'zoom fen&ecirc;tre', 'Vue/images/zoomFenetre.png', 'Fenetre', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/zoom_fenetre/page.html', 32),
(4, 1, 2, 'ajuster le zoom', '', 'ajuster', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/ajuster_zoom/page.html', 29),
(4, 1, 3, 'zoom au mieux', 'Vue/images/zoomOmieux.png', 'au_mieux', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/zoom_au_mieux/page.html', 31),
(1, 1, 1, 'outils d&apos;esquisse', '', 'outilDesquisse', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/outilsDesquisse/page.html', 33),
(1, 1, 2, 'plan d&apos;esquisse', '', 'planDesuisse', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/planDesquisse/page.html', 34),
(2, 2, 1, 'les vues standards', '', 'vue_standard', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/vues_std/page.html', 35),
(2, 2, 2, 'vue en coupe', '', 'coupe', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/vue_coupe/page.html', 36),
(2, 2, 3, 'perspective personnalis&eacute;e', '', '3Dperso', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/perspective_perso/page.html', 37),
(1, 2, 1, 'Extrusion', 'Vue/images/extrusion.png', 'extrusion', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/extrusion/page.html', 38),
(1, 2, 2, 'R&eacute;volution', 'Vue/images/revolution.png', 'revolution', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/revolution/page.html', 39),
(1, 2, 3, 'Balayage', 'Vue/images/balayage.png', 'balayage', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/balayage/page.html', 40),
(1, 2, 4, 'Symétrie', 'Vue/images/symetrie.png', 'symetrie', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/symetrie/page.html', 41),
(1, 2, 7, 'Assistance pour le per&ccedil;age', 'Vue/images/percage.png', 'percage', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/percage/page.html', 44),
(1, 2, 8, 'Cong&eacute et chanfrein', 'Vue/images/conge.png', 'conge_chanfrein', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/chanfrein/page.html', 45),
(1, 2, 5, 'R&eacute;p&eacute;tition lin&eacute;aire', 'Vue/images/repetition_lineaire.png', 'repetition_lineaire', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/rep_lineaire/page.html', 42),
(1, 2, 6, 'R&eacute;p&eacute;tition circulaire', 'Vue/images/repetition_circulaire.png', 'repetition_circulaire', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/rep_circulaire/page.html', 43),
(1, 1, 3, 'cotation intelligente', 'Vue/images/cotation.png', 'cotation_intelligente', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/cotation_intelligente/page.html', 46),
(1, 1, 4, 'contrainte d&apos;esquisse', '', 'contrainteDesquisse', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/contrainteDesquisse/page.html', 47),
(1, 1, 5, 'ligne de construction', 'Vue/images/ligne2construction.png', 'ligne2construction', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/ligne2construction/page.html', 48),
(1, 1, 6, 'code couleur', '', 'code_couleur', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/code_couleur/page.html', 49),
(1, 3, 1, 'tourner et d&eacute;placer', '', 'tourner_deplacer', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/tourner_deplacer/page.html', 50),
(1, 3, 2, 'couper une pi&egrave;ce', 'Vue/images/couper_piece.png', 'couper_piece', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/couper/page.html', 51),
(1, 3, 3, 'transparence ou couleur', '', 'transparence_couleur', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/transparence_couleur/page.html', 52),
(1, 4, 1, 'arbre de cr&eacute;ation -> zone graphique', '', 'arbre_ZG', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/arbre-ZG/page.html', 53),
(1, 4, 2, 'zone graphique  -> arbre de cr&eacute;ation', '', 'ZG_arbre', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/ZG-arbre/page.html', 54),
(1, 5, 0, 'Volumes &eacute;l&eacute;mentaires', '', 'VE', 1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/VE/page.html', 55),
(1, 5, 1, 'prisme droit', 'Vue/images/prisme.png', 'prisme', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/prisme/page.html', 56),
(1, 5, 2, 'cylindre par extrusion', 'Vue/images/cylindre.png', 'cylindre_extrusion', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/cylindre/page.html', 57),
(1, 5, 4, 'sph&egrave;re', 'Vue/images/sphere.png', 'sphere', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/sphere/page.html', 58),
(1, 5, 5, 'tronc de c&ocirc;ne par r&eacute;volution', 'Vue/images/tronc2cone.png', 'tronc2cone_revolution', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/tronc2cone/page.html', 59),
(1, 5, 7, 'tore', 'Vue/images/tore.png', 'tore', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/tore/page.html', 60),
(1, 5, 3, 'cylindre par r&eacute;volution', 'Vue/images/cylindre.png', 'cylindre_revolution', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/cylindre2/page.html', 61),
(1, 5, 6, 'tronc de c&ocirc;ne par extrusion', 'Vue/images/tronc2cone.png', 'tronc2cone_extrusion', 2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', 'Articles/tronc2cone2/page.html', 62),
(-1, 0, 0, 'Erreur inconnue', '', 'Erreur', -1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', '', NULL),
(-1, 1, 0, 'Article inexistant ou disparu', '', 'Article_inexistant', -1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', '', NULL),
(-2, 0, 0, 'Formulaire de contact', '', 'Contact', -2, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', '', NULL),
(-1, 403, 0, 'Acc&egrave;s interdit', '', 'Acces_interdit', -1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', '', NULL),
(-1, 404, 0, 'Cette page n&apos;existe pas', '', 'Page_inexistante', -1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', '', NULL),
(-1, 500, 0, 'Serveur satur&eacute;, essayez de recharger la page', '', 'Serveur_sature', -1, 'La Foire Aux Questions sur SolidWorks de ChristopHe', 'Vue/images/logo.png', '<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>', '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
