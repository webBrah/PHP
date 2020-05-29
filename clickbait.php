f<?php
    define( "TITLE", "Honest Click Bait Headlines" );
   
    if( isset( $_POST["fix_submit"])){
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


    }

?>

<!DOCTYPE html>

<html>

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo TITLE; ?></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program.</p>
            
            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste clickbait headline here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honest!</button>
                </form>
            </div>
           
            <?php
                if( isset( $_POST["fix_submit"])){
                    // use ucwords() function to uppercase first letter in every keyword
                    // echo the variable on the screen
                    echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($clickbait)."</h4><hr>";

                    // echo the honest headline on the screen
                    echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($honestHeadline)."</h4>";
                }
            ?>

        </div>
        
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>






























