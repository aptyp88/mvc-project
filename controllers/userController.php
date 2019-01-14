<?php

class UserController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {

    }

    public function register()
    {
        $title = 'Регистрация';
        $content = '';
        View::render('user/register', compact('title', 'content'));
    }

    public function login()
    {
        $title = 'Логин';
        $content = '';
        View::render('user/login', compact('title', 'content'));
    }
}