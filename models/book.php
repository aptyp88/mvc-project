<?php

class Book extends Model
{
    public function all()
    {
        $query = 'SELECT * FROM books';
        return $this -> pdo -> query($query) -> fetchAll(PDO::FETCH_OBJ);
    }
}