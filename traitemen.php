<?php

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $ville = $_POST["ville"];
    $age = $_POST["age"];

    // Construit le tableau associatif
    $personnes[$nom] = array(
        'prenom' => $prenom,
        'ville' => $ville,
        'age' => $age
    );

    // Affiche le tableau pour vérification
    echo "<pre>";
    print_r($personnes);
    echo "</pre>";
}
if (isset($personnes)) {
    // Affiche le tableau pour vérification
    echo "<h2>Tableau des personnes :</h2>";
    echo "<ul>";

    foreach ($personnes as $nom => $infos) {
        echo "<li><strong>Nom:</strong> $nom</li>";
        echo "<ul>";
        echo "<li><strong>Prénom:</strong> " . $infos['prenom'] . "</li>";
        echo "<li><strong>Ville de résidence:</strong> " . $infos['ville'] . "</li>";
        echo "<li><strong>Âge:</strong> " . $infos['age'] . "</li>";
        echo "</ul>";
    }

    echo "</ul>";
} else {
    echo "<p>Aucune personne n'a été saisie.</p>";
}

?>
