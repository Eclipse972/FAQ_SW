DROP VIEW IF EXISTS Vue_articleMenu;
CREATE VIEW Vue_articleMenu AS
SELECT
	alpha,
	beta,
	gamma,
	dossier
FROM Squelette
INNER JOIN Articles ON Articles.ID = Squelette.article_ID
