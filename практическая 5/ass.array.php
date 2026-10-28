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
        $mas = ['watermelon' => 'арбуз', 'melon' => 'дыня', 'cat' => 'кошка', 'pen' => 'ручка', 'dog' => 'собака', 'cake' => 'торт', 'milk' => 'молоко', 'egg' => 'яйцо', 'fly' => 'муха', 'butter' => 'масло'];
        foreach($mas as $en => $ru){
        echo "$en - $ru, ";
        }
        ?>
        <h2>Задание 2</h2>
        <?php 
        $slovo = 'торт';
        echo "слово для перевода - $slovo <br>";
        $n = 0;                          
        foreach($mas as $key => $ru){
            if($slovo == $ru){
                echo "$ru - $key";
                $n++;
                break;
            }
        }
        if($n == 0){                     
            echo "- такого слова нет в словаре";
        }
        ?>
        <h2>Задание 3</h2>
        <?php 
        $slovo = 'cake';
        echo "слово для перевода - $slovo <br>";
        $n = 0;                          
        foreach($mas as $key => $ru){
            if($slovo == $ru){
                echo "$ru - $key";
                $n++;
                break;
            }
            elseif($slovo == $key){
                echo "$key - $ru";
                $n++;
                break;
            }
        }
        if($n == 0){                     
            echo " такого слова нет в словаре";
        }
        ?>
        <h2>Задание 4</h2>
        <form action="">
            <p>Введите слово:</p>
            <input name="word">
            <input type="submit" value="Отправить">
        </form>
        <?php 
        $slovo = $_GET['word'];
        $n = 0;                        
        foreach($mas as $key => $ru){
            if($slovo == $ru){
                echo "$ru - $key";
                $n++;
                break;
            }
            elseif($slovo == $key){
                echo "$key - $ru";
                $n++;
                break;
            }
        }
        if($n == 0){                     
            echo " такого слова нет в словаре";
        }
        ?>
        <h2>Задание 5</h2>
        <?php
        $str = "banana";
        echo "слово - banana <br>"; 
        $arr = [];                   
        $len = strlen($str);     
        for($i = 0; $i < $len; $i++){
            $ch = $str[$i];           
            if(isset($arr[$ch])){   
                $arr[$ch] = $arr[$ch] + 1;
            }
            else{     
                $arr[$ch] = 1;
            }
        }
        foreach($arr as $bukva => $count){
            echo "$bukva => $count<br>";
        }
        ?>
        <h2>Задание 6</h2>
        <?php 
        $mas = ['watermelon' => 'арбуз', 'melon' => 'дыня', 'cat' => 'кошка', 'pen' => 'ручка', 'dog' => 'собака', 'cake' => 'торт', 'milk' => 'молоко', 'egg' => 'яйцо', 'fly' => 'муха', 'butter' => 'масло'];
        echo "исходный массив:";
        foreach($mas as $en => $ru){
        echo "<br> $en - $ru, ";
        }
        $pus =[];
        ?>
    </body>
</html>