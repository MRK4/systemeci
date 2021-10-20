<?php
class Database
{
    private $host = "www.fibeer.fr";
    private $db_name = "uezq2658_mds";
    private $username = "uezq2658_mdsUser";
    private $password = "mdspass35!";
    public $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
