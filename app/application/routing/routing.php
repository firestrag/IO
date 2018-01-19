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

    'wyloguj' => [
        'ulr' => [],
        'controller' => 'Frontend_Index',
        'action' => 'logout'
    ],

    'wszystkie-ubezpieczenia' => [
        'ulr' => [],
        'controller' => 'Frontend_Index',
        'action' => 'insurancesAll'
    ],

    'twoje-ubezpieczenia' => [
        'ulr' => [],
        'controller' => 'Frontend_Index',
        'action' => 'insurancesList'
    ]
];
