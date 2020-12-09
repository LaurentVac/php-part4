<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 4 part 4 php</title>
</head>
<body>
<?php 
// creation de fonction avec 2 nombre en parametre
    function test($number1,$number2){
       if($number1 > $number2){
           echo     "Le premier nombre est plus grand";
       }else if($number1 < $number2){
           echo     "Le premier nombre est plus petit";

       }else if($number1 === $number2){
           echo     "Les deux nombres sont identiques";
       }          
    }
    echo test(2,2);
    echo "<br/>";
    echo test(10,5);
    echo "<br/>";
    echo test(10,20);   
    ?>

    
</body>
</html>