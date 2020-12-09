<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 7 part 4 php</title>
</head>
<body>
<?php 
// creation de fonction avec 1 nombre et une chaine de caractere en parametre
    function test($age, $gender){
      
       if($age < 18 && $gender == "Homme"){
           echo "Vous êtes un homme et vous êtes mineur.";    
       }else if($age >= 18 && $gender == "Homme"){
           echo "Vous êtes un homme et vous êtes majeur."; 
       }elseif ($age < 18 && $gender == "Femme"){
           echo "Vous êtes une femme et vous êtes mineure.";
       }else if ($age >= 18 && $gender == "Femme"){
        echo "Vous êtes une femme et vous êtes majeure.";
    }
    } ;
    echo test(28,"Homme");
    echo "<br/>";
    echo test(28,"Femme");
    echo "<br/>";
    echo test(17,"Homme");
    echo "<br/>";
    echo test(17,"Femme");

    ?>

    
</body>
</html>