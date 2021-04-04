DROP VIEW IF EXISTS Vue_sous_menu;
CREATE VIEW Vue_sous_menu AS
SELECT onglet, item, sous_item, code
FROM Vue_code_item
WHERE item > 0 AND sous_item > 0
