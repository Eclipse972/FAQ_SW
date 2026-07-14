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

$app->group('/accueil', function ($groupe) {
    $groupe->get('/rechercher-un-article',	[AccueilControleur::class, 'rechercherArticle']);
    $groupe->get('/moi',					[AccueilControleur::class, 'moi']);
    $groupe->get('/nouveautes',			[AccueilControleur::class, 'nouveautes']);
});

// ===== PIÈCE =====

$app->get('/piece', [PieceControleur::class, 'accueil']);

$app->group('/piece', function ($groupe) {

    // esquisse 2D
    $groupe->get('/esquisse-2d', [PieceControleur::class, 'esquisse2d']);
    $groupe->group('/esquisse-2d', function ($sous_groupe) {
        $sous_groupe->get('/outils-d-esquisse',      [PieceControleur::class, 'barreDoutils']);
        $sous_groupe->get('/plan-d-esquisse',        [PieceControleur::class, 'planDesquisse']);
        $sous_groupe->get('/cotation-intelligente',  [PieceControleur::class, 'cotationIntelligente']);
        $sous_groupe->get('/contrainte-d-esquisse',  [PieceControleur::class, 'contraindreUneEsquisse']);
        $sous_groupe->get('/ligne-de-construction',  [PieceControleur::class, 'lignesDeConstruction']);
        $sous_groupe->get('/code-couleur',           [PieceControleur::class, 'codeCouleur']);
    });

    // fonctions
    $groupe->get('/fonctions', [PieceControleur::class, 'fonctions']);
    $groupe->group('/fonctions', function ($sous_groupe) {
        $sous_groupe->get('/extrusion',               [PieceControleur::class, 'extrusion']);
        $sous_groupe->get('/revolution',              [PieceControleur::class, 'revolution']);
        $sous_groupe->get('/balayage',                [PieceControleur::class, 'balayage']);
        $sous_groupe->get('/symetrie',                [PieceControleur::class, 'symetrie']);
        $sous_groupe->get('/repetition-lineaire',     [PieceControleur::class, 'repetitionLineaire']);
        $sous_groupe->get('/repetition-circulaire',   [PieceControleur::class, 'repetitionCirculaire']);
        $sous_groupe->get('/assistance-percage',      [PieceControleur::class, 'assistancePercage']);
        $sous_groupe->get('/conge-et-chanfrein',      [PieceControleur::class, 'congeEtChanfrein']);
    });

    // volumes elementaires
    $groupe->get('/volumes-elementaires', [PieceControleur::class, 'volumesElementaires']);
    $groupe->group('/volumes-elementaires', function ($sous_groupe) {
        $sous_groupe->get('/prisme-droit',                    [PieceControleur::class, 'prisme']);
        $sous_groupe->get('/cylindre-par-extrusion',          [PieceControleur::class, 'cylindreExtrusion']);
        $sous_groupe->get('/cylindre-par-revolution',         [PieceControleur::class, 'cylindreRevolution']);
        $sous_groupe->get('/sphere',                          [PieceControleur::class, 'sphere']);
        $sous_groupe->get('/tronc-de-cone-par-revolution',    [PieceControleur::class, 'troncDeCone']);
        $sous_groupe->get('/tronc-de-cone-par-extrusion',     [PieceControleur::class, 'troncDeConeExtrusion']);
        $sous_groupe->get('/tore',                            [PieceControleur::class, 'tore']);
    });

    // manipuler la pièce
    $groupe->get('/manipuler', [PieceControleur::class, 'manipulerLaPiece']);
    $groupe->group('/manipuler', function ($sous_groupe) {
        $sous_groupe->get('/tourner-et-deplacer',     [PieceControleur::class, 'tournerEtDeplacer']);
        $sous_groupe->get('/couper-une-piece',        [PieceControleur::class, 'couperLaPiece']);
        $sous_groupe->get('/transparence-ou-couleur', [PieceControleur::class, 'transparenceEtCouleur']);
    });

    // arbre de création
    $groupe->get('/arbre-creation', [PieceControleur::class, 'arbreDeCreation']);
    $groupe->group('/arbre-creation', function ($sous_groupe) {
        $sous_groupe->get('/liaison-arbre-zone-graphique', [PieceControleur::class, 'arbreVersZoneGraphique']);
        $sous_groupe->get('/liaison-zone-graphique-arbre', [PieceControleur::class, 'zoneGraphiqueVersArbre']);
    });
});

// ===== ASSEMBLAGE =====

$app->get('/assemblage', [AssemblageControleur::class, 'accueil']);

