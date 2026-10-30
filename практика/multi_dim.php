<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
        <body>
            <h1>Многомерные массивы</h1>
            <h2>Объявление</h2>
            <?php 
            $animals =[['кот', 'собака'], ['Голубь', 'Синица', 'Пингвин'],['Лосось', 'Щука']];
            ?>
            <h2>Вывод на экран</h2>
            <?php 
            foreach($animals as $group){
                foreach($group as $animal){
                    echo "<p>$animal</p>";
                }
            }
            ?>
            <h2>Ассоциативные массивы</h2>
            <?php 
            $animals =['Животные' => ['кот', 'собака'], 'Птицы' => ['Голубь', 'Синица', 'Пингвин'], 'Рыбы' => ['Лосось', 'Щука']];
            foreach($animals as $key => $group){
                echo "<h3>$key</h3>";
                foreach($group as $animal){
                    echo "<p>$animal</p>";
                }
            }
            ?>
            <h2>Обращение к элементу</h2>
            <?php 
            echo $animals['Птицы'][1];
            ?>
            <h2>Еще пример</h2>
            <?php 
            $animals =['Животные' => [['name' => 'кот', 'ability' => 'мяукать'], ['name' => 'собака', 'ability' => 'гавкать']], 'Птицы' => [ ['name' => 'Голубь', 'ability' => 'летает'], ['name' =>'Синица', 'ability' => 'поет'], ['name' =>'Пингвин', 'ability' => 'красивый']], 'Рыбы' => [['name' => 'Лосось', 'ability' => 'плавает'], ['name' => 'Щука', 'ability' => 'мяукает']]];
            foreach($animals as $key => $group){
                echo "<h3>$key</h3>";
                foreach($group as $animal){;
                    echo '<p>' . $animal['name'] . '-' . $animal['ability'] . '</p>';
                    }
                }
            ?>
        </body>
    </html>