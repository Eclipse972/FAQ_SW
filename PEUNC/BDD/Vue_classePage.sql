# permet de trouver la classe de chaque page
DROP VIEW IF EXISTS Vue_classePage;
CREATE VIEW Vue_classePage AS
SELECT
	alpha,
	beta,
	gamma,
	nom
FROM Squelette
INNER JOIN ClassePage ON ClassePage.ID = Squelette.classePageID
