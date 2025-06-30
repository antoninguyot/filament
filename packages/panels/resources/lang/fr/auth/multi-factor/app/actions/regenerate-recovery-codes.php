<?php

return [
    'label' => 'Régénérer les codes de récupération',

    'modal' => [
        'heading' => "Régénérer les codes de récupération de l'application d'authentification",
        'description' => 'Si vous perdez vos codes de récupération, vous pouvez les régénérer ici. Les anciens codes seront immédiatement invalidés.',
        'form' => [
            'code' => [
                'label' => "Saisissez le code à 6 chiffres de l'application",
                'validation_attribute' => 'code',
                'messages' => [
                    'invalid' => 'Le code saisi est invalide.',
                ],
            ],
            'password' => [
                'label' => 'Ou saisissez votre mot de passe actuel',
                'validation_attribute' => 'mot de passe',
            ],
        ],
        'actions' => [
            'submit' => [
                'label' => 'Régénérer les codes de récupération',
            ],
        ],
    ],

    'notifications' => [
        'regenerated' => [
            'title' => 'De nouveaux codes de récupération ont été générés',
        ],
    ],

    'show_new_recovery_codes' => [
        'modal' => [
            'heading' => 'Nouveaux codes de récupération',
            'description' => "Veuillez sauvegarder les codes de récupération suivants dans un endroit sûr. Ils ne seront affichés qu'une seule fois, mais vous en aurez besoin si vous perdez l'accès à votre application d'authentification :",
            'actions' => [
                'submit' => [
                    'label' => 'Fermer',
                ],
            ],
        ],
    ],
];
