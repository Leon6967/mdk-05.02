<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
        <body>
         <h1>Практическая 5 - многомерные массивы</h1>
         <h2>Задание 1</h2>   
         <?php
         $array = [
 [1, 2, 3, 4],
 [5, 6, 7, 8],
 [9, 10, 11, 12]
];

echo "<table border='1'>\n";

foreach ($array as $row) {
 echo "<tr>\n";
 foreach ($row as $value) {
 echo "<td>$value</td>\n";
}
 echo "</tr>\n";
}

echo "</table>";
?>
<h2>Задание 2</h2>
<?php 
$squares = [[],[],[],[],[]];
?>
        </body>
    </html>