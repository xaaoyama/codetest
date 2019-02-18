<?php

namespace Xaaoyama\Codetest;

class PrimalNumbers
{
    public function findPrimeNumber()
    {
        $i = 0;
        while (true) {
            if (PrimalNumbers::isPrimeNumber($i)){
                echo $i . PHP_EOL;
            }
            $i++;
        }
    }

    static function isPrimeNumber($target)
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
}

$prime = new PrimalNumbers();
$prime->findPrimeNumber();
 