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
        $nums = ['one' =>  12, 'two' => 52, 'three' => 34, 'four' => 98, 'five' => 18];
        ?>
        <h2>Вывод массива</h2>
        <?php  
            foreach ($nums as $num) {
                echo $num, ', ';
            
             }
            ?>
</body>
</html>