<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Ассоциативные массивы</h1>
        <h2>Создание массива</h2>
        <?php 
        $mas = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
        ?>
        <h2>Вывод массива на экран</h2>
        <?php 
        foreach ($mas as $number){
            echo $number, ', ';
        }
        ?>
        <h2>Обращение к элементу</h2>
        <?php 
        echo $mas['two'];
        $mas['two'] = '2';
        ?>
        <h2>Добавление элементов (Создание)</h2>
        <?php 
        $mas['seven'] = 7;
        $mas[] = 8;
        $mas[6] = 6;
        $mas[] = 22;
        ?>
        <h2>Вывод массивов вместе с ключами</h2>
        <?php 
        foreach($mas as $key => $number){
            echo "$key = $number, ";
        }
        ?>
        <h2>Строка</h2>
        <?php 
        $str = 'qwerty';
        echo $str[3], '<br>';
        // $str[3] = 'w';
        $len = strlen($str);
        echo "Длина строки $str - $len символов";
        ?>
    </body>
</html>