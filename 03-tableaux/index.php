<?php
// tableau index
$tableau= array();
//deux methode pour declarer
$tableau=[] ;
//remplir un tableau
$tableau= array('lundi','mardi',10,55,true);

$tableau=[false,'test',5.20,[66,20,13]] ;
echo '<pre>';

//ajouter une variable au tableau
$tableau[]='hamza';
echo var_dump($tableau);
//pour afficher une valeur par index sur le tbleau
echo $tableau[4];
 //afficher la moyenne des note
$note=[12,5,16,7];

$n1=$note[0];
$n2=$note[1];
$n3=$note[2];
$n4=$note[3];
$moyenne=($n1+$n2+$n3+$n4)/4;
echo '<br>'.$moyenne;



echo '</pre>';
?>