<?php
return [
    'readCompany' => [
        'type' => 2,
        'description' => 'Посмотреть данные о компании',
    ],
    'createCompany' => [
        'type' => 2,
        'description' => 'Создать компанию',
    ],
    'updateCompany' => [
        'type' => 2,
        'description' => 'Редакировать данные о компании',
    ],
    'deleteCompany' => [
        'type' => 2,
        'description' => 'Удалить компаниию',
    ],
    'reader' => [
        'type' => 1,
        'children' => [
            'readCompany',
        ],
    ],
    'companyOwner' => [
        'type' => 1,
        'children' => [
            'createCompany',
            'reader',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'updateCompany',
            'companyOwner',
        ],
    ],
];
