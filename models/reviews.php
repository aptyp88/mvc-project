<?php

class Reviews extends Model
{
    protected $table = 'reviews';

    public function addReview($text, $rate, $user_id)
    {
        
        $pz = $this -> pdo -> prepare('INSERT INTO '. $this -> table . ' (text, rate, user_id) VALUES(?,?,?)');
        $pz -> execute([$text, $rate, $user_id]);
    }

    public function allReviews()
    {
        $pz = $this -> pdo -> prepare('SELECT reviews.id, reviews.text, reviews.rate, users.email FROM reviews, users WHERE reviews.user_id = users.id');
        $pz -> execute();
        return $pz -> fetchAll(PDO::FETCH_OBJ);
    }
}