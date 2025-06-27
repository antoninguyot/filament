<?php

return [
    'label' => 'Configurer',

    'modal' => [
        'heading' => 'Configurer les codes de vérification par e-mail',
        'description' => 'Vous devrez saisir le code à 6 chiffres que nous vous enverrons par e-mail à chaque connexion ou action sensible. Vérifiez votre boîte mail pour un code de 6 chiffres afin de terminer la configuration.',
        'form' => [
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
        'actions' => [
            'submit' => [
                'label' => 'Activer les codes de vérification par e-mail',
            ],
        ],
    ],

    'notifications' => [
        'enabled' => [
            'title' => 'Les codes de vérification par e-mail ont été activés',
        ],
    ],
];
