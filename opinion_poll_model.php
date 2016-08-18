<?php

class Opinion_poll_model {

 private $db_handle; private $host = '127.0.0.1'; private $db = 'opinioncount';private $uid = 'root'; private $pwd = '303seminarian';

    public function __construct() {

        $this->db_handle = mysql_connect($this->host, $this->uid, $this->pwd); //connect to MySQL server

        if (!$this->db_handle) die("Unable to connect to MySQL: " . mysql_error());

        if (!mysql_select_db($this->db)) die("Unable to select database: " . mysql_error());

    }

    private function execute_query($sql_stmt) {

        $result = mysql_query($sql_stmt); //execute SQL statement

        return !$result ? FALSE : TRUE;

    }

    public function select($sql_stmt) {

        $result = mysql_query($sql_stmt);

        if (!$result) die("Database access failed: " . mysql_error());

        $rows = mysql_num_rows($result);

        $data = array();

        if ($rows) {

            while ($row = mysql_fetch_array($result)) {

                $data = $row;

            }

        }

        return $data;

    }

    public function insert($sql_stmt) {

        return $this->execute_query($sql_stmt);

    }

    public function __destruct(){

        mysql_close($this->db_handle);

    }

}

?>