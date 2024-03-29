<?php
require('set-exception-handler.php');

$input = isset($argv[1])? $argv[1]: 9;

if (!is_numeric($input)) {
    throw new \InvalidArgumentException('Expecting numeric input only.');
}

$input = (int) $input;

try {
    try {
        try {
            try {
                someLogic($input);

                echo "Code normal execution\n";
            } catch(LengthException $e) {
                throw new InvalidArgumentException("Length should be >= 5\n\n", 102, $e);
            } catch(LogicException $e) {
                echo 'Logical Exception: ' . $e->getMessage() . "\n";
            }
        } catch (InvalidArgumentException $e) {
            throw new UnexpectedValueException("This value is not expected.\n\n", 103, $e);;
        }
    } catch (UnexpectedValueException $e) {
        throw new RuntimeException("Runtime exception encountered.\n\n", 104, $e);;
    }

} catch (Exception $e) {
    echo "\nLast Exception: " . $e->getMessage();
    $i = 0;
    while($previousException = $e->getPrevious()) {
        $i++;
        echo "\n $i: " . $previousException->getMessage();
        $e = $previousException;
    }

    echo "\n======] PRINTED ALL EXCEPTIONS [=====\n\n";
}


function someLogic($i)
{
    if ($i < 5) {
        throw new LengthException("In correct length {$i}", 100);
    }

    if ($i === 5) {
        throw new LogicException('This is not expected', 101);
    }

    echo "======[ Normal flow ends ]=====\n\n";
}