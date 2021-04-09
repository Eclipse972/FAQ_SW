DROP VIEW IF EXISTS Vue_code_item;
CREATE VIEW Vue_code_item AS
SELECT
	alpha,
	beta,
	gamma,
	Lien(CONCAT(IF(image = '','',CONCAT('<img src="',image,'" alt="',texte,'">')), #-- code de l'image
				texte),
		alpha, beta, gamma) AS code
FROM Items
ORDER BY alpha ASC, beta ASC, gamma ASC
