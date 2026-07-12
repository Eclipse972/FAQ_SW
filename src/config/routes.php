<?php

declare(strict_types=1);

use FaqSolidworks\Controleur\AccueilControleur;
use FaqSolidworks\Controleur\PieceControleur;
use FaqSolidworks\Controleur\AssemblageControleur;
use FaqSolidworks\Controleur\MiseEnPlanControleur;
use FaqSolidworks\Controleur\AutreControleur;
use FaqSolidworks\Controleur\ContactControleur;

use Slim\App;
/** @var App $app */

$app->redirect('/', '/accueil', 301);

// ===== ACCUEIL =====

$app->get('/accueil', [AccueilControleur::class, 'accueil']);

$app->group('/accueil', function ($accueil) {
    $accueil->get('/navigation',		[AccueilControleur::class, 'navigation']);
    $accueil->get('/trouver-un-article',[AccueilControleur::class, 'trouverArticle']);
    $accueil->get('/moi',				[AccueilControleur::class, 'moi']);
    $accueil->get('/nouveautes',		[AccueilControleur::class, 'nouveautes']);
});

// ===== PIÈCE =====

$app->get('/piece', [PieceControleur::class, 'piece']);

$app->group('/piece', function ($piece) {

    $piece->get('/presentation', [PieceControleur::class, 'presentation']);
    $piece->group('/presentation', function ($presentation) {
        $presentation->get('/le-module',          [PieceControleur::class, 'leModule']);
        $presentation->get('/liste-des-articles', [PieceControleur::class, 'listeDesArticles']);
    });

    // esquisse 2D
    $piece->get('/esquisse-2d', [PieceControleur::class, 'esquisse2d']);
    $piece->group('/esquisse-2d', function ($esquisse2d) {
        $esquisse2d->get('/barre-doutils-desquisse', [PieceControleur::class, 'barreDoutils']);
        $esquisse2d->get('/lignes-de-construction',  [PieceControleur::class, 'lignesDeConstruction']);

        $esquisse2d->get('/plan-desquisse', [PieceControleur::class, 'planDesquisse']);
        $esquisse2d->group('/plan-desquisse', function ($planDesquisse) {
            $planDesquisse->get('/cest-quoi',           [PieceControleur::class, 'cestQuoi']);
            $planDesquisse->get('/comment-le-modifier', [PieceControleur::class, 'commentLeModifier']);

            $planDesquisse->get('/creer-un-plan-de-toute-piece', [PieceControleur::class, 'creerUnPlanDeToutePiece']);
            $planDesquisse->group('/creer-un-plan-de-toute-piece', function ($creerUnPlan) {
                $creerUnPlan->get('/parallele',        [PieceControleur::class, 'parallele']);
                $creerUnPlan->get('/par-trois-points', [PieceControleur::class, 'parTroisPoints']);
                $creerUnPlan->get('/autres-procedes',  [PieceControleur::class, 'autresProcedes']);
            });
        });

        $esquisse2d->get('/cotation-intelligente', [PieceControleur::class, 'cotationIntelligente']);
        $esquisse2d->group('/cotation-intelligente', function ($cotationIntelligente) {
            $cotationIntelligente->get('/sur-un-segment',     [PieceControleur::class, 'surUnSegment']);
            $cotationIntelligente->get('/entre-deux-entites', [PieceControleur::class, 'entreDeuxEntites']);
            $cotationIntelligente->get('/coter-au-diametre',  [PieceControleur::class, 'coterAuDiametre']);
        });

        $esquisse2d->get('/contraindre-une-esquisse', [PieceControleur::class, 'contraindreUneEsquisse']);
        $esquisse2d->group('/contraindre-une-esquisse', function ($contraindreUneEsquisse) {
            $contraindreUneEsquisse->get('/liste-des-contraintes',    [PieceControleur::class, 'listeDesContraintes']);
            $contraindreUneEsquisse->get('/utiliser-les-contraintes', [PieceControleur::class, 'utiliserLesContraintes']);
        });

        $esquisse2d->get('/code-couleur', [PieceControleur::class, 'codeCouleur']);
        $esquisse2d->group('/code-couleur', function ($codeCouleur) {
            $codeCouleur->get('/bleu',  [PieceControleur::class, 'bleu']);
            $codeCouleur->get('/noir',  [PieceControleur::class, 'noir']);
            $codeCouleur->get('/gris',  [PieceControleur::class, 'gris']);
            $codeCouleur->get('/rouge', [PieceControleur::class, 'rouge']);
        });
    });

    // fonctions
    $piece->get('/fonctions', [PieceControleur::class, 'fonctions']);
    $piece->group('/fonctions', function ($fonctions) {
        $fonctions->get('/balayage',             [PieceControleur::class, 'balayage']);
        $fonctions->get('/symetrie',             [PieceControleur::class, 'symetrie']);
        $fonctions->get('/repetition-lineaire',  [PieceControleur::class, 'repetitionLineaire']);
        $fonctions->get('/repetition-circulaire',[PieceControleur::class, 'repetitionCirculaire']);
        $fonctions->get('/conge-et-chanfrein',   [PieceControleur::class, 'congeEtChanfrein']);

        $fonctions->get('/extrusion', [PieceControleur::class, 'extrusion']);
        $fonctions->group('/extrusion', function ($extrusion) {
            $extrusion->get('/angle-de-depouille', [PieceControleur::class, 'angleDeDepouille']);

            $extrusion->get('/noms-des-icones', [PieceControleur::class, 'nomsDesIcones']);
            $extrusion->group('/noms-des-icones', function ($nomsDesIconesExtrusion) {
                $nomsDesIconesExtrusion->get('/ajout',      [PieceControleur::class, 'ajout']);
                $nomsDesIconesExtrusion->get('/enlevement', [PieceControleur::class, 'enlevement']);
            });

            $extrusion->get('/cas-general', [PieceControleur::class, 'casGeneral']);
            $extrusion->group('/cas-general', function ($casGeneral) {
                $casGeneral->get('/cylindre', [PieceControleur::class, 'cylindre']);
                $casGeneral->get('/prisme',   [PieceControleur::class, 'prisme']);
            });

            $extrusion->get('/enlevement-de-matiere', [PieceControleur::class, 'enlevementDeMatiere']);
            $extrusion->group('/enlevement-de-matiere', function ($enlevementDeMatiereExtrusion) {
                $enlevementDeMatiereExtrusion->get('/cest-le-meme-principe',   [PieceControleur::class, 'cestLeMemePrincipe']);
                $enlevementDeMatiereExtrusion->get('/piece-faite-en-fraisage', [PieceControleur::class, 'pieceFaiteEnFraisage']);
            });
        });

        $fonctions->get('/revolution', [PieceControleur::class, 'revolution']);
        $fonctions->group('/revolution', function ($revolution) {
            $revolution->get('/sphere',        [PieceControleur::class, 'sphere']);
            $revolution->get('/tronc-de-cone', [PieceControleur::class, 'troncDeCone']);
            $revolution->get('/cylindre',      [PieceControleur::class, 'cylindre']);

            $revolution->get('/noms-des-icones', [PieceControleur::class, 'nomsDesIcones']);
            $revolution->group('/noms-des-icones', function ($nomsDesIconesRevolution) {
                $nomsDesIconesRevolution->get('/ajout',      [PieceControleur::class, 'ajout']);
                $nomsDesIconesRevolution->get('/enlevement', [PieceControleur::class, 'enlevement']);
            });

            $revolution->get('/pieces-de-revolution', [PieceControleur::class, 'piecesDeRevolution']);
            $revolution->group('/pieces-de-revolution', function ($piecesDeRevolution) {
                $piecesDeRevolution->get('/lesquisse',  [PieceControleur::class, 'lesquisse']);
                $piecesDeRevolution->get('/revolution', [PieceControleur::class, 'revolutionPiece']);
            });

            $revolution->get('/enlevement-de-matiere', [PieceControleur::class, 'enlevementDeMatiere']);
            $revolution->group('/enlevement-de-matiere', function ($enlevementDeMatiereRevolution) {
                $enlevementDeMatiereRevolution->get('/cest-le-meme-principe',   [PieceControleur::class, 'cestLeMemePrincipe']);
                $enlevementDeMatiereRevolution->get('/piece-faite-en-tournage', [PieceControleur::class, 'pieceFaiteEnTournage']);
                $enlevementDeMatiereRevolution->get('/percage-borgne',          [PieceControleur::class, 'percageBorgne']);
                $enlevementDeMatiereRevolution->get('/piece-avec-chambrage',    [PieceControleur::class, 'pieceAvecChambrage']);
                $enlevementDeMatiereRevolution->get('/realisation-dune-gorge',  [PieceControleur::class, 'realisationDuneGorge']);
            });
        });

        $fonctions->get('/assistance-percage', [PieceControleur::class, 'assistancePercage']);
        $fonctions->group('/assistance-percage', function ($assistancePercage) {
            $assistancePercage->get('/percage',      [PieceControleur::class, 'percage']);
            $assistancePercage->get('/trou-taraude', [PieceControleur::class, 'trouTaraude']);

            $assistancePercage->get('/presentation', [PieceControleur::class, 'presentation']);
            $assistancePercage->group('/presentation', function ($presentationPercage) {
                $presentationPercage->get('/onglet-caracteristiques', [PieceControleur::class, 'ongletCaracteristiques']);
                $presentationPercage->get('/onglet-positionnement',   [PieceControleur::class, 'ongletPositionnement']);
            });
        });
    });

    // manipuler la pièce
    $piece->get('/manipuler-la-piece', [PieceControleur::class, 'manipulerLaPiece']);
    $piece->group('/manipuler-la-piece', function ($manipulerLaPiece) {
        $manipulerLaPiece->get('/tourner-et-deplacer',     [PieceControleur::class, 'tournerEtDeplacer']);
        $manipulerLaPiece->get('/transparence-et-couleur', [PieceControleur::class, 'transparenceEtCouleur']);

        $manipulerLaPiece->get('/couper-la-piece', [PieceControleur::class, 'couperLaPiece']);
        $manipulerLaPiece->group('/couper-la-piece', function ($couperLaPiece) {
            $couperLaPiece->get('/suivant-plan-de-reference', [PieceControleur::class, 'suivantPlanDeReference']);
            $couperLaPiece->get('/plan-parallele',            [PieceControleur::class, 'planParallele']);
            $couperLaPiece->get('/suivant-un-plan-cree',      [PieceControleur::class, 'suivantUnPlanCree']);
        });
    });

    // arbre de création
    $piece->get('/arbre-de-creation', [PieceControleur::class, 'arbreDeCreation']);
    $piece->group('/arbre-de-creation', function ($arbreDeCreationPiece) {
        $arbreDeCreationPiece->get('/zone-graphique-vers-arbre', [PieceControleur::class, 'zoneGraphiqueVersArbre']);
        $arbreDeCreationPiece->get('/arbre-vers-zone-graphique', [PieceControleur::class, 'arbreVersZoneGraphique']);
    });
});


