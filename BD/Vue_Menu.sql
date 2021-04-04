DROP VIEW IF EXISTS Vue_menu;
CREATE VIEW Vue_menu AS
SELECT onglet, item, code
FROM Vue_code_item
WHERE item > 0 AND sous_item = 0
