<?php
function customSin($angle, $unit = 'rad') {
    switch (strtolower($unit)) {
        case 'deg':
            $angle = deg2rad($angle);
            break;
        case 'grad':
            $angle = deg2grad($angle);
            break;
        // Par défaut, on considère que l'angle est en radian
    }

    return sin($angle);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['angle']) && isset($_POST['unit'])) {
        $angle = $_POST['angle'];
        $unit = $_POST['unit'];
        $result = customSin($angle, $unit);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat du Sinus</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        .result {
            width: 50%;
            margin: auto;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h1>Résultat du Sinus</h1>

    <div class="result">
        <?php
        if (isset($result)) {
            echo "<p>Le sinus de $angle $unit est : $result</p>";
        } else {
            echo "<p>Aucune donnée saisie.</p>";
        }
        ?>
    </div>

</body>
</html>
