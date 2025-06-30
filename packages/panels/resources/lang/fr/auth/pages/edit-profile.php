<?php

return [

    'label' => 'Profil',

    'form' => [

        'email' => [
            'label' => 'Adresse Email',
        ],

        'name' => [
            'label' => 'Nom',
        ],

        'password' => [
            'label' => 'Nouveau mot de passe',
            'validation_attribute' => 'mot de passe',
        ],

        'password_confirmation' => [
            'label' => 'Confirmer le nouveau mot de passe',
            'validation_attribute' => 'confirmation du mot de passe',
        ],

        'current_password' => [
            'label' => 'Mot de passe actuel',
            'below_content' => 'Pour des raisons de sécurité, veuillez confirmer votre mot de passe pour continuer.',
            'validation_attribute' => 'mot de passe actuel',
        ],

        'actions' => [

            'save' => [
                'label' => 'Sauvegarder',
            ],

        ],

    ],

    'multi_factor_authentication' => [
        'label' => 'Authentification à deux facteurs (2FA)',
    ],

    'notifications' => [
        'email_change_verification_sent' => [
            'title' => "Demande de changement d'adresse e-mail envoyée",
            'body' => 'Une demande de modification de votre adresse e-mail a été envoyée à :email. Veuillez vérifier vos e-mails pour confirmer le changement.',
        ],

        'saved' => [
            'title' => 'Sauvegardé',
        ],

    ],

    'actions' => [

        'cancel' => [
            'label' => 'Retour',
        ],

    ],

];
