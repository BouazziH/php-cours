<?php
// tableau index
$tableau= array();
//deux methode pour declarer
$tableau=[] ;
//remplir un tableau
$tableau2= array('lundi','mardi',10,55,true);

$tableau=[false,'test',5.20,[66,20,13]] ;
echo '<pre>';

//ajouter une variable au tableau
array_push($tableau,'voiture');//une manierre pour ajouter une valeur sur le tableau
array_push($tableau,'voiture1','valeur2');//on peut ajouter meme plusieur valeurs 
$tableau[]='hamza';
$tableau[]='titre se sejour';
$tableau[]='stage';
$tableau[]="billet d'avion";
//echo count($tableau); //pour s'avoir combien d'element sur mon tableau
//echo var_dump($tableau); // afichage du tableau
echo '<hr>';


//print_r($tableau);

//pour afficher une valeur par index sur le tbleau
//echo $tableau[4];
 //EXERCICE afficher la moyenne des note
$note=[12,5,16,7];

$n1 = $note[0];
$n2 = $note[1];
$n3 = $note[2];
$n4 = $note[3];
$moyenne = ($n1+$n2+$n3+$n4)/4;
//echo '<br>'.$moyenne;
$tab3 = array_merge($tableau2,$tableau,$note); // MERGE assemble plusieurs tableau 
////var_dump($tab3);


// boucle FOR
for ($i=0; $i <count($tableau2) ; $i++) 
{ 
    //echo $tableau2[$i].'<br>';
}

$fruit = ['banane','ananas','pomme','fraise'];
$html = ''; // declarer une variable vide
for ($i=0; $i <count($fruit) ; $i++) { 
   $html .= $fruit[$i].','; // remplir la variable avec des les valeur de i en concatenation 
}
//echo $html;

foreach($fruit as $value){
//echo $value.'<br>';

}

//EXECICE
//construire un tableau a l'aide de la boucle for contenant des nombres de 34 a78;
$t='';
for ($i=34; $i <=78 ; $i++) { 
    $t.=$i.',';
}

echo $t;


echo '</pre>';





?>