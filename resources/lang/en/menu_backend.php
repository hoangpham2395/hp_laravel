<?php

return [
    'dashboard' => [
        'name' => 'Dashboard',
    ],
    'admin' => [
        'name' => 'Administrator',
        'actions' => [
            'index' => [
                'text' => 'List',
            ],
            'create' => [
                'text' => 'Create',
                'parents' => ['index'],
            ],
            'edit' => [
                'text' => 'Edit',
                'parents' => ['index'],
            ],
        ],
    ],
];
