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
        'url' => [],
        'controller' => 'Frontend_Index',
        'action' => 'insurancesAll'
    ],

    'zawrzyj-ubezpieczenie' => [
        'url' => ['insurance_id'],
        'controller' => 'Frontend_Index',
        'action' => 'addInsurance',
        'insurance_id' => 0
    ],

    'twoje-ubezpieczenia' => [
        'url' => ['insurance_id'],
        'controller' => 'Frontend_Index',
        'action' => 'insurancesList',

    ]
];
