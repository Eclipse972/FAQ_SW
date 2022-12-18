<?php	// Base de données de PEUNC
namespace PEUNC;

include"API_BDD.php";

class BDD implements iBDD
{
	private $BD;
	private static $instance;

	private function __construct()
	{
		require"connexion.php";
		$this->BD = new \PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $user , $pwd);
		if (isset($this->BD))
		{
			$this->BD->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,	\PDO::FETCH_ASSOC);
			$this->BD->setAttribute(\PDO::ATTR_ERRMODE,				\PDO::ERRMODE_EXCEPTION);
		}
		else
			exit("Erreur fatale: connexion &agrave; la base de données impossible!");
	}

	private static function getInstance()
	{
		if(empty(self::$instance))
		{
			self::$instance = new BDD();
		}
		return self::$instance->BD;
	}

//	Implémentation de l'interface

	public static function SELECT($requete, array $T_parametre = [])
	{
		$pdo = self::getInstance();
		$requete = $pdo->prepare("SELECT " . $requete);
		$requete->execute($T_parametre);
		$reponse = $requete->fetchAll();
		$requete->closeCursor();
		switch(count($reponse))
		{
			case 0:	// aucun résultat
				$résultat = null;
				break;
			case 1:	// une seule ligne						une seule colonne					plusieurs colonnes
				$résultat = (count($reponse[0]) == 1) ? $résultat = array_shift($reponse[0]) : $reponse[0];
				break;
			default: // plusieurs lignes
				$résultat = $reponse;
		}
		return $résultat;
	}

	public static function Liste_niveau($alpha = null, $beta = null)
	{
		if(!isset($alpha))
		{	// pour les onglets
			$eqAlpha= ">=0";
			$eqBeta	= "=0";
			$eqGamma= "=0";
			$indice	= "alpha";
			$param	= [];
		}
		elseif(!isset($beta))
		{	// pour le menu
			$eqAlpha= "=?";
			$eqBeta = ">0";
			$eqGamma= "=0";
			$indice = "beta";
			$param	= [$alpha];
		}
		else
		{	// pour le sous-menu
			$eqAlpha= "=?";
			$eqBeta = "=?";
			$eqGamma= ">0";
			$indice = "gamma";
			$param	= [$alpha, $beta];
		}
		$Treponse = self::SELECT("{$indice} AS i, code FROM Vue_code_item
							WHERE alpha{$eqAlpha} AND beta{$eqBeta} AND gamma{$eqGamma}
							ORDER BY i",
							$param
						);
		$Tableau = null;
		if (isset($Treponse))
		{
			foreach($Treponse as $ligne)
				$Tableau[(int)$ligne["i"]] = $ligne["code"];
		}
		return $Tableau;
	}

	public static function Route($URL,$methode)
	{
		if($URL="/") $URL = BDD::SELECT("URL FROM Vue_Routes WHEN alpha=0 AND beta=0 AND gamma=0 AND methode=?", [$methode]); // recherche de l'URL de la racine
		
		// recherche alpha, beta et gamma
		$Treponse = BDD::SELECT("niveau1, niveau2, niveau3 FROM Vue_Routes WHERE URL = ? and methodeHttp = ?", [$URL, $methode]);
		list($alpha, $beta, $gamma) = [$Treponse["niveau1"], $Treponse["niveau2"], $Treponse["niveau3"]];
		if(isset($alpha))
		{	// il existe une correspondance
			$Treponse = BDD::SELECT("classePage, controleur, paramAutorise FROM Squelette
								WHERE alpha=? AND beta=? AND gamma=? AND methode=?", [$alpha, $beta, $gamma, $methode]);
			return [$alpha, $beta, $gamma, $URL, $methode, $Treponse["classePage"]
					//, $Treponse["controleur"], $Treponse["paramAutorise"]
					];
		} else throw new ServeurException(404);
	}
}
