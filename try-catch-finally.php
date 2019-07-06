<?php
require('set-exception-handler.php');

$i = isset($argv[1])? (int) $argv[1]: 19;

function someLogic()
{
    if ($i < 10) {
        throw new InvalidArgumentException('$i should contain number greater than or equal to 10 only');
    }
}

try {
    someLogic($i);

    echo "Normal code flow ends here.\n\n";
} catch(InvalidArgumentException $e) {
    echo "Caught: " . $e->getMessage(). "\n\n";
} finally {
    echo "Finaly block => This code block will be executed always\n\n";
}
