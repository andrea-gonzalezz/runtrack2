<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="largeur">Largeur</label>
        <input type ="text" name="largeur" id="largeur"><br>
        
        <label for="longueur">Longueur</label>
        <input type="text" name="longueur" id="longueur"><br>

        <input type="submit" value="Envoyer">



    <?php> 

        $largeur = $_POST['largeur'];
        $longueur = $_POST['longueur'];

        for ($i = 1; $i <= $longueur; $i++) {
                echo "^";
            }
            echo "<br>";
        }

        for ($i = 1; $i <= $largeur / 2; $i++) {
            echo " ";
        }

        echo "| |";
        for ($i = 1; $i <= $largeur / 2; $i++) {
            echo " ";
        }
        echo "<br/>";
    
        for ($i = 1; $i <= $hauteur - 2; $i++) {
            echo "|";
            for ($j = 1; $j <= $largeur - 2; $j++) {
                echo " ";
            }
            echo "|<br/>";
        }
    
        for ($i = 1; $i <= $largeur; $i++) {
            echo "_";
        }
        echo "<br/>";

    ?>


</form>  
    
</body>
</html>