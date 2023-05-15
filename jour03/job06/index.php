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

function myStrlen($str) {
    $length = 0;
    while (isset($str[$length])) {
        $length++;
    }
    return $length;

}


        $str = "Les choses qu'on possède finissent par nous posséder.";

        $reversedStr = "";

        for ($i = myStrlen($str) - 1; $i >= 0; $i--) {
            $reversedStr .= $str[$i];
        }

        echo $reversedStr;
       







?>

   







    
</body>
</html>