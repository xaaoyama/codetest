<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019/02/18
 * Time: 10:36
 */

//3*3の配列

//一列目
$first = array(1, 2, 3);
//二列目
$second = array(4, 5, 6);
//三列目
$third = array(7, 8, 9);

//入力された文字列を配列に変換

$array = str_split($argv[1]);
$char = count($array);

//入力された文字列によって配列を動かす

for ($i = 0; $i < $char; $i++){
    switch ($array[$i]){
        case "a":
            $tmp = $first[0];
            $first[0] = $first[1];
            $first[1] = $first[2];
            $first[2] = $tmp;
            break;
        case "b":
            $tmp = $second[0];
            $second[0] = $second[1];
            $second[1] = $second[2];
            $second[2] = $tmp;
            break;
        case "c":
            $tmp = $third[0];
            $third[0] = $third[1];
            $third[1] = $third[2];
            $third[2] = $tmp;
            break;
        case "d":
            $tmp = $third[0];
            $third[0] = $second[0];
            $second[0] = $first[0];
            $first[0] = $tmp;
            break;
        case "e":
            $tmp = $third[1];
            $third[1] = $second[1];
            $second[1] = $first[1];
            $first[1] = $tmp;
            break;
        case "f":
            $tmp = $third[2];
            $third[2] = $second[2];
            $second[2] = $first[2];
            $first[2] = $tmp;
            break;
        case "g":
            $tmp = $third[2];
            $third[2] = $third[1];
            $third[1] = $third[0];
            $third[0] = $tmp;
            break;
        case "h":
            $tmp = $second[2];
            $second[2] = $second[1];
            $second[1] = $second[0];
            $second[0] = $tmp;
            break;
        case "i":
            $tmp = $first[2];
            $first[2] = $first[1];
            $first[1] = $first[0];
            $first[0] = $tmp;
            break;
        case "j":
            $tmp = $first[2];
            $first[2] = $second[2];
            $second[2] = $third[2];
            $third[2] = $tmp;
            break;
        case "k":
            $tmp = $first[1];
            $first[1] = $second[1];
            $second[1] = $third[1];
            $third[1] = $tmp;
            break;
        case "l":
            $tmp = $first[0];
            $first[0] = $second[0];
            $second[0] = $third[0];
            $third[0] = $tmp;
            break;
    }
}

//配列の出力の処理

for ($i = 0; $i <= 2 ; $i++) {
    echo $first[$i];
}
echo "\n";
for ($i = 0; $i <= 2 ; $i++) {
    echo $second[$i];
}
echo "\n";
for ($i = 0; $i <= 2 ; $i++) {
    echo $third[$i];
}
