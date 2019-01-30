<?php
require_once 'models/user.php';

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
        if($_POST)
        {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $userModel = new User();
            if($userModel -> checkEmail($email))
            {
                Message::set('danger', 'email существует');
                header('Location: /user/register');
                exit;
            }
            else
            {
                $userModel ->addUser($email, $pass);
                Message::set('success', 'Регистрация прошла успешно');
                //var_dump($id);
                header('Location: /user/login');
                exit;
            }
            // echo 'email ' . $pass . '<br>';
            // echo 'id = ' . $id;
        }
        $title = 'Регистрация';
        $content = '';
        View::render('user/register', compact('title', 'content'));
    }

    public function login()
    {
        if($_POST)
        {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $userModel = new User();
            $user = $userModel -> checkUser($email, $pass);
            // var_dump($user);
            if(!$user)
            {
                Message::set('danger', 'Неверный логин или пароль');
                header('Location: /user/login');
                exit;
            }
            else
            {
                Session::set('user_id', $user->id);
                header('Location: /');
                exit;
            }
        }
        $title = 'Логин';
        $content = '';
        View::render('user/login', compact('title', 'content'));
    }

    public function exit()
    {
        // $userID = $_SESSION['user_id'];
        // echo $userID;

        Session::delete('user_id');
        header('Location: /');
        exit;
    }

    public function allusers()
    {
        $allUsers = new User();
        $users = $allUsers -> allUsers();
        $title = 'Все пользователи';
        $content = '';
        View::render('user/allusers', compact('title', 'users'));
    }

    public function delete()
    {
        if(isset($_POST['user']) && $_POST['user']=='delete')
        {
            $id = $_POST['id'];
            $us = new User();

            $us -> delete($id);
            
        }
        header('Location: ../user/allusers');
    }
}