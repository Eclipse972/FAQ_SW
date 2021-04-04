DROP VIEW IF EXISTS Vue_code_item;
CREATE VIEW Vue_code_item AS
SELECT
	onglet,
	item,
	sous_item,
	CONCAT('\t\t<li>',
		Lien(CONCAT(IF(image = '','',CONCAT('<img src=\"',image,'" alt="',texte,'">')), #-- code de l'image
					texte),
			onglet, item, sous_item),'</li>\n'
	) AS code
FROM Items
ORDER BY onglet ASC, item ASC, sous_item ASC
