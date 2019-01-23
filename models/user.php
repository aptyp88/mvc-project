<?php

class User extends Model
{
    protected $table = 'users';

    public function addUser($email, $pass)
    {
        $pass = md5($pass);
        $pz = $this -> pdo -> prepare('INSERT INTO ' . $this -> table . '(email, password) VALUES(?,?)');
        $pz -> execute([$email, $pass]);
        // print_r( $pz);
        return $this -> pdo -> lastInsertId();
    }

    public function checkEmail($email)
    {
        $pz = $this -> pdo -> prepare('SELECT COUNT(*) as "count" FROM ' . $this -> table . ' WHERE email=?');
        $pz -> execute([$email]);
        return $pz -> fetch(PDO::FETCH_OBJ) -> count;
    }

    public function allUsers()
    {
        
        $pz = $this -> pdo -> prepare('SELECT * FROM ' . $this -> table);
        $pz -> execute();
        return $pz -> fetchAll(PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $this -> id = $id;
        // echo $this -> id;
        // $this -> pdo -> query('DELETE FROM ' . $this -> table . 'WHERE id='. $this -> id);
        $sql = 'DELETE FROM ' . $this -> table . 'WHERE id = ?';
        $pz = $this -> pdo -> prepare($sql);
        $pz -> execute([$this -> id]);

    }
}