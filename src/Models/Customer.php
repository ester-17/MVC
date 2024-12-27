<?php 

require_once "src/Models/Model.php";

class Customer extends Model {

    protected $tableName = 'clientes';

    public function insert($name, $rg){
        $result = $this->connection->query("INSERT INTO $this->tableName (nome, rg) values ('$name', $rg)");
        return $result;
    }
    
    public function update($id, $name, $rg){
        $result = $this->connection->query("UPDATE $this->tableName SET nome = '$name', rg = $rg WHERE id = $id"); 
        return $result;
    }

    public function delete($id) {
        $stmt = $this->connection->prepare("DELETE FROM $this->tableName WHERE id = ?");
        $stmt->bind_param("i", $id); // Bind the parameter as an integer
        return $stmt->execute();
    }

    public function find($id) {
        $result = $this->connection->prepare("SELECT * FROM $this->tableName WHERE id = :id");
        return $result;
    }
}




