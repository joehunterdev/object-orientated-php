<?php
// can be callback of name or sting or array
spl_autoload_register(function ($className) {
    $root = dirname(__DIR__) . str_replace('\\', '/', $className) . '.php'; //nicely mapped to folder structure
});

if (file_exists($file)) {
    require $file;
} else {
    echo "File not found";
}