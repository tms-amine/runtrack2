
<?php

$str = "Les choses que l'on possede finissent par nous posseder";
$inverse = "";


for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $inverse .= $str[$i];
}

echo "Chaîne inversée : " . $inverse;

?>
