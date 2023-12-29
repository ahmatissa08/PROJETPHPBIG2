<?php

// Exercice 8 : Tableau multidimensionnel associatif
$personnes_exercice8 = array(
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

// Exercice 9 : Tableau multidimensionnel associatif avec des tableaux associatifs
$personnes_exercice9 = array(
    'personne1' => array(
        'info' => array(
            'prenom' => 'Jean',
            'ville' => 'Paris',
            'age' => 30
        )
    ),
    'personne2' => array(
        'info' => array(
            'prenom' => 'Marie',
            'ville' => 'Lyon',
            'age' => 25
        )
    ),
    'personne3' => array(
        'info' => array(
            'prenom' => 'Pierre',
            'ville' => 'Marseille',
            'age' => 35
        )
    ),
    // Ajoutez d'autres personnes au besoin
);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture des Tableaux avec While</title>
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

    <h1>Lecture des Tableaux avec While</h1>

    <!-- Exercice 8 -->
    <h2>Exercice 8</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville de Résidence</th>
            <th>Âge</th>
        </tr>
        <?php
        reset($personnes_exercice8); // Remettre le pointeur au début du tableau
        while ($personne = each($personnes_exercice8)) {
            $nom = $personne['key'];
            $info = $personne['value'];
            echo "<tr>";
            echo "<td>$nom</td>";
            echo "<td>{$info['prenom']}</td>";
            echo "<td>{$info['ville']}</td>";
            echo "<td>{$info['age']}</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <!-- Exercice 9 -->
    <h2>Exercice 9</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville de Résidence</th>
            <th>Âge</th>
        </tr>
        <?php
        reset($personnes_exercice9); // Remettre le pointeur au début du tableau
        while ($personne = each($personnes_exercice9)) {
            $nom = $personne['key'];
            $info = $personne['value']['info'];
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
