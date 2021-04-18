DROP VIEW IF EXISTS Vue_pagesConnexes;
CREATE VIEW Vue_pagesConnexes AS
SELECT
	alpha,
	beta,
	gamma,
	CONCAT('<a href="',URL,'" ',
		IF(LEFT(URL,4) = 'http','target="_blank"',''), # liens externes dans un nouvel onglet
		'>',Connexes.texte,'</a>'
	) AS URL
FROM Squelette
INNER JOIN Connexes ON Squelette.ID = Connexes.Squelette_ID
ORDER BY alpha ASC, beta ASC, gamma ASC
