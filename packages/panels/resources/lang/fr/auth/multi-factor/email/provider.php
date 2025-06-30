<?php

return [
    'management_schema' => [
        'actions' => [
            'label' => 'Codes de vérification par e-mail',
            'below_content' => 'Recevez un code temporaire par e-mail pour vérifier votre identité lors de la connexion.',
            'messages' => [
                'enabled' => 'Activés',
                'disabled' => 'Désactivés',
            ],
        ],
    ],

    'login_form' => [
        'label' => 'Envoyer un code par e-mail',
        'code' => [
            'label' => 'Saisissez le code à 6 chiffres que nous vous avons envoyé par e-mail',
            'validation_attribute' => 'code',
            'actions' => [
                'resend' => [
                    'label' => 'Envoyer un nouveau code par e-mail',
                    'notifications' => [
                        'resent' => [
                            'title' => 'Un nouveau code vous a été envoyé par e-mail',
                        ],
                    ],
                ],
            ],
            'messages' => [
                'invalid' => 'Le code saisi est invalide.',
            ],
        ],
    ],
];
