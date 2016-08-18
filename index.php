<?php
require 'opinion_poll_model.php';

$model = new Opinion_poll_model();


if (count($_POST) > 1) {

    $ts = date("Y-m-d H:i:s");

    $option = $_POST['vote'][0];

    $sql_stmt = "INSERT INTO opinion (`choice`,`ts`) VALUES ($option,'$ts')";

    $model->insert($sql_stmt);

    $sql_stmt = "SELECT COUNT(choice) choices_count FROM opinion;";

    $choices_count = $model->select($sql_stmt);

    $libraries = array("", "JQuery", "MooTools", "YUI Library", "Glow");

    $table_rows = '';

    for ($i = 1; $i < 5; $i++) {

        $sql_stmt = "SELECT COUNT(choice) choices_count FROM opinion WHERE choice = $i;";

        $result = $model->select($sql_stmt);

        $table_rows .= "<tr><td>" . $libraries [$i] . " Got:</td><td><b>" . $result[0] . "</b> votes</td></tr>";

    }

    require 'results.php';

    exit;

}

require 'opinion.php';

?>