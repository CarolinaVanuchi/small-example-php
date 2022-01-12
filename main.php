<?php

require 'algorithms.php';

    $algotithms = new Algorithms();

    echo $algotithms->reverseString('teste');
    echo PHP_EOL;
    echo $algotithms->reverseStringWithFor('teste');
    echo PHP_EOL;
    echo $algotithms->whatTriangle(1, 3, 4);
    echo PHP_EOL;
    for ($i = 0; $i <= 21; $i++) echo $algotithms->fibonacci($i) . PHP_EOL;
    echo PHP_EOL;
    echo $algotithms->factorial(5);
    echo PHP_EOL;
    echo $algotithms->factorialWithFor(5);
?>