<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
        <body>
         <h1>Практическая 5 - многомерные массивы</h1>
         <h2>Задание 1</h2>   
         <?php
         $array = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12]
        ];

        echo "<table border='1'>\n";

        foreach ($array as $row) {
        echo "<tr>\n";
        foreach ($row as $value) {
        echo "<td>$value</td>\n";
        }
        echo "</tr>\n";
        }

        echo "</table>";
        ?>
        <h2>Задание 2</h2>
        <?php
        $start = 10;
        $end = 99;
        $squares = [];

        for ($i = $start; $i <= $end; $i++) {
            $tens = intval($i / 10);
            $units = $i % 10;
            $squares[$tens][$units] = $i * $i;
        }

        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        foreach ($squares as $row) {
            echo "<tr>";
            foreach ($row as $val) {
                echo "<td>$val</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <h2>Задание 4</h2>
            <form action="">
            <p>Введите число:</p>
            <input name="n">
            <input type="submit" value="Отправить">
        </form>
        <?php
        $n = $_GET["n"]; 
        if($n >= 100){
            echo "число слишком большое";
        }
        else{
        $array = [];
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $array[$i][$j] = abs($i - $j);
            }
        }
        for ($i = 0; $i < $n; $i++) {
            echo "<br>";
            for ($j = 0; $j < $n; $j++) {
                echo $array[$i][$j] . " ";
            }
        }
        }
        ?>
        </body>
    </html>