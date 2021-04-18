DROP VIEW IF EXISTS Vue_pagesConnexes;
CREATE VIEW Vue_pagesConnexes AS
SELECT
	alpha,
	beta,
	gamma,
	CONCAT('<a href="',URL,'" target="_blank">',Connexes.texte,'</a>') AS URL
FROM Squelette
INNER JOIN Connexes ON Squelette.ID = Connexes.Squelette_ID
ORDER BY alpha ASC, beta ASC, gamma ASC
