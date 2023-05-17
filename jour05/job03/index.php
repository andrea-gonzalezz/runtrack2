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

    // Vérifie si la variable de session "prenoms" existe
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = array();
    }

    // Ajoute le prénom à la liste lors de la soumission du formulaire
    if (isset($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
        $_SESSION['prenoms'][] = $prenom;
    }

    // Réinitialise la liste lorsque le bouton "reset" est cliqué
    if (isset($_POST['reset'])) {
        $_SESSION['prenoms'] = array();
    }

    // Affiche la liste des prénoms
    echo "Liste des prénoms :<br>";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo $prenom . "<br>";
    }
    ?>



        <style>
        /* Styles pour le formulaire */
        form {
            max-width: 300px;
            margin: 0 auto;
            text-align: center;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"], button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin-bottom: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover, button:hover {
            background-color: #45a049;
        }
    </style>

    <!-- Formulaire pour saisir un prénom -->
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom" required>
        <br>
        <input type="submit" value="Ajouter">
    </form>

    <!-- Bouton de réinitialisation -->
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>

    
</body>
</html>