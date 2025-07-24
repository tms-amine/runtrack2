<?php
function estPremier($n) {
    if ($n < 2) {
        return false; // 0 et 1 ne sont pas premiers
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false; // Divisible par i → pas premier
        }
    }
    return true; // Aucun diviseur trouvé → premier
}

for ($num = 2; $num <= 1000; $num++) {
    if (estPremier($num)) {
        echo $num . "<br />";
    }
}
?>
  