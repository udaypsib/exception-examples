<?php

$i = isset($argv[1])? (int) $argv[1]: 19;

try {
    echo "Hello World\n\n";
    try {
        if ($i < 10) {
            throw new Exception('Invalid integer - \'' . $i . '\'');
        }
    } catch (Exception $e) {
        echo "\n== ] ". $e->getMessage() . " [ ==\n";
    }

    echo "Normal flow try block ends here\n\n";
} finally {
    echo "Executed finally-block\n\n";
}