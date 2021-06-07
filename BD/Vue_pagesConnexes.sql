#-- regroupement des liens internes et externes
DROP VIEW IF EXISTS Vue_pagesConnexes;
CREATE VIEW Vue_pagesConnexes AS
	#-- liens externes
	SELECT	alpha, beta, gamma, CONCAT('<a href="',URL,'" target="_blank">',Connexes.texte,'</a>' ) AS URL
	FROM Squelette
	INNER JOIN Connexes ON Squelette.ID = Connexes.Squelette_ID
UNION
	#-- liens internes
	SELECT
		Vue_URLvalides.niveau1 AS alpha,
		Vue_URLvalides.niveau2 AS beta,
		Vue_URLvalides.niveau3 AS gamma,
		CONCAT('<a href="',Vue_URLvalidesBis.URL,'">',ConnexesInternes.texte,'</a>' ) AS URL
	FROM ConnexesInternes
	INNER JOIN  Vue_URLvalides ON Vue_URLvalides.ID = ConnexesInternes.squelette_ID
	INNER JOIN  Vue_URLvalides AS Vue_URLvalidesBis ON Vue_URLvalidesBis.ID = ConnexesInternes.lien
ORDER BY alpha ASC, beta ASC, gamma ASC
