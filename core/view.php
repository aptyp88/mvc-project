<?php

class View
{
    static public function render($path, $data = [])
    {
        extract($data);
        unset($data);
        require_once 'views/header.php';
        require_once 'views/' . $path . '.php';
        require_once 'views/footer.php';
    }
}