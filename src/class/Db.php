<?php
//12. Создайте класс-оболочку Db над базами данных.
// Класс должен иметь следующие методы: получение данных, удаление данных, редактирование данных, подсчет данных, очистка таблицы.

class Db
{

    public function __construct()
    {
        $connection = mysqli_connect('mysql', 'root', 'root', 'wd05');
        if (!$connection) {
            die("Ошибка: " . mysqli_connect_error());
        }
    }

    public function getData($connection,$table){
        return mysqli_query($connection, "SELECT * FROM '$table'");
    }

    public function delData($connection,$table){
        return mysqli_query($connection, "DROP TABLE '$table'");
    }

    public function editDelData($connection, $table, $id){
        return mysqli_query($connection, "DELETE FROM '$table' WHERE '$id'");
    }

    public function editAddData($connection, $table, $values){
        return mysqli_query($connection, "INSERT INTO '$table' VALUES '$values'");
    }

    public function countData($connection, $table){
        return mysqli_query($connection, "SELECT COUNT(*) FROM '$table'");
    }

    public function cleanData($connection, $table, $id){
        return mysqli_query($connection, "DELETE FROM '$table' WHERE '$id'");
    }
}