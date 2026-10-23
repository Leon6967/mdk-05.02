<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Практическая 5</h1>
        <h2>Задание 1</h2>
        <?php 
        $number = [1, 23, 44, 120, 87];
        $max = $number[0];
        $index = $number[0];
        foreach($number as $key => $value){
            if($value > $max){
                $max = $value;
                $index = $key; 
            }
        }
        echo "макс число = $index - $max";
        ?>
        <h2>Задание 2</h2>
        <?php 
        $nums = [3, 4, 2, 5];
        $sum = 0;
        $prod = 1;
        foreach ($nums as $value) {
            $sum = $sum + $value;
            $prod = $prod * $value;
        }
        echo "сумма = $sum , произведение = $prod";
        ?>
        <h2>Задание 3</h2>
        <?php 
        $numba = [4, 8, 2, 6];
        $sum = 0;
        $count = 0;
        foreach ($numba as $value) {
            $sum = $sum + $value;
            $count = $count + 1;
        }
        $numba = $sum / $count;
        echo "среднее = $numba";
        ?>
        <h2>Задание 4</h2>
        <?php 
        $start = [1.5, -2.5, 3.0, -4.0, 0.0];
        $potom = [];
        foreach ($start as $value) {
            if ($value > 0) {
                $potom[] = $value * $value;
            } elseif ($value < 0) {
                if ($value < 0) {
                    $potom[] = -$value;
                }
            } else {
                $potom[] = $value;
            }
        }
        echo "исходный: ";
        foreach ($start as $value) echo "$value, ";
        echo "новый: ";
        foreach ($potom as $value) echo "$value, ";
        ?>
        <h2>Задание 5</h2> 
        <?php 
        $a = [10, 20, 30, 14, 2, 8];
        echo "четные по позиции в массиве числа:";
        foreach ($a as $key => $value) {
            if ($key % 2 == 0) {
                echo " $value ";
            }
        }
        ?>
        <h2>Задание 6</h2>
        <?php 
        $mas = [1, 3, 2, 5, 4, 7];
        $prev = $mas[0];
        foreach ($mas as $key => $value) {
            if ($key > 0) {
                if ($value > $prev) {
                    echo "$value ";
                }
                $prev = $value;
            }
        }
        echo "- числа большие, чем предыдущие им";
        ?>
        <h2>Задание 7</h2>
        <?php 
        $cis = [1, 2, 3, 4, 5];
        $rez = [];
        $i = 0;
        foreach ($cis as $key => $value) {
            if ($key % 2 == 0) {
                if (isset($cis[$key + 1])) {
                    $rez[] = $cis[$key + 1];
                    $rez[] = $value;
            }  else {
                    $rez[] = $value;
                }
            }
        }
        foreach ($rez as $value) echo "$value ";
        echo "-  результат";
        ?>
    </body>
    </html>