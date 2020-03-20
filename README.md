Evaluation Poo

A l'aide du MVC présent sur ce repository, vous devez reproduire le fonctionnement d'un panier.

Pour ce faire, vous allez créer 2 tables:

Une table produits(id, nom, quantite, tarif)
Une table lignesPanier(id, produit_id, quantite, etat(boolean), savedAt(datetime))

Vous créerez une page index qui affiche la liste des produits existants avec la quantité en stock.
Si la quantité est de 0, indiquer le message suivant "rupture de stock".
Un formulaire permettant d'ajouter un nouveau produit avec sa quantité max.

Lorsqu'on clique sur un produit, on arrive sur la page produit qui affiche les informations du produit en question ainsi qu'un formulaire permettant d'ajouter le produit avec une certaine quantité dans le panier. On attend un select pour la quantité qui empechera l'utilisateur de commander une quantité supérieure à celle qu'il y a en stock.

une page panier qui affiche un tableau des lignesPanier qui ont un etat à false. Pour chaque ligne on ajoute un bouton supprimer qui supprime la ligne et réactualise l'affichage du panier.

Sous ce tableau on a un bouton payer qui passe le statut à true (payé).

Vous avez le droit à 2 joker chacun c'est-à-dire que je peux vous débugguer 2 fois. 
Pour ce faire, on passera sur discord pour ne pas déranger tout le monde.

Je vous laisse 3h pour réaliser le projet(adaptable). Vous m'enverrez votre projet par mail (alexandre.gaillot@jedy.fr) ou par github (alexgaill).

Bon courage!