<?php

return [
	'default' => [
        'url' => [],
        'controller' => 'Frontend_Index',
        'action' => 'index',
    ],

    'admin' => [
        'url' => [],
        'controller' => 'Frontend_Admin',
        'action' => 'index',
    ],

    'logowanie' => [
        'url' => [],
        'controller' => 'Frontend_Index',
        'action' => 'login',
    ],

    'admin-login' => [
        'url' => [],
        'controller' => 'Frontend_Admin',
        'action' => 'login',
    ],

    'wyloguj' => [
        'url' => [],
        'controller' => 'Frontend_Index',
        'action' => 'logout'
    ],

    'wszystkie-ubezpieczenia' => [
        'url' => [],
        'controller' => 'Frontend_Index',
        'action' => 'insurancesAll'
    ],

    'twoje-ubezpieczenia' => [
        'url' => [],
        'controller' => 'Frontend_Index',
        'action' => 'insurancesList'
    ]
];
