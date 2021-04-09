DROP VIEW IF EXISTS Vue_code_item;
CREATE VIEW Vue_code_item AS
SELECT
	alpha,
	beta,
	sous_item,
	Lien(CONCAT(IF(image = '','',CONCAT('<img src="',image,'" alt="',texte,'">')), #-- code de l'image
				texte),
		alpha, beta, sous_item) AS code
FROM Items
ORDER BY alpha ASC, beta ASC, sous_item ASC
