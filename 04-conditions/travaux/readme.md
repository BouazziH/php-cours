# Travaux

- Réasliser chaque travail dans un fichier portant le nom (écrit en minuscule) de l'énoncé du travail : `travail-00.php`
- Travaller dans une branche git que vous nommerez `travaux` , vous devrez faire des commits fréquements (atomiques) , mettez cette branche `travaux` en ligne (`push`) : `git push origin travaux`


## Travail-00 :

- Créer un tableau php avec ces nombres : 27,15,34,379,248,5643,81,211,999,142,300,572
- Tester les nombres de ce tableau pour savoir si chaque nombre est pair ou impair (un nombre est pair si le reste de la division par 2 est 0)
- Afficher les résultats sous forme de liste html `ul` comme ceci (xx,yy sont des nombres) :

```
* xx : pair
* yy : impaire
etc ...
```

## Travail-01 : 

- Réaliser un script qui convertit une température de degré Celsius °C en degré Fahrenheit °F 
- Afficher les résultats dans un tableau html `table` , utiliser la fonction php `round` pour arrondir à l'unité supérieur
- Voici le tableau de conversion que vous devez avoir :

```
| °C | °F |
|--- |--- |
| 25 | 77 |
| 03 | 37.4 |
| 35 | 95 |
| 11 | 51.8 |

```

## Travail-02 :

- Travaller avec le fichier json `persons.json` dans le dossier `Travaux`
- Afficher le(a) deuxieme ami(e) de Raymond Jimenez dans un titre html `<h3>`
- Afficher la couleur des yeux de Ball Shaffer en gras html `strong` sous la forme d'une phrase : `La couleur des yeux de Ball Shaffer est :`
- Afficher dans une balise html `article` dans l'ordre suivant :
	- image de la personne dans une balise html `img`
	- Nom : le nom de la personne
	- Age: age de la personne
	- Couleur des yeux : la couleur des yeux de la personne
	- Email: email de la personne
	- Age: age de la personne
	- Fruit favori : fruit favori de la personne
	- Si isActive est à true : afficher ACTIF
	- Tags : afficher tous les tags de la personne séparé d'une virgule
	- Ne pas afficher la derniere la deniere virgule de tous les tags
	- Chaque personne sera séparé d'une ligne horizontale html `<hr>` 

Vous trouverez une capture du resultat attendu.
