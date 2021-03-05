DROP VIEW IF EXISTS Vue_sous_menu;
CREATE VIEW Vue_sous_menu AS
SELECT
	onglet,
	item,
	sous_item,
	CONCAT('\t\t\t<li>',Lien(texte, onglet, item, sous_item),'</li>\n') AS code
FROM Items
WHERE item > 0 AND sous_item > 0
ORDER BY onglet ASC, item ASC, sous_item ASC
