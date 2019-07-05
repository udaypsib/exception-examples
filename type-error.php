<?php

include("set-exception-handler.php");

function myTest($x):int {
    return $x;
}

try {
    myTest('hello');
}catch(TypeError $e){
    echo "\n";
    echo "------- CAUGHT: " . $e->getMessage() . ' :--------';
    echo "\n\n";
}