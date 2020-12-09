<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 8 part 4 php</title>
</head>
<body>
<?php 
// creation de fonction avec 1 nombre et une chaine de caractere en parametre
    function test($number1 = 2, $number2 = 4 , $number3 = 5){
        return $number1 + $number2 + $number3 ;
    }
    echo test()
    ?>

    
</body>
</html>