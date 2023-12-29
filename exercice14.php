<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Agence Immobilière</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            width: 50%;
            margin: auto;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Agence Immobilière</h1>

    <form action="redirect.php" method="post">
        <button type="submit" name="action" value="vendre">Vendre</button>
        <button type="submit" name="action" value="acheter">Acheter</button>
        <button type="submit" name="action" value="louer">Louer</button>
    </form>

</body>
</html>
