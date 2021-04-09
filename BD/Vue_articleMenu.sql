DROP VIEW IF EXISTS Vue_articleMenu;
CREATE VIEW Vue_articleMenu AS
SELECT
	alpha,
	beta,
	sous_item,
	dossier
FROM Items
INNER JOIN Articles ON Articles.ID = Items.article_ID
