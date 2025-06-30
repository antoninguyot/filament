<?php

return [

    'single' => [

        'label' => 'Restaurer',

        'modal' => [

            'heading' => 'Restaurer :label',

            'actions' => [

                'restore' => [
                    'label' => 'Restaurer',
                ],

            ],

        ],

        'notifications' => [

            'restored' => [
                'title' => 'Enregistrement restauré',
            ],

        ],

    ],

    'multiple' => [

        'label' => 'Restaurer la sélection',

        'modal' => [

            'heading' => 'Restaurer la sélection :label',

            'actions' => [

                'restore' => [
                    'label' => 'Restaurer',
                ],

            ],

        ],

        'notifications' => [
            'restored' => [
                'title' => 'Enregistrements restaurés',
            ],

            'restored_partial' => [
                'title' => 'Restauré :count sur :total',
                'missing_authorization_failure_message' => "Vous n'avez pas l'autorisation de restaurer :count.",
                'missing_processing_failure_message' => ":count n'a pas pu être restauré.",
            ],

            'restored_none' => [
                'title' => 'Échec de la restauration',
                'missing_authorization_failure_message' => "Vous n'avez pas l'autorisation de restaurer :count.",
                'missing_processing_failure_message' => ":count n'a pas pu être restauré.",
            ],
        ],

    ],

];
