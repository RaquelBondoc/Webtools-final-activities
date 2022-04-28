<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standard Palindrome</title>
</head>
<body>
    <h1>Standard Palindrome</h1>
    
    <?php

        $Palindrome = array (
            "Madam, I'm Adam",                                                        //standard
            "Palindrome",
            "eva, can i see bees in a cave?",                                         //standard
            "no lemon, no melon",                                                     //standard
            "a busy body",
            "radar",                                                                  //standard
            "Did Hannah see bees? Hannah did",                                        //standard
            "boys will be boys",
            "rotator",                                                                 //standard
            "tick-tock"
        );

        foreach ($Palindrome as $PalindromeWord){
            if (empty($PalindromeWord))
            echo "<p> $PalindromeWord is not a standard palindrome. </p>";

            else{
                $Palindrome1 = $PalindromeWord; 
                $Palindrome2 = strrev($Palindrome1);

                $Palindrome1 = strtoupper(preg_replace("([^A-Za-z0-9])", "", $Palindrome1));
                $Palindrome2 = strtoupper(preg_replace("([^A-Za-z0-9])", "", $Palindrome2));

                if ($Palindrome1 == $Palindrome2){
                  echo "<p> &ldquo; ". $PalindromeWord . "&rdquo; is a <b>Standard</b> Palindrome </p>";
                }
                
                else{ 
                  echo "<p>&ldquo; ". $PalindromeWord . "&rdquo;  is <b>not a Standard</b> Palindrome </p>";
                }
            }
        }
    ?>
</body>
</html>