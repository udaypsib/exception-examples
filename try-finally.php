<?php
require('set-exception-handler.php');
$i = isset($argv[1])? (int) $argv[1]: 19;

try {
    echo "Hello World\n\n";

    if ($i < 10) {
        throw new Exception('Invalid integer - \'' . $i . '\'');
    }

    echo "Normal flow try block ends here\n\n";
} finally {
    echo "=> Executed finally-block\n\n";
}