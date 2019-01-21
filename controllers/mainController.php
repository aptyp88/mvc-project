<?php
require_once 'models/book.php';
class MainController extends Controller
{
    public function __construct()
    {
        //echo __METHOD__;
    }

    public function index()
    {
        $title = 'Главная страница';
        $content = 'lorem test';
        View::render('main/index', compact('title', 'content'));
        //метод compact создает ассоциативный массив ['title' = $title] ['content' => $content]
    }

    public function books()
    {
        $bookModel = new Book();
        $books = $bookModel -> all();

        View::render('books/all', compact('books'));
    }
}