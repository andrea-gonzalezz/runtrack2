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
$str = "Dans l'espace, personne ne vous entend crier";

$count = 0;

for ($i = 0; isset($str[$i]); $i++) {
    $count++;
}

echo "Le nombre de caractères dans la chaîne est : " . $count;
?>

    
</body>
</html>