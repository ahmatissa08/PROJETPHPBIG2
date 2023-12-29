<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du Sinus</title>
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

        select {
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

        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Calcul du Sinus</h1>

    <form action="proces.php" method="post">
        <label for="angle">Saisissez l'angle :</label>
        <input type="text" id="angle" name="angle" required>

        <label for="unit">Choisissez l'unité :</label>
        <select id="unit" name="unit">
            <option value="rad">Radian</option>
            <option value="deg">Degré</option>
            <option value="grad">Grade</option>
        </select>

        <button type="submit">Calculer Sinus</button>
    </form>

</body>
</html>
