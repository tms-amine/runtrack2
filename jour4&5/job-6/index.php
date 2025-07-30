<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> pair ou impair</title>
</head>
<body>

<h2>Test Pair ou Impair</h2>

<form method="GET" action="">
    <label>Entrez un nombre :</label><br>
    <input type="text" name="nombre"><br><br>
    <input type="submit" value="Tester">
</form>

<?php
if (isset($_GET['nombre'])) {
    $valeur = $_GET['nombre'];

    if (is_numeric($valeur)) {
        if ($valeur % 2 == 0) {
            echo "<p>Nombre pair</p>";
        } else {
            echo "<p>Nombre impair</p>";
        }
    } else {
        echo "<p>Veuillez entrer un nombre valide.</p>";
    }
}
?>

</body>
</html>
