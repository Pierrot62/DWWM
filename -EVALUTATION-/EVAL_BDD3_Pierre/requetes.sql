1 - Tous les détails de tous les clients.

SELECT idClient, NomClient,VilleClient FROM clients

2 - Les numéros et les noms des produits de couleur rouge et de poids supérieur à 2000.

SELECT `IdProduit`,`NomProduit`FROM produits WHERE `CouleurProduit`= "Rouge" AND `PoidsProduit`> 2000

3 - Les représentants ayant vendu au moins un produit.

SELECT representants.IdRepres FROM representants INNER JOIN ventes ON representants.IdRepres = ventes.IdRepres WHERE quantité >= 1 GROUP BY IdRepres

4 - Les noms des clients de Lyon ayant acheté un produit pour une quantité supérieure à 180.

SELECT NomClient FROM clients INNER JOIN ventes ON clients.IdClient = ventes.IdClient WHERE quantité > 180 AND clients.VilleCLient = "Lyon" GROUP BY NomClient

5 - Les noms des représentants et des clients à qui ces représentants ont vendu un produit de couleur rouge pour une quantité supérieure à 100.

SELECT NomRepres, NomClient FROM representants INNER JOIN ventes ON representants.IdRepres = ventes.IdRepres INNER JOIN clients ON clients.IdClient = ventes.IdClient INNER JOIN produits ON ventes.IdProduit = produits.IdProduit WHERE produits.CouleurProduit = "rouge" AND quantité > 100 GROUP BY NomClient

6 - La liste de tous les noms des clients et les produits qu’ils ont achetés

SELECT NomClient, NomProduit, Quantité FROM clients INNER JOIN ventes ON clients.IdClient = ventes.IdClient INNER JOIN produits ON clients.IdClient = ventes.IdClient

7 - Le nombre de produits vendus

SELECT nomproduit, quantité FROM produits INNER JOIN ventes ON produits.IdProduit = ventes.IdProduit GROUP BY NomProduit

8 - Créer une vue pleine entre clients et ventes
CREATE VIEW ClientVentes AS SELECT
    clients.NomClient,
    clients.VilleClient,
    ventes.*
    FROM clients
INNER JOIN ventes ON clients.IdClient = ventes.IdClient

9 - Créer une vue gauche entre clients et ventes
CREATE VIEW ClientVentesGauche AS SELECT
    clients.NomClient,
    clients.VilleClient,
    ventes.*
    FROM clients
LEFT JOIN ventes ON clients.IdClient = ventes.IdClient




