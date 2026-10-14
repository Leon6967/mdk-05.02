<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Операции</h1>
        <h2>Арифметические операции</h2>
        <p>+ - / * ** %</p>
        <?php 
        $a = 33 % 22;
        echo $a;
        ?>
        <h2>Инкремент и декремент</h2>
        <?php 
        $b = 2;
        $c = ++$b;
        echo $b, '<br>', $c;
        ?>
        <h2>Операции со строками</h2>
        <?php 
        $str1 = 'Hello, ';
        $str2 = ' PHP!';
        $str3 = 'я учусь на ' . 2 . ' курсе ';
        echo $str1 . $str2 , '<br>',  $str3;
        ?>
        <h2>Операции сравнения</h2>
        <p> < > <= >= == != !== === </p>
        <?php 
        $s = 4 == '4';
        $s1 = 4 === '4';
        echo $s . $s1;
        ?>
        <h2>Логические операции со строками</h2>
        <p>Логические операции И (&& and), логическое ИЛИ (II or), логическая операция НЕ (!)</p>
        <?php 
        $p = true && false; //false
        $p1 = true || false; //true
        $p2 = 5 <= 7 && 4 == 5; //false
        $p == !$p2; // true
            ?>
        <h2>Операции присваивания</h2>
        <p>= </p>
        <?php 
        $o = $r = 5; // o and r = 5
        ?>
        <p>+= -= *= /= **= %= .=</p>
        <?php 
        $i = 42;
        $i += 10;
        $string1 = 'Hello, ';
        $string1 .= 'world!';
        echo $i, '<br>', $string1; 
        ?>
        <h2>Приоритет операций</h2>
        <p>**</p>
        <p>++ --</p>
        <p>!</p>
        <p>* / %</p>
        <p>+ -</p>
        <p>> < >= <=</p>
        <p>== != === !==</p>
        <p>&&</p>
        <p>||</p>
        <p>= += -= ...</p>
        <p>Ошибка расспространенная
            $a < $b <$c
        </p>
    </body>
</html>