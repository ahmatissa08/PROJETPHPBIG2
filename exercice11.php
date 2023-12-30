<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices 8 et 9 - Utilisation de while</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Exercice 8 - Tableau multidimensionnel associatif
$personnesExercice8 = array(
    'Moussa' => array(
        'prenom' => 'ISSA SOUGUI',
        'ville' => 'DAKAR',
        'age' => 21
    ),
    'Alice' => array(
        'prenom' => 'Alice',
        'ville' => 'Paris',
        'age' => 25
    ),
    'Bob' => array(
        'prenom' => 'Bob',
        'ville' => 'London',
        'age' => 35
    ),
    // Ajoutez d'autres personnes avec leurs informations associées
);

// Exercice 9 - Tableau multidimensionnel associatif
$personnesExercice9 = array(
    'Moussa' => array(
        'prenom' => 'ISSA SOUGUI',
        'ville' => 'DAKAR',
        'age' => 21
    ),
    'Alice' => array(
        'prenom' => 'Alice',
        'ville' => 'Paris',
        'age' => 25
    ),
    'Bob' => array(
        'prenom' => 'Bob',
        'ville' => 'London',
        'age' => 35
    ),
    // Ajoutez d'autres personnes avec leurs informations associées
);
?>

<h2>Exercice 8 - Tableau des personnes</h2>
<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Ville de résidence</th>
        <th>Âge</th>
    </tr>

    <?php
    // Utilisation d'une boucle while pour lire le tableau de l'exercice 8
    $keysExercice8 = array_keys($personnesExercice8);
    $i = 0;

    while ($i < count($personnesExercice8)) {
        $nom = $keysExercice8[$i];
        $infos = $personnesExercice8[$nom];

        echo "<tr>";
        echo "<td>$nom</td>";
        echo "<td>" . $infos['prenom'] . "</td>";
        echo "<td>" . $infos['ville'] . "</td>";
        echo "<td>" . $infos['age'] . "</td>";
        echo "</tr>";

        $i++;
    }
    ?>
</table>

<h2>Exercice 9 - Tableau des personnes</h2>
<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Ville de résidence</th>
        <th>Âge</th>
    </tr>

    <?php
    // Utilisation d'une boucle while pour lire le tableau de l'exercice 9
    $keysExercice9 = array_keys($personnesExercice9);
    $j = 0;

    while ($j < count($personnesExercice9)) {
        $nom = $keysExercice9[$j];
        $infos = $personnesExercice9[$nom];

        echo "<tr>";
        echo "<td>$nom</td>";
        echo "<td>" . $infos['prenom'] . "</td>";
        echo "<td>" . $infos['ville'] . "</td>";
        echo "<td>" . $infos['age'] . "</td>";
        echo "</tr>";

        $j++;
    }
    ?>
</table>

</body>
</html>
