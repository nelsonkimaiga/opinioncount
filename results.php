<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <title>Poll Results</title>
        <!--foundation zurb-->
        <link rel="stylesheet" href="css/foundation.css" />
        <link type="text/css" rel="StyleSheet" href="css/app.css"/>
        <!--fonts-->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <body>
        <div class="container">
            <h4 class="bodycontent">Opinion Poll</h4>
            <h5 class="bodycontent">Where your opinion counts!</h5>
            <hr>
            
            <p>
                <b>What is your favorite Code School?</b>
            </p>
            <p>
                <b>
                    <?php echo $choices_count[0]; ?></b> people have thus far taken part in this poll:
            </p>
            <table>
                <?php echo($table_rows); ?>
            </table>
        </div>
        
                
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
