<?php
/*
 Travail-00 :

    Créer un tableau php avec ses nombres : 27,15,34,379,248,5643,81,211,999,142,300,572
    Tester les nombres de ce tableau pour savoir si chaque nombre est pair ou impair (un nombre est pair si le resultat de la division par 2 est 0)
    Afficher les résultats sous forme de liste html ul comme ceci (xx,yy sont des nombres) :

* xx : pair
* yy : impaire
etc ...
 */
 
$tab0=[27,15,34,379,248,5643,81,211,999,142,300,572];

for ($i=0; $i < count($tab0) ; $i++) 
{ 
   // print_r($tab0[$i].',');
    if ($tab0[$i]%2==0 )
     {
        echo "$tab0[$i] : est paire .<br>";

    }
    else{
        echo "$tab0[$i] : est impaire .<br>";
    }

}