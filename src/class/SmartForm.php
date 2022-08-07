<?php
//8. Создайте класс SmartForm, который будет наследовать от Form из предыдущей задачи и сохранять значения инпутов и textarea после отправки.
//То есть если мы сделали форму, нажали на кнопку отправки - то значения из инпутов не должны пропасть.
// Мало ли что-то пойдет не так, например, форма некорректно заполнена, а введенные данные из нее пропали и их следует вводить заново. Этого следует избегать.

include_once 'Form.php';

class SmartForm extends Form
{
    protected $data;

    public function __construct()
{
    $this->data = $_REQUEST;
}

    public function input($name, $type, $placeholder, $value)
{
    if (isset($this->data[$name])) {
        $value = $this->data[$name];
    }
    return parent::input($name, $type, $placeholder, $value);
}

    public function getData()
{
    return $this->data;
}
}