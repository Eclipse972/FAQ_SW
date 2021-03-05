DROP FUNCTION Lien;
CREATE FUNCTION Lien(texte TEXT, onglet INT, item INT, sous_item INT) RETURNS TEXT
RETURN CONCAT(	'<a href="?onglet=',CAST(onglet AS CHAR),
				IF(item > 0,CONCAT('&item=',CAST(item AS CHAR)),''),
				IF((item > 0 AND sous_item > 0),CONCAT('&sous_item=',CAST(sous_item AS CHAR)),''), #-- permet de ne pas imbriquer les CONCAT
				'">',texte,'</a>')