$app->group('/assemblage', function ($groupe) {

    $groupe->get('/contraintes', [AssemblageControleur::class, 'contraintes']);
    $groupe->group('/contraintes', function ($sous_groupe) {
        $sous_groupe->get('/appui-plan',          [AssemblageControleur::class, 'appuiPlan']);
        $sous_groupe->get('/coaxialite',          [AssemblageControleur::class, 'coaxialite']);
        $sous_groupe->get('/contraintes-limites', [AssemblageControleur::class, 'contraintesLimites']);
        $sous_groupe->get('/comment-les-choisir', [AssemblageControleur::class, 'commentLesChoisir']);
    });

    $groupe->get('/arbre-de-creation', [AssemblageControleur::class, 'arbreDeCreation']);
    $groupe->group('/arbre-de-creation', function ($sous_groupe) {
        $sous_groupe->get('/arbre-zone-graphique',	[AssemblageControleur::class, 'liaisonArbreZoneGraphique']);
        $sous_groupe->get('/zone-graphique-arbre',	[AssemblageControleur::class, 'liaisonZoneGraphiqueArbre']);
        $sous_groupe->get('/ouvrir-sous-ensemble',	[AssemblageControleur::class, 'ouvrirSousEnsemble']);
        $sous_groupe->get('/cacher-montrer-composant',[AssemblageControleur::class, 'cacherMontrerComposant']);
        $sous_groupe->get('/voir-les-contraintes',	[AssemblageControleur::class, 'voirLesContraintes']);
    });

    $groupe->get('/configurations',		[AssemblageControleur::class, 'configurations']);
    $groupe->get('/creer-un-eclate',	[AssemblageControleur::class, 'eclate']);
    $groupe->get('/creer-un-ecorche',	[AssemblageControleur::class, 'ecorche']);
});

// ===== MISE EN PLAN =====

$app->get('/mise-en-plan', [MiseEnPlanControleur::class, 'miseEnPlan']);

$app->group('/mise-en-plan', function ($groupe) {

    $groupe->get('/presentation', [MiseEnPlanControleur::class, 'presentation']);
    $groupe->group('/presentation', function ($sous_groupe) {
        $sous_groupe->get('/le-module',          [MiseEnPlanControleur::class, 'leModule']);
        $sous_groupe->get('/liste-des-articles', [MiseEnPlanControleur::class, 'listeDesArticles']);
    });

    $groupe->get('/fond-de-plan',                  [MiseEnPlanControleur::class, 'fondDePlan']);
    $groupe->get('/cartouche',                     [MiseEnPlanControleur::class, 'cartouche']);
    $groupe->get('/exporter-en-pdf',               [MiseEnPlanControleur::class, 'exporterEnPdf']);
    $groupe->get('/arbre-de-creation',             [MiseEnPlanControleur::class, 'arbreDeCreation']);
    $groupe->get('/lien-fichier-piece-assemblage', [MiseEnPlanControleur::class, 'lienFichierPieceAssemblage']);

    $groupe->get('/vues', [MiseEnPlanControleur::class, 'vues']);
    $groupe->group('/vues', function ($sous_groupe) {
        $sous_groupe->get('/palette-de-vues', [MiseEnPlanControleur::class, 'paletteDeVues']);
        $sous_groupe->get('/vue-projetee',    [MiseEnPlanControleur::class, 'vueProjetee']);
        $sous_groupe->get('/eclate',          [MiseEnPlanControleur::class, 'eclate']);
        $sous_groupe->get('/ecorche',         [MiseEnPlanControleur::class, 'ecorche']);
        $sous_groupe->get('/detail-agrandi',  [MiseEnPlanControleur::class, 'detailAgrandi']);

        $sous_groupe->get('/vue-en-coupe', [MiseEnPlanControleur::class, 'vueEnCoupe']);
        $sous_groupe->group('/vue-en-coupe', function ($sous_sous_groupe) {
            $sous_sous_groupe->get('/avec-2012', [MiseEnPlanControleur::class, 'avec2012']);
            $sous_sous_groupe->get('/avec-2015', [MiseEnPlanControleur::class, 'avec2015']);
        });

        $sous_groupe->get('/perspective', [MiseEnPlanControleur::class, 'perspective']);
        $sous_groupe->group('/perspective', function ($sous_sous_groupe) {
            $sous_sous_groupe->get('/standard',      [MiseEnPlanControleur::class, 'standard']);
            $sous_sous_groupe->get('/personnalisee', [MiseEnPlanControleur::class, 'personnalisee']);
        });
    });

    $groupe->get('/cotation', [MiseEnPlanControleur::class, 'cotation']);
    $groupe->group('/cotation', function ($sous_groupe) {
        $sous_groupe->get('/inserer-la-cotation',           [MiseEnPlanControleur::class, 'insererLaCotation']);
        $sous_groupe->get('/coter-a-la-main',               [MiseEnPlanControleur::class, 'coterALaMain']);
        $sous_groupe->get('/forcer-le-sens-des-fleches',    [MiseEnPlanControleur::class, 'forcerLeSensDesFleches']);
        $sous_groupe->get('/nombre-de-decimales',           [MiseEnPlanControleur::class, 'nombreDeDecimales']);
        $sous_groupe->get('/modifier-les-lignes-de-rappel', [MiseEnPlanControleur::class, 'modifierLesLignesDeRappel']);
        $sous_groupe->get('/rajouter-du-texte',             [MiseEnPlanControleur::class, 'rajouterDuTexte']);

        $sous_groupe->get('/erreurs-classiques', [MiseEnPlanControleur::class, 'erreursClassiques']);
        $sous_groupe->group('/erreurs-classiques', function ($sous_sous_groupe) {
            $sous_sous_groupe->get('/croisement-fleche-ligne-rappel',       [MiseEnPlanControleur::class, 'croisementFlecheLigneRappel']);
            $sous_sous_groupe->get('/valeurs-non-centrees',                 [MiseEnPlanControleur::class, 'valeursNonCentrees']);
            $sous_sous_groupe->get('/ligne-de-rappel-dans-le-vide',         [MiseEnPlanControleur::class, 'ligneDeRappelDansLeVide']);
            $sous_sous_groupe->get('/cote-loin-de-sa-forme',                [MiseEnPlanControleur::class, 'coteLoinDeSaForme']);
            $sous_sous_groupe->get('/pointes-de-fleche-au-mauvais-endroit', [MiseEnPlanControleur::class, 'pointesDeFlecheAuMauvaisEndroit']);
            $sous_sous_groupe->get('/cote-en-dehors-de-la-zone',            [MiseEnPlanControleur::class, 'coteEnDehorsDeLaZone']);
        });
    });

    $groupe->get('/mise-en-page', [MiseEnPlanControleur::class, 'miseEnPage']);
    $groupe->group('/mise-en-page', function ($sous_groupe) {
        $sous_groupe->get('/deplacer-les-vues', [MiseEnPlanControleur::class, 'deplacerLesVues']);
        $sous_groupe->get('/modifier-lechelle', [MiseEnPlanControleur::class, 'modifierLechelle']);
    });

    $groupe->get('/dessin-densemble', [MiseEnPlanControleur::class, 'dessinDensemble']);
    $groupe->group('/dessin-densemble', function ($sous_groupe) {
        $sous_groupe->get('/ajouter-des-reperes', [MiseEnPlanControleur::class, 'ajouterDesReperes']);
        $sous_groupe->get('/nomenclature',        [MiseEnPlanControleur::class, 'nomenclature']);
        $sous_groupe->get('/inserer-un-eclate',   [MiseEnPlanControleur::class, 'insererUnEclate']);
        $sous_groupe->get('/inclure-un-ecorche',  [MiseEnPlanControleur::class, 'inclureUnEcorche']);
    });
});

