<?php

$hauteur = 5; 


for ($i = 1; $i <= $hauteur; $i++) {

    for ($o = 1; $o <= $hauteur - $i; $o++) {
        echo"&nbsp;";
    }
for ($k = 1; $k <= 2 * $i - 1; $k++) {
echo "¤";
}
echo "<br/>";
}
?>
