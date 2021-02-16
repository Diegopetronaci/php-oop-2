<?php

    include __DIR__ . '/classes/User.php';
    include __DIR__ . '/classes/UserProfile.php';

    $utenti = [
    //new User('Diego', 'Petronaci', "09/01/1999", 3314215613, 'Biografia', 'xDIEGOitax', 'petronacidiego@gmail.com', 'password'),
        new User('xDIEGOitax', 'diego@gmail.com', 'password'),
        new User('Biasox', 'tommaso@gmail.com', 'password'),
        new User('Faber', 'fabrizio@gmail.com', 'password')
    ];

    /* foreach ($utenti as $utente) {
        var_dump($utente->username);
    } */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php foreach ($utenti as $utente) { ?>

        <h2> Utente ID: <?php echo $utente->username; ?> </h2>
        <p> Nome: <?php echo $utente->nome; ?> </p>
        <p> Cognome: <?php echo $utente->cognome; ?> </p>
        <p> Data di nascita: <?php echo $utente->data_di_nascita; ?> </p>
        <p> Email: <?php echo $utente->email; ?> </p>
        <p> Password: <?php echo $utente->password; ?> </p>

    <?php } ?>
</body>

</html>



