<?php

function someLogic()
{
    $i = 4;

    if ($i < 10) {
        throw new InvalidArgumentException('$i should contain number greater than or equal to 10 only');
    }
}

try {
    someLogic();

    echo "Normal code flow ends here.\n\n";
} catch(InvalidArgumentException $e) {
    echo "Caught: " . $e->getMessage(). "\n\n";
} finally {
    echo "This code block will be executed always\n\n";
}
