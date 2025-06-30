<?php

return [
    'label' => 'Configurer',

    'modal' => [
        'heading' => "Configurer l'application d'authentification",
        'description' => <<<'BLADE'
            Vous aurez besoin d'une application comme Google Authenticator (<x-filament::link href="https://itunes.apple.com/us/app/google-authenticator/id388497605" target="_blank">iOS</x-filament::link>, <x-filament::link href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" target="_blank">Android</x-filament::link>) pour terminer ce processus.
            BLADE,
        'content' => [
            'qr_code' => [
                'instruction' => 'Scannez ce QR code avec votre application d\'authentification :',
                'alt' => 'QR code à scanner avec une application d\'authentification',
            ],
            'text_code' => [
                'instruction' => 'Ou saisissez ce code manuellement :',
                'messages' => [
                    'copied' => 'Copié',
                ],
            ],
            'recovery_codes' => [
                'instruction' => "Veuillez sauvegarder les codes de récupération suivants dans un endroit sûr. Ils ne seront affichés qu'une seule fois, mais vous en aurez besoin si vous perdez l'accès à votre application d'authentification :",
            ],
        ],
        'form' => [
            'code' => [
                'label' => "Saisissez le code à 6 chiffres de l'application",
                'validation_attribute' => 'code',
                'below_content' => 'Vous devrez saisir ce code à 6 chiffres à chaque connexion ou action sensible.',
                'messages' => [
                    'invalid' => 'Le code saisi est invalide.',
                ],
            ],
        ],
        'actions' => [
            'submit' => [
                'label' => "Activer l'application d'authentification",
            ],
        ],
    ],

    'notifications' => [
        'enabled' => [
            'title' => "L'application d'authentification a été activée",
        ],
    ],
];
