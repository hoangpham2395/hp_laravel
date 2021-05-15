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
            'show' => [
                'text' => 'Thông tin cá nhân',
                'parents' => ['index'],
            ],
            'confirm' => [
                'text' => 'Xác nhận thông tin',
                'parents' => ['index'],
            ],
        ],
    ],
];
