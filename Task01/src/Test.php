<?php

namespace App\Test;

use App\Fraction;

function runTest()
{
    $m1 = new Fraction(12, 16);
    echo $m1 . "\n"; // 3/4

    $m2 = new Fraction(25, 4);
    echo $m2 . "\n"; // 6'1/4

    $m3 = $m1 -> add($m2);
    echo $m3 . "\n"; // 7'0/1

    $m4 = new Fraction(155, 343);
    $m5 = $m1 -> sub($m4);
    echo $m5 . "\n"; // 409/1372

    $m6 = new Fraction(168, 222);
    echo $m6 . "\n"; // 28/37
    echo $m6 -> getNumer() . "\n"; // 28
    echo $m6 -> getDenom() . "\n"; // 37

    $m7 = $m1 -> sub($m2);
    echo $m7 . "\n"; // -5'1/2
}
