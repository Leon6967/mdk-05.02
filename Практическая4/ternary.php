<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Практическая 4</h1>
        <h2>Задание 1</h2>
        <?php 
        $a = 2;
        $b = 5;
        echo "дано: a = $a, b = $b";
        $res = $a < $b ? $a + $b : $a * $b;
        echo "<br> результат = $res";
        ?>
        <h2>Задание 2</h2>
        <?php 
        $n = 8;
        echo "n = $n";
        $res = $n % 2 == 0 ? 'четное' : 'нечетное';
        echo $res;
        ?>
        <h2>Задание 3</h2>
        <?php 
        $sum = 4000;
        echo " sum = $sum ";
        $rez = $sum >= 1000? $sum - ($sum * 0.1): $sum - ($sum % 0.05);
        echo "итоговая цена = $rez";
        ?>
        <h2>Задание 6</h2>
        <?php 
        $a = 60;
        $b = 30;
        echo "первый угол = $a, второй угол = $b <br>";
        $test = ($a + $b) >= 180? 'такого треугольника не существует': $c = 180 - $a - $b;
        $rez =($a === 90 || $b === 90 || $c === 90)? 'треугольник существует и он прямоугольный': 'треугольник сущетствует, но он не прямоугольный' ; 
        echo "ответ = $rez"
        ?>
        <h2>Задание 4</h2>
        <form action="">
            <p>Введите стороны треугольника:</p>
            <input name="a">
            <input name="b">
            <input name="c">
            <input type="submit" value="Отправить">
        </form>
        <?php
        $a = ($_GET['a']);
        $b = ($_GET['b']);
        $c = ($_GET['c']);
        $result = (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a))?  "Треугольник существует"  : "Треугольник не существует";
        echo "ответ - $result";
        ?>
</html>