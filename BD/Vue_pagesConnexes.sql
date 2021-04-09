DROP VIEW IF EXISTS Vue_pagesConnexes;
CREATE VIEW Vue_pagesConnexes AS
SELECT
	alpha,
	beta,
	gamma,
	CONCAT(
		'<a href="',
		IF (Connexes.type = 1,'http://help.solidworks.com/2015/french/SolidWorks/',''),
		URL,
		'" title="',
		CASE Connexes.type
			WHEN 0 THEN 'Lien interne'
			WHEN 1 THEN 'Aide de SolidWorks 2015 en ligne'
			ELSE 'Autre type de lien'
		END,
		'" ',
		IF (Connexes.type = 0,'','target="_blank"'),
		'>',Connexes.texte,'</a>'
	) AS URL
FROM Items
INNER JOIN Connexes ON Items.article_ID = Connexes.article_ID
ORDER BY alpha ASC, beta ASC, gamma ASC, type ASC
