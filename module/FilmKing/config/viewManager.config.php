<?php
return [
    'display_not_found_reason' => true,
    'display_exceptions'       => true,
    'doctype'                  => 'HTML5',
    'not_found_template'       => 'error/404',
    'exception_template'       => 'error/index',
    'template_map' => [
        'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
        'home'          => __DIR__ . '/../view/filmking/index/index.phtml',
        'films/index'   => __DIR__ . '/../view/filmking/films/index.phtml',
        'error/404'     => __DIR__ . '/../view/error/404.phtml',
        'error/index'   => __DIR__ . '/../view/error/index.phtml',
    ],
    'template_path_stack' => [
        __DIR__ . '/../view',
    ],
];