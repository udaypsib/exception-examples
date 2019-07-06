<?php

try {
    $file = 'error.log';
    checkFile($file);
    $fp = fopen($file, 'r');
} catch (UnexpectedValueException $e) {
    echo "\nCaught: ". $e->getMessage();
    echo "\nCode: " . $e->getCode();
    echo "\nFile: " . $e->getFile();
    echo "\n\nTo handle this exception, file can be created or the mission can be aborted in controlled way.\n";
} finally {
    echo "\n=======] Finally block: if file was opened, close it here. [==========\n\n";
}

function checkFile($file)
{
    if (!file_exists($file)) {
        throw new UnexpectedValueException("File {$file} was not found.", 404);
    }
}