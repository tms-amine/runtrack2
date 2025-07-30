<!DOCTYPE html>
<html>
<head>
    <title>Formulaire POST</title>
</head>
<body>

<form method="POST" action="">
    <label>Nom :</label>
    <input type="text" name="nom"><br><br>

    <label>Prénom :</label>
    <input type="text" name="prenom"><br><br>

    <label>Email :</label>
    <input type="text" name="email"><br><br>

    <input type="submit" value="Envoyer">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreArguments = count($_POST);
    echo "Le nombre d'argument POST envoyé est : $nombreArguments";
}
?>

</body>
</html>
