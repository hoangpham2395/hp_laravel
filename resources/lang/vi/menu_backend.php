<?php

return [
    'dashboard' => [
        'name' => 'Tổng quan',
    ],
    'admin' => [
        'name' => 'Quản trị viên',
        'actions' => [
            'index' => [
                'text' => 'Danh sách',
            ],
            'create' => [
                'text' => 'Thêm mới',
                'parents' => ['index'],
            ],
            'edit' => [
                'text' => 'Thay đổi',
                'parents' => ['index'],
            ],
        ],
    ],
];
