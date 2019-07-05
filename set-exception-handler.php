<?php

set_exception_handler(function($e) {
    $title = 'UNCAUGHT EXCEPTION';
    $msg = 'MESSAGE: ' . $e->getMessage();
    $file = 'FILE: ' . $e->getFile();
    $msgLength = strlen($msg);
    $fileLength = strlen($file);

    $maxLength = $msgLength > $fileLength? $msgLength : $fileLength;

    $maxLength += 4;
    $msgPaddingSize = $maxLength-$msgLength-1;
    $titlePaddingSize = $maxLength - strlen($title) -1;
    $filePaddingSize = $maxLength - $fileLength - 1;

    printf("+%'-{$maxLength}s\n| %s%{$titlePaddingSize}s\n", '+', $title,'|');
    printf("+%'-{$maxLength}s\n|%{$maxLength}s\n| %s%{$msgPaddingSize}s\n| %s%{$filePaddingSize}s\n|%{$maxLength}s\n+%'-{$maxLength}s\n\n", '+','|', $msg,'|', $file,'|', '|', '+');
});