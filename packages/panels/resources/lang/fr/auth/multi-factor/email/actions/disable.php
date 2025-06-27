<?php

return [
    'label' => 'Désactiver',

    'modal' => [
        'heading' => 'Désactiver les codes de vérification par e-mail',
        'description' => 'Êtes-vous sûr de vouloir arrêter de recevoir des codes de vérification par e-mail ? La désactivation retirera une couche de sécurité supplémentaire de votre compte.',
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
                'label' => 'Désactiver les codes de vérification par e-mail',
            ],
        ],
    ],

    'notifications' => [
        'disabled' => [
            'title' => 'Les codes de vérification par e-mail ont été désactivés',
        ],
    ],
];
