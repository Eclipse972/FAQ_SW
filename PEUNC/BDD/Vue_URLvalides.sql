# génère la totalité des URLvalides du site
DROP VIEW IF EXISTS Vue_URLvalides;
CREATE VIEW Vue_URLvalides AS
SELECT
	alpha AS niveau1,
	beta AS niveau2,
	gamma AS niveau3,
	#-- / comme 2e et 3e séparateur provoque une erreur: les feuilles de styles ne sont plus respectées et les images ne s'affiche plus
	(SELECT CONCAT('>',ptiNom) FROM Squelette WHERE alpha = (SELECT niveau1) AND beta = (SELECT niveau2) AND gamma = 0 AND beta>0) AS texte2,
	(SELECT CONCAT('>',ptiNom) FROM Squelette WHERE alpha = (SELECT niveau1) AND beta = (SELECT niveau2) AND gamma = (SELECT niveau3) AND beta>0 AND gamma>0) AS texte3,
	CONCAT('/',(SELECT ptiNom FROM Squelette WHERE alpha = (SELECT niveau1) AND beta = 0 AND gamma = 0)
		,IF(ISNULL((SELECT texte2)),'',(SELECT texte2))
		,IF(ISNULL((SELECT texte3)),'',(SELECT texte3))
	) AS URL
FROM Squelette
ORDER BY niveau1 ASC, niveau2 ASC, niveau3 ASC