// ===== ASSEMBLAGE =====

$app->get('/assemblage', [AssemblageControleur::class, 'assemblage']);

$app->group('/assemblage', function ($assemblage) {

    $assemblage->get('/presentation', [AssemblageControleur::class, 'presentation']);
    $assemblage->group('/presentation', function ($presentationAssemblage) {
        $presentationAssemblage->get('/le-module',          [AssemblageControleur::class, 'leModule']);
        $presentationAssemblage->get('/liste-des-articles', [AssemblageControleur::class, 'listeDesArticles']);
    });

    $assemblage->get('/contraintes', [AssemblageControleur::class, 'contraintes']);
    $assemblage->group('/contraintes', function ($contraintes) {
        $contraintes->get('/appui-plan',          [AssemblageControleur::class, 'appuiPlan']);
        $contraintes->get('/coaxialite',          [AssemblageControleur::class, 'coaxialite']);
        $contraintes->get('/contraintes-limites', [AssemblageControleur::class, 'contraintesLimites']);
        $contraintes->get('/comment-les-choisir', [AssemblageControleur::class, 'commentLesChoisir']);
    });

    $assemblage->get('/arbre-de-creation', [AssemblageControleur::class, 'arbreDeCreation']);
    $assemblage->group('/arbre-de-creation', function ($arbreDeCreationAssemblage) {
        $arbreDeCreationAssemblage->get('/arbre-vers-zone-graphique', [AssemblageControleur::class, 'arbreVersZoneGraphique']);
        $arbreDeCreationAssemblage->get('/zone-graphique-vers-arbre', [AssemblageControleur::class, 'zoneGraphiqueVersArbre']);
        $arbreDeCreationAssemblage->get('/ouvrir-sous-ensemble',      [AssemblageControleur::class, 'ouvrirSousEnsemble']);
        $arbreDeCreationAssemblage->get('/cacher-montrer-composant',  [AssemblageControleur::class, 'cacherMontrerComposant']);
        $arbreDeCreationAssemblage->get('/voir-les-contraintes',      [AssemblageControleur::class, 'voirLesContraintes']);
    });

    $assemblage->get('/configurations', [AssemblageControleur::class, 'configurations']);
    $assemblage->get('/eclate',         [AssemblageControleur::class, 'eclate']);
    $assemblage->get('/ecorche',        [AssemblageControleur::class, 'ecorche']);
});


