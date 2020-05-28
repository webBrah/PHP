
<?php
    define(TITLE, "Php Variables & Constants");
?>

<!DOCTYPE html>

<html>

    <head>
        <title><?php echo TITLE ?></title>
    </head>
    
    <body>

       <?php

            //BOOLEAN a boolean variable speciafies a value of true and false
            $loggedIn = true;

            //Integer an integer variable is a whole number
            $myAge = 38;

            //FLOATING POINT usually a fractional number with a decimal
            $totalPrice = 146.28;

            //STRING simple text that must be enclosed within double quotations "" or single quotations ' '
            $fullName = "Ricardo Rivera";

            //DISPLAY VARIABLES ON SCREEN
            echo ("Hello, my name is $fullName and I am $myAge years old!");

            //CONSTANTS
            define(TITLE, "Php Variables & Constants");
            echo TITLE;


       ?>
        
    </body>
</html>






























