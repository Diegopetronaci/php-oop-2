<?php
   
    include __DIR__ . '/classes/User.php';
    include __DIR__ . '/classes/UserProfile.php';

    $utenti = [
        new User('xDIEGOitax', 'petronacidiego@gmail.com', 'password'),
        new User('Biasox', 'tommaso@gmail.com', 'password'),
        new User('Faber', 'fabrizio@gmail.com', 'password')
    ];

    foreach($utenti as $utente) {
        var_dump($utente->username);
    }