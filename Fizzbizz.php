<?php

function fizzbizzCount()
{
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 15 == 0) {
            echo 'FizzBizz' . "\n";
        } elseif ($i % 3 == 0) {
            echo 'Fizz' . "\n";
        } elseif ($i % 5 == 0) {
            echo 'Bizz' . "\n";
        } else {
            echo $i . "\n";
        }
    }
}

fizzbizzCount();
