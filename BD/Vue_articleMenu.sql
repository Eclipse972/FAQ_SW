DROP VIEW Vue_articleMenu;
CREATE VIEW Vue_articleMenu AS
SELECT
	onglet,
	item,
	sous_item,
	dossier
FROM Items
INNER JOIN Articles ON Articles.ID = Items.article_ID
