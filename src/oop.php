<?php

//1. Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
//Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000.
// Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

class Worker
{
    public $name;
    public $age;
    public $salary;
}

$worker1 = new Worker();
$worker1->name = 'Иван';
$worker1->age = 25;
$worker1->salary = 1000;

$worker2 = new Worker();
$worker2->name = 'Вася';
$worker2->age = 26;
$worker2->salary = 2000;

echo 'Задание 1';
echo '<br>';
echo 'Сумма зарплат Ивана и Васи равна: ' . ($worker1->salary + $worker2->salary);
echo '<br>';
echo 'Сумма возрастов Ивана и Васи равна: ' . ($worker1->age + $worker2->age);
echo '<br>';

//2.Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата)
// и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
//Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

class Worker2
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$worker1 = new Worker2();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker2();
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);


echo 'Задание 2';
echo '<br>';
echo 'Сумма зарплат Ивана и Васи равна: ' . ($worker1->getSalary() + $worker2->getSalary());
echo '<br>';
echo 'Сумма возрастов Ивана и Васи равна: ' . ($worker1->getAge() + $worker2->getAge());
echo '<br>';

//3.Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет).
// Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).

class Worker3
{
    private $name;
    private $age;
    private $salary;

    private function checkAge($age)
    {
        if (1 <= $age && $age <= 100) {
            $this->age = $age;
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->checkAge($age);
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$worker1 = new Worker3();
$worker1->setAge(125);

$worker2 = new Worker3();
$worker2->setAge(26);

echo 'Задание 3';
echo '<br>';
echo 'Возраст Ивана: ' . $worker1->getAge();
echo '<br>';
echo 'Возраст Васи: ' . $worker2->getAge();
echo '<br>';

//4. Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата).
// Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ).
// Сделайте также public методы getName, getSalary.
//Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.

class Worker4
{
    private $name;
    public $age;
    private $salary;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}

$worker1 = new Worker4('Дима', 25);
$worker1->setSalary(1000);

echo 'Задание 4';
echo '<br>';
echo 'Произведение возраста и зарплаты: ' . $worker1->getSalary() * $worker1->age;
echo '<br>';

//5. Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName, setAge, getAge.
//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также методы public getSalary и setSalary.
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.

class User
{
    protected $name;
    protected $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Worker5 extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$worker1 = new Worker5();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker5();
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

echo 'Задание 5';
echo '<br>';
echo 'Сумма зарплаты Ивана и Васи.: ' . $worker1->getSalary() + $worker2->getSalary();
echo '<br>';

class Student extends User
{
    private $scholarship;
    private $course;

    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship;
    }

    public function getScholarship()
    {
        return $this->scholarship;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getCourse()
    {
        return $this->course;
    }
}

//6. Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
// Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

class Driver extends Worker5
{
    private $experience;
    private $category;
}

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

echo 'Задание 7';

$form = new Form();
echo '<br>';
echo $form->open('#', 'POST');
echo $form->input('name', 'text', 'Login', '');
echo $form->password('pass', 'password', 'Password', '');
echo $form->submit('Submit');
echo $form->close();

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

//8. Создайте класс SmartForm, который будет наследовать от Form из предыдущей задачи и сохранять значения инпутов и textarea после отправки.
//То есть если мы сделали форму, нажали на кнопку отправки - то значения из инпутов не должны пропасть.
// Мало ли что-то пойдет не так, например, форма некорректно заполнена, а введенные данные из нее пропали и их следует вводить заново. Этого следует избегать.

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

echo 'Задание 8';

$form = new SmartForm();
echo '<br>';
echo $form->open('#', 'POST');
echo $form->input('name', 'text', 'Login', '');
echo $form->password('pass', 'password', 'Password', '');
echo $form->submit('Submit');
echo $form->close();

echo '<pre>';
print_r($form->getData());
echo '</pre>';

//9. Создайте класс Cookie - оболочку над работой с куками.
//Класс должен иметь следующие методы: установка куки set(имя куки, ее значение), получение куки get(имя куки), удаление куки del(имя куки).

class Cookie
{
    public function setCookie($name, $value)
    {
        setcookie($name, $value);
    }


    public function getCookie($name)
    {
        return $_COOKIE[$name];
    }


    public function delCookie($name)
    {
        setcookie($name, time() - 3600);
    }
}

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

//11. Реализуйте класс Flash, который будет использовать внутри себя класс Session из предыдущей задачи (именно использовать, а не наследовать).
//Этот класс будет использоваться для сохранения сообщений в сессию и вывода их из сессии. Зачем это нужно: такой класс часто используется для форм. Например на одной странице пользователь отправляет форму, мы сохраняем в сессию сообщение об успешной отправке, редиректим пользователя на другую страницу и там показываем сообщение из сессии.
//Класс должен иметь да метода - setMessage, который сохраняет сообщение в сессию и getMessage, который получает сообщение из сессии.

class Flash
{
    private $session;

    public function __construct()
    {
        $this->session = new Session; //Создаем объект для работы с классом Session и доступа к его методам
    }

    public function setMessage($key, $value)

    {
        $this->session->setKey($key, $value);
    }

    public function getMessage($key)
    {
        return $this->session->getKey($key);
    }

}

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

