<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h1>Массивы</h1>
    <h2>Создание массива</h2>
    <?php 
    $number = [12, 277, 14, 234]
    ?>
    <h2>Вывод массива на экран</h2>
    <?php 
    var_dump($number) //только для отладки
    ?>
    <h2>Перебор массива</h2>
    <?php 
    for($i = 0; $i < count($number); $i++){
        echo $number[$i], ', ';
    }
    ?>
    <h2>Элементы массива</h2>
    <?php 
    echo $number[0]; //1-й элемент
    ?>
    <h2>добавление элемента</h2>
    <?php 
    $number[] = 777;
    var_dump($number);
    ?>
    <h2>Цикл foreach</h2>
    <?php 
    foreach($number as $key => $lenchik){
        echo "$key - $lenchik <br>";
    }
    ?>
</body>
    </html>