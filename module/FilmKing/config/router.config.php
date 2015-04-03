<?php
return [ 
    'routes' => [
        'home' => [
            'type' => 'Zend\Mvc\Router\Http\Literal',
            'options' => [
                'route'    => '/',
                'defaults' => [
                    'controller' => 'HomeController',
                    'action'     => 'index',
                ],
            ],
            'may_terminate' => true,
            'child_routes'  => [
                'film' => [
                    'type'    => 'Literal',
                    'options' => [
                        'route'    => '/films',
                        'defaults' => [
                            'controller' => 'FilmController',
                            'action'     => 'index',
                        ]
                    ],
                    'may_terminate' => true,
                ],
                'films' => [
                    'type'    => 'Segment',
                    'options' => [
                        'route'    => '/films/[:id]/[:name]',
                        'constraints' => [
                            'id'   => '[0-9]+',
                            'name' => '[a-zA-Z0-9_-]+',
                        ],
                        'defaults' => [
                            'controller' => 'FilmController',
                            'action'     => 'film',
                        ]
                    ],
                    'may_terminate' => true,
                ],
            ],
        ],
    ],
];