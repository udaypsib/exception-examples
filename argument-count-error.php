<?php
declare(strict_types = 1);

try {
    echo strlen('hello', 9);
} catch (ArgumentCountError $e) {
    echo "\n\n";
    echo '****************** ] CAUGHT: ' . $e->getMessage() . ' [ **********************';
    echo "\n\n";
}
?>