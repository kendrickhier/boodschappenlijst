<?php

class QueryBuilder 
{
    public $pdo;
    
    function __construct($pdo) 
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $class) 
    {
        $statement = $this->pdo->prepare("select * from ${table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function insert($table, $values) 
    {
        $sql = sprintf(
            "insert into %s (%s) values (%s)",
            $table, 
            implode(', ', array_keys($values)), 
            ":".implode(', :', array_keys($values))
        );
        
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($values);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}