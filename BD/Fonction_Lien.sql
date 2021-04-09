DROP FUNCTION IF EXISTS Lien;
CREATE FUNCTION Lien(texte TEXT, alpha INT, beta INT, sous_item INT) RETURNS TEXT
RETURN CONCAT(	'<a href="?alpha=',CAST(alpha AS CHAR),
				IF(beta > 0,CONCAT('&beta=',CAST(beta AS CHAR)),''),
				IF((beta > 0 AND sous_item > 0),CONCAT('&sous_item=',CAST(sous_item AS CHAR)),''), #-- permet de ne pas imbriquer les CONCAT
				'">',texte,'</a>')
