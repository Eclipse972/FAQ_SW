# automatise la création des liens
DROP FUNCTION IF EXISTS Lien;
CREATE FUNCTION Lien(texte TEXT, alpha INT, beta INT, gamma INT) RETURNS TEXT
RETURN CONCAT(	'<a href="?alpha=',CAST(alpha AS CHAR),
				IF(beta > 0,CONCAT('&beta=',CAST(beta AS CHAR)),''),
				IF((beta > 0 AND gamma > 0),CONCAT('&gamma=',CAST(gamma AS CHAR)),''), #-- permet de ne pas imbriquer les CONCAT
				'">',texte,'</a>')
