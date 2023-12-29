<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu Devine le Nombre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        button {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Jeu Devine le Nombre</h1>
        <form id="numberForm">
            <label for="userNumber">Choisissez un nombre à trois chiffres :</label>
            <input type="number" id="userNumber" min="100" max="999" required>
            <button type="button" onclick="startGame()">Commencer le Jeu</button>
        </form>
        <div id="output"></div>
    </div>
    <script>
        function startGame() {
            // Efface la sortie précédente
            document.getElementById('output').innerHTML = '';

            // Obtient le nombre choisi par l'utilisateur
            const userNumber = document.getElementById('userNumber').value;

            // Vérifie si l'entrée est un nombre à trois chiffres
            if (userNumber.length !== 3 || isNaN(userNumber)) {
                alert('Veuillez entrer un nombre à trois chiffres valide.');
                return;
            }

            // Convertit le nombre de l'utilisateur en entier
            const targetNumber = parseInt(userNumber);

            // Utilise une boucle while pour deviner le nombre
            let attempts = 0;
            let guess;
            while (guess !== targetNumber) {
                guess = Math.floor(Math.random() * 900) + 100;
                attempts++;
            }

            // Affiche le résultat pour la boucle while
            document.getElementById('output').innerHTML += `<p>Nombre trouvé avec la boucle while en ${attempts} tentatives.</p>`;

            // Utilise une boucle for pour deviner le nombre
            attempts = 0;
            for (let guess; (guess = Math.floor(Math.random() * 900) + 100) !== targetNumber; attempts++) {}

            // Affiche le résultat pour la boucle for
            document.getElementById('output').innerHTML += `<p>Nombre trouvé avec la boucle for en ${attempts} tentatives.</p>`;
        }
    </script>
</body>
</html>
