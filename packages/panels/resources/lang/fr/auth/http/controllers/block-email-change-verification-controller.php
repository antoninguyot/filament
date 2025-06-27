<?php

return [
    'notifications' => [
        'blocked' => [
            'title' => "Changement d'adresse e-mail bloqué",
            'body' => "Vous avez bloqué avec succès une tentative de changement d'adresse e-mail vers :email. Si vous n'êtes pas à l'origine de la demande initiale, veuillez nous contacter immédiatement.",
        ],

        'failed' => [
            'title' => "Échec du blocage du changement d'adresse e-mail",
            'body' => "Malheureusement, vous n'avez pas pu empêcher le changement de l'adresse e-mail vers :email, car elle avait déjà été vérifiée avant le blocage. Si vous n'êtes pas à l'origine de la demande initiale, veuillez nous contacter immédiatement.",
        ],
    ],
];
