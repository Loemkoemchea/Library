<?php
class admin {
    private $conn;
    private $table = 'admin';
    public $id;
    public $first_Name;
    public $last_Name;
    public $gender;
    public $username;
    public $password;
    public $create_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function read_single() {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ?";  
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if($row) {
            $this->first_Name = $row['first_Name'];
            $this->last_Name = $row['last_Name'];
            $this->gender = $row['gender'];
            $this->username = $row['username'];
            $this->password = $row['password'];
            $this->create_at = $row['create_at'];
        }
    }
    
    public function create() {
        $query = "INSERT INTO " . $this->table . " SET first_Name = :first_Name, last_Name = :last_Name, gender = :gender, username = :username, password = :password, create_at = NOW()";
    
        $stmt = $this->conn->prepare($query);
    
        $stmt->bindParam(':first_Name', $this->first_Name);
        $stmt->bindParam(':last_Name', $this->last_Name);
        $stmt->bindParam(':gender', $this->gender);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
    
        return $stmt->execute();
    }
    

    public function update() {
        $query = "UPDATE " . $this->table . " SET first_Name = :first_Name, last_Name = :last_Name, gender = :gender, username = :username, password = :password WHERE id= :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':first_Name', $this->first_Name);
        $stmt->bindParam(':last_Name', $this->last_Name);
        $stmt->bindParam(':gender', $this->gender);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
        if ($stmt->execute()) {
            return true;
        }
        
        printf("Error: %s.\n", $stmt->error);
        return false;
    }
    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";  
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        }

        printf("Error: %s.\n", $stmt->error);
        return false;
    }

    public function login() {
        $query = "SELECT * FROM " . $this->table . " WHERE username = :username AND password = :password LIMIT 1";
        $stmt = $this->conn->prepare($query);
    
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password); // Note: Ideally, passwords should be hashed!
    
        $stmt->execute();
    
        // Check if a record is found
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->id = $row['id'];
            $this->first_Name = $row['first_Name'];
            $this->last_Name = $row['last_Name'];
            return true; // Successful login
        }
        return false; // Failed login
    }
    
}
?>