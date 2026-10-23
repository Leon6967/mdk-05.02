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
        for($i = 0; $i < count($number); $i++){
        echo $number[$i], ', ';
    }
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
        for($i = 0; $i < count($nums); $i++){
        echo $nums[$i], ', ';
    }
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
        for($i = 0; $i < count($numba); $i++){
        echo $numba[$i], ', ';
    }
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
        for($i = 0; $i < count($a); $i++){
        echo $a[$i], ', ';
    }
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
        for($i = 0; $i < count($mas); $i++){
        echo $mas[$i], ', ';
    }
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
        for($i = 0; $i < count($cis); $i++){
        echo $cis[$i], ', ';
    }
    echo "- начальный массив ";
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
        <h2>Задание 9</h2>
        <?php 
        $mas = [1, 3, 8, 4, 2, 3, 4, 1, 7, 1];
        for($i = 0; $i < count($mas); $i++){
        echo $mas[$i], ', ';
        }
        $pair = 0;
        foreach($mas as $key => $value){
            foreach($mas as $key2 => $value2){
                if ($key < $key2 && $value == $value2){
                    $pair++;
                }
            }
        }
        echo " количество пар = $pair!";
        ?>
    </body>
    </html>