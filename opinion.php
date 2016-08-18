<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Opinion Count</title>
        <!--foundation zurb-->
        <link rel="stylesheet" href="css/foundation.css" />
        <link type="text/css" rel="StyleSheet" href="css/app.css"/>
        <!--fonts-->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <body>

        <h2>Opinion Poll</h2>

        <p><b>What is your favorite Code School?</b></p>

        <form method="POST" action="index.php">

            <p> <input type="radio" name="vote" value="1" />Moringa School

                <br /><input type="radio" name="vote" value="2" />Andela

                <br /><input type="radio" name="vote" value="3" />Hack Reactor

                <br /><input type="radio" name="vote" value="4" />Dev School

            </p>

            <p><input type="submit" name="submitbutton" value="OK" /></p>

        </form>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
