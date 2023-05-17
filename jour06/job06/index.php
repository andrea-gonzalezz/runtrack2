<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=4, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    function leetSpeak($str) 
    {
        for ($i=0; $i < strlen($str); $i++) { 
            if ($str[$i] == "A" || $str[$i] == "a") {
                $str[$i] = "4";
            } elseif ($str[$i] == "B" || $str[$i] == "b") {
                $str[$i] = "8";
            } elseif ($str[$i] == "E" || $str[$i] == "e") {
                $str[$i] = "3";
            } elseif ($str[$i] == "G" || $str[$i] == "g") {
                $str[$i] = "6";
            } elseif ($str[$i] == "L" || $str[$i] == "l") {
                $str[$i] = "1";
            } elseif ($str[$i] == "S" || $str[$i] == "s") {
                $str[$i] = "5";
            } elseif ($str[$i] == "T" || $str[$i] == "t") {
                $str[$i] = "7";
            }
        }
        return $str;
    }


    
    echo leetSpeak("Bonjour");
    echo leetSpeak("Fils du Gondor! Et du Rohan! Tenez vos positions!")






?>
    
</body>
</html>