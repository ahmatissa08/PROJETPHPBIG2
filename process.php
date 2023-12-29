<?php
function capitalizeStrings(array &$strings) {
    foreach ($strings as &$str) {
        $str = ucfirst(strtolower($str));
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['inputStrings'])) {
        $inputStrings = explode(',', $_POST['inputStrings']);
        capitalizeStrings($inputStrings);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat - Capitalizer</title>
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

    <h1>Résultat - Capitalizer</h1>

    <div class="result">
        <?php
        if (isset($inputStrings)) {
            echo "<p>Résultat :</p>";
            echo "<ul>";
            foreach ($inputStrings as $str) {
                echo "<li>$str</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Aucune donnée saisie.</p>";
        }
        ?>
    </div>

</body>
</html>
