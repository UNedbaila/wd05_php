<?php

function expon($a, $b)   //1. Функция возведения в степерь
{

    $res = pow($a, $b);
    echo '<br>';
    echo "Возвели число $a в степерь $b и получили $res";
}

if (isset($_POST['number']) && isset($_POST['exponent'])) {
    expon($_POST['number'], $_POST['exponent']);
} else {
    echo "Введите данные!";
}

function checkStr($str)   //2. Функция проверки на строчные буквы
{

    if (ctype_lower($str)) {
        echo '<br>';
        echo 'Все буквы в нижнем регистре';
    } else {
        echo '<br>';
        echo 'Не все буквы в нижнем регистре';
    }
}

if (isset($_POST['str'])) {
    checkStr($_POST['str']);
} else {
    echo "Введите данные!";
}

function genArray($length)  //3. Функция генерации массива
{

    $arr = [];


    for ($i = 0; $i < $length; $i++) {
        $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLength = strlen($char);
        $randomString = '';
        for ($k = 0; $k < $length; $k++) {
            $randomString .= $char[rand(0, $charLength - 1)];
        }
        array_push($arr, $randomString);

    }

    echo '<pre>';
    print_r($arr);
    echo '</pre>';

}

if (isset($_POST['length'])) {
    genArray($_POST['length']);
} else {
    echo "Введите данные!";
}

function nameDay($numberDay)  //4. Определение дня недели
{

    switch ($numberDay) {
        case 1:
            echo '<br>';
            echo "Понедельник";
            break;
        case 2:
            echo '<br>';
            echo "Вторник";
            break;
        case 3:
            echo '<br>';
            echo "Среда";
            break;
        case 4:
            echo '<br>';
            echo "Четверг";
            break;
        case 5:
            echo '<br>';
            echo "пятница";
            break;
        case 6:
            echo '<br>';
            echo "Суббота";
            break;
        case 7:
            echo '<br>';
            echo "Воскресенье";
            break;
    }
}

if (isset($_POST['day'])) {
    nameDay($_POST['day']);
} else {
    echo "Введите данные!";
}

function fibo($n)   //5. Определение числа Фибоначчи
{
    $arr = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $arr[] = $arr[$i-1] + $arr[$i-2];
    }
    echo '<br>';
    echo "N-ное число Фибоначчи: " .$arr[$n-1];
}

if (isset($_POST['n'])) {
    fibo($_POST['n']);
} else {
    echo "Введите данные!";
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script>
    //function clickMe(){
    //    let result ="<?php //expon($_POST['number'], $_POST['exponent']); ?>//"
    //    document.write(result);
    //}
</script>
<body>
<form action="" method="post">
    <br>
    Задание 1. Написать функцию, которая возводит число в указанную степень.
    <br>
    Введите число:
    <input type="number" name="number">
    В какую степень хотите возвести:
    <input type="number" name="exponent">
    <br>
    Задание 2. Написать функцию, которая проверяет, являются ли все буквы в строке строчными.
    <br>
    Введите строку:
    <input type="text" name="str">
    <br>
    Задание 3. Написать функцию, которая генерирует массив указанной длинны со случайными значениями.
    <br>
    Введите число:
    <input type="number" name="length">
    <br>
    Задание 4. Написать функцию, которая по номеру дня возвращает его название.
    <br>
    Введите номер дня недели:
    <input type="number" name="day">
    <br>
    Задание 5. Написать функцию, которая выводит n-ое число Фибоначчи.
    <br>
    Введите n:
    <input type="number" name="n">
    <br>
    <br>
    <button type="submit">Отправить</button>
</form>

<!--<form action="" method="post">-->
<!--    Введите строку:-->
<!--    <input type="text" name="str" >-->
<!--    <button type="submit" onclick="clickMe()">Отправить</button>-->
<!--</form>-->
</body>
</html>
