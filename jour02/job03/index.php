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
    
    $num = 0;
    while ($num <= 100){   
        if ($num == 42)
        {
            echo "<b><u>" . "La Plateforme" . "</u></b><br>";
        }

        elseif (0 < $num && $num < 20)
        {
            echo "<i>$num</i><br>";
        }

        elseif (25 < $num && $num < 50)
        {
            echo "<u>$num</u><br>";
        }

        else
        {
            echo "$num<br>";
        }
        $num++;
    }
    ?>
    
        
</body>
</html>