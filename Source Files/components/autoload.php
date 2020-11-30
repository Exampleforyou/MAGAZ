<?php



spl_autoload_register(function ($class) {
    $paths = [
        '/models/',
        '/components/',
    ];

    foreach ($paths as $path_name) {
        $path = ROOTSF. $path_name. $class.'.php';
        if (is_file($path)) {
            include $path;
        }
    }
});

