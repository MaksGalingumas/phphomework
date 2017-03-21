<?php
define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);
 
spl_autoload_register(function ($class) {
    $file = ROOT . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        var_dump($file);
        require $file;
    }
});