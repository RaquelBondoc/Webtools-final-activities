<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Strength</title>

</head>
<body>
    <h1>Password Strength</h1>

    <?php
        $Passwords = array(
            "8V*@DnHD_A+BktD",                                          //strong
            "q10BqPF",
            "4803431823436592",
            "Dc)w[s9C5U6F",                                            //strong
            "CzEZAFoTXV3Bl",
            "R>xhC6@3",                                                //strong
            "yttp98e410",
            "0tVNND Y8pf5",
            "6vU[ddsvsddsvddsdsv(~",
            "a7CnkW'P8_"                                              //strong
        );

        foreach ($Passwords as $pass){
            if(empty($pass)){
            echo "<p>&ldquo; ". $pass . "&rdquo; is not considered a password. </p>";
            }

            elseif(strlen($pass) >= 8 && strlen($pass) <=16){

                if (preg_match("([^0-9A-Za-z])", $pass)){
                    if(strpos($pass, " ")){
                        echo "<p>&ldquo; ". $pass ."&rdquo; must not contain space. </p>";
                    }
                    elseif(strpos($pass, !"[@!#$%^&*()<>?/|}{~:]")){
                        echo "<p>&ldquo; ". $pass . "&rdquo; must contain at least one special characters. </p>";
                    }
                    else
                    {
                        echo "<p>&ldquo;" . $pass ."&rdquo; is a strong password. </p>";
                    }
                }

                else{
                    echo "<p>&ldquo;" . $pass ."&rdquo; is not a strong password. </p>";
                }

            }

            elseif(strlen($pass) <= 8 || strlen($pass) >=16){
                echo "<p>&ldquo;" . $pass ."&rdquo; must be between 8 and 16 characters only. </p>";
            }
        }
    ?>
</body>
</html>