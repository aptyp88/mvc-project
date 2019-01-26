<?php

abstract class Message
{
    public static function set($type, $text)
    {
        // Session::set('message', [$type, $text]);
        Session::set('message', compact('type', 'text'));
        // $_SESSION['message'] = [$type, $text];
    }

    public static function has()
    {
        return isset($_SESSION['message']);
    }

    public static function getType()
    {
        if(self::has())
        {
            return $_SESSION['message']['type'];
        }
        return null;
    }

    public static function getText()
    {
        if(self::has())
        {
            $text = $_SESSION['message']['text'];
            unset($_SESSION['message']);        //удаление сообщения
            return $text;
        }
        return null;
    }
}