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
$t=[];
for ($i=34; $i <=78 ; $i++) { 
  array_push($t,$i);
}

//print_r($t);// pour afficher le tableau

//**********************************************************/
// tableaux associatifs
//**********************************************************/
$fruits= ['banane' =>'jaune','pomme'=>'rouge','ananas'=>'vertjaune'];
print_r($fruits);
echo "la couleur de la pomme est : ".$fruits['pomme'];
echo '<br>'."la longeur de tableau fruits est de :".sizeof($fruits);//sizeof permet de savoir la longeur de tableau


$age=['hamza'=>28,'sonia'=>52,'fabien'=>26,'jose'=>56,'omar'=>32];

echo '<br>'.sizeof($age).'<br>';
$chaine=implode('-',$age);// implode prend les valeurs de tableau et il les separent avec - sous chaine de caractere
//$ages2 = explode('-',$chaine).'<hr>';//explode va te cree un tableau on separant les valeur la ou il trouve le -
//print_r($ages2).'<hr>';
echo $chaine.'<br>';
//*** pour ajouter d'un element avec ca valeur au tableau 
$age['hakeem']=8;// **********
//********pour modifier une valeur f
$age['hakeem']=9;
print_r($age);

foreach($age as $clef=>$value){
echo $clef . ' a '. $value .' ans <br>';
}


$html1 = '<ul>';
foreach($age as $key => $value){
    $html1 .='<li>'. $key . ' a '. $value .' ans </li>';
    }
    $html1.='</ul>';
    echo $html1;

//********************* EXERCICE*/
// cree un tableau note avec un prenom =>note
//afficher  une liste ul des eleves et leur notes
// marc a obtenu 15/20

$NoteExam = ['eleve 1'=>16,'eleve 2'=>7,'eleve 3'=>15,'eleve 4'=>11,'eleve 5'=>10];
$var = '<hr>'.'<ul>';

foreach($NoteExam as $key => $value)
{
$var .='<li>' . $key . ' a obtenu ' . $value.'/20 </li>'; 

}
$var.='</ul>';
echo $var.'<hr>';


$tt=array_merge($NoteExam,$age);//assembler deux tableaux
print_r($tt);
echo'<hr>';
$planetes= ['mars','terre','pluton','venus','jupiter'];
//asort($planetes);//fonction qui permet d'afficher en order alphabitique valeur
//arsort($planetes);// order decroissant valeur
//krsort($planetes); // order decroissant des index
//ksort($planetes);//ordre croissant des index 
rsort($planetes);
print_r ($planetes);


//***********EXERCICE */
// Créer un tableau avec les mois de l'annnée
// - afficher la valeur de la 5 ligne de ce tableau
// - afficher la vleur de l'index 10
// - modifier le mois d'avril en le mettant en majuscule
//***************************/
// Créer un tableau associatif des departements de la region normandie
// avec le nom du departement en valeur et son code postale en index
// - afficher la valeur de l'index 27
// - ajouter le departement et code postale de la ville de Brest
// - parcourir le tableau des departements et afficher chaque departement dans un parapraphe p de la façon suivante :
// Le 'nom du departement' possede le code postale suivant :  'code pastale'

//exe1
$mois= ['janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre'];

print_r('<br> la valeur de la 5 eme ligne :'.$mois[4]);
print_r('<br> la valeur du 10 eme index :'.$mois[10].'<br>');
//modif
$mois[3]= 'AVRIL';

print_r($mois);

//exe2

$region=[14=>'Cavaldos',27=>'Eure',50=>'Manche',61=>'Orne',76=>'Seine-Maritime'];
echo '<hr>';

echo '<br>';
print_r($region[27]);
echo '<br>';
$region[29]='Brest';
echo '<br>';
print_r($region);

$z='';
foreach($region as $key => $value)
{
$z .='<p>' . $value . ' possede le code postale suivant: ' . $key.' </p><br>'; 

}

echo $z;




















echo '</pre>';





?>