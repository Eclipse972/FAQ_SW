DROP VIEW IF EXISTS Vue_onglets;
CREATE VIEW Vue_onglets AS
SELECT
	onglet,
	CONCAT('\t\t<li>',
		Lien(CONCAT(IF(image = '','',CONCAT('<img src=\"',image,'" alt="',texte,'">')), #-- code de l'image
					texte),
			onglet, item, sous_item),'</li>\n'
	) AS code
FROM Items
WHERE item = 0 AND sous_item = 0
ORDER BY onglet ASC
