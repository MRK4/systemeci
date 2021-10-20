<?php
class User
{
    private $conn;
    private $table_name = "utilisateurs";

    public $id;
    public $user;
    public $password;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function create()
    {

        $query = "INSERT INTO " . $this->table_name . "
            SET
                nom = :nom,
                prenom = :prenom,
                email = :email,
                password = :password";

        $stmt = $this->conn->prepare($query);

        $this->nom = htmlspecialchars(strip_tags($this->nom));
        $this->prenom = htmlspecialchars(strip_tags($this->prenom));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));

        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':prenom', $this->prenom);
        $stmt->bindParam(':email', $this->email);


        $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password_hash);


        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function emailExists()
    {

        $query = "SELECT id, nom, prenom, password
            FROM " . $this->table_name . "
            WHERE email = ?
            LIMIT 0,1";


        $stmt = $this->conn->prepare($query);


        $this->email = htmlspecialchars(strip_tags($this->email));

        $stmt->bindParam(1, $this->email);

        $stmt->execute();

        $num = $stmt->rowCount();


        if ($num > 0) {


            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->id = $row['id'];
            $this->nom = $row['nom'];
            $this->prenom = $row['prenom'];
            $this->password = $row['password'];

            return true;
        }

        return false;
    }
    function read()
    {

        $query = "SELECT id, nom, prenom, email FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }
}
