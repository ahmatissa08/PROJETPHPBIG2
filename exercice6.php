<?php

// Fonction pour obtenir les diviseurs d'un nombre
function diviseurs($nombre) {
    $listeDiviseurs = array();
    for ($i = 1; $i <= $nombre; $i++) {
        if ($nombre % $i == 0) {
            $listeDiviseurs[] = $i;
        }
    }
    return $listeDiviseurs;
}

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? (int)$_POST['nombre'] : 0;
    $diviseurs = diviseurs($nombre);
} else {
    $nombre = 0;
    $diviseurs = array();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des Diviseurs</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            margin: 10px 0;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

    <h1>Affichage des Diviseurs</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
        <button type="submit">Afficher les diviseurs</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Les diviseurs de $nombre sont :</p>";
        echo "<ul>";
        foreach ($diviseurs as $diviseur) {
            echo "<li>$diviseur</li>";
        }
        echo "</ul>";
    }
    ?>

</body>
</html>
