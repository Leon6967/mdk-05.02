<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Функции</h1>
        <h2>Определение функции</h2>
        <?php 
            function sayHello()
            {
                echo "Hello, world!";
            }
            sayHello();
            sayHello();
            
        ?> 
        <h2>Передача в функциб параметров</h2>
        <?php 
        sayHello();
        function sayHello1($name){
            echo "<p>Hello, $name</p>";
        }
        sayHello1('Вася');
        ?>
        <h2>передача в функицю параметров</h2>
        <?php 
        function PrintFullName($fName, $lName){
            echo "$fName, $lName";
        }
        PrintFullName('Артур', 'Микаэлян');
        ?>
        <h2>Функции с параметрами по умолчанию</h2>
        <?php 
        function PrintUserInfo($fName, $lName, $role = 'user'){
            echo "<p>$fName $lName, роль - $role</p>";
        }
        PrintUserInfo('Повыд', 'Аулчерв');
        ?>
        <h2>Возвращаемое значение</h2>
        <?php 
        function getUserInfo($fName, $lName, $role = 'user'){
            return "$fName $lName, роль - $role";
        }
        $info = getUserInfo('Маша', 'Иванова');
        echo $info;
        function squareRect($l, $w){
            return $l * $w;
        }
        echo '<p> Площадь -' . squareRect(20, 5) . '</p>';
        ?>
    </body>
</html>