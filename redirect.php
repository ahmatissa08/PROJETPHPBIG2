<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        switch ($action) {
            case 'vendre':
                header("Location: vendre.php");
                break;
            case 'acheter':
                header("Location: acheter.php");
                break;
            case 'louer':
                header("Location: louer.php");
                break;
            default:
                // Redirection par défaut vers une page d'accueil ou une page d'erreur
                header("Location: index.php");
                break;
        }
    }
}
?>
