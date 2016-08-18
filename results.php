<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>

        <title>Poll Results</title>

    </head>

    <body>

        <h2>Opinion Poll Results</h2>

        <p><b>What is your favorite code school?</b></p>

        <p><b><?php echo $choices_count[0]; ?></b> people have thus far taken part in this poll:</p>

        <p>
<table>

            <?php echo($table_rows); ?>

        </table>
</body>

</html>
