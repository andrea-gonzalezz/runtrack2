<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

// Vérifie si la variable de session "nombre_visites" existe
        if (!isset($_SESSION['nbvisites'])) {
            $_SESSION['nbvisites'] = 0;
        }

        // Incrémente la variable de session à chaque visite
        $_SESSION['nbvisites']++;

        // Affiche le contenu de la variable de session "nbvisites"
        echo "Nombre de visites : " . $_SESSION['nbvisites'];

        // Réinitialise le compteur lorsque le bouton "reset" est cliqué
        if (isset($_POST['reset'])) {
            $_SESSION['nbvisites'] = 0;
        }
?>

<!-- Affichage du bouton de réinitialisation -->
<form method="post">
    <input type="submit" name="reset" value="Reset">
</form>

</body>
</html>