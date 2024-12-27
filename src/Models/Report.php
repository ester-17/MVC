<?php 

include_once "Model.php";

class Report extends Model {

    protected $tableName = 'relatorios';

    public function insert($nome, $setor, $data){
        $result = $this->connection->query(
            "INSERT INTO $this->tableName (nome, setor, data) 
            values ('$nome', '$setor', '$data')"
        );
        return $result;
    }

}