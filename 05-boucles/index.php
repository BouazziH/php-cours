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
    <h5>le nombre de jour est :<?php echo (365*($annee-1971)) ?></h5>
  </ul>

</body>
</html>