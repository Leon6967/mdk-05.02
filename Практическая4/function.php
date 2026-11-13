<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Практическая 4 - функции</h1>
        <h2>Задание 1</h2>
        <?php 
        function circleLenght($r){
            return 2 * 3 * $r;
        }
        echo 'радиус окружности =  ' . circleLenght(7) . ' ( число пи округлено до 3)';
        ?>
        <h2>Задание 2</h2>
        <?php 
        function ploshadTriangle($a, $b, $c){
            if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
                $p = ($a + $b + $c) / 2; 
                $ploshad = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
                return round($ploshad);
            } else {
                return "Треугольник с такими сторонами не существует";
            }
        }

        echo 'Площадь треугольника равна = ' . ploshadTriangle(10, 5, 7) . ' число округлено до целого';
                ?>
        <h2>Задание 3</h2>
        <?php 
        function maxDelitel($a){

            for ($i = intdiv($a, 2); $i >= 1; $i--) {
                if ($a % $i == 0) {
                    return $i;
                }
            }
        }

        echo maxDelitel(6) . " = наибольший делитель для числа";
        ?>
        <h2>Задание 4</h2>
        <?php 
        function allDeliteli($a){
            $deliteli = [];
            for ($i = 1; $i <= $a; $i++) {
                if ($a % $i == 0) {
                    $deliteli[] = $i;
                }
            }
            return $deliteli;
        }

        foreach (allDeliteli(12) as $d) {
            echo $d . ' ';
        }
        ?>
        <h2>Задание 5</h2>
        <?php 
        function sumKvadratov($arr){
            $sum = 0;
            foreach ($arr as $x) {
                $sum += $x * $x;
            }
            return $sum;
        }

        echo sumKvadratov([1, 2, 3, 4]);
        ?>
        <h2>Задание 7</h2>
        <?php 
        function stringLength(...$strings){
        $result = 0;
        foreach($strings as $str){
            $result += strlen($str) / 2;
        }
        return $result;
        }
        echo stringLength('арбузики', 'мишка', 'стол') . "- сумма длин всех строк"
        ?>
    </body>
    </html>