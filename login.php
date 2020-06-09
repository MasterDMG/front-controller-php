<?php

$username = 'marcel';
$password = 'pass';

if($_POST){
    if (isset($_SESSION['user'])) {
        $messages = [
            'Jesteś aktualnie zalogowany!',
        ];
        $_SESSION['messages'] = $messages;

        header('Location: http://localhost'); 
        exit;
    }

    if ($_POST['login'] === $username && $_POST['pass'] === $password) {
        $userData = [
            'name' => $username,
        ];

        $_SESSION['user'] = $userData;

        $messages = [
            'Zostałeś poprawnie zalogowany!',
        ];
        $_SESSION['messages'] = $messages;
    }
}

header('Location: http://localhost'); 
exit;
