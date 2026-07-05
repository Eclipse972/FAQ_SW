<?php
$modeDev = (substr(__DIR__, 18, 3) == 'dev');

# forcer l'affichage des erreurs pour le site de developpement
if ($modeDev) {
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
}

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use FaqSolidworks\Controleur\PageSpecialeControleur;
use Slim\Exception\HttpNotFoundException;
use Slim\Views\Twig;

// --- Conteneur de dépendances ---
$conteneur = require __DIR__ . '/../src/config/dependances.php';

// --- Création de l'application Slim ---
AppFactory::setContainer($conteneur);
$app = AppFactory::create();

// --- Enregistrement des routes ---
require __DIR__ . '/../src/config/routes.php';

// --- Gestion des erreurs ---
$pageErreur = new PageSpecialeControleur($conteneur->get(Twig::class));
$factory    = $app->getResponseFactory();
$errorMiddleware = $app->addErrorMiddleware($modeDev, true, true);

$errorMiddleware->setErrorHandler(
	HttpNotFoundException::class,
	$pageErreur->creerHandlerErreur($factory, 404, "Page introuvable")
);

# toujours en dernier pour capturer toutes les erreurs inconnues
$errorMiddleware->setDefaultErrorHandler(
	$pageErreur->creerHandlerErreur($factory, 500, "Erreur inconnue")
);

// --- Lancement ---
$app->run();
