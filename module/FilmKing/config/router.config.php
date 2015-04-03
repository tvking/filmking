<?php
return [ 
    'routes' => [
        'home' => [
            'type' => 'Literal',
            'options' => [
                'route'    => '/',
                'defaults' => [
                    'controller' => 'HomeController',
                    'action'     => 'index',
                ],
            ],
            'may_terminate' => true,
            'child_routes'  => [
                'films' => [
                    'type'    => 'Literal',
                    'options' => [
                        'route'    => 'films',
                        'defaults' => [
                            'controller' => 'FilmController',
                            'action'     => 'index',
                        ]
                    ],
                    'may_terminate' => true,
                    'child_routes'  => [
                        'film' => [
                            'type'    => 'Segment',
                            'options' => [
                                'route'    => '/[:id]/[:name]',
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
        ],
    ],
];