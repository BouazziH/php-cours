<?php
function afficherMessage($prenom)
{
   echo "<p>Bonjour $prenom</p>";
}
afficherMessage("Hamza");
////**** */
function afficherMessage1($prenom)
{
    $res = "<p>Bonjour $prenom</p>";
    return $res;
}
$display = afficherMessage1("toto");
echo $display;

////*****exercice */
// : float ca definie le type de la function
// int | float c'est pour preciser que le type peut etre int ou bien float
function calculerSurface(int | float $a,float $b) : float
{
   return  abs($a * $b);
    

}
$resultat = calculerSurface(5.6,-5);
echo $resultat;

///////////
// pour passer du pouce en metre c'st le pouce /39.37
/*Hauteur = =9/(337^0,5) * Diagonale,
Largeur = =16/(337^0,5) * Diagonale.*/
function calculetLl(float $diagonale) : string
{
$diagonale
}