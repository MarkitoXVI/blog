<?php
class Database {
    private $servername = "localhost";
    private $username = "tavs_lietotaja_vards";
    private $password = "tava_parole";
    private $dbname = "ckc_tavs_uzvards";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Savienojuma neizdevās: " . $this->conn->connect_error);
        }
    }
}
?>
