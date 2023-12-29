<?php

function calculerDiametre($rayon) {
    return 2 * $rayon;
}

function calculerPerimetre($rayon) {
    return 2 * M_PI * $rayon;
}

function calculerSurface($rayon) {
    return M_PI * pow($rayon, 2);
}

$rayon = isset($_POST['rayon']) ? (float)$_POST['rayon'] : 0;
$diametre = calculerDiametre($rayon);
$perimetre = calculerPerimetre($rayon);
$surface = calculerSurface($rayon);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculateur Cercle</title>
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

    <h1>Calculateur Cercle</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="rayon">Entrez le rayon du cercle :</label>
        <input type="number" id="rayon" name="rayon" value="<?php echo $rayon; ?>" required>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Diamètre du cercle : $diametre</p>";
        echo "<p>Périmètre du cercle : $perimetre</p>";
        echo "<p>Surface du cercle : $surface</p>";
    }
    ?>

</body>
</html>
