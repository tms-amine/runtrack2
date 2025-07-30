<?php
// Déclaration des variables de types primitifs
$boolVar = true;
$intVar = 42;
$stringVar = "Hello World";
$floatVar = 3.14;

// Tableau associatif des variables
$variables = [
    "boolVar" => $boolVar,
    "intVar" => $intVar,
    "stringVar" => $stringVar,
    "floatVar" => $floatVar,
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Variables PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            
            color: black;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Tableau des Variables PHP</h2>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($variables as $name => $value): ?>
            <tr>
                <td><?= gettype($value) ?></td>
                <td><?= $name ?></td>
                <td>
                    <?php
                        if (is_bool($value)) {
                            echo $value ? 'true' : 'false';
                        } else {
                            echo $value;
                        }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
