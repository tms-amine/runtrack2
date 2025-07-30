<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// job01 : Afficher les nombres de 0 à 1337 avec <br>, et mettre 42 en gras et souligné

for ($i = 0; $i <= 1337; $i++) {
    if ($i === 42) {
        echo "<b><u>$i</u></b><br />";
    } else {
        echo "$i<br />";
    }
}
?>

    
</body>
</html>