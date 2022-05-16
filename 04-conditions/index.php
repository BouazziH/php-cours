<?php
/* les conditions < 
 > 
 >= 
 <= 
 == 
 ===
  != 
 !==
*///////////////////////////
// if/elseif/else
///////////////////////
$age = 20;
if ($age >= 18){
    echo 'Vous avez le droit de voté';
}
/* elseif($age<=25 || $age>=18)//elseif faut rajouter une condition
{
    echo 'Vous avez le droit de voté car votre age et entre 18 et 25';
} */
else{
    echo "Vous n'avez pas le droit de voté car votre age et de : $age ans";
}
echo ("<br>");
$heure = date('H').' heure';
echo $heure;
//if else afficher si on est le matin ou le soir
echo '<hr>';
$h= date('H');
if($h<18)
{
    echo'vous etes le <strong>matin</strong>';
} 
else
{
    echo'vous etes le <strong>soir</strong>';

}