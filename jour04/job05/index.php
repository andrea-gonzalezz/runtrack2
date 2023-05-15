<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= '' method= 'post'>
        <label for='username'>Username</label> 
        <input type="text" name='username' id='formCol'><br>

        <label for='password'>Password</label>
        <input type="password" name='password' id='formCol'><br>

        <input type="submit" value="Envoyer">

    
    <?php

        if (isset ($_POST['username']) && isset ($_POST['password'])) {
            if ($_POST['username'] == 'John' && $_POST['password'] == 'Rambo') {
                echo "C'est pas ma guerre";
            } else {
                echo "Votre pire cauchemar";
            }
        }

        ?>
    
</body>
</html>