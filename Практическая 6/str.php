<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Практическая строки</h1>
    <h2>Задание 1</h2>
<?php
$str1 = "cat, (dog), mouse";
$start = 0;
$end = 0;
for ($i = 0; $i < strlen($str1); $i++){
    if($str1[$i] == "("){
        $start = $i;
    }
    if ($str1[$i] == ")"){
        $end = $i;
    }
}
echo "Внутри скобок строки '$str1' слова - ";
for ($i = $start + 1; $i < $end; $i++){
    echo $str1[$i];
}
?>

<h2>Задание 2</h2>
<?php
$str2 = "cabage, carrot, onion";
$count = 0;
for ($i = 0; $i < strlen($str2); $i++){
    if ($str2[$i] != " " && ($i == 0 || $str2[$i - 1] == " ")){
        $count++;
    }
}
echo "В строкe '$str2' - $count слов";
?>
>
<h2>Задание 3</h2>
<?php
$str = "apple anaconda melon orange strawberrie Anna";
$len = strlen($str);
$start = 0;

for ($i = 0; $i <= $len; $i++){
    if ($i == $len || $str[$i] == " "){
        $a = $str[$start];
        $b = $str[$i - 1];
        if ($a >= 'A' && $a <= 'Z') $a = chr(ord($a) + 32);
        if ($b >= 'A' && $b <= 'Z') $b = chr(ord($b) + 32);
        if ($a == $b) {
            for ($j = $start; $j < $i; $j++) echo $str[$j];
            echo "<br>";
        }
        $start = $i + 1;
    }
}
?>
<h2>Задание 4</h2>
<?php
$str4 = "Saint-Petersburg";
$count = 0; 
for ($i = 0; $i < strlen($str4); $i++){
    $found = false;
    for($j = 0; $j < $i; $j++){
        if ($str4[$i] == $str4[$j]){
            $found = true;
        }
    }
    if ($found == false){
        echo $str4[$i] . " ";
        $count++;
    }
}
echo "Количество разных символов: $count";
?>

<h2>Задание 5</h2>
<?php
$str5 = "kitty, puppy, baby";
$count = 0;
for ($i = 0; $i < strlen($str5); $i++){
    if ($str5[$i] == "r" || $str5[$i] == "k" || $str5[$i] == "t"){
        $count++;
    }
}
echo "Букв r k t в строке '$str5' - $count";
?>

<h2>Задание 6</h2>
<?php
$str6 = '   home  -   land    -    school   -  university  ';
$result = "";
$needSpace = false;

for ($i = 0; $i < strlen($str6); $i++){
    if ($str6[$i] != " "){
        if ($needSpace && $result != ""){
            $result .= " ";
        }
        $result .= $str6[$i];
        $needSpace = false;
    } else {
        $needSpace = true;
    }
}
echo "Исправленный вариант строки '$str6' - '$result'";
?>
<h2>Задание 7</h2>
<?php
$str = "Дана строка содержащая текст найти длину самого короткого слова";
$minLen = 0; $maxLen = 0;
$minWord = ""; $maxWord = "";
$first = true;
$len = strlen($str);
$start = 0;

for ($i = 0; $i <= $len; $i++){
    if ($i == $len || $str[$i] == " "){
        $wordLen = intdiv($i - $start, 2); 
        if ($wordLen > 0){
            $word = "";
            for ($j = $start; $j < $i; $j++){
                $word .= $str[$j];
            }
            if ($first){
                $minLen = $maxLen = $wordLen;
                $minWord = $maxWord = $word;
                $first = false;
            } else {
                if ($wordLen < $minLen){ $minLen = $wordLen; $minWord = $word; }
                if ($wordLen > $maxLen){ $maxLen = $wordLen; $maxWord = $word; }
            }
        }
        $start = $i + 1;
    }
}

echo "Короткое: '$minWord' ($minLen)<br>";
echo "Длинное:  '$maxWord' ($maxLen)";
?>
</body>
</html>