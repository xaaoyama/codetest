<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019/02/18
 * Time: 10:36
 */

//3*3の多次元配列

$matrix = array(
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9)
);

//入力された文字列を配列に変換

$commands = str_split($argv[1]);
$commandsNumber = count($commands);

//入力された文字列によって配列を動かす

for ($i = 0; $i < $commandsNumber; $i++){
    switch ($commands[$i]){
        case "a":
            $tmpNumber = $matrix[0][0];
            $matrix[0][0] = $matrix[0][1];
            $matrix[0][1] = $matrix[0][2];
            $matrix[0][2] = $tmpNumber;
            break;
        case "b":
            $tmpNumber = $matrix[1][0];
            $matrix[1][0] = $matrix[1][1];
            $matrix[1][1] = $matrix[1][2];
            $matrix[1][2] = $tmpNumber;
            break;
        case "c":
            $tmpNumber = $matrix[2][0];
            $matrix[2][0] = $matrix[2][1];
            $matrix[2][1] = $matrix[2][2];
            $matrix[2][2] = $tmpNumber;
            break;
        case "d":
            $tmpNumber = $matrix[2][0];
            $matrix[2][0] = $matrix[1][0];
            $matrix[1][0] = $matrix[0][0];
            $matrix[0][0] = $tmpNumber;
            break;
        case "e":
            $tmpNumber = $matrix[2][1];
            $matrix[2][1] = $matrix[1][1];
            $matrix[1][1] = $matrix[0][1];
            $matrix[0][1] = $tmpNumber;
            break;
        case "f":
            $tmpNumber = $matrix[2][2];
            $matrix[2][2] = $matrix[1][2];
            $matrix[1][2] = $matrix[0][2];
            $matrix[0][2] = $tmpNumber;
            break;
        case "g":
            $tmpNumber = $matrix[2][2];
            $matrix[2][2] = $matrix[2][1];
            $matrix[2][1] = $matrix[2][0];
            $matrix[2][0] = $tmpNumber;
            break;
        case "h":
            $tmpNumber = $matrix[1][2];
            $matrix[1][2] = $matrix[1][1];
            $matrix[1][1] = $matrix[1][0];
            $matrix[1][0] = $tmpNumber;
            break;
        case "i":
            $tmpNumber = $matrix[0][2];
            $matrix[0][2] = $matrix[0][1];
            $matrix[0][1] = $matrix[0][0];
            $matrix[0][0] = $tmpNumber;
            break;
        case "j":
            $tmpNumber = $matrix[0][2];
            $matrix[0][2] = $matrix[1][2];
            $matrix[1][2] = $matrix[2][2];
            $matrix[2][2] = $tmpNumber;
            break;
        case "k":
            $tmpNumber = $matrix[0][1];
            $matrix[0][1] = $matrix[1][1];
            $matrix[1][1] = $matrix[2][1];
            $matrix[2][1] = $tmpNumber;
            break;
        case "l":
            $tmpNumber = $matrix[0][0];
            $matrix[0][0] = $matrix[1][0];
            $matrix[1][0] = $matrix[2][0];
            $matrix[2][0] = $tmpNumber;
            break;
    }
}

//配列の出力の処理

for ($i = 0; $i <= 2 ; $i++) {
    echo $matrix[0][$i];
}
echo "\n";
for ($i = 0; $i <= 2 ; $i++) {
    echo $matrix[1][$i];
}
echo "\n";
for ($i = 0; $i <= 2 ; $i++) {
    echo $matrix[2][$i];
}
