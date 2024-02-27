<?php
spl_autoload_register(function ($className) {
    $file = dirname(__DIR__) . '/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($file)) {
        require $file;
    } else {
        echo "File $file not found";
    }
});