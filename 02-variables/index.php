<?php
//variable constantes
define('HOST','localhost');
define('USER','root');
//echo USER;
 var_dump(USER);
// print_r(HOST);
$x=4;
$y=2;
$z=5;
$calcule=$x+$y;
echo $calcule;

// affectation
$a=5;
$b=7;
//$a +=6;
$a /= $b;
//echo '<br>'.$a;
//round c'est une fonction qui permet de specifier le nombre apres la vergule
echo '<br>'.round($a,3).'<br>';

//exercie
$PHT =172;
$TVA =20;
$PTT= $PHT+($PHT*$TVA/100);
echo '<br>le prix hors taxe :'. $PHT .' euros';
echo '<br>la TVA :'.$TVA.'%';
echo '<br>le prix TTC :'.'<strong>'.$PTT .' euros';
//calculer l'age d'une personne en renseignant son anne de naissance
$annee=1993;
$dateac=date('Y');
 $age=$dateac-$annee;

echo '<br> votre age est de:'.$age .'ans <br>';

//incrementation et decrementation
$num=0;
$num++;
echo $num.'<br>';
$t=10;
$t--;
echo "$t <br>";

?>