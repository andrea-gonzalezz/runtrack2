<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Formulaire</title>
    </head>



    <body>
        <div class="container">
        <!--OMBRES-->
        <div class="drop drop-1"></div>
        <div class="drop drop-2"></div>
        <div class="drop drop-3"></div>
        <div class="drop drop-4"></div>
        <div class="drop drop-5"></div>
        </div>





<?php


    // Vérifie si le cookie "prenom" existe
    if (isset($_COOKIE['prenom'])) {
        $prenom = $_COOKIE['prenom'];
        echo '<div class="message">Bonjour ' . $prenom . ' !</div>';
        echo "<br>";
        echo '<form method="post"><input type="submit" name="deco" value="Déconnexion"></form>';

    // Vérifie si le bouton "Déconnexion" a été cliqué
    if (isset($_POST['deco'])) {
        setcookie('prenom', '', time() - 3600, '/'); // Supprime le cookie en le rendant expiré
        header('Location: index.php'); // Redirige vers la page d'accueil après la déconnexion
    }
    } else {
        // Affiche le formulaire de connexion
        if (isset($_POST['connexion'])) {
            $prenom = $_POST['prenom'];
            setcookie('prenom', $prenom, time() + (86400 * 30), '/'); // Crée le cookie avec une durée de vie de 30 jours
            header('Location: index.php'); // Redirige vers la page d'accueil après la connexion
    } 
    
    else {
        echo '<form method="post">
                <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
                <br>
                <input type="submit" name="connexion" value="Connexion">
              </form>';
    }
}
?>

    
</body>
</html>