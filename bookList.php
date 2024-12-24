<?php
// Book List
class Product {
    private $conn;
    private $table = 'book_list';
    public $id;
    public $name;
    public $author;
    public $aboutBook;
    public $admin;
    public $source_file;
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
            $this->name = $row['name'];   
            $this->author = $row['author'];
            $this->aboutBook = $row['aboutBook'];
            $this->admin = $row['admin'];  
            $this->source_file = $row['source_file'];  
            $this->image_path = $row['image_path'];  
            $this->create_at = $row['create_at'];
        }
    }
    public $image_path;

    public function create() {
        $query = "INSERT INTO " . $this->table . " SET name = :name, author = :author, aboutBook = :aboutBook, admin = :admin, source_file = :source_file, image_path = :image_path";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':aboutBook', $this->aboutBook);
        $stmt->bindParam(':admin', $this->admin);
        $stmt->bindParam(':source_file', $this->source_file);
        $stmt->bindParam(':image_path', $this->image_path);

        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " SET name = :name, author = :author, aboutBook = :aboutBook, source_file = :source_file, image_path = :image_path, admin = :admin WHERE id= :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':aboutBook', $this->aboutBook);
        $stmt->bindParam(':admin', $this->admin);
        $stmt->bindParam(':source_file', $this->source_file);
        $stmt->bindParam(':image_path', $this->image_path);
        
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
    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($row) {
            // Map database fields to object properties
            $this->id = $row['id'];
            $this->name = $row['name'];
            $this->author = $row['author'];
            $this->aboutBook = $row['aboutBook'];
            $this->admin = $row['admin'];
            $this->source_file = $row['source_file'];
            $this->image_path = $row['image_path'];
            $this->create_at = $row['create_at'];
    
            return $row; // Return the fetched data as an associative array
        }
    
        return null; // Return null if no record is found
    }
    
}

// user table

?>
