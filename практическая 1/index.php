<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Практическая работа</h1>
        <h2>Первое задание</h2>
        <?php
        $a = 10;
        $b = 5;
        $c = 10;
        $d = 5;
        $rez = ($a / $c) * ($b / $d) - (($a * $b - $c) / ($c * $d));
        echo "a = $a, b = $b, c = $c, d = $d, результат = $rez";
        ?>
        <h2>Второе задание</h2>
        <?php
        $x = 22;
        $y = 5;
        $rezu = (($x + $y) / ($y + 1)) - (($x * $y - 12) / (34 + $x));
        echo "x = $x, y = $y, результат = $rezu";
        ?>
        <h2>Формула 3</h2>
        <?php
        $x = 2;
        $y = 5;
        $rez = (($x + 1) / ($x - 1)) ** $x + (18 * $x * $y ** 2); 
        echo "x = $x, y = $y, результат = $rez";      
        ?>
        <h2>Формула 4</h2>
        <?php
        $x = 1;
        $y = 1;
        $rezultat = (1 + (1 / $x ** 2)) ** $x - (12 * $x ** 2 * $y);
        echo "x = $x, y = $y, результат = $rezultat";
        ?>
    </body>
</html>