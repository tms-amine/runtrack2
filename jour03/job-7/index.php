<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$len = mb_strlen($str, 'UTF-8');
$newStr = "";

// On parcourt tous les caractères sauf le dernier
for ($i = 0; $i < $len - 1; $i++) {
    $newStr .= mb_substr($str, $i + 1, 1, 'UTF-8');
}

// Pour le dernier caractère, on prend le premier caractère original
$newStr .= mb_substr($str, 0, 1, 'UTF-8');

echo "Résultat : " . $newStr;

?>
