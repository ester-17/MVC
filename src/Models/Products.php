<?php 

require_once "src/Models/Model.php";

class Products extends Model {

    protected $tableName = 'produtos';

    public function insert($name, $rg) {
        // Prepare the SQL statement
        $stmt = $this->connection->prepare("INSERT INTO $this->tableName (nome, rg) VALUES (?, ?)");
        $stmt->bind_param("si", $name, $rg); // Bind parameters (string, integer)
        
        // Execute the statement and return the result
        return $stmt->execute();
    }
    
    public function update($id, $name, $rg) {
        // Prepare the SQL statement
        $stmt = $this->connection->prepare("UPDATE $this->tableName SET nome = ?, rg = ? WHERE id = ?");
        $stmt->bind_param("sii", $name, $rg, $id); // Bind parameters (string, integer, integer)
        
        // Execute the statement and return the result
        return $stmt->execute();
    }

    public function delete($id) {
        // Prepare the SQL statement
        $stmt = $this->connection->prepare("DELETE FROM $this->tableName WHERE id = ?");
        $stmt->bind_param("i", $id); // Bind the parameter as an integer
        
        // Execute the statement and return the result
        return $stmt->execute();
    }

    public function find($id) {
        // Prepare the SQL statement
        $stmt = $this->connection->prepare("SELECT * FROM $this->tableName WHERE id = ?");
        $stmt->bind_param("i", $id); // Bind the parameter as an integer
        
        // Execute the statement
        $stmt->execute();
        
        // Get the result
        $result = $stmt->get_result();
        
        // Fetch the data
        return $result->fetch_assoc(); // Return the associative array of the result
    }
}