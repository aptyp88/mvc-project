<?php

class Model
{
    protected $pdo;

    public function __construct()
    {
        $this -> pdo = new PDO('mysql:host=' . DB_HOST .';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
    }

    public function all()
    {
        $query = 'SELECT * FROM ' . $this -> table;
        return $this -> pdo -> query($query) -> fetchAll(PDO::FETCH_OBJ);
    }
}