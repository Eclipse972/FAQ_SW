# génère le code html qui agrège image+texte
DROP VIEW IF EXISTS Vue_code_item;
CREATE VIEW Vue_code_item AS
SELECT
	alpha,
	beta,
	gamma,
	Lien(CONCAT(IF(imageMenu = '','',CONCAT('<img src="',imageMenu,'" alt="',texteMenu,'">')), #-- code de l'image
				texteMenu),
		alpha, beta, gamma) AS code,
	#-- essai
	CONCAT(
		'<a href="',(SELECT URL FROM Vue_URLvalides WHERE niveau1 = alpha AND niveau2 = beta AND niveau3 = gamma),'">',
		IF(imageMenu = '','',CONCAT('<img src="',imageMenu,'" alt="',texteMenu,'">')), #-- code de l'image si elle est définie
		texteMenu,'</a>'
	) AS code2
FROM Squelette
ORDER BY alpha ASC, beta ASC, gamma ASC
