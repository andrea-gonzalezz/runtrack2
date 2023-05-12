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
    while ($num <= 1337){   
        if ($num == 42)
        {
            echo "<b><u>$num</u></b><br>";
        }

        elseif ($num == 26 || $num == 37 || $num == 88 || $num == 1111 || $num == 3233)
        {
            echo "<br>";
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