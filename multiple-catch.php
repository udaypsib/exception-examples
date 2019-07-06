<?php

$i = isset($argv[1])? $argv[1]: 4;

try {
    if (!is_numeric($i)) {
        throw new InvalidArgumentException('$i is not a valid argument.', 100);
    }

    if ($i > 10) {
        throw new UnexpectedValueException('$i should be less than or equal to 10.', 101);
    }

    echo "====] Normal execution ends here. [======\n\n";
} catch (InvalidArgumentException $e) {
    echo "Caught Invalid(" . $e->getCode() . "): ". $e->getMessage();
    echo "\nFile: " . $e->getFile();
    echo "\nLine: " . $e->getLine();
} catch (UnexpectedValueException $e) {
    echo "\nCaught Unexpected (" . $e->getCode() . "): " . $e->getMessage();
    echo "\nFile: " . $e->getFile();
    echo "\nLine: " . $e->getLine();
}

echo "\n\n";