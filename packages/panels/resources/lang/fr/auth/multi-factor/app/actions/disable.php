<?php

return [
    'label' => 'Désactiver',

    'modal' => [
        'heading' => "Désactiver l'application d'authentification",
        'description' => "Êtes-vous sûr de vouloir arrêter d'utiliser l'application d'authentification ? La désactiver retirera une couche de sécurité supplémentaire de votre compte.",
        'form' => [
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
        'actions' => [
            'submit' => [
                'label' => "Désactiver l'application d'authentification",
            ],
        ],
    ],

    'notifications' => [
        'disabled' => [
            'title' => "L'application d'authentification a été désactivée",
        ],
    ],
];
