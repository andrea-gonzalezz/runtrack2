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

    function bonjour($jour)
    {
        if ($jour == true) {
            echo "Bonjour<br>";
        } else {
            echo "Bonsoir<br>";
        }
    }

    bonjour(true);
    bonjour(false);


?>


    
</body>
</html>