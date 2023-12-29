<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA</title>
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

    <h1>Calcul TVA</h1>

    <form id="tvaForm">
        <label for="prixHT">Prix HT :</label>
        <input type="text" id="prixHT" name="prixHT" value="" oninput="calculateTVA()" required>

        <label for="tauxTVA">Taux de TVA :</label>
        <input type="text" id="tauxTVA" name="tauxTVA" value="" oninput="calculateTVA()" required>

        <button type="button" onclick="calculateTVA()">Calculer TVA</button>

        <div class="result">
            <label for="montantTVA">Montant de la TVA :</label>
            <input type="text" id="montantTVA" name="montantTVA" readonly>

            <label for="prixTTC">Prix TTC :</label>
            <input type="text" id="prixTTC" name="prixTTC" readonly>
        </div>
    </form>

    <script>
        function calculateTVA() {
            var prixHT = parseFloat(document.getElementById('prixHT').value) || 0;
            var tauxTVA = parseFloat(document.getElementById('tauxTVA').value) || 0;

            var montantTVA = (prixHT * tauxTVA) / 100;
            var prixTTC = prixHT + montantTVA;

            document.getElementById('montantTVA').value = montantTVA.toFixed(2);
            document.getElementById('prixTTC').value = prixTTC.toFixed(2);
        }
    </script>

</body>
</html>
