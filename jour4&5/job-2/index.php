<?php
if (!empty($_GET)) {
    echo '<table border="1">';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';
    foreach ($_GET as $key => $value) {
        echo '<tr>';
        echo '<td>' .$key.'</td>';
        echo '<td>' .$value.'</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>

<form method="GET" action="">
  <input type="text" name="prenom" placeholder="Prénom">
  <input type="text" name="nom" placeholder="Nom">
  <input type="submit" value="Envoyer">
</form>