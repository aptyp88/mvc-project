<?php

class Router
{
    public static function start()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : 'main';
        /*
            user/login  userController метод login()
            user        userController метод index()

            2й вариант
            /           mainController метод index()
        */

        $url = explode('/', $url);
        
        $fileController = 'controllers/' . $url[0] . 'Controller.php';
        if(file_exists($fileController))
        {
            require_once $fileController;
            $controllerName = $url[0] . 'Controller';
            $controller = new $controllerName();
            $actionMethod = isset($url[1]) ? $url[1] : 'index';
            if(method_exists($controller, $actionMethod))
                $controller -> $actionMethod();
            else
                echo 'file not found';
        }
        else
        {
            echo 'file not found';
        }
    }
}