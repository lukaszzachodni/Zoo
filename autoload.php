<?php

spl_autoload_register(function (string $className) {
    $basePath = __DIR__ . '/src/';
    $fileName = str_replace('\\', '/', $className) . '.php';
    if (file_exists($basePath . $fileName)) {
        require_once $basePath . $fileName;
    } else {
        throw new Exception("Can not load class: " . $className);
    }
});
