<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Credit Card</title>
</head>
<body>
    <h1>Validate Credit Card</h1>
    <?php
        $CreditCard = array(
            "8910-1234-5678-6543",
            "0123 4567 8901 2345",
            "0000-9123-4567-0123",
            "a1b2 c3d4 e5f6 g7h8"
        );

        foreach ($CreditCard as $CardNumber) {
            if (empty($CreditCard))
                echo "<p>This Credit Card Number is invalid because it contains an empty string.</p>";
            
            else {
                $CreditCardNumber = $CardNumber;
                $CreditCardNumber = str_replace("-", "", $CreditCardNumber);
                $CreditCardNumber = str_replace("-", "", $CreditCardNumber);
                
                if (!is_numeric($CreditCardNumber)) {
                    echo "<p>Credit Car Number " . $CreditCardNumber . " is not a valid Credit Card number because it contains a non-numeric character.</p>";
                }
                else {
                    echo "<p>Credit Card Number " . $CreditCardNumber . " is a valid Credit Card number</p>";
                }
            }   
        }
    ?>
    
</body>
</html>