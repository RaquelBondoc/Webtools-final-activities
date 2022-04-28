<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfect Palindrome</title>
</head>
<body>
    <h1>Perfect Palindrome</h1>
    
    <?php
        $Palindrome = array (
            "Madam, I'm Adam",
            "Palindrome",
            "eva, can I see bees in a cave?",
            "no lemon, no melon",
            "a busy body",
            "radar",
            "Did Hannah see bees? Hannah did",
            "boys will be boys",
            "rotator",
            "tick-tock"
        );

        foreach ($Palindrome as $PalindromeWord){
            if (empty($PalindromeWord))
            echo "<p> $PalindromeWord is a Perfect palindrome. </p>";

            else{
                $Palindrome1 = $PalindromeWord; 
                $Palindrome2 = strrev($Palindrome1);

                $Palindrome1 = strtoupper($Palindrome1);
                $Palindrome2 = strtoupper($Palindrome2);

                if ($Palindrome1 == $Palindrome2){
                  echo "<p>&ldquo; ". $PalindromeWord . "&rdquo; is a <b>Perfect</b> Palindrome </p>";
                }

                else{ 
                  echo "<p>&ldquo; ". $PalindromeWord . "&rdquo;  is <b>not a Perfect</b> Palindrome </p>";
                }
            }
        }
    ?>
</body>
</html>