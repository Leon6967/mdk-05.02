<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <h1>Практическая работа 3</h1>
    <h2>Задание 1</h2>
    <?php 
    $startnumber = 3;
    $multiplier = 2;
    $quantity = 4;
    for($i = 1; $i <= $quantity; $i++){
        $gp= $startnumber * $multiplier ** $i; 
        echo $gp, '<br>';
    }
    ?>
    <h2>Задание 2</h2>
    <?php 
    $sum = 0;
    $n = 1;
    $ln = 20;
    while($n < $ln){
        $sum = $sum + $n;
        $n++;
    }
    echo $sum;
    ?>
    <h2>Задание 3</h2>
    
    <body>
    </body>
</html>