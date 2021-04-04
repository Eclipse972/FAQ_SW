DROP VIEW IF EXISTS Vue_onglets;
CREATE VIEW Vue_onglets AS
SELECT onglet, code
FROM Vue_code_item
WHERE item = 0 AND sous_item = 0
