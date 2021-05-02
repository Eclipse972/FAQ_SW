#-- regroupement des liens internes et externes
DROP VIEW IF EXISTS Vue_pagesConnexes;
CREATE VIEW Vue_pagesConnexes AS
	#-- liens externes
	SELECT	alpha, beta, gamma, CONCAT('<a href="',URL,'" target="_blank">',Connexes.texte,'</a>' ) AS URL
	FROM Squelette
	INNER JOIN Connexes ON Squelette.ID = Connexes.Squelette_ID
UNION
	#-- liens internes
	SELECT alpha, beta, gamma, URL FROM Vue_pagesConnexesInternes
ORDER BY alpha ASC, beta ASC, gamma ASC
