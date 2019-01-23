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
                echo 'error! email not unique';
            }
            else
            {
                $id = $userModel ->addUser($email, $pass);
                header('Location: ../index.php');
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
        $title = 'Логин';
        $content = '';
        View::render('user/login', compact('title', 'content'));
    }

    public function allUsers()
    {
        $users = new User();
        $users -> allUsers();
        $title = 'Все пользователи';
        $content = '';
        View::render('user/allusers', compact('title', 'content'));
    }

    public function deleteUser()
    {

    }
}