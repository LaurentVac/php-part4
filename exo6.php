<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 6 part 4 php</title>
</head>
<body>
<?php 
// creation de fonction avec 1 nombre et une chaine de caractere en parametre
    function test($lastName , $firstName , $age){
        return "Bonjour" ." ". $lastName ." ". $firstName .", tu as " . $age . " ans.";
    } 
    echo test("Vaché","Laurent",28)  ;
    ?>

    
</body>
</html>