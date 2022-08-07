<?php
//10. Создайте класс Session - оболочку над сессиями.
//Он должен иметь следующие методы: создать переменную сессии, получить переменную, удалить переменную сессии, проверить наличие переменной сессии.
//Сессия должна стартовать (session_start) в методе __construct.

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function getKey($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public function setKey($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function isKey($key)
    {
        return isset($_SESSION[$key]);
    }

    public function delKey($key)
    {
        unset($_SESSION[$key]);
    }
}