<?php
/*
Travail-02 :

    Travaller avec le fichier json persons.json dans le dossier Travaux
    Afficher le(a) deuxieme ami(e) de Raymond Jimenez dans un titre html <h3>
    Afficher la couleur des yeux de Ball Shaffer en gras html strong sous la forme d'une phrase : La couleur des yeux de Ball Shaffer est :
    Afficher dans une balise html article dans l'ordre suivant :
        image de la personne dans une balise html img
        Nom : le nom de la personne
        Age: age de la personne
        Couleur des yeux : la couleur des yeux de la personne
        Email: email de la personne
        Age: age de la personne
        Fruit favori : fruit favori de la personne
        Si isActive est à true : afficher ACTIF
        Tags : afficher tous les tags de la personne séparé d'une virgule
        Ne pas afficher la derniere la deniere virgule de tous les tags
        Chaque personne sera séparé d'une ligne horizontale html <hr>

Vous trouverez une capture du resultat attendu.
 */
$jasonf=file_get_contents("persons.json");

$persons=json_decode($jasonf,true);
echo "<pre>";
//var_dump($tab);
foreach ($persons as $key => $value) {
    
    if($value['name'] === 'Raymond Jimenez')
    {
       var_dump($value['friends'][1]['name']) ;
    }
 
}
echo '<hr>';
foreach ($persons as $key => $value) {
    
    if($value['name'] === 'Ball Shaffer')
    {
     echo 'La couleur des yeux de Ball Shaffer est : <strong>'. $value['eyeColor'] ;
    }
    
}
echo '<hr>';


foreach ($persons as $key => $value)
 {
    echo '<img src="' . $value['picture'] . '"alt="picture">';    
 echo '<p>'.'Nom :'.$value['name'].'</p>';  
 echo '<p>'.'Age :'.$value['age'].'</p>';  
 echo '<p>'.'Couleur des yeux'.$value['eyeColor'].'</p>';  
 echo '<p>'.'Email :'.$value['email'].'</p>';  
 echo '<p>'.'fruit prefere :'.$value['favoriteFruit'].'</p>';  
 echo'<p>';
 if ($value['isActive'] === true)  echo 'ACTIF'. '</p>'; 
 echo '<p>';
 $tag=implode(",", $value['tags']);
 echo 'Tags: '.$tag.'</p>';

}
echo '<hr>';

echo "</pre>";
//$date_jour = $tab->{'friends'}->{'favoriteFruit'};
//echo $date_jour;