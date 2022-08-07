<?php
//1. Функция возведения в степерь
function expon($a, $b)
{
    $res = pow($a, $b);
    return "Возвели число $a в степерь $b и получили $res.";
}

echo expon(2, 3);
echo '<br>';

//2. Функция проверки на строчные буквы
function checkStr($str)
{
    if (ctype_lower($str)) {
        return "В строке $str, все буквы в нижнем регистре";
    } else {
        return "В строке $str, не все буквы в нижнем регистре";
    }
}

echo checkStr('ThereIsNoSpoon');
echo '<br>';

//3. Функция генерации массива
function genArray($length)
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
    return $arr;
}

echo '<pre>';
print_r(genArray(15));
echo '</pre>';
echo '<br>';

//4. Определение дня недели
function nameDay($numberDay)
{

    switch ($numberDay) {
        case 1:
            return "Понедельник";
            break;
        case 2:
            return "Вторник";
            break;
        case 3:
            return "Среда";
            break;
        case 4:
            return "Четверг";
            break;
        case 5:
            return "Пятница";
            break;
        case 6:
            return "Суббота";
            break;
        case 7:
            return "Воскресенье";
            break;
        default:
            return "В неделе только 7 дней";
    }
}

echo nameDay(5);
echo '<br>';

//5. Определение числа Фибоначчи
function fibo($n)
{
    $arr = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $arr[] = $arr[$i - 1] + $arr[$i - 2];
    }

    return "N-ное число Фибоначчи: " . $arr[$n - 1];
}

echo fibo(10);

?>



