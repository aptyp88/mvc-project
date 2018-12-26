<?php

class MainController extends Controller
{
    public function __construct()
    {
        //echo __METHOD__;
    }

    public function index()
    {
        View::render('main/index');
    }
}