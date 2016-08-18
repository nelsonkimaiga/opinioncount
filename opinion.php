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
        <div class="container">
            <h4 class="bodycontent">Opinion Poll</h4>
            <h5 class="bodycontent">Where your opinion counts!</h5>
            <hr>
            
            <p>
                <b>What is your favorite Code School?</b>
            </p>
            <div class="row">
                <div class="large-6 columns">
                    <form method="POST" action="index.php">
                        <fieldset>
                            <input type="radio" name="vote" value="1" />Moringa School
                        </fieldset>
                        <fieldset>
                            <input type="radio" name="vote" value="2" />Andela
                        </fieldset>    
                        <fieldset>
                            <input type="radio" name="vote" value="3" />Hack Reactor
                        </fieldset>
                        <fieldset>
                            <input type="radio" name="vote" value="4" />Dev School
                        </fieldset>
                        
                        <button type="submit" class="button primary" name="submitbutton" value="OK" />Submit your opinion</button>
                    </form>
                </div>
                <div class="large-6 columns">
                    
                </div>
                    
            </div>
                
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
