<?php


for ($i = 0; $i <= 100; $i++) {
   if ($i== 42) {
      echo "la plateforme<br/>";

   } elseif ($i <= 20) {
      echo "<i>$i</i><br/>";
   } elseif($i>= 25 && $i<=50){
       echo "<i>$i</i><br/>";  
    
     }else { 
         echo "$i<br />";
    }
}
?>