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


    $str = "Certaines choses changent, et d'autres ne changeront jamais.";

    $length = myStrlen($str);
    $newStr = '';

    for ($i = 0; $i < $length; $i++) {
        if ($i == $length - 1) {
            $newStr .= $str[0];
        } else {
            $newStr .= $str[$i + 1];
        }
    }

    echo $newStr;




?>
    
</body>
</html>