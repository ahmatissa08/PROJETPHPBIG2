<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 - Tableau associatif</title>

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
    
);
?>

<h2>Tableau des personnes</h2>
<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Ville de résidence</th>
        <th>Âge</th>
    </tr>

    <?php
    // Utilisation d'une boucle foreach pour lire le tableau
    foreach ($personnesExercice8 as $nom => $infos) {
        echo "<tr>";
        echo "<td>$nom</td>";
        echo "<td>" . $infos['prenom'] . "</td>";
        echo "<td>" . $infos['ville'] . "</td>";
        echo "<td>" . $infos['age'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
