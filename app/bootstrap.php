<?php

$composerAutoload = dirname(dirname(dirname(__DIR__))) . '/autoload.php';
if (!file_exists($composerAutoload)) {
    $composerAutoload = dirname(__DIR__) . '/vendor/autoload.php';

    if (!file_exists($composerAutoload)) {
        echo "The 'vendor' folder is missing. You must run 'composer install' to resolve application dependencies.\nPlease see the README for more information.\n";
        exit(1);
    }
}

require $composerAutoload;