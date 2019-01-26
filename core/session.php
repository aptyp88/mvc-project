<?php

abstract class Session
{
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if(self::has($key))
        {
            return $_SESSION['key'];
        }
        return null;
    }

    //проверка на сущ
    public static function has($key) 
    {
        return isset($_SESSION[$key]);
    } 

    public static function delete($key)
    {
        // echo $key;
        if(self::has($key))
        {
            unset($_SESSION[$key]);
        }
    }

    //удалить все данные из сессии
    public static function destroy()
    {
        session_destroy();
    }  
}