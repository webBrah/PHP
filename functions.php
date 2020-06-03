<?php
    // FUNCTIONS.PHP

    function checkForClickBait(){
        // grab value from textarea in $_POST collection
        // make all letters lowercase using strtolower() function
        // store in a variable
        $clickbait = strtolower( $_POST["clickbait_headline"]);

        // store array of clickbait-sounding words or phrases
        $a = array(
            "scientists",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "trick",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"
        );

        // store array of repplacement words or phrases
        /* make sure each replacement is in the same order
           as the clickbait word you're trying to replace */

        $b = array(
            "so-called scientists",
            "so-called doctors",
            "aren't threatened by",
            "average",
            "completely normal",
            "ineffective",
            "method",
            "is no different than others",
            "you won't really be surprised by",
            "slightly im prove",
            "boring",
            "normal"
        ); 

        // use the str_replace() function to replace the words
        // uppercase the first letter in every word using ucwords() function
        // store in a variable

        $honestHeadline = str_replace( $a, $b, $clickbait );


        // return an array of the variables so we can access them globally
        return array($clickbait, $honestHeadline);

    }

    function displayHonestHeadline( $x, $y ){
         // use ucwords() function to uppercase first letter in every keyword
                    // echo the variable on the screen
                    echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($x)."</h4><hr>";

                    // echo the honest headline on the screen
                    echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($y)."</h4>";
    }

    //CHECK FOR DAYS
    function checkForDays(){
        // grab value from textarea in $_POST collection
        // make all letters lowercase using strtolower() function
        // store in a variable
        $checkDays = strtolower( $_POST["day_checker"]);

        // store array of clickbait-sounding words or phrases
        $f = array(
            "monday",
            "tuesday",
            "wednesday",
            "thursday",
            "friday",
            "saturday",
            "sunday"
        );

        // store array of repplacement words or phrases
        /* make sure each replacement is in the same order
           as the clickbait word you're trying to replace */

        $g = array(
            "lunes",
            "martes",
            "miercoles",
            "jueves",
            "viernes",
            "sabado",
            "domingo"
        ); 

        // use the str_replace() function to replace the words
        // uppercase the first letter in every word using ucwords() function
        // store in a variable

        $goodDay = str_replace( $f, $g, $checkDays );


        // return an array of the variables so we can access them globally
        return array($checkDays, $goodDay);
    }

    

    function displayTranslatedDay( $f, $g ) {
        // use ucwords() function to uppercase first letter in every keyword
        // echo the variable on the screen
         echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($f)."</h4><hr>";

        // echo the honest headline on the screen
         echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($g)."</h4>";        
    }

?>