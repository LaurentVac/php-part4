<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 5 part 4 php</title>
</head>
<body>
<?php 
// creation de fonction avec 1 nombre et une chaine de caractere en parametre
    function test($number = 70 ,$chain = " rue des Jacobins"){
        return $number  . $chain;
    } 
    echo test()  ;
    ?>

    
</body>
</html>