<?php
namespace PEUNC;

class Cache
{
	const DUREE_VIE = 3600;	// 1 heure
	const DOSSIER_CACHE = "cache/";

	private $fichierCache;
	private $actif;

	public function __construct(HttpRoute $route)
	{
		$this->fichierCache = self::DOSSIER_CACHE . "cache" . str_replace('/','-',$route->getURL()) . '.html';
	}

	public function Activer($flag = true)	{ $this->actif = $flag; }

	public function Start()
	{
		$this->actif = false;
		If(file_exists($this->fichierCache) && filemtime($this->fichierCache) + self::DUREE_VIE < $time())
		{	// le fichier existe et est encore valide
			$this->actif = true;
		} else $this->actif = false;
	}

//	Assesseurs ==================================================================================

	public function getCache()		{ return $this->fichierCache; }
	public function getCacheActif()	{ return $this->actif; }
}
