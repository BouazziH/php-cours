<?php

use LDAP\Result;
/* 
  $Result= '<ul>';
for ($i= -128; $i <= 1257 ; $i++) { 
 

     if ($i % 7 === 0 )
      {
         $Result.= "<li>$i est un multiple de 7</li>";
 
     }
          
}
$Result.= '</ul>';
echo $Result; */

//*****while */
$res = '<ul>';
$a = -128;
while ($a <= 1257) {
    
    if ($a % 7 === 0 )
    {
       $res .= "<li>$a est un multiple de 7</li>";

   }
$a++;
}
$res.= '</ul>';
echo $res;




