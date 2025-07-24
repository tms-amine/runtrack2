<?php
// Sauf : 26, 37, 88, 1111, 3233
// Chaque nombre est suivi d'un retour à la ligne <br />

// Liste des nombres à ignorer
$skip = [26, 37, 88, 1111, 3233];

for ($i = 0; $i <= 1337; $i++) {
    // Vérifie si $i est dans la liste des nombres à ne pas afficher
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233) {
        continue; // On saute cette itération
    }
    echo $i . "<br />";
}
?>
