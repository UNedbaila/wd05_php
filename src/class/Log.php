<?php
//13. Создайте класс Log для ведения логов. Этот класс должен иметь следующие методы: сохранить в лог, получить последние N записей, очистить таблицу с логами.
//Класс Log должен использовать класс Db из предыдущей задачи (именно использовать, а не наследовать).

class Log {
    private $db;

    public function __construct()
    {
        $this->db = new Db; //Создаем объект для работы с классом Db и доступа к его методам

        $connection = mysqli_connect('mysql', 'root', 'root', 'log');
        if (!$connection) {
            die("Ошибка: " . mysqli_connect_error());
        }
    }

    public function addLog($connection, $table, $values){
        $this->db->editAddData($connection, $table, $values);
    }
    public function countLog($connection, $table){
        $this->db->countData($connection, $table);
    }
    public function cleanLog($connection, $table, $id){
        $this->db->cleanData($connection, $table, $id);
    }
}