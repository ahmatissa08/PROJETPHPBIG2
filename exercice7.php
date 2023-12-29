<?php

// Fonction pour obtenir les diviseurs d'un nombre
function obtenirDiviseurs($nombre) {
    $diviseurs = array();
    for ($i = 1; $i < $nombre; $i++) {
        if ($nombre % $i == 0) {
            $diviseurs[] = $i;
        }
    }
    return $diviseurs;
}

// Fonction pour tester si un nombre est parfait
function estParfait($nombre) {
    $diviseurs = obtenirDiviseurs($nombre);
    return array_sum($diviseurs) == $nombre;
}

// Initialisation de la variable
$nombre = 0;
$resultat = "";

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? (int)$_POST['nombre'] : 0;
    if (estParfait($nombre)) {
        $resultat = "Le nombre $nombre est parfait.";
    } else {
        $resultat = "Le nombre $nombre n'est pas parfait.";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de Nombre Parfait</title>
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
    </style>
</head>
<body>

    <h1>Test de Nombre Parfait</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
        <button type="submit">Tester</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>$resultat</p>";
    }
    ?>

</body>
</html>
