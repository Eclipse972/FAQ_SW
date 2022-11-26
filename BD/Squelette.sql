-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: faq.sw.sql.free.fr
-- Généré le : Sam 26 Novembre 2022 à 21:01
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
  PRIMARY KEY  (`ID`),
  UNIQUE KEY `navigation` (`alpha`,`beta`,`gamma`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=77 ;

--
-- Contenu de la table `Squelette`
--

INSERT INTO `Squelette` (`ID`, `alpha`, `beta`, `gamma`, `texteMenu`, `imageMenu`, `ptiNom`, `classePage`, `controleur`) VALUES
(1, -1, 500, 0, 'Serveur satur&eacute;', '', 'Serveur_sature', 'PageErreur', 'erreur_serveur.php'),
(2, -1, 404, 0, 'Cette page n&apos;existe pas', '', 'Page_inexistante', 'PageErreur', 'erreur_serveur.php'),
(3, -1, 403, 0, 'Acc&egrave;s interdit', '', 'Acces_interdit', 'PageErreur', 'erreur_serveur.php'),
(4, 5, 0, 0, 'Formulaire de contact', '', 'Contact', 'PageContact', 'contact.php'),
(6, -1, 0, 0, 'Erreur inconnue', '', 'Erreur', 'PageErreur', 'erreur_serveur.php'),
(7, 0, 0, 0, 'Accueil', 'accueil.png', 'Accueil', 'PageArticle', 'accueil.php'),
(8, 1, 0, 0, 'Pi&egrave;ce', 'piece.png', 'Piece', 'PageArticle', 'Piece/module_piece.php'),
(9, 2, 0, 0, 'Mise en plan', 'MEP.png', 'Mise_en_plan', 'PageArticle', 'MEP/mise_en_plan.php'),
(10, 3, 0, 0, 'Assemblage', 'assemblage.png', 'Assemblage', 'PageArticle', 'Assemblage/module_assemblage.php'),
(11, 4, 0, 0, 'Autre', 'autre.png', 'Autre', 'PageArticle', 'Autre/Autre.php'),
(12, 0, 1, 0, 'Qui suis-je?', '', 'moi', 'PageArticle', 'moi.php'),
(13, 0, 2, 0, 'Retrouver un article', '', 'rechercher', 'PageArticle', 'trouver_article.php'),
(14, 1, 1, 0, 'Esquisse 2D', 'esquisse.png', 'esquisse', 'PageArticle', 'Piece/esquisse.php'),
(15, 1, 2, 0, 'Les fonctions', '', 'fonctions', 'PageArticle', 'Piece/Les_fonctions.php'),
(16, 1, 3, 0, 'Manipuler la pi&egrave;ce', '', 'manipuler_piece', 'PageArticle', 'Piece/manipuler_piece.php'),
(17, 1, 4, 0, 'Arbre de cr&eacute;ation', '', 'arbre', 'PageArticle', 'Piece/arbre_piece.php'),
(18, 2, 1, 0, 'Les fonds de plan', '', 'fond2plan', 'PageArticle', 'MEP/fond2plan.php'),
(19, 2, 2, 0, 'Ins&eacute;rer des vues', '3vues.png', 'vues', 'PageArticle', 'MEP/inserer_vues.php'),
(20, 2, 3, 0, 'Ajouter la cotation', '', 'cotation', 'PageArticle', 'MEP/coter.php'),
(21, 2, 4, 0, 'Mise en page', 'deplacement_vue.png', 'MEP', 'PageArticle', 'MEP/mise_en_page.php'),
(22, 2, 5, 0, 'Remplir le Cartouche', '', 'cartouche', 'PageArticle', 'MEP/cartouche.php'),
(23, 2, 6, 0, 'Export en PDF', 'Pdf.png', 'PDF', 'PageArticle', 'MEP/exportPDF.php'),
(24, 2, 7, 0, 'Arbre de cr&eacute;ation', '', 'arbre', 'PageArticle', 'MEP/arbre_MEP.php'),
(25, 2, 8, 0, 'Liaison mise en plan-fichier', '', 'MEP_fichier', 'PageArticle', 'MEP/lien_MEP_fichier.php'),
(26, 3, 1, 0, 'Les contraintes', '', 'contraintes', 'PageArticle', 'Assemblage/contraintes.php'),
(27, 3, 2, 0, 'Arbre de cr&eacute;ation', '', 'arbre', 'PageArticle', 'Assemblage/arbre_assemblage.php'),
(28, 3, 3, 0, 'Les configurations', '', 'configurations', 'PageArticle', 'Assemblage/configurations.php'),
(29, 3, 4, 0, 'Cr&eacute;er un &eacute;clat&eacute;', 'icone_eclater_rassembler.png', 'eclater', 'PageArticle', 'Assemblage/eclater.php'),
(30, 3, 5, 0, 'Cr&eacute;er un &eacute;corch&eacute;', '', 'ecorcher', 'PageArticle', 'Assemblage/ecorcher.php'),
(31, 4, 1, 0, 'Les zooms', '', 'zoom', 'PageArticle', 'Autre/les_zooms.php'),
(32, 4, 2, 0, 'Ouvrir un fichier', 'icone_ouvrir.png', 'ouvrir_fichier', 'PageArticle', 'Autre/ouvrir_fichier.php'),
(33, 4, 3, 0, 'M&eacute;canique graphique', '', 'meca', 'PageArticle', 'Autre/meca_graphique.php'),
(34, 4, 4, 0, 'Mon casier nm&eacute;rique', 'casier.png', 'Casier_numerique', 'PageArticle', 'Autre/casier_numerique.php'),
(35, 4, 1, 2, 'ajuster le zoom', '', 'ajuster', 'PageArticle', 'Autre/ajuster.php'),
(37, 4, 1, 3, 'zoom au mieux', 'zoomOmieux.png', 'au_mieux', 'PageArticle', 'Autre/zoomOmieux.php'),
(38, 4, 1, 1, 'zoom fen&ecirc;tre', 'zoomFenetre.png', 'Fenetre', 'PageArticle', 'Autre/zoom_fenetre.php'),
(39, 1, 1, 1, 'outils d&apos;esquisse', '', 'outilDesquisse', 'PageArticle', 'Piece/outilsDesquisse.php'),
(40, 1, 1, 2, 'plan d&apos;esquisse', '', 'planDesuisse', 'PageArticle', 'Piece/planDesquisse.php'),
(41, 2, 2, 1, 'les vues standards', '', 'vue_standard', 'PageArticle', 'MEP/vues_std.php'),
(42, 2, 2, 2, 'vue en coupe', '', 'coupe', 'PageArticle', 'MEP/coupe.php'),
(43, 2, 2, 3, 'perspective personnalis&eacute;e', '', '3Dperso', 'PageArticle', 'MEP/3Dperso.php'),
(44, 1, 2, 1, 'Extrusion', 'extrusion.png', 'extrusion', 'PageArticle', 'Piece/extrusion.php'),
(45, 1, 2, 2, 'R&eacute;volution', 'revolution.png', 'revolution', 'PageArticle', 'Piece/revolution.php'),
(46, 1, 2, 3, 'Balayage', 'balayage.png', 'balayage', 'PageArticle', 'Piece/balayage.php'),
(47, 1, 2, 4, 'Symétrie', 'symetrie.png', 'symetrie', 'PageArticle', 'Piece/symetrie.php'),
(48, 1, 2, 5, 'R&eacute;p&eacute;tition lin&eacute;aire', 'repetition_lineaire.png', 'repetition_lineaire', 'PageArticle', 'Piece/repetition_lineaire.php'),
(49, 1, 2, 6, 'R&eacute;p&eacute;tition circulaire', 'repetition_circulaire.png', 'repetition_circulaire', 'PageArticle', 'Piece/repetition_circulaire.php'),
(50, 1, 2, 7, 'Assistance pour le per&ccedil;age', 'percage.png', 'percage', 'PageArticle', 'Piece/assistance_percage.php'),
(51, 1, 2, 8, 'Cong&eacute et chanfrein', 'conge.png', 'conge_chanfrein', 'PageArticle', 'Piece/conge_chanfrein.php'),
(52, 1, 1, 3, 'cotation intelligente', 'cote.png', 'cotation_intelligente', 'PageArticle', 'Piece/cotation_intelligente.php'),
(53, 1, 1, 4, 'contrainte d&apos;esquisse', '', 'contrainteDesquisse', 'PageArticle', 'Piece/contrainteDesquisse.php'),
(54, 1, 1, 5, 'ligne de construction', 'ligne2construction.png', 'ligne2construction', 'PageArticle', 'Piece/ligne2construction.php'),
(55, 1, 1, 6, 'code couleur', '', 'code_couleur', 'PageArticle', 'Piece/code_couleur.php'),
(56, 1, 3, 1, 'tourner et d&eacute;placer', '', 'tourner_deplacer', 'PageArticle', 'Piece/tourner_deplacer.php'),
(57, 1, 3, 2, 'couper une pi&egrave;ce', 'couper_piece.png', 'couper_piece', 'PageArticle', 'Piece/couper.php'),
(58, 1, 3, 3, 'transparence ou couleur', '', 'transparence_couleur', 'PageArticle', 'Piece/transparence_couleur.php'),
(59, 1, 4, 1, 'arbre -> ZG', '', 'arbre_ZG', 'PageArticle', 'Piece/liaison_arbre-piece.php'),
(60, 1, 4, 2, 'ZG -> arbre', '', 'ZG_arbre', 'PageArticle', 'Piece/liaison_piece-arbre.php'),
(61, 1, 5, 0, 'Volumes &eacute;l&eacute;mentaires', '', 'VE', 'PageArticle', 'Piece/volumes_elementaires.php'),
(62, 1, 5, 1, 'prisme droit', 'prisme.png', 'prisme', 'PageVE', 'Piece/prisme.php'),
(63, 1, 5, 2, 'cylindre par extrusion', 'cylindre.png', 'cylindre_extrusion', 'PageVE', 'Piece/cylindre.php'),
(64, 1, 5, 4, 'sph&egrave;re', 'sphere.png', 'sphere', 'PageVE', 'Piece/sphere.php'),
(65, 1, 5, 5, 'tronc de c&ocirc;ne par r&eacute;volution', 'tronc2cone.png', 'tronc2cone_revolution', 'PageVE', 'Piece/tronc2cone.php'),
(66, 1, 5, 7, 'tore', 'tore.png', 'tore', 'PageVE', 'Piece/tore.php'),
(67, 1, 5, 3, 'cylindre par r&eacute;volution', 'cylindre.png', 'cylindre_revolution', 'PageVE', 'Piece/cylindre2.php'),
(68, 1, 5, 6, 'tronc de c&ocirc;ne par extrusion', 'tronc2cone.png', 'tronc2cone_extrusion', 'PageVE', 'Piece/tronc2cone2.php'),
(69, 2, 7, 1, 'arbre -> ZG', '', 'arbre-ZG', 'PageArticle', 'MEP/liaison_arbre-MEP.php'),
(70, 2, 7, 2, 'ZG -> arbre', '', 'ZG-arbre', 'PageArticle', 'MEP/liaison_MEP-arbre.php'),
(71, 3, 2, 1, 'arbre -> ZG', '', 'arbre-ZG', 'PageArticle', 'Assemblage/liaison_arbre-assemblage.php'),
(72, 3, 2, 2, 'ZG -> arbre', '', 'ZG-arbre', 'PageArticle', 'Assemblage/liaison_assemblage-arbre.php'),
(73, -3, 0, 0, 'Page administrateur', '', 'Administrateur', 'PageAdministrateur', 'PEUNC/scripts/accueilAdmin.php'),
(74, -3, 1, 0, 'Table squelette', '', 'squelette', 'PageAdministrateur', 'PEUNC/scripts/squeletteAdmin.php'),
(75, -3, 2, 0, 'Table des pages', '', 'pages', 'PageAdministrateur', 'PEUNC/scripts/pagesAdmin.php'),
(76, -3, 3, 0, 'Table des pages connexes', '', 'pages_connexe', 'PageAdministrateur', 'PEUNC/scripts/connexesAdmin.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