// ===== AUTRE =====

$app->get('/autre', [AutreControleur::class, 'accueil']);

$app->group('/autre', function ($groupe) {

    $groupe->get('/ouvrir-un-fichier', [AutreControleur::class, 'ouvrirFichier']);

    $groupe->get('/zoom', [AutreControleur::class, 'zoom']);
    $groupe->group('/zoom', function ($sous_groupe) {
        $sous_groupe->get('/zoom-fenetre',    [AutreControleur::class, 'zoomFenetre']);
        $sous_groupe->get('/ajuster-le-zoom', [AutreControleur::class, 'ajusterZoom']);
        $sous_groupe->get('/zoom-au-mieux',   [AutreControleur::class, 'zoomAuMieux']);
        $sous_groupe->get('/deplacer-la-vue', [AutreControleur::class, 'deplacerVue']);
    });

    $groupe->get('/export-edrawing', [AutreControleur::class, 'exportEdrawing']);
    $groupe->group('/export-edrawing', function ($sous_groupe) {
        $sous_groupe->get('/piece',			[AutreControleur::class, 'exportEdrawingPiece']);
        $sous_groupe->get('/assemblage',	[AutreControleur::class, 'exportEdrawingAssemblage']);
        $sous_groupe->get('/mise-en-plan',	[AutreControleur::class, 'exportEdrawingMiseEnPlan']);
    });

    $groupe->get('/casier-numerique', [AutreControleur::class, 'casierNumerique']);

    $groupe->get('/mecanique-graphique', [AutreControleur::class, 'mecaniqueGraphique']);
    $groupe->group('/mecanique-graphique', function ($sous_groupe) {
        $sous_groupe->get('/pfs-3-forces',			[AutreControleur::class, 'resolutionPFS3forces']);
        $sous_groupe->get('/equi-projectivite',		[AutreControleur::class, 'equiProjectivite']);
        $sous_groupe->get('/champ-vecteur-vitesse',	[AutreControleur::class, 'champVecteurVitesse']);
    });
});