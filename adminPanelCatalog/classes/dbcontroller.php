<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 06-07-2019
 * Summary-
 * API Used-
 * Limitations-
 */



class DBController {
    private $host = "localhost";

    private $user = "gfiahtrm_wisekreator";
    private $password = "wiseKreator149";
    private $database = "gfiahtrm_wisekreator";
    private $conn;

    function __construct() {
        $this->conn = $this->connectDB();
    }

    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }

    function runQuery($query) {
        $result = mysqli_query($this->conn,$query);
        while($row=mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function numRows($query) {
        $result  = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}
?>