# génère le code html qui agrège image+texte
DROP VIEW IF EXISTS Vue_code_item;
CREATE VIEW Vue_code_item AS
SELECT
	alpha,
	beta,
	gamma,
	Lien(CONCAT(IF(imageMenu = '','',CONCAT('<img src="',imageMenu,'" alt="',texteMenu,'">')), #-- code de l'image
				texteMenu),
		alpha, beta, gamma) AS code
FROM Squelette
ORDER BY alpha ASC, beta ASC, gamma ASC
