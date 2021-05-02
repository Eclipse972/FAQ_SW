#-- regroupement des liens internes et externes
DROP VIEW IF EXISTS Vue_pagesConnexes;
CREATE VIEW Vue_pagesConnexes AS
SELECT alpha, beta, gamma, URL FROM Vue_pagesConnexesExternes
UNION
SELECT alpha, beta, gamma, URL FROM Vue_pagesConnexesInternes
ORDER BY alpha ASC, beta ASC, gamma ASC
