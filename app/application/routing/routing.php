<?php

return [
	'default' => [
	    'url' => [],
		'controller' => 'Frontend_Index',
		'action' => 'index',
	],

    'logowanie' => [
        'url' => [],
        'controller' => 'Frontend_Index',
        'action' => 'login',
    ],

    'wyloguj' => [
        'ulr' => [],
        'controller' => 'Fronted_Index',
        'action' => 'logout'
    ],

    'wszystkie-ubezpieczenia' => [
        'ulr' => [],
        'controller' => 'Fronted_Index',
        'action' => 'insurancesAll'
    ],

    'twoje-ubezpieczenia' => [
        'ulr' => [],
        'controller' => 'Fronted_Index',
        'action' => 'insurancesList'
    ]
];
