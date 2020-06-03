f<?php
    define( "TITLE", "Day of the week translator" );
    include("functions.php");

    if( isset( $_POST["day_submit"])){
        //call function
        checkForDays();
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

            <p class="lead">This is a simple program that translates the days of the week from English to Spanish</p>
            
            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="What day do you want to tranlate?" class="form-control input-lg" name="day_checker"></textarea><br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="day_submit">Translate Now!</button>
                </form>
            </div>

            <?php
                if( isset( $_POST["day_submit"])){

                    // get first value in array returned by checkForClickBait() function
                    // store in a variable
                    $checkDays = checkForDays()[0];

                    // get second value in array returned by checkForClickBait() function
                    // store in a variable

                    $goodDay = checkForDays()[1];

                    // call function
                    // pass two arguments in the function
                    displayTranslatedDay( $checkDays, $goodDay);
                }
            ?>

            <p>Every <?php echo $goodDay ?> is a great day to smoke pot!</p>

        </div>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
