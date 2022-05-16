<?php
//Loops
//while
$j=0;
while ($j <= 10) {
  
    echo "$j-";
      $j++;
}
// avec une boucle  while afficher toute les annees de1970 a aujourdhui dans une liste ul 
// afficher le nombre de jour de puis 1970
// travailler dans une branche annees
echo "<hr>";
echo "<br>";
$annee=1970;
/* while ($annee <= date('Y')) {
  
    echo "<ul>$annee</ul>";
      $annee++;
} */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <?php $annee=1970;
while ($annee <= date('Y')) { ?>
     
        <?php   echo "<li>$annee</li>";
      $annee++;?>
        
      
    <?php } ?>
    <h5>le nombre de jours est de :<?php echo (365*($annee-1971)) ?></h5>
  </ul>

</body>
</html>
<?php

///Do WHILE
echo "<hr>";
echo "<br>";
$y =0;
do {
    echo "Nombre : $y <br>";
    $y++;
} while ($y <= 10);
//====================
//********foreach
//==================
echo "<hr>";
echo "<br>";
$tabs =[1,2,3,4,5,6];
foreach ($tabs as $tab) {
   echo "Nombre $tab  <br>";
}
echo "<hr>";
echo "<br>";
$tabs2 =["article1","article2","article3"];
foreach ($tabs2 as $index =>$article) {
    echo "$index - $article <br>";
 }
echo "<hr>";
echo "<br>";
$tabs3 =["nom"=>"durand","prenom"=>"michel","age"=>28];

foreach ($tabs3 as $key =>$value) {
    echo "$key : $value <br>";
 }










?>