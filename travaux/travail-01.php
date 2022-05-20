<?php
/*
Travail-01 :

    Réaliser un script qui convertit une température de degré Celsius °C en degré Fahrenheit °F
    Afficher les résultats dans un tableau html table , utiliser la fonction php round pour arrondir à l'unité supérieur
    Voici le tableau de conversion que vous devez avoir :

| °C | °F |
|--- |--- |
| 25 | 77 |
| 03 | 37.4 |
| 35 | 95 |
| 11 | 51.8 |
C*9/5+32

 */
echo '<table>';
$f='';
$trav=[25,03,35,11];
//print_r($trav);
echo '<tr>';
echo '<td>|</td>';
    echo'<td>°C</td>';
    echo '<td>|</td>';
    echo'<td>°F</td>';
    echo '<td>|</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>|</td>';
    echo'<td>---</td>';
    echo '<td>|</td>';
    echo'<td>---</td>';
    echo '<td>|</td>';
    echo '</tr>';
for ($i=0; $i < count($trav) ; $i++) 
{ 
    
$f=$trav[$i]*9/5+32;
echo'<tr>';
echo '<td>|</td>';
echo '<td>'.$trav[$i].'</td>';
echo '<td>|</td>';
echo '<td>'.$f.'</td>';
echo '<td>|</td>';
echo '</tr>';



} 

echo '</table>';
?>

