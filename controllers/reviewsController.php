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

    public function addReview()
    {
        $text = isset($_POST['text']);
        $rate = isset($_POST['radioViews']);
        

    }
}