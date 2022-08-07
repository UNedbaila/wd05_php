<?php
//7. Создайте класс Form - оболочку для создания форм.
// Он должен иметь методы input, submit, password, textarea, open, close. Каждый метод принимает массив атрибутов.

class Form
{
    public function open($action, $method)
    {
        return '<form  action=' . $action . ' method=' . $method . '>';
    }

    public function input($name, $type, $placeholder, $value)
    {
        return '<input name=' . $name . ' type=' . $type . ' placeholder=' . $placeholder . ' value =' . $value . '>';
    }

    public function submit($value)
    {
        return '<input type="submit" value=' . $value . '>';
    }

    public function password($name, $type, $placeholder, $value)
    {
        return '<input name=' . $name . ' type=' . $type . ' placeholder=' . $placeholder . ' value =' . $value . '>';
    }

    public function close()
    {
        return '</form>';
    }

}