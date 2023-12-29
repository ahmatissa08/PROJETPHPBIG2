<?php

// Fonction pour calculer le PGCD (Plus Grand Commun Diviseur)
function pgcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Fonction pour calculer le PPCM (Plus Petit Commun Multiple)
function ppcm($a, $b) {
    // Vérifier si l'un des nombres est zéro
    if ($a == 0 || $b == 0) {
        return "Impossible de calculer le PPCM si l'un des nombres est égal à zéro.";
    }

    // Calculer le PPCM en utilisant le PGCD
    return ($a * $b) / pgcd($a, $b);
}

// Initialiser les variables à zéro
$nombre1 = 0;
$nombre2 = 0;
$resultat_ppcm = 0;
$message_erreur = "";

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs saisies par l'utilisateur
    $nombre1 = isset($_POST['nombre1']) ? (int)$_POST['nombre1'] : 0;
    $nombre2 = isset($_POST['nombre2']) ? (int)$_POST['nombre2'] : 0;

    // Calculer le PPCM
    $resultat_ppcm = ppcm($nombre1, $nombre2);
    
    // Vérifier s'il y a une erreur
    if (is_string($resultat_ppcm)) {
        $message_erreur = $resultat_ppcm;
        $resultat_ppcm = 0; // Réinitialiser le résultat en cas d'erreur
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculateur PPCM</title>
</head>
<body>

    <h1>Calculateur PPCM</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre1">Entrez le premier entier :</label>
        <input type="number" id="nombre1" name="nombre1" value="<?php echo $nombre1; ?>" required>

        <label for="nombre2">Entrez le deuxième entier :</label>
        <input type="number" id="nombre2" name="nombre2" value="<?php echo $nombre2; ?>" required>

        <button type="submit">Calculer PPCM</button>
    </form>

    <?php
    // Afficher le résultat ou le message d'erreur
    if (!empty($message_erreur)) {
        echo "<p style='color: red;'>$message_erreur</p>";
    } else {
        echo "<p>Le PPCM de $nombre1 et $nombre2 est : $resultat_ppcm</p>";
    }
    ?>

</body>
</html>
