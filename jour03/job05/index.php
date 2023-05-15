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
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "consonnes" => 0,
    "voyelles" => 0
];

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y']; // Liste des voyelles

for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]); // Convertir le caractère en minuscule pour vérification

    if (preg_match('/[a-z]/i', $char)) {
        if (in_array($char, $voyelles)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}


echo '<table style="border-collapse: collapse; border: 1px solid black;">';
echo '<thead><tr><th style="border: 1px solid black;">Voyelles</th><th style="border: 1px solid black;">Consonnes</th></tr></thead>';
echo '<tbody><tr><td style="border: 1px solid black;">' . $dic["voyelles"] . '</td><td style="border: 1px solid black;">' . $dic["consonnes"] . '</td></tr></tbody>';
echo '</table>';


?>

    
</body>
</html>