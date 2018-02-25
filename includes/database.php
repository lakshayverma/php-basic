<?php

require_once(LIB_PATH . DS . "config.php");

class MySQLDatabase
{
    private $_connection;

    public function __construct()
    {
        $this->open_connection();
    }

    // Connection functions
    public function open_connection()
    {
        $this->_connection = mysqli_connect(
            DB_SERVER,
            DB_USER,
            DB_PASS,
            DB_NAME
        );
        if (!$this->_connection) {
            die(
                "Database connection failed: "
                . mysqli_connect_error()
                . " ("
                . mysqli_connect_errno()
                . ")"
            );
        }
    }

    public function close_connection()
    {
        if (isset($this->_connection)) {
            mysqli_close($this->_connection);
            unset($this->_connection);
        }
    }

    // Database query functions
    public function query($sql)
    {
        $result = mysqli_query($this->_connection, $sql);
        $this->confirm_query($result, $sql);
        return $result;
    }

    private function confirm_query($result, $sql = "")
    {
        if (!$result) {
            die("<p>Database query <big>{$sql}</big> failed.</p>");
        }
    }

    public function escape_value($string)
    {
        $escapedString = mysqli_real_escape_string($this->_connection, $string);
        return $escapedString;
    }

    // Database neutral functions
    public function fetch_array($resultSet)
    {
        return mysqli_fetch_array($resultSet);
    }

    public function num_rows($resultSet)
    {
        return mysqli_num_rows($resultSet);
    }

    public function insert_id()
    {
        // get the last id inserted over the current database connection
        return mysqli_insert_id($this->_connection);
    }

    public function affected_rows()
    {
        return mysqli_affected_rows($this->_connection);
    }
}

$database = new MySQLDatabase();
$db = & $database;
