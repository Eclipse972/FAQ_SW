DROP VIEW Vue_menu;
CREATE VIEW Vue_menu AS
SELECT
	onglet,
	item,
	CONCAT('<li><a href="?onglet=',CAST(onglet AS CHAR),'&item=',CAST(item AS CHAR),		'">',texte,'</a></li>\n') AS code
FROM Items
WHERE item > 0 AND sous_item = 0
ORDER BY onglet ASC
