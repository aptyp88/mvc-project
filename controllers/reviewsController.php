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
        $reviews = $reviewsMethod -> allReviews();
        
        if($reviews == null)
        {
            Message::set('dark', 'Нет отзывов');
        }
        
        $title = 'Отзывы';
        $content = '';
        View::render('reviews/reviews', compact('title', 'reviews'));
    }

    public function addreview()
    {
        if($_POST)
        {
            $userID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
            $text = isset($_POST['text'])? $_POST['text'] : '';
            $rate = isset($_POST['radioViews']) ? $_POST['radioViews'] : '';
            $reviewModel = new Reviews();
            $reviewModel -> addReview($text, $rate, $userID);
        }
        Message::set('success', 'Отзыв отправлен');
        header('Location: /reviews/reviews');
        exit;
    }
}