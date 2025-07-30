<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

for ($i = 0; $i < strlen($str); $i++) {
    
    if (in_array(strtolower($str[$i]), $voyelles)) {
        echo $str[$i];
    }
}
?>
