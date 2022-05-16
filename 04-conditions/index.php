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
$age = 26;
if ($age < 18){
    echo "Vous n'avez pas le droit de voté car votre age et de : $age ans";

}
elseif( $age>=18 && $age<=25  )//elseif faut rajouter une condition
{
    echo 'Vous avez le droit de voté car votre age et entre 18 et 25';
}
else{
    echo 'Vous avez le droit de voté';
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

//avec la condition if/elseif/else afficher si on est la matin l'apres midi ou le soir
echo '<hr>';
//$h= date('H');
$h=13;
if($h<12)
{
    echo'vous etes le <strong>matin</strong>';
} 
elseif($h>=12 && $h<=18)
{
    echo"vous etes l' <strong>apres midi</strong>";
}
else
{
    echo'vous etes le <strong>soir</strong>';

}