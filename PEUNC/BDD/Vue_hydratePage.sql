# Vuecontenant toutes les donnés pour hydrater une page
DROP VIEW IF EXISTS Vue_hydratePage;
CREATE VIEW Vue_hydratePage AS
SELECT
	alpha,
	beta,
	gamma,
	#-- variables d'hydratation
	CSS,
	titrePage,
	logoPage,
	entetePage
FROM Squelette
INNER JOIN ClassePage ON ClassePage.ID = Squelette.classePageID
ORDER BY alpha ASC , beta ASC , gamma ASC
