<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Условия if</h1>
        <?php 
        $a = 23;
        if ($a < 10) {
            echo 'арбуз арбуз';
        }
        elseif ($a < 20) {
            echo 'арбуз арбуз арбуз ам ам';
        }
        elseif ($a < 30) {
            echo 'гав гав гав гав';
        }
        ?>
    </body>
</html>