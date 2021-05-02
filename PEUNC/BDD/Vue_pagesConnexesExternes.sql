#-- affiche les lien externes dans un nouvel onglet
DROP VIEW IF EXISTS Vue_pagesConnexesExternes;
CREATE VIEW Vue_pagesConnexesExternes AS
SELECT
	alpha,
	beta,
	gamma,
	CONCAT('<a href="',URL,'" target="_blank">',Connexes.texte,'</a>' ) AS URL
FROM Squelette
INNER JOIN Connexes ON Squelette.ID = Connexes.Squelette_ID
ORDER BY alpha ASC, beta ASC, gamma ASC
