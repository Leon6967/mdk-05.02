<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Типы данных в php</h1>
        <h2>Целые числа</h2>
        <?php
        // $number = 0b011001100110;
        $number = 0x0123FC012;
        echo $number;
        ?>
        <h2>Числа с плавающей точкой - float</h2>
        <?php  
        $a = 42.5;
        $b = 42.;
        $c = 1.5e5;
        $d = 2.4e-3;
        echo "$a, $b, $c, $d"
        ?>
        <h2>Строки - string </h2>
        <?php 
        $str = 'Я изучаю  php';
        $str2 = "Переменная a = $a";
        $str3 = "'WWW'";
        echo $str, '<br>', $str2, '<br>', $str3;
        ?>
        <h2>Логическое значение - bool </h2>
        <?php 
        $t = true;
        $f = false;
        echo " t = $t, f = $f";
        ?>
        <h2> Специальное значение - null</h2>
        <?php 
        $n = null;
        echo "n = $n";
        ?>
    </body>
</html>