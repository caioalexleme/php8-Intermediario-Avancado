<?php

//  ARRAYS MULTIDIMENSIONAIS

$empresa = [
    'Administração' => [
        'João administrador',
        'Carlos sócio'
    ],
    'Contabilidade' => [
        'Mariana',
        'Joaquim',
        'Antônio'
    ],
    'Armazém' => [
        'Gestores' => [
            'Carlos',
            'Marco'
        ],
        'Operadores' => [
            'Fernando',
            'Manoel',
            'Luís',
            'Ricardo'
        ]
        ],
    'Comerciais' => [
        'São Paulo' => [
            'São Bernardo' => [
                'Caio'
            ],
            'Santo André' => [
                'Vânia',
                'Johnson'
            ] 
            ],
            'Rio de Janeiro' => [
                'Valda'
            ]
    ]
];

print_r($empresa['Administração']);
print_r($empresa['Armazém']['Operadores']);
print_r($empresa['Comerciais']['São Paulo']['Santo André']);
print_r($empresa['Comerciais']['Rio de Janeiro']);