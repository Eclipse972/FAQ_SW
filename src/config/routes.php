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
    $accueil->get('/rechercher-un-article',	[AccueilControleur::class, 'rechercherArticle']);
    $accueil->get('/moi',					[AccueilControleur::class, 'moi']);
    $accueil->get('/nouveautes',			[AccueilControleur::class, 'nouveautes']);
});

// ===== PIÈCE =====

$app->get('/piece', [PieceControleur::class, 'accueil']);

$app->group('/piece', function ($piece) {

    // esquisse 2D
    $piece->get('/esquisse-2d', [PieceControleur::class, 'esquisse2d']);
    $piece->group('/esquisse-2d', function ($esquisse2d) {
        $esquisse2d->get('/outils-d-esquisse',      [PieceControleur::class, 'barreDoutils']);
        $esquisse2d->get('/plan-d-esquisse',        [PieceControleur::class, 'planDesquisse']);
        $esquisse2d->get('/cotation-intelligente',  [PieceControleur::class, 'cotationIntelligente']);
        $esquisse2d->get('/contrainte-d-esquisse',  [PieceControleur::class, 'contraindreUneEsquisse']);
        $esquisse2d->get('/ligne-de-construction',  [PieceControleur::class, 'lignesDeConstruction']);
        $esquisse2d->get('/code-couleur',           [PieceControleur::class, 'codeCouleur']);
    });

    // fonctions
    $piece->get('/fonctions', [PieceControleur::class, 'fonctions']);
    $piece->group('/fonctions', function ($fonctions) {
        $fonctions->get('/extrusion',               [PieceControleur::class, 'extrusion']);
        $fonctions->get('/revolution',              [PieceControleur::class, 'revolution']);
        $fonctions->get('/balayage',                [PieceControleur::class, 'balayage']);
        $fonctions->get('/symetrie',                [PieceControleur::class, 'symetrie']);
        $fonctions->get('/repetition-lineaire',     [PieceControleur::class, 'repetitionLineaire']);
        $fonctions->get('/repetition-circulaire',   [PieceControleur::class, 'repetitionCirculaire']);
        $fonctions->get('/assistance-percage',      [PieceControleur::class, 'assistancePercage']);
        $fonctions->get('/conge-et-chanfrein',      [PieceControleur::class, 'congeEtChanfrein']);
    });

    // volumes elementaires
    $piece->get('/volumes-elementaires', [PieceControleur::class, 'volumesElementaires']); // À créer/adapter dans votre contrôleur si besoin
    $piece->group('/volumes-elementaires', function ($volumesElementaires) {
        $volumesElementaires->get('/prisme-droit',                    [PieceControleur::class, 'prisme']);
        $volumesElementaires->get('/cylindre-par-extrusion',          [PieceControleur::class, 'cylindreExtrusion']);
        $volumesElementaires->get('/cylindre-par-revolution',         [PieceControleur::class, 'cylindreRevolution']);
        $volumesElementaires->get('/sphere',                          [PieceControleur::class, 'sphere']);
        $volumesElementaires->get('/tronc-de-cone-par-revolution',    [PieceControleur::class, 'troncDeCone']);
        $volumesElementaires->get('/tronc-de-cone-par-extrusion',     [PieceControleur::class, 'troncDeConeExtrusion']); // À adapter si méthode spécifique
        $volumesElementaires->get('/tore',                            [PieceControleur::class, 'tore']); // À adapter si méthode spécifique
    });

    // manipuler la pièce
    $piece->get('/manipuler', [PieceControleur::class, 'manipulerLaPiece']);
    $piece->group('/manipuler', function ($manipuler) {
        $manipuler->get('/tourner-et-deplacer',     [PieceControleur::class, 'tournerEtDeplacer']);
        $manipuler->get('/couper-une-piece',        [PieceControleur::class, 'couperLaPiece']);
        $manipuler->get('/transparence-ou-couleur', [PieceControleur::class, 'transparenceEtCouleur']);
    });

    // arbre de création
    $piece->get('/arbre-creation', [PieceControleur::class, 'arbreDeCreation']);
    $piece->group('/arbre-creation', function ($arbreCreation) {
        $arbreCreation->get('/liaison-arbre-zone-graphique', [PieceControleur::class, 'arbreVersZoneGraphique']);
        $arbreCreation->get('/liaison-zone-graphique-arbre', [PieceControleur::class, 'zoneGraphiqueVersArbre']);
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
