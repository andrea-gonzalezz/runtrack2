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
// Vérifie si le cookie "nbvisites" existe
if (!isset($_COOKIE['nbvisites'])) {
    $nbvisites = 0;
} else {
    $nbvisites = $_COOKIE['nbvisites'];
}

// Incrémente le compteur à chaque visite
$nbvisites++;

// Définit le cookie avec la nouvelle valeur
setcookie('nbvisites', $nbvisites, time() + (86400 * 30), '/'); // Cookie valide pendant 30 jours

// Affiche le contenu du cookie "nbvisites"
echo "Nombre de visites : " . $nbvisites;

// Réinitialise le compteur lorsque le bouton "reset" est cliqué
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() - 3600, '/'); // Supprime le cookie en le rendant expiré
    $nbvisites = 0;
}
?>

<!-- Affichage du bouton de réinitialisation -->
<form method="post">
    <input type="submit" name="reset" value="Reset">
</form>

    
</body>
</html>