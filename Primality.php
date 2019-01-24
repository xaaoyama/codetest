<?php

namespace xaaoyama\codetest;

class Primality
{
    function priHan($end)
    {
        $prime = array();
        $i = 2;
        
        while (true) {
        if (isPrimeNumber($i)) {
            array_push($prime, $i);
        } else {
            if ($i >= $end) {
                break;
            }
        }
            $i++;
        }
        //取得した素数の出力
        foreach ($prime as $value) {
            echo $value . "\n";
        }
    }
}

function isPrimeNumber($target)
{
    //1以下は素数でない
    if ($target < 2) {
        return false;
    }

    //対象数値の平方根までの整数で
    //割り切れる数値は素数でない
    $max = floor(sqrt($target));
    for ($i = 2; $i <= $max; $i++) {
        if ($target % $i == 0) {
            return false;
        }
    }

    return true;
}

$pr = new Primality;
$pr->priHan(1000);
 