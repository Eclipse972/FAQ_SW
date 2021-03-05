DROP VIEW IF EXISTS Vue_menu;
CREATE VIEW Vue_menu AS
SELECT
	onglet,
	item,
	CONCAT('\t\t<li>',Lien(texte, onglet, item, sous_item),'</li>\n') AS code
FROM Items
WHERE item > 0 AND sous_item = 0
ORDER BY onglet ASC, item ASC
