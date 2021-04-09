DROP VIEW IF EXISTS Vue_classePage;
CREATE VIEW Vue_classePage AS
SELECT
	alpha,
	beta,
	sous_item,
	nom
FROM Items
INNER JOIN ClassePage ON ClassePage.ID = Items.classePageID
