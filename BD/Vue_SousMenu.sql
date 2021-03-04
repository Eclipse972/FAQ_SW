DROP VIEW Vue_sous_menu;
CREATE VIEW Vue_sous_menu AS
SELECT
	onglet,
	item,
	sous_item,
	CONCAT('<li><a href="?',
				'onglet=',CAST(onglet AS CHAR),
				'&item=',CAST(item AS CHAR),
				'&sous_item=',CAST(sous_item AS CHAR),
			'">',texte,'</a></li>\n') AS code
FROM Items
WHERE item > 0 AND sous_item > 0
ORDER BY onglet ASC, item ASC, sous_item ASC
