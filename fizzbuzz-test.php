<?php

function fizzBuzz($kelipatan)
{
    if ($kelipatan % 3 == 0 && $kelipatan % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($kelipatan % 3 == 0) {
        echo "Fizz\n";
    } elseif ($kelipatan % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $kelipatan . "\n";
    }
}

//looping angka 1-100
for ($i = 1; $i <= 100; $i++) {
    fizzBuzz($i);
}
