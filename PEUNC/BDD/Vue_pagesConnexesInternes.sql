#-- affiche les liens internes de manière humainement compréhensible
DROP VIEW IF EXISTS Vue_pagesConnexesInternes;
CREATE VIEW Vue_pagesConnexesInternes AS
SELECT
	Vue_URLvalides.niveau1 AS alpha,
	Vue_URLvalides.niveau2 AS beta,
	Vue_URLvalides.niveau3 AS gamma,
	Vue_URLvalides.URL AS départ,
	Vue_URLvalides.ID AS départID,
	Vue_URLvalidesBis.URL AS arrivée,
	Vue_URLvalidesBis.ID AS arrivéeID,
	CONCAT('<a href="',Vue_URLvalidesBis.URL,'">',ConnexesInternes.texte,'</a>' ) AS URL
FROM ConnexesInternes
INNER JOIN  Vue_URLvalides ON Vue_URLvalides.ID = ConnexesInternes.squelette_ID
INNER JOIN  Vue_URLvalides AS Vue_URLvalidesBis ON Vue_URLvalidesBis.ID = ConnexesInternes.lien
ORDER BY alpha ASC, beta ASC, gamma ASC
