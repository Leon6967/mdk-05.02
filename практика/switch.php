<!DOCTYPE html>
<html lang="en">
    <body>
        <h1>Оператор выбора - switch</h1>
        <?php 
        $a = 11;
        switch($a){
            case 1:
                echo 'a = 1';
                break;
            case 2:
                echo 'a = 2';
                break;
            case 3:
                echo 'a = 3';
                break;
            case 4:
                echo 'a = 4';
                break;
            case 5:
                echo 'a = 5';
                break;
            case 10:
                echo 'a = 10';
                break;
            default:
            echo 'число не нашлось';
                break;
        }
        ?>
        <form action="">
            <p>Введите число:</p>
            <input name="number">
            <input type="submit" value="Отправить">
        </form>
        <?php 
        if(isset($_GET['number'])){
            $a = $_GET['number'];
                switch($a){
            case 1:
                echo 'a = 1';
                break;
            case 2:
                echo 'a = 2';
                break;
            case 3:
                echo 'a = 3';
                break;
            case 4:
                echo 'a = 4';
                break;
            case 5:
                echo 'a = 5';
                break;
            case 10:
                echo 'a = 10';
                break;
            default:
            echo 'число не нашлось';
                break;
                }
        }
        else{
             echo 'Данные не полученны';
            }
        ?>
    </body>
</html>