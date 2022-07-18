<?php
//session_start();

//upload_max_filesize	2M // !!! Задать вопрос!

//docker ps //смотрим ID контейнетера
//docker exec -it ID bash
//chmod -R 777 .

if (!file_exists(__DIR__ . '/uploads/')) {         // проверка на наличии директории
    mkdir(__DIR__ . '/uploads/', 0777); // создание папки uploads, права не работают
    chmod(__DIR__ . '/uploads/', 0777); // Права на папку, задать вопрос!
}

$all_files = scandir(__DIR__ . '/uploads/'); // массив с названиями файлов в директории(внимание первые два значения!)

if (!empty($_FILES) && isset($_FILES['file']['name']['0'])) {
    $counter_files = count($_FILES['file']['name']);   //счётчик для количества файлов планируемых для загрузки

    for ($i = 0; $i <= $counter_files; $i++) {
        if (isset($_FILES['file']['name'][$i]) && $_FILES['file']['size'][$i] > 0) {  //Задать вопрос! см. upload 3

            if (array_search($_FILES['file']['name'][$i], $all_files)) {  //ищем совпадения имени загружаемого файла в массиве
                $info = new SplFileInfo($_FILES['file']['name'][$i]);   //Класс SplFileInfo()
                $ext = ($info->getExtension());                        //через метод getExtension() получаем расширение файла
                move_uploaded_file($_FILES['file']['tmp_name'][$i], __DIR__ . '/uploads/' . uniqid() . '.' . $ext); // загрузка файлов в директорию с изменённым именем

            } else {
                move_uploaded_file($_FILES['file']['tmp_name'][$i], __DIR__ . '/uploads/' . $_FILES['file']['name'][$i]); // загрузка файлов в директорию
            }

        }
    }

    $all_files = scandir(__DIR__ . '/uploads/'); // массив с названиями файлов в директории(внимание первые два значения!)

    for ($i = 2; $i < count($all_files); $i++) {

        echo 'Имя файла: ' . $all_files[$i];
        //echo ('Имя файла: ' . $all_files[$i] . ' Расположение файла: ' . realpath(__DIR__ . '/uploads/') . ' Размер файла: ' .
        //    (round((filesize(realpath(__DIR__ . '/uploads/') . '/' . $all_files[$i])) / pow(1024,2),3)) . ' MB');
        echo '<br>';
        echo 'Расположение файла: ' . realpath(__DIR__ . '/uploads/');
        echo '<br>';
        echo 'Размер файла: ' . (round((filesize(realpath(__DIR__ . '/uploads/') . '/' . $all_files[$i])) / pow(1024, 2), 3)) . ' MB';
        echo '<br>';
        echo '<br>';

    }

    echo '<br>';
    echo "Есть файлы!";
    echo '<br>';
    echo "Число файлов: $counter_files";

} else {
    echo "Выберите файлы!";
}

echo '<br>';

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <br>
    <br>
    <input name="file[]" type="file" multiple/>
    <br>
    <br>
    <input type="submit" value="Загрузить файлы"/>
</form>

</body>
</html>