// ===== MISE EN PLAN =====

$app->get('/mise-en-plan', [MiseEnPlanControleur::class, 'miseEnPlan']);

$app->group('/mise-en-plan', function ($miseEnPlan) {

    $miseEnPlan->get('/presentation', [MiseEnPlanControleur::class, 'presentation']);
    $miseEnPlan->group('/presentation', function ($presentationMiseEnPlan) {
        $presentationMiseEnPlan->get('/le-module',          [MiseEnPlanControleur::class, 'leModule']);
        $presentationMiseEnPlan->get('/liste-des-articles', [MiseEnPlanControleur::class, 'listeDesArticles']);
    });

    $miseEnPlan->get('/fond-de-plan',                  [MiseEnPlanControleur::class, 'fondDePlan']);
    $miseEnPlan->get('/cartouche',                     [MiseEnPlanControleur::class, 'cartouche']);
    $miseEnPlan->get('/exporter-en-pdf',               [MiseEnPlanControleur::class, 'exporterEnPdf']);
    $miseEnPlan->get('/arbre-de-creation',             [MiseEnPlanControleur::class, 'arbreDeCreation']);
    $miseEnPlan->get('/lien-fichier-piece-assemblage', [MiseEnPlanControleur::class, 'lienFichierPieceAssemblage']);

    $miseEnPlan->get('/vues', [MiseEnPlanControleur::class, 'vues']);
    $miseEnPlan->group('/vues', function ($vues) {
        $vues->get('/palette-de-vues', [MiseEnPlanControleur::class, 'paletteDeVues']);
        $vues->get('/vue-projetee',    [MiseEnPlanControleur::class, 'vueProjetee']);
        $vues->get('/eclate',          [MiseEnPlanControleur::class, 'eclate']);
        $vues->get('/ecorche',         [MiseEnPlanControleur::class, 'ecorche']);
        $vues->get('/detail-agrandi',  [MiseEnPlanControleur::class, 'detailAgrandi']);

        $vues->get('/vue-en-coupe', [MiseEnPlanControleur::class, 'vueEnCoupe']);
        $vues->group('/vue-en-coupe', function ($vueEnCoupe) {
            $vueEnCoupe->get('/avec-2012', [MiseEnPlanControleur::class, 'avec2012']);
            $vueEnCoupe->get('/avec-2015', [MiseEnPlanControleur::class, 'avec2015']);
        });

        $vues->get('/perspective', [MiseEnPlanControleur::class, 'perspective']);
        $vues->group('/perspective', function ($perspective) {
            $perspective->get('/standard',      [MiseEnPlanControleur::class, 'standard']);
            $perspective->get('/personnalisee', [MiseEnPlanControleur::class, 'personnalisee']);
        });
    });

    $miseEnPlan->get('/cotation', [MiseEnPlanControleur::class, 'cotation']);
    $miseEnPlan->group('/cotation', function ($cotation) {
        $cotation->get('/inserer-la-cotation',           [MiseEnPlanControleur::class, 'insererLaCotation']);
        $cotation->get('/coter-a-la-main',               [MiseEnPlanControleur::class, 'coterALaMain']);
        $cotation->get('/forcer-le-sens-des-fleches',    [MiseEnPlanControleur::class, 'forcerLeSensDesFleches']);
        $cotation->get('/nombre-de-decimales',           [MiseEnPlanControleur::class, 'nombreDeDecimales']);
        $cotation->get('/modifier-les-lignes-de-rappel', [MiseEnPlanControleur::class, 'modifierLesLignesDeRappel']);
        $cotation->get('/rajouter-du-texte',             [MiseEnPlanControleur::class, 'rajouterDuTexte']);

        $cotation->get('/erreurs-classiques', [MiseEnPlanControleur::class, 'erreursClassiques']);
        $cotation->group('/erreurs-classiques', function ($erreursClassiques) {
            $erreursClassiques->get('/croisement-fleche-ligne-rappel',       [MiseEnPlanControleur::class, 'croisementFlecheLigneRappel']);
            $erreursClassiques->get('/valeurs-non-centrees',                 [MiseEnPlanControleur::class, 'valeursNonCentrees']);
            $erreursClassiques->get('/ligne-de-rappel-dans-le-vide',         [MiseEnPlanControleur::class, 'ligneDeRappelDansLeVide']);
            $erreursClassiques->get('/cote-loin-de-sa-forme',                [MiseEnPlanControleur::class, 'coteLoinDeSaForme']);
            $erreursClassiques->get('/pointes-de-fleche-au-mauvais-endroit', [MiseEnPlanControleur::class, 'pointesDeFlecheAuMauvaisEndroit']);
            $erreursClassiques->get('/cote-en-dehors-de-la-zone',            [MiseEnPlanControleur::class, 'coteEnDehorsDeLaZone']);
        });
    });

    $miseEnPlan->get('/mise-en-page', [MiseEnPlanControleur::class, 'miseEnPage']);
    $miseEnPlan->group('/mise-en-page', function ($miseEnPage) {
        $miseEnPage->get('/deplacer-les-vues', [MiseEnPlanControleur::class, 'deplacerLesVues']);
        $miseEnPage->get('/modifier-lechelle', [MiseEnPlanControleur::class, 'modifierLechelle']);
    });

    $miseEnPlan->get('/dessin-densemble', [MiseEnPlanControleur::class, 'dessinDensemble']);
    $miseEnPlan->group('/dessin-densemble', function ($dessinDensemble) {
        $dessinDensemble->get('/ajouter-des-reperes', [MiseEnPlanControleur::class, 'ajouterDesReperes']);
        $dessinDensemble->get('/nomenclature',        [MiseEnPlanControleur::class, 'nomenclature']);
        $dessinDensemble->get('/inserer-un-eclate',   [MiseEnPlanControleur::class, 'insererUnEclate']);
        $dessinDensemble->get('/inclure-un-ecorche',  [MiseEnPlanControleur::class, 'inclureUnEcorche']);
    });
});


