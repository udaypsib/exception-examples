<?php

include("set-exception-handler.php");

try {
    throw new InvalidArgumentException('O ho, it is wrong. Be carefull!');
    $a = 5;
} catch (ArithmeticError $e) {
    echo "******** " . $e->getMessage() . " *********";
}