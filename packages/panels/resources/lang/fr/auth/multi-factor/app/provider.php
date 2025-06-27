<?php

return [
    'management_schema' => [
        'actions' => [
            'label' => "Application d'authentification",
            'below_content' => 'Utilisez une application sécurisée pour générer un code temporaire afin de vérifier la connexion.',
            'messages' => [
                'enabled' => 'Activée',
                'disabled' => 'Désactivée',
            ],
        ],
    ],

    'login_form' => [
        'label' => "Utilisez un code de votre application d'authentification",
        'code' => [
            'label' => "Saisissez le code à 6 chiffres de l'application",
            'validation_attribute' => 'code',
            'actions' => [
                'use_recovery_code' => [
                    'label' => 'Utiliser plutôt un code de récupération',
                ],
            ],
            'messages' => [
                'invalid' => 'Le code saisi est invalide.',
            ],
        ],
        'recovery_code' => [
            'label' => 'Ou saisissez un code de récupération',
            'validation_attribute' => 'code de récupération',
            'messages' => [
                'invalid' => 'Le code de récupération saisi est invalide.',
            ],
        ],
    ],
];