// ===== AUTRE =====

$app->get('/autre', [AutreControleur::class, 'autre']);

$app->group('/autre', function ($autre) {

    $autre->get('/presentation',            [AutreControleur::class, 'presentation']);
    $autre->get('/casier-numerique',        [AutreControleur::class, 'casierNumerique']);
    $autre->get('/placer-la-barre-doutils', [AutreControleur::class, 'placerLaBarreDoutils']);

    $autre->get('/zoom', [AutreControleur::class, 'zoom']);
    $autre->group('/zoom', function ($zoom) {
        $zoom->get('/zoom-au-mieux',   [AutreControleur::class, 'zoomAuMieux']);
        $zoom->get('/zoom-fenetre',    [AutreControleur::class, 'zoomFenetre']);
        $zoom->get('/ajuster-le-zoom', [AutreControleur::class, 'ajusterLeZoom']);
        $zoom->get('/deplacer-la-vue', [AutreControleur::class, 'deplacerLaVue']);
    });

    $autre->get('/ouvrir-un-fichier', [AutreControleur::class, 'ouvrirUnFichier']);
    $autre->group('/ouvrir-un-fichier', function ($ouvrirUnFichier) {
        $ouvrirUnFichier->get('/2012', [AutreControleur::class, 'ouvrir2012']);
        $ouvrirUnFichier->get('/2015', [AutreControleur::class, 'ouvrir2015']);
    });

    $autre->get('/mecanique-graphique', [AutreControleur::class, 'mecaniqueGraphique']);
    $autre->group('/mecanique-graphique', function ($mecaniqueGraphique) {
        $mecaniqueGraphique->get('/statique', [AutreControleur::class, 'statique']);

        $mecaniqueGraphique->get('/cinematique', [AutreControleur::class, 'cinematique']);
        $mecaniqueGraphique->group('/cinematique', function ($cinematique) {
            $cinematique->get('/equi-projectivite',     [AutreControleur::class, 'equiProjectivite']);
            $cinematique->get('/champ-vecteur-vitesse', [AutreControleur::class, 'champVecteurVitesse']);
        });
    });
});


// ===== CONTACT =====

// $app->get('/contact',  [ContactControleur::class, 'afficher']);
// $app->post('/contact', [ContactControleur::class, 'traiter']);
