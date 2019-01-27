<?php
require_once 'models/reviews.php';


class ReviewsController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {

    }

    public function reviews()
    {
        $reviewsMethod = new Reviews();
        $rev = $reviewsMethod -> all();
        if($rev == null)
        {
            Message::set('dark', 'Нет отзывов');
        }
        $title = 'Отзывы';
        $content = '';
        View::render('reviews/reviews', compact('title', 'rev'));
    }

    public function addreview()
    {
        if($_POST)
        {
            $userID = isset($_SESSION['user_id']);
            $text = isset($_POST['text']);
            $rate = isset($_POST['radioViews']);
            $reviewModel = new Reviews();
            $reviewModel -> addReview($text, $rate, $userID);
        }
        header('Location: /reviews/reviews');
        exit;
        
        
        
        

    }
}