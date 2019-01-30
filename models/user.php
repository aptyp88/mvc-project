<?php

class User extends Model
{
    protected $table = 'users';

    public function addUser($email, $pass)
    {
        // echo '123';

        $pz = $this -> pdo -> prepare('INSERT INTO ' . $this -> table . '(email, password) VALUES(?,?)');
        $pz -> execute([$email, $pass]);
        //return $this -> pdo -> lastInsertId();
    }

    public function checkEmail($email)
    {
        $pz = $this -> pdo -> prepare('SELECT COUNT(*) as "count" FROM ' . $this -> table . ' WHERE email=?');
        $pz -> execute([$email]);
        return $pz -> fetch(PDO::FETCH_OBJ) -> count;
    }

    public function checkUser($email, $pass)
    {
        $pass = md5($pass);
        $pz = $this -> pdo -> prepare('SELECT * FROM ' . $this-> table . ' WHERE email=? AND password=?');
        $pz -> execute([$email, $pass]);
        return $pz -> fetch(PDO::FETCH_OBJ);
    }

    public function allUsers()
    {
        
        $pz = $this -> pdo -> prepare('SELECT users.id, users.name, users.email, users.password, users.created_at, COUNT(reviews.user_id) AS count
                                        FROM users LEFT JOIN reviews ON reviews.user_id = users.id
                                        GROUP BY users.id');
        $pz -> execute();

        return $pz -> fetchAll(PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $this -> id = $id;
        // echo $this -> id;
        // $this -> pdo -> query('DELETE FROM ' . $this -> table . 'WHERE id='. $this -> id);
        $sql = 'DELETE FROM ' . $this -> table . ' WHERE id = ?';
        $pz = $this -> pdo -> prepare($sql);
        $pz -> execute([$this -> id]);
    }
}