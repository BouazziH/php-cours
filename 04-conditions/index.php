<?php
/* les conditions 
< inferieur
 > superieur
 >= superieur ou egale
 <= inferieur ou egale
 == il fait le test  sur la valeur
 ===il fait le teste sur la valeur et le type
 != fait la condition sur le type
 !== fait la condition sur la valeur
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
    echo'on est le <strong>matin</strong>';
} 
else
{
    echo'on est le <strong>soir</strong>';

}

//avec la condition if/elseif/else afficher si on est la matin l'apres midi ou le soir
echo '<hr>';
//$h= date('H');
$h=21;
if($h<12)
{
    echo'on est le <strong>matin</strong>';
} 
elseif($h>=12 && $h<=18)
{
    echo"on est l' <strong>apres midi</strong>";
}
else
{
    echo'on est le <strong>soir</strong>';

}
echo '<hr>';
$a =20;
$b =5;
$c1 =10;
$c2 ='10';
if ($b !=3)
{
    echo "la variable $b n'est pas egale a 3";
}
echo '<hr>';
//************************************************** */
//== il fait le test  sur la valeur
 //===il fait le teste sur la valeur et le type
/*/************************************* */
if($c1==$c2)
{
    echo"message testee $c1 == $c2";
}
echo '<hr>';
echo '<br>';

// != fait la condition sur le type
// !== fait la condition sur la valeur
if($c2 !=10)
{
    echo'teste !=';
}

echo '<hr>';
echo '<br>';
///************** */
//switch/case
$couleur ='vert';

switch ($couleur) {
    case 'rouge':
        echo 'votre couleur favorite est le rouge';
        break;
    case "blue" :
        echo 'votre couleur favorite est le blue';
        break;
        case "yellow" :
            echo 'votre couleur favorite est le yellow';
            break;
    default:
       echo "votre couleur favorite est ni le rouge ni le blue ni le jaune";
        break;
}
echo '<hr>'; 
echo '<br>';
//==============
// empty /isset
//==============
$var1=02;
$var2='';
// empty test si la valeur est vide :0,'',false,null ou non definit

if(empty($var1))
{
echo"le var2 est vide";

}
else
{
    var_dump(empty($var1));
}
echo '<hr>'; 
echo '<br>';
//*************ISSET */
//ISSET verifie si la variable est differente de NULL
if(isset($var2))
{
    echo"test";
}
echo '<hr>'; 
echo '<br>';
$articles= ["","article 1",null];
// faire une codition sur ce tableau :tester l'article a l'index 0 si il est non vide
 //, si non afficher "il n'ya pas d'articles"
// cree une branch article, que vous fusionerez avec MAIN l'orsque lexercice est fini
print_r($articles);
echo '<hr>'; 
echo '<br>';


  
   if(!empty($articles[1]))
{
    echo $articles[1];

}
else
echo "ya pas d'article vide";







?>