<?php

class Reviews extends Model
{
    protected $table = 'reviews';

    public function addReview($text, $rate, $user_id)
    {
        // echo '123';
        $pz = $this -> pdo -> prepare('INSERT INTO '. $this -> table . ' (text, rate, user_id) VALUES(?,?,?)');
        $pz -> execute([$text, $rate, $user_id]);
    }

    

}   