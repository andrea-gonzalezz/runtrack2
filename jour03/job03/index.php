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
$str = "I'm sorry Dave I'm afraid I can't do that";

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y']; // Liste des voyelles

$resultat = "";

for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]); // Convertir le caractère en minuscule pour vérification
    if (in_array($char, $voyelles)) {
        $resultat .= $str[$i]; // Ajouter le caractère à la chaîne de résultat
    }
}

echo $resultat;
?>


</body>
</html>