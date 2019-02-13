<?php

function showPrimeNumbers()
{
    $i = 0;
    while (true) {
        if (isPrimeNumber($i)) {
            echo $i . "\n";
        }
        $i++;
    }
}

function isPrimeNumber($target)
{
    //1以下は素数でない
    if ($target < 2) {
        return false;
    }

    //対象数値の平方根
    $max = sqrt($target);
    //対象数値の平方根以下の素数で割り切れる場合、その数値は素数ではない
    for ($i = 2; $i <= $max; $i++) {
        if ($target % $i == 0) {
            return false;
        }
    }
    //素数で割り切れなかった数値は素数
    return true;
}

showPrimeNumbers();
