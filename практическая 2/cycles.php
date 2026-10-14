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
    echo "start number = $startnumber, multiplier = $multiplier, quantity = $quantity, '<br>'";
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
    echo "n = $n, ln = $ln";
    while($n < $ln){
        $sum = $sum + $n;
        $n++;
    }
    echo $sum;
    ?>
    <h2>Задание 3</h2>
    <?php 
    $n = 1;
    $lastNumber = 10;
    $multiplicationResult = 1;
    while ($n <= $lastNumber){
        if ($n % 2 == 0){
            $multiplicationResult = $multiplicationResult * $n;
        }
        $n++;
    }
    echo "multiplicationResult = $multiplicationResult"
    ?>
    <h2>Задание 4</h2>
    <?php 
    echo "Начав тренировки, спортсмен в первый день пробежал 10 км. Каждый день он увеличивал дневную норму на 10% нормы предыдущего дня. Какой суммарный путь пробежит спортсмен за n дней?";
    $a1 = 10;
    $n = 12;
    $sum = $sum + $a1;
    $as = $a1;
    for($i = 0; $i < $n; $i++){
        $as = $as + ($as * 0.1);
        $sum = $sum + $a1;
    }
    echo "<br> ответ = $sum";
    ?>
    <h2>Задание 5</h2>
    <?php 
    $vsenogi = 64;
    ?>
    <body>
    </body>
</html>