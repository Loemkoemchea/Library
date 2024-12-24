<?php
class user {
    private $conn;
    private $table = 'users';
    public $id;
    public $first_Name;
    public $last_Name;
    public $gender;
    public $book;
    public $create_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    

    public function read($month = null) {
        // Default query to fetch all users
        $query = "SELECT * FROM " . $this->table;
    
        // If a month is provided, modify the query to filter users by the 'create_at' date
        if ($month) {
            // Assuming 'create_at' is in 'YYYY-MM-DD' format
            $query .= " WHERE DATE_FORMAT(create_at, '%Y-%m') = :month";
        }
    
        $stmt = $this->conn->prepare($query);
    
        // If a month is provided, bind it to the query
        if ($month) {
            $stmt->bindParam(':month', $month);
        }
    
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
            $this->book = $row['book'];  
            $this->create_at = $row['create_at'];
        }
    }
    public function create() {
        $query = "INSERT INTO " . $this->table . " SET first_Name = :first_Name, last_Name = :last_Name, gender = :gender, book = :book";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('first_Name', $this->first_Name);
        $stmt->bindParam('last_Name', $this->last_Name);
        $stmt->bindParam('gender', $this->gender);
        $stmt->bindParam('book', $this->book);

        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " SET first_Name = :first_Name, last_Name = :last_Name, gender = :gender, book = :book WHERE id= :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':first_Name', $this->first_Name);
        $stmt->bindParam(':last_Name', $this->last_Name);
        $stmt->bindParam(':gender', $this->gender);
        $stmt->bindParam(':book', $this->book);
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
}
?>