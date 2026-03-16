<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "myfirstdb";
    private $conn;

    function __construct() {
        $this->conn = $this->connectDB();
    }

    function connectDB() {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }
        return $conn;
    }

    function runQuery($query) {
        $result = mysqli_query($this->conn, $query);
        $resultset = array();
        while($row = mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if(!empty($resultset)) {
            return $resultset;
        }
    }

    function executeUpdate($query) {
        $result = mysqli_query($this->conn, $query);
        return $result;
    }
}
?>