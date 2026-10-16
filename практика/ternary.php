<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>условные конструкции</h1>
        <h2>тернарный оператор</h2>
        <?php 
        $a=42;
        $b=24;
        $res = $a > $b ? $a**2 : $b;
        echo "Квадрат макс числа $res";
        ?>
        <h2>Оператор match</h2>
        <?php 
        $c = '1';
        $res = match((int)$c){
            1 => 'c = 1',
            2 => 'c = 2',
            5 => 'c = 5',
            10 => 'c = 10',
        };
        echo $res;
        ?>
        <h2></h2>
    </body>
</html>