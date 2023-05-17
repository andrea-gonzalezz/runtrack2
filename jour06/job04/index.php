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

    function calcule($nombre, $str, $nombre2)
    {
       if ($str == "+") {
           return $nombre + $nombre2;
           
       } elseif ($str == "-") {
           return $nombre - $nombre2;
       } elseif ($str == "*") {
           return $nombre * $nombre2;
       } elseif ($str == "/") {
           return $nombre / $nombre2;
       } else {
           return "Opérateur incorrect";
       }

    }

    echo calcule(5, "+", 5) . "<br>";
    
    echo calcule(5, "-", 5) . "<br>";
   
    echo calcule(5, "*", 5) . "<br>";
  
    echo calcule(5, "/", 5) . "<br>";




?>
    
</body>
</html>