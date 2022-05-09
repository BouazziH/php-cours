<h1> un titre</h1>
<?php 
//echo/print
echo'test en php',' autre teste <br>';
//print c'est le moin utiliser en php
print' texte en php avec print <br>';
// declaration variable
$nom = 'Bouazzi';
$age = 28;
echo $nom,' ', $age;
//differente maniere de declaration de variable
$camelCase ='une variable en camel case';
$snake_case = 'une variable en snake case';
$pascaleCase = 'une variable pascale case';
$var = 'une variable en kebab-case';
//string
$nom='abc';
//nombre
$int = 10;
//float 
$note=15.36;
//bool
$var=true;
$var=false;
//array/objet
$tableau=['groupe',21,5,23,false];
//null
$var=null;

// simple/double guillemets
$message= "<br>Aujroud'hui";
$mess ='aujourd\'hui';
echo $mess;

$txt = 'bonjou';
echo '$txt tout le monde';
echo "$txt tout le mondss";
//concatenation
$fruit1='kiwi';
$fruit1='pomme';
$fruit2='poire';
$fruit2.='fraise';
echo '<br>'.$fruit1.' '.$fruit2,'<br>';
echo $fruit2

?>
<!-- on peut meme faire un switch entre html et php mais faut
fermer le php et apre pour retourner faut le recree -->
<?php
$titre ='test de ce truc la ';
?>
<h1><?php echo $titre?> </h1>
<!-- c'est le racourci ?= -->
<h1><?= $titre?> </h1>
<!-- exercice  -->
<?php

$data1='Hello';
$data2='les terriens';
$data3='Mars';
$data4='planete';
echo '<p>'.$data1 .', '.$data2.'.Je viens de la '.$data4.' '.$data3.'.'.'</p>'

?>

<p><?=$data1 .', '.$data2.'.Je viens de la '.$data4.' '.$data3.'.'?></P>



