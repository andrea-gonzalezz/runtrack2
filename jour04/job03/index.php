<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get" class="formCol">
        <label for="nom"> Quel est votre nom ?</label><br>
        <input type="text" name="nom" id="nom">

        <label for="prenom"> Quel est votre prénom ?</label><br>
        <input type="text" name="prenom" id="prenom">

        <label for="email"> Quel est votre email ?</label><br>
        <input type="email" name="email" id="email">

        <input type="submit" value="Envoyer">

    </form>

    <?php

        $count = count($_POST);
        echo "Le nombre d'arguments POST est de : ".$count."<br>";

    ?>


    
</body>
</html>