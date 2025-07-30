<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>

<h2>Formulaire de Connexion</h2>

<form method="POST" action="">
    <label>Nom d'utilisateur :</label><br>
    <input type="text" name="username"><br><br>

    <label>Mot de passe :</label><br>
    <input type="password" name="password"><br><br>

    <input type="submit" value="Se connecter">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';

    if ($username === "John" && $password === "Rambo") {
        echo "<p><strong>C’est pas ma guerre</strong></p>";
    } else {
        echo "<p><strong>Votre pire cauchemar</strong></p>";
    }
}
?>

</body>
</html>
