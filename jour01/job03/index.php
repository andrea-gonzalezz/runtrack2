<!DOCTYPE html>
<html>
<body>

<?php
// variables
$boleen = true;
$int = 5;
$string = "You should not pass";
$float = 3.14;

// tableau html
echo "<table border= '2'>";
echo "<thread><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thread>";
echo "<tbody>";
echo "<tr><td>booleen</td><td>boolean</td><td>" . var_export($boleen, true) . "</td></tr>";
echo "<tr><td>Int</td><td>Entier</td><td>" . $int . "</td></tr>";
echo "<tr><td>String</td><td>ChaineCaractere</td><td>" . $string . "</td></tr>";
echo "<tr><td>Float</td><td>Decimal</td><td>" . $float . "</td></tr>";
echo "</tbody></table>";
?>

</body>
</html>