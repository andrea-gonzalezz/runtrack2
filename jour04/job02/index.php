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
        <input type="text" name="nom" id="nom"><br>

        <label for="prenom"> Quel est votre prénom ?</label><br>
        <input type="text" name="prenom" id="prenom"><br>

        <label for="email"> Quel est votre email ?</label><br>
        <input type="email" name="email" id="email"><br>

        <input type="submit" value="Envoyer">

    </form>

  <?php

        if (count($_GET) > 0) {
            echo "<table border= '2'>";
            echo "<tr><th>Argument</th><th>Valeur</th></tr>";
            foreach ($_GET as $key => $value) {

                echo "<tr><td>$key</td><td>$value</td></tr>";
            }

            echo "</table>";
  
        } else {
            echo "Aucun argument n'a été envoyé";
        }

    ?>

    
</body>
</html>