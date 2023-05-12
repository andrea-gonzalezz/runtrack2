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

#Afficher nombre prmiers de 0 à 1000

/**
 * Déterminer si un nombre est premier
 * $number nombre à tester
 * 
 */
function isPrime($number) {
    //boucle de 2 au nombre à tester
    for ($i = 2; $i < $number; $i++) {
        //test du qutotien de la division
        if ($number % $i == 0) {
            return FALSE;
        }
    }
 
    //Aucun diviseur trouvé, c'est un nombre permier
    return TRUE;
}
 
// boucle de 0 à 99
echo '<br>Nombre premier de 0 à 1000: ';
for ($i = 3; $i < 1000; $i++) {
    if (isPrime($i)) {
        echo $i.' ';
    }
}
?>

</body>
</html>