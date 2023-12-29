<?php
function displayMultidimensionalArray($multidimensionalArray) {
    echo "<table border='1'>";
    
    // En-tête du tableau avec les clés comme titres de colonnes
    echo "<tr>";
    foreach (array_keys(current($multidimensionalArray)) as $key) {
        echo "<th>$key</th>";
    }
    echo "</tr>";

    // Affichage des données
    foreach ($multidimensionalArray as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}

// Exemple d'utilisation
$data = array(
    array('Nom' => 'John', 'Âge' => 30, 'Ville' => 'Paris'),
    array('Nom' => 'Alice', 'Âge' => 25, 'Ville' => 'New York'),
    array('Nom' => 'Bob', 'Âge' => 35, 'Ville' => 'London')
);

displayMultidimensionalArray($data);
?>
