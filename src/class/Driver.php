<?php
//6. Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
// Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

include_once 'Worker5.php';

class Driver extends Worker5
{
    private $experience;
    private $category;
}