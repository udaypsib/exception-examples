<?php
$i = isset($argv[1])? (int) $argv[1]: 13;

try {
    if ($i < 10) {
        throw new Exception('$i should contain number greater than or equal to 10 only');
    }

    echo "Normal code flow ends here.\n\n";
} catch(Exception $e) {
    echo "Caught: " . $e->getMessage(). "\n\n";
}