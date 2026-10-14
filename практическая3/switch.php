<!DOCTYPE html>
<html lang="en">
    <body>
        <h1>Практическая 3</h1>
        <h2>Заданте 1</h2>
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
                echo 'a = one ';
                break;
            case 2:
                echo 'a = two ';
                break;
            case 3:
                echo 'a = three ';
                break;
            case 4:
                echo 'a = four ';
                break;
            case 5:
                echo 'a = five ';
                break;
            case 6:
                echo 'a = six';
                break;
            case 7:
                echo 'a = seven ';
                break;
            case 8:
                echo 'a = eight ';
                break;
            case 9:
                echo 'a = nine ';
                break;
            case 0:
                echo 'a = zero ';
                break;
            default:
            echo 'a number not in range of 0-9';
        }
        }
        ?>
        <h2>Задание 2</h2>
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
                    echo '1 января - новый год, 7 - января рождество.';
                    break;
                case 2:
                    echo '14 февраля - день святого Валентина, 23 феварля - день защитника Отечества';
                    break;
                case 3:
                    echo '8 марта - международный женский день';
                    break;
                case 4:
                    echo '12 апреля - пасха, день Космонавтики';
                    break;
                case 5:
                    echo '1 мая - праздник весны и труда, 9 мая - день Победы';
                    break;
                case 6:
                    echo '1 июня - день защиты детей, 12 июня - день России';
                    break;
                case 7:
                    echo '8 июля - день семьи, 10 июля - день воинской славы';
                    break;
                case 8:
                    echo '8 августа - международный день кошек';
                    break;
                case 9:
                    echo '1 сентября - день знаний, 3 сентября - день солидарности в борьбе с терроризмом ';
                    break;
                case 10:
                    echo '1 октября - день сухопутных войск';
                    break;
                case 11:
                    echo '4 ноября - день народного единства';
                    break;
                case 12:
                    echo '1 декября - день воинской славы России';
                    break;
                default:
                    echo 'Такого месяца не существует';
        }
        }
        ?>
        <h2>Задание 3</h2>
        <form action="">
            <p>Введите последнее число вашего значения:</p>
            <input name="number">
            <input type="submit" value="Отправить">
        </form>
        <?php 
        if(isset($_GET['number'])){
            $a = $_GET['number'];
        switch($a){
            case 1:
                echo 'последняя цифра квадрата числа = 1';
                break;
            case 2:
                echo 'последняя цифра квадрата числа = 4';
                break;
            case 3:
                echo 'последняя цифра квадрата числа = 9';
                break;
            case 4:
                echo 'последняя цифра квадрата числа = 6';
                break;
            case 5:
                echo 'последняя цифра квадрата числа = 5';
                break;
            case 6:
                echo 'последняя цифра квадрата числа = 6';
                break;
            case 7:
                echo 'последняя цифра квадрата числа = 9';
                break;
            case 8:
                echo 'последняя цифра квадрата числа = 4';
                break;
            case 9:
                echo 'последняя цифра квадрата числа = 1';
                break;
            case 0:
                echo 'последняя цифра квадрата числа = 0';
                break;
        }   
        }
        ?>
        <h2>Задание 4</h2>
        <form action="">
            <p>Введите число :</p>
            <input name="number">
            <input type="submit" value="Отправить">
        </form>
        <?php 
        if(isset($_GET['number'])){
            $a = $_GET['number'];
        switch($a){
            case 1:
                echo 'мне 1 год';
                break;
            case 2:
                echo 'мне 2 года';
                break;
            case 3:
                echo 'мне 3 года';
                break;
            case 4:
                echo 'мне 4 года';
                break;
            case 5:
                echo 'мне 5 лет';
                break;
            case 6:
                echo 'мне 6 лет';
                break;
            case 7:
                echo 'мне 7 лет';
                break;
            case 8:
                echo 'мне 8 лет';
                break;
            case 9:
                echo 'мне 9 лет';
                break;
            case 0:
                echo 'я еще не родился';
                break;
            case 10:
                echo 'мне 10 лет';
                break;
            case 11:
                echo 'мне 11 лет';
                break;
            case 12:
                echo 'мне 12 лет';
                break;
            case 13:
                echo 'мне 13 лет';
                break;
            case 14:
                echo 'мне 14 лет';
                break;
            case 15:
                echo 'мне 15 лет';
                break;
            case 16:
                echo 'мне 16 лет';
                break;
            case 17:
                echo 'мне 17 лет';
                break;
            case 18:
                echo 'мне 18 лет';
                break;
            case 19:
                echo 'мне 19 лет';
                break;
            case 20:
                echo 'мне 20 лет';
                break;
            case 21:
                echo 'мне 21 год';
                break;
            case 22:
                echo 'мне 22 года';
                break;
            case 23:
                echo 'мне 23 года';
                break;
            case 24:
                echo 'мне 24 года';
                break;
            case 25:
                echo 'мне 25 лет';
                break;
            case 26:
                echo 'мне 26 лет';
                break;
            case 27:
                echo 'мне 27 лет';
                break;
            case 28:
                echo 'мне 28 лет';
                break;
            case 29:
                echo 'мне 29 лет';
                break;
            case 30:
                echo 'мне 30 лет';
                break;
            case 31:
                echo 'мне 31 год';
                break;
            case 32:
                echo 'мне 32 года';
                break;
            case 33:
                echo 'мне 33 года';
                break;
            case 34:
                echo 'мне 34 года';
                break;
            case 35:
                echo 'мне 35 лет';
                break;
            case 36:
                echo 'мне 36 лет';
                break;
            case 37:
                echo 'мне 37 лет';
                break;
            case 38:
                echo 'мне 38 лет';
                break;
            case 39:
                echo 'мне 39 лет';
                break;
            case 40:
                echo 'мне 40 лет';
                break;
            case 41:
                echo 'мне 41 годт';
                break;
            case 42:
                echo 'мне 42 года';
                break;
            case 43:
                echo 'мне 43 года';
                break;
            case 44:
                echo 'мне 44 года';
                break;
            case 45:
                echo 'мне 45 лет';
                break;
            case 46:
                echo 'мне 46 лет';
                break;
            case 47:
                echo 'мне 47 лет';
                break;
            case 48:
                echo 'мне 48 лет';
                break;
            case 49:
                echo 'мне 49 лет';
                break;
            case 50:
                echo 'мне 50 лет';
                break;
            case 51:
                echo 'мне 51 год';
                break;
            case 52:
                echo 'мне 52 года';
                break;
            case 53:
                echo 'мне 53 года';
                break;
            case 54:
                echo 'мне 54 года';
                break;
            case 55:
                echo 'мне 55 лет';
                break;
            case 56:
                echo 'мне 56 лет';
                break;
            case 57:
                echo 'мне 57 лет';
                break;
            case 58:
                echo 'мне 58 лет';
                break;
            case 59:
                echo 'мне 59 лет';
                break;
            case 60:
                echo 'мне 60 лет';
                break;
            case 61:
                echo 'мне 61 год';
                break;
            case 62:
                echo 'мне 62 года';
                break;
            case 63:
                echo 'мне 63 года';
                break;
            case 64:
                echo 'мне 64 года';
            case 65:
                echo 'мне 65 лет';
                break;
            case 66:
                echo 'мне 66 лет';
                break;
            case 67:
                echo 'мне 67 лет';
                break;
            case 68:
                echo 'мне 68 лет';
                break;
            case 69:
                echo 'мне 69 лет';
                break;
            case 70:
                echo 'мне 70 лет';
                break;
            case 71:
                echo 'мне 71 год';
                break;
            case 72:
                echo 'мне 72 года';
                break;
            case 73:
                echo 'мне 73 года';
                break;
            case 74:
                echo 'мне 74 года';
                break;
            case 75:
                echo 'мне 75 лет';
                break;
            case 76:
                echo 'мне 76 лет';
                break;
            case 77:
                echo 'мне 77 лет';
                break;
            case 78:
                echo 'мне 78 лет';
                break;
            case 79:
                echo 'мне 79 лет';
                break;
            case 80:
                echo 'мне 80 лет';
                break;
            case 81:
                echo 'мне 81 год';
                break;
            case 82:
                echo 'мне 82 года';
                break;
            case 83:
                echo 'мне 83 года';
                break;
            case 84:
                echo 'мне 84 года';
                break;
            case 85:
                echo 'мне 85 лет';
                break;
            case 86:
                echo 'мне 86 лет';
                break;
            case 87:
                echo 'мне 87 лет';
                break;
            case 88:
                echo 'мне 88 лет';
                break;
            case 89:
                echo 'мне 89 лет';
                break;
            case 90:
                echo 'мне 90 лет';
                break;
            case 91:
                echo '91 год';
                break;
            case 92:
                echo 'мне 92 года';
                break;
            case 93:
                echo 'мне 93 года';
                break;
            case 94:
                echo 'мне 94 года';
                break;
            case 95:
                echo 'мне 95 лет';
                break;
            case 96:
                echo 'мне 96 лет';
                break;
            case 97:
                echo 'мне 97 лет';
                break;
            case 98:
                echo 'мне 98 лет';
                break;
            case 99:
                echo 'мне 99 лет';
                break;
            case 100:
                echo 'мне 100 лет';
                break;
            default:
            echo 'Я долгожитель';
        }   
        }
        ?>
    </body>
</html>