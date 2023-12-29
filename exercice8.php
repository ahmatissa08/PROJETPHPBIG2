<?php

$personnes = array(
    'personne1' => array(
        'prenom' => 'Jean',
        'ville' => 'Paris',
        'age' => 30
    ),
    'personne2' => array(
        'prenom' => 'Marie',
        'ville' => 'Lyon',
        'age' => 25
    ),
    'personne3' => array(
        'prenom' => 'Pierre',
        'ville' => 'Marseille',
        'age' => 35
    ),
    // Ajoutez d'autres personnes au besoin
);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Personnes</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Tableau de Personnes</h1>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville de Résidence</th>
            <th>Âge</th>
        </tr>
        <?php
        foreach ($personnes as $nom => $info) {
            echo "<tr>";
            echo "<td>$nom</td>";
            echo "<td>{$info['prenom']}</td>";
            echo "<td>{$info['ville']}</td>";
            echo "<td>{$info['age']}</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
