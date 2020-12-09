<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice  part 4 php</title>
</head>
<body>
<?php 
    function test($test1 ="je suis une chaîne de caractères" , $test2 =", je suis la seconde chaîne de caractères.")
    {
       
          return $test1 . $test2;  
       
        
    }
    echo test();
    
    
    ?>

    
</body>
</html>